<?php

function rts()
{
    return '<sup>&#174;</sup>';
}
add_shortcode('rts', 'rts');

function permalink($atts)
{
    extract(
        shortcode_atts(
            array(
                'id' => '',
            ),
            $atts
        )
    );
    return get_the_permalink($id);
}
add_shortcode('permalink', 'permalink');
function blogs($atts)
{
    extract(
        shortcode_atts(
            array(
                'source' => '',
                'numberposts' => 3,
            ),
            $atts
        )
    );
    $args['post_type'] = 'post';
    $args['numberposts'] = $numberposts;

    if ($source == 'most-recent') {
        $args['order'] = 'desc';
        $args['orderby'] = 'date';
    }

    $posts = get_posts($args);
    $html  = "<section>";

    foreach ($posts as $post) {
    }
    $html  = "<section>";
}

add_shortcode('blogs', 'blogs');
