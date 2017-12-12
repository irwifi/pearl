$(() => {
	$(".page1_link").on("click", () => {
		$("#page1").show();
		$("#page2").hide();
		$("#page3").hide();
	});

	$(".page2_link").on("click", () => {
		$("#page2").show();
		$("#page3").hide();
	});

	$("#page1_submit").on("click", () => {
		$("#page1").hide();
		$("#page2").show();
		$('html, body').animate({ scrollTop: $("#page2").offset().top }, 100);
	});

	$("#page2_submit").on("click", () => {
		$("#page2").hide();
		$("#page3").show();
		$('html, body').animate({ scrollTop: $("#page3").offset().top }, 100);
	});

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

	$("#page1").find(".item1").click(function() {
		$(".mz-figure img").attr("src", "statics/img/"+$(this).attr("data-image"));
		$(".ring_price").text($(this).attr("data-price"));
	});

	$("#page1").find(".item2").click(function() {
		$(".mz-figure img").attr("src", "statics/img/"+$(this).attr("data-image"));
		$(".ring_price").text($(this).attr("data-price"));
	});

	$("#page1").find(".item3").click(function() {
		$(".mz-figure img").attr("src", "statics/img/" + $(this).attr("data-image")).css({ "height": "400px", "width": "400px" });
		$(".ring_price").text($(this).attr("data-price"));
	});

	$("#page2").find(".item1").click(function() {
		$(".mz-figure img").attr("src", "statics/img/" + $(this).attr("data-image")).css({ "height": "400px", "width": "400px" });
		$(".ring_price").text($(this).attr("data-price"));
	});

	$("#page2").find(".item_style").click(function() {
		$(".mz-figure img").attr("src", "statics/img/" + $(this).attr("data-image")).css({ "height": "400px", "width": "400px" });
		$(".ring_price").text($(this).attr("data-price"));
	});

	$("#page2").find(".item3").click(function() {
		$(".mz-figure img").attr("src", "statics/img/" + $(this).attr("data-image")).css({ "height": "400px", "width": "400px" });
		$(".ring_price").text($(this).attr("data-price"));
	});

	$(".item1").click(function() {
		$(".item1").removeClass('selected');
		$(this).addClass('selected');
	});
	$(".item2").click(function() {
		$(".item2").removeClass('selected');
		$(this).addClass('selected');
	});
	$(".item3").click(function() {
		$(".item3").removeClass('selected');
		$(this).addClass('selected');
	});
	$(".item4").click(function() {
		$(".item4").removeClass('selected');
		$(this).addClass('selected');
	});
	$(".item5").click(function() {
		$(".item5").removeClass('selected');
		$(this).addClass('selected');
	});
	$(".item6").click(function() {
		$(".item6").removeClass('selected');
		$(this).addClass('selected');
	});
	$(".item7").click(function() {
		$(".item7").removeClass('selected');
		$(this).addClass('selected');
	});
	$(".item8a").click(function() {
		$(".item8a").removeClass('selected');
		$(this).addClass('selected');
	});
	$(".item8b").click(function() {
		$(".item8b").removeClass('selected');
		$(this).addClass('selected');
	});
	$(".item8c").click(function() {
		$(".item8c").removeClass('selected');
		$(this).addClass('selected');
	});
	$(".item8d").click(function() {
		$(".item8d").removeClass('selected');
		$(this).addClass('selected');
	});
});
