<?php

return [
    'plugin_upload' => [
        'menu' => 'رفع من ملف ZIP',
        'title' => 'رفع إضافة من ملف ZIP',
        'not_enabled' => 'بسبب مشكلة أمنية، تحتاج إلى إضافة <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> إلى ملف <code>.env</code> الخاص بك بعد تفعيل هذه الإضافة لبدء استخدامها.',
        'description' => "يمكنك رفع إضافة بصيغة ملف <code>.zip</code>، والتي قمت بتنزيلها من :link أو مصادر أخرى. يرجى توخي الحذر عند رفع الإضافات، حيث قد تحتوي على كود ضار يمكن أن يضر بموقعك.",
        'upload_and_install' => 'رفع وتثبيت',
        'input_file_description' => 'تأكد من أن الملف بصيغة <code>.zip</code> صالحة.',
        'installed_message' => 'تم رفع :file وتثبيت إضافة :name بنجاح.',
        'plugin_information' => [
            'title' => 'معلومات الإضافة',
            'id' => 'المعرف',
            'name' => 'الاسم',
            'description' => 'الوصف',
            'author' => 'المؤلف',
            'version' => 'الإصدار',
            'minimum_core_version' => 'الحد الأدنى لإصدار النظام',
        ],
        'plugin_id_conflict' => 'تعارض في اسم الإضافة مع معرف مختلف',
        'plugin_already_installed' => 'هذه الإضافة مثبتة بالفعل.',
        'plugin_available_update' => 'تم تثبيت الإضافة بنجاح. بالإضافة إلى ذلك، يتوفر تحديث لهذه الإضافة.',
        'current' => 'الحالي',
        'uploaded' => 'المرفوع',
        'activate_plugin' => 'تفعيل الإضافة',
        'update_plugin' => 'تحديث الإضافة',
        'back' => 'رجوع',
        'validation' => [
            'could_not_find_plugin_file' => 'لم يتم العثور على ملف الإضافة في ملف zip الخاص بك.',
            'invalid_plugin_file' => 'ملف plugin.json في ملف zip الخاص بالإضافة غير صالح.',
        ],
    ],
];
