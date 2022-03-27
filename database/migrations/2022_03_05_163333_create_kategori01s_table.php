<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori01s', function (Blueprint $table) {
            $table->id();
            $table->string('kat01_id');
            $table->string('kat01_kategori')->unique();
            $table->string('kat01_slug')->unique();
            $table->timestamp('kat01_publish_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori01s');
    }
};
