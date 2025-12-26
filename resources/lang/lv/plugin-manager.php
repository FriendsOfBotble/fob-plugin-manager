<?php

return [
    'plugin_upload' => [
        'menu' => 'Augšupielādēt no ZIP faila',
        'title' => 'Augšupielādēt spraudni no ZIP faila',
        'not_enabled' => 'Drošības problēmas dēļ pēc šī spraudņa aktivizēšanas jums jāpievieno <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> savam <code>.env</code> failam, lai sāktu to lietot.',
        'description' => "Varat augšupielādēt spraudni <code>.zip</code> faila formātā, ko esat lejupielādējis no :link vai citiem avotiem. Lūdzu, esiet uzmanīgi, augšupielādējot spraudņus, jo tie var saturēt ļaunprātīgu kodu, kas var kaitēt jūsu vietnei.",
        'upload_and_install' => 'Augšupielādēt un instalēt',
        'input_file_description' => 'Pārliecinieties, ka fails ir derīgs <code>.zip</code> formātā.',
        'installed_message' => 'Augšupielādēts :file un veiksmīgi instalēts spraudnis :name.',
        'plugin_information' => [
            'title' => 'Spraudņa informācija',
            'id' => 'ID',
            'name' => 'Nosaukums',
            'description' => 'Apraksts',
            'author' => 'Autors',
            'version' => 'Versija',
            'minimum_core_version' => 'Minimālā kodola versija',
        ],
        'plugin_id_conflict' => 'Spraudņa nosaukuma konflikts ar atšķirīgu ID',
        'plugin_already_installed' => 'Šis spraudnis jau ir instalēts.',
        'plugin_available_update' => 'Spraudnis ir veiksmīgi instalēts. Turklāt šim spraudnim ir pieejams atjauninājums.',
        'current' => 'Pašreizējais',
        'uploaded' => 'Augšupielādēts',
        'activate_plugin' => 'Aktivizēt spraudni',
        'update_plugin' => 'Atjaunināt spraudni',
        'back' => 'Atpakaļ',
        'validation' => [
            'could_not_find_plugin_file' => 'Nevar atrast spraudņa failu jūsu zip failā.',
            'invalid_plugin_file' => 'Jūsu spraudņa zip failā esošais plugin.json fails nav derīgs.',
        ],
    ],
];
