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
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('orders_id')->comment('注文ID');
            $table->foreign('orders_id')->references('id')->on('orders');

            $table->integer('status');
            $table->string('name')->comment('名前')->nullable();
            $table->string('kana')->comment('フリガナ')->nullable();
            $table->string('phone')->comment('電話番号')->nullable();
            $table->string('zip')->comment('郵便番号')->nullable();
            $table->string('pref')->comment('都道府県')->nullable();
            $table->string('addr')->comment('丁目番地')->nullable();
            $table->string('addr2')->comment('建物名等')->nullable();

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
        Schema::dropIfExists('deliveries');
    }
};
