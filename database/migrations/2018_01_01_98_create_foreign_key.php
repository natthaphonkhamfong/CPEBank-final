<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('account_information', function (Blueprint $table) {
            $table->foreign('userId')->references('accId')->on('account')->onDelete('cascade');
        });
        Schema::table('officer', function (Blueprint $table) {
            $table->foreign('accId')->references('accId')->on('account')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
