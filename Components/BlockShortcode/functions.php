<?php

namespace Flynt\Components\BlockShortcode;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockShortcode',
        'label' => 'Block: Shortcode',
        'sub_fields' => [
            [
                'label' => __('Title', 'flynt'),
                'name' => 'titleTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'titleHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
            ],
            [
                'label' => __('Shortcode', 'flynt'),
                'name' => 'shortcodeTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Shortcode', 'flynt'),
                'name' => 'shortcode',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
            ],
            [
                'label' => __('Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Narrow section?', 'flynt'),
                'name' => 'narrow',
                'type' => 'true_false',
                'default_value' => 1,
                'ui' => 1
            ],
        ]
    ];
}
