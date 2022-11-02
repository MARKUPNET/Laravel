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
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('date')->comment('予約日');

            $table->unsignedBigInteger('time_id')->comment('時間');
            $table->foreign('time_id')->references('id')->on('times');

            $table->unsignedBigInteger('guest_id')->comment('顧客');
            $table->foreign('guest_id')->references('id')->on('guests');

            $table->unsignedBigInteger('plan_id')->comment('プラン');
            $table->foreign('plan_id')->references('id')->on('plans');

            $table->unsignedBigInteger('person')->comment('人数');
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
        Schema::dropIfExists('bookings');
    }
};
