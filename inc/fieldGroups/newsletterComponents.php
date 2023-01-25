<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'newsletterComponents',
        'title' => 'Newsletter Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'newsletterComponents',
                'label' => __('Newsletter Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\AccordionDefault\getACFLayout(),
                    Components\BlockLanding\getACFLayout(),
                    Components\BlockLibrary\getACFLayout(),
                    Components\BlockImage\getACFLayout(),
                    Components\BlockImageText\getACFLayout(),
                    Components\BlockMixcloudOembed\getACFLayout(),
                    Components\BlockSearch\getACFLayout(),
                    Components\BlockShortcode\getACFLayout(),
                    Components\BlockSubscription\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    Components\BlockWysiwygTwoCol\getACFLayout(),
                    Components\GridAllPosts\getACFLayout(),
                    Components\GridPostsLatest\getACFLayout(),
                    Components\GridPostsContributorsLatest\getACFLayout(),
                    Components\GridPostEventsLatest\getACFLayout(),
                    Components\GridPostEventsPast\getACFLayout(),
                    Components\HeroImageCta\getACFLayout(),
                    Components\ListLogos\getACFLayout(),
                    Components\ListSocial\getACFLayout(),
                    Components\SliderImages\getACFLayout(),
                    Components\SliderPosts\getACFLayout(),
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'newsletter',
                ],
            ],
        ],
    ]);
});
