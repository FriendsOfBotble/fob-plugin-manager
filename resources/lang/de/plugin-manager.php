<?php

return [
    'plugin_upload' => [
        'menu' => 'Aus ZIP-Datei hochladen',
        'title' => 'Plugin aus ZIP-Datei hochladen',
        'not_enabled' => 'Aus Sicherheitsgründen müssen Sie <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> zu Ihrer <code>.env</code>-Datei hinzufügen, nachdem Sie dieses Plugin aktiviert haben, um es verwenden zu können.',
        'description' => "Sie können ein Plugin im <code>.zip</code>-Dateiformat hochladen, das Sie von :link oder anderen Quellen heruntergeladen haben. Bitte seien Sie vorsichtig beim Hochladen von Plugins, da sie schädlichen Code enthalten können, der Ihrer Website schaden könnte.",
        'upload_and_install' => 'Hochladen & Installieren',
        'input_file_description' => 'Stellen Sie sicher, dass die Datei ein gültiges <code>.zip</code>-Format hat.',
        'installed_message' => ':file hochgeladen und Plugin :name erfolgreich installiert.',
        'plugin_information' => [
            'title' => 'Plugin-Informationen',
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Beschreibung',
            'author' => 'Autor',
            'version' => 'Version',
            'minimum_core_version' => 'Mindest-Core-Version',
        ],
        'plugin_id_conflict' => 'Plugin-Namenskonflikt mit unterschiedlicher ID',
        'plugin_already_installed' => 'Dieses Plugin ist bereits installiert.',
        'plugin_available_update' => 'Das Plugin wurde erfolgreich installiert. Außerdem ist ein Update für dieses Plugin verfügbar.',
        'current' => 'Aktuell',
        'uploaded' => 'Hochgeladen',
        'activate_plugin' => 'Plugin aktivieren',
        'update_plugin' => 'Plugin aktualisieren',
        'back' => 'Zurück',
        'validation' => [
            'could_not_find_plugin_file' => 'Plugin-Datei konnte in Ihrer ZIP-Datei nicht gefunden werden.',
            'invalid_plugin_file' => 'Die plugin.json-Datei in Ihrer Plugin-ZIP-Datei ist ungültig.',
        ],
    ],
];
