<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account', function (Blueprint $table) {
            $table->increments('accId')->unsigned();
            $table->string('email', 150)->unique();
            $table->string('username', 256)->unique();
            $table->string('password', 256);
            $table->timestamp('lastLogin');
            $table->enum('accType', ['admin', 'owner', 'employee', 'customer']);
            $table->boolean('accLocked')->default(1);
            $table->integer('accLevel')->unsigned();
            $table->string('login_token',100)->default(null)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account');
    }
}
