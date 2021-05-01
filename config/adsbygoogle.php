<?php

return [
    'client_id' => 'YOUR_CLIENT_ID', //Your Adsense client ID e.g. ca-pub-9508939161510421
    'ads' => [
        'responsive' => [
            'ad_slot' => 12345678901,
            'ad_format' => 'auto',
            'ad_full_width_responsive' => true
        ],
        'rectangle' => [
            'ad_slot' => 5681560223,
            'ad_style' => 'display:inline-block;width:300px;height:250px',
        ],
        'inArticle' => [
            'ad_layout' => 'in-article',
            'ad_format' => 'fluid',
            'ad_slot' => 5149408889,
            'ad_style' => 'display:block; text-align:center;'
        ]
    ]
];
