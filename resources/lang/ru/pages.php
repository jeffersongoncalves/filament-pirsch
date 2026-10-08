<?php

return [
    'navigation_label' => 'Pirsch',
    'navigation_group' => 'Настройки',
    'title' => 'Настройки Pirsch',
    'sections' => [
        'pirsch' => [
            'heading' => 'Pirsch',
            'description' => 'Настройте код отслеживания Pirsch для вашего сайта.',
        ],
    ],
    'fields' => [
        'identification_code' => [
            'label' => 'Код идентификации',
            'helper' => 'Код идентификации вашего сайта в Pirsch. Его можно найти в Pirsch в разделе Settings > Integration. Оставьте пустым, чтобы отключить отслеживание.',
        ],
    ],
];
