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
        Schema::create('school_campus_course_certifications', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('start_at')->nullable();
            $table->date('end_at')->nullable();
            $table->boolean('is_active')->default(1);
            $table->tinyInteger('certification_id')->unsigned()->index();
            $table->foreign('certification_id')->references('id')->on('list_dropdowns')->onDelete('cascade');
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
        Schema::dropIfExists('school_campus_course_certifications');
    }
};
