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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('client_id')->unsigned()->index();
            $table->bigInteger('request_id')->unsigned()->index();
            $table->bigInteger('language_id')->unsigned()->index();
            $table->bigInteger('project_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('request_id')->references('id')->on('requests');
            $table->foreign('language_id')->references('id')->on('language');
            $table->foreign('project_id')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
