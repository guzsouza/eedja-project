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
        Schema::create('plannings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('spreadsheet_id');
            $table->foreign('spreadsheet_id')->references('id')->on('spreadsheets')->onDelete('cascade')->onUpdate('cascade');
            $table->string('resume', 32);
            $table->date('date');
            $table->string('contents', 256);
            $table->string('skills', 256);
            $table->string('resources', 256);
            $table->string('methodologies', 256);
            $table->string('projects', 256);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plannings');
    }
};
