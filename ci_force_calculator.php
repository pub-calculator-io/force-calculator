<?php
/*
Plugin Name: CI Force calculator
Plugin URI: https://www.calculator.io/force-calculator/
Description: Easy to use force calculator helps determine the unknown variable in the force equation (F = ma). Force = mass × acceleration.
Version: 1.0.0
Author: Force Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_force_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Force Calculator by www.calculator.io";

function display_calcio_ci_force_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Force Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_force_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_force_calculator', 'display_calcio_ci_force_calculator' );