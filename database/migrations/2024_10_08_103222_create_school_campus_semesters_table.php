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
        Schema::create('school_campus_semesters', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('academic_year',20);
            $table->date('start_at');
            $table->date('end_at');
            $table->year('year');
            $table->boolean('is_updated')->default(0);
            $table->boolean('is_active')->default(0);
            $table->tinyInteger('semester_id')->unsigned()->index();
            $table->foreign('semester_id')->references('id')->on('list_dropdowns')->onDelete('cascade');
            $table->integer('campus_id')->unsigned()->index();
            $table->foreign('campus_id')->references('id')->on('school_campuses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_campus_semesters');
    }
};
