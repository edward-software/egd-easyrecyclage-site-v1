<?php
/**
 * Plugin Name: Widget text bloc center
 * Plugin URI: sgs.wtf
 * Description: widget base text center
 * Version: 1.0
 * Author: sgs
 * Author URI: sgs.wtf
 */
// register Foo_Widget widget
function register_base_textCenter_widget() {
    register_widget( 'Widget_base_textCenter' );
}
add_action( 'widgets_init', 'register_base_textCenter_widget' );


class Widget_base_textCenter extends WP_Widget {

    /**
     * Sets up the widgets name etc
     */
    public function __construct() {
        $widget_ops = array(
            'classname' => 'widget_base_textCenter',
            'description' => 'widget base de text centré',
        );
        parent::__construct( 'widget_base_textCenter', 'Widget Base Text Center', $widget_ops );
    }

    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget( $args, $instance ) {
        // outputs the content of the widget
        $text = $instance['text'];

        echo $args['before_widget'];

        if ( ! empty( $text ) ) {
            ?>
                <div class="block-content">
                    <p class="text-center"><?php echo $text ?></p>
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
        $text = isset( $instance[ 'text' ] ) ? $instance[ 'text' ] : '';
        ?>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"><?php _e( esc_attr( 'Texte:' ) ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text"><?php echo esc_attr( $text ); ?></textarea>
        </p>

        <?php
    }
}
