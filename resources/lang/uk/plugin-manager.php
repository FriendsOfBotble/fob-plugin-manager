<?php

return [
    'plugin_upload' => [
        'menu' => 'Завантажити з ZIP-файлу',
        'title' => 'Завантажити плагін з ZIP-файлу',
        'not_enabled' => 'Через проблему безпеки вам потрібно додати <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> до вашого файлу <code>.env</code> після активації цього плагіна, щоб почати його використовувати.',
        'description' => "Ви можете завантажити плагін у форматі <code>.zip</code>, який ви завантажили з :link або інших джерел. Будьте обережні при завантаженні плагінів, оскільки вони можуть містити шкідливий код, який може пошкодити ваш веб-сайт.",
        'upload_and_install' => 'Завантажити та встановити',
        'input_file_description' => 'Переконайтеся, що файл є дійсним у форматі <code>.zip</code>.',
        'installed_message' => 'Завантажено :file та успішно встановлено плагін :name.',
        'plugin_information' => [
            'title' => 'Інформація про плагін',
            'id' => 'ID',
            'name' => 'Назва',
            'description' => 'Опис',
            'author' => 'Автор',
            'version' => 'Версія',
            'minimum_core_version' => 'Мінімальна версія ядра',
        ],
        'plugin_id_conflict' => 'Конфлікт назви плагіна з іншим ID',
        'plugin_already_installed' => 'Цей плагін вже встановлено.',
        'plugin_available_update' => 'Плагін успішно встановлено. Крім того, доступне оновлення для цього плагіна.',
        'current' => 'Поточна',
        'uploaded' => 'Завантажено',
        'activate_plugin' => 'Активувати плагін',
        'update_plugin' => 'Оновити плагін',
        'back' => 'Назад',
        'validation' => [
            'could_not_find_plugin_file' => 'Не вдалося знайти файл плагіна у вашому zip-файлі.',
            'invalid_plugin_file' => 'Файл plugin.json у вашому zip-файлі плагіна недійсний.',
        ],
    ],
];
