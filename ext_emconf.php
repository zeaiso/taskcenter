<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'User>Task Center',
    'description' => 'The Task Center provides the framework into which other extensions hook, for example, the sys_action extension.',
    'category' => 'module',
    'state' => 'stable',
    'author' => 'Friends of TYPO3',
    'author_email' => 'friendsof@typo3.org',
    'author_company' => '',
    'version' => '13.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '14.0.0-14.99.99',
        ],
        'conflicts' => [],
        'suggests' => [
            'sys_action' => '14.0.0-14.99.99',
        ],
    ],
];
