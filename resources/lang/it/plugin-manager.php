<?php

return [
    'plugin_upload' => [
        'menu' => 'Carica da file ZIP',
        'title' => 'Carica plugin da file ZIP',
        'not_enabled' => 'A causa di un problema di sicurezza, è necessario aggiungere <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> al file <code>.env</code> dopo aver attivato questo plugin per iniziare a utilizzarlo.',
        'description' => "Puoi caricare un plugin in formato <code>.zip</code>, che hai scaricato da :link o da altre fonti. Fai attenzione quando carichi plugin, poiché potrebbero contenere codice dannoso che potrebbe danneggiare il tuo sito web.",
        'upload_and_install' => 'Carica e installa',
        'input_file_description' => 'Assicurati che il file sia un file valido in formato <code>.zip</code>.',
        'installed_message' => 'Caricato :file e installato il plugin :name con successo.',
        'plugin_information' => [
            'title' => 'Informazioni sul plugin',
            'id' => 'ID',
            'name' => 'Nome',
            'description' => 'Descrizione',
            'author' => 'Autore',
            'version' => 'Versione',
            'minimum_core_version' => 'Versione minima del core',
        ],
        'plugin_id_conflict' => 'Conflitto del nome del plugin con ID diverso',
        'plugin_already_installed' => 'Questo plugin è già installato.',
        'plugin_available_update' => 'Il plugin è stato installato con successo. Inoltre, è disponibile un aggiornamento per questo plugin.',
        'current' => 'Attuale',
        'uploaded' => 'Caricato',
        'activate_plugin' => 'Attiva plugin',
        'update_plugin' => 'Aggiorna plugin',
        'back' => 'Indietro',
        'validation' => [
            'could_not_find_plugin_file' => 'Impossibile trovare il file del plugin nel tuo file zip.',
            'invalid_plugin_file' => 'Il file plugin.json nel tuo file zip del plugin non è valido.',
        ],
    ],
];
