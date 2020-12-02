<?php

namespace Annotate\Includes;

use Annotate\Includes\Note;

class ImageBlock
{
    public function imageBlockFilter($block_content, $block)
    {
        if ("core/image" !== $block['blockName']) {
            return $block_content;
        }

        $output;
        if (is_single()) {
            $output = '<div class="annotateImageContainer single">';
        } else {
            $output = '<div class="annotateImageContainer">';
        }
        //$output = '<div class="annotateImageContainer">';
        $output .= $block_content;
        $post_id = get_the_ID();

        $ns = new Note(1, 50, 50, 10, 'TEXT test');
        $output .= $ns->renderNote();
        //$post_metas = get_post_meta(get_the_ID());
        //$output .= var_dump($post_metas);

        $output .= '</div>';
        //$output .= var_dump(get_the_ID());
        if (is_single() && comments_open()) {
            //$output .= 'todo: feature add note from page';
        }
        //$output .= var_dump($block_content[]);

        return $output;
    }
}
