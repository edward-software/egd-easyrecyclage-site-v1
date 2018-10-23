<?php
/**
 * Plugin Name: Widget Home Slider
 * Plugin URI: sgs.wtf
 * Description: Slider for homepage
 * Version: 1.0
 * Author: sgs
 * Author URI: sgs.wtf
 */
// register Foo_Widget widget
function register_homePage_slider_widget() {
    register_widget( 'Widget_homePage_slider' );
}
add_action( 'widgets_init', 'register_homePage_slider_widget' );

class Widget_homePage_slider extends WP_Widget {

    /**
    * Sets up the widgets name etc
    */
    public function __construct() {
    $widget_ops = array(
    'classname' => 'widget_homePage_slider',
    'description' => 'homepage slider',
    );
    parent::__construct( 'widget_homePage_slider', 'Home page SLIDER', $widget_ops );
    }

    /**
    * Outputs the content of the widget
    *
    * @param array $args
    * @param array $instance
    */
    public function widget( $args, $instance ) {


        $sliders = array();
        for($i = 0; $i < 6; $i++) {

            ${'text'.$i} = isset( $instance[ 'text'.$i ] ) ? $instance[ 'text'.$i ] : '';
            ${'position'.$i} = isset( $instance[ 'position'.$i ] ) ? $instance[ 'position'.$i ] : '';
            ${'text_color'.$i} = isset( $instance[ 'text_color'.$i ] ) ? $instance[ 'text_color'.$i ] : '';
            ${'img'.$i} = isset( $instance[ 'img'.$i ] ) ? $instance[ 'img'.$i ] : '';
            ${'link'.$i} = isset( $instance[ 'link'.$i ] ) ? $instance[ 'link'.$i ] : '';

            if(${'text'.$i} != '' && ${'img'.$i} != '') {
                $sliders[] = array(
                    'text' => ${'text'.$i},
                    'position' => ${'position'.$i},
                    'text_color' => ${'text_color'.$i},
                    'img' => ${'img'.$i},
                    'link' => ${'link'.$i}
                );

            }
        }

    if(count($sliders)) {
        ?>

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php
        foreach ($sliders as $key => $slide) {
        ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $key; ?>" class="<?php if($key == 0){ ?> active<?php } ?>"><?php echo $key+1; ?></li>
        <?php
        }
        ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

        <?php
        foreach ($sliders as $key => $slide) {
        ?>
        <div class="item<?php if($key == 0){ ?> active<?php } ?>">
            <div class="fill" style="background-image:url('<?php echo $slide['img'] ?>');">
                <?php if(isset($slide['link']) && $slide['link'] != ''){ ?>
                  <a href="<?php echo $slide['link']; ?>" class="master-link"></a>
                <?php } ?>
            </div>
            <div class="carousel-caption-content <?php echo $slide['position'] ?>">
                <h1 class="slider-text-content" style="color:<?php echo $slide['text_color'] ?>"><?php echo $slide['text']; ?></h1>
            </div>
        </div>
        <?php
        }
    ?>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <!-- <span class="glyphicon glyphicon-chevron-left"></span> -->
        <img src="<?php bloginfo("template_directory"); ?>/images/home/Slider/slider-arrow-left.png" class="slider-arrow-left">
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
        <img src="<?php bloginfo("template_directory"); ?>/images/home/Slider/slider-arrow-right.png" class="slider-arrow-right">
    </a>

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
        for($i = 0; $i < 6; $i++) {

        ${'text'.$i} = isset( $instance[ 'text'.$i ] ) ? $instance[ 'text'.$i ] : '';
        ${'text_color'.$i} = isset( $instance[ 'text_color'.$i ] ) ? $instance[ 'text_color'.$i ] : '';
        ${'position'.$i} = isset( $instance[ 'position'.$i ] ) ? $instance[ 'position'.$i ] : '';
        ${'img'.$i} = isset( $instance[ 'img'.$i ] ) ? $instance[ 'img'.$i ] : '';
        ${'link'.$i} = isset( $instance[ 'link'.$i ] ) ? $instance[ 'link'.$i ] : '';

        ?>
        <p>

            <label for="<?php echo $this->get_field_name( 'text'.$i ); ?>"><?php _e( 'Text:' ); ?></label>
            <textarea class="widefat" id="<?php echo $this->get_field_id( 'text'.$i ); ?>" name="<?php echo $this->get_field_name( 'text'.$i ); ?>" type="text"><?php echo esc_attr( ${'text'.$i} ); ?></textarea>

        </p>
        <p>

            <label for="<?php echo $this->get_field_name( 'position'.$i ); ?>"><?php _e( 'Text Position:' ); ?>
                <select class='widefat' id="<?php echo $this->get_field_id( 'position'.$i ); ?>"
                        name="<?php echo $this->get_field_name( 'position'.$i ); ?>" type="text">
                <option value='pull-left-text-left'<?php echo (esc_attr(${'position'.$i}) == 'pull-left-text-left')?'selected':''; ?>>
                    pull-left-text-left
                </option>
                <option value='pull-left-text-right'<?php echo (esc_attr(${'position'.$i}) == 'pull-left-text-right')?'selected':''; ?>>
                    pull-left-text-right
                </option>
                <option value='pull-left-text-center'<?php echo (esc_attr(${'position'.$i}) == 'pull-left-text-center')?'selected':''; ?>>
                    pull-left-text-center
                </option>
                <option value='pull-right-text-left'<?php echo (esc_attr(${'position'.$i}) == 'pull-right-text-left')?'selected':''; ?>>
                    pull-right-text-left
                </option>
                <option value='pull-right-text-right'<?php echo (esc_attr(${'position'.$i}) == 'pull-right-text-right')?'selected':''; ?>>
                    pull-right-text-right
                </option>
                <option value='pull-right-text-center'<?php echo (esc_attr(${'position'.$i}) == 'pull-right-text-center')?'selected':''; ?>>
                    pull-right-text-center
                </option> 
                </select>                
            </label>
            
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'text_color'.$i ); ?>"><?php _e( 'Text Color:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'text_color'.$i ); ?>" name="<?php echo $this->get_field_name( 'text_color'.$i ); ?>" type="text" value="<?php echo esc_attr( ${'text_color'.$i} ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'img'.$i ); ?>"><?php _e( 'Image:' ); ?></label>
            <input name="<?php echo $this->get_field_name( 'img'.$i ); ?>" id="<?php echo $this->get_field_id( 'img'.$i ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( ${'img'.$i} ); ?>" />
            <input class="upload_image_button" type="button" value="Upload Image" />
        </p>
          <p>
            <label for="<?php echo $this->get_field_name( 'link'.$i ); ?>"><?php _e( 'Link:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'link'.$i ); ?>" name="<?php echo $this->get_field_name( 'link'.$i ); ?>" type="text" value="<?php echo esc_attr( ${'link'.$i} ); ?>" />
          </p>
<hr>
        <?php
        }
    }
}
