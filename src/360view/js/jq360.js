/*!
 * jQuery.jq360 image rotation
 * 
 */

jQuery.fn.jq360 = function (options) {
	options = options || {};
	options.images = options.images || [];
	options.background = options.background || [];
	options.method = options.method || "click" //can be click, mouse move or auto
	options.cycle = options.cycle || 1;
	options.resetMargin = options.resetMargin || 0;
	options.direction = options.direction || "forward";
	options.sensibility = options.sensibility || options.cycle * 0.35;
	options.autoscrollspeed = options.autoscrollspeed || 500;


	if (options.direction == "backward")
		options.images.reverse();

	return this.each(function () {
		var imgArr = [];
		var backgroundArr = [];
		var pic = $(this);
		pic.addClass('jq360-image')

		$(function () {
			var cache = [];
			var parent = $("<div>").addClass('jq360-parent');
			parent.css({
				height: pic.height(),
				width: pic.width()
			});
			pic.wrap(parent); //.css({ position: "relative", top: 0, left: 0 });
			parent = pic.parent();
			//Binding the progress bar
			var progressBg = $("<div></div>").addClass('jq360-progress-bg'); //.css({ width: parent.width() - 200 });
			var progressBar = $("<div></div>").addClass('jq360-progress-bar').data("progress", 0);
			var overlay = $("<div></div>").addClass('jq360-overlay').css({
				width: pic.width(),
				height: pic.height()
			});

			//Nasty overlay capturing all the events :P
			$(overlay).on('click', function (e) {
				e.preventDefault();
				e.stopPropagation();
			});
			$(overlay).on('mousedown touchmove', function (e) {
				e.preventDefault();
				e.stopPropagation();
			});
			//overlay.touch(function(e){e.preventDefault();e.stopPropagation();});

			parent.append(overlay).append(progressBg).append(progressBar);
			pic.css({
				cursor: "all-scroll"
			});


			var totalProgress = 0;
			var loaded = false;
			//ask browser to load all images.. I know this could be better but is just a POC
			var allImages = options.images.concat(options.background);

			$.each(allImages, function (index, record) {
				var o = $("<img>").attr("src", record).on('load', function () {
					if (index < options.images.length) {
						if (index > pic.data("tempIndex")) {
							pic.data("tempIndex", index)
							pic.attr("src", $(this).attr("src"))
							if (options.background.length > 0) {
								parent.css({
									'background-image': 'url(' + options.background[0] + ')'
								});
							}
						}
					}

					var progress = pic.parent().find(".jq360-progress-bar");
					totalProgress++;
					var maxsize = pic.parent().find(".jq360-progress-bg").width();
					var newWidth = (totalProgress / allImages.length) * maxsize;
					progress.stop(true, true).animate({
						width: newWidth
					}, 250);
					if (totalProgress == allImages.length - 1) {
						loaded = true;
						pic.parent().find(".jq360-overlay, .jq360-progress-bar, .jq360-progress-bg").remove();
					}
				});
				cache.push(o);
			});

			$(pic).on('loadBackground', function (event, data) {
				var backgroundArrImg = data.background || [];

				if (backgroundArrImg.length == 0) {
					return;
				}
				backgroundArr = [];
				for (var x = 1; x <= options.cycle; x++) {
					for (var z = 0; z < backgroundArrImg.length; z++) {
						backgroundArr.push(backgroundArrImg[z]);
					}
				}
				pic.parent().append(overlay).append(progressBg).append(progressBar);
				var totalProgress = 0;
				var loaded = false;
				var currentIndex = pic.data("tempIndex");
				var backgroundIndex = Math.floor(backgroundArr.length / imgArr.length * currentIndex);
				$.each(backgroundArr, function (index, record) {
					var o = $("<img>").attr("src", record).on('load', function () {
						if (index == backgroundIndex) {
							pic.parent().css({
								'background-image': 'url(' + backgroundArr[backgroundIndex] + ')'
							});
							pic.data("backgroundIndex", backgroundIndex);
						}

						var progress = pic.parent().find(".jq360-progress-bar");
						totalProgress++;
						var maxsize = pic.parent().find(".jq360-progress-bg").width();
						var newWidth = (totalProgress / backgroundArr.length) * maxsize;
						progress.stop(true, true).animate({
							width: newWidth
						}, 250);
						if (totalProgress == backgroundArr.length - 1) {
							loaded = true;
							pic.parent().find(".jq360-overlay, .jq360-progress-bar, .jq360-progress-bg").remove();
						}
					});
				});


			});

		})


		for (var x = 1; x <= options.cycle; x++) {
			for (var y = 0; y < options.images.length; y++) {
				imgArr.push(options.images[y]);
			}
			for (var z = 0; z < options.background.length; z++) {
				backgroundArr.push(options.background[z]);
			}
		}


		pic.data("currentIndex", 0).data("tempIndex", 0);
		pic.data("backgroundIndex", 0);
		pic.data("scaled", false);
		pic.data("touchCount", 0);
		var originalHeight = pic.height();
		var originalWidth = pic.width();

		function determineIndex(e) //e represent the event for newIndex
		{
			return Math.floor((e.pageX - pic.offset().left) / (pic.width() / imgArr.length))
		}

		function moveInViewport(e) //e represents the finger in question
		{
			$("#debug").text("left:" + e.pageX);
			var newTop = pic.data("refLocY") - pic.data("refTouchY") + e.pageY;
			var newLeft = pic.data("refLocX") - pic.data("refTouchX") + e.pageX;
			if (newLeft > 0) newLeft = 0;
			if (pic.parent().width() + Math.abs(newLeft) > pic.width())
				newLeft = -1 * pic.width() + pic.parent().width();
			if (newTop > 0) newTop = 0;
			if (pic.parent().height() + Math.abs(newTop) > pic.height())
				newTop = -1 * pic.height() + pic.parent().height();

			pic.css({
				left: newLeft,
				top: newTop
			});
		}

		$(pic).on('mousemove touchmove', function (evt) {
			evt.pageX = evt.pageX == undefined ? evt.originalEvent.touches[0].pageX : evt.pageX;
			evt.pageY = evt.pageY == undefined ? evt.originalEvent.touches[0].pageY : evt.pageY;
			if (!!pic.data("refTouchX") === false) {
				pic.data("refTouchX", evt.pageX);
				pic.data("refTouchY", evt.pageY);
				pic.data("refLocX", parseInt(pic.css("left")));
				pic.data("refLocY", parseInt(pic.css("top")));
			}

			evt.preventDefault();
			if (pic.data("enabled") == "1" || options.method == "mousemove") {
				if (evt.preventDefault) evt.preventDefault();

				var e = evt;
				if (pic.data("scaled") == false) {
					var distance = e.pageX - pic.data("refTouchX"); //distance hold the distance traveled with the finger so far..
					stripeSize = Math.floor(originalWidth / imgArr.length);
					var newIndex = pic.data("currentIndex") + Math.floor(distance * options.sensibility / stripeSize)
					if (newIndex < 0) {
						newIndex = imgArr.length - 1;
						pic.data("currentIndex", newIndex);
					}
					newIndex = newIndex % imgArr.length;
					if (newIndex == pic.data("currentIndex")) {
						return;
					}

					pic.attr("src", imgArr[newIndex]);
					pic.data("tempIndex", newIndex);

					if (backgroundArr.length > 0) {
						var backgroundIndex = Math.floor(backgroundArr.length / imgArr.length * newIndex);
						pic.parent().css({
							'background-image': 'url(' + backgroundArr[backgroundIndex] + ')'
						});
						pic.data("backgroundIndex", backgroundIndex);
					}

				} else { //The image needs to be moved in its viewport..
					moveInViewport(e);
				}
				return;
			}
		})

		if (options.method == "click") { //Certain binding will be done if and only if the method is "click" instead of "mousemove"
			$(pic).on('mousedown touchstart', function (e) {
				e.preventDefault();
				pic.data("enabled", "1");
			});

			$("body").on('mouseup touchend', function (e) {
				e.preventDefault();
				pic.data("enabled", "0");
				pic.data("currentIndex", pic.data("tempIndex"));
			});
		}

		if (options.method == "auto") {
			var speed = options.autoscrollspeed;
			var newIndex = 0;
			window.setInterval(function () {
				pic.attr("src", imgArr[++newIndex % imgArr.length])
				if (backgroundArr.length > 0) {
					var backgroundIndex = Math.floor(backgroundArr.length / imgArr.length * newIndex);
					pic.parent().css({
						'background-image': 'url(' + backgroundArr[backgroundIndex] + ')'
					});
					pic.data("backgroundIndex", backgroundIndex);
				}
			}, speed);
		}
	});
};