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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->double('price');
            $table->double('amount')->default(0);
            $table->text('note')->nullable();
            $table->string('status')->default('pending');
            $table->string('snap_token')->nullable();
            $table->bigInteger('offer_id')->unsigned()->index();
            $table->timestamps();
 
            $table->foreign('offer_id')->references('id')->on('offers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
