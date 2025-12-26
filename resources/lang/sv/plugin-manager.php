<?php

return [
    'plugin_upload' => [
        'menu' => 'Ladda upp från ZIP-fil',
        'title' => 'Ladda upp plugin från ZIP-fil',
        'not_enabled' => 'På grund av ett säkerhetsproblem måste du lägga till <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> i din <code>.env</code>-fil efter att du aktiverat detta plugin för att börja använda det.',
        'description' => "Du kan ladda upp ett plugin i <code>.zip</code>-filformat, som du har laddat ner från :link eller andra källor. Var försiktig när du laddar upp plugins, eftersom de kan innehålla skadlig kod som kan skada din webbplats.",
        'upload_and_install' => 'Ladda upp och installera',
        'input_file_description' => 'Se till att filen är en giltig fil i <code>.zip</code>-format.',
        'installed_message' => 'Laddade upp :file och installerade plugin :name framgångsrikt.',
        'plugin_information' => [
            'title' => 'Plugin-information',
            'id' => 'ID',
            'name' => 'Namn',
            'description' => 'Beskrivning',
            'author' => 'Författare',
            'version' => 'Version',
            'minimum_core_version' => 'Minsta kärnversion',
        ],
        'plugin_id_conflict' => 'Plugin-namnkonflikt med annat ID',
        'plugin_already_installed' => 'Detta plugin är redan installerat.',
        'plugin_available_update' => 'Pluginet har installerats framgångsrikt. Dessutom finns det en tillgänglig uppdatering för detta plugin.',
        'current' => 'Nuvarande',
        'uploaded' => 'Uppladdad',
        'activate_plugin' => 'Aktivera plugin',
        'update_plugin' => 'Uppdatera plugin',
        'back' => 'Tillbaka',
        'validation' => [
            'could_not_find_plugin_file' => 'Kunde inte hitta plugin-fil i din zip-fil.',
            'invalid_plugin_file' => 'Filen plugin.json i din plugin zip-fil är inte giltig.',
        ],
    ],
];
