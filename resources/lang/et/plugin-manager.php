<?php

return [
    'plugin_upload' => [
        'menu' => 'Laadi üles ZIP-failist',
        'title' => 'Laadi plugin üles ZIP-failist',
        'not_enabled' => 'Turvaprobleemi tõttu peate pärast selle plugina aktiveerimist lisama oma <code>.env</code> faili <code>FOB_PLUGIN_MANAGER_ENABLED=true</code>, et seda kasutama hakata.',
        'description' => "Saate üles laadida plugina <code>.zip</code>-failivormingus, mille olete alla laadinud :link või muudest allikatest. Palun olge pluginate üleslaadimisel ettevaatlik, kuna need võivad sisaldada pahatahtlikku koodi, mis võib teie veebisaidile kahju tekitada.",
        'upload_and_install' => 'Laadi üles ja installi',
        'input_file_description' => 'Veenduge, et fail on kehtivas <code>.zip</code>-vormingus.',
        'installed_message' => 'Laaditi üles :file ja installiti plugin :name edukalt.',
        'plugin_information' => [
            'title' => 'Plugina teave',
            'id' => 'ID',
            'name' => 'Nimi',
            'description' => 'Kirjeldus',
            'author' => 'Autor',
            'version' => 'Versioon',
            'minimum_core_version' => 'Minimaalne tuumiku versioon',
        ],
        'plugin_id_conflict' => 'Plugina nime konflikt erineva ID-ga',
        'plugin_already_installed' => 'See plugin on juba installitud.',
        'plugin_available_update' => 'Plugin on edukalt installitud. Lisaks on selle plugina jaoks saadaval värskendus.',
        'current' => 'Praegune',
        'uploaded' => 'Üles laaditud',
        'activate_plugin' => 'Aktiveeri plugin',
        'update_plugin' => 'Värskenda pluginat',
        'back' => 'Tagasi',
        'validation' => [
            'could_not_find_plugin_file' => 'Teie zip-failist ei leitud plugina faili.',
            'invalid_plugin_file' => 'Teie plugina zip-failis olev plugin.json fail ei ole kehtiv.',
        ],
    ],
];
