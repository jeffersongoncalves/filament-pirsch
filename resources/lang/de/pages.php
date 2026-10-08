<?php

return [
    'navigation_label' => 'Pirsch',
    'navigation_group' => 'Einstellungen',
    'title' => 'Pirsch-Einstellungen',
    'sections' => [
        'pirsch' => [
            'heading' => 'Pirsch',
            'description' => 'Konfigurieren Sie den Pirsch-Tracking-Code für Ihre Website.',
        ],
    ],
    'fields' => [
        'identification_code' => [
            'label' => 'Identifikationscode',
            'helper' => 'Ihr Pirsch-Identifikationscode. Zu finden in Pirsch unter Settings > Integration. Leer lassen, um das Tracking zu deaktivieren.',
        ],
    ],
];
