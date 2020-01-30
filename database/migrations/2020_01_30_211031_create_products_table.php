<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id_products');
            $table->string('title');
            $table->text('description');
            $table->integer('stock');
            $table->integer('price');
            $table->integer('pages_book');
            $table->text('author');
            $table->text('editorial');
            $table->integer('discounts_percent');
            // $table->unsignedBigInteger('id_categories');
            // $table->foreign('id_categories')->references('id_categories')->on('categories');
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
        Schema::dropIfExists('products');
    }
}
