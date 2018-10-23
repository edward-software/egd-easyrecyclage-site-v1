<?php
/**
 * Plugin Name: Widget Home Section Four
 * Plugin URI: sgs.wtf
 * Description: widget img
 * Version: 1.0
 * Author: sgs
 * Author URI: sgs.wtf
 */
function register_homeSectionFour_widget() {
    register_widget( 'Widget_homeSectionFour' );
}
add_action( 'widgets_init', 'register_homeSectionFour_widget' );


class Widget_homeSectionFour extends WP_Widget {

    /**
     * Sets up the widgets name etc
     */
    public function __construct() {
        $widget_ops = array(
            'classname' => 'widget_home_sectionFour',
            'description' => 'IL NOUS FONT CONFIANCE LOGO',
        );
        parent::__construct( 'widget_home_sectionFour', 'Home Section IL NOUS FONT CONFIANCE LOGO', $widget_ops );
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

        echo $args['before_widget'];

        if ( ! empty( $img ) ) {
            ?>

            <div class="block-logo-img">
                <img class="logo-customer" src="<?php echo $img ?>">
            </div>

            <?php
        }

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
        $title = __('Widget Image');
        if(isset($instance['title']))
        {
            $title = $instance['title'];
        }
        $img = isset( $instance[ 'img' ] ) ? $instance[ 'img' ] : '';

        ?>

        <p>
            <label for="<?php echo $this->get_field_name( 'img' ); ?>"><?php _e( 'Image:' ); ?></label>
            <input name="<?php echo $this->get_field_name( 'img' ); ?>" id="<?php echo $this->get_field_id( 'img' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $img ); ?>" />
            <input class="upload_image_button" type="button" value="Upload Image" />
        </p>
        <?php
    }
}
