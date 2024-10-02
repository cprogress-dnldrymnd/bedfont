<?php

use Carbon_Fields\Block;
use Carbon_Fields\Container;
use Carbon_Fields\Complex_Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Hero Settings')
    ->where('post_template', '=', 'templates/page-modules.php')
    ->or_where('post_template', '=', 'templates/page-archives.php')
    ->or_where('post_id', '=', get_option('page_for_posts'))
    ->add_tab('Settings', array(
        Field::make('select', 'hero_style', __('Hero Style'))
            ->set_options(array(
                'hero-content-below-image' => 'Content Below Image',
                'hero-content-over-image' => 'Content Over Image',
                'hero-text-icon-only' => 'Text and Icon Only',
                '' => 'No Hero',
            )),
        Field::make('text', 'hero_alt_text', 'Hero Alt Text'),
        Field::make('image', 'icon', __('Icon')),

        Field::make('html', 'hero_bg', 'Hero BG')->set_help_text('Hero Background Is Set in Featured Image | Hero Description Is Set in Excerpt'),
    ))

    ->add_tab('Buttons', array(
        Field::make('complex', 'hero_buttons', __('Hero Buttons'))
            ->set_layout('tabbed-vertical')
            ->add_fields(array(
                Field::make('select', 'button_type', __('Button Type'))
                    ->set_options(
                        array(
                            'page'        => 'Page',
                            'post'        => 'Post',
                            'popups'      => 'Popup',
                            'custom'      => 'Custom',
                        )
                    ),
                Field::make('text', 'button_text', __('Button Text')),
                Field::make('association', 'button_url', __('Select Post'))
                    ->set_max(1)
                    ->set_types(array(
                        array(
                            'type'      => 'post',
                            'post_type' => 'post',
                        ),
                        array(
                            'type'      => 'post',
                            'post_type' => 'page',
                        )
                    ))
                    ->set_conditional_logic(
                        array(
                            array(
                                'field'   => 'button_type',
                                'value'   => 'custom',
                                'compare' => '!='
                            )
                        )
                    ),
                Field::make('html', 'html')
                    ->set_html('<div class="page-selector">  </div>'),
                Field::make('text', 'button_url_custom', __('Button URL'))
                    ->set_conditional_logic(
                        array(
                            array(
                                'field' => 'button_type',
                                'value' => 'custom',
                            )
                        )
                    ),
                Field::make('select', 'button_style', __('Button Style'))
                    ->set_options(
                        array(
                            'button-tangerine'    => 'Tangerine',
                            'button-white'     => 'White',
                            'button-bordered'  => 'Bordered',
                        )
                    ),
                Field::make('select', 'button_target', __('Button Target'))
                    ->set_options(
                        array(
                            'target="_self"'  => 'Default',
                            'target="_blank"' => 'New Tab',
                        )
                    ),
            ))
            ->set_header_template('Button: <%- button_text %>'),
    ));
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
                Field::make('text', 'heading', __('Button Target')),
                Field::make('text', 'subheading', __('Subheading')),
              
            ))
            ->set_header_template('Layouts: <%- heading %>')


    ));
