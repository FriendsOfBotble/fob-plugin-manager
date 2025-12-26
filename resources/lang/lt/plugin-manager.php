<?php

return [
    'plugin_upload' => [
        'menu' => 'Įkelti iš ZIP failo',
        'title' => 'Įkelti įskiepį iš ZIP failo',
        'not_enabled' => 'Dėl saugumo problemos, aktyvavus šį įskiepį, norint pradėti jį naudoti, reikia pridėti <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> prie savo <code>.env</code> failo.',
        'description' => "Galite įkelti įskiepį <code>.zip</code> failo formatu, kurį atsisiuntėte iš :link arba kitų šaltinių. Būkite atsargūs įkeldami įskiepius, nes juose gali būti kenkėjiško kodo, kuris gali pakenkti jūsų svetainei.",
        'upload_and_install' => 'Įkelti ir įdiegti',
        'input_file_description' => 'Įsitikinkite, kad failas yra galiojančio <code>.zip</code> formato.',
        'installed_message' => 'Įkeltas :file ir sėkmingai įdiegtas įskiepis :name.',
        'plugin_information' => [
            'title' => 'Įskiepio informacija',
            'id' => 'ID',
            'name' => 'Pavadinimas',
            'description' => 'Aprašymas',
            'author' => 'Autorius',
            'version' => 'Versija',
            'minimum_core_version' => 'Minimali branduolio versija',
        ],
        'plugin_id_conflict' => 'Įskiepio pavadinimo konfliktas su skirtingu ID',
        'plugin_already_installed' => 'Šis įskiepis jau įdiegtas.',
        'plugin_available_update' => 'Įskiepis sėkmingai įdiegtas. Be to, šiam įskiepiui yra prieinamas naujinimas.',
        'current' => 'Dabartinis',
        'uploaded' => 'Įkeltas',
        'activate_plugin' => 'Aktyvuoti įskiepį',
        'update_plugin' => 'Atnaujinti įskiepį',
        'back' => 'Atgal',
        'validation' => [
            'could_not_find_plugin_file' => 'Nepavyko rasti įskiepio failo jūsų zip faile.',
            'invalid_plugin_file' => 'Jūsų įskiepio zip faile esantis plugin.json failas yra negaliojantis.',
        ],
    ],
];
