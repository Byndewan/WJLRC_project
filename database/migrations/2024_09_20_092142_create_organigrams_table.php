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
        Schema::create('organigrams', function (Blueprint $table) {
            $table->increments('id');
            $table->text('photo');
            $table->text('nama');
            $table->text('icon1');
            $table->text('icon_url1');
            $table->text('icon2');
            $table->text('icon_url2');
            $table->text('icon3');
            $table->text('icon_url3');
            $table->text('icon4')->nullable();
            $table->text('icon_url4')->nullable();
            $table->text('icon5')->nullable();
            $table->text('icon_url5')->nullable();
            $table->text('jabatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organigrams');
    }
};
