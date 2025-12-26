<?php

return [
    'plugin_upload' => [
        'menu' => 'ZIP ফাইল থেকে আপলোড',
        'title' => 'ZIP ফাইল থেকে প্লাগইন আপলোড করুন',
        'not_enabled' => 'নিরাপত্তা সমস্যার কারণে, এই প্লাগইনটি ব্যবহার শুরু করতে আপনাকে প্লাগইনটি সক্রিয় করার পরে আপনার <code>.env</code> ফাইলে <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> যোগ করতে হবে।',
        'description' => "আপনি <code>.zip</code> ফাইল ফরম্যাটে একটি প্লাগইন আপলোড করতে পারেন, যা আপনি :link বা অন্যান্য উৎস থেকে ডাউনলোড করেছেন। প্লাগইন আপলোড করার সময় সতর্ক থাকুন, কারণ এতে ক্ষতিকারক কোড থাকতে পারে যা আপনার ওয়েবসাইটের ক্ষতি করতে পারে।",
        'upload_and_install' => 'আপলোড এবং ইনস্টল',
        'input_file_description' => 'নিশ্চিত করুন যে ফাইলটি <code>.zip</code> ফরম্যাটে বৈধ।',
        'installed_message' => ':file আপলোড এবং :name প্লাগইন সফলভাবে ইনস্টল হয়েছে।',
        'plugin_information' => [
            'title' => 'প্লাগইন তথ্য',
            'id' => 'আইডি',
            'name' => 'নাম',
            'description' => 'বিবরণ',
            'author' => 'লেখক',
            'version' => 'সংস্করণ',
            'minimum_core_version' => 'ন্যূনতম কোর সংস্করণ',
        ],
        'plugin_id_conflict' => 'ভিন্ন আইডির সাথে প্লাগইন নামের দ্বন্দ্ব',
        'plugin_already_installed' => 'এই প্লাগইনটি ইতিমধ্যে ইনস্টল করা আছে।',
        'plugin_available_update' => 'প্লাগইনটি সফলভাবে ইনস্টল হয়েছে। এছাড়াও, এই প্লাগইনের জন্য একটি আপডেট উপলব্ধ।',
        'current' => 'বর্তমান',
        'uploaded' => 'আপলোড করা',
        'activate_plugin' => 'প্লাগইন সক্রিয় করুন',
        'update_plugin' => 'প্লাগইন আপডেট করুন',
        'back' => 'পিছনে',
        'validation' => [
            'could_not_find_plugin_file' => 'আপনার zip ফাইলে প্লাগইন ফাইল খুঁজে পাওয়া যায়নি।',
            'invalid_plugin_file' => 'আপনার প্লাগইন zip ফাইলে plugin.json ফাইলটি বৈধ নয়।',
        ],
    ],
];
