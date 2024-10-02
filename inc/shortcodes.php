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
    $html = "<div class='news-home pt-5 pb-3'>";
    $html .= "<div class='wp-block-query is-layout-flow wp-block-query-is-layout-flow'>";
    $html .= "<ul class='is-flex-container columns-3 wp-block-post-template is-layout-flow wp-block-post-template-is-layout-flow'>";

    foreach ($posts as $post) {
        $html .= _post_grid($post);
    }
    $html  .= "<ul>";
    $html  .= "<div>";
    $html  .= "<div>";

    return $html;
}

add_shortcode('blogs', 'blogs');

function _post_grid($post)
{
    $post_id = $post->ID;
    $post_title = $post->post_title;
    $post_date = get_the_date('', $post_id);
    $permalink = "[permalink id=$post_id]";
    $image = get_the_post_thumbnail($post_id, 'large');

    return "<li class='wp-block-post post-$post_id post type-post status-publish format-standard has-post-thumbnail '>
        <figure class='wp-block-post-featured-image'>
            <a href='$permalink' target='_self' rel='noopener'>
                $image
            </a>
        </figure>
    <div class='p-3'>
        <div class='has-text-align-center wp-block-post-date has-small-font-size'>$post_date</div>

        <h2 class='has-text-align-center wp-block-post-title has-medium-font-size'>$post_title</h2>
        </div>
    </li>";
    
}
