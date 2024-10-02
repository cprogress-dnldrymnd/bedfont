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
                $html .= _two_column_image_text($module);
                break;
            case 'text':
                $html .= _text($module);
                break;
            case 'row_animation':
                $html .= _row_animation($module);
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



    $button = ___button(array(
        'button_type'       => $module['button_type'],
        'button_text'       => $module['button_text'],
        'button_url'        => isset($module['button_url']) ? $module['button_url'][0] : false,
        'button_custom_url' => $module['button_custom_url'],
        'button_style'      => $module['button_style'],
        'button_target'     => $module['button_target'],
    ));

    return "<section class='two-column-image-text'>
	<div class='container'>
		<div class='row'>
			<div class='col-12 col-lg-6 ps-md-5 who-we-are-home my-auto'>
				<h2 class='text-left'>$heading</span></h2>
				$description
                $button
		
			</div>
			<div class='col-12 col-lg-6'>
				$image
			</div>
		</div>
	</div>
</section>";
}


function _text($module)
{
    $heading = $module['heading'];
    $description = isset($module['description']) ? wpautop($module['description']) : '';
    return "<section class='text-section text-center'>
	<div class='container'>
	<h2 class='text-center'>$heading</span></h2>
				$description
	</div>
</section>";
}

function _row_animation($module, $html = "<section class='row-animation'>")
{
    $items = $module['items'];
    $html .= "<div class='container'>";
    foreach ($items as $item) {
        $heading = $item['heading'];
        $subheading = $item['subheading'];
        $color = $item['color'];
        $style = $item['style'];
        $image = isset($item['image']) ? wp_get_attachment_image($item['image'], 'large') : false;
        $description = isset($item['description']) ? wpautop($item['description']) : '';
        $button_style = 'button-' . $color;

        $button = ___button(array(
            'button_type'       => $item['button_type'],
            'button_text'       => $item['button_text'],
            'button_url'        => isset($item['button_url']) ? $item['button_url'][0] : false,
            'button_custom_url' => $item['button_custom_url'],
            'button_style'      => $button_style,
            'button_target'     => $item['button_target'],
        ));

        if ($item['button_type'] == 'internal') {
            $url = $item['button_url'];
        } else {
            $url = $item['button_custom_url'];
        }
        $permalink = "[permalink id='$url']";

        $html .= "<div class='slideanim row $style' style='--color: var(--$color)'>
	<div class='col-12 col-lg-6 my-auto order-2 order-lg-1'>
		<div class='product-bubble-home' >
			<h2>$heading</h2>
			<h3>$subheading</h3>
			$description
			$button
		</div>
	</div>
	<div class='col-12 col-lg-6 order-1 order-lg-2'>
		<a href='$permalink' target='_blank' title='Click for the NObreath website'
			rel='noopener'>
                $image
            </a>
	</div>
</div>
<div class='slideanim row product-break'>
	<div class='col'></div>
	<div class='col'></div>
	<div class='col my-auto p-0'>
		<hr class='ms-auto'>
	</div>
	<div class='col p-0'>
		<img src='https://bedfont.theprogressteam.com/wp-content/themes/bedfont/assets/img/logo-bubbles.png'
			class='img-fluid' alt='Bedfont Logo'>
	</div>
	<div class='col my-auto p-0'>
		<hr>
	</div>
	<div class='col'></div>
	<div class='col'></div>
</div>";
    }
    $html .= "</div>";
    $html .= "</section>";
    return $html;
}

function ___button($data)
{
    $button_type = isset($data['button_type']) ? $data['button_type'] : false;
    $button_text = isset($data['button_text']) ? $data['button_text'] : false;
    $button_url = isset($data['button_url']) ? $data['button_url'] : false;
    $button_custom_url = isset($data['button_custom_url']) ? $data['button_custom_url'] : false;
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
        $button_url = $button_custom_url;
        $tag = 'a';
        $link = "href='$button_custom_url'";
    }

    if ($button_text && $link && $display == true) {
        $html = "<div class='button-box $button_style'>";
        $html .= "<$tag class='btn $class' $link $button_target>";
        $html .= $button_text;
        $html .= "<i
						class='fa fa-arrow-right ms-1' aria-hidden='true'></i>";
        $html .= "</$tag>";
        $html .= "</div>";

        return $html;
    }
}
