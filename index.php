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
        add_action('enqueue_block_editor_assets', array($this, 'adminAssets'));
    }

    function adminAssets(){
        wp_enqueue_script('quiz-js', plugin_dir_url(__FILE__) . 'test.js', array('wp-blocks'));
    }

}

$articlequizbox = new ArticleQuizBox;