<?php

namespace Flynt\Components\BlockLanding;

use Flynt\FieldVariables;
use Flynt\Utils\Asset;
use Timber\Menu;

add_filter('Flynt/addComponentData?name=BlockLanding', function ($data) {
    $data['logo'] = [
        'src' => get_theme_mod('custom_header_logo') ? get_theme_mod('custom_header_logo') : Asset::requireUrl('Components/BlockLanding/Assets/logo.svg'),
        'alt' => get_bloginfo('name')
    ];

    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'BlockLanding',
        'label' => 'Block: Landing',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 0,
                'delay' => 1
            ],
            [
                'label' => __('Button Link', 'flynt'),
                'type' => 'link',
                'name' => 'buttonLink',
                'return_format' => 'array'
            ],
            [
                'label' => __('Text Bottom', 'flynt'),
                'name' => 'textBottom',
                'type' => 'text'
            ],
            [
                'label' => __('Text left', 'flynt'),
                'name' => 'textLeft',
                'type' => 'text'
            ],
            [
                'label' => __('Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => '',
                'name' => 'options',
                'type' => 'group',
                'layout' => 'row',
                'sub_fields' => [
                    FieldVariables\getTheme()
                ]
            ]
        ]
    ];
}
