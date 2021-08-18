<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyWishImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wish_images', function(Blueprint $table){
            $table->dropForeign('wish_images_wish_id_foreign');
            $table->dropColumn('wish_id');
            $table->string('name', 255);
            $table->foreignId('role_id')->constrained();
            $table->boolean('is_vip')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wish_images', function(Blueprint $table){
            $table->foreignId('wish_id')->constrained();
            $table->dropColumn('name');
            $table->dropForeign('wish_images_role_id_foreign');
            $table->dropColumn('role_id');
            $table->dropColumn('is_vip');
        });
    }
}
