<?php
/**
 * Plugin Name: Widget rse section one bloc content
 * Plugin URI: sgs.wtf
 * Description: widget rse section one bloc content
 * Version: 1.0
 * Author: sgs
 * Author URI: sgs.wtf
 */
// register Foo_Widget widget
function register_RSESectionOne_blocContent_widget() {
    register_widget( 'Widget_RSESectionOne_blocContent' );
}
add_action( 'widgets_init', 'register_RSESectionOne_blocContent_widget' );

class Widget_RSESectionOne_blocContent extends WP_Widget {

    /**
    * Sets up the widgets name etc
    */
    public function __construct() {
    $widget_ops = array(
    'classname' => 'widget_RSESectionOne_blocContent',
    'description' => 'PROGRAMME BLOC CONTENU',
    );
    parent::__construct( 'widget_RSESectionOne_blocContent', 'RSE Section PROGRAMME BLOC CONTENU', $widget_ops );
    }

    /**
    * Outputs the content of the widget
    *
    * @param array $args
    * @param array $instance
    */
    public function widget( $args, $instance ) {
        // outputs the content of the widget
        $number = $instance['number'];
        $title_one = $instance['title-one'];
        $title_two = $instance['title-two'];
        $objectif_title = $instance['objectif-title'];
        $objectif_detail = $instance['objectif-detail'];
        $action_title = $instance['action-title'];
        $action_detail = $instance['action-detail'];
        $background_img = $instance['background-img'];
        $like_name = $instance['like-name'];

        echo $args['before_widget'];
        ?>

        <div class="block-container"<?php if($background_img){ ?> style="background-color: transparent; background-image: url('<?php echo $background_img; ?>');"<?php } ?>>
            <div class="block-title">
                <?php
                if ( ! empty( $number ) ) {
                ?>
                    <h2 class="text-center"><?php echo $number ?></h2>
                <?php
                }
                if ( ! empty( $title_one ) ) {
                ?>
                    <h4 class="text-center text-uppercase"><?php echo $title_one ?></h4>
                    <?php
                }
                if ( ! empty( $title_two ) ) {
                ?>
                    <h5 class="text-center text-uppercase"><?php echo $title_two ?></h5>
                <?php
                }
                ?>
            </div><!-- /.bloc-title -->

            <div class="bloc-content">
            <?php
            if ( ! empty( $objectif_title ) ) {
                ?>
                 <h6 class="text-center text-uppercase"><?php echo $objectif_title ?></h6>
                <?php
                }
                if ( ! empty( $objectif_detail ) ) {
                ?>
                <p class="text-center"><?php echo $objectif_detail ?></p>
                <?php
                }
                if ( ! empty( $action_title ) ) {
                ?>
                <h6 class="text-center text-uppercase"><?php echo $action_title ?></h6>
                <?php
                }
                if ( ! empty( $action_detail ) ) {
                ?>
                <p class="text-center"><?php echo $action_detail ?></p>
                <?php
                }
                ?>
            </div> <!-- /.block-content -->
        </div><!-- /.block-container -->

        <?php
        $likeCounterlUrl = EASY_RECYCLAGE_STORE_URL."/subscription/getLikeCounter/".$like_name;

        $likeCounterValue = file_get_contents($likeCounterlUrl);
        $likeCounterValue = json_decode($likeCounterValue, TRUE);

        if($likeCounterValue)
        {
            $disabled = '';
            if(isset($_COOKIE['like_counter_'.$like_name]) && $_COOKIE['like_counter_'.$like_name]) {
                $disabled = ' disabled';
            }
            ?>
          <div class="block-action">
            <a class="like-button <?php echo $disabled; ?>" href="javascript:void(0);" data-target="<?php echo EASY_RECYCLAGE_STORE_URL."/subscription/incrementLikeCounter/". $like_name; ?>">Encouragez ce programme</a>
            <span class="like-value"><?php if($likeCounterValue['likeCounterValue']> 0){ ?>+<?php } ?><?php echo $likeCounterValue['likeCounterValue']; ?></span>
          </div>
        <?php } ?>

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
    * Processing widget options on save
    *
     * @param array $instance The widget options
    */
    public function form( $instance ) {
    // processes widget options to be saved
        $number =  isset( $instance[ 'number' ] ) ? $instance[ 'number' ] : '';
        $title_one =  isset( $instance[ 'title-one' ] ) ? $instance[ 'title-one' ] : '';
        $title_two =  isset( $instance[ 'title-two' ] ) ? $instance[ 'title-two' ] : '';
        $objectif_title =  isset( $instance[ 'objectif-title' ] ) ? $instance[ 'objectif-title' ] : '';
        $objectif_detail =  isset( $instance[ 'objectif-detail' ] ) ? $instance[ 'objectif-detail' ] : '';
        $action_title =  isset( $instance[ 'action-title' ] ) ? $instance[ 'action-title' ] : '';
        $action_detail =  isset( $instance[ 'action-detail' ] ) ? $instance[ 'action-detail' ] : '';
        $background_img =  isset( $instance[ 'background-img' ] ) ? $instance[ 'background-img' ] : '';
        $like_name =  isset( $instance[ 'like-name' ] ) ? $instance[ 'like-name' ] : '';

        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>"><?php _e( esc_attr( 'nombre :' ) ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number' ) ); ?>" type="text" value="<?php echo esc_attr( $number ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title-one' ) ); ?>"><?php _e( esc_attr( 'title un:' ) ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title-one' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title-one' ) ); ?>" type="text" value="<?php echo esc_attr( $title_one ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title-two' ) ); ?>"><?php _e( esc_attr( 'title two:' ) ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title-two' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title-two' ) ); ?>" type="text" value="<?php echo esc_attr( $title_two ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'objectif-title' ) ); ?>"><?php _e( esc_attr( 'objectif titre :' ) ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'objectif-title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'objectif-title' ) ); ?>" type="text" value="<?php echo esc_attr( $objectif_title ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'objectif-detail' ) ); ?>"><?php _e( esc_attr( 'objectif detail :' ) ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'objectif-detail' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'objectif-detail' ) ); ?>" type="text"><?php echo esc_attr( $objectif_detail ); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'action-title' ) ); ?>"><?php _e( esc_attr( 'action titre :' ) ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'action-title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'action-title' ) ); ?>" type="text" value="<?php echo esc_attr( $action_title ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'action-detail' ) ); ?>"><?php _e( esc_attr( 'action detail :' ) ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'action-detail' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'action-detail' ) ); ?>" type="text"><?php echo esc_attr( $action_detail ); ?></textarea>
        </p>
        <p>
          <label for="<?php echo esc_attr( $this->get_field_id( 'like-name' ) ); ?>"><?php _e( esc_attr( 'like name :' ) ); ?></label>
          <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'like-name' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'like-name' ) ); ?>" type="text" value="<?php echo esc_attr( $like_name ); ?>">
        </p>
        <p>
          <label for="<?php echo $this->get_field_name( 'background-img' ); ?>"><?php _e( 'Image:' ); ?></label>
          <input name="<?php echo $this->get_field_name( 'background-img' ); ?>" id="<?php echo $this->get_field_id( 'background-img' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $background_img ); ?>" />
          <input class="upload_image_button" type="button" value="Upload Image" />
        </p>

        <?php
    }
}
