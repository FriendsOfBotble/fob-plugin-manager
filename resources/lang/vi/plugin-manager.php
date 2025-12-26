<?php

return [
    'plugin_upload' => [
        'menu' => 'Tải lên từ tệp ZIP',
        'title' => 'Tải lên plugin từ tệp ZIP',
        'not_enabled' => 'Do vấn đề bảo mật, bạn cần thêm <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> vào tệp <code>.env</code> sau khi kích hoạt plugin này để bắt đầu sử dụng.',
        'description' => "Bạn có thể tải lên plugin ở định dạng tệp <code>.zip</code>, mà bạn đã tải xuống từ :link hoặc các nguồn khác. Hãy thận trọng khi tải lên plugin, vì chúng có thể chứa mã độc hại có thể gây hại cho trang web của bạn.",
        'upload_and_install' => 'Tải lên & Cài đặt',
        'input_file_description' => 'Đảm bảo tệp là tệp hợp lệ ở định dạng <code>.zip</code>.',
        'installed_message' => 'Đã tải lên :file và cài đặt plugin :name thành công.',
        'plugin_information' => [
            'title' => 'Thông tin Plugin',
            'id' => 'ID',
            'name' => 'Tên',
            'description' => 'Mô tả',
            'author' => 'Tác giả',
            'version' => 'Phiên bản',
            'minimum_core_version' => 'Phiên bản lõi tối thiểu',
        ],
        'plugin_id_conflict' => 'Xung đột tên plugin với ID khác',
        'plugin_already_installed' => 'Plugin này đã được cài đặt.',
        'plugin_available_update' => 'Plugin đã được cài đặt thành công. Ngoài ra, có bản cập nhật có sẵn cho plugin này.',
        'current' => 'Hiện tại',
        'uploaded' => 'Đã tải lên',
        'activate_plugin' => 'Kích hoạt plugin',
        'update_plugin' => 'Cập nhật plugin',
        'back' => 'Quay lại',
        'validation' => [
            'could_not_find_plugin_file' => 'Không thể tìm thấy tệp plugin trong tệp zip của bạn.',
            'invalid_plugin_file' => 'Tệp plugin.json trong tệp zip plugin của bạn không hợp lệ.',
        ],
    ],
];
