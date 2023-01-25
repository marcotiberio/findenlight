<?php

namespace Flynt\Components\NavigationBurger;

use Flynt\Utils\Asset;
use Flynt\Utils\Options;
use Timber\Menu;

add_action('init', function () {
    register_nav_menus([
        'navigation_burger' => __('Navigation Burger', 'flynt')
    ]);
});

add_filter('Flynt/addComponentData?name=NavigationBurger', function ($data) {
    $data['menu'] = new Menu('navigation_burger');
    $data['logo'] = [
        'src' => get_theme_mod('custom_header_logo') ? get_theme_mod('custom_header_logo') : Asset::requireUrl('Components/NavigationBurger/Assets/logo.svg'),
        'alt' => get_bloginfo('name')
    ];

    return $data;
});

Options::addTranslatable('NavigationBurger', [
    [
        'label' => __('Audio', 'flynt'),
        'name' => 'audioTab',
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0
    ],
    [
        'label' => __('Music Embed', 'flynt'),
        'name' => 'musicOembed',
        'type' => 'wysiwyg',
        'required' => 0,
        'media_upload' => 1,
        'tabs' => 'visual',
        'toolbar' => 'basic',
        'instructions' => __('Copy here the embed code from Soundcloud/Bandcamp/Mixcloud.', 'flynt')
    ],
    [
        'label' => __('Playlist Link', 'flynt'),
        'name' => 'membershipmenuTab',
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0
    ],
    [
        'label' => __('Playlist Link', 'flynt'),
        'name' => 'playlistLink',
        'type' => 'url',
        // 'return_value' => 'array',
        'wrapper' => [
            'width' => '100',
        ],
    ],
    // [
    //     'label' => __('Signup Button Link', 'flynt'),
    //     'name' => 'signuplinkItem',
    //     'type' => 'link',
    //     'return_value' => 'array',
    //     'wrapper' => [
    //         'width' => '50',
    //     ],
    // ]
]);
