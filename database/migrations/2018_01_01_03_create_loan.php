<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan', function (Blueprint $table) {
            $table->increments('nId')->unsigned();
            $table->enum('nType', ['SME', 'EDU', 'HOME', 'PERSONAL']);
            $table->float('nAmount')->default(0);
            $table->float('nReturn')->default(0);
            $table->float('nInterestRate')->unsigned();
            $table->json('nAssets');
            $table->date('nStartLoan');
            $table->date('nPayBackNext');
            $table->integer('cusId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loan');
    }
}
