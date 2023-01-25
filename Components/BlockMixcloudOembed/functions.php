<?php

namespace Flynt\Components\BlockMixcloudOembed;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockMixcloudOembed',
        'label' => 'Block: Mixcloud Embed',
        'sub_fields' => [
            [
                'label' => __('Text', 'flynt'),
                'name' => 'textTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'preContentHtml',
                'type' => 'wysiwyg',
                'media_upload' => 0,
            ],
            [
                'label' => __('Embed', 'flynt'),
                'name' => 'embedTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => '',
                'name' => 'mixcloudOembedText',
                'type' => 'textarea',
                'instructions' => __('Copy here the embed code from Mixcloud.', 'flynt'),
                'required' => 0
            ]
        ]
    ];
}
