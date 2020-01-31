<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeySalesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sales_details', function (Blueprint $table) {
            $table->unsignedBigInteger('id_products');
            $table->foreign('id_products')
                ->references('id_products')->on('products')
                ->onDelete('cascade');
            $table->unsignedBigInteger('id_sales');
            $table->foreign('id_sales')
                ->references('id_sales')->on('sales')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sales_details', function (Blueprint $table) {
            $table->dropForeign('products_sales_details_id_foreign');
        });
    }
}
