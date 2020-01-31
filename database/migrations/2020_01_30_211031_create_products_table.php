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
            $table->string('title')->required();
            $table->text('description')->nullable();
            $table->integer('stock')->required();
            $table->integer('price')->required();
            $table->integer('pages_book')->required();
            $table->text('author')->required();
            $table->text('editorial')->required();
            $table->integer('discounts_percent');
            $table->timestamps();


            $table->unsignedBigInteger('id_categories');
            $table->foreign('id_categories')
                 ->references('id_categories')->on('categories');
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
