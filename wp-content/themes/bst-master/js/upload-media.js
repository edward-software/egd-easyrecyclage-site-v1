jQuery(document).ready(function($) {
    $(document).on("click", ".upload_image_button", function() {

        jQuery.data(document.body, 'prevElement', $(this).prev());

        window.send_to_editor = function(html) {

            var imgUrl = $(html).attr('src');

            if( typeof imgUrl === 'undefined' || !imgUrl) {
                var imgUrl = $(html).find('img').attr('src');
            }

            var inputText = jQuery.data(document.body, 'prevElement');

            if(inputText != undefined && inputText != '')
            {
                inputText.val(imgUrl);
            }

            tb_remove();
        };

        tb_show('', 'media-upload.php?type=image&TB_iframe=true&post_id=0', false);
        return false;
    });
});
