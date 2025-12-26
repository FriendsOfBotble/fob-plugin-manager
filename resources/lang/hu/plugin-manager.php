<?php

return [
    'plugin_upload' => [
        'menu' => 'Feltöltés ZIP fájlból',
        'title' => 'Bővítmény feltöltése ZIP fájlból',
        'not_enabled' => 'Biztonsági probléma miatt a bővítmény aktiválása után hozzá kell adnia a <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> értéket a <code>.env</code> fájlhoz a használat megkezdéséhez.',
        'description' => "Feltölthetsz egy bővítményt <code>.zip</code> fájlformátumban, amelyet a :link oldalról vagy más forrásokból töltöttél le. Kérjük, légy óvatos a bővítmények feltöltésekor, mert kártékony kódot tartalmazhatnak, amely károsíthatja a weboldaladat.",
        'upload_and_install' => 'Feltöltés és telepítés',
        'input_file_description' => 'Győződj meg róla, hogy a fájl érvényes <code>.zip</code> formátumú.',
        'installed_message' => ':file feltöltve és :name bővítmény sikeresen telepítve.',
        'plugin_information' => [
            'title' => 'Bővítmény információ',
            'id' => 'ID',
            'name' => 'Név',
            'description' => 'Leírás',
            'author' => 'Szerző',
            'version' => 'Verzió',
            'minimum_core_version' => 'Minimális magverzió',
        ],
        'plugin_id_conflict' => 'Bővítménynév ütközés eltérő ID-val',
        'plugin_already_installed' => 'Ez a bővítmény már telepítve van.',
        'plugin_available_update' => 'A bővítmény sikeresen telepítve lett. Ezen kívül elérhető frissítés ehhez a bővítményhez.',
        'current' => 'Jelenlegi',
        'uploaded' => 'Feltöltve',
        'activate_plugin' => 'Bővítmény aktiválása',
        'update_plugin' => 'Bővítmény frissítése',
        'back' => 'Vissza',
        'validation' => [
            'could_not_find_plugin_file' => 'Nem található bővítményfájl a zip fájlodban.',
            'invalid_plugin_file' => 'A plugin.json fájl a bővítmény zip fájljában nem érvényes.',
        ],
    ],
];
