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
        Schema::create('edu_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('degree_name');
            $table->string('institute_name');
            $table->string('board');
            $table->string('passing_year');
            $table->string('result');
            $table->string('duration');
            $table->string('achievement');
            $table->string('certificate');
            $table->string('transcript');
            $table->string('verified');
            $table->string('verified_by');
            $table->string('verified_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('edu_infos');
    }
};
