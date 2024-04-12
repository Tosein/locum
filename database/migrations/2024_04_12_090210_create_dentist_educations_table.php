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
        Schema::create('dentist_educations', function (Blueprint $table) {
            $table->id();
            $table->integer('dentist_id');
            $table->text('level');
            $table->text('institute');
            $table->text('degree');
            $table->text('passing_year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dentist_educations');
    }
};
