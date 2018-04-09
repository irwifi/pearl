$( ( ) => {
	$( 'input' ).iCheck( {
		checkboxClass: 'icheckbox_square-red',
		radioClass: 'iradio_square-red',
		increaseArea: '20%' // optional
	} );
	$( 'input' ).on( 'ifClicked', function( event ) {
		$( "div#extra" ).toggle( );
	} );
	$( 'input#pearls' ).on( 'ifClicked', function( event ) {
		$( "#pearlsonly" ).show( );
		$( "#withdiamonds" ).hide( );
	} );
	$( 'input#diamonds' ).on( 'ifClicked', function( event ) {
		$( "#pearlsonly" ).hide( );
		$( "#withdiamonds" ).show( );
	} );
	$( '.tooltip' ).tooltipster( {
		maxWidth: 360
	} );

	// $.get("api_url", function(data, status){
	let data = {
		"pearl_type": [
			{ "name": "black", "option": "BLK.png", "price": 100 },
			{ "name": "gold", "option": "GLD.png", "price": 200 },
			{ "name": "white", "option": "WHT.png", "price": 300 }
		],
		"pearl_color": [
			{ "name": "black", "color": "BLK", "type": "black", "option": "BLK.png", "image": "BLK.png", "price": 110 },
			{ "name": "blue", "color": "BLU", "type": "black", "option": "BLU.png", "image": "BLU.png", "price": 120 },
			{ "name": "green", "color": "GRN", "type": "black", "option": "GRN.png", "image": "GRN.png", "price": 130 },
			{ "name": "green_light", "color": "LGN", "type": "black", "option": "LGN.png", "image": "LGN.png", "price": 140 },
			{ "name": "gold", "color": "GLD", "type": "gold", "option": "GLD.png", "image": "GLD.png", "price": 150 },
			{ "name": "gold_light", "color": "LGD", "type": "gold", "option": "LGD.png", "image": "LGD.png", "price": 160 },
			{ "name": "pink", "color": "PNK", "type": "white", "option": "PNK.png", "image": "PNK.png", "price": 170 },
			{ "name": "white", "color": "WHT", "type": "white", "option": "WHT.png", "image": "WHT.png", "price": 180 },
			{ "name": "silver", "color": "SLV", "type": "white", "option": "SLV.png", "image": "SLV.png", "price": 190 }
		],
		"ring_style": [
			{ "name": "setting_small", "label": "Small Setting", "image": "style1.png", "price": 400 },
			{ "name": "setting_big", "label": "Big Setting", "image": "style2.png", "price": 500 }
		],
		"ring_substyle": [
			{ "name": "sub_level1", "type": "setting_small", "label": "Sub Leve 1", "image": "sub_style1.png", "ring_base": "Design029", "price": 220 },
			{ "name": "sub_level2", "type": "setting_small", "label": "Sub Leve 2", "image": "sub_style2.png", "ring_base": "Design021", "price": 240 },
			{ "name": "sub_level3", "type": "setting_big", "label": "Sub Leve 3", "image": "sub_style3.png", "ring_base": "Design043", "price": 260 },
			{ "name": "sub_level4", "type": "setting_big", "label": "Sub Leve 4", "image": "sub_style4.png", "ring_base": "Design056", "price": 280 }
		],
		"ring_metal": [
			{"price": 310},
			{"price": 320},
			{"price": 330},
			{"price": 340},
			{"price": 350},
			{"price": 360},
			{"price": 370},
			{"price": 380}
		]
	}

	load_pearl_type( data.pearl_type );
	load_pearl_color( data.pearl_color );
	load_ring_style( data.ring_style );
	load_ring_substyle( data.ring_substyle );
	load_ring_color( data.ring_metal );
	load_events( );

	function load_pearl_type( pearl_type ) {
		for ( item in pearl_type ) {
			$( ".option_pearl_type.sample" ).clone( ).addClass( "new" ).removeClass( "sample hidden" ).appendTo( ".wrapper_pearl_type" );
			$( ".option_pearl_type.new" ).attr( { "data-name": pearl_type[ item ].name, "data-image": pearl_type[ item ].image } ).find( ".price_amount" ).text( pearl_type[ item ].price );
			$( ".option_pearl_type.new" ).find( ".image.option" ).attr( "src", "statics/img/products/rings/options/pearl/type/" + pearl_type[ item ].option );
			$( ".option_pearl_type.new" ).removeClass( "new" )
		}
	}

	function load_pearl_color( pearl_color ) {
		for ( item in pearl_color ) {
			$( ".option_pearl_color.sample" ).clone( ).addClass( "new" ).removeClass( "sample hidden" ).appendTo( ".wrapper_pearl_color" );
			$( ".option_pearl_color.new" ).attr( { "data-name": pearl_color[ item ].name, "data-color": pearl_color[ item ].color, "data-type": pearl_color[ item ].type, "data-image": pearl_color[ item ].image } ).find( ".price_amount" ).text( pearl_color[ item ].price );
			$( ".option_pearl_color.new" ).find( ".image.option" ).attr( "src", "statics/img/products/rings/options/pearl/color/" + pearl_color[ item ].option );
			$( ".option_pearl_color.new" ).removeClass( "new" )
		}
	}

	function load_ring_style( ring_style ) {
		var pearl_image = $( ".wrapper_pearl_color" ).attr( "data-image" );
		for ( item in ring_style ) {
			$( ".option_ring_style.sample" ).clone( ).addClass( "new" ).removeClass( "sample hidden" ).appendTo( ".wrapper_ring_style" );
			$( ".option_ring_style.new" ).attr( { "data-name": ring_style[ item ].name, "data-image": ring_style[ item ].image } ).find( ".price_amount" ).text( ring_style[ item ].price );
			$( ".option_ring_style.new" ).find( ".label" ).text( ring_style[ item ].label );
			$( ".option_ring_style.new" ).find( ".image.ring" ).attr( "src", "statics/img/products/rings/options/ring_base/style/" + ring_style[ item ].image );
			$( ".option_ring_style.new" ).removeClass( "new" )
		}
	}

	function load_ring_substyle( ring_substyle ) {
		for ( item in ring_substyle ) {
			$( ".option_ring_substyle.sample" ).clone( ).addClass( "new" ).removeClass( "sample hidden" ).appendTo( ".wrapper_ring_substyle" );
			$( ".option_ring_substyle.new" ).attr( { "data-name": ring_substyle[ item ].name, "data-type": ring_substyle[ item ].type, "data-image": ring_substyle[ item ].image, "data-ringbase": ring_substyle[ item ].ring_base } ).find( ".price_amount" ).text( ring_substyle[ item ].price );
			$( ".option_ring_substyle.new" ).find( ".label" ).text( ring_substyle[ item ].label );
			$( ".option_ring_substyle.new" ).find( ".image.ring" ).attr( "src", "statics/img/products/rings/options/ring_base/substyle/" + ring_substyle[ item ].image );
			$( ".option_ring_substyle.new" ).removeClass( "new" )
		}
	}

	function load_ring_color( ring_metal ) {
		for ( var i = 0; i < 7; i++ ) {
			$( ".option_ring_metal" ).eq(i).find( ".price_amount" ).text( ring_metal[i].price );
		}
	}

	function load_events( ) {
		$( ".item" ).click( function( ) {
			$( this ).parent( ).find( ".item" ).removeClass( 'selected' );
			$( this ).addClass( 'selected' );
			setPrice( );
		} );

		$( ".option_pearl_type" ).on( "click", function( ) {
			$( ".option_pearl_color" ).addClass( "hidden" );
			$( ".option_pearl_color[data-type='" + $( this ).attr( "data-name" ) + "']" ).removeClass( "hidden" );
			$( ".option_pearl_color:not(.hidden):first" ).trigger( "click" );
		} );

		$( ".option_pearl_color" ).on( "click", function( ) {
			$( ".wrapper_pearl_color" ).attr( "data-image", $( this ).attr( "data-image" ) );
			$( ".ring_price" ).text( $( this ).find( ".price_amount" ).text( ) );
			setImage( );
			zoomReset( );
		} );

		$( ".option_pearl_size" ).on( "click", function( ) {
			$( ".ring_price" ).text( $( this ).find( ".price_amount" ).text( ) );
		} );

		$( ".option_ring_style" ).on( "click", function( ) {
			$( "#ring_substyle" ).show( );
			$( "#ring_substyle .substyle_name" ).html( $( this ).find( ".label" ).text( ) );
			$( ".option_ring_substyle" ).addClass( "hidden" );
			$( ".option_ring_substyle[data-type='" + $( this ).attr( "data-name" ) + "']" ).removeClass( "hidden" );
			$( ".option_ring_substyle:not(.hidden):first" ).trigger( "click" );
		} );

		$( ".option_ring_substyle" ).on( "click", function( ) {
			var ring_name = $( this ).attr( "data-ringbase" ).split( "." );
			$( "#ring_base" ).attr( { "src": "statics/img/products/rings/layers/ring_base/" + ring_name[ 0 ] + "_" + $( ".wrapper_ring_metal" ).attr( "data-metal" ) + "." + ring_name[ 1 ] } ).removeClass( "hidden" );
			$( ".ring_price" ).text( $( this ).find( ".price_amount" ).text( ) );
			$( ".wrapper_ring_substyle" ).attr( { "data-ringbase": $( this ).attr( "data-ringbase" ) } );
			setImage( );
			zoomReset( );
		} );

		$( ".option_ring_metal" ).on( "click", function( ) {
			var ring_name = $( ".wrapper_ring_substyle" ).attr( "data-ringbase" ).split( "." );
			if ( ring_name.length > 1 ) {
				$( "#ring_base" ).attr( { "src": "statics/img/" + ring_name[ 0 ] + "_" + $( this ).attr( "data-metal" ) + "." + ring_name[ 1 ] } ).removeClass( "hidden" );
				$( ".ring_price" ).text( $( this ).find( ".price_amount" ).text( ) );
			}
			$( ".wrapper_ring_metal" ).attr( { "data-metal": $( this ).attr( "data-metal" ) } );
			setImage( );
			zoomReset( );
		} );

		$( ".views .view-link" ).on( "click", function( e ) {
			e.preventDefault( );
			$( ".views a" ).removeClass( 'active' );
			$( this ).addClass( 'active' );

			if ( $( this ).parent( ).hasClass( 'box-btn-360' ) ) {
				if ( !isHas360( ) ) switchOn360( 'hand' );
				$( '.btn-360-action-cover' ).removeClass( 'hidden' );
			} else {
				setImage( );
				zoomReset( );
				$( '.btn-360-action-cover' ).addClass( 'hidden' );
				$("#main_image").removeClass('side');
				$("#main_image").removeClass('lay');
				$("#main_image").removeClass('front');
				$("#main_image").removeClass('top');
				$("#main_image").addClass($( this ).attr('data-position'));
			}
		} );

		setTimeout( ( ) => {
			$.each( $( '.option-list' ).not( '.size-option-list' ), function( index, val ) {
				$( ".item:not('.hidden'):first", $( val ) ).trigger( 'click' );
			} );
			$( ".option_pearl_type:not('.hidden'):first" ).trigger( 'click' );
			$( '.metal' ).eq( 2 ).trigger( 'click' );
		}, 50 );

		$( ".btn-360-action.play" ).on( "click", function( e ) {
			e.preventDefault( );
			if ( !$( this ).hasClass( 'active' ) ) {
				$( ".btn-360-action" ).removeClass( 'active' );
				$( this ).addClass( 'active' );
				play360( );
			}
		} );

		$( ".btn-360-action.pause" ).on( "click", function( e ) {
			e.preventDefault( );
			if ( !$( this ).hasClass( 'active' ) ) {
				$( ".btn-360-action" ).removeClass( 'active' );
				$( this ).addClass( 'active' );
				pause360( );
			}
		} );
	}
	// });

	load_lightbox();
	load_step_events();

	function load_lightbox() {
		$( '.lightBox-link' ).simpleLightbox( { showCounter: true, widthRatio: 0.98, heightRatio: 0.98, loop: false } );

		$( '.lightBox-link' ).on( 'shown.simplelightbox', function( ) {
			var pearl = $( '#pearl' ).attr( 'src' );
			var ring = $( '#ring_base' ).attr( 'src' );
			var width = $( '.simple-lightbox .sl-image img' ).width( );
			var style = $( '.option_ring_substyle.selected .label' ).text( );
			var metal = $( '.option_ring_metal.selected .label' ).text( ).toLowerCase( );
			var color = $( '.option_pearl_color.selected' ).attr( 'data-name' ).toLowerCase( );
			$( '.simple-lightbox .sl-image img' ).css( 'border', '1px solid #000' );
			$( '.simple-lightbox .sl-image .ring_image_set' ).remove( );
			$( '.simple-lightbox .sl-image' ).append( '<img src="' + pearl + '" style="width:' + width + 'px;" class="ring_image_set">' );
			if ( $( '#ring_base' ).hasClass( "hidden" ) === false ) {
				$( '.simple-lightbox .sl-image' ).append( '<img src="' + ring + '" style="width:' + width + 'px;" class="ring_image_set">' );
			}
		} );
	}

	function load_step_events() {
		$( ".page1_link" ).on( "click", ( ) => {
			if ( isHas360( ) ) switchOff360( );
			toStep( 1 );
			$( '.views a' ).addClass( 'hidden' );
			$( ".zoomContainer .zoom_ring_image" ).addClass( 'hidden' );
		} );

		$( ".page2_link" ).on( "click", ( ) => {
			if ( isHas360( ) ) switchOff360( );
			toStep( 2 );
		} );

		$( "#page1_submit" ).on( "click", ( ) => {
			toStep( 2 );
			$( '.views a' ).not( '.around-link-off' ).removeClass( 'hidden' );
			$( 'html, body' ).animate( { scrollTop: $( "#page2" ).offset( ).top }, 100 );
			setImage( );
			setRingPreview( );
			zoomReset( );

			if ( $( "#main_image #ring" ).attr( "src" ) != "" ) {
				$( "#main_image #ring" ).removeClass( "hidden" );
				$( ".zoomContainer .zoom_ring_image" ).removeClass( 'hidden' );
			}
		} );

		$( "#page2_submit" ).on( "click", ( ) => {
			if ( isHas360( ) ) switchOff360( );
			toStep( 3 );
			$( 'html, body' ).animate( { scrollTop: $( "#page3" ).offset( ).top }, 100 );
		} );
	}

	function toStep( step ) { // step [number]
		$( ".page" ).addClass( 'hidden' );
		$( "#page" + step ).removeClass( 'hidden' );
		$( ".separator" ).removeClass( 'active-left active-right' );
		$( ".separator" ).eq( step - 1 ).addClass( 'active-left' );
		if ( step > 1 ) $( ".separator" ).eq( step - 2 ).addClass( 'active-right' );

		$( ".build-steps .step" ).removeClass( 'active inactive' );
		switch ( step ) {
			case 1:
				$( ".step.first" ).addClass( "active" );
				$( ".step.second" ).add( ".step.last" ).addClass( "inactive" );
				break;
			case 2:
				$( ".step.second" ).addClass( "active" );
				$( ".step.last" ).addClass( "inactive" );
				break;
			case 3:
				$( ".step.last" ).addClass( "active" );
				break;
			default:
				break;
		}
		$( ".step." + step ).addClass( "active" );
		setImage( );
	}

	function setRingPreview( ) {
		var pearl_image = $( ".wrapper_pearl_color" ).attr( "data-image" );
		$.each( $( '.option_ring_style:not(.sample) img.pearl, .option_ring_substyle:not(.sample) img.pearl' ), function( index, val ) {
			$( val ).attr( "src", "statics/img/products/rings/options/pearl/color/" + pearl_image );
		});
	}

	function setImage( ) {
		if ( isHas360( ) ) { switchOff360( ); }

		if ( $( '#page1' ).hasClass( 'hidden' ) ) {
			var ring_base, links;
			var metal = $( '.option_ring_metal.selected' ).attr( 'data-metal' );
			var pearl = $( '.option_pearl_color.selected' ).attr( 'data-color' );
			var bases = [ ];
			var pearls = [ ];

			ring_base = $( '.option_ring_substyle.selected' ).attr( 'data-ringbase' );
			bases[ 0 ] = 'statics/img/products/rings/layers/ring_base/' + ring_base + '/side/' + metal + '.png';
			bases[ 1 ] = 'statics/img/products/rings/layers/ring_base/' + ring_base + '/lay/' + metal + '.png';
			bases[ 2 ] = 'statics/img/products/rings/layers/ring_base/' + ring_base + '/front/' + metal + '.png';
			bases[ 3 ] = 'statics/img/products/rings/layers/ring_base/' + ring_base + '/top/' + metal + '.png';

			pearls[ 0 ] = 'statics/img/products/rings/layers/pearl/side/' + pearl + '.jpg';
			pearls[ 1 ] = 'statics/img/products/rings/layers/pearl/lay/' + pearl + '.jpg';
			pearls[ 2 ] = 'statics/img/products/rings/layers/pearl/front/' + pearl + '.png';
			pearls[ 3 ] = 'statics/img/products/rings/layers/pearl/top/' + pearl + '.jpg';

			links = $( '#main_image .views a' );

			for ( var i = 0; i < 4; i++ ) {
				links.eq( i ).attr( 'href', bases[ i ] );
				$( 'img', links.eq( i ) ).eq( 1 ).attr( 'src', bases[ i ] );
				$( 'img', links.eq( i ) ).eq( 0 ).attr( 'src', pearls[ i ] );
			}
			if ( links.eq( 4 ).hasClass( 'active' ) ) links.eq( 0 ).trigger( 'click' );

			var index = $( '.views a' ).index( $( '.views a.active' ) );
			$( "#ring_base" ).attr( { 'src': bases[ index ], 'data-zoom-image': bases[ index ] } ).removeClass( 'hidden' );
			$( "#pearl" ).attr( { "src": pearls[ index ], 'data-zoom-image': pearls[ index ] } );
		} else {
			var active_color = $( ".option_pearl_color.selected" );
			$( "#ring_base" ).addClass( 'hidden' )
			$( "#pearl" ).attr( { "src": "statics/img/products/rings/layers/pearl/front/" + active_color.attr( "data-image" ), 'data-perl': active_color.attr( "data-color" ), 'data-zoom-image': 'statics/img/products/rings/layers/pearl/front/' + active_color.attr( "data-image" ) } ).removeClass( 'hidden' );
		}
	}

	function setPrice( ) {
		var price = 0;
		$.each( $( '.item.selected .price_amount' ), function( index, val ) {
			price += $( val ).text( ) * 1;
		} );
		price = price + '';
		if ( price > 3 ) {
			price = price.replace( /\B(?=(?:\d{3})+(?!\d))/g, ',' );
		}
		$( '.build-price .amount' ).text( price );
	}

	function zoomReset( ) {
		$( '.zoomContainer' ).remove( );
		$( '#main_image #pearl' ).removeData( 'elevateZoom' );
		$( '#main_image #pearl' ).elevateZoom( {
			zoomWindowWidth: 565,
			zoomWindowHeight: 565,
			zoomWindowOffetx: 70,
			zoomWindowOffety: -31
		} );
	}

	function isHas360( ) {
		if ( !$( '.front360' ).closest( 'div' ).hasClass( 'main_image' ) ) return true;
		else return false;
	}

	function switchOff360( ) {
		if ( isHas360( ) ) {
			var box1 = $( '.front360' ).closest( 'div' );
			var box2 = $( '.back360' ).closest( 'div' );
			box1.add( box2 ).animate( { opacity: 0 }, 300 );
			setTimeout( ( ) => {
				box1.remove( );
				box2.remove( );
				$( '#main_image' ).prepend( '<img class="front360">' );
			}, 300 );
			$( '#main_image .wrap' ).delay( 500 ).animate( { opacity: 1 }, 300 );
		}
	}

	function play360( ) {
		var index = parseInt( $( '.front360' ).attr( 'src' ).substr( 0, 2 ), 10 );
		$( '#main_image' ).prepend( '<img class="tmp_front_360">' );
		$( '#main_image' ).prepend( '<img class="tmp_back_360">' );

		var ring_base = $( '.option_ring_substyle.selected' ).attr( 'data-ringbase' );
		$( '.tmp_back_360' ).attr( 'src', 'statics/img/products/rings/layers/pearl/360/' + ( index ) + '.png' );
		$( '.tmp_front_360' ).attr( 'src', 'statics/img/products/rings/layers/ring_base/' + ring_base + '/360/' + ( index ) + '.png' );

		$( '.front360' ).closest( 'div' ).remove( );
		$( '#main_image' ).prepend( '<img class="front360">' );

		var front360 = [ ], back360 = [ ];
		for ( var x = 1; x <= 75; x++ ) {
			front360.push( 'statics/img/products/rings/layers/ring_base/' + ring_base + '/360/' + x + ".png" );
			back360.push( 'statics/img/products/rings/layers/pearl/360/' + x + '.png' );
		}
		front360 = front360.slice( index ).concat( front360.slice( 0, index ) );
		back360 = back360.slice( index ).concat( back360.slice( 0, index ) );
		$( '.front360' ).threesixty( { images: front360, method: 'auto', autoscrollspeed: 200 } );
		$( '.back360' ).attr( 'src', back360[ 0 ] );

		setTimeout( ( ) => {
			$( '.tmp_front_360' ).remove( );
			$( '.tmp_back_360' ).remove( );
		}, 250 );
	}

	function pause360( ) {
		var index = parseInt( $( '.front360' ).attr( 'src' ).substr( 0, 2 ), 10 );
		$( '#main_image' ).prepend( '<img class="tmp_front_360">' );
		$( '#main_image' ).prepend( '<img class="tmp_back_360">' );

		var ring_base = $( '.option_ring_substyle.selected' ).attr( 'data-ringbase' );
		$( '.tmp_front_360' ).attr( 'src', 'statics/img/products/rings/layers/ring_base/' + ring_base + '/360/' + ( index ) + '.png' );
		$( '.tmp_back_360' ).attr( 'src', 'statics/img/products/rings/layers/pearl/360/' + ( index ) + '.png' );


		$( '.front360' ).closest( 'div' ).remove( );
		$( '#main_image' ).prepend( '<img class="front360">' );

		var front360 = [ ];
		back360 = [ ];
		for ( var x = 1; x <= 75; x++ ) {
			front360.push( 'statics/img/products/rings/layers/ring_base/' + ring_base + '/360/' + x + ".png" );
			back360.push( 'statics/img/products/rings/layers/pearl/360/' + x + '.png' );
		}

		front360 = front360.slice( index ).concat( front360.slice( 0, index ) );
		back360 = back360.slice( index ).concat( back360.slice( 0, index ) );

		$( '.front360' ).threesixty( { images: front360, method: 'click', direction: 'forward', sensibility: 1.3 } );
		$( '.front360' ).attr( 'src', front360[ 0 ] );
		setTimeout( ( ) => {
			$( '.back360' ).attr( 'src', back360[ 0 ] );

		}, 10 );
		setTimeout( ( ) => {
			$( '.tmp_front_360' ).remove( );
			$( '.tmp_back_360' ).remove( );
		}, 100 );
	}

	function switchOn360( type ) {
		$( '#main_image .wrap' ).animate( { opacity: 0 }, 300 );

		var ring_base = $( '.option_ring_substyle.selected' ).attr( 'data-ringbase' );
		var front360 = [ ],	back360 = [ ];
		for ( var x = 1; x <= 75; x++ ) {
			front360.push( 'statics/img/products/rings/layers/ring_base/' + ring_base + '/360/' + x + ".png" );
			back360.push( 'statics/img/products/rings/layers/pearl/360/' + x + '.png' );
		}
		$( '.zoomContainer' ).remove( );
		$( '#main_image #ring' ).removeData( 'elevateZoom' );

		if ( type == 'auto' ) $( '.front360' ).threesixty( { images: front360, method: 'auto', autoscrollspeed: 200 } );
		if ( type == 'hand' ) $( '.front360' ).threesixty( { images: front360, method: 'click', direction: 'forward', sensibility: 1.3 } );

		setTimeout( ( ) => {
			var box = $( '.front360' ).closest( 'div' );

			if ( type == 'hand' ) { $( '.front360' ).attr( 'src', front360[ 0 ] ); }
			$( '.back360' ).attr( 'src', back360[ 0 ] );
			box.delay( 500 ).animate( { opacity: 1 }, 300 );
		}, 10 );
	}
} );
