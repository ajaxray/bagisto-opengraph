<?php

return [
    [
        'key'    => 'general.design.social-preview',
        'name'   => 'opengraph::app.admin.system.opengraph-preview',
        'sort'   => 2,
        'info'   => 'opengraph::app.admin.opengraph.section.info', 
        'fields' => [   
            [
                'name'          => 'image',
                'title'         => 'opengraph::app.admin.system.social-image',
                'type'          => 'image',
                'channel_based' => true,
                'locale_based'  => false,
                'info'          => 'opengraph::app.admin.system.social-image-info',
            ],
            [
                'name'          => 'title',
                'title'         => 'opengraph::app.admin.system.social-title',
                'type'          => 'text',
                'channel_based' => true,
                'locale_based'  => false,
                'info'          => 'opengraph::app.admin.system.social-title-info',
            ],
            [
                'name'          => 'description',
                'title'         => 'opengraph::app.admin.system.social-description',
                'type'          => 'textarea',
                'channel_based' => true,
                'locale_based'  => false,
                'info'          => 'opengraph::app.admin.system.social-description-info',
            ],
        ],
    ]
];