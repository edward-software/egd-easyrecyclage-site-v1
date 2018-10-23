<?php
/**
 * Plugin Name: Widget text img ciruclar
 * Plugin URI: sgs.wtf
 * Description: Un widget text img ciruclar
 * Version: 1.0
 * Author: sgs
 * Author URI: sgs.wtf
 */

add_action('widgets_init', 'my_widget_init');
function my_widget_init() {
    register_widget("My_Widget"); //My_Widget is the class defined hereunder, extending WP_Widget
}


//Enqueue WordPress media JS to handle image upload dialog box
add_action('admin_enqueue_scripts', 'my_widget_scripts');
function my_widget_scripts() {
    global $pagenow;
    if( $pagenow == 'widgets.php' ){
        wp_enqueue_media();
    }
}

//Create a class extending WP_Widget
class My_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    public function __construct() {
//        parent::__construct(
//            'my_widget', // Base ID
//            'My widget', // Name
//            array( 'description' => __( 'My widget description' ) ) // Args
//        );
		$widget_ops = array(
            'classname' => 'my_widget',
            'description' => 'My Widget is awesome',
        );
		parent::__construct( 'my_widget', 'My Widget', $widget_ops );
    }

    /**
     * Widget Front-end display
     *
     * @param array $args
     * @param array $instance
     */
    public function widget( $args, $instance ) {

        $img = $instance['img'];
        $url = $instance['url'];
        $title = $instance['title'];

        echo $args['before_widget'];
        if( !empty($img) ){
            ?>
            <a href="<?php echo $url ?>" title="<?php echo $title ?>">
                <img class="img-circle" src="<?php echo $img ?>" alt="Generic placeholder image" width="140" height="140">
            </a>
            <?php
        }
        echo $args['after_widget'];
    }

    /**
     * Sanitize widget form values as they are saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();

        $instance['img'] = strip_tags( $new_instance['img'] );
        $instance['url'] = strip_tags( $new_instance['url'] );
        $instance['title'] = strip_tags( $new_instance['title'] );

        return $instance;
    }

    /**
     * Back-end widget form.
     *
     * @param array $instance The widget options
     */
    public function form( $instance ) {

        $img = isset( $instance[ 'img' ] ) ? $instance[ 'img' ] : '';
        $url = isset( $instance[ 'url' ] ) ? $instance[ 'url' ] : '';
        $title = isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';

        $img_field_id = $this->get_field_id('img');

        ?>

        <p>
            <label for="<?php echo $img_field_id ?>">Image :</label><br/>
            <input class="upload_image" id="<?php echo $img_field_id ?>" type="hidden" name="<?php echo $this->get_field_name('img') ?>" value="<?php echo $img ?>" />
            <input class="upload_image_button" id="<?php echo $img_field_id ?>_button" type="button" value="Charger une image" data-field-id="<?php echo $img_field_id ?>" />
        <div id="<?php echo $img_field_id ?>_img" class="upload_image_wrapper">
            <?php if( !empty($img) ):?>
                <img src="<?php echo $img ?>" />
                <a href="#" class="upload_image_delete" data-field-id="<?php echo $img_field_id ?>">Supprimer l'image</a>
            <?php endif ?>
        </div>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('url') ?>">URL du lien :</label>
            <input class="widefat" id="<?php echo $this->get_field_id('url') ?>" name="<?php echo $this->get_field_name('url') ?>" type="text" value="<?php echo esc_attr($url) ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('title') ?>">Message au survol de l'image :</label>
            <input class="widefat" id="<?php echo $this->get_field_id('title') ?>" name="<?php echo $this->get_field_name('title') ?>" type="text" value="<?php echo esc_attr($title) ?>" />
        </p>

        <style>
            .upload_image_wrapper img{ width:100% }
        </style>

        <script>
            //Le code suivant doit normalement être positionné dans un fichier Javascript séparé,
            //notamment dans le cas où on positionne plusieurs fois le widget dans l'interface,
            //sinon le "jQuery(document).ready()" ci-dessous est lancé autant de fois que le nombre
            //de widgets positionnés. Ca fonctionne car on fait des "unbind()" mais
            //ce n'est pas optimisé.

            var upload_image_custom_uploaders = upload_image_custom_uploaders || {};

            jQuery(document).ready(function($){

                $('.upload_image_button').unbind().click(function(e) {

                    e.preventDefault();

                    var field_id = $(this).data('field-id');

                    //If the uploader object has already been created, reopen the dialog
                    if( upload_image_custom_uploaders.hasOwnProperty( field_id ) ) {
                        upload_image_custom_uploaders[field_id].open();
                        return;
                    }

                    //Extend the wp.media object
                    var upload_image_custom_uploader = wp.media.frames.file_frame = wp.media({
                        title: 'Choisir une image',
                        button: {
                            text: 'Choisir cette image'
                        },
                        multiple: false
                    });

                    upload_image_custom_uploaders[field_id] = upload_image_custom_uploader;

                    //When a file is selected, grab the URL and set it as the text field's value
                    upload_image_custom_uploader.on('select', function() {
                        attachment = upload_image_custom_uploader.state().get('selection').first().toJSON();
                        $('#'+ field_id).val(attachment.url);
                        $('#'+ field_id +'_img').html('<img src="'+ attachment.url +'" />');
                    });

                    //Open the uploader dialog
                    upload_image_custom_uploader.open();

                });

                $('.upload_image_delete').unbind().click(function(e){
                    e.preventDefault();
                    var field_id = $(this).data('field-id');
                    $('#'+ field_id).val('');
                    $('#'+ field_id +'_img').html('');
                });

            });
        </script>

        <?php
    }

}
