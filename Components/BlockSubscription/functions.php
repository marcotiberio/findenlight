<?php

namespace Flynt\Components\BlockSubscription;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockSubscription',
        'label' => 'Block: Subscription',
        'sub_fields' => [
            [
                'label' => __('Subscriptions', 'flynt'),
                'name' => 'subscriptionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Subscription Intro', 'flynt'),
                'name' => 'subscriptionIntroHtml',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
            ],
            [
                'label' => __('Monthly Subscriptions', 'flynt'),
                'name' => 'accordionMonthly',
                'type' => 'repeater',
                'layout' => 'row',
                'min' => 1,
                'button_label' => __('Add Subscription', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Option 1', 'flynt'),
                        'name' => 'option1',
                        'type' => 'link',
                        'return_value' => 'array',
                        'wrapper' => [
                            'width' => '33',
                        ],
                    ],
                    [
                        'label' => __('Option 2', 'flynt'),
                        'name' => 'option2',
                        'type' => 'link',
                        'return_value' => 'array',
                        'wrapper' => [
                            'width' => '33',
                        ],
                    ],
                    [
                        'label' => __('Option 3', 'flynt'),
                        'name' => 'option3',
                        'type' => 'link',
                        'return_value' => 'array',
                        'wrapper' => [
                            'width' => '33',
                        ],
                    ],
                ],
            ],
            [
                'label' => __('Yearly Subscriptions', 'flynt'),
                'name' => 'accordionYearly',
                'type' => 'repeater',
                'layout' => 'row',
                'min' => 1,
                'button_label' => __('Add Subscription', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Option 1', 'flynt'),
                        'name' => 'option1',
                        'type' => 'link',
                        'return_value' => 'array',
                        'wrapper' => [
                            'width' => '33',
                        ],
                    ],
                    [
                        'label' => __('Option 2', 'flynt'),
                        'name' => 'option2',
                        'type' => 'link',
                        'return_value' => 'array',
                        'wrapper' => [
                            'width' => '33',
                        ],
                    ],
                    [
                        'label' => __('Option 3', 'flynt'),
                        'name' => 'option3',
                        'type' => 'link',
                        'return_value' => 'array',
                        'wrapper' => [
                            'width' => '33',
                        ],
                    ],
                ],
            ],
            [
                'label' => __('One Time Subscriptions', 'flynt'),
                'name' => 'accordionOnetime',
                'type' => 'repeater',
                'layout' => 'row',
                'min' => 1,
                'button_label' => __('Add Subscription', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Option 1', 'flynt'),
                        'name' => 'option1',
                        'type' => 'link',
                        'return_value' => 'array',
                        'wrapper' => [
                            'width' => '33',
                        ],
                    ],
                    [
                        'label' => __('Option 2', 'flynt'),
                        'name' => 'option2',
                        'type' => 'link',
                        'return_value' => 'array',
                        'wrapper' => [
                            'width' => '33',
                        ],
                    ],
                    [
                        'label' => __('Option 3', 'flynt'),
                        'name' => 'option3',
                        'type' => 'link',
                        'return_value' => 'array',
                        'wrapper' => [
                            'width' => '33',
                        ],
                    ],
                ],
            ],
            // [
            //     'label' => __('Subscriptions', 'flynt'),
            //     'name' => 'subscriptions',
            //     'type' => 'repeater',
            //     'layout' => 'row',
            //     'min' => 1,
            //     'button_label' => __('Add Subscription', 'flynt'),
            //     'sub_fields' => [
            //         [
            //             'label' => __('Subscription', 'flynt'),
            //             'name' => 'subscriptionLink',
            //             'type' => 'link',
            //             'return_value' => 'array',
            //             'wrapper' => [
            //                 'width' => '100',
            //             ],
            //         ],
            //     ],
            // ],
            [
                'label' => __('Extra Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
            ],
            [
                'label' => __('Image', 'flynt'),
                'name' => 'imageTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Image', 'flynt'),
                'name' => 'image',
                'type' => 'image',
                'preview_size' => 'medium',
                'instructions' => __('Image-Format: JPG, PNG, SVG.', 'flynt'),
                'required' => 0,
                'mime_types' => 'jpg,jpeg,png,svg'
            ],
            [
                'label' => __('Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => '',
                'name' => 'options',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => [
                    FieldVariables\getSectionId(),
                ]
            ]
        ]
    ];
}
