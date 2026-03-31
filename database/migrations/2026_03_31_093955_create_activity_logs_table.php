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
        Schema::create('activity_logs', function (Blueprint $table) {
            $table->id();
            $table->string('entity_type'); // task or module
            $table->unsignedBigInteger('entity_id');
            $table->foreignId('old_status')->nullable()->constrained('statuses')->nullOnDelete();
            $table->foreignId('new_status')->constrained('statuses');
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('activity_logs');
    }
};
