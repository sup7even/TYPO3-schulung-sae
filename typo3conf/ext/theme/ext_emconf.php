<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Unsere Provider Extension',
    'description' => 'Foobar',
    'category' => 'fe',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.0',
    'constraints' => array(
        'depends' => array(
            'extbase' => '7.6.0-7.6.99',
        ),
        'conflicts' => array(),
        'suggests' => array(),
    ),
);
