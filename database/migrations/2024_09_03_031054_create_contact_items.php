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
        Schema::create('contact_items', function (Blueprint $table) {
            $table->id();
            $table->text('contact_heading');
            $table->text('contact_banner');
            $table->text('contact_address');
            $table->text('contact_email');
            $table->text('contact_phone');
            $table->text('contacy_seo_title')->nullable();
            $table->text('contacy_seo_meta_decription')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_items');
    }
};
