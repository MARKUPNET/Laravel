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
        Schema::create('quantities', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('orders_id')->comment('注文ID');
            $table->foreign('orders_id')->references('id')->on('orders');

            $table->unsignedBigInteger('items_id')->comment('商品ID');
            $table->foreign('items_id')->references('id')->on('items');

            $table->integer('quantity');

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
        Schema::dropIfExists('quantities');
    }
};
