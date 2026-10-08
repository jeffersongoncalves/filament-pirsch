<?php

return [
    'navigation_label' => 'Pirsch',
    'navigation_group' => 'Paramètres',
    'title' => 'Paramètres de Pirsch',
    'sections' => [
        'pirsch' => [
            'heading' => 'Pirsch',
            'description' => 'Configurez le code de suivi Pirsch de votre site.',
        ],
    ],
    'fields' => [
        'identification_code' => [
            'label' => 'Code d\'identification',
            'helper' => 'Le code d\'identification de votre site Pirsch. Vous le trouverez dans Pirsch, sous Settings > Integration. Laissez vide pour désactiver le suivi.',
        ],
    ],
];
