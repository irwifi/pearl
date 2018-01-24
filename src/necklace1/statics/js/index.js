$(() => {

	// $.get("api_url", function(data, status){
	let data = {
		"pearl_type": [
			{"name": "black", "thumb": "pearl_type/black_thumb.png", "price": 100},
			{"name": "gold",  "thumb": "pearl_type/gold_thumb.png",  "price": 200},
			{"name": "white", "thumb": "pearl_type/white_thumb.png", "price": 300}
		], "pearl_color": [
			{"name": "black", 		"type": "black", "thumb": "pearl_color/black_thumb.png",       "image": "pearl_color/black.png",       "price": 110},
			{"name": "blue",  		"type": "black", "thumb": "pearl_color/blue_thumb.png",        "image": "pearl_color/blue.png",        "price": 120},
			{"name": "green", 		"type": "black", "thumb": "pearl_color/green_thumb.png",       "image": "pearl_color/green.png",       "price": 130},
			{"name": "green_light", "type": "black", "thumb": "pearl_color/green_light_thumb.png", "image": "pearl_color/green_light.png", "price": 140},
			{"name": "gold", 		"type": "gold",  "thumb": "pearl_color/gold_thumb.png",        "image": "pearl_color/gold.png",        "price": 150},
			{"name": "gold_light",  "type": "gold",  "thumb": "pearl_color/gold_light_thumb.png",  "image": "pearl_color/gold_light.png",  "price": 160},
			{"name": "pink",   		"type": "white", "thumb": "pearl_color/pink_thumb.png",        "image": "pearl_color/pink.png",        "price": 170},
			{"name": "white",  		"type": "white", "thumb": "pearl_color/white_thumb.png",       "image": "pearl_color/white.png",       "price": 180},
			{"name": "silver", 		"type": "white", "thumb": "pearl_color/silver_thumb.png",      "image": "pearl_color/silver.png",      "price": 190}
		], "pearl_size": [
			{"name": "5.5", "label": "5.5 X 6mm", "thumb": "products/pearlsize1.png", "price": 110},
			{"name": "6.0", "label": "6 X 6.5mm", "thumb": "products/pearlsize2.png", "price": 110},
			{"name": "6.5", "label": "6.5 X 7mm", "thumb": "products/pearlsize3.png", "price": 110},
			{"name": "7.0", "label": "7.5 X 8mm", "thumb": "products/pearlsize4.png", "price": 110},
			{"name": "7.5", "label": "8 X 8.5mm", "thumb": "products/pearlsize5.png", "price": 110},
			{"name": "8.5", "label": "8.5 X 9mm", "thumb": "products/pearlsize6.png", "price": 110}
		],"rondelle": [
			{"name": "rond_5", "label": "Every 5 Pearls (8 total)",     "image": "products/option-rondelle1.png", "price": 400},
			{"name": "rond_3", "label": "Every 3 Pearls (14 total)",    "image": "products/option-rondelle2.png", "price": 500},
			{"name": "rond_2", "label": "Every 2 Pearls (21 total)",    "image": "products/option-rondelle3.png", "price": 500},
			{"name": "rond_1", "label": "Every Other Pearl (44 total)", "image": "products/option-rondelle4.png", "price": 500}
		], "necklace_length": [
			{"name": "16", "label": "16\"", "price": 400},
			{"name": "18", "label": "18\"", "price": 400},
			{"name": "22", "label": "22\"", "price": 400},
			{"name": "24", "label": "24\"", "price": 400},
			{"name": "30", "label": "30\"", "price": 400},
			{"name": "36", "label": "36\"", "price": 400}
		], "pearl_quality": [
			{"name": "AAA", "label": "AAA", "price": 110},
			{"name": "AA",  "label": "AA",  "price": 120},
			{"name": "A",   "label": "A",   "price": 130}
		], "clasp": [
			{"name": "dolor",   "label": "Dolor",   "price": 110},
			{"name": "egestas", "label": "Egestas", "price": 120},
			{"name": "sapien",  "label": "Sapien",  "price": 130}
		], "ring_substyle": [
			{"name": "sub_level1", "type": "setting_small", "label": "Sub Leve 1", "image": "ring_substyle/base1_white.png", "ring_base": "ring_base/base1.png", "price": 220},
			{"name": "sub_level2", "type": "setting_small", "label": "Sub Leve 2", "image": "ring_substyle/base4_white.png", "ring_base": "ring_base/base4.png", "price": 240},
			{"name": "sub_level3", "type": "setting_big", "label": "Sub Leve 3", "image": "ring_substyle/base3_white.png", "ring_base": "ring_base/base3.png", "price": 260},
			{"name": "sub_level4", "type": "setting_big", "label": "Sub Leve 4", "image": "ring_substyle/base2_white.png", "ring_base": "ring_base/base2.png", "price": 280}
		], "ring_metal": [
	]}

		load_pearl_type(data.pearl_type);
		load_pearl_color(data.pearl_color);
		load_rondelle(data.rondelle);
		load_ring_substyle(data.ring_substyle);
		load_pearl_size(data.pearl_size);

		load_btn_text_only(data.necklace_length, '.wrapper_length');
		load_btn_text_only(data.pearl_quality, '.wrapper_pearl_quality');
		load_btn_text_only(data.clasp, '.wrapper_clasp');

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

		function load_rondelle(rondelle) {
			for(item in rondelle) {
				$(".option_rondelle.sample").clone().addClass("new").removeClass("sample hidden").appendTo(".wrapper_rondelle");
				$(".option_rondelle.new").attr({"data-name": rondelle[item].name, "data-image": rondelle[item].image}).find(".price_amount").text(rondelle[item].price);
				$(".option_rondelle.new").find(".label").text(rondelle[item].label);
				$(".option_rondelle.new").find(".image.thumb").attr("src", "statics/img/" + rondelle[item].image);
				$(".option_rondelle.new").removeClass("new")
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
		function load_pearl_size(pearl_size) {
			for(item in pearl_size) {
				$(".option_pearl_size.sample").clone().addClass("new").removeClass("sample hidden").appendTo(".wrapper_pearl_size");
				$(".option_pearl_size.new").attr({"data-value": pearl_size[item].name}).find(".price_amount").text(pearl_size[item].price);
				$(".option_pearl_size.new").find(".label").text(pearl_size[item].label);
				$(".option_pearl_size.new").find(".image.thumb").attr("src", "statics/img/" + pearl_size[item].thumb);
				$(".option_pearl_size.new").removeClass("new")
			}
		}

		function load_btn_text_only(data, place){// place = ".wrapper" (string)
			for(item in data) {
				$(place+" .sample").clone().addClass("new").removeClass("sample hidden").appendTo(place);
				$(place+" .new").attr({"data-name": data[item].name,}).find(".price_amount").text(data[item].price);
				$(place+" .new").find(".label").text(data[item].label);
				$(place+" .new").removeClass("new");
			}
		}

		$(".item").click(function() {
			$(this).parent().find(".item").removeClass('selected');
			$(this).addClass('selected');
			setPrice();
		});

		$(".option_pearl_type").on("click", function() {
			$("#colorsempty").hide();
			$(".option_pearl_color").addClass("hidden");
			$(".option_pearl_color[data-type='"+$(this).attr("data-name")+"']").removeClass("hidden");
			$(".option_pearl_color:not(.hidden):first").trigger("click");
		});

		$(".option_pearl_size").on("click", function() {
			setPearlSize($(this).data('value'));
		});

		$(".option_pearl_color").on("click", function() {
			$("#body_outline").attr({"src": "statics/img/clear.png", "data-zoom-image": "statics/img/clear.png "}).data('type', 'with_body');
			$("#pearl").attr({"src": "statics/img/" + $(this).attr("data-image"), 'data-zoom-image': 'statics/img/' + $(this).attr("data-image")});
			zoomReset();
		});

		$(".rondelle input").on("change", function(event) {
			if($('#diamonds').prop("checked")) {
				$('#extra').removeClass('hidden');
			}
			else {$('#extra').addClass('hidden');
			$('#rondelle').addClass('hidden');}
		});


		$('.selectors a').on("click", function(event) {
			event.preventDefault();
			/*if($(this).data('type')=='with_body') var bg = "statics/img/body-outline.jpg";
			else var bg = "statics/img/clear.png";

			$(".photo #body_outline").attr({"src": bg, "data-zoom-image": bg}).data('type', $(this).data('type'));
			$('#rondelle').attr('src', getUrlRondelle());
			$(".photo #pearl").attr({"src": getUrlNecklace()});
			zoomReset();*/
		});

		$(".option_rondelle").on("click", function() {

		});

		$(".option_clasp").on("click", function() {
			$('#clasp').attr('src', getUrlClasp());
			zoomReset();
		});


		$(".metal").on("click", function() {
			$('#clasp').attr('src', getUrlClasp());
			zoomReset();
		});

		setTimeout(() => {
			$.each($('.option-list'), function(index, val) {
				$(".item:not('.hidden'):first", $(val)).trigger("click");
			});
		}, 100);


	$(".page1_link").on("click", () => {
		toStep(1);

		$("#body_outline").attr({"src": "statics/img/clear.png", "data-zoom-image": "statics/img/clear.png"}).data('type', 'with_body');
		$(".photo #pearl").attr({"src": getUrlNecklace()});
		$(".photo #clasp").attr('src', getUrlClasp());
		$('.selectors a').addClass('hidden');
		var size = $('.option_pearl_size.selected').data('value');
		setPearlSize(size);
		zoomReset();
	});

	$(".page2_link").on("click", () => {
		toStep(2);
	});


	$("#page1_submit").on("click", () => {
		toStep(2);
		$('.selectors a').removeClass('hidden');
		$('#pearl').css({width: '100%',	left: 0, marginTop: 0});
		$(".photo #body_outline").attr({"src": "statics/img/clear.png", "data-zoom-image": "statics/img/clear.png"}).data('type', 'without_body');
		$(".photo #pearl").attr({"src": getUrlNecklace()});
		$('#clasp').attr('src', getUrlClasp());
		zoomReset();
		$('html, body').animate({ scrollTop: $("#page2").offset().top }, 0);
	});


	$("#page2_submit").on("click", () => {

		toStep(3);
		zoomReset();

		$('html, body').animate({ scrollTop: $("#page3").offset().top }, 0);
	});

	$('.lightBox-link').simpleLightbox({showCounter:  true, widthRatio:  0.98, heightRatio: 0.98, loop: false});

	$('.lightBox-link').on('shown.simplelightbox', function () {
		var pearl = $('#pearl').attr('src');
		var width = $('.simple-lightbox .sl-image img').width();
		if($('#page1').css('display')=='block'){
			var bg = 'statics/img/clear.png';
			var clasp = 'statics/img/clear.png';
		}else{
			if($.trim($('#body_outline').data("type"))=='with_body') var bg = "statics/img/body-outline.jpg";
			else var bg = "statics/img/clear.png";
			var clasp = $('#clasp').attr('src');
		}

		$('.simple-lightbox .sl-image').append('<img src="'+bg+'" style="width:'+width+'px;">');
		$('.simple-lightbox .sl-image').append('<img src="'+pearl+'" style="width:'+width+'px;">');
		$('.simple-lightbox .sl-image').append('<img src="'+clasp+'" style="width:'+width+'px;">');

		$('.simple-lightbox .sl-image img').css('border', '1px solid #000');
	});

	//$("[data-slider]").bind("slider:ready slider:changed", function (event, data) {
	// 	$(this).data('value', data['value']);
	// 	tone(data['value']);
    //});

	function zoomReset() {
		$('.zoomContainer').remove();
		$('.photo #body_outline').removeData('elevateZoom');
		$('.photo #body_outline').elevateZoom({
			zoomWindowWidth: 565,
			zoomWindowHeight: 565,
			zoomWindowOffetx: 70,
			zoomWindowOffety: -31
		});
	}

	function setPearlSize(value){
		var width = value*6+49;
		var margin = (100-width)/2;
		$('#pearl').css({width: width +'%',	left: margin +'%', marginTop: margin/2 +'%'});
	}

	function setPrice(){
		var price = 0;
		$.each($('.item.selected .price_amount'), function(index, val) {
			 price += $(val).text()*1;
		});
		price = price+'';
		if (price > 3) {
   			price = price.replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
  		}
		$('.build-price .amount').text(price);
	}
	function toStep(step){// step [number]
		$(".page").not("#page"+step).hide();
		$("#page"+step).show();

		$(".separator").removeClass('active-left active-right');
		$(".separator").eq(step-1).addClass('active-left');
		if(step > 1) $(".separator").eq(step-2).addClass('active-right');

		$(".build-steps .step").removeClass('active inactive');
		switch (step) {
		   case 1: $(".step.first").addClass("active"); $(".step.second").add(".step.last").addClass("inactive");  break;
		   case 2: $(".step.second").addClass("active"); $(".step.last").addClass("inactive"); break;
		   case 3: $(".step.last").addClass("active"); break;
		   default: break;
		}
		$(".step."+step).addClass("active");
	}

});

/*
function tone(value){
    value = 1.125-value/4;
    $('#pearl').add('.zoom_ring_image').css({
         'filter'         : 'brightness('+value+')',
         '-webkit-filter' : 'brightness('+value+')',
         '-moz-filter'    : 'brightness('+value+')',
         '-o-filter'      : 'brightness('+value+')',
         '-ms-filter'     : 'brightness('+value+')'
    });
}*/

function getUrlNecklace(){
	var color = $('.option_pearl_color.selected').data('name');
	if($('#page1').css('display')=='block')	var url = 'statics/img/pearl_color/'+color+'.png';
	else var url = 'statics/img/products/necklace/'+color+'.jpg';
	return url;
}


function getUrlClasp(){
	if($('#page1').css('display')=='block')	{
		var url = 'statics/img/clear.png';
	}else {
		var clasp = $('.option_clasp.selected').data('name');
		var metal_color = $('.metal.selected').data('color');
		if (typeof metal_color == "undefined")  var metal_color = 'white';
		 var url = 'statics/img/products/clasp/'+clasp+'_'+metal_color+'.png';
	}
	return url;
}
