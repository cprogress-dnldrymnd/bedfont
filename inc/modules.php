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
                if ($style == 'style-1') {
                    $html .= _hero_style_1($module);
                } else {
                    $html .= _hero_style_2($module);
                }
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
            case 'blogs':
                $html .= _blogs($module);
                break;
            case 'slider':
                $html .= _slider($module);
                break;
            case 'text_over_curve_shape':
                $html .= _text_over_curve_shape($module);
                break;
            case 'image_grid':
                $html .= _image_grid($module);
                break;
            case 'icon_box':
                $html .= _icon_box($module);
                break;
        }
    }
    return $html;
}


function _hero_style_1($module)
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

function _hero_style_2($module)
{

    $youtube_url = $module['youtube_url'];
    $heading = $module['heading'];
    $description = isset($module['subheading']) ? wpautop($module['subheading']) : '';

    return "<section class='subtle-bg'>
	<img decoding='async' src='https://bedfont.theprogressteam.com/wp-content/themes/bedfont/assets/img/subtle-bg.jpg' class='subtle-bg' alt='Image of subtle website background'>
	<div class='container'>
		<div class='row'>
			<div class='col-12 col-md-6 pe-5 my-auto'>
				<h1 class='text-left mt-lg-0'>$heading</h1>
				<p>$description</p>
				<a target='_self' href='https://bedfont.theprogressteam.com/contact/' class='btn btn-smokerlyzer float-none' title='' rel='noopener'><span> Contact Us</span><i class='fa fa-arrow-right ms-1' aria-hidden='true'></i></a>
			</div>
			<div class='col-12 col-md-6 mt-5 mt-lg-0'>
				<iframe width='560' height='315' src='$youtube_url' frameborder='0' allowfullscreen='' illow-src='$youtube_url' class='w-100 br-30'></iframe>
			</div>
		</div>
	</div>
</section>";
}

function _two_column_image_text($module)
{
    $heading = $module['heading'];
    $style = $module['style'];
    $color = $module['color'];
    $image_position = $module['image_position'];
    $description = isset($module['description']) ? wpautop($module['description']) : '';
    $image = isset($module['image']) ? wp_get_attachment_image($module['image'], 'large') : '';

    if ($style == 'style-1') {
        $col_1_class = 'col-12 col-lg-6 ps-md-5 who-we-are-home my-auto';
        $col_2_class = 'col-12 col-lg-6';
    } else {
        $col_1_class = 'col-12 col-lg-7 my-auto order-2 order-lg-1';
        $col_2_class = 'col-12 col-lg-5 order-1 order-lg-2 d-none d-md-block';

        if ($color) {
            $style_inline = "style='--color: var(--$color)'";
        }
    }



    $button = ___button(array(
        'button_type'       => $module['button_type'],
        'button_text'       => $module['button_text'],
        'button_url'        => isset($module['button_url']) ? $module['button_url'][0] : false,
        'button_custom_url' => $module['button_custom_url'],
        'button_style'      => $module['button_style'],
        'button_target'     => $module['button_target'],
    ));

    return "<section class='two-column-image-text $style'>
	<div class='container'>
		<div class='row $image_position'>
			<div class='$col_1_class' $style_inline>
	<div class='inner'>

				<h2 class='text-left'>$heading</span></h2>
				$description
                $button
			</div>
			</div>
			<div class='$col_2_class'>
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
            'button_style'      => $button_style . ' button-box-shadow',
            'button_target'     => $item['button_target'],
        ));

        if ($item['button_type'] == 'internal-url') {
            $url = $item['button_url'][0];
            $permalink = '[permalink id="' . $url . '"]';
        } else {
            $permalink = $item['button_custom_url'];
        }

        $html .= "<div class='slideanim row $color $style' style='--color: var(--$color)'>
	<div class='col-12 col-lg-6 my-auto order-2 order-lg-1'>
		<div class='product-bubble-home' >
			<h2>$heading</h2>";


        if ($subheading) {
            $html .= "<h3>$subheading</h3>";
        }


        $html .= "$description
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

function _blogs($module)
{
    $heading = $module['heading'];
    $description = isset($module['description']) ? wpautop($module['description']) : '';

    $html  = "<section class='blogs grey_bg'>";
    $html .= "<div class='container'>";
    $html .= "<div class='text-center'>";
    $html .= "<h2>$heading</h2>
				";
    $html .= $description;
    $html .= "</div>";

    $html .= "[blogs source='most-recent' posts_per_page='3']";
    $html .= "<div class='button-box mt-5 text-center button-blue'><a class='btn ' href='/news' target='_blank' rel='noopener'>View All<i class='fa fa-arrow-right ms-1' aria-hidden='true'></i></a></div>";

    $html .= "</div>";

    $html  .= "</section>";

    return $html;
}

function _slider($module)
{
    $heading = $module['heading'];
    $items = $module['items'];
    $description = isset($module['description']) ? wpautop($module['description']) : '';
    $glide_slider = __glide_slider($items);
    return "<section class='slider overflow-hidden'>
	<div class='container'>
	<h2 class='text-left'>$heading</span></h2>
				$description
                $glide_slider
	</div>
</section>";
}

function _text_over_curve_shape($module)
{
    $heading = $module['heading'];
    $description = isset($module['description']) ? wpautop($module['description']) : '';
    $html = "<section class='slideanim rounded_top text-white mt-5 slide'>
	<div class='container'>
		<div class='col-12'> ";

    if ($heading) {
        $html .= "<h2 class='text-center'>$heading</h2>";
    }

    $html .= "$description
		</div>
	</div>
</section>";

    return $html;
}

function _image_grid($module)
{
    $items = $module['items'];
    $html = "<section class='py-0 image-grid'>
	<div class='container-fluid px-0'>
		<div class='row gx-0'>";

    foreach ($items as $item) {
        $image = wp_get_attachment_image($item['image'], 'large');
        if ($item['button_type'] == 'internal-url') {
            $url = $item['button_url'][0]['id'];
            $permalink = '[permalink id="' . $url . '"]';
        } else {
            $permalink = $item['button_custom_url'];
        }
        $button = ___button(array(
            'button_type'       => $item['button_type'],
            'button_text'       => $item['button_text'],
            'button_url'        => isset($item['button_url']) ? $item['button_url'][0] : false,
            'button_custom_url' => $item['button_custom_url'],
            'button_style'      => 'button-large',
            'button_target'     => $item['button_target'],
            'button_icon' => false
        ));


        $html .= "<div class='col-12 col-lg-4 home_panel_bg'>
				<div class='overflow-hidden h-100 grid-box position-relative'>
                <a href='$permalink'>
					<div class='bg_image h-100'>$image</div>
					<h3>$button</h3>
				</div>
			</div>";
    }


    $html .= "</div>
	</div>
</section>";

    return $html;
}

function _icon_box($module)
{
    $heading = $module['heading'];
    $items = $module['items'];
    $style = $module['style'];

    $description = isset($module['description']) ? wpautop($module['description']) : '';

    $html = "<section class='icon-boxes $style'>
	<div class='container'>
    <h2 class='mb-3'>Our <span class='blue-text'>$heading</span></h2>";
    if ($style == 'style-1') {
        $class = 'col-6 col-lg-2';
    }
    $html .= "<div class='row values d-none d-md-flex'>";

    foreach ($items as $item) {
        $heading = $item['heading'];
        $text = isset($module['text']) ? wpautop($module['text']) : '';


        $html .= "<div class='$class'>";
        $html .= "<div class='icon-box'>";
        $html .= wp_get_attachment_image($item['image'], 'medium');
        $html .= "</div>";

        if ($heading) {
            $html .= "<h3>$heading</h3>";
        }

        if ($text) {
            $html .= "<div class='icon-desc'>";
            $html .= $text;
            $html .= "</div>";
        }
        $html .= "</div>";
    }

    $html .= "</div>";
    if ($style == 'style-1') {
        $html .= "<div class='desc text-center'>";
        $html .= $description;
        $html .= "</div>";
    }


    $html .= "
	</div>
</section>";

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
    $button_icon = isset($data['button_icon']) ? $data['button_icon'] : true;


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
        if ($button_icon) {
            $html .= "<i class='fa fa-arrow-right ms-1' aria-hidden='true'></i>";
        }

        $html .= "</$tag>";
        $html .= "</div>";

        return $html;
    }
}

function __glide_slider($items)
{

    $html = "<div class='awards-slider mt-5'><div class='white-space'></div><div class='glide'>
	<div class='glide__track' data-glide-el='track'>
		<ul class='glide__slides'>";

    foreach ($items as $item) {
        $heading = $item['heading'];
        $description = $item['description'];
        $image = $item['image'];
        $highlights = $item['highlight'];
        $style = $item['style'];

        $html .= "<li class='glide__slide'>";
        $html .= wp_get_attachment_image($image, 'large');
        $html .= "<div class='content'>";
        if ($heading && $style == 'style-1') {
            $html .= "<h3 class='text-left'>$heading</h3>";
        }

        if ($description) {
            $html .= "<div class='timeline-content'>";
            $html .= wpautop($description);
            $html .= "</div>";
        }

        if ($highlights) {
            $html .= "<div class='hightlights'>";
            foreach ($highlights as $highlight) {
                $html .= "<span>";
                $html .= $highlight['text'];
                $html .= "</span>";
            }
            $html .= "</div>";
        }

        $html .= "</div>";

        $html .= "</li>";
    }

    $html .= "</ul>
	</div>[__glide_arrows]
</div></div>";

    return $html;
}
