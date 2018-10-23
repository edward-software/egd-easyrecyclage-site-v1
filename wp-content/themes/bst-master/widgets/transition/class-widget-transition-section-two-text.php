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
function register_transitionSectionTwo_text_widget() {
    register_widget( 'Widget_transitionSectionTwo_text' );
}
add_action( 'widgets_init', 'register_transitionSectionTwo_text_widget' );

class Widget_transitionSectionTwo_text extends WP_Widget {

    /**
     * Sets up the widgets name etc
     */
    public function __construct() {
        $widget_ops = array(
            'classname' => 'widget_transitionSectionTwo_text',
            'description' => 'OBLIGATION REGLEMENTAIRE BLOC TEXT LEFT',
        );
        parent::__construct( 'widget_transitionSectionTwo_text', 'Transition Section OBLIGATION REGLEMENTAIRE BLOC TEXT LEFT', $widget_ops );
    }

    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget( $args, $instance ) {
        // outputs the content of the widget
        $text_short = $instance['text-short'];
        $text_big = $instance['text-big'];

        echo $args['before_widget'];
        ?>
            <?php
            if ( ! empty( $text_short ) || ! empty( $text_big)) {
                ?>
                <p class="text-left paragraph-article"><?php echo $text_short ?></p>
                <p class="text-left paragraph-description"><?php echo $text_big ?></p>
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
        $text_short = isset( $instance[ 'text-short' ] ) ? $instance[ 'text-short' ] : '';
        $text_big = isset( $instance[ 'text-big' ] ) ? $instance[ 'text-big' ] : '';

        ?>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'text-short' ) ); ?>"><?php _e( esc_attr( 'Text court:' ) ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text-short' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text-short' ) ); ?>" type="text" value="<?php echo esc_attr( $text_short ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'text-big' ) ); ?>"><?php _e( esc_attr( 'Text long:' ) ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text-big' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text-big' ) ); ?>" type="text"><?php echo esc_attr( $text_big ); ?></textarea>
        </p>

        <?php
    }
}
