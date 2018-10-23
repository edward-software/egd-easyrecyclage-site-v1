//(function ($) {
//
//
//    //var offset = 6;
//    $('#loading').show();
//
//    function loadPost() {
//        // Uncomment this AJAX call to test it
//        jQuery.post(
//            ajaxurl,
//            {
//                'action': 'ajax_get_post_list'
//                //'offset': offset
//            },
//            function(response){
//                //console.log(response);
//
//                // on affiche la réponse ou l'on veut
//                $('#postListQuery').html(response);
//
//                // Run the show!
//
//                $('#postListQuery').mixItUp({
//                    selectors: {
//                        target: '.blog-post-block-container',
//                        filter: '.filter'
//                    },
//                    load: {
//                        filter: '.category_1'
//                    }
//                });
//
//                //offset += 6;
//            }
//        );
//    }
//
//    $( "#loading" ).click(function () {
//        loadPost();
//    });
//
//    // Init
//    loadPost();
//
//})(jQuery);
