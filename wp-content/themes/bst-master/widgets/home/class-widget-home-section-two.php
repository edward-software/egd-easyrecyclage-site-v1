<?php
/**
 * Plugin Name: Widget text bloc
 * Plugin URI: sgs.wtf
 * Description: widget titre, url et text
 * Version: 1.0
 * Author: sgs
 * Author URI: sgs.wtf
 */
// register Foo_Widget widget
function register_homeSectionTwo_widget() {
    register_widget( 'Widget_homeSectionTwo' );
}
add_action( 'widgets_init', 'register_homeSectionTwo_widget' );

class Widget_homeSectionTwo extends WP_Widget {

    /**
    * Sets up the widgets name etc
    */
    public function __construct() {
    $widget_ops = array(
    'classname' => 'widget_home_sectionTwo',
    'description' => 'RECYCLEZ AVEC LA CORBEILLE BLEUE',
    );
    parent::__construct( 'widget_home_sectionTwo', 'Home Section RECYCLEZ AVEC LA CORBEILLE BLEUE', $widget_ops );
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
        $text = $instance['text'];
        $button = $instance['button'];

        echo $args['before_widget'];



            if ( ! empty( $title ) ) {
                ?>

                    <div class="col-md-4 col-xs-12">
                        <div class="block-title">
                        <h3 class="text-center"><?php echo $title ?></h3>
                        <hr>
                        </div>
                        <!-- /.block-title -->
                    </div>
            <?php
            }
            if ( ! empty($url) && ! empty($text) ) {
                ?>

                    <div class="col-md-8 col-xs-12">
                        <div class="block-description">
                            <p class="text-justify"><?php echo $text ?></p>
                          <?php if(!empty($button)) { ?>
                            <a href="<?php echo $url ?>" class="btn"><?php echo $button; ?></a>
                          <?php } ?>
                        </div>
                        <!-- /.block-description -->
                    </div>
                    <!-- /.col-md-8 -->
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
        $text = isset( $instance[ 'text' ] ) ? $instance[ 'text' ] : '';
        $button = isset( $instance[ 'button' ] ) ? $instance[ 'button' ] : '';

        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( esc_attr( 'Title:' ) ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'url' ) ); ?>"><?php _e( esc_attr( 'Url:' ) ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'url' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'url' ) ); ?>" type="text" value="<?php echo esc_attr( $url ); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'button' ) ); ?>"><?php _e( esc_attr( 'Button:' ) ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'button' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'button' ) ); ?>" type="text" value="<?php echo esc_attr( $button ); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"><?php _e( esc_attr( 'Texte:' ) ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text"><?php echo esc_attr( $text ); ?></textarea>
        </p>
        <?php
    }
}
