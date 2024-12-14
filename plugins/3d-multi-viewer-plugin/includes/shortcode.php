<?php
// Shortcode handler
function multi_viewer_shortcode($atts) {
    $atts = shortcode_atts(
        array(
            'type' => 'spline',
            'src' => '',
            'width' => '100%',
            'height' => '500px',
            'background' => 'transparent',
            'border' => 'none',
            'shadow' => 'none',
            'padding' => '0',
        ),
        $atts
    );

    if (empty($atts['src'])) {
        return '<p>Error: No model URL provided.</p>';
    }

    $style = 'width:' . esc_attr($atts['width']) . ';';
    $style .= 'height:' . esc_attr($atts['height']) . ';';
    $style .= 'background:' . esc_attr($atts['background']) . ';';
    $style .= 'border:' . esc_attr($atts['border']) . ';';
    $style .= 'box-shadow:' . esc_attr($atts['shadow']) . ';';
    $style .= 'padding:' . esc_attr($atts['padding']) . ';';

    return '<iframe src="' . esc_url($atts['src']) . '" frameborder="0" style="' . $style . '"></iframe>';
}
add_shortcode('multiviewer', 'multi_viewer_shortcode');