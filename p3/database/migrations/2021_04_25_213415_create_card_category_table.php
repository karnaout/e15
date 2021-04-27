<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_category', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            # foreign keys for cards_table and decks_table.
            $table->bigInteger('card_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();

            # Make foreign keys
            $table->foreign('card_id')->references('id')->on('cards');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('card_category');
    }
}
