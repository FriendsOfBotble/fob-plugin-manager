<?php

return [
    'plugin_upload' => [
        'menu' => '从ZIP文件上传',
        'title' => '从ZIP文件上传插件',
        'not_enabled' => '由于安全问题，您需要在激活此插件后将 <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> 添加到您的 <code>.env</code> 文件中才能开始使用。',
        'description' => "您可以上传 <code>.zip</code> 文件格式的插件，该文件是您从 :link 或其他来源下载的。上传插件时请务必小心，因为它们可能包含可能损害您网站的恶意代码。",
        'upload_and_install' => '上传并安装',
        'input_file_description' => '确保文件是有效的 <code>.zip</code> 格式。',
        'installed_message' => '已上传 :file 并成功安装插件 :name。',
        'plugin_information' => [
            'title' => '插件信息',
            'id' => 'ID',
            'name' => '名称',
            'description' => '描述',
            'author' => '作者',
            'version' => '版本',
            'minimum_core_version' => '最低核心版本',
        ],
        'plugin_id_conflict' => '插件名称与不同ID冲突',
        'plugin_already_installed' => '此插件已安装。',
        'plugin_available_update' => '插件已成功安装。此外，此插件有可用更新。',
        'current' => '当前',
        'uploaded' => '已上传',
        'activate_plugin' => '激活插件',
        'update_plugin' => '更新插件',
        'back' => '返回',
        'validation' => [
            'could_not_find_plugin_file' => '在您的zip文件中找不到插件文件。',
            'invalid_plugin_file' => '您的插件zip文件中的plugin.json文件无效。',
        ],
    ],
];
