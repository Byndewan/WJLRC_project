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
        Schema::create('home_page_items', function (Blueprint $table) {
            $table->id();
            $table->text('banner_title');
            $table->text('banner_subtitle');
            $table->text('footer_title');
            $table->text('footer_subtitle');
            $table->text('icon_1')->nullable();
            $table->text('icon_1_url')->nullable();
            $table->text('icon_2')->nullable();
            $table->text('icon_2_url')->nullable();
            $table->text('icon_3')->nullable();
            $table->text('icon_3_url')->nullable();
            $table->text('icon_4')->nullable();
            $table->text('icon_4_url')->nullable();
            $table->text('icon_5')->nullable();
            $table->text('icon_5_url')->nullable();
            $table->text('heading_1');
            $table->text('name_url_1')->nullable();
            $table->text('url_1')->nullable();
            $table->text('name_url_2')->nullable();
            $table->text('url_2')->nullable();
            $table->text('name_url_3')->nullable();
            $table->text('url_3')->nullable();
            $table->text('name_url_4')->nullable();
            $table->text('url_4')->nullable();
            $table->text('name_url_5')->nullable();
            $table->text('url_5')->nullable();
            $table->text('heading_2');
            $table->text('alamat');
            $table->text('country');
            $table->text('no_telepon');
            $table->text('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_page_items');
    }
};
