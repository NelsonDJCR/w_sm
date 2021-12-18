<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancialInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_information', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('offeror_id')->unsigned()->index();
            $table->bigInteger('bank_id')->unsigned()->index();
            $table->string('number_account');
            $table->string('type_account');
            $table->string('owner_account');
            $table->string('id_owner_account');
            $table->timestamps();

            $table->foreign('offeror_id')
                ->references('id')
                ->on('offerors');

            $table->foreign('bank_id')
                ->references('id')
                ->on('banks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('financial_information');
    }
}
