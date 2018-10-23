<?php
/**
 * Plugin Name: Widget About three
 * Plugin URI: sgs.wtf
 * Description: Widget about Section Three avec valeur numerique
 * Version: 1.0
 * Author: sgs
 * Author URI: sgs.wtf
 */
// register Foo_Widget widget
function register_aboutSectionThree_widget() {
    register_widget( 'Widget_aboutSectionThree' );
}
add_action( 'widgets_init', 'register_aboutSectionThree_widget' );

class Widget_aboutSectionThree extends WP_Widget {

    /**
    * Sets up the widgets name etc
    */
    public function __construct() {
    $widget_ops = array(
    'classname' => 'widget_about_sectionThree',
    'description' => 'LES CHIFFRES BLOC PRINCIPAL',
    );
    parent::__construct( 'widget_about_sectionThree', 'About Section LES CHIFFRES BLOC PRINCIPAL', $widget_ops );
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
        $number = $instance['number'];


        echo $args['before_widget'];
        ?>
            <div class="block-content">
                <?php
                if ( ! empty( $title ) && ! empty( $number )) {
                    ?>
                        <h3 class="text-center"><span class="counter"><?php echo $number ?></span></h3>
                        <h4 class="text-center"><?php echo $title ?></h4>
                    <?php
                }
                ?>
            </div><!-- /.bloc-content -->
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
        $title = isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';
        $number = isset( $instance[ 'number' ] ) ? $instance[ 'number' ] : '';

        ?>

        <p>
            <label for="<?php echo $this->get_field_id('number') ?>">Number :</label>
            <input class="widefat" id="<?php echo $this->get_field_id('number') ?>" name="<?php echo $this->get_field_name('number') ?>" type="text" value="<?php echo esc_attr($number); ?>">
        </p>
        
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( esc_attr( 'Title:' ) ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>


        <?php
    }

}
