<?php

return [
    'breadcrumb' => 'Log',

    'title' => 'Log entity ":record"',

    'default_datetime_format' => 'j.n.Y H:i:s',

    'table' => [
        'field' => 'Pole',
        'old' => 'Pôvodné',
        'new' => 'Nové',
        'restore' => 'Obnoviť',
    ],

    'events' => [
        'updated' => 'Upravené',
        'created' => 'Vytvorené',
        'deleted' => 'Vymazané',
        'restored' => 'Obnovené',
        'restore_successful' => 'Úspešne obnovené',
        'restore_failed' => 'Obnovenie zlyhalo',
    ],
];
