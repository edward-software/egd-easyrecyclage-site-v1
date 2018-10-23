<?php
/**
 * Plugin Name: Widget About one
 * Plugin URI: sgs.wtf
 * Description: Widget about Section One img 100x100
 * Version: 1.0
 * Author: sgs
 * Author URI: sgs.wtf
 */
// register Foo_Widget widget
function register_aboutSectionOne_widget() {
    register_widget( 'Widget_aboutSectionOne' );
}
add_action( 'widgets_init', 'register_aboutSectionOne_widget' );


class Widget_aboutSectionOne extends WP_Widget {

    /**
     * Sets up the widgets name etc
     */
    public function __construct() {
        $widget_ops = array(
            'classname' => 'widget_about_SectionOne',
            'description' => 'SPECIALITE DU RECYCLAGE BLOC CONTENU',
        );
        parent::__construct( 'widget_about_SectionOne', 'About Section SPECIALITE DU RECYCLAGE BLOC CONTENU', $widget_ops );
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
        $title = $instance['title'];
        $text_one = $instance['text-one'];
        $text_two = $instance['text-two'];

        echo $args['before_widget'];
        ?>
        <div class="block-container">
            <?php if ( ! empty( $img ) ) { ?>
                    <div class="block-img">
                        <img class="img-responsive" src="<?php echo $img ?>" alt="Generic placeholder image" width="100" height="100">
                    </div><!-- /.bloc-img -->
            <?php } ?>
            <div class="block-content">
            <?php if ( ! empty( $title )) { ?>
                <div class="block-title">
                    <h3 class="text-center"><?php echo $title ?></h3>
                </div><!-- /.bloc-title -->
                <div class="block-description">
            <?php } if (! empty( $text_one )) { ?>
                    <p class="text-center"><?php echo $text_one ?></p>
            <?php } if (! empty( $text_two )) { ?>
                    <p class="text-center"><?php echo $text_two ?></p>
            <?php } ?>
                </div><!-- /.bloc-description -->
            </div><!-- /.bloc-content -->
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
        $text_one = isset( $instance[ 'text-one' ] ) ? $instance[ 'text-one' ] : '';
        $text_two = isset( $instance[ 'text-two' ] ) ? $instance[ 'text-two' ] : '';

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
            <label for="<?php echo $this->get_field_id('text-one') ?>">Text haut:</label>
            <textarea class="widefat" id="<?php echo $this->get_field_id('text-one') ?>" name="<?php echo $this->get_field_name('text-one') ?>" type="text"><?php echo esc_attr($text_one) ?></textarea>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('text-two') ?>">Text bas:</label>
            <textarea class="widefat" id="<?php echo $this->get_field_id('text-two') ?>" name="<?php echo $this->get_field_name('text-two') ?>" type="text"><?php echo esc_attr($text_two) ?></textarea>
        </p>

        <?php
    }
}
