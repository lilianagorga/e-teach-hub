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
            $table->bigInteger('seats')->default(0);
            $table->unsignedBigInteger('subject_id');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('seats');
            $table->dropForeign('subject_id');
            $table->dropForeign('user_id');
        });
    }
};
