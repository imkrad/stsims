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
        Schema::create('enrollment_benefits', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->decimal('amount',12,2);
            $table->string('release_type',15);
            $table->string('dv_no')->nullable();
            $table->date('month');
            $table->json('attachment');
            $table->boolean('is_reimbursed')->default(0);
            $table->tinyInteger('status_id')->unsigned()->index();
            $table->foreign('status_id')->references('id')->on('list_statuses')->onDelete('cascade');
            $table->tinyInteger('privilege_id')->unsigned()->index();
            $table->foreign('privilege_id')->references('id')->on('list_privileges')->onDelete('cascade');
            $table->bigInteger('enrollment_id')->unsigned()->index();
            $table->foreign('enrollment_id')->references('id')->on('enrollments')->onDelete('cascade');
            $table->integer('release_id')->unsigned()->nullable();
            $table->foreign('release_id')->references('id')->on('releases')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollment_benefits');
    }
};
