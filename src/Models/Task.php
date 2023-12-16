<?php

namespace FriendsOfBotble\PluginManager\Models;

use Botble\Base\Models\BaseModel;
use FriendsOfBotble\PluginManager\Enums\TaskOperation;
use FriendsOfBotble\PluginManager\Enums\TaskStatus;

class Task extends BaseModel
{
    protected $table = 'plugin_manager_tasks';

    protected $fillable = [
        'operation',
        'command',
        'package',
        'status',
        'output',
        'started_at',
        'finished_at',
        'peak_memory_used',
    ];

    protected $casts = [
        'operation' => TaskOperation::class,
        'status' => TaskStatus::class,
        'started_at' => 'datetime',
        'finished_at' => 'datetime',
    ];
}
