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
        Schema::create('school_campus_course_prospectuses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->json('subjects');
            $table->string('school_year',10);
            $table->boolean('is_completed')->default(0);
            $table->boolean('is_active')->default(0);
            $table->boolean('is_locked')->default(0);
            $table->integer('course_id')->unsigned()->index();
            $table->foreign('course_id')->references('id')->on('school_campus_courses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_campus_course_prospectuses');
    }
};
