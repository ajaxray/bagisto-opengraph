<?php

return [
    'admin' => [
        'system' => [
            'opengraph'         => 'Social Preview',
            'opengraph-preview' => 'Social Preview Image',
            'social-image'      => 'Social Preview Image',
            'social-image-info' => 'Recommended size: 1200x630 pixels. This image will be used when sharing your site on social media platforms.',
            'social-title'      => 'Social Preview Title (og:title)',
            'social-title-info' => 'Should be less than 60 characters. If Bagisto itself has alredy set a og:title, this value will be ignored.',
            'social-description' => 'Social Preview Description (og:description)',
            'social-description-info' => 'Should be less than 160 characters. If Bagisto itself has alredy set a og:description, this value will be ignored.',
            'social-image-info' => 'Recommended size: 1200x630 pixels. This image will be used when sharing your site on social media platforms. If Bagisto itself has alredy set an og:image, this value will be ignored.',
        ],
        'opengraph' => [
            'info'          => 'Configure how your site appears when shared on social media',
            'section' => [
                'info'      => 'These values will be used for the og:title and og:description meta tags. If Bagisto itself has alredy set an image, title and description, these values will be ignored.'
            ]
        ]
    ],
];