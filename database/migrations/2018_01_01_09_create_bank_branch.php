<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankBranch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_branch', function (Blueprint $table) {
            $table->increments('bbId')->unsigned();
            $table->string('bbName',150);
            $table->string('bbBranchName',150);
            $table->string('bbStreet', 200)->nullable();
            $table->json('bbPhones')->nullable();
            $table->unsignedInteger('amphures_id')->nullable();
            $table->string('districts_id',6)->nullable();
            $table->unsignedInteger('hqId')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_branch');
    }
}
