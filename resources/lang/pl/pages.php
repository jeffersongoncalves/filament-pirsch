<?php

return [
    'navigation_label' => 'Pirsch',
    'navigation_group' => 'Ustawienia',
    'title' => 'Ustawienia Pirsch',
    'sections' => [
        'pirsch' => [
            'heading' => 'Pirsch',
            'description' => 'Skonfiguruj kod śledzenia Pirsch dla swojej witryny.',
        ],
    ],
    'fields' => [
        'identification_code' => [
            'label' => 'Kod identyfikacyjny',
            'helper' => 'Kod identyfikacyjny Twojej witryny w Pirsch. Znajdziesz go w Pirsch w Settings > Integration. Pozostaw puste, aby wyłączyć śledzenie.',
        ],
    ],
];
