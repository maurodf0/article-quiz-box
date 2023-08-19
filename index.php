<?php 
/*
  Plugin Name: Article Quiz Block
  Description: A Custom Gutengberg Block in JSX
  Version: 1.0
  Author: Mauro
  Author URI: maurodefalco.it
*/

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class ArticleQuizBox {
    function __construct(){
        add_action('init', array($this, 'adminAssets')); 
    }

    function adminAssets(){
        //no more enqueue ma register, cause we load it via register_block_type after
        wp_register_script('quiz-js', plugin_dir_url(__FILE__) . 'build/index.js', array('wp-blocks', 'wp-element'));
        //this wordpress function load the front end of the react block we created (via Php and DB, a little slower)
        // with editor_script we load the js before registered and with the render callback we create a function that load the html
        register_block_type('quiz-plugin/article-quiz-block', array(
            'editor_script' => 'quiz-js',
            'render_callback' => array($this, 'theHTML')
        ));
    }

    function theHTML($attributes){
        // Bad Way
        //return '<p>Today the sky is ' . $attributes['skyColor'] . ' and the grass is ' . $attributes['grassColor'] . '. Awesome </p>';  } 
        ob_start(); ?>
        <h3>Today the sky is <?php echo esc_html($attributes['skyColor']); ?> and the grass is <?php echo esc_html($attributes['grassColor']); ?></h3>
        <?php return ob_get_clean(); 
}
}

$articlequizbox = new ArticleQuizBox;