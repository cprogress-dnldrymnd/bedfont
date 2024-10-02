<?php
function action_module_content()
{
    // Check if a post was updated (add your specific conditions here)
    if (did_action('post_updated')) {
        // Check if this is an autosave
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
            return;
        $template = get_page_template_slug();
        if ($template == 'templates/page-modules.php') {
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
add_action('shutdown', 'action_module_content');

function modules()
{
    $html = '';
    $modules = get__post_meta_by_id(get_the_ID(), 'modules');
    foreach ($modules as $key => $module) {
        $type = $module['_type'];
        switch ($type) {
            case 'hero':
                $style = $module['style'];
                $html .= _hero($module);
                break;
        }
    }
    return $html;
}


function _hero($module)
{

    $heading = $module['heading'];
    $subheading = $module['subheading'];
    $bg_image = $module['bg_image'];

    if ($bg_image) {
        $bg = wp_get_attachment_image_url($bg_image, 'full');
        $style = "style='background-image: $bg'";
    }

    return "<section id='home_bg' class='hero-style-1' $style>
    <div class='container '>
        <div class='row'>
            <div class='col-12 col-lg-6 my-auto d-block order-2 order-lg-1'>
                <h1>$heading</h1>
                <h2>$subheading</h2>
                <div id='line_top'></div>
                <div id='line_bottom'></div>
            </div>
        </div>
    </div>
</section>";
}
