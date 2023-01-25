<?php

namespace Flynt\Components\BlockAnnouncement;

use Flynt\Utils\Options;
use Flynt\FieldVariables;
use Flynt\ComponentManager;

Options::addTranslatable('BlockAnnouncement', [
    [
        'label' => 'CTA Link',
        'name' => 'ctaLink',
        'type' => 'link',
        'return_format' => 'array',
        'wrapper' => [
            'width' => 100
        ]
    ]
]);
