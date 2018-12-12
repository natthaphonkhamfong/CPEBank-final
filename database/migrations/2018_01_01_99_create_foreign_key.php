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
            $table->foreign('UserId')->references('accId')->on('account')->onDelete('cascade');
        });
        Schema::table('officer', function (Blueprint $table) {
            $table->foreign('accId')->references('accId')->on('account')->onDelete('cascade');

        });
        Schema::table('customer', function (Blueprint $table) {
            $table->foreign('accId')->references('accId')->on('account')->onDelete('cascade');
            $table->foreign('bbId')->references('bbId')->on('bank_branch')->onDelete('set null');
        });
        Schema::table('loan', function (Blueprint $table) {
            $table->foreign('cusId')->references('cusId')->on('customer')->onDelete('cascade');
        });

        Schema::table('bank_branch', function (Blueprint $table) {
            $table->foreign('amphures_id')->references('id')->on('amphures')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('districts_id')->references('id')->on('districts')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('hqId')->references('hqId')->on('bank_headquarter')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('bank_headquarter', function (Blueprint $table) {
            $table->foreign('provincesId')->references('id')->on('provinces')->onDelete('set null')->onUpdate('cascade');
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
