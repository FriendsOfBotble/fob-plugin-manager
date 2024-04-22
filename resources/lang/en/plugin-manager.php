<?php

return [
    'plugin_upload' => [
        'menu' => 'Upload From ZIP File',
        'title' => 'Upload Plugin from ZIP file',
        'description' => "You can upload a plugin in the <code>.zip</code> file format, which you've downloaded from :link or other sources. Please exercise caution when uploading plugins, as they may contain malicious code that could harm your website.",
        'upload_and_install' => 'Upload & Install',
        'input_file_description' => 'Make sure the file is a valid file in <code>.zip</code> format.',
        'installed_message' => 'Uploaded :file and installed :name plugin successfully.',
        'plugin_information' => [
            'title' => 'Plugin Information',
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'author' => 'Author',
            'version' => 'Version',
            'minimum_core_version' => 'Minimum Core Version',
        ],
        'plugin_id_conflict' => 'Plugin name conflict with different ID',
        'plugin_already_installed' => 'This plugin is already installed.',
        'plugin_available_update' => 'The plugin has been installed successfully. Additionally, there is an update available for this plugin.',
        'current' => 'Current',
        'uploaded' => 'Uploaded',
        'activate_plugin' => 'Activate plugin',
        'update_plugin' => 'Update plugin',
        'back' => 'Back',
        'validation' => [
            'could_not_find_plugin_file' => 'Could not find plugin file in your zip file.',
            'invalid_plugin_file' => 'The plugin.json file in your plugin zip file is not a valid.',
        ],
    ],
];
