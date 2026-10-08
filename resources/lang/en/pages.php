<?php

return [
    'navigation_label' => 'Pirsch',
    'navigation_group' => 'Settings',
    'title' => 'Pirsch Settings',
    'sections' => [
        'pirsch' => [
            'heading' => 'Pirsch',
            'description' => 'Configure the Pirsch tracking code for your site.',
        ],
    ],
    'fields' => [
        'identification_code' => [
            'label' => 'Identification code',
            'helper' => 'Your Pirsch identification code. Find it in Pirsch under Settings > Integration. Leave empty to disable tracking.',
        ],
    ],
];
