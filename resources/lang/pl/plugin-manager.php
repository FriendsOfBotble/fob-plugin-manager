<?php

return [
    'plugin_upload' => [
        'menu' => 'Prześlij z pliku ZIP',
        'title' => 'Prześlij wtyczkę z pliku ZIP',
        'not_enabled' => 'Ze względu na problem z bezpieczeństwem, po aktywacji tej wtyczki musisz dodać <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> do pliku <code>.env</code>, aby zacząć jej używać.',
        'description' => "Możesz przesłać wtyczkę w formacie <code>.zip</code>, którą pobrałeś z :link lub innych źródeł. Zachowaj ostrożność podczas przesyłania wtyczek, ponieważ mogą zawierać złośliwy kod, który może zaszkodzić Twojej stronie.",
        'upload_and_install' => 'Prześlij i zainstaluj',
        'input_file_description' => 'Upewnij się, że plik jest prawidłowy w formacie <code>.zip</code>.',
        'installed_message' => 'Przesłano :file i pomyślnie zainstalowano wtyczkę :name.',
        'plugin_information' => [
            'title' => 'Informacje o wtyczce',
            'id' => 'ID',
            'name' => 'Nazwa',
            'description' => 'Opis',
            'author' => 'Autor',
            'version' => 'Wersja',
            'minimum_core_version' => 'Minimalna wersja rdzenia',
        ],
        'plugin_id_conflict' => 'Konflikt nazwy wtyczki z innym ID',
        'plugin_already_installed' => 'Ta wtyczka jest już zainstalowana.',
        'plugin_available_update' => 'Wtyczka została pomyślnie zainstalowana. Dodatkowo dostępna jest aktualizacja dla tej wtyczki.',
        'current' => 'Obecna',
        'uploaded' => 'Przesłana',
        'activate_plugin' => 'Aktywuj wtyczkę',
        'update_plugin' => 'Zaktualizuj wtyczkę',
        'back' => 'Wstecz',
        'validation' => [
            'could_not_find_plugin_file' => 'Nie można znaleźć pliku wtyczki w pliku zip.',
            'invalid_plugin_file' => 'Plik plugin.json w pliku zip wtyczki nie jest prawidłowy.',
        ],
    ],
];
