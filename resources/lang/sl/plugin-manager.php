<?php

return [
    'plugin_upload' => [
        'menu' => 'Naloži iz datoteke ZIP',
        'title' => 'Naloži vtičnik iz datoteke ZIP',
        'not_enabled' => 'Zaradi varnostne težave morate po aktivaciji tega vtičnika dodati <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> v datoteko <code>.env</code>, da ga lahko začnete uporabljati.',
        'description' => "Vtičnik lahko naložite v formatu datoteke <code>.zip</code>, ki ste jo prenesli z :link ali drugih virov. Pri nalaganju vtičnikov bodite previdni, saj lahko vsebujejo zlonamerno kodo, ki lahko škoduje vaši spletni strani.",
        'upload_and_install' => 'Naloži in namesti',
        'input_file_description' => 'Prepričajte se, da je datoteka veljavna v formatu <code>.zip</code>.',
        'installed_message' => 'Naložena :file in uspešno nameščen vtičnik :name.',
        'plugin_information' => [
            'title' => 'Informacije o vtičniku',
            'id' => 'ID',
            'name' => 'Ime',
            'description' => 'Opis',
            'author' => 'Avtor',
            'version' => 'Različica',
            'minimum_core_version' => 'Minimalna različica jedra',
        ],
        'plugin_id_conflict' => 'Konflikt imena vtičnika z drugačnim ID-jem',
        'plugin_already_installed' => 'Ta vtičnik je že nameščen.',
        'plugin_available_update' => 'Vtičnik je bil uspešno nameščen. Poleg tega je na voljo posodobitev za ta vtičnik.',
        'current' => 'Trenutno',
        'uploaded' => 'Naloženo',
        'activate_plugin' => 'Aktiviraj vtičnik',
        'update_plugin' => 'Posodobi vtičnik',
        'back' => 'Nazaj',
        'validation' => [
            'could_not_find_plugin_file' => 'V vaši datoteki zip ni mogoče najti datoteke vtičnika.',
            'invalid_plugin_file' => 'Datoteka plugin.json v vaši datoteki zip vtičnika ni veljavna.',
        ],
    ],
];
