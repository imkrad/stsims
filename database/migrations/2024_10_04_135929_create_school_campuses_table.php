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
        Schema::create('school_campuses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('campus');
            $table->boolean('is_main');
            $table->boolean('is_alone')->default(0);
            $table->boolean('is_active')->default(1);
            $table->tinyInteger('term_id')->unsigned()->index();
            $table->foreign('term_id')->references('id')->on('list_dropdowns')->onDelete('cascade');
            $table->tinyInteger('grading_id')->unsigned()->index();
            $table->foreign('grading_id')->references('id')->on('list_dropdowns')->onDelete('cascade');
            $table->integer('school_id')->unsigned()->index();
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
            $table->tinyInteger('agency_id')->unsigned()->index();
            $table->foreign('agency_id')->references('id')->on('list_agencies')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_campuses');
    }
};
