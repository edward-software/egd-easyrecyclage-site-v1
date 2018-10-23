(function ($) {

	"use strict";

	$(document).ready(function() {
		//// Comments
		//$(".commentlist li").addClass("panel panel-default");
		//$(".comment-reply-link").addClass("btn btn-default");
        //
		//// Forms
		//$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		//$('input[type=submit]').addClass('btn btn-primary');

		// You can put your own code in here
		$('.carousel').carousel({
			interval: 3000 //changes the speed
		});


		/* fancybox
		-----------------------------------------------*/
		/*
		 *  Simple image gallery. Uses default settings
		 */

		$('.fancybox').fancybox();

		/*
		 *  Different effects
		 */

		// Change title type, overlay closing speed
		$(".fancybox-effects-a").fancybox({
			helpers: {
				title : {
					type : 'outside'
				},
				overlay : {
					speedOut : 0
				}
			}
		});


		/*
		 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
		 */
		$('.fancybox-media')
			.attr('rel', 'media-gallery')
			.fancybox({
				width : 1288,
				height : 730,
				padding: 0,
				closeBtn : false,

				arrows : false,
				helpers : {
					media : {},
					buttons : {}
				}
			});


		/* ==============================================
		 Type box Show et hide
		 =============================================== */
		/* ==============================================
		Counter Up
		=============================================== */
		$('.counter').each(function () {
			$(this).prop('Counter',0).animate({
				Counter: $(this).text()
			}, {
				duration: 4000,
				easing: 'swing',
				step: function (now) {
					$(this).text(numberFormat(Math.ceil(now)));
				}
			});
		});

		/* gestion des fleches de navigation des types de box */

		  // if ( $('li#productTabTitle_box-papier').hasClass('active') ) {
		  //   $('button.prev.offer-product.disabled').hide();
		  // }

		function numberFormat(n, dp) {
					var s = ''+(Math.floor(n)), d = n % 1, i = s.length, r = '';
					while ( (i -= 3) > 0 ) { r = ' ' + s.substr(i, 3) + r; }
					return s.substr(0, i + 3) + r;
				}

	});


	// filter
	var filterList = {

		init: function () {

			$('#postListQuery').mixItUp({
				selectors: {
					target: '.blog-post-block-container',
					filter: '.filter'
				},
				load: {
					filter: '.category_1'
				}
			});

		}

	};

	// Run the show!
	filterList.init();



	// Hide print Button!
	$('.printfriendly ').hide();

})(jQuery);



