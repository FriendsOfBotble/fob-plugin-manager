<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('plugin_manager_tasks', function (Blueprint $table) {
            $table->id();
            $table->string('operation');
            $table->string('command')->nullable();
            $table->string('package')->nullable();
            $table->string('status');
            $table->mediumText('output')->nullable();
            $table->timestamp('started_at')->nullable();
            $table->timestamp('finished_at')->nullable();
            $table->unsignedMediumInteger('peak_memory_used')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('plugin_manager_tasks');
    }
};
