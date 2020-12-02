<?php

function annotate_image_block_fitler($block_content, $block)
{
    if ("core/image" !== $block['blockName']) {
        return $block_content;
    }

    $output = '<div class="MYCONTAINER">';
    $output .= $block_content;
    $output .= '</div>';

    return $output;
}
