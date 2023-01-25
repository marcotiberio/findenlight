<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'postMeta',
        'title' => 'Post Meta',
        'style' => '',
        'menu_order' => 1,
        'position' => 'acf_after_title',
        'fields' => [
            [
                'label' => __('Info', 'flynt'),
                'name' => 'infoTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Date Start', 'flynt'),
                'name' => 'datePostStart',
                'type' => 'date_picker',
                'first_day' => 1,
                'wrapper' => [
                    'width' => '33',
                ],
                'display_format' => 'd.m.Y',
                'return_format' => 'd.m.Y'
            ],
            [
                'label' => __('Date End', 'flynt'),
                'name' => 'datePostEnd',
                'type' => 'date_picker',
                'first_day' => 1,
                'wrapper' => [
                    'width' => '33',
                ],
                'display_format' => 'd.m.Y',
                'return_format' => 'd.m.Y'
            ],
            [
                'label' => __('Time', 'flynt'),
                'name' => 'timetimePost',
                'type' => 'time_picker',
                'wrapper' => [
                    'width' => '33',
                ],
                'display_format' => 'g:i a',
                'return_format' => 'g:i a',
            ],
            [
                'label' => __('Location', 'flynt'),
                'name' => 'location',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 0,
                'delay' => 0,
                'wrapper' => [
                    'width' => '100',
                ]
            ],
            [
                'label' => __('Intro', 'flynt'),
                'name' => 'introTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Intro', 'flynt'),
                'name' => 'introPost',
                'type' => 'wysiwyg',
                'tabs' => 'visual,text',
                'media_upload' => 0,
                'delay' => 0,
                'wrapper' => [
                    'width' => '100',
                ]
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ],
            ],
        ],
    ]);
    ACFComposer::registerFieldGroup([
        'name' => 'postComponents',
        'title' => 'Post Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'postComponents',
                'label' => __('Post Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\BlockCollapse\getACFLayout(),
                    Components\BlockImage\getACFLayout(),
                    Components\BlockImageText\getACFLayout(),
                    Components\BlockMixcloudOembed\getACFLayout(),
                    Components\BlockVideoOembed\getACFLayout(),
                    Components\BlockYoutubeOembed\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    Components\SliderImages\getACFLayout(),
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ],
            ],
        ],
    ]);
});
