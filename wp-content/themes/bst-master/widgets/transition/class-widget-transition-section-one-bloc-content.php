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
function register_transitionSectionOne_blocContent_widget() {
    register_widget( 'Widget_transitionSectionOne_blocContent' );
}
add_action( 'widgets_init', 'register_transitionSectionOne_blocContent_widget' );

class Widget_transitionSectionOne_blocContent extends WP_Widget {

    /**
     * Sets up the widgets name etc
     */
    public function __construct() {
        $widget_ops = array(
            'classname' => 'widget_transitionSectionOne_blocContent',
            'description' => 'OBLIGATION REGLEMENTAIRE BLOC PRINCIPAL',
        );
        parent::__construct( 'widget_transitionSectionOne_blocContent', 'Transition Section OBLIGATION REGLEMENTAIRE BLOC PRINCIPAL', $widget_ops );
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
        $text_effectif = $instance['text-effectif'];
        $text_date = $instance['text-date'];
        $text_description = $instance['text-description'];

        echo $args['before_widget'];
        ?>

                <div class="block-title">
                    <?php
                    if ( ! empty( $img ) ) {
                        ?>
                        <div class="block-img">
                            <img class="img-responsive" src="<?php echo $img ?>">
                        </div><!-- /.bloc-img -->
                    <?php
                    }

                    if ( ! empty( $text_effectif ) ) {
                    ?>
                        <div class="block-effectif">
                            <h3 class="text-left"><?php echo $text_effectif ?></p>
                        </div><!-- /.bloc-effectif -->
                    <?php
                    }
                    ?>
                </div><!-- /.bloc-title -->

                <div class="block-detail">
                <?php
                if ( ! empty( $text_date ) ) {
                    ?>
                        <p class="text-center block-date"><?php echo $text_date ?></p>
                    <?php
                }
                if ( ! empty( $text_description ) ) {
                ?>
                            <p class="text-center block-description"><?php echo $text_description ?></p>
                    <?php
                }
                ?>
                        </div><!-- /.bloc-detail -->

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
        $text_effectif = isset( $instance[ 'text-effectif' ] ) ? $instance[ 'text-effectif' ] : '';
        $text_date = isset( $instance[ 'text-date' ] ) ? $instance[ 'text-date' ] : '';
        $text_description = isset( $instance[ 'text-description' ] ) ? $instance[ 'text-description' ] : '';

        ?>

        <p>
            <label for="<?php echo $this->get_field_name( 'img' ); ?>"><?php _e( 'Image:' ); ?></label>
            <input name="<?php echo $this->get_field_name( 'img' ); ?>" id="<?php echo $this->get_field_id( 'img' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $img ); ?>" />
            <input class="upload_image_button" type="button" value="Upload Image" />
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'text-effectif' ) ); ?>"><?php _e( esc_attr( 'Effectif :' ) ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text-effectif' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text-effectif' ) ); ?>" type="text" value="<?php echo esc_attr( $text_effectif); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'text-date' ) ); ?>"><?php _e( esc_attr( 'Date :' ) ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text-date' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text-date' ) ); ?>" type="text" value="<?php echo esc_attr( $text_date ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'text-description' ) ); ?>"><?php _e( esc_attr( 'Description:' ) ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text-description' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text-description' ) ); ?>" type="text" value="<?php echo esc_attr( $text_description ); ?>">
        </p>

        <?php
    }
}
