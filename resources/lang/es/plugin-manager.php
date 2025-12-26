<?php

return [
    'plugin_upload' => [
        'menu' => 'Subir desde archivo ZIP',
        'title' => 'Subir plugin desde archivo ZIP',
        'not_enabled' => 'Debido a un problema de seguridad, necesitas agregar <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> a tu archivo <code>.env</code> después de activar este plugin para comenzar a usarlo.',
        'description' => "Puedes subir un plugin en formato de archivo <code>.zip</code>, que hayas descargado de :link u otras fuentes. Por favor, ten cuidado al subir plugins, ya que pueden contener código malicioso que podría dañar tu sitio web.",
        'upload_and_install' => 'Subir e instalar',
        'input_file_description' => 'Asegúrate de que el archivo sea válido en formato <code>.zip</code>.',
        'installed_message' => 'Se subió :file y se instaló el plugin :name correctamente.',
        'plugin_information' => [
            'title' => 'Información del plugin',
            'id' => 'ID',
            'name' => 'Nombre',
            'description' => 'Descripción',
            'author' => 'Autor',
            'version' => 'Versión',
            'minimum_core_version' => 'Versión mínima del núcleo',
        ],
        'plugin_id_conflict' => 'Conflicto de nombre de plugin con ID diferente',
        'plugin_already_installed' => 'Este plugin ya está instalado.',
        'plugin_available_update' => 'El plugin se ha instalado correctamente. Además, hay una actualización disponible para este plugin.',
        'current' => 'Actual',
        'uploaded' => 'Subido',
        'activate_plugin' => 'Activar plugin',
        'update_plugin' => 'Actualizar plugin',
        'back' => 'Volver',
        'validation' => [
            'could_not_find_plugin_file' => 'No se pudo encontrar el archivo del plugin en tu archivo zip.',
            'invalid_plugin_file' => 'El archivo plugin.json en tu archivo zip del plugin no es válido.',
        ],
    ],
];
