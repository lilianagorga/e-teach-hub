<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('name');
            $table->bigInteger('seats')->nullable();
            $table->uuid('subject_id');
        });
    }
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('seats');
            $table->dropColumn('subject_id');
        });
    }
};
