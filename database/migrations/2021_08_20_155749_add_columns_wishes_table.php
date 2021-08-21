<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsWishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wishes', function(Blueprint $table){
            $table->foreignId('image_id')->nullable()->constrained();
            $table->foreignId('video_id')->nullable()->constrained();
            $table->string('image_title', 256)->nullable();
            $table->string('video_title', 256)->nullable();
            $table->string('detail1', 256)->nullable();
            $table->string('detail2', 256)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wishes', function(Blueprint $table){
            $table->dropForeign('wishes_image_id_foreign');
            $table->dropColumn('image_id');
            $table->dropForeign('wishes_video_id_foreign');
            $table->dropColumn('video_id');
            $table->dropColumn('image_title');
            $table->dropColumn('video_title');
            $table->dropColumn('detail1');
            $table->dropColumn('detail2');
        });
    }
}
