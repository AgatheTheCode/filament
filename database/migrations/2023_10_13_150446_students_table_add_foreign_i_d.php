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
        Schema::table('Students', function (Blueprint $table) {
            $table->foreignId('study_id')->nullable()->constrained()->CascadeOnUpdate()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Students', function (Blueprint $table) {
            $table->dropConstrainedForeignId('study_id');
        });
    }
};
