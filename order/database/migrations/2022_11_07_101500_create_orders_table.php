<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->string('serialnumber')->comment('注文番号');

            $table->unsignedBigInteger('products_id')->comment('商品ID');
            $table->foreign('products_id')->references('id')->on('products');

            $table->unsignedBigInteger('noshis_id')->comment('のしID');
            $table->foreign('noshis_id')->references('id')->on('noshis');

            $table->unsignedBigInteger('deliveries_id')->comment('送付先ID');
            $table->foreign('deliveries_id')->references('id')->on('deliveries');

            $table->unsignedBigInteger('guests_id')->comment('顧客ID');
            $table->foreign('guests_id')->references('id')->on('guests');

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
        Schema::dropIfExists('orders');
    }
};
