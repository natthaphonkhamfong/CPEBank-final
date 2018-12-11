<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('account_information', function (Blueprint $table) {
            $table->integer('userId')->primary()->unique()->unsigned();
            $table->string('accName', 150);
            $table->string('accLastName', 150);
            $table->string('accPhone', 10)->unique();
            $table->date('accDOB')->nullable();
            $table->string('accIdCard', 13)->unique();
            $table->string('accJob', 150)->nullable();
            $table->enum('accGender', ['male', 'female', 'other']);
            $table->text('accAddrHome' )->nullable();
            $table->text('accAddrAWork')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_information');

    }
}
