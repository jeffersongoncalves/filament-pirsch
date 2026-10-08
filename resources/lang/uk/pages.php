<?php

return [
    'navigation_label' => 'Pirsch',
    'navigation_group' => 'Налаштування',
    'title' => 'Налаштування Pirsch',
    'sections' => [
        'pirsch' => [
            'heading' => 'Pirsch',
            'description' => 'Налаштуйте код відстеження Pirsch для вашого сайту.',
        ],
    ],
    'fields' => [
        'identification_code' => [
            'label' => 'Код ідентифікації',
            'helper' => 'Код ідентифікації вашого сайту в Pirsch. Його можна знайти в Pirsch у розділі Settings > Integration. Залиште порожнім, щоб вимкнути відстеження.',
        ],
    ],
];
