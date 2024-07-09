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
            $table->date('date');
            $table->string('content', 256);
            $table->string('skills', 256);
            $table->string('resource', 256);
            $table->string('metodology', 256);
            $table->string('project', 256);
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
