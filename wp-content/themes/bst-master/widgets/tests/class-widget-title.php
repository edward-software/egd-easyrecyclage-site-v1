<?php
/**
 * Plugin Name: Widget function
 * Plugin URI: sgs.wtf
 * Description: Un widget d'exemple
 * Version: 1.0
 * Author: sgs
 * Author URI: sgs.wtf
 */

add_action('widgets_init','bst_register_widget_init');


function bst_register_widget_init(){
    register_widget("add_title_widget");
}


class add_title_widget extends WP_widget{

    function add_title_widget(){
        $options = array(
            "classname" => "col-md-4", // class du widget dans le dDOM
            "description" => "Un widget de titre h3 col-md-"
        );
        $this->WP_widget("add_title_widget","Widget text col-md-8",$options);
    }
// gestion de la vue
    function widget($args,$instance){
        extract($args);
        echo $before_widget;
        ?>
        <h3 class="text-center"><?php echo $instance["title"]; ?></h3>
        <hr>
        <?php
        echo $after_widget;
    }

    function update($new,$old){
        return $new;
    }
    // formulaire
    function form($instance){
        $defaut = array(
            "title" => "soutenez wvf tout en recyclant"
        );
        $instance = wp_parse_args($instance,$defaut)
        ?>
        <p>
            <label for="<?php echo $this->get_field_id("title"); ?>">Nom : </label>
            <input value="<?php echo $instance["title"]; ?>" name="<?php echo $this->get_field_name("title"); ?>" id="<?php echo $this->get_field_id("title"); ?>"type="text"/>
        </p>
        <?php
    }
}
