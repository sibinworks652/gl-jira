<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('module_id') ->constrained() ->cascadeOnDelete();
            $table->string('title');
            $table->text('description')->nullable();
            $table->foreignId('status_id')->constrained('statuses');
            $table->foreignId('assigned_to')->nullable()->constrained('users')->nullOnDelete();
            $table->nullableMorphs('created_by');
            $table->nullableMorphs('updated_by');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
