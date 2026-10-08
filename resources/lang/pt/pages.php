<?php

return [
    'navigation_label' => 'Pirsch',
    'navigation_group' => 'Definições',
    'title' => 'Definições do Pirsch',
    'sections' => [
        'pirsch' => [
            'heading' => 'Pirsch',
            'description' => 'Configure o código de rastreamento do Pirsch do seu site.',
        ],
    ],
    'fields' => [
        'identification_code' => [
            'label' => 'Código de identificação',
            'helper' => 'O código de identificação do seu site no Pirsch. Encontre-o em Pirsch, em Settings > Integration. Deixe vazio para desativar o rastreio.',
        ],
    ],
];
