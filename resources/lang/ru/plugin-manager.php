<?php

return [
    'plugin_upload' => [
        'menu' => 'Загрузить из ZIP-файла',
        'title' => 'Загрузить плагин из ZIP-файла',
        'not_enabled' => 'Из-за проблемы безопасности вам необходимо добавить <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> в файл <code>.env</code> после активации этого плагина, чтобы начать его использовать.',
        'description' => "Вы можете загрузить плагин в формате <code>.zip</code>, который вы скачали с :link или из других источников. Пожалуйста, будьте осторожны при загрузке плагинов, так как они могут содержать вредоносный код, который может навредить вашему сайту.",
        'upload_and_install' => 'Загрузить и установить',
        'input_file_description' => 'Убедитесь, что файл имеет допустимый формат <code>.zip</code>.',
        'installed_message' => 'Загружен :file и успешно установлен плагин :name.',
        'plugin_information' => [
            'title' => 'Информация о плагине',
            'id' => 'ID',
            'name' => 'Название',
            'description' => 'Описание',
            'author' => 'Автор',
            'version' => 'Версия',
            'minimum_core_version' => 'Минимальная версия ядра',
        ],
        'plugin_id_conflict' => 'Конфликт имени плагина с другим ID',
        'plugin_already_installed' => 'Этот плагин уже установлен.',
        'plugin_available_update' => 'Плагин успешно установлен. Кроме того, для этого плагина доступно обновление.',
        'current' => 'Текущая',
        'uploaded' => 'Загружено',
        'activate_plugin' => 'Активировать плагин',
        'update_plugin' => 'Обновить плагин',
        'back' => 'Назад',
        'validation' => [
            'could_not_find_plugin_file' => 'Не удалось найти файл плагина в вашем zip-файле.',
            'invalid_plugin_file' => 'Файл plugin.json в вашем zip-файле плагина недействителен.',
        ],
    ],
];
