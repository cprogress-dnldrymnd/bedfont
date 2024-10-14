<?php
function action_module_content()
{
    // Check if a post was updated (add your specific conditions here)
    if (did_action('post_updated')) {
        // Check if this is an autosave
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
            return;
        $template = get_page_template_slug();
        if ($template == 'templates/page-modules.php' || get_post_type() == 'layouts') {
            $content_html = '<!-- wp:html -->';
            $content_html .= modules(get_the_ID());
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

function modules($id)
{
    $html = '';

    $modules = get__post_meta_by_id($id, 'modules');
    foreach ($modules as $key => $module) {
        $type = $module['_type'];
        $section_id_val = $module['section_id'];
        $section_classes_val = $module['section_classes'];
        $section_id_default = "module-$id-$type-$key";
        $section_id = $section_id_val ? $section_id_val : $section_id_default;
        $section_classes = $section_classes_val ? $section_classes_val : '';

        switch ($type) {
            case 'layouts':
                $layouts = $module['layouts'];
                foreach ($layouts as $layout) {
                    $layout_id = $layout['id'];
                    $html .= "[layouts id='$layout_id']";
                }
                break;
            case 'hero':
                $style = $module['style'];
                if ($style == 'style-1') {
                    $html .= _hero_style_1($module, $section_id, $section_classes);
                } else if ($style == 'style-2' || $style == 'style-2-image') {
                    $html .= _hero_style_2($module, $section_id, $section_classes);
                } else if ($style == 'style-3') {
                    $html .= _hero_style_3($module, $section_id, $section_classes);
                } else {
                    $html .= _hero_style_4($module, $section_id, $section_classes);
                }
                break;
            case 'two_column_image_text':
                $style = $module['style'];
                if ($style == 'style-4') {
                    $html .= _two_column_image_text_style_4($module, $section_id, $section_classes);
                } else if ($style == 'style-5') {
                    $html .= _two_column_image_text_style_5($module, $section_id, $section_classes);
                } else if ($style == 'style-6') {
                    $html .= _two_column_image_text_style_6($module, $section_id, $section_classes);
                } else if ($style == 'style-7') {
                    $html .= _two_column_image_text_style_7($module, $section_id, $section_classes);
                } else {
                    $html .= _two_column_image_text($module, $section_id, $section_classes);
                }

                break;
            case 'text':
                $html .= _text($module, $section_id, $section_classes);
                break;
            case 'two_column_text':
                $html .= _two_column_text($module, $section_id, $section_classes);
                break;
            case 'row_animation':
                $html .= _row_animation($module, $section_id, $section_classes);
                break;
            case 'blogs':
                $html .= _blogs($module, $section_id, $section_classes);
                break;
            case 'slider':
                $html .= _slider($module, $section_id, $section_classes);
                break;
            case 'text_over_curve_shape':
                $html .= _text_over_curve_shape($module, $section_id, $section_classes);
                break;
            case 'image_grid':
                $html .= _image_grid($module, $section_id, $section_classes);
                break;
            case 'icon_box':
                $html .= _icon_box($module, $section_id, $section_classes);
                break;
            case 'instagram_feed':
                $html .= _instagram_feed($module, $section_id, $section_classes);
                break;
            case 'logo_slider':
                $html .= _logo_slider($module, $section_id, $section_classes);
                break;
            case 'careers':
                $html .= _careers($module, $section_id, $section_classes);
                break;
            case 'accordion':
                $html .= _accordion($module, $section_id, $section_classes);
                break;
            case 'form':
                $html .= _form($module, $section_id, $section_classes);
                break;
            case 'map':
                $html .= _map($module, $section_id, $section_classes);
                break;
        }
    }
    return $html;
}


function _hero_style_1($module, $section_id, $section_classes)
{

    $heading = $module['heading'];
    $subheading = $module['subheading'];
    $bg_image = $module['bg_image'];

    if ($bg_image) {
        $bg = wp_get_attachment_image_url($bg_image, 'full');
        $style = "style='background-image: $bg'";
    }

    return "<section id='home_bg' class='hero-style-1 $section_classes' id='$section_id' $style>
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

function _hero_style_2($module, $section_id, $section_classes)
{

    $youtube_url = $module['youtube_url'];
    $image = $module['image'];
    $heading = $module['heading'];
    $description = isset($module['subheading']) ? wpautop($module['subheading']) : '';
    $style = $module['style'];



    $button_args = serialize(array(
        'button_type'       => $module['button_type'],
        'button_text'       => $module['button_text'],
        'button_url'        => isset($module['button_url']) ? $module['button_url'][0] : false,
        'button_custom_url' => $module['button_custom_url'],
        'button_style'      => $module['button_style'] . ' button-box-shadow',
        'button_target'     => $module['button_target'],
    ));

    $button = "[button args='$button_args']";

    $html = "<section class='subtle-bg $section_classes' id='$section_id'>
	<img decoding='async' src='https://bedfont.theprogressteam.com/wp-content/themes/bedfont/assets/img/subtle-bg.jpg' class='subtle-bg' alt='Image of subtle website background'>
	<div class='container'>
		<div class='row'>
			<div class='col-12 col-md-6 pe-5 my-auto'>
				<h1 class='text-left mt-lg-0'>$heading</h1>
				<p>$description</p>
				$button
			</div>
			<div class='col-12 col-md-6 mt-5 mt-lg-0'>";

    if ($style == 'style-2') {
        $html .= "<iframe width='560' height='315' src='$youtube_url' frameborder='0' allowfullscreen='' illow-src='$youtube_url' class='w-100 br-30'></iframe>";
    } else {
        $html .= wp_get_attachment_image($image, 'large;', false, array(
            'class' => 'img-fluid br-30'
        ));
    }

    $html .= "</div>
		</div>
	</div>
</section>";
    return $html;
}

function _hero_style_3($module)
{

    $heading = $module['heading'];
    $image = $module['image'];
    $image_url = wp_get_attachment_image_url($image, 'full');
    $description = isset($module['description']) ? wpautop($module['description']) : '';

    $button_args = serialize(array(
        'button_type'       => $module['button_type'],
        'button_text'       => $module['button_text'],
        'button_url'        => isset($module['button_url']) ? $module['button_url'][0] : false,
        'button_custom_url' => $module['button_custom_url'],
        'button_style'      => $module['button_style'],
        'button_target'     => $module['button_target'],
    ));

    $button = "[button args='$button_args']";

    return "<section id='eco-section'>
		<img src='$image_url' id='eco-planet'>
	 	<div class='container'>
			<div class='row'>
				<div class='col-12 col-lg-7'>
					<h1 class='eco'>$heading</h1>
					$description
                    $button
				</div>
			</div>
		</div>
	</section>";
}
function _hero_style_4($module, $section_id, $section_classes)
{
    $bg_image = $module['bg_image'];
    $heading = $module['heading'];
    $description = isset($module['description']) ? wpautop($module['description']) : '';
    $image = wp_get_attachment_image($bg_image, 'ful;', false, array(
        'class' => 'w-100'
    ));
    return "<section class='hero-style-4 p-0 position-relative $section_classes' id='$section_id'>
		<div class='container-fluid overlay-img-holder'>
			$image
			<div class='overlay'>
				<div class='col-12 col-md-8 mx-auto'>
					<h1>$heading</h1>
					$description
				</div>
			</div>
		</div>
	</section>";
}
function _two_column_image_text($module, $section_id, $section_classes)
{
    $heading = $module['heading'];
    $style = $module['style'];
    $color = $module['color'];
    $image_position = $module['image_position'];
    $description = isset($module['description']) ? wpautop($module['description']) : '';

    if ($style == 'style-1') {
        $col_1_class = 'col-12 col-lg-6 ps-md-5 who-we-are-home my-auto text-col';
        $col_2_class = 'col-12 col-lg-6';
        $size = 'large';
    } else if ($style == 'style-2') {
        $col_1_class = 'col-12 col-lg-7 my-auto order-2 order-lg-1';
        $col_2_class = 'col-12 col-lg-5 order-1 order-lg-2 d-none d-md-block';
        $size = 'large';
        if ($color) {
            $style_inline = "style='--color: var(--$color)'";
        }
    } else if ($style == 'style-3') {
        $col_1_class = 'col-12 col-lg-6 ps-md-5 who-we-are-home my-auto text-col';
        $col_2_class = 'col-12 col-lg-6';
        $size = 'full';
    }

    $image = isset($module['image']) ? wp_get_attachment_image($module['image'], $size) : '';



    $button_args = serialize(array(
        'button_type'       => $module['button_type'],
        'button_text'       => $module['button_text'],
        'button_url'        => isset($module['button_url']) ? $module['button_url'][0] : false,
        'button_custom_url' => $module['button_custom_url'],
        'button_style'      => $module['button_style'],
        'button_target'     => $module['button_target'],
    ));

    $button = "[button args='$button_args']";

    return "<section class='two-column-image-text $style $section_classes' id='$section_id'>
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
			<div class='image-box'>
				$image
			</div>
			</div>
		</div>
	</div>
</section>";
}

function _two_column_image_text_style_4($module, $section_id, $section_classes)
{
    $heading = $module['heading'];
    $color = $module['color'];
    $image_position = $module['image_position'];
    $image = $module['image'];
    $description = isset($module['description']) ? wpautop($module['description']) : '';
    $image_url = wp_get_attachment_image_url($image, 'large');

    if ($color) {
        $style_inline = "style='--color: var(--$color);'";
    }

    if ($image) {
        $style_inline_image = "style='background-image: url($image_url)'";
    }


    return "<section class='two-column-style-4 p-0 mab $section_classes' id='$section_id' $style_inline>
		<div class='container-fluid m-0 p-0'>
			<div class='row m-0 $image_position'>
				<div class='col-12 col-lg-7 my-auto img-div-content text-white'>
					<h2 class='text-left'>$heading</h2>
					$description
				</div>
                <div class='col-12 col-lg-5 p-0  img-div' $style_inline_image></div>
			</div>
		</div>
	</section>";
}

function _two_column_image_text_style_5($module, $section_id, $section_classes)
{
    $heading = $module['heading'];
    $color = $module['color'];
    $image_position = $module['image_position'];
    $image = $module['image'];
    $description = isset($module['description']) ? wpautop($module['description']) : '';
    $image_el = wp_get_attachment_image($image, 'ful;', false, array(
        'class' => 'img-fluid mb-5 mb-lg-0'
    ));



    $button_args = serialize(array(
        'button_type'       => $module['button_type'],
        'button_text'       => $module['button_text'],
        'button_url'        => isset($module['button_url']) ? $module['button_url'][0] : false,
        'button_custom_url' => $module['button_custom_url'],
        'button_style'      => $module['button_style'] . ' button-box-shadow',
        'button_target'     => $module['button_target'],
    ));

    $button = "[button args='$button_args']";


    return "<section class='two-column-style-5 bg-gradient-$color $section_classes' id='$section_id'>
	 	<div class='container'>
			<div class='row $image_position'>
				<div class='col-12 col-lg-5'>
					$image_el
				</div>
				<div class='col-1'></div>
				<div class='col-12 col-lg-6 my-auto'>
					<h2 class='text-left'>$heading</h2>
				$description
					$button
				</div>
			</div>
		</div>
	</section>";
}
function _two_column_image_text_style_6($module, $section_id, $section_classes)
{
    $heading = $module['heading'];
    $color = $module['color'];
    $image_position = $module['image_position'];
    $image = $module['image'];
    $description = isset($module['description']) ? wpautop($module['description']) : '';
    $image_el = wp_get_attachment_image($image, 'ful;', false, array(
        'class' => 'img-fluid w-75 mx-auto d-block'
    ));


    $button_args = serialize(array(
        'button_type'       => $module['button_type'],
        'button_text'       => $module['button_text'],
        'button_url'        => isset($module['button_url']) ? $module['button_url'][0] : false,
        'button_custom_url' => $module['button_custom_url'],
        'button_style'      => $module['button_style'] . ' button-box-shadow',
        'button_target'     => $module['button_target'],
    ));

    $button = "[button args='$button_args']";


    return "<section class='two-column-style-5 two-column-style-6 bg-gradient-$color $section_classes' id='$section_id'>
	 	<div class='container'>
			<div class='row $image_position'>
					<div class='col-12 col-lg-7 my-auto'>
                    <div class='box'>
					<h2 class='text-left'>$heading</h2>
				$description
					$button
				</div>
				</div>
				<div class='col-1'></div>
			
                <div class='col-12 col-lg-4'>
					$image_el
				</div>
			</div>
		</div>
	</section>";
}
function _two_column_image_text_style_7($module, $section_id, $section_classes)
{
    $heading_main = $module['heading'];
    $color = $module['color'];
    $image_position = $module['image_position'];
    $image = $module['image'];
    $text_boxes = $module['text_boxes'];
    $description_main = isset($module['description']) ? wpautop($module['description']) : '';
    $image_el = wp_get_attachment_image($image, 'ful;', false, array(
        'class' => 'img-fluid w-75 mx-auto d-block'
    ));

    $button_args = serialize(array(
        'button_type'       => $module['button_type'],
        'button_text'       => $module['button_text'],
        'button_url'        => isset($module['button_url']) ? $module['button_url'][0] : false,
        'button_custom_url' => $module['button_custom_url'],
        'button_style'      => $module['button_style'] . ' button-box-shadow',
        'button_target'     => $module['button_target'],
    ));

    $button = "[button args='$button_args']";

    if ($text_boxes) {
        $textboxes_html = "<div class='row'>";
        foreach ($text_boxes as $text_box) {
            $heading = $text_box['heading'];
            $description = isset($text_box['description']) ? wpautop($text_box['description']) : '';
            $textboxes_html .= "<div class='col-12 col-lg-4 mt-3'>";
            $textboxes_html .= "<div class='box h-100 text-center'>";
            $textboxes_html .= "<h3>$heading</h3>";
            $textboxes_html .= $description;
            $textboxes_html .= "</div>";
            $textboxes_html .= "</div>";
        }
        $textboxes_html .= "</div>";
    }



    return "<section class='two-column-style-5 two-column-style-7 bg-gradient-$color $section_classes' id='$section_id'>
	 	<div class='container'>
			<div class='row $image_position'>
					<div class='col-12 col-lg-7 my-auto'>
                    <div class='box'>
					<h2 class='text-left'>$heading_main</h2>
				$description_main
					$button
				</div>

                $textboxes_html

				</div>
				<div class='col-1'></div>
			
                <div class='col-12 col-lg-4'>
					$image_el
				</div>
			</div>
		</div>
	</section>";
}
function _text($module, $section_id, $section_classes)
{
    $text_align = $module['text_align'] ?  $module['text_align'] : 'text-center';
    $color = $module['color'];
    $heading = $module['heading'];
    $description = isset($module['description']) ? wpautop($module['description']) : '';

    if ($color) {
        $style_inline = "style='--color: var(--$color)'";
    }

    return "<section class='text-section $text_align' id='$section_id' $style_inline>
	<div class='container'>
	<h2 class='text-center'>$heading</span></h2>
				$description
	</div>
</section>";
}
function _two_column_text($module)
{
    $heading_1 = $module['heading_1'];
    $heading_2 = $module['heading_2'];
    $description_1 = isset($module['description_1']) ? wpautop($module['description_1']) : '';
    $description_2 = isset($module['description_2']) ? wpautop($module['description_2']) : '';
    $html = "<section class='two-column-text'>";
    $html .= "<div class='container'>";
    $html .= "<div class='row'>
				<div class='col-12 col-lg-6 text-center'>
					<h2 class='text-center'>$heading_1</h2>
				$description_1
				</div>
				<div class='col-12 col-lg-6 text-center'>
					<h2 class='text-center'>$heading_2</h2>
					$description_2
				</div>
			</div>";
    $html .= "</div>";
    $html .= "</section>";

    return $html;
}
function _row_animation($module, $section_id, $section_classes)
{
    $html = "<section class='row-animation $section_classes' id='$section_id'>";
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


        $button_args = serialize(array(
            'button_type'       => $item['button_type'],
            'button_text'       => $item['button_text'],
            'button_url'        => isset($item['button_url']) ? $item['button_url'][0] : false,
            'button_custom_url' => $item['button_custom_url'],
            'button_style'      => $button_style . ' button-box-shadow',
            'button_target'     => $item['button_target'],
        ));

        $button = "[button args='$button_args']";


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
		<a href='$permalink' target='_blank' 
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

function _blogs($module, $section_id, $section_classes)
{
    $heading = $module['heading'];
    $description = isset($module['description']) ? wpautop($module['description']) : '';

    $html  = "<section class='blogs grey_bg $section_classes' id='$section_id'>";
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

function _slider($module, $section_id, $section_classes)
{
    $heading = $module['heading'];
    $items = $module['items'];
    $description = isset($module['description']) ? wpautop($module['description']) : '';
    $glide_slider = __glide_slider($items);
    return "<section class='slider overflow-hidden' id='$section_id'>
	<div class='container'>
	<h2 class='text-left'>$heading</span></h2>
				$description
                $glide_slider
	</div>
</section>";
}

function _text_over_curve_shape($module, $section_id, $section_classes)
{
    $heading = $module['heading'];
    $description = isset($module['description']) ? wpautop($module['description']) : '';
    $html = "<section class='slideanim rounded_top text-white mt-5 slide' id='$section_id'>
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

function _image_grid($module, $section_id, $section_classes)
{
    $items = $module['items'];
    $html = "<section class='py-0 image-grid $section_classes' id='$section_id'>
	<div class='container-fluid px-0'>
		<div class='row gx-0'>";

    foreach ($items as $item) {
        $image = wp_get_attachment_image($item['image'], 'large');
        if ($item['button_type'] == 'internal-url') {
            $url = $item['button_url'][0]['id'];
            $permalink = "[permalink id=$url]";
        } else {
            $permalink = $item['button_custom_url'];
        }
        $button_args = serialize(array(
            'button_type'       => $item['button_type'],
            'button_text'       => $item['button_text'],
            'button_url'        => isset($item['button_url']) ? $item['button_url'][0] : false,
            'button_custom_url' => $item['button_custom_url'],
            'button_style'      => 'button-large',
            'button_target'     => $item['button_target'],
            'button_icon' => false
        ));

        $button = "[button args='$button_args']";

        $html .= "<div class='col-12 col-lg-4 home_panel_bg'>
				<div class='overflow-hidden h-100 grid-box position-relative'>
                <a href='$permalink'></a>
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

function _icon_box($module, $section_id, $section_classes)
{
    $heading = $module['heading'];
    $items = $module['items'];
    $style = $module['style'];
    $description = isset($module['description']) ? wpautop($module['description']) : '';
    $bottom_text = isset($module['bottom_text']) ? wpautop($module['bottom_text']) : '';

    $html = "<section class='icon-boxes $style $section_classes' id='$section_id'>
	<div class='container'>
    <h2 class='mb-3'>$heading</h2>";
    if ($description) {
        $html .= "<div class='desc-box text-center mb-5'>";
        $html .= $description;
        $html .= "</div>";
    }
    if ($style == 'style-1') {
        $inner_class = "inner";
        $row_class = "row values g-3";
        $class = 'col-6 col-lg-2';
    } else if ($style == 'style-2') {
        $inner_class = "inner";
        $row_class = "row values g-3";
        $class = 'col col-md-4 col-sm-3';
    } else {
        $inner_class = "row g-3";
        $row_class = "row g-4";
        $class = 'col-12';
    }

    if ($style == 'style-2') {
        $html .= "<div class='row-holder'>";
    }
    $html .= "<div class='$row_class'>";

    foreach ($items as $item) {
        $heading = $item['heading'];
        $text = isset($item['text']) ? wpautop($item['text']) : '';

        $html .= "<div class='$class'>";
        $html .= "<div class='$inner_class'>";
        if ($style == 'style-3') {
            $html .= "<div class='col-12 col-lg-3'>";
        }
        $html .= "<div class='icon-box'>";
        $html .= wp_get_attachment_image($item['image'], 'medium');
        $html .= "</div>";

        if ($style == 'style-3') {
            $html .= "</div>";
            $html .= "<div class='col-12 col-lg-9 my-auto'>";
        }


        if ($heading) {
            $html .= "<h3>$heading</h3>";
        }

        if ($text) {
            $html .= "<div class='icon-desc'>";
            $html .= $text;
            $html .= "</div>";
        }
        if ($style == 'style-3') {
            $html .= "</div>";
        }
        $html .= "</div>";
        $html .= "</div>";
    }

    if ($style == 'style-2') {
        $html .= "</div>";
    }
    if ($bottom_text) {
        $html .= "<div class='desc text-center mt-4'>";
        $html .= $bottom_text;
        $html .= "</div>";
    }


    $html .= "
	</div>
</section>";

    return $html;
}

function _instagram_feed($module, $section_id, $section_classes)
{
    $heading = $module['heading'];
    $shortcode = $module['shortcode'];
    $description = $module['description'];

    return "<section class='instagram-feed pb-0 $section_classes' id='$section_id'>
    <div class='container-fluid px-0'>
        <div class='row mx-0'>
            <div class='col-12'>
                <h2 class='mb-4'>$heading</span></h2>
                <h3 class='mb-5 pink'>$description</h3>
                <div class='feed'>
    $shortcode
                </div>
            </div>
        </div>
    </div>
</section>";
    return $html;
}

function _logo_slider($module, $section_id, $section_classes)
{
    $images = $module['images'];
    $heading = $module['heading'];
    $description = isset($module['description']) ? wpautop($module['description']) : '';
    $html = "<section class='logo-slider' id='$section_id'>";
    $html .= "<div class='container'>";
    $html .= "<h2 class='text-left'>$heading</h2>";


    $html .= "<div class='carousel d-flex align-items-center carousel-logo-slider mb-4 $section_classes'>";
    $html .= "<div class='group d-flex align-items-center'>";
    foreach ($images as $image) {
        $image_url = wp_get_attachment_image_url($image, 'large');
        $html .= "<div class='slide'>";
        $html .= "<a href='$image_url' data-fancybox='gallery'>";
        $html .= wp_get_attachment_image($image, 'large');
        $html .= "</a>";
        $html .= "</div>";
    }
    $html .= "</div>";


    $html .= "<div class='group d-flex align-items-center'>";
    foreach ($images as $image) {
        $image_url = wp_get_attachment_image_url($image, 'large');
        $html .= "<div class='slide'>";
        $html .= "<a href='$image_url' data-fancybox='gallery'>";
        $html .= wp_get_attachment_image($image, 'large');
        $html .= "</a>";
        $html .= "</div>";
    }
    $html .= "</div>";


    $html .= "</div>";
    $html .= $description;
    $html .= "</div>";
    $html .= "</section>";
    return $html;
}


function _careers($module, $section_id, $section_classes)
{
    $heading = $module['heading'];
    $subheading = $module['subheading'];



    $html = "<section class='two-column-text $section_classes' id='$section_id'>";
    $html .= "<div class='container'>";
    $html .= "<h2 class='text-center'>$heading</h2>";
    $html .= "<h3 class='pink'>$subheading</h3>";

    $html .= "[careers]";

    $html .= "</div>";
    $html .= "</section>";

    return $html;
}
function _accordion($module, $section_id, $section_classes)
{
    $heading = $module['heading'];
    $items = $module['items'];
    $bottom_text = isset($module['bottom_text']) ? wpautop($module['bottom_text']) : '';
    $image = isset($module['image']) ? wp_get_attachment_image($module['image'], 'large') : '';

    if ($bottom_text) {
        $bottom_text_val = "<div class='bottom-text mt-4 text-center'>";
        $bottom_text_val .= $bottom_text;
        $bottom_text_val .= "</div>";
    }


    $accordion = "<div class='accordion' id='accordionModule'>";
    foreach ($items as $key => $item) {
        $title = $item['title'];
        $contents = $item['contents'];
        $aria_expanded = $key == 0 ? 'true' : 'false';
        $class = $key == 0 ? 'show' : '';

        $accordion .= "<div class='accordion-item'>";
        $accordion .= "<h2 class='accordion-header' id='heading$key'> <button class='accordion-button' type='button' data-bs-toggle='collapse' data-bs-target='#collapse$key' aria-expanded='$aria_expanded' aria-controls='collapse$key'> $title </button> </h2>";

        $accordion .= "<div id='collapse$key' class='accordion-collapse collapse $class' aria-labelledby='heading$key' data-bs-parent='#accordionModule'>
								<div class='accordion-body'>
									<ul class='distributor-checklist'>";

        foreach ($contents as $content) {
            $text = $content['text'];
            $accordion .= "<li><i class='fa-solid fa-check' aria-hidden='true'></i>$text</li>";
        }


        $accordion .= "</ul>
								</div>
							</div>";

        $accordion .= "</div>";
    }

    $accordion .= "</div>";

    return "<section class='two-column-image-text style-3 accordion-module $section_classes' id='$section_id'>
	<div class='container'>
		<div class='row '>
			<div class='col-12 col-lg-6 ps-md-5 who-we-are-home my-auto text-col'>
	<div class='inner'>

				<h2 class='text-center'>$heading</h2>
    $accordion
	$bottom_text_val
			</div>
			</div>
			<div class='col-12 col-lg-6'>
			<div class='image-box'>
			$image
			</div>
			</div>
		</div>
	</div>
</section>";
    return $html;
}

function _form($module, $section_id, $section_classes)
{
    $heading = $module['heading'];
    $style = $module['style'];
    $form_script = $module['form_script'];
    $description = isset($module['description']) ? wpautop($module['description']) : '';

    if ($style == 'style-2') {
        $class = 'text-left';
    } else {
        $class = 'text-center';
    }


    $html = "<section class='form $class $style $section_classes' id='$section_id'>";
    $html .= "<div class='container'>";
    if ($style == 'style-2') {
        $html .= "<div class='row g-5'>";
        $html .= "<div class='col-lg-5'>";
        $html .= "<h1 class='$class'>$heading</h1>";
    } else {
        $html .= "<h2 class='$class'>$heading</h2>";
    }
    $html .= $description;

    if ($style == 'style-2') {
        $html .= "[contact_details]";
        $html .= "[socials]";
    }


    if ($style == 'style-2') {
        $html .= "</div>";
        $html .= "<div class='col-lg-7'>";
    }

    $html .= $form_script;

    if ($style == 'style-2') {
        $html .= "</div>";
        $html .= "</div>";
    }

    $html .= "</div>";
    $html .= "</section>";

    return $html;
}

function _map($module, $section_id, $section_classes)
{
    $map_src = $module['map_src'];
    $html = "<section class='map $section_classes' id='$section_id'>";
    $html .= "<div class='container-fluid p-0'>";
    $html .= "<iframe src='$map_src' width='100%' height='450' style='border:0;' allowfullscreen='' loading='lazy'></iframe>";
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
        $html .= __($button_text, 'bedfont');
        if ($button_icon) {
            $html .= "<i class='fa fa-arrow-right ms-1' aria-hidden='true'></i>";
        }

        $html .= "</$tag>";
        $html .= "</div>";

        return do_shortcode($html);
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
        $color = $item['color'];

        if ($color) {
            $style_inline = "style='--color: var(--$color)'";
        }

        $html .= "<li class='glide__slide'>";
        $html .= "<div class='inner $color' $style_inline >";

        if ($heading && $style == 'style-2') {
            $html .= "<h3 class='timeline-date text-center'>$heading</h3>";
        }

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
        $html .= "</div>";

        $html .= "</li>";
    }

    $html .= "</ul>
	</div>[__glide_arrows]
</div></div>";

    return $html;
}


function action_admin_head()
{
    $template = get_page_template_slug();

    if ($template == 'templates/page-modules.php' || get_post_type() == 'layouts') {
?>
        <style>
            .is-root-container {
                display: none !important;
            }
        </style>
<?php
    }
}

add_action('admin_head', 'action_admin_head');
