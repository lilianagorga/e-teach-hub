<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('subject_id');
        });

        Schema::table('courses', function (Blueprint $table) {
            $table->foreignId('subject_id')->nullable()->constrained();
        });
    }
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropConstrainedForeignId('subject_id');
        });
    }
};
