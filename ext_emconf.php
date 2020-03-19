<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'iFrame for HTML5 Websites',
    'description' => 'Yet another iFrame extension with HTML5 support. Rendered with TypoScript. Doc: http://docs.typo3.org/typo3cms/extensions/lp_iframe/ and Git: https://github.com/lars85/TYPO3-Extensions-lp_iframe/',
    'category' => 'plugin',
    'version' => '1.4.0',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 0,
    'author' => 'Lars Malach',
    'author_email' => 'Lars@Malach.de',
    'author_company' => '',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ]
];
