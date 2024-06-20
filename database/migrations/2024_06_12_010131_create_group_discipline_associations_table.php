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
        Schema::create('group_discipline_associations', function (Blueprint $table) {
            $table->primary(['group_id', 'discipline_id']);
            $table->unsignedBigInteger('group_id');
            $table->unsignedBigInteger('discipline_id');

            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('discipline_id')->references('id')->on('disciplines')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_discipline_associations');
    }
};
