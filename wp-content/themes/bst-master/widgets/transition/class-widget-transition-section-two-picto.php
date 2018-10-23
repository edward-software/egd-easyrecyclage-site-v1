<?php
/**
 * Plugin Name: Widget text bloc
 * Plugin URI: sgs.wtf
 * Description: widget titre, picto et texte sur 3 colonnes
 * Version: 1.0
 * Author: sgs
 * Author URI: sgs.wtf
 */
// register Foo_Widget widget
function register_transitionSectionTwo_picto_widget() {
    register_widget( 'Widget_transitionSectionTwo_picto' );
}
add_action( 'widgets_init', 'register_transitionSectionTwo_picto_widget' );

class Widget_transitionSectionTwo_picto extends WP_Widget {

    /**
     * Sets up the widgets name etc
     */
    public function __construct() {
        $widget_ops = array(
            'classname' => 'widget_transitionSectionTwo_picto',
            'description' => 'widget picto',
        );
        parent::__construct( 'widget_transitionSectionTwo_picto', 'Widget Transition Section Two Picto', $widget_ops );
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
            <div class="bloc-img">
                <img class="img-responsive" src="<?php echo $img ?>" alt="Generic placeholder image" width="140" height="140">
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
        $title = isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';

        ?>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( esc_attr( 'Title:' ) ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'img' ); ?>"><?php _e( 'Image:' ); ?></label>
            <input name="<?php echo $this->get_field_name( 'img' ); ?>" id="<?php echo $this->get_field_id( 'img' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $img ); ?>" />
            <input class="upload_image_button" type="button" value="Upload Image" />
        </p>

        <?php
    }
}
