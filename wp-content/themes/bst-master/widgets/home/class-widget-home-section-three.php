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
function register_homeSectionThree_widget() {
    register_widget( 'Widget_homeSectionThree' );
}
add_action( 'widgets_init', 'register_homeSectionThree_widget' );


class Widget_homeSectionThree extends WP_Widget {

    /**
     * Sets up the widgets name etc
     */
    public function __construct() {
        $widget_ops = array(
            'classname' => 'widget_home_sectionThree',
            'description' => 'TEMOIGNAGE CONTENU',
        );
        parent::__construct( 'widget_home_sectionThree', 'Home Section TEMOIGNAGE CONTENU', $widget_ops );
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
        $text = $instance['text'];
        $actor = $instance['actor'];
        $job = $instance['job'];

        echo $args['before_widget'];
        ?>
        <div class="testimony-customer">
        <?php
        if ( ! empty( $img ) ) {
            ?>
            <img class="img-circle" src="<?php echo $img ?>" alt="Generic placeholder image" width="140" height="140">
            <?php
        }
        if ( ! empty( $text ) ) {
            ?>
            <div class="block-content">
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                <p class="text-center"><?php echo $text ?></p>
                <i class="fa fa-quote-right" aria-hidden="true"></i>
            </div>
            <?php
        }
        if ( ! empty( $actor ) && !empty($job) ) {
            ?>

            <div class="block-autor">
                <h5 class="text-center"><?php echo $actor ?></h5>
                <p class="text-center"><?php echo $job ?>
                </p>
            </div>
            <?php
        }

        ?>
        </div><!-- /.testimony-customer -->
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
        $text = isset( $instance[ 'text' ] ) ? $instance[ 'text' ] : '';
        $img = isset( $instance[ 'img' ] ) ? $instance[ 'img' ] : '';
        $actor = isset( $instance[ 'actor' ] ) ? $instance[ 'actor' ] : '';
        $job = isset( $instance[ 'job' ] ) ? $instance[ 'job' ] : '';

        ?>

        <p>
            <label for="<?php echo $this->get_field_id('text') ?>">Text :</label>
            <textarea class="widefat" id="<?php echo $this->get_field_id('text') ?>" name="<?php echo $this->get_field_name('text') ?>" type="text"><?php echo esc_attr($text) ?></textarea>
        </p>


        <p>
            <label for="<?php echo $this->get_field_name( 'img' ); ?>"><?php _e( 'Image:' ); ?></label>
            <input name="<?php echo $this->get_field_name( 'img' ); ?>" id="<?php echo $this->get_field_id( 'img' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $img ); ?>" />
            <input class="upload_image_button" type="button" value="Upload Image" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('actor') ?>">Nom et prénom :</label>
            <input class="widefat" id="<?php echo $this->get_field_id('actor') ?>" name="<?php echo $this->get_field_name('actor') ?>" type="text" value="<?php echo esc_attr($actor) ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('job') ?>">Fonction :</label>
            <input class="widefat" id="<?php echo $this->get_field_id('job') ?>" name="<?php echo $this->get_field_name('job') ?>" type="text" value="<?php echo esc_attr($job) ?>" />
        </p>

        <?php
    }
}
