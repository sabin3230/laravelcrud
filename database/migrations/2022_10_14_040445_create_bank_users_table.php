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
        Schema::create('bank_users', function (Blueprint $table) {
            $table->bigIncrements('buser_id');
            $table->string('name');
            $table->string('address');
            $table->integer('phone_no');

            $table->bigInteger('bank_id')->unsigned();
            $table->foreign('bank_id')
                  ->references('buser_id')
                  ->on('banks')->onDelete('cascade');

            $table->bigInteger('deposite_id')->unsigned();
            $table->foreign('deposite_id')
                  ->references('buser_id')
                  ->on('deposits')->onDelete('cascade');
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
        Schema::dropIfExists('bank_users');
    }
};
