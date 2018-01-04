$(() => {
	$('input').iCheck({
		checkboxClass: 'icheckbox_square-red',
		radioClass: 'iradio_square-red',
		increaseArea: '20%' // optional
	});
	$('input').on('ifClicked', function(event) {
		$("div#extra").toggle();
	});
	$('input#pearls').on('ifClicked', function(event) {
		$("#pearlsonly").show();
		$("#withdiamonds").hide();
	});
	$('input#diamonds').on('ifClicked', function(event) {
		$("#pearlsonly").hide();
		$("#withdiamonds").show();
	});
	$('.tooltip').tooltipster({
		maxWidth: 360
	});

	// $.get("api_url", function(data, status){
		let data = {"pearl_type": [
			{"name": "black", "thumb": "pearl_type/black_thumb.png", "price": 100},
			{"name": "gold", "thumb": "pearl_type/gold_thumb.png", "price": 200},
			{"name": "white", "thumb": "pearl_type/white_thumb.png", "price": 300}
		], "pearl_color": [
			{"name": "black", "type": "black", "thumb": "pearl_color/black_thumb.png", "image": "pearl_color/black.png", "price": 110},
			{"name": "blue", "type": "black", "thumb": "pearl_color/blue_thumb.png", "image": "pearl_color/blue.png", "price": 120},
			{"name": "green", "type": "black", "thumb": "pearl_color/green_thumb.png", "image": "pearl_color/green.png", "price": 130},
			{"name": "green_light", "type": "black", "thumb": "pearl_color/green_light_thumb.png", "image": "pearl_color/green_light.png", "price": 140},
			{"name": "gold", "type": "gold", "thumb": "pearl_color/gold_thumb.png", "image": "pearl_color/gold.png", "price": 150},
			{"name": "gold_light", "type": "gold", "thumb": "pearl_color/gold_light_thumb.png", "image": "pearl_color/gold_light.png", "price": 160},
			{"name": "pink", "type": "white", "thumb": "pearl_color/pink_thumb.png", "image": "pearl_color/pink.png", "price": 170},
			{"name": "white", "type": "white", "thumb": "pearl_color/white_thumb.png", "image": "pearl_color/white.png", "price": 180},
			{"name": "silver", "type": "white", "thumb": "pearl_color/silver_thumb.png", "image": "pearl_color/silver.png", "price": 190}
		], "ring_style": [
			{"name": "setting_small", "label": "Small Setting", "image": "ring_style/setting_small.png", "price": 400},
			{"name": "setting_big", "label": "Big Setting", "image": "ring_style/setting_big.png", "price": 500}
		], "ring_substyle": [
			{"name": "sub_level1", "type": "setting_small", "label": "Sub Leve 1", "image": "ring_substyle/base1_white.png", "ring_base": "ring_base/base1.png", "price": 220},
			{"name": "sub_level2", "type": "setting_small", "label": "Sub Leve 2", "image": "ring_substyle/base4_white.png", "ring_base": "ring_base/base4.png", "price": 240},
			{"name": "sub_level3", "type": "setting_big", "label": "Sub Leve 3", "image": "ring_substyle/base3_white.png", "ring_base": "ring_base/base3.png", "price": 260},
			{"name": "sub_level4", "type": "setting_big", "label": "Sub Leve 4", "image": "ring_substyle/base2_white.png", "ring_base": "ring_base/base2.png", "price": 280}
		], "ring_metal": [
		]}

		load_pearl_type(data.pearl_type);
		load_pearl_color(data.pearl_color);
		load_ring_style(data.ring_style);
		load_ring_substyle(data.ring_substyle);

		function load_pearl_type(pearl_type) {
			for(item in pearl_type) {
				$(".option_pearl_type.sample").clone().addClass("new").removeClass("sample hidden").appendTo(".wrapper_pearl_type");
				$(".option_pearl_type.new").attr({"data-name": pearl_type[item].name, "data-image": pearl_type[item].image}).find(".price_amount").text(pearl_type[item].price);
				$(".option_pearl_type.new").find(".image.thumb").attr("src", "statics/img/" + pearl_type[item].thumb);
				$(".option_pearl_type.new").removeClass("new")
			}
		}

		function load_pearl_color(pearl_color) {
			for(item in pearl_color) {
				$(".option_pearl_color.sample").clone().addClass("new").removeClass("sample hidden").appendTo(".wrapper_pearl_color");
				$(".option_pearl_color.new").attr({"data-name": pearl_color[item].name, "data-type": pearl_color[item].type, "data-image": pearl_color[item].image}).find(".price_amount").text(pearl_color[item].price);
				$(".option_pearl_color.new").find(".image.thumb").attr("src", "statics/img/" + pearl_color[item].thumb);
				$(".option_pearl_color.new").removeClass("new")
			}
		}

		function load_ring_style(ring_style) {
			for(item in ring_style) {
				$(".option_ring_style.sample").clone().addClass("new").removeClass("sample hidden").appendTo(".wrapper_ring_style");
				$(".option_ring_style.new").attr({"data-name": ring_style[item].name, "data-image": ring_style[item].image}).find(".price_amount").text(ring_style[item].price);
				$(".option_ring_style.new").find(".label").text(ring_style[item].label);
				$(".option_ring_style.new").find(".image.thumb.ring").attr("src", "statics/img/" + ring_style[item].image);
				$(".option_ring_style.new").removeClass("new")
			}
		}

		function load_ring_substyle(ring_substyle) {
			for(item in ring_substyle) {
				$(".option_ring_substyle.sample").clone().addClass("new").removeClass("sample hidden").appendTo(".wrapper_ring_substyle");
				$(".option_ring_substyle.new").attr({"data-name": ring_substyle[item].name, "data-type": ring_substyle[item].type, "data-image": ring_substyle[item].image, "data-ringbase": ring_substyle[item].ring_base}).find(".price_amount").text(ring_substyle[item].price);
				$(".option_ring_substyle.new").find(".label").text(ring_substyle[item].label);
				$(".option_ring_substyle.new").find(".image.thumb.ring").attr("src", "statics/img/" + ring_substyle[item].image);
				$(".option_ring_substyle.new").removeClass("new")
			}
		}

		$(".item").click(function() {
			$(this).parent().find(".item").removeClass('selected');
			$(this).addClass('selected');
		});

		$(".option_pearl_type").on("click", function() {
			$("#colorsempty").hide();
			$("#colors").show();
			$(".option_pearl_color").addClass("hidden");
			$(".option_pearl_color[data-type='"+$(this).attr("data-name")+"']").removeClass("hidden");
			$(".option_pearl_color:not(.hidden):first").trigger("click");
		});

		$(".option_pearl_color").on("click", function() {
			$("#pearl").attr({"src": "statics/img/"+$(this).attr("data-image")});
			$(".ring_price").text($(this).find(".price_amount").text());
		});

		$(".option_pearl_size").on("click", function() {
			$(".ring_price").text($(this).find(".price_amount").text());
		});

		$(".option_ring_style").on("click", function() {
			$("#ring_substyle").show();
			$("#ring_substyle .substyle_name").html($(this).find(".label").text());
			$(".option_ring_substyle").addClass("hidden");
			$(".option_ring_substyle[data-type='"+$(this).attr("data-name")+"']").removeClass("hidden");
			$(".option_ring_substyle:not(.hidden):first").trigger("click");
		});

		$(".option_ring_substyle").on("click", function() {
			var ring_name = $(this).attr("data-ringbase").split(".");
			$("#ring_base").attr({"src":  "statics/img/"+ring_name[0]+"_"+$(".wrapper_ring_metal").attr("data-metal")+"."+ring_name[1]}).removeClass("hidden");
			$(".ring_price").text($(this).find(".price_amount").text());
			$(".wrapper_ring_substyle").attr({"data-ringbase": $(this).attr("data-ringbase")});
		});

		$(".option_ring_metal").on("click", function() {
			var ring_name = $(".wrapper_ring_substyle").attr("data-ringbase").split(".");
			if(ring_name.length > 1) {
				$("#ring_base").attr({"src": "statics/img/"+ring_name[0]+"_"+$(this).attr("data-metal")+"."+ring_name[1]}).removeClass("hidden");
				$(".ring_price").text($(this).find(".price_amount").text());
			}
			$(".wrapper_ring_metal").attr({"data-metal": $(this).attr("data-metal")});
		});

		setTimeout(() => {
			$(".option_pearl_type:nth-child(2)").trigger("click");
			$("#pearl").removeClass("hidden");
		}, 100);
	// });


	$(".page1_link").on("click", () => {
		$("#page1").show();
		$("#page2").hide();
		$("#page3").hide();
		$(".build-steps .step.first").removeClass("inactive").addClass("active");
		$(".build-steps .step.second").removeClass("active").addClass("inactive");
		$(".build-steps .step.last").removeClass("active").addClass("inactive");
		$(".photo #ring_base").addClass('hidden');
	});

	$(".page2_link").on("click", () => {
		$("#page2").show();
		$("#page3").hide();
		$(".build-steps .step.first").removeClass("active inactive");
		$(".build-steps .step.second").removeClass("inactive").addClass("active");
		$(".build-steps .step.last").removeClass("active").addClass("inactive");
	});

	$("#page1_submit").on("click", () => {
		$("#page1").hide();
		$("#page2").show();
		$(".build-steps .step.first").removeClass("active");
		$(".build-steps .step.second").removeClass("inactive").addClass("active");
		$('html, body').animate({ scrollTop: $("#page2").offset().top }, 100);

		var pearl_thumb = $(".photo #pearl").attr("src");
		$(".wrapper_ring_style .image.thumb.pearl").attr({"src": pearl_thumb});
		$(".wrapper_ring_substyle .image.thumb.pearl").attr({"src": pearl_thumb});
		if($(".photo #ring_base").attr("src") != "") {
			$(".photo #ring_base").removeClass("hidden");
		}
	});

	$("#page2_submit").on("click", () => {
		$("#page2").hide();
		$("#page3").show();
		$(".build-steps .step.second").removeClass("active");
		$(".build-steps .step.last").removeClass("inactive").addClass("active");
		$('html, body').animate({ scrollTop: $("#page3").offset().top }, 100);
	});

	$('.photo #pearl').elevateZoom({
		zoomWindowWidth: 565,
		zoomWindowHeight: 565,
		zoomWindowOffetx: 70,
		zoomWindowOffety: -31
	});

	$('.photo').simpleLightbox({showCounter:  true, widthRatio:  0.98, heightRatio: 0.98, loop: false});

	$('.photo').on('shown.simplelightbox', function () {
		var perl = $('.preview-perl').attr('src');
		var ring = $('.preview-ring').attr('src');
		var width = $('.simple-lightbox .sl-image img').width();
		var style = $('.set-style .selected .label').text();
		var metal = $('.set-metal .selected .label').text().toLowerCase();
		var color = perl_color = $('#page1 .set-pearl-color .selected').data('name').toLowerCase();
		$('.simple-lightbox .sl-image img').css('border', '1px solid #000');
		$('.simple-lightbox .sl-image div').text(style+' ring of '+metal+' with '+color+' perl');
		$('.simple-lightbox .sl-image').append('<img src="'+perl+'" style="width:'+width+'px;"><img src="'+ring+'" style="width:'+width+'px;">');
	});
});
