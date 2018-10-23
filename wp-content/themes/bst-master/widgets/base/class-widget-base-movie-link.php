<?php
/**
 * Plugin Name: Widget base Movie Link
 * Plugin URI: sgs.wtf
 * Description: Widget base - img(1x1) text & lien media
 * Version: 1.0
 * Author: sgs
 * Author URI: sgs.wtf
 */
// register Foo_Widget widget
function register_base_movieLink_widget() {
    register_widget( 'Widget_base_movieLink' );
}
add_action( 'widgets_init', 'register_base_movieLink_widget' );

class Widget_base_movieLink extends WP_Widget {

    /**
    * Sets up the widgets name etc
    */
    public function __construct() {
    $widget_ops = array(
    'classname' => 'widget_base_movieLink',
    'description' => 'BACKGROUND MOVIE LINK',
    );
    parent::__construct( 'widget_base_movieLink', 'Base BACKGROUND MOVIE LINK', $widget_ops );
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
        $text = $instance['text'];
        $url = $instance['url'];


        echo $args['before_widget'];
?>

            <div class="col-xs-12 block-content-container">
                <?php if ( ! empty( $url )) { ?>
                    <a class="fancybox-media center-block" href="<?php echo $url ?>"><img src="<?php bloginfo("template_directory"); ?>/images/picto-play.png"></i></a>
       <?php } if ( ! empty( $title )) { ?>
                    <h3 class="text-center text-uppercase"><?php echo $title ?></h3>
        <?php  } if ( ! empty( $text)) { ?>
                    <p class="text-center"><?php echo $text ?></p>
        <?php  }  ?>
                </div><!-- /.col-md-12 -->

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

        $title = isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';
        $text = isset( $instance[ 'text' ] ) ? $instance[ 'text' ] : '';
        $url = isset( $instance[ 'url' ] ) ? $instance[ 'url' ] : '';

        ?>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( esc_attr( 'Title:' ) ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"><?php _e( esc_attr( 'Text:' ) ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text""><?php echo esc_attr( $text ); ?></textarea>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('url') ?>">URL du lien :</label>
            <input class="widefat" id="<?php echo $this->get_field_id('url') ?>" name="<?php echo $this->get_field_name('url') ?>" type="text" value="<?php echo esc_attr($url) ?>" />
        </p>

        <?php
    }
}
