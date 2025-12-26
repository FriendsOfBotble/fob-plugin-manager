<?php

return [
    'plugin_upload' => [
        'menu' => 'Učitaj iz ZIP datoteke',
        'title' => 'Učitaj dodatak iz ZIP datoteke',
        'not_enabled' => 'Zbog sigurnosnog problema, trebate dodati <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> u svoju <code>.env</code> datoteku nakon aktivacije ovog dodatka kako biste ga počeli koristiti.',
        'description' => "Možete učitati dodatak u formatu <code>.zip</code> datoteke, koju ste preuzeli s :link ili drugih izvora. Budite oprezni pri učitavanju dodataka jer mogu sadržavati zlonamjerni kod koji može oštetiti vašu web stranicu.",
        'upload_and_install' => 'Učitaj i instaliraj',
        'input_file_description' => 'Provjerite je li datoteka valjana u <code>.zip</code> formatu.',
        'installed_message' => 'Učitano :file i dodatak :name uspješno instaliran.',
        'plugin_information' => [
            'title' => 'Informacije o dodatku',
            'id' => 'ID',
            'name' => 'Naziv',
            'description' => 'Opis',
            'author' => 'Autor',
            'version' => 'Verzija',
            'minimum_core_version' => 'Minimalna verzija jezgre',
        ],
        'plugin_id_conflict' => 'Sukob naziva dodatka s različitim ID-om',
        'plugin_already_installed' => 'Ovaj dodatak je već instaliran.',
        'plugin_available_update' => 'Dodatak je uspješno instaliran. Osim toga, dostupna je nadogradnja za ovaj dodatak.',
        'current' => 'Trenutno',
        'uploaded' => 'Učitano',
        'activate_plugin' => 'Aktiviraj dodatak',
        'update_plugin' => 'Ažuriraj dodatak',
        'back' => 'Natrag',
        'validation' => [
            'could_not_find_plugin_file' => 'Nije moguće pronaći datoteku dodatka u vašoj zip datoteci.',
            'invalid_plugin_file' => 'Datoteka plugin.json u vašoj zip datoteci dodatka nije valjana.',
        ],
    ],
];
