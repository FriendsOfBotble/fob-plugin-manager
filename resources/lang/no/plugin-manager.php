<?php

return [
    'plugin_upload' => [
        'menu' => 'Last opp fra ZIP-fil',
        'title' => 'Last opp plugin fra ZIP-fil',
        'not_enabled' => 'På grunn av et sikkerhetsproblem må du legge til <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> i <code>.env</code>-filen din etter at du har aktivert denne pluginen for å begynne å bruke den.',
        'description' => "Du kan laste opp en plugin i <code>.zip</code>-filformat, som du har lastet ned fra :link eller andre kilder. Vær forsiktig når du laster opp plugins, da de kan inneholde skadelig kode som kan skade nettstedet ditt.",
        'upload_and_install' => 'Last opp og installer',
        'input_file_description' => 'Sørg for at filen er en gyldig fil i <code>.zip</code>-format.',
        'installed_message' => 'Lastet opp :file og installerte plugin :name.',
        'plugin_information' => [
            'title' => 'Plugin-informasjon',
            'id' => 'ID',
            'name' => 'Navn',
            'description' => 'Beskrivelse',
            'author' => 'Forfatter',
            'version' => 'Versjon',
            'minimum_core_version' => 'Minimum kjerneversjon',
        ],
        'plugin_id_conflict' => 'Plugin-navnkonflikt med forskjellig ID',
        'plugin_already_installed' => 'Denne pluginen er allerede installert.',
        'plugin_available_update' => 'Pluginen har blitt installert. I tillegg er det en tilgjengelig oppdatering for denne pluginen.',
        'current' => 'Nåværende',
        'uploaded' => 'Opplastet',
        'activate_plugin' => 'Aktiver plugin',
        'update_plugin' => 'Oppdater plugin',
        'back' => 'Tilbake',
        'validation' => [
            'could_not_find_plugin_file' => 'Kunne ikke finne plugin-fil i zip-filen din.',
            'invalid_plugin_file' => 'Plugin.json-filen i plugin zip-filen din er ikke gyldig.',
        ],
    ],
];
