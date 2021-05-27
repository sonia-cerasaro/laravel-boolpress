<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('posts', function (Blueprint $table) {  //Questo code serve per creare una foreign Key verso la cartella category
        $table->unsignedBigInteger('category_id');

        $table->foreign('category_id')
        ->references('id')
        ->on('categories');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('posts', function (Blueprint $table) {
        $table->dropForeign('posts_category_id_foreign');
        $table->dropColumn('category_id');
      });

    }
}
