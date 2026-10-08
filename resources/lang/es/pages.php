<?php

return [
    'navigation_label' => 'Pirsch',
    'navigation_group' => 'Configuración',
    'title' => 'Configuración de Pirsch',
    'sections' => [
        'pirsch' => [
            'heading' => 'Pirsch',
            'description' => 'Configura el código de seguimiento de Pirsch de tu sitio.',
        ],
    ],
    'fields' => [
        'identification_code' => [
            'label' => 'Código de identificación',
            'helper' => 'El código de identificación de tu sitio en Pirsch. Encuéntralo en Pirsch, en Settings > Integration. Déjalo vacío para desactivar el seguimiento.',
        ],
    ],
];
