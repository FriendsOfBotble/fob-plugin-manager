<?php

return [
    'plugin_upload' => [
        'menu' => 'Carregar de arquivo ZIP',
        'title' => 'Carregar plugin de arquivo ZIP',
        'not_enabled' => 'Devido a um problema de segurança, você precisa adicionar <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> ao seu arquivo <code>.env</code> após ativar este plugin para começar a usá-lo.',
        'description' => "Você pode carregar um plugin no formato de arquivo <code>.zip</code>, que você baixou de :link ou outras fontes. Por favor, tenha cuidado ao carregar plugins, pois eles podem conter código malicioso que pode prejudicar seu site.",
        'upload_and_install' => 'Carregar e instalar',
        'input_file_description' => 'Certifique-se de que o arquivo seja válido no formato <code>.zip</code>.',
        'installed_message' => ':file carregado e plugin :name instalado com sucesso.',
        'plugin_information' => [
            'title' => 'Informações do Plugin',
            'id' => 'ID',
            'name' => 'Nome',
            'description' => 'Descrição',
            'author' => 'Autor',
            'version' => 'Versão',
            'minimum_core_version' => 'Versão Mínima do Núcleo',
        ],
        'plugin_id_conflict' => 'Conflito de nome de plugin com ID diferente',
        'plugin_already_installed' => 'Este plugin já está instalado.',
        'plugin_available_update' => 'O plugin foi instalado com sucesso. Além disso, há uma atualização disponível para este plugin.',
        'current' => 'Atual',
        'uploaded' => 'Carregado',
        'activate_plugin' => 'Ativar plugin',
        'update_plugin' => 'Atualizar plugin',
        'back' => 'Voltar',
        'validation' => [
            'could_not_find_plugin_file' => 'Não foi possível encontrar o arquivo do plugin no seu arquivo zip.',
            'invalid_plugin_file' => 'O arquivo plugin.json no seu arquivo zip do plugin não é válido.',
        ],
    ],
];
