<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonetaryRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monetary_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('offeror_id')->unsigned()->index();
            $table->string('operation');
            $table->double('amount');
            $table->string('status');
            $table->text('observation')->nullable();
            $table->string('financial_information');
            $table->string('ip_request');
            $table->bigInteger('id_user_requesting');
            $table->bigInteger('id_user_approves')->nullable();
            $table->timestamps();

            $table->foreign('offeror_id')
                ->references('id')
                ->on('offerors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monetary_requests');
    }
}