<?php

return [
    'plugin_upload' => [
        'menu' => 'Качване от ZIP файл',
        'title' => 'Качване на плъгин от ZIP файл',
        'not_enabled' => 'Поради проблем със сигурността, трябва да добавите <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> във вашия <code>.env</code> файл след активиране на този плъгин, за да започнете да го използвате.',
        'description' => "Можете да качите плъгин във формат <code>.zip</code>, който сте изтеглили от :link или други източници. Моля, бъдете внимателни при качване на плъгини, тъй като те могат да съдържат злонамерен код, който може да навреди на вашия уебсайт.",
        'upload_and_install' => 'Качване и инсталиране',
        'input_file_description' => 'Уверете се, че файлът е валиден във формат <code>.zip</code>.',
        'installed_message' => 'Качен :file и инсталиран плъгин :name успешно.',
        'plugin_information' => [
            'title' => 'Информация за плъгина',
            'id' => 'ID',
            'name' => 'Име',
            'description' => 'Описание',
            'author' => 'Автор',
            'version' => 'Версия',
            'minimum_core_version' => 'Минимална версия на ядрото',
        ],
        'plugin_id_conflict' => 'Конфликт на име на плъгин с различен ID',
        'plugin_already_installed' => 'Този плъгин вече е инсталиран.',
        'plugin_available_update' => 'Плъгинът е инсталиран успешно. Освен това има налична актуализация за този плъгин.',
        'current' => 'Текущ',
        'uploaded' => 'Качен',
        'activate_plugin' => 'Активиране на плъгин',
        'update_plugin' => 'Актуализиране на плъгин',
        'back' => 'Назад',
        'validation' => [
            'could_not_find_plugin_file' => 'Не можа да се намери файл на плъгин във вашия zip файл.',
            'invalid_plugin_file' => 'Файлът plugin.json във вашия zip файл на плъгина не е валиден.',
        ],
    ],
];
