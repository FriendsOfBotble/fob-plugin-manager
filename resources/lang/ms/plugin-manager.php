<?php

return [
    'plugin_upload' => [
        'menu' => 'Muat Naik dari Fail ZIP',
        'title' => 'Muat Naik Plugin dari fail ZIP',
        'not_enabled' => 'Disebabkan isu keselamatan, anda perlu menambah <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> ke fail <code>.env</code> anda selepas mengaktifkan plugin ini untuk mula menggunakannya.',
        'description' => "Anda boleh memuat naik plugin dalam format fail <code>.zip</code>, yang telah anda muat turun dari :link atau sumber lain. Sila berhati-hati semasa memuat naik plugin, kerana ia mungkin mengandungi kod berniat jahat yang boleh merosakkan laman web anda.",
        'upload_and_install' => 'Muat Naik & Pasang',
        'input_file_description' => 'Pastikan fail tersebut adalah fail yang sah dalam format <code>.zip</code>.',
        'installed_message' => 'Memuat naik :file dan memasang plugin :name dengan jayanya.',
        'plugin_information' => [
            'title' => 'Maklumat Plugin',
            'id' => 'ID',
            'name' => 'Nama',
            'description' => 'Penerangan',
            'author' => 'Pengarang',
            'version' => 'Versi',
            'minimum_core_version' => 'Versi Teras Minimum',
        ],
        'plugin_id_conflict' => 'Konflik nama plugin dengan ID berbeza',
        'plugin_already_installed' => 'Plugin ini sudah dipasang.',
        'plugin_available_update' => 'Plugin telah berjaya dipasang. Selain itu, terdapat kemas kini yang tersedia untuk plugin ini.',
        'current' => 'Semasa',
        'uploaded' => 'Dimuat naik',
        'activate_plugin' => 'Aktifkan plugin',
        'update_plugin' => 'Kemas kini plugin',
        'back' => 'Kembali',
        'validation' => [
            'could_not_find_plugin_file' => 'Tidak dapat mencari fail plugin dalam fail zip anda.',
            'invalid_plugin_file' => 'Fail plugin.json dalam fail zip plugin anda tidak sah.',
        ],
    ],
];
