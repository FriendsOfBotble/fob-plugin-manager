<?php

return [
    'plugin_upload' => [
        'menu' => 'ZIPファイルからアップロード',
        'title' => 'ZIPファイルからプラグインをアップロード',
        'not_enabled' => 'セキュリティ上の問題により、このプラグインを使用するには、プラグインを有効化した後に<code>.env</code>ファイルに<code>FOB_PLUGIN_MANAGER_ENABLED=true</code>を追加する必要があります。',
        'description' => ":linkまたは他のソースからダウンロードした<code>.zip</code>ファイル形式のプラグインをアップロードできます。プラグインをアップロードする際は、ウェブサイトに害を与える可能性のある悪意のあるコードが含まれている場合があるため、注意してください。",
        'upload_and_install' => 'アップロードしてインストール',
        'input_file_description' => 'ファイルが有効な<code>.zip</code>形式であることを確認してください。',
        'installed_message' => ':fileをアップロードし、:nameプラグインを正常にインストールしました。',
        'plugin_information' => [
            'title' => 'プラグイン情報',
            'id' => 'ID',
            'name' => '名前',
            'description' => '説明',
            'author' => '作者',
            'version' => 'バージョン',
            'minimum_core_version' => '最小コアバージョン',
        ],
        'plugin_id_conflict' => '異なるIDとのプラグイン名の競合',
        'plugin_already_installed' => 'このプラグインはすでにインストールされています。',
        'plugin_available_update' => 'プラグインは正常にインストールされました。さらに、このプラグインの更新が利用可能です。',
        'current' => '現在',
        'uploaded' => 'アップロード済み',
        'activate_plugin' => 'プラグインを有効化',
        'update_plugin' => 'プラグインを更新',
        'back' => '戻る',
        'validation' => [
            'could_not_find_plugin_file' => 'zipファイル内にプラグインファイルが見つかりませんでした。',
            'invalid_plugin_file' => 'プラグインzipファイル内のplugin.jsonファイルが無効です。',
        ],
    ],
];
