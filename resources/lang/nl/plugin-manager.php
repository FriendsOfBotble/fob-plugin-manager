<?php

return [
    'plugin_upload' => [
        'menu' => 'Uploaden vanuit ZIP-bestand',
        'title' => 'Plugin uploaden vanuit ZIP-bestand',
        'not_enabled' => 'Vanwege een beveiligingsprobleem moet u <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> toevoegen aan uw <code>.env</code>-bestand na het activeren van deze plugin om deze te kunnen gebruiken.',
        'description' => "Je kunt een plugin uploaden in <code>.zip</code>-bestandsformaat, die je hebt gedownload van :link of andere bronnen. Wees voorzichtig bij het uploaden van plugins, omdat ze schadelijke code kunnen bevatten die je website kan beschadigen.",
        'upload_and_install' => 'Uploaden & Installeren',
        'input_file_description' => 'Zorg ervoor dat het bestand een geldig <code>.zip</code>-formaat heeft.',
        'installed_message' => ':file geüpload en plugin :name succesvol geïnstalleerd.',
        'plugin_information' => [
            'title' => 'Plugin-informatie',
            'id' => 'ID',
            'name' => 'Naam',
            'description' => 'Beschrijving',
            'author' => 'Auteur',
            'version' => 'Versie',
            'minimum_core_version' => 'Minimale kernversie',
        ],
        'plugin_id_conflict' => 'Plugin-naamconflict met ander ID',
        'plugin_already_installed' => 'Deze plugin is al geïnstalleerd.',
        'plugin_available_update' => 'De plugin is succesvol geïnstalleerd. Daarnaast is er een update beschikbaar voor deze plugin.',
        'current' => 'Huidig',
        'uploaded' => 'Geüpload',
        'activate_plugin' => 'Plugin activeren',
        'update_plugin' => 'Plugin bijwerken',
        'back' => 'Terug',
        'validation' => [
            'could_not_find_plugin_file' => 'Kon geen plugin-bestand vinden in je zip-bestand.',
            'invalid_plugin_file' => 'Het plugin.json-bestand in je plugin zip-bestand is niet geldig.',
        ],
    ],
];
