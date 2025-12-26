<?php

return [
    'plugin_upload' => [
        'menu' => 'Отпреми из ZIP датотеке',
        'title' => 'Отпреми додатак из ZIP датотеке',
        'not_enabled' => 'Због безбедносног проблема, морате додати <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> у вашу <code>.env</code> датотеку након активације овог додатка да бисте почели да га користите.',
        'description' => "Можете отпремити додатак у формату <code>.zip</code> датотеке, који сте преузели са :link или других извора. Будите опрезни при отпремању додатака, јер могу садржати злонамерни код који може оштетити вашу веб страницу.",
        'upload_and_install' => 'Отпреми и инсталирај',
        'input_file_description' => 'Уверите се да је датотека важећа у <code>.zip</code> формату.',
        'installed_message' => 'Отпремљено :file и успешно инсталиран додатак :name.',
        'plugin_information' => [
            'title' => 'Информације о додатку',
            'id' => 'ID',
            'name' => 'Назив',
            'description' => 'Опис',
            'author' => 'Аутор',
            'version' => 'Верзија',
            'minimum_core_version' => 'Минимална верзија језгра',
        ],
        'plugin_id_conflict' => 'Сукоб назива додатка са различитим ID-ом',
        'plugin_already_installed' => 'Овај додатак је већ инсталиран.',
        'plugin_available_update' => 'Додатак је успешно инсталиран. Поред тога, доступна је ажурирање за овај додатак.',
        'current' => 'Тренутно',
        'uploaded' => 'Отпремљено',
        'activate_plugin' => 'Активирај додатак',
        'update_plugin' => 'Ажурирај додатак',
        'back' => 'Назад',
        'validation' => [
            'could_not_find_plugin_file' => 'Није могуће пронаћи датотеку додатка у вашој zip датотеци.',
            'invalid_plugin_file' => 'Датотека plugin.json у вашој zip датотеци додатка није важећа.',
        ],
    ],
];
