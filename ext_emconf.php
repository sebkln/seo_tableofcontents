<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'SEO Table of contents',
    'description' => 'This content element allows to get anchor links in Google search results. It works well with EXT:content_slug (which adds human-readable URL fragments to TYPO3 content elements).',
    'category' => 'fe',
    'author' => 'Sebastian Klein',
    'author_email' => 'sebastian@sebkln.de',
    'state' => 'test',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-10.4.99',
            'fluid_styled_content' => ''
        ],
        'conflicts' => [
        ],
        'suggests' => [
            'content_slug' => ''
        ],
    ],
];
