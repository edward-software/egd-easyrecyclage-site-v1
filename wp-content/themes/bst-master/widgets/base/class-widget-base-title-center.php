<?php
/**
 * Plugin Name: Widget base title center
 * Plugin URI: sgs.wtf
 * Description: widget base title h3 center
 * Version: 1.0
 * Author: sgs
 * Author URI: sgs.wtf
 */
// register Foo_Widget widget
function register_base_titleCenter_widget() {
    register_widget( 'Widget_base_titleCenter' );
}
add_action( 'widgets_init', 'register_base_titleCenter_widget' );


class Widget_base_titleCenter extends WP_Widget {

    /**
     * Sets up the widgets name etc
     */
    public function __construct() {
        $widget_ops = array(
            'classname' => 'widget_base_titleCenter',
            'description' => 'widget de titre center',
        );
        parent::__construct( 'widget_base_titleCenter', 'Base Title Center', $widget_ops );
    }

    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget( $args, $instance ) {
        // outputs the content of the widget
        $title = $instance['title'];

        echo $args['before_widget'];


        if ( ! empty( $title ) ) {
            ?>
            <div class="block-title">
                <h3 class="text-center"><?php echo $title ?></h3>
                <hr>
            </div><!-- /.bloc-title -->
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
        $title = isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';
        ?>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( esc_attr( 'Title:' ) ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>

        <?php
    }
}
