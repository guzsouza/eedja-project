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
            $table->unsignedBigInteger('group_id');
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('discipline_id');

            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('discipline_id')->references('id')->on('disciplines')->onDelete('cascade')->onUpdate('cascade');

            $table->Integer('bimester');
            $table->year('year');
            $table->Integer('classes');
            $table->date('startDate');
            $table->date('endDate');
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
