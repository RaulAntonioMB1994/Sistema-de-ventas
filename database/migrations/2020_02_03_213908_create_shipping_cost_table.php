<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingCostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_cost', function (Blueprint $table) {
            $table->bigIncrements('id_shipping_cost');
            $table->string('price')->required();

            $table->unsignedBigInteger('id_city');
            $table->foreign('id_city')
                 ->references('id_city')->on('city');
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
        Schema::dropIfExists('shipping_cost');
    }
}
