<?php

return [
    'plugin_upload' => [
        'menu' => 'ZIP 파일에서 업로드',
        'title' => 'ZIP 파일에서 플러그인 업로드',
        'not_enabled' => '보안 문제로 인해 이 플러그인을 활성화한 후 사용을 시작하려면 <code>.env</code> 파일에 <code>FOB_PLUGIN_MANAGER_ENABLED=true</code>를 추가해야 합니다.',
        'description' => ":link 또는 다른 소스에서 다운로드한 <code>.zip</code> 파일 형식의 플러그인을 업로드할 수 있습니다. 플러그인을 업로드할 때 주의하세요. 웹사이트에 해를 끼칠 수 있는 악성 코드가 포함되어 있을 수 있습니다.",
        'upload_and_install' => '업로드 및 설치',
        'input_file_description' => '파일이 유효한 <code>.zip</code> 형식인지 확인하세요.',
        'installed_message' => ':file을 업로드하고 :name 플러그인을 성공적으로 설치했습니다.',
        'plugin_information' => [
            'title' => '플러그인 정보',
            'id' => 'ID',
            'name' => '이름',
            'description' => '설명',
            'author' => '저자',
            'version' => '버전',
            'minimum_core_version' => '최소 코어 버전',
        ],
        'plugin_id_conflict' => '다른 ID와 플러그인 이름 충돌',
        'plugin_already_installed' => '이 플러그인은 이미 설치되어 있습니다.',
        'plugin_available_update' => '플러그인이 성공적으로 설치되었습니다. 또한 이 플러그인에 대한 업데이트가 있습니다.',
        'current' => '현재',
        'uploaded' => '업로드됨',
        'activate_plugin' => '플러그인 활성화',
        'update_plugin' => '플러그인 업데이트',
        'back' => '뒤로',
        'validation' => [
            'could_not_find_plugin_file' => 'zip 파일에서 플러그인 파일을 찾을 수 없습니다.',
            'invalid_plugin_file' => '플러그인 zip 파일의 plugin.json 파일이 유효하지 않습니다.',
        ],
    ],
];
