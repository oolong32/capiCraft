<?php

use craft\elements\Entry;
use craft\helpers\UrlHelper;

return [
    'endpoints' => [
        'news.json' => function() {
            return [
                'elementType' => Entry::class,
                'criteria' => ['section' => 'home'],
                'transformer' => function(Entry $entry) {
                    // set links-variable
                    // foreach bla bla
                    $links = [];
                    foreach ($entry->linkList as $link)
                        $links[] = [
                          'linkTitle' => $link->linkText,
                          'linkUrl' => $link->linkUrl,
                      ];
                    return [
                        'title' => $entry->title,
                        'url' => $entry->url,
                        'links' => $links,
                    ];
                },
            ];
        },
    ]
];
