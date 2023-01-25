<?php

namespace Flynt\Components\BlockSearch;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockSearch',
        'label' => 'Block: Search',
        'sub_fields' => [
            [
                'label' => __('Search Bar', 'flynt'),
                'name' => 'message',
                'type' => 'message',
                'message' => __('This is a block to show the search bar.', 'flynt'),
                'new_lines' => 'wpautop',
                'esc_html' => 1
            ]
        ]
    ];
}
