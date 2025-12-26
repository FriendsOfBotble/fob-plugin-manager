<?php

return [
    'plugin_upload' => [
        'menu' => 'Unggah dari File ZIP',
        'title' => 'Unggah Plugin dari file ZIP',
        'not_enabled' => 'Karena masalah keamanan, Anda perlu menambahkan <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> ke file <code>.env</code> Anda setelah mengaktifkan plugin ini untuk mulai menggunakannya.',
        'description' => "Anda dapat mengunggah plugin dalam format file <code>.zip</code>, yang telah Anda unduh dari :link atau sumber lain. Harap berhati-hati saat mengunggah plugin, karena mungkin mengandung kode berbahaya yang dapat merusak situs web Anda.",
        'upload_and_install' => 'Unggah & Instal',
        'input_file_description' => 'Pastikan file tersebut valid dalam format <code>.zip</code>.',
        'installed_message' => 'Berhasil mengunggah :file dan menginstal plugin :name.',
        'plugin_information' => [
            'title' => 'Informasi Plugin',
            'id' => 'ID',
            'name' => 'Nama',
            'description' => 'Deskripsi',
            'author' => 'Penulis',
            'version' => 'Versi',
            'minimum_core_version' => 'Versi Inti Minimum',
        ],
        'plugin_id_conflict' => 'Konflik nama plugin dengan ID berbeda',
        'plugin_already_installed' => 'Plugin ini sudah terinstal.',
        'plugin_available_update' => 'Plugin telah berhasil diinstal. Selain itu, tersedia pembaruan untuk plugin ini.',
        'current' => 'Saat ini',
        'uploaded' => 'Diunggah',
        'activate_plugin' => 'Aktifkan plugin',
        'update_plugin' => 'Perbarui plugin',
        'back' => 'Kembali',
        'validation' => [
            'could_not_find_plugin_file' => 'Tidak dapat menemukan file plugin dalam file zip Anda.',
            'invalid_plugin_file' => 'File plugin.json dalam file zip plugin Anda tidak valid.',
        ],
    ],
];
