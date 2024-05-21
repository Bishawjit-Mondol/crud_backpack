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
        Schema::create('bio_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('birth_date');
            $table->string('gender');
            $table->string('religion');
            $table->string('blood_group');
            $table->string('height');
            $table->string('weight');
            $table->string('physical_disability')->nullable();
            $table->string('nid')->nullable();
            $table->string('passport')->nullable();
            $table->string('driving_license')->nullable();
            $table->string('marital_status');
            $table->string('spouse_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bio_infos');
    }
};
