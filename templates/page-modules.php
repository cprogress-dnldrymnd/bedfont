<?php
/*

Template Name: --Modules

 */

get_header('');
$modules = get__post_meta_by_id(get_the_ID(), 'modules');
foreach ($modules as $key => $module) {
    $type = $module['_type'];

    switch ($type) {
        case 'layouts':
            $style = $section['style'];
            get_template_part('template-parts/modules/hero', $style);
            break;
    }
}
get_footer('');
