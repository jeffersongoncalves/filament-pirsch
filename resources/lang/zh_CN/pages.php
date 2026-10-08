<?php

return [
    'navigation_label' => 'Pirsch',
    'navigation_group' => '设置',
    'title' => 'Pirsch 设置',
    'sections' => [
        'pirsch' => [
            'heading' => 'Pirsch',
            'description' => '为你的网站配置 Pirsch 跟踪代码。',
        ],
    ],
    'fields' => [
        'identification_code' => [
            'label' => '识别码',
            'helper' => '你的 Pirsch 识别码。 可在 Pirsch 的 Settings > Integration 中找到。 留空则停用跟踪。',
        ],
    ],
];
