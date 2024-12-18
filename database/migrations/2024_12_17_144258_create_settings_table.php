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
        Schema::create('settings', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->tinyIncrements('id');
            $table->year('year');
            $table->string('academic_year',20);
            $table->tinyInteger('semester_id')->unsigned()->nullable();
            $table->foreign('semester_id')->references('id')->on('list_dropdowns')->onDelete('cascade');
            $table->tinyInteger('trimester_id')->unsigned()->nullable();
            $table->foreign('trimester_id')->references('id')->on('list_dropdowns')->onDelete('cascade');
            $table->tinyInteger('quarter_id')->unsigned()->nullable();
            $table->foreign('quarter_id')->references('id')->on('list_dropdowns')->onDelete('cascade');
            $table->tinyInteger('agency_id')->nullable()->unsigned();
            $table->foreign('agency_id')->references('id')->on('list_agencies')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
