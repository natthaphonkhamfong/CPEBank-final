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
            $table->increments('bbId')->unsigned()->primary();
            $table->string('bbName',150);
            $table->string('bbBranchName',150);
            $table->string('bbStreet', 200)->nullable();
            $table->json('bbPhones')->nullable();
            $table->unsignedInteger('amphures_id');
            $table->string('districts_id',6);
            $table->unsignedInteger('hqId');
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
