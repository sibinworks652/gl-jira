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
        Schema::table('status_transitions', function (Blueprint $table) {
            $table->string('entity_type')->default('task')->after('to_status_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('status_transitions', function (Blueprint $table) {
            $table->dropColumn('entity_type');
        });
    }
};
