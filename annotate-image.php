<?php

/**
 * Plugin Name: Annotate Image
 * Description: Annotate images
 * Author: Are Kristoffer Lamo
 */

declare(strict_types=1);

namespace Annotate;

if (!defined('ABSPATH')) {
    exit;
}

if (! defined('WP_ANNOTATE_FILE')) {
    define('WP_ANNOTATE_FILE', __FILE__);
}

require_once plugin_dir_path(__FILE__) . 'Autoloader.php';

//use Annotate\Includes\Note;
//use Annotate\Includes\NoteSize;
use Annotate\Includes\ImageBlock;
use Annotate\Frontend\Frontend;

//test
//$ns = new Includes\Note(1, 50, 50, 10, 'TEXT test');

//Working
add_filter('render_block', 'Annotate\Includes\ImageBlock::imageBlockFilter', 10, 3);

//Frontend::addStyleSheet();
//$vd = new Annotate\Frontend\Frontend();
//Annotate\Frontend\Frontend::addStyleSheet();
//Annotate\Frontend\Frontend::addStyleSheet();
$styleId = 'AnnotateImage';
$styleFileName = 'note.css';
$styleUrl = plugin_dir_url(__FILE__) . 'Frontend/css/' . $styleFileName;

wp_register_style($styleId, $styleUrl);
wp_enqueue_style($styleId);
