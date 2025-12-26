<?php

return [
    'plugin_upload' => [
        'menu' => 'Upload fra ZIP-fil',
        'title' => 'Upload plugin fra ZIP-fil',
        'not_enabled' => 'På grund af et sikkerhedsproblem skal du tilføje <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> til din <code>.env</code>-fil efter aktivering af dette plugin for at begynde at bruge det.',
        'description' => "Du kan uploade et plugin i <code>.zip</code>-filformatet, som du har downloadet fra :link eller andre kilder. Vær forsigtig, når du uploader plugins, da de kan indeholde skadelig kode, der kan skade dit websted.",
        'upload_and_install' => 'Upload og installer',
        'input_file_description' => 'Sørg for, at filen er en gyldig fil i <code>.zip</code>-format.',
        'installed_message' => 'Uploadede :file og installerede :name plugin med succes.',
        'plugin_information' => [
            'title' => 'Plugin-information',
            'id' => 'ID',
            'name' => 'Navn',
            'description' => 'Beskrivelse',
            'author' => 'Forfatter',
            'version' => 'Version',
            'minimum_core_version' => 'Minimum kerneversion',
        ],
        'plugin_id_conflict' => 'Plugin-navnkonflikt med forskelligt ID',
        'plugin_already_installed' => 'Dette plugin er allerede installeret.',
        'plugin_available_update' => 'Pluginet er blevet installeret med succes. Derudover er der en tilgængelig opdatering til dette plugin.',
        'current' => 'Nuværende',
        'uploaded' => 'Uploadet',
        'activate_plugin' => 'Aktiver plugin',
        'update_plugin' => 'Opdater plugin',
        'back' => 'Tilbage',
        'validation' => [
            'could_not_find_plugin_file' => 'Kunne ikke finde plugin-fil i din zip-fil.',
            'invalid_plugin_file' => 'Filen plugin.json i din plugin zip-fil er ikke gyldig.',
        ],
    ],
];
