<?php

return [
    'plugin_upload' => [
        'menu' => 'Nahrať zo súboru ZIP',
        'title' => 'Nahrať plugin zo súboru ZIP',
        'not_enabled' => 'Z dôvodu bezpečnostného problému musíte po aktivácii tohto pluginu pridať <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> do súboru <code>.env</code>, aby ste ho mohli začať používať.',
        'description' => "Môžete nahrať plugin vo formáte <code>.zip</code>, ktorý ste stiahli z :link alebo iných zdrojov. Pri nahrávaní pluginov buďte opatrní, pretože môžu obsahovať škodlivý kód, ktorý môže poškodiť vašu webovú stránku.",
        'upload_and_install' => 'Nahrať a nainštalovať',
        'input_file_description' => 'Uistite sa, že súbor je platný vo formáte <code>.zip</code>.',
        'installed_message' => 'Nahraný :file a úspešne nainštalovaný plugin :name.',
        'plugin_information' => [
            'title' => 'Informácie o plugine',
            'id' => 'ID',
            'name' => 'Názov',
            'description' => 'Popis',
            'author' => 'Autor',
            'version' => 'Verzia',
            'minimum_core_version' => 'Minimálna verzia jadra',
        ],
        'plugin_id_conflict' => 'Konflikt názvu pluginu s iným ID',
        'plugin_already_installed' => 'Tento plugin je už nainštalovaný.',
        'plugin_available_update' => 'Plugin bol úspešne nainštalovaný. Okrem toho je k dispozícii aktualizácia pre tento plugin.',
        'current' => 'Aktuálny',
        'uploaded' => 'Nahraný',
        'activate_plugin' => 'Aktivovať plugin',
        'update_plugin' => 'Aktualizovať plugin',
        'back' => 'Späť',
        'validation' => [
            'could_not_find_plugin_file' => 'Vo vašom súbore zip sa nepodarilo nájsť súbor pluginu.',
            'invalid_plugin_file' => 'Súbor plugin.json vo vašom súbore zip pluginu nie je platný.',
        ],
    ],
];
