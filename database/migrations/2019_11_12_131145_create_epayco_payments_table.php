<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEpaycoPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epayco_payments', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('ref_payco');
            $table->integer('x_respuesta');
            $table->integer('x_response');
            $table->integer('x_response_reason_text');
            $table->integer('value_to_pay');
            $table->integer('payment_confirmed');

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
        Schema::dropIfExists('epayco_payments');
    }
}
