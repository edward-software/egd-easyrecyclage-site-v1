<?php
/**
 * Plugin Name: Widget base button
 * Plugin URI: sgs.wtf
 * Description: widget base button
 * Version: 1.0
 * Author: sgs
 * Author URI: sgs.wtf
 */
// register Foo_Widget widget
function register_base_button_widget() {
    register_widget( 'Widget_base_button' );
}
add_action( 'widgets_init', 'register_base_button_widget' );

class Widget_base_button extends WP_Widget {

    /**
     * Sets up the widgets name etc
     */
    public function __construct() {
        $widget_ops = array(
            'classname' => 'widget_base_button',
            'description' => 'widget base, url & title',
        );
        parent::__construct( 'widget_base_button', 'Widget Base Button', $widget_ops );
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
        $url = $instance['url'];

        echo $args['before_widget'];

        if ( ! empty($url) && ! empty($title) ) {
            ?>
                <div class="block-button">
                    <a href="<?php echo $url ?>" class="btn" target="_blank"><?php echo $title ?></a>
                </div><!-- /.bloc-description -->
            <?php
        }

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
        $title = isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';
        $url = isset( $instance[ 'url' ] ) ? $instance[ 'url' ] : '';

        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( esc_attr( 'Title:' ) ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('url') ?>">URL du lien :</label>
            <input class="widefat" id="<?php echo $this->get_field_id('url') ?>" name="<?php echo $this->get_field_name('url') ?>" type="text" value="<?php echo esc_attr($url) ?>" />
        </p>

        <?php
    }
}
