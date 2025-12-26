<?php

return [
    'plugin_upload' => [
        'menu' => 'I-upload mula sa ZIP File',
        'title' => 'I-upload ang Plugin mula sa ZIP file',
        'not_enabled' => 'Dahil sa isyu sa seguridad, kailangan mong idagdag ang <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> sa iyong <code>.env</code> file pagkatapos i-activate ang plugin na ito upang masimulan itong gamitin.',
        'description' => "Maaari kang mag-upload ng plugin sa <code>.zip</code> na format ng file, na na-download mo mula sa :link o iba pang mga source. Mag-ingat sa pag-upload ng mga plugin, dahil maaaring maglaman ang mga ito ng malisyosong code na maaaring makapinsala sa iyong website.",
        'upload_and_install' => 'I-upload at I-install',
        'input_file_description' => 'Siguraduhing ang file ay valid na <code>.zip</code> na format.',
        'installed_message' => 'Na-upload ang :file at na-install ang plugin na :name nang matagumpay.',
        'plugin_information' => [
            'title' => 'Impormasyon ng Plugin',
            'id' => 'ID',
            'name' => 'Pangalan',
            'description' => 'Paglalarawan',
            'author' => 'May-akda',
            'version' => 'Bersyon',
            'minimum_core_version' => 'Minimum na Bersyon ng Core',
        ],
        'plugin_id_conflict' => 'Nagkakasalungat ang pangalan ng plugin sa ibang ID',
        'plugin_already_installed' => 'Naka-install na ang plugin na ito.',
        'plugin_available_update' => 'Matagumpay na na-install ang plugin. Bukod dito, may available na update para sa plugin na ito.',
        'current' => 'Kasalukuyan',
        'uploaded' => 'Na-upload',
        'activate_plugin' => 'I-activate ang plugin',
        'update_plugin' => 'I-update ang plugin',
        'back' => 'Bumalik',
        'validation' => [
            'could_not_find_plugin_file' => 'Hindi mahanap ang plugin file sa iyong zip file.',
            'invalid_plugin_file' => 'Ang plugin.json file sa iyong plugin zip file ay hindi valid.',
        ],
    ],
];
