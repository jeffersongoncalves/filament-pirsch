<?php

return [
    'navigation_label' => 'Pirsch',
    'navigation_group' => 'Instellingen',
    'title' => 'Pirsch-instellingen',
    'sections' => [
        'pirsch' => [
            'heading' => 'Pirsch',
            'description' => 'Configureer de Pirsch-trackingcode voor je site.',
        ],
    ],
    'fields' => [
        'identification_code' => [
            'label' => 'Identificatiecode',
            'helper' => 'Je Pirsch-identificatiecode. Te vinden in Pirsch onder Settings > Integration. Laat leeg om tracking uit te schakelen.',
        ],
    ],
];
