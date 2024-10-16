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
        Schema::create('schools', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('shortcut');
            $table->string('combiner')->nullable();
            $table->string('avatar',200)->default('school.jpg');
            $table->boolean('is_upsystem')->default(0);
            $table->boolean('is_active')->default(1);
            $table->tinyInteger('class_id')->unsigned()->index();
            $table->foreign('class_id')->references('id')->on('list_dropdowns')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
