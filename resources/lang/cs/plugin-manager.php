<?php

return [
    'plugin_upload' => [
        'menu' => 'Nahrát ze souboru ZIP',
        'title' => 'Nahrát plugin ze souboru ZIP',
        'not_enabled' => 'Z důvodu bezpečnostního problému musíte po aktivaci tohoto pluginu přidat <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> do souboru <code>.env</code>, abyste jej mohli začít používat.',
        'description' => "Můžete nahrát plugin ve formátu <code>.zip</code>, který jste stáhli z :link nebo jiných zdrojů. Při nahrávání pluginů buďte opatrní, protože mohou obsahovat škodlivý kód, který může poškodit váš web.",
        'upload_and_install' => 'Nahrát a nainstalovat',
        'input_file_description' => 'Ujistěte se, že soubor je platný ve formátu <code>.zip</code>.',
        'installed_message' => 'Nahráno :file a plugin :name úspěšně nainstalován.',
        'plugin_information' => [
            'title' => 'Informace o pluginu',
            'id' => 'ID',
            'name' => 'Název',
            'description' => 'Popis',
            'author' => 'Autor',
            'version' => 'Verze',
            'minimum_core_version' => 'Minimální verze jádra',
        ],
        'plugin_id_conflict' => 'Konflikt názvu pluginu s jiným ID',
        'plugin_already_installed' => 'Tento plugin je již nainstalován.',
        'plugin_available_update' => 'Plugin byl úspěšně nainstalován. Navíc je k dispozici aktualizace pro tento plugin.',
        'current' => 'Aktuální',
        'uploaded' => 'Nahraný',
        'activate_plugin' => 'Aktivovat plugin',
        'update_plugin' => 'Aktualizovat plugin',
        'back' => 'Zpět',
        'validation' => [
            'could_not_find_plugin_file' => 'Ve vašem souboru zip nebyl nalezen soubor pluginu.',
            'invalid_plugin_file' => 'Soubor plugin.json ve vašem souboru zip pluginu není platný.',
        ],
    ],
];
