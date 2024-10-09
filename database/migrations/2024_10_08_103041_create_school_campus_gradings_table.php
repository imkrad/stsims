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
        Schema::create('school_campus_gradings', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('grade',10);
            $table->string('lower_limit',10);
            $table->string('upper_limit',10);
            $table->boolean('is_incomplete')->default(0);
            $table->boolean('is_failed')->default(0);
            $table->boolean('is_active')->default(1);
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
        Schema::dropIfExists('school_campus_gradings');
    }
};
