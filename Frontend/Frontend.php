<?php

declare(strict_types=1);

namespace Annotate\Frontend;

if (!defined('ABSPATH')) {
    exit;
}

class Frontend
{
    public function addStyleSheet()
    {
        $styleId = 'AnnotateImage';
        $styleFileName = 'note.css';
        $styleUrl = plugin_dir_url(__FILE__) . 'css/' . $styleFileName;

        wp_register_style($styleId, $styleUrl, array(), $this->version, 'all');
        wp_enqueue_style($styleId);
    }
}
