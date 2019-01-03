<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'News events | MOD: use hwt_address Addresses for Locations and Organizers',
    'description' => 'Events for news',
    'category' => 'plugin',
    'author' => 'Georg Ringer',
    'author_email' => '',
    'state' => 'beta',
    'clearCacheOnLoad' => true,
    'version' => '2.2.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.22-9.5.99',
            'news' => '7.0.0-7.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
