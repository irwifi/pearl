$(() => {
	// $.get("api_url", function(data, status){
		let data = {"pearl_type": [
			{"name": "black", "thumb": "pearl_type/black_thumb.png", "image": "pearl_type/black.png", "price": 100},
			{"name": "gold", "thumb": "pearl_type/gold_thumb.png", "image": "pearl_type/gold.png", "price": 200},
			{"name": "white", "thumb": "pearl_type/white_thumb.png", "image": "pearl_type/white.png", "price": 300}
		], "pearl_color": [
			{"name": "black", "type": "black", "thumb": "pearl_color/black_thumb.png", "image": "pearl_color/black.png", "price": 120},
			{"name": "blue", "type": "black", "thumb": "pearl_color/blue_thumb.png", "image": "pearl_color/blue.png", "price": 120},
			{"name": "green", "type": "black", "thumb": "pearl_color/green_thumb.png", "image": "pearl_color/green.png", "price": 120},
			{"name": "green_light", "type": "black", "thumb": "pearl_color/green_light_thumb.png", "image": "pearl_color/green_light.png", "price": 120},
			{"name": "gold", "type": "gold", "thumb": "pearl_color/gold_thumb.png", "image": "pearl_color/gold.png", "price": 120},
			{"name": "gold_light", "type": "gold", "thumb": "pearl_color/gold_light_thumb.png", "image": "pearl_color/gold_light.png", "price": 120},
			{"name": "pink", "type": "white", "thumb": "pearl_color/pink_thumb.png", "image": "pearl_color/pink.png", "price": 120},
			{"name": "white", "type": "white", "thumb": "pearl_color/white_thumb.png", "image": "pearl_color/white.png", "price": 120},
			{"name": "silver", "type": "white", "thumb": "pearl_color/silver_thumb.png", "image": "pearl_color/silver.png", "price": 120}
		], "setting_style": [
			{"name": "style1", "thumb": "setting_style/style1.png"}
		], "lipsum_style": [
		], "metal_type": [
		]}

		let pearl_type = data.pearl_type;
		for(item in pearl_type) {
			$(".option_pearl_type.sample").clone().addClass("new").removeClass("sample hidden").appendTo(".wrapper_pearl_type");
			$(".option_pearl_type.new").attr({"data-name": pearl_type[item].name, "data-price": pearl_type[item].price, "data-image": pearl_type[item].image}).find(".price_amount").text(pearl_type[item].price);
			$(".option_pearl_type.new").find(".image.thumb").attr("src", "statics/img/" + pearl_type[item].thumb);
			$(".option_pearl_type.new").removeClass("new")
		}

		$(".option_pearl_type").on("click", () => {
			$("#colorsempty").hide();
			$("#colors").show();
		});

		let pearl_color = data.pearl_color;
		for(item in pearl_color) {
			$(".option_pearl_color.sample").clone().addClass("new").removeClass("sample").appendTo(".wrapper_pearl_color");
			$(".option_pearl_color.new").attr({"data-name": pearl_color[item].name, "data-type": pearl_color[item].type, "data-price": pearl_color[item].price, "data-image": pearl_color[item].image}).find(".price_amount").text(pearl_color[item].price);
			$(".option_pearl_color.new").find(".image.thumb").attr("src", "statics/img/" + pearl_color[item].thumb);
			$(".option_pearl_color.new").removeClass("new")
		}
	// });

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
		$(".option_pearl_color").hide();
		$(".option_pearl_color[data-type='"+$(this).attr("data-name")+"']").show();
	});

	$("#page1").find(".item2").click(function() {
		$(".mz-figure img").attr("src", "statics/img/"+$(this).attr("data-image"));
		$(".ring_price").text($(this).attr("data-price"));
	});

	$("#page1").find(".item3").click(function() {
		$(".mz-figure img").css({ "height": $(this).attr("data-size")+"px" });
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
