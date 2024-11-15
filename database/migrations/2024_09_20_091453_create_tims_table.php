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
        Schema::create('tims', function (Blueprint $table) {
            $table->id();
            $table->text('photo');
            $table->text('nama');
            $table->text('profesi');
            $table->text('icon1');
            $table->text('icon1_url');
            $table->text('icon2');
            $table->text('icon2_url');
            $table->text('icon3');
            $table->text('icon3_url');
            $table->text('icon4');
            $table->text('icon4_url');
            $table->text('icon5');
            $table->text('icon5_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tims');
    }
};
