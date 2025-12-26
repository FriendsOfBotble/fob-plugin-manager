<?php

return [
    'plugin_upload' => [
        'menu' => 'Lataa ZIP-tiedostosta',
        'title' => 'Lataa lisäosa ZIP-tiedostosta',
        'not_enabled' => 'Turvallisuusongelman vuoksi sinun on lisättävä <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> <code>.env</code>-tiedostoosi tämän lisäosan aktivoinnin jälkeen, jotta voit alkaa käyttää sitä.',
        'description' => "Voit ladata lisäosan <code>.zip</code>-tiedostomuodossa, jonka olet ladannut :link tai muista lähteistä. Ole varovainen ladatessasi lisäosia, sillä ne voivat sisältää haitallista koodia, joka voi vahingoittaa verkkosivustoasi.",
        'upload_and_install' => 'Lataa ja asenna',
        'input_file_description' => 'Varmista, että tiedosto on kelvollinen <code>.zip</code>-muodossa.',
        'installed_message' => 'Ladattiin :file ja asennettiin lisäosa :name onnistuneesti.',
        'plugin_information' => [
            'title' => 'Lisäosan tiedot',
            'id' => 'ID',
            'name' => 'Nimi',
            'description' => 'Kuvaus',
            'author' => 'Tekijä',
            'version' => 'Versio',
            'minimum_core_version' => 'Vähimmäisydinversio',
        ],
        'plugin_id_conflict' => 'Lisäosan nimikonflikti eri ID:llä',
        'plugin_already_installed' => 'Tämä lisäosa on jo asennettu.',
        'plugin_available_update' => 'Lisäosa on asennettu onnistuneesti. Lisäksi tälle lisäosalle on saatavilla päivitys.',
        'current' => 'Nykyinen',
        'uploaded' => 'Ladattu',
        'activate_plugin' => 'Aktivoi lisäosa',
        'update_plugin' => 'Päivitä lisäosa',
        'back' => 'Takaisin',
        'validation' => [
            'could_not_find_plugin_file' => 'Lisäosan tiedostoa ei löytynyt zip-tiedostostasi.',
            'invalid_plugin_file' => 'Lisäosan zip-tiedostossasi oleva plugin.json-tiedosto ei ole kelvollinen.',
        ],
    ],
];
