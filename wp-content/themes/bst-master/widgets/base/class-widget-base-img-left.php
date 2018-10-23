<?php
/**
 * Plugin Name: Widget IMG left
 * Plugin URI: sgs.wtf
 * Description: widget IMG left
 * Version: 1.0
 * Author: sgs
 * Author URI: sgs.wtf
 */
// register Foo_Widget widget
function register_widget_base_img_left_widget() {
    register_widget( 'Widget_base_img_left' );
}
add_action( 'widgets_init', 'register_widget_base_img_left_widget' );

class Widget_base_img_left extends WP_Widget {

    /**
     * Sets up the widgets name etc
     */
    public function __construct() {
        $widget_ops = array(
            'classname' => 'widget_base_img_left',
            'description' => 'Base IMG LEFT',
        );
        parent::__construct( 'widget_base_img_left', 'Base IMG LEFT', $widget_ops );
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
        ?>

        <?php
        if ( ! empty( $img ) ) {
            ?>
            <div class="block-img text-left">
                <img class="left-block" src="<?php echo $img ?>">
            </div><!-- /.bloc-img -->
            <?php
        }
        ?>

        <?php
        echo $args['after_widget'];
    }

    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     */
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

        ?>
        <p>
            <label for="<?php echo $this->get_field_name( 'img' ); ?>"><?php _e( 'Image:' ); ?></label>
            <input name="<?php echo $this->get_field_name( 'img' ); ?>" id="<?php echo $this->get_field_id( 'img' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $img ); ?>" />
            <input class="upload_image_button" type="button" value="Upload Image" />
        </p>

        <?php
    }
}
