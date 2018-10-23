<?php
/**
 * Plugin Name: Widget description product
 * Plugin URI: sgs.wtf
 * Description: widget product description with img
 * Version: 1.0
 * Author: sgs
 * Author URI: sgs.wtf
 */
// register Foo_Widget widget
function register_offerSectionOne_product_widget() {
    register_widget( 'Widget_offerSectionOne_product' );
}
add_action( 'widgets_init', 'register_offerSectionOne_product_widget' );

class Widget_offerSectionOne_product extends WP_Widget {

    /**
    * Sets up the widgets name etc
    */
    public function __construct() {
    $widget_ops = array(
    'classname' => 'widget_offerSectionOne_product',
    'description' => 'widget offer section one product',
    );
    parent::__construct( 'widget_offerSectionOne_product', 'Widget Offer Section OneProduct', $widget_ops );
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
        $img = $instance['img'];
        $text_long = $instance['text-long'];
        $text_line_one = $instance['text-line-one'];
        $text_line_two = $instance['text-line-two'];
        $text_line_three = $instance['text-line-three'];
        $text_line_four = $instance['text-line-four'];

        echo $args['before_widget'];
        ?>

        <div class="bloc-container-product">
            <div class="col-md-7 col-md-push-5">
                <div class="bloc-detail">
                    <?php
                    if ( ! empty( $title ) ) {
                        ?>
                        <div class="bloc-title">
                            <h3 class="featurette-heading text-uppercase"><?php echo $title ?></h3>
                        </div><!-- /.bloc-title -->
                        <?php
                    }
                    ?>
                    <div class="bloc-content">
                        <?php
                        if ( ! empty( $text_long ) ) {
                            ?>
                            <p class="text-left"><?php echo $text_long ?></p>
                            <?php
                        }
                        if ( ! empty( $text_line_one ) ) {
                            ?>
                            <p class="text-left"><?php echo $text_line_one ?></p>
                            <?php
                        }
                        if ( ! empty( $text_line_two ) ) {
                            ?>
                            <p class="text-left"><?php echo $text_line_two ?></p>
                            <?php
                        }
                        if ( ! empty( $text_line_three ) ) {
                            ?>
                            <p class="text-left"><?php echo $text_line_three ?></p>
                            <?php
                        }
                        if ( ! empty( $text_line_four ) ) {
                            ?>
                            <p class="text-left"><?php echo $text_line_four ?></p>
                            <?php
                        }
                        ?>
                    </div><!-- /.bloc-content -->
                </div><!-- /.bloc-detail -->
            </div><!-- /.col-md-7 col-md-push-5 -->

            <div class="col-md-5 col-md-pull-7">
                <?php
                if ( ! empty( $img ) ) {
                    ?>
                    <div class="bloc-img">
                        <img class="featurette-image img-responsive center-block" src="<?php echo $img ?>" alt="Generic placeholder image">
                    </div><!-- /.bloc-img -->
                    <?php
                }
                ?>
            </div><!-- /.col-md-5 -->

        </div><!-- /.bloc-container-product -->
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
        $text_long = isset( $instance[ 'text-long' ] ) ? $instance[ 'text-long' ] : '';
        $text_line_one = isset( $instance[ 'text-line-one' ] ) ? $instance[ 'text-line-one' ] : '';
        $text_line_two = isset( $instance[ 'text-line-two' ] ) ? $instance[ 'text-line-two' ] : '';
        $text_line_three = isset( $instance[ 'text-line-three' ] ) ? $instance[ 'text-line-three' ] : '';
        $text_line_four = isset( $instance[ 'text-line-four' ] ) ? $instance[ 'text-line-four' ] : '';

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

        <p>
            <label for="<?php echo $this->get_field_id('text-long') ?>">Text :</label>
            <textarea class="widefat" id="<?php echo $this->get_field_id('text-long') ?>" name="<?php echo $this->get_field_name('text-long') ?>" type="text"><?php echo esc_attr($text_long) ?></textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('text-line-one') ?>">Text ligne 1 :</label>
            <input class="widefat" id="<?php echo $this->get_field_id('text-line-one') ?>" name="<?php echo $this->get_field_name('text-line-one') ?>" type="text" value="<?php echo esc_attr( $text_line_one ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('text-line-two') ?>">Text ligne 2 :</label>
            <input class="widefat" id="<?php echo $this->get_field_id('text-line-two') ?>" name="<?php echo $this->get_field_name('text-line-two') ?>" type="text" value="<?php echo esc_attr( $text_line_two ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('text-line-three') ?>">Text ligne 3 :</label>
            <input class="widefat" id="<?php echo $this->get_field_id('text-line-three') ?>" name="<?php echo $this->get_field_name('text-line-three') ?>" type="text" value="<?php echo esc_attr( $text_line_three ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('text-line-four') ?>">Text ligne 4 :</label>
            <input class="widefat" id="<?php echo $this->get_field_id('text-line-four') ?>" name="<?php echo $this->get_field_name('text-line-four') ?>" type="text" value="<?php echo esc_attr( $text_line_four ); ?>" />
        </p>
        <?php
    }
}
