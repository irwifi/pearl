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
			{"name": "black",       "color": "BLK", "type": "black", "thumb": "pearl_color/black_thumb.png", "image": "pearl_color/black.png", "price": 110},
			{"name": "blue",        "color": "BLU", "type": "black", "thumb": "pearl_color/blue_thumb.png", "image": "pearl_color/blue.png", "price": 120},
			{"name": "green",       "color": "GRE", "type": "black", "thumb": "pearl_color/green_thumb.png", "image": "pearl_color/green.png", "price": 130},
			{"name": "green_light", "color": "LGR", "type": "black", "thumb": "pearl_color/green_light_thumb.png", "image": "pearl_color/green_light.png", "price": 140},
			{"name": "gold",        "color": "GLD", "type": "gold", "thumb": "pearl_color/gold_thumb.png", "image": "pearl_color/gold.png", "price": 150},
			{"name": "gold_light",  "color": "LGD", "type": "gold", "thumb": "pearl_color/gold_light_thumb.png", "image": "pearl_color/gold_light.png", "price": 160},
			{"name": "pink",        "color": "PNK", "type": "white", "thumb": "pearl_color/pink_thumb.png", "image": "pearl_color/pink.png", "price": 170},
			{"name": "white",       "color": "WHT", "type": "white", "thumb": "pearl_color/white_thumb.png", "image": "pearl_color/white.png", "price": 180},
			{"name": "silver",      "color": "SLV", "type": "white", "thumb": "pearl_color/silver_thumb.png", "image": "pearl_color/silver.png", "price": 190}
		], "ring_style": [
			{"name": "setting_small", "label": "Small Setting", "image": "ring_style/setting_small.png", "price": 400},
			{"name": "setting_big", "label": "Big Setting", "image": "ring_style/setting_big.png", "price": 500}
		], "ring_substyle": [
			{"name": "sub_level1", "type": "setting_small", "label": "Sub Leve 1", "image": "ring_substyle/base1_white.png", "ring_base": "Design029", "price": 220},
			{"name": "sub_level2", "type": "setting_small", "label": "Sub Leve 2", "image": "ring_substyle/base4_white.png", "ring_base": "Design021", "price": 240},
			{"name": "sub_level3", "type": "setting_big", "label": "Sub Leve 3",   "image": "ring_substyle/base3_white.png", "ring_base": "Design043", "price": 260},
			{"name": "sub_level4", "type": "setting_big", "label": "Sub Leve 4",   "image": "ring_substyle/base2_white.png", "ring_base": "Design056", "price": 280}
		], "ring_metal": [
		]}

		load_pearl_type(data.pearl_type);
		load_pearl_color(data.pearl_color);
		load_ring_style(data.ring_style);
		load_ring_substyle(data.ring_substyle);
		setImage();

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
				$(".option_pearl_color.new").attr({"data-name": pearl_color[item].name, "data-color": pearl_color[item].color, "data-type": pearl_color[item].type, "data-image": pearl_color[item].image}).find(".price_amount").text(pearl_color[item].price);
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
			setPrice();	
		});

		$(".option_pearl_type").on("click", function() {
			$(".option_pearl_color").addClass("hidden");
			$(".option_pearl_color[data-type='"+$(this).attr("data-name")+"']").removeClass("hidden");
			$(".option_pearl_color:not(.hidden):first").trigger("click");
		});

		$(".option_pearl_color").on("click", function() {
			$(".ring_price").text($(this).find(".price_amount").text());
			setImage();
			zoomReset();
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
			setImage();			
			zoomReset();

		});

		$(".selectors .view-link").on("click", function(e) {
			e.preventDefault();
			$(".selectors a").removeClass('active');
			$(this).addClass('active');
			var href = $(this).attr('href');
			$('#ring').attr('src', href);
			setImage();
			zoomReset();
		});


		$('.selectors .around-link').on("click", function(e) {
			e.preventDefault();
			switchOn360();
		});


		$(".option_ring_metal").on("click", function() {
			var ring_name = $(".wrapper_ring_substyle").attr("data-ringbase").split(".");
			if(ring_name.length > 1) {
				$("#ring_base").attr({"src": "statics/img/"+ring_name[0]+"_"+$(this).attr("data-metal")+"."+ring_name[1]}).removeClass("hidden");
				$(".ring_price").text($(this).find(".price_amount").text());
			}
			$(".wrapper_ring_metal").attr({"data-metal": $(this).attr("data-metal")});
			setImage();
			zoomReset();
		});

		setTimeout(() => {
			$.each($('.option-list').not('.size-option-list'), function(index, val) {
				$(".item:not('.hidden'):first", $(val)).trigger("click");
			});
			$('.metal').eq(2).trigger("click");
		}, 100);
	// });

	$(".page1_link").on("click", () => {
		toStep(1);
		$('.selectors a').addClass('hidden');
		$(".zoomContainer .zoom_ring_image").addClass('hidden');
	});

	$(".page2_link").on("click", () => {
		toStep(2);
	});

	$("#page1_submit").on("click", () => {
		toStep(2);
		$('.selectors a').removeClass('hidden');
		$('html, body').animate({ scrollTop: $("#page2").offset().top }, 100);
		setImage();
		setRingPreview();
		zoomReset();

		if($(".photo #ring").attr("src") != "") {
			$(".photo #ring").removeClass("hidden");
			$(".zoomContainer .zoom_ring_image").removeClass('hidden');
		}
	});

	$("#page2_submit").on("click", () => {
		toStep(3);
		$('html, body').animate({ scrollTop: $("#page3").offset().top }, 100);
	});


	$('.lightBox-link').simpleLightbox({showCounter:  true, widthRatio:  0.98, heightRatio: 0.98, loop: false});

	$('.lightBox-link').on('shown.simplelightbox', function () {
		var img = $('#ring').attr('src');
		var width = $('.simple-lightbox .sl-image img').width();
		$('.simple-lightbox .sl-image img').css('border', '1px solid #000');
		$('.simple-lightbox .sl-image .ring_image_set').remove();
		$('.simple-lightbox .sl-image').append('<img src="'+img+'" style="width:'+width+'px;" class="ring_image_set">');
	});

	function zoomReset() {
		$('.zoomContainer').remove();
		$('.photo #ring').removeData('elevateZoom');
		$('.photo #ring').elevateZoom({
			zoomWindowWidth: 565,
			zoomWindowHeight: 565,
			zoomWindowOffetx: 70,
			zoomWindowOffety: -31
		});
	}

	function toStep(step){// step [number]
		$(".page").addClass('hidden');		
		$("#page"+step).removeClass('hidden');
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

function switchOff360(){
	var box = $('.around').closest('div');
	if(!box.hasClass('photo')){
		box.remove();
		$('.photo').prepend('<img class="around">');
	}
}
function switchOn360(){
	var box = $('.around').closest('div');
	if(!box.hasClass('photo')){
		box.remove();
		$('.photo').prepend('<img class="around">');
		$('.around-btn-off').addClass('hidden');
		$('.around-btn-on').removeClass('hidden');
	}else{
		var imgs360 = [];
		for (var x=1; x <= 24; x++)
		imgs360.push('statics/img/360/360-No-Pearl_' + x + ".png");
		$('.around').threesixty({images:imgs360, method:'auto', autoscrollspeed:200}); 

		$('.zoomContainer').remove();
		$('.photo #ring').removeData('elevateZoom');
		$('.around-btn-on').addClass('hidden');
		$('.around-btn-off').removeClass('hidden');
		setTimeout(() => {
		var a = $('.around').closest('div').css({
			height: '440px',
			width: '440px',
			position: 'absolute',
			zIndex: '500'
		});
		var pearl = $('.option_pearl_color.selected').attr("data-image");
		a.prepend('<img src="statics/img/'+pearl+'">');
		}, 200);
	}
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

function setRingPreview(){
	var perl  = $('.option_pearl_color.selected').attr('data-color');
	var btns = $('.option_ring_substyle');
	for(var i=1; i <= 4; i++){
		var btn = btns.eq(i);
		var src = 'statics/img/rings/'+btn.attr('data-ringbase')+'/side/W_' + perl + '.jpg';
		$('.ring_image img', btn).attr('src', src);
	}

	$('.option_ring_style img.thumb').eq(1).attr('src', 'statics/img/rings/Design021/front/W_' + perl + '.jpg');
	$('.option_ring_style img.thumb').eq(2).attr('src', 'statics/img/rings/Design043/front/W_' + perl + '.jpg');
}

function setImage(){
	switchOff360();
	if($('#page1').hasClass('hidden')){
		if(!base) var base = $('.option_ring_substyle.selected').attr('data-ringbase');
		var metal = $('.option_ring_metal.selected').attr('data-metal');
		var perl  = $('.option_pearl_color.selected').attr('data-color');
		var url = [];
		url[0] = 'statics/img/rings/'+base+'/side/' + metal + '_' + perl + '.jpg';
		url[1] = 'statics/img/rings/'+base+'/lay/' + metal + '_' + perl + '.jpg';
		url[2] = 'statics/img/rings/'+base+'/front/' + metal + '_' + perl + '.jpg';
		url[3] = 'statics/img/rings/'+base+'/top/' + metal + '_' + perl + '.jpg';
		var links = $('.photo .selectors a');
		for (var i=0; i<4; i++){
				links.eq(i).attr('href', url[i]);
				$('img', links.eq(i)).attr('src', url[i]);
			}
		var index =  $('.selectors a').index($('.selectors a.active'));
		$('#ring').attr({'src': url[index], 'data-zoom-image': url[index]});
	}
	else{
		var active_color = $(".option_pearl_color.selected");
		$("#ring").attr({"src": "statics/img/" + active_color.attr("data-image"), 'data-perl': active_color.attr("data-color"), 'data-zoom-image': 'statics/img/' + active_color.attr("data-image")});
	}
}

