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
            case 'two_column_image_text':
                $style = $module['style'];
                $html .= _two_column_image_text($module);
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


function _two_column_image_text($module)
{
    $heading = $module['heading'];
    $description = isset($module['description']) ? wpautop($module['description']) : '';
    $image = isset($module['image']) ? wp_get_attachment_image($module['image'], 'large') : '';

    $button_type = $module['button_type'];
    $button_style = $module['button_style'];
    $button_text = $module['button_text'];
    $button_url = $module['button_url'];
    $button_url_custom = $module['button_url_custom'];
    $button_target = $module['button_target'];

    $button = ___button(array(
        'button_type'       => $button_type,
        'button_text'       => $button_text,
        'button_url'        => isset($button_url) ? $button_url : false,
        'button_url_custom' => $button_url_custom,
        'button_style'      => $button_style,
        'button_target'     => $button_target,
    ));

    return "<section class='two-column-image-text'>
	<div class='container'>
		<div class='row'>
			<div class='col-12 col-lg-6 ps-md-5 who-we-are-home my-auto'>
				<h2 class='text-left'>$heading</span></h2>
				$description
                $button
				<a href='about-us' class='btn btn-who-we-are' title='Click here for more about Bedfont'>About Us <i
						class='fa fa-arrow-right ms-1' aria-hidden='true'></i></a>
			</div>
			<div class='col-12 col-lg-6'>
				$image
			</div>
		</div>
	</div>
</section>";
}




function ___button($data)
{
    $button_type = isset($data['button_type']) ? $data['button_type'] : false;
    $button_text = isset($data['button_text']) ? $data['button_text'] : false;
    $button_url = isset($data['button_url']) ? $data['button_url'] : false;
    $button_url_custom = isset($data['button_url_custom']) ? $data['button_url_custom'] : false;
    $button_style = isset($data['button_style']) ? $data['button_style'] : false;
    $button_text = isset($data['button_text']) ? $data['button_text'] : false;
    $button_target = isset($data['button_target']) ? $data['button_target'] : false;
    $link = '';
    $class = '';
    $display = true;


    if ($button_type != 'popups' && $button_type != 'custom') {
        $tag = 'a';
        $post_status = get_post_status($button_url['id']);
        $button_url = '[permalink id=' . $button_url['id'] . ']';
        $link = "href='$button_url'";
        if ($post_status != 'publish') {
            $display = false;
        }
    } else if ($button_type == 'custom') {
        $button_url = $button_url_custom;
        $tag = 'a';
        $link = "href='$button_url_custom'";
    }

    if ($button_text && $link && $display == true) {
        $html = "<div class='button-box $button_style'>";
        $html .= "<$tag class='$class' $link $button_target>";
        $html .= $button_text;
        $html .= "<i
						class='fa fa-arrow-right ms-1' aria-hidden='true'></i>";
        $html .= "</$tag>";
        $html .= "</div>";

        return $html;
    }
}
