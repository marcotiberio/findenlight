<?php

namespace Flynt\Components\ListSocial;

use Flynt\Utils\Asset;
use Flynt\FieldVariables;
use Flynt\Utils\Options;
use Flynt\ComponentManager;
use Timber;

add_filter('Flynt/addComponentData?name=ListSocial', function ($data) {
    $componentManager = ComponentManager::getInstance();
    $componentPathFull = $componentManager->getComponentDirPath('ListSocial');
    $componentPath = str_replace(trailingslashit(get_template_directory()), '', $componentPathFull);

    if (!empty($data['social'])) {
        $data['social'] = array_map(function ($item) use ($componentPath) {
            $item['icon'] = Asset::getContents("{$componentPath}Assets/{$item['platform']['value']}.svg");
            return $item;
        }, $data['social']);
    }
    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'listSocial',
        'label' => 'List: Social',
        'sub_fields' => [
            [
                'label' => __('Social Platform', 'flynt'),
                'name' => 'social',
                'type' => 'repeater',
                'layout' => 'table',
                'button_label' => __('Add Social Link', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Platform', 'flynt'),
                        'name' => 'platform',
                        'type' => 'select',
                        'allow_null' => 0,
                        'multiple' => 0,
                        'ui' => 1,
                        'ajax' => 0,
                        'return_format' => 'array',
                        'choices' => [
                            'soundcloud' => 'Soundcloud',
                            'facebook' => 'Facebook',
                            'instagram' => 'Instagram',
                            'discord' => 'Discord',
                            'twitter' => 'Twitter',
                            'youtube' => 'Youtube',
                            'linkedin' => 'LinkedIn',
                            'bandcamp' => 'Bandcamp',
                            'spotify' => 'Spotify',
                        ]
                    ],
                    [
                        'label' => __('Link', 'flynt'),
                        'name' => 'url',
                        'type' => 'url',
                        'required' => 1
                    ],
                ]
            ],
        ]
    ];
}
