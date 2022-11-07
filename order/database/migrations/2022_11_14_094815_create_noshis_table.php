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
        Schema::create('noshis', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('orders_id')->comment('注文ID');
            $table->foreign('orders_id')->references('id')->on('orders');

            $table->string('status');
            $table->string('type')->comment('のし種類')->nullable();
            $table->string('color')->comment('のし色')->nullable();
            $table->string('position')->comment('のし位置')->nullable();
            $table->string('name')->comment('氏名')->nullable();
            $table->text('note')->comment('備考')->nullable();

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
        Schema::dropIfExists('noshis');
    }
};
