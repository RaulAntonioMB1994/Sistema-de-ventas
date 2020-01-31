<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_details', function (Blueprint $table) {
            $table->bigIncrements('id_sales_details');
            $table->integer('price')->required();
            $table->integer('quantity')->required();
            $table->integer('discounts');
            $table->timestamps();


            $table->unsignedBigInteger('id_products');
            $table->foreign('id_products')
                ->references('id_products')->on('products');
                
            $table->unsignedBigInteger('id_sales');
            $table->foreign('id_sales')
                ->references('id_sales')->on('sales');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales_details');
    }
}
