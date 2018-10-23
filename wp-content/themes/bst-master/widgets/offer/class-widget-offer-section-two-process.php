<?php
/**
 * Plugin Name: Widget offer section txo process
 * Plugin URI: sgs.wtf
 * Description: widget offer section txo process
 * Version: 1.0
 * Author: sgs
 * Author URI: sgs.wtf
 */
// register Foo_Widget widget
function register_offerSectionTwo_process_widget() {
    register_widget( 'Widget_offerSectionTwo_process' );
}
add_action( 'widgets_init', 'register_offerSectionTwo_process_widget' );


class Widget_offerSectionTwo_process extends WP_Widget {

    /**
     * Sets up the widgets name etc
     */
    public function __construct() {
        $widget_ops = array(
            'classname' => 'widget_offerSectionTwo_process',
            'description' => 'COMMENT CA MARCHE PROCESSE',
        );
        parent::__construct( 'widget_offerSectionTwo_process', 'Offer Section COMMENT CA MARCHE PROCESSE', $widget_ops );
    }

    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget( $args, $instance ) {
        // outputs the content of the widget
        $img = $instance['img'];
        $text = $instance['text'];
        $title = $instance['title'];

        echo $args['before_widget'];
        ?>

            <div class="block-container">
            <?php
            if ( ! empty( $img ) ) {
                ?>
                <div class="block-img">
                    <img class="img-responsive center-block" src="<?php echo $img ?>"/>
                </div><!-- /.bloc-img -->
                <?php
            }

            if ( ! empty( $title ) ) {
                ?>
                <div class="block-description">
                    <h3 class="text-center"><?php echo $title ?></h3>
                <?php
            }
            if ( ! empty( $text ) ) {
                ?>
                    <p class="text-center"><?php echo $text ?></p>
                </div><!-- /.bloc-description -->
                <?php
            }
            ?>
            </div><!-- /.bloc-container -->
        <?php
        echo $args['after_widget'];
    }

    /**
     * Deals with the settings when they are saved by the admin. Here is
     * where any validation should be dealt with.
     *
     * @param array  An array of new settings as submitted by the admin
     * @param array  An array of the previous settings
     * @return array The validated and (if necessary) amended settings
     **/
    public function update( $new_instance, $old_instance ) {
        // update logic goes here
        $updated_instance = $new_instance;
        return $updated_instance;
    }

    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form( $instance ) {
        // outputs the options form on admin
        $img = isset( $instance[ 'img' ] ) ? $instance[ 'img' ] : '';
        $title = isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';
        $text = isset( $instance[ 'text' ] ) ? $instance[ 'text' ] : '';

        ?>

        <p>
            <label for="<?php echo $this->get_field_name( 'img' ); ?>"><?php _e( 'Image:' ); ?></label>
            <input name="<?php echo $this->get_field_name( 'img' ); ?>" id="<?php echo $this->get_field_id( 'img' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $img ); ?>" />
            <input class="upload_image_button" type="button" value="Upload Image" />
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( esc_attr( 'Title:' ) ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('text') ?>">Text :</label>
            <textarea class="widefat" id="<?php echo $this->get_field_id('text') ?>" name="<?php echo $this->get_field_name('text') ?>" type="text"><?php echo esc_attr($text) ?></textarea>
        </p>
        <?php
    }
}
