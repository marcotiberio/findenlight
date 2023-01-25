<?php

namespace Flynt\Components\SliderPosts;

use Flynt\FieldVariables;
use Flynt\Utils\Options;
use Timber\Timber;

const POST_TYPE = 'post';

add_filter('Flynt/addComponentData?name=SliderPosts', function ($data) {
    $postType = POST_TYPE;
    $data['items'] = Timber::get_posts($data[$postType]);
    $translatableOptions = Options::getTranslatable('SliderOptions');
    $data['jsonData'] = [
        'options' => array_merge($translatableOptions, $data['options']),
    ];

    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'SliderPosts',
        'label' => 'Slider: Posts',
        'sub_fields' => [
            [
                'label' => __('Slider', 'flynt'),
                'name' => 'sliderTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Post', 'flynt'),
                'name' => 'post',
                'type' => 'relationship',
                'post_type' => [
                    'post',
                ],
                'allow_null' => 1,
                'multiple' => 1,
                'return_format' => 'post_object',
                'ui' => 1,
                'required' => 0,
            ],
            [
                'label' => '',
                'name' => 'options',
                'type' => 'group',
                'layout' => 'row',
                'sub_fields' => [
                    [
                        'label' => __('Enable Autoplay', 'flynt'),
                        'name' => 'autoplay',
                        'type' => 'true_false',
                        'default_value' => 0,
                        'ui' => 1
                    ],
                    [
                        'label' => __('Autoplay Speed (in milliseconds)', 'flynt'),
                        'name' => 'autoplaySpeed',
                        'type' => 'number',
                        'min' => 2000,
                        'step' => 1,
                        'default_value' => 4000,
                        'required' => 1,
                        'conditional_logic' => [
                            [
                                [
                                    'fieldPath' => 'autoplay',
                                    'operator' => '==',
                                    'value' => 1
                                ]
                            ]
                        ],
                    ],
                ]
            ],
            // [
            //     'label' => __('Slider', 'flynt'),
            //     'name' => 'repeaterSlider',
            //     'type' => 'repeater',
            //     'layout' => 'table',
            //     'button_label' => __('Add Image', 'flynt'),
            //     'sub_fields' => [
            //         [
            //             'label' => __('Image', 'flynt'),
            //             'name' => 'panelImage',
            //             'type' => 'image',
            //             'return_format' => 'array',
            //             'preview_size' => 'large',
            //             'library' => 'all',
            //             'wrapper' => [
            //                 'width' => '60',
            //             ],
            //         ],
            //         [
            //             'label' => __('Image Description', 'flynt'),
            //             'name' => 'imageDescription',
            //             'type' => 'wysiwyg',
            //             'tabs' => 'visual',
            //             'toolbar' => 'basic',
            //             'media_upload' => 0,
            //             'delay' => 0,
            //             'wrapper' => [
            //                 'width' => '40',
            //             ],
            //         ],
            //     ],
            // ],
            // [
            //     'label' => __('Mobile', 'flynt'),
            //     'name' => 'mobileTab',
            //     'type' => 'tab',
            //     'placement' => 'top',
            //     'endpoint' => 0
            // ],
            // [
            //     'label' => __('Mobile Background', 'flynt'),
            //     'name' => 'mobileBackground',
            //     'type' => 'image',
            //     'return_format' => 'array',
            //     'preview_size' => 'large',
            //     'library' => 'all',
            //     'wrapper' => [
            //         'width' => '60',
            //     ],
            // ],
            // [
            //     'label' => __('Mobile Background Caption', 'flynt'),
            //     'name' => 'mobilebackgroundCaption',
            //     'type' => 'wysiwyg',
            //     'tabs' => 'visual,text',
            //     'toolbar' => 'basic',
            //     'media_upload' => 0,
            //     'delay' => 0,
            //     'wrapper' => [
            //         'width' => '40',
            //     ],
            // ],
            // [
            //     'label' => __('Content', 'flynt'),
            //     'name' => 'contentTab',
            //     'type' => 'tab',
            //     'placement' => 'top',
            //     'endpoint' => 0
            // ],
            // [
            //     'label' => __('Logo', 'flynt'),
            //     'name' => 'logo',
            //     'type' => 'image',
            //     'return_format' => 'array',
            //     'preview_size' => 'medium',
            //     'library' => 'all',
            //     'wrapper' => [
            //         'width' => '50',
            //     ],
            // ],
            // [
            //     'label' => __('Main text', 'flynt'),
            //     'name' => 'maintext',
            //     'type' => 'wysiwyg',
            //     'tabs' => 'visual,text',
            //     'media_upload' => 0,
            //     'delay' => 0,
            //     'wrapper' => [
            //         'width' => '50',
            //     ],
            // ],
            // [
            //     'label' => __('Secondary text', 'flynt'),
            //     'name' => 'secondarytext',
            //     'type' => 'wysiwyg',
            //     'tabs' => 'visual,text',
            //     'media_upload' => 0,
            //     'delay' => 0,
            //     'wrapper' => [
            //         'width' => '100',
            //     ],
            // ],
            // [
            //     'label' => __('Options', 'flynt'),
            //     'name' => 'optionsTab',
            //     'type' => 'tab',
            //     'placement' => 'top',
            //     'endpoint' => 0
            // ],
        ]
    ];
}
