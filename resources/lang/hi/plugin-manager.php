<?php

return [
    'plugin_upload' => [
        'menu' => 'ZIP फ़ाइल से अपलोड करें',
        'title' => 'ZIP फ़ाइल से प्लगइन अपलोड करें',
        'not_enabled' => 'सुरक्षा समस्या के कारण, इस प्लगइन को सक्रिय करने के बाद इसका उपयोग शुरू करने के लिए आपको अपनी <code>.env</code> फ़ाइल में <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> जोड़ना होगा।',
        'description' => "आप <code>.zip</code> फ़ाइल प्रारूप में एक प्लगइन अपलोड कर सकते हैं, जिसे आपने :link या अन्य स्रोतों से डाउनलोड किया है। प्लगइन अपलोड करते समय सावधान रहें, क्योंकि उनमें दुर्भावनापूर्ण कोड हो सकता है जो आपकी वेबसाइट को नुकसान पहुंचा सकता है।",
        'upload_and_install' => 'अपलोड और इंस्टॉल करें',
        'input_file_description' => 'सुनिश्चित करें कि फ़ाइल <code>.zip</code> प्रारूप में मान्य है।',
        'installed_message' => ':file अपलोड किया गया और :name प्लगइन सफलतापूर्वक इंस्टॉल किया गया।',
        'plugin_information' => [
            'title' => 'प्लगइन जानकारी',
            'id' => 'आईडी',
            'name' => 'नाम',
            'description' => 'विवरण',
            'author' => 'लेखक',
            'version' => 'संस्करण',
            'minimum_core_version' => 'न्यूनतम कोर संस्करण',
        ],
        'plugin_id_conflict' => 'अलग आईडी के साथ प्लगइन नाम विरोध',
        'plugin_already_installed' => 'यह प्लगइन पहले से इंस्टॉल है।',
        'plugin_available_update' => 'प्लगइन सफलतापूर्वक इंस्टॉल हो गया है। इसके अतिरिक्त, इस प्लगइन के लिए एक अपडेट उपलब्ध है।',
        'current' => 'वर्तमान',
        'uploaded' => 'अपलोड किया गया',
        'activate_plugin' => 'प्लगइन सक्रिय करें',
        'update_plugin' => 'प्लगइन अपडेट करें',
        'back' => 'वापस',
        'validation' => [
            'could_not_find_plugin_file' => 'आपकी zip फ़ाइल में प्लगइन फ़ाइल नहीं मिली।',
            'invalid_plugin_file' => 'आपकी प्लगइन zip फ़ाइल में plugin.json फ़ाइल मान्य नहीं है।',
        ],
    ],
];
