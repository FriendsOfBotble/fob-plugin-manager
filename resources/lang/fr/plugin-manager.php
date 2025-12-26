<?php

return [
    'plugin_upload' => [
        'menu' => 'Télécharger depuis un fichier ZIP',
        'title' => 'Télécharger un plugin depuis un fichier ZIP',
        'not_enabled' => 'En raison d\'un problème de sécurité, vous devez ajouter <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> à votre fichier <code>.env</code> après avoir activé ce plugin pour commencer à l\'utiliser.',
        'description' => "Vous pouvez télécharger un plugin au format <code>.zip</code>, que vous avez téléchargé depuis :link ou d'autres sources. Veuillez faire preuve de prudence lors du téléchargement de plugins, car ils peuvent contenir du code malveillant susceptible d'endommager votre site web.",
        'upload_and_install' => 'Télécharger et installer',
        'input_file_description' => 'Assurez-vous que le fichier est un fichier valide au format <code>.zip</code>.',
        'installed_message' => ':file téléchargé et plugin :name installé avec succès.',
        'plugin_information' => [
            'title' => 'Informations sur le plugin',
            'id' => 'ID',
            'name' => 'Nom',
            'description' => 'Description',
            'author' => 'Auteur',
            'version' => 'Version',
            'minimum_core_version' => 'Version minimale du noyau',
        ],
        'plugin_id_conflict' => 'Conflit de nom de plugin avec un ID différent',
        'plugin_already_installed' => 'Ce plugin est déjà installé.',
        'plugin_available_update' => 'Le plugin a été installé avec succès. De plus, une mise à jour est disponible pour ce plugin.',
        'current' => 'Actuel',
        'uploaded' => 'Téléchargé',
        'activate_plugin' => 'Activer le plugin',
        'update_plugin' => 'Mettre à jour le plugin',
        'back' => 'Retour',
        'validation' => [
            'could_not_find_plugin_file' => 'Impossible de trouver le fichier du plugin dans votre fichier zip.',
            'invalid_plugin_file' => 'Le fichier plugin.json dans votre fichier zip du plugin n\'est pas valide.',
        ],
    ],
];
