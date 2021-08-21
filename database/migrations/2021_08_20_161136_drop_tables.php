<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('wish_images');
        Schema::dropIfExists('wish_videos');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('wish_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wish_id')->constrained();
            $table->string('title', 128);
            $table->text('description');
            $table->foreignId('image_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('wish_videos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wish_id')->constrained();
            $table->string('title', 128);
            $table->text('description');
            $table->foreignId('video_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
