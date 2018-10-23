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
function register_transitionSectionOne_blocHeader_widget() {
    register_widget( 'Widget_transitionSectionOne_blocHeader' );
}
add_action( 'widgets_init', 'register_transitionSectionOne_blocHeader_widget' );

class Widget_transitionSectionOne_blocHeader extends WP_Widget {

    /**
     * Sets up the widgets name etc
     */
    public function __construct() {
        $widget_ops = array(
            'classname' => 'widget_transitionSectionOne_blocHeader',
            'description' => 'OBLIGATION REGLEMENTAIRE BLOC HAUT',
        );
        parent::__construct( 'widget_transitionSectionOne_blocHeader', 'Transition Section OBLIGATION REGLEMENTAIRE BLOC HAUT', $widget_ops );
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
        $text_short = $instance['text-short'];
        $title = $instance['title'];

        echo $args['before_widget'];
        ?>

        <div class="col-md-4">
            <?php
            if ( ! empty( $img ) ) {
                ?>
                <div class="block-img">
                    <img class="img-responsive" src="<?php echo $img ?>">
                </div><!-- /.bloc-img -->
                <?php
            }
            ?>
        </div><!-- /.col-md-4 -->

        <div class="col-md-8">
            <div class="block-description">
                <?php
                if ( ! empty( $text_short ) ) {
                ?>
                    <p class="text-left"><?php echo $text_short ?></p>
                        <?php
                        }
                if ( ! empty( $title ) ) {
                ?>
                    <h4 class="text-left"><?php echo $title ?></h4>
                    <hr align="left">
                <?php
                }
                ?>
            </div><!-- /.bloc-description -->
        </div><!-- /.col-md-8 -->

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
        $text_short = isset( $instance[ 'text-short' ] ) ? $instance[ 'text-short' ] : '';

        ?>

        <p>
            <label for="<?php echo $this->get_field_name( 'img' ); ?>"><?php _e( 'Image:' ); ?></label>
            <input name="<?php echo $this->get_field_name( 'img' ); ?>" id="<?php echo $this->get_field_id( 'img' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $img ); ?>" />
            <input class="upload_image_button" type="button" value="Upload Image" />
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'text-short' ) ); ?>"><?php _e( esc_attr( 'Text court:' ) ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text-short' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text-short' ) ); ?>" type="text" value="<?php echo esc_attr( $text_short ); ?>">
        </p>
        
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( esc_attr( 'Title:' ) ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>

        <?php
    }
}
