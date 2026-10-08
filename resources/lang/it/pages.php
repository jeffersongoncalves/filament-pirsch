<?php

return [
    'navigation_label' => 'Pirsch',
    'navigation_group' => 'Impostazioni',
    'title' => 'Impostazioni di Pirsch',
    'sections' => [
        'pirsch' => [
            'heading' => 'Pirsch',
            'description' => 'Configura il codice di tracciamento Pirsch del tuo sito.',
        ],
    ],
    'fields' => [
        'identification_code' => [
            'label' => 'Codice di identificazione',
            'helper' => 'Il codice di identificazione del tuo sito Pirsch. Lo trovi in Pirsch, in Settings > Integration. Lascia vuoto per disattivare il tracciamento.',
        ],
    ],
];
