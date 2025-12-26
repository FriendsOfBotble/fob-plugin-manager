<?php

return [
    'plugin_upload' => [
        'menu' => 'ZIP Dosyasından Yükle',
        'title' => 'ZIP dosyasından eklenti yükle',
        'not_enabled' => 'Bir güvenlik sorunu nedeniyle, bu eklentiyi kullanmaya başlamak için eklentiyi etkinleştirdikten sonra <code>.env</code> dosyanıza <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> eklemeniz gerekmektedir.',
        'description' => ":link veya diğer kaynaklardan indirdiğiniz <code>.zip</code> dosya formatında bir eklenti yükleyebilirsiniz. Eklentileri yüklerken dikkatli olun, çünkü web sitenize zarar verebilecek kötü amaçlı kod içerebilirler.",
        'upload_and_install' => 'Yükle ve Kur',
        'input_file_description' => 'Dosyanın geçerli bir <code>.zip</code> formatında olduğundan emin olun.',
        'installed_message' => ':file yüklendi ve :name eklentisi başarıyla kuruldu.',
        'plugin_information' => [
            'title' => 'Eklenti Bilgisi',
            'id' => 'ID',
            'name' => 'Ad',
            'description' => 'Açıklama',
            'author' => 'Yazar',
            'version' => 'Sürüm',
            'minimum_core_version' => 'Minimum Çekirdek Sürümü',
        ],
        'plugin_id_conflict' => 'Farklı ID ile eklenti adı çakışması',
        'plugin_already_installed' => 'Bu eklenti zaten kurulu.',
        'plugin_available_update' => 'Eklenti başarıyla kuruldu. Ayrıca bu eklenti için bir güncelleme mevcut.',
        'current' => 'Mevcut',
        'uploaded' => 'Yüklendi',
        'activate_plugin' => 'Eklentiyi etkinleştir',
        'update_plugin' => 'Eklentiyi güncelle',
        'back' => 'Geri',
        'validation' => [
            'could_not_find_plugin_file' => 'Zip dosyanızda eklenti dosyası bulunamadı.',
            'invalid_plugin_file' => 'Eklenti zip dosyanızdaki plugin.json dosyası geçerli değil.',
        ],
    ],
];
