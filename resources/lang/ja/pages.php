<?php

return [
    'navigation_label' => 'Pirsch',
    'navigation_group' => '設定',
    'title' => 'Pirsch 設定',
    'sections' => [
        'pirsch' => [
            'heading' => 'Pirsch',
            'description' => 'サイトの Pirsch トラッキングコードを設定します。',
        ],
    ],
    'fields' => [
        'identification_code' => [
            'label' => '識別コード',
            'helper' => 'Pirsch の識別コード。 Pirsch の Settings > Integration で確認できます。 トラッキングを無効にするには空のままにします。',
        ],
    ],
];
