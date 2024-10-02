<?php
/*

Template Name: --Modules

 */

get_header('');
$modules = get__post_meta_by_id($id, 'modules');
foreach ($sections as $key => $section) {
    $type = $section['_type'];

    switch ($type) {
        case 'layouts':
            $layouts = $section['layouts'];
            foreach ($layouts as $layout) {
                $layout_id = $layout['id'];
                $html .= "[layouts id='$layout_id']";
                $layouts_arr[] = $layout_id;
                $section_html = false;
            }
            break;
    }
}
get_footer('');
