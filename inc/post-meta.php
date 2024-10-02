<?php

use Carbon_Fields\Block;
use Carbon_Fields\Container;
use Carbon_Fields\Complex_Container;
use Carbon_Fields\Field;


Container::make('post_meta', 'Modules')
    ->where('post_template', '=', 'templates/page-modules.php')
    ->add_fields(array(
        Field::make('complex', 'modules', '')
            ->set_collapsed(true)
            ->setup_labels(
                array(
                    'plural_name'   => 'Modules',
                    'singular_name' => 'Module',
                )
            )
            ->add_fields('hero', array(
                Field::make('text', 'heading', __('Heading')),
                Field::make('text', 'subheading', __('Subheading')),
                Field::make('image', 'bg_image', __('Background Image')),
                Field::make('select', 'style', __('Style'))
                    ->set_options(array(
                        'style-1' => 'Style 1'
                    )),

            ))
            ->set_header_template('Hero: <%- heading %>')


    ));
