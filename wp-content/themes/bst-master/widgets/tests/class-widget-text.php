<?php
/**
 * Plugin Name: Widget function
 * Plugin URI: sgs.wtf
 * Description: Un widget d'exemple
 * Version: 1.0
 * Author: sgs
 * Author URI: sgs.wtf
 */

add_action('widgets_init','bst_register_widget_text_init');


function bst_register_widget_text_init(){
    register_widget("add_text_widget");
}


class add_text_widget extends WP_widget{

    function add_text_widget(){
        $options = array(
            "classname" => "col-md-8", // class du widget dans le dDOM
            "description" => "Un widget de text col-md-8"
        );
        $this->WP_widget("add_text_widget","Widget text col-md-8",$options);
    }
// gestion de la vue
    function widget($args,$instance){
        extract($args);
        echo $before_widget;
        ?>
        <p class="text-justify"><?php echo $instance["text"]; ?></p>
        <a href="<?php echo "http://". $instance["link"]; ?>" type="submit" class="btn">En savoir plus+</a>
        <?php
        echo $after_widget;
    }

    function update($new,$old){
        return $new;
    }
    // formulaire
    function form($instance){
        $defaut = array(
            "text" => "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.",
            "link" => "https://www.google.fr"
        );
        $instance = wp_parse_args($instance,$defaut)
        ?>
        <p>
            <label for="<?php echo $this->get_field_id("nom"); ?>">Nom : </label>
            <input value="<?php echo $instance["text"]; ?>" name="<?php echo $this->get_field_name("text"); ?>" id="<?php echo $this->get_field_id("text"); ?>"type="text"/>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id("link"); ?>">Nom : </label>
            <input value="<?php echo $instance["link"]; ?>" name="<?php echo $this->get_field_name("link"); ?>" id="<?php echo $this->get_field_id("link"); ?>"type="text"/>
        </p>
        <?php
    }

}
