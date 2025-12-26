<?php

return [
    'plugin_upload' => [
        'menu' => 'העלאה מקובץ ZIP',
        'title' => 'העלאת תוסף מקובץ ZIP',
        'not_enabled' => 'בשל בעיית אבטחה, עליך להוסיף <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> לקובץ <code>.env</code> שלך לאחר הפעלת תוסף זה כדי להתחיל להשתמש בו.',
        'description' => "ניתן להעלות תוסף בפורמט קובץ <code>.zip</code>, שהורדת מ-:link או ממקורות אחרים. נא להיזהר בעת העלאת תוספים, מכיוון שהם עלולים להכיל קוד זדוני שעלול לפגוע באתר שלך.",
        'upload_and_install' => 'העלאה והתקנה',
        'input_file_description' => 'ודא שהקובץ הוא קובץ תקין בפורמט <code>.zip</code>.',
        'installed_message' => 'הועלה :file והותקן תוסף :name בהצלחה.',
        'plugin_information' => [
            'title' => 'מידע על התוסף',
            'id' => 'מזהה',
            'name' => 'שם',
            'description' => 'תיאור',
            'author' => 'מחבר',
            'version' => 'גרסה',
            'minimum_core_version' => 'גרסת ליבה מינימלית',
        ],
        'plugin_id_conflict' => 'התנגשות בשם תוסף עם מזהה שונה',
        'plugin_already_installed' => 'תוסף זה כבר מותקן.',
        'plugin_available_update' => 'התוסף הותקן בהצלחה. בנוסף, קיים עדכון זמין לתוסף זה.',
        'current' => 'נוכחי',
        'uploaded' => 'הועלה',
        'activate_plugin' => 'הפעל תוסף',
        'update_plugin' => 'עדכן תוסף',
        'back' => 'חזרה',
        'validation' => [
            'could_not_find_plugin_file' => 'לא ניתן למצוא קובץ תוסף בקובץ ה-zip שלך.',
            'invalid_plugin_file' => 'קובץ plugin.json בקובץ ה-zip של התוסף שלך אינו תקין.',
        ],
    ],
];
