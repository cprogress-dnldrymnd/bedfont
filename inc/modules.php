<?php
function action_module_content()
{
    // Check if a post was updated (add your specific conditions here)
    if (did_action('post_updated')) {
        // Check if this is an autosave
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
            return;
        $post_types = array(
            'page',
        );
        if (in_array(get_post_type(), $post_types)) {
            $content_html = '<!-- wp:html -->';
            $content_html .= modules();
            $content_html .= '<!-- /wp:html -->';

            if ($content_html) {
                $my_post = array(
                    'ID'           => get_the_ID(),
                    'post_content' => $content_html
                );
                wp_update_post($my_post);
            }
        }
    }
}
//add_action('shutdown', 'action_module_content');

function modules()
{
    $html = '';
    $modules = get__post_meta_by_id(get_the_ID(), 'modules');
    foreach ($modules as $key => $module) {
        $type = $module['_type'];
        switch ($type) {
            case 'hero':
                $style = $module['style'];
                $html .= get_template_part('template-parts/modules/hero', $style, $module);
                break;
        }
    }
    return $html;
}
