<?php

return [
    'navigation_label' => 'Pirsch',
    'navigation_group' => 'الإعدادات',
    'title' => 'إعدادات Pirsch',
    'sections' => [
        'pirsch' => [
            'heading' => 'Pirsch',
            'description' => 'اضبط كود تتبع Pirsch لموقعك.',
        ],
    ],
    'fields' => [
        'identification_code' => [
            'label' => 'رمز التعريف',
            'helper' => 'رمز تعريف موقعك في Pirsch. تجده في Pirsch ضمن Settings > Integration. اتركه فارغًا لتعطيل التتبع.',
        ],
    ],
];
