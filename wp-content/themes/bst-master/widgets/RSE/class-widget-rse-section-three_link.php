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
function register_RSESectionThree_link_widget() {
    register_widget( 'Widget_RSESectionThree_link' );
}
add_action( 'widgets_init', 'register_RSESectionThree_link_widget' );

class Widget_RSESectionThree_link extends WP_Widget {

    /**
    * Sets up the widgets name etc
    */
    public function __construct() {
    $widget_ops = array(
    'classname' => 'widget_RSESectionThree_link',
    'description' => 'widget RSE section three link',
    );
    parent::__construct( 'widget_RSESectionThree_link', 'Widget RSE Section Three link', $widget_ops );
    }

    /**
    * Outputs the content of the widget
    *
    * @param array $args
    * @param array $instance
    */
    public function widget( $args, $instance ) {
        // outputs the content of the widget
        $url = $instance['url'];
        $title = $instance['title'];

        echo $args['before_widget'];

        if ( ! empty( $title ) && ! empty( $link )) {
            ?>
            <a class="btn btn-default pull-right text-center" href="<?php echo $url ?>"><?php echo $title ?></a>
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
        // processes widget options
        $updated_instance = $new_instance;
        return $updated_instance;
    }

    /**
    * Outputs the options form on admin
    *
    * @param array $instance The widget options
    */
    public function form( $instance ) {
        $url = isset( $instance[ 'url' ] ) ? $instance[ 'url' ] : '';
        $title = isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';

        ?>

        <p>
            <label for="<?php echo $this->get_field_id('url') ?>">URL du lien :</label>
            <input class="widefat" id="<?php echo $this->get_field_id('url') ?>" name="<?php echo $this->get_field_name('url') ?>" type="text" value="<?php echo esc_attr($url) ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('title') ?>">titre du lien :</label>
            <input class="widefat" id="<?php echo $this->get_field_id('title') ?>" name="<?php echo $this->get_field_name('title') ?>" type="text" value="<?php echo esc_attr($title) ?>" />
        </p>
    <?php
    }

}
