<?php
/*

Template Name: --Modules

 */

get_header('');
$modules = get__post_meta_by_id(get_the_ID(), 'modules');
foreach ($modules as $key => $module) {
    $type = $module['_type'];
    switch ($type) {
        case 'hero':
            $style = $module['style'];
            echo $style;
            get_template_part('template-parts/modules/hero', $style, $module);
            break;
    }
}
var_dump($modules);
get_footer('');
