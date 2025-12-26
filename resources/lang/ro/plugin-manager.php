<?php

return [
    'plugin_upload' => [
        'menu' => 'Încarcă din fișier ZIP',
        'title' => 'Încarcă plugin din fișier ZIP',
        'not_enabled' => 'Din cauza unei probleme de securitate, trebuie să adăugați <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> în fișierul <code>.env</code> după activarea acestui plugin pentru a începe să îl utilizați.',
        'description' => "Poți încărca un plugin în format de fișier <code>.zip</code>, pe care l-ai descărcat de pe :link sau din alte surse. Te rugăm să fii precaut când încarci pluginuri, deoarece pot conține cod malițios care ar putea dăuna site-ului tău.",
        'upload_and_install' => 'Încarcă și instalează',
        'input_file_description' => 'Asigură-te că fișierul este valid în format <code>.zip</code>.',
        'installed_message' => 'S-a încărcat :file și s-a instalat pluginul :name cu succes.',
        'plugin_information' => [
            'title' => 'Informații plugin',
            'id' => 'ID',
            'name' => 'Nume',
            'description' => 'Descriere',
            'author' => 'Autor',
            'version' => 'Versiune',
            'minimum_core_version' => 'Versiune minimă a nucleului',
        ],
        'plugin_id_conflict' => 'Conflict de nume plugin cu ID diferit',
        'plugin_already_installed' => 'Acest plugin este deja instalat.',
        'plugin_available_update' => 'Pluginul a fost instalat cu succes. În plus, există o actualizare disponibilă pentru acest plugin.',
        'current' => 'Curent',
        'uploaded' => 'Încărcat',
        'activate_plugin' => 'Activează plugin',
        'update_plugin' => 'Actualizează plugin',
        'back' => 'Înapoi',
        'validation' => [
            'could_not_find_plugin_file' => 'Nu s-a putut găsi fișierul plugin în fișierul tău zip.',
            'invalid_plugin_file' => 'Fișierul plugin.json din fișierul zip al pluginului nu este valid.',
        ],
    ],
];
