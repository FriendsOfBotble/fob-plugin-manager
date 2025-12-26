<?php

return [
    'plugin_upload' => [
        'menu' => 'อัปโหลดจากไฟล์ ZIP',
        'title' => 'อัปโหลดปลั๊กอินจากไฟล์ ZIP',
        'not_enabled' => 'เนื่องจากปัญหาด้านความปลอดภัย คุณต้องเพิ่ม <code>FOB_PLUGIN_MANAGER_ENABLED=true</code> ลงในไฟล์ <code>.env</code> หลังจากเปิดใช้งานปลั๊กอินนี้เพื่อเริ่มใช้งาน',
        'description' => "คุณสามารถอัปโหลดปลั๊กอินในรูปแบบไฟล์ <code>.zip</code> ซึ่งคุณดาวน์โหลดมาจาก :link หรือแหล่งอื่น โปรดระมัดระวังเมื่ออัปโหลดปลั๊กอิน เนื่องจากอาจมีโค้ดที่เป็นอันตรายที่อาจทำลายเว็บไซต์ของคุณ",
        'upload_and_install' => 'อัปโหลดและติดตั้ง',
        'input_file_description' => 'ตรวจสอบให้แน่ใจว่าไฟล์เป็นรูปแบบ <code>.zip</code> ที่ถูกต้อง',
        'installed_message' => 'อัปโหลด :file และติดตั้งปลั๊กอิน :name สำเร็จ',
        'plugin_information' => [
            'title' => 'ข้อมูลปลั๊กอิน',
            'id' => 'ID',
            'name' => 'ชื่อ',
            'description' => 'คำอธิบาย',
            'author' => 'ผู้เขียน',
            'version' => 'เวอร์ชัน',
            'minimum_core_version' => 'เวอร์ชันหลักขั้นต่ำ',
        ],
        'plugin_id_conflict' => 'ชื่อปลั๊กอินขัดแย้งกับ ID ที่แตกต่าง',
        'plugin_already_installed' => 'ปลั๊กอินนี้ติดตั้งแล้ว',
        'plugin_available_update' => 'ติดตั้งปลั๊กอินสำเร็จ นอกจากนี้ยังมีการอัปเดตสำหรับปลั๊กอินนี้',
        'current' => 'ปัจจุบัน',
        'uploaded' => 'อัปโหลดแล้ว',
        'activate_plugin' => 'เปิดใช้งานปลั๊กอิน',
        'update_plugin' => 'อัปเดตปลั๊กอิน',
        'back' => 'กลับ',
        'validation' => [
            'could_not_find_plugin_file' => 'ไม่พบไฟล์ปลั๊กอินในไฟล์ zip ของคุณ',
            'invalid_plugin_file' => 'ไฟล์ plugin.json ในไฟล์ zip ปลั๊กอินของคุณไม่ถูกต้อง',
        ],
    ],
];
