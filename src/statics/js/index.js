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
			{"name": "black", "type": "black", "thumb": "pearl_color/black_thumb.png", "image": "pearl_color/black.png", "price": 120},
			{"name": "blue", "type": "black", "thumb": "pearl_color/blue_thumb.png", "image": "pearl_color/blue.png", "price": 120},
			{"name": "green", "type": "black", "thumb": "pearl_color/green_thumb.png", "image": "pearl_color/green.png", "price": 120},
			{"name": "green_light", "type": "black", "thumb": "pearl_color/green_light_thumb.png", "image": "pearl_color/green_light.png", "price": 120},
			{"name": "gold", "type": "gold", "thumb": "pearl_color/gold_thumb.png", "image": "pearl_color/gold.png", "price": 120},
			{"name": "gold_light", "type": "gold", "thumb": "pearl_color/gold_light_thumb.png", "image": "pearl_color/gold_light.png", "price": 120},
			{"name": "pink", "type": "white", "thumb": "pearl_color/pink_thumb.png", "image": "pearl_color/pink.png", "price": 120},
			{"name": "white", "type": "white", "thumb": "pearl_color/white_thumb.png", "image": "pearl_color/white.png", "price": 120},
			{"name": "silver", "type": "white", "thumb": "pearl_color/silver_thumb.png", "image": "pearl_color/silver.png", "price": 120}
		], "ring_style": [
			{"name": "setting_small", "label": "Small Setting", "image": "ring_style/setting_small.png", "price": 320},
			{"name": "setting_big", "label": "Big Setting", "image": "ring_style/setting_big.png", "price": 120}
		], "ring_substyle": [
			{"name": "sub_level1", "type": "setting_small", "label": "Sub Leve 1", "image": "ring_substyle/base1_white.png", "price": 120},
			{"name": "sub_level2", "type": "setting_small", "label": "Sub Leve 2", "image": "ring_substyle/base4_white.png", "price": 120},
			{"name": "sub_level3", "type": "setting_big", "label": "Sub Leve 3", "image": "ring_substyle/base3_white.png", "price": 120},
			{"name": "sub_level4", "type": "setting_big", "label": "Sub Leve 4", "image": "ring_substyle/base2_white.png", "price": 120}
		], "ring_metal": [
		]}

		load_pearl_type(data.pearl_type);
		load_pearl_color(data.pearl_color);
		load_ring_style(data.ring_style);
		load_ring_substyle(data.ring_substyle);
		// load_ring_metal(data.ring_metal);

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
				$(".option_ring_substyle.new").attr({"data-name": ring_substyle[item].name, "data-type": ring_substyle[item].type, "data-image": ring_substyle[item].image}).find(".price_amount").text(ring_substyle[item].price);
				$(".option_ring_substyle.new").find(".label").text(ring_substyle[item].label);
				$(".option_ring_substyle.new").find(".image.thumb.ring").attr("src", "statics/img/" + ring_substyle[item].image);
				$(".option_ring_substyle.new").removeClass("new")
			}
		}

		// function load_ring_metal(ring_metal) {
		// 	for(item in ring_metal) {
		// 	}
		// }

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
			$(".ring_price").text($(this).attr("data-price"));
		});

		$(".option_pearl_size").on("click", function() {
			$(".ring_price").text($(this).attr("data-price"));
		});

		$(".option_ring_style").on("click", function() {
			$("#ring_substyle").show();
			$("#ring_substyle .substyle_name").html($(this).find(".label").text());
			$(".option_ring_substyle").addClass("hidden");
			$(".option_ring_substyle[data-type='"+$(this).attr("data-name")+"']").removeClass("hidden");
			$(".option_ring_substyle:not(.hidden):first").trigger("click");
		});

		$(".option_ring_substyle").on("click", function() {
			$("#ring_base").attr({"src": $(this).find(".image.ring").attr("src")}).removeClass("hidden");
			$(".ring_price").text($(this).attr("data-price"));
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
		if($(".photo #ring").attr("src") != "") {
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
});
