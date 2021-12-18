<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceRequestOfferorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_request_offerors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('consecutive');
            $table->bigInteger('service_request_id')->unsigned()->index();
            $table->bigInteger('offeror_id')->unsigned()->index();
            $table->dateTime('initial_date');
            $table->dateTime('final_date');

            $table->bigInteger('total_value');
            $table->bigInteger('tax_value');
            $table->bigInteger('base_value');
            $table->bigInteger('offeror_value');
            $table->tinyInteger('state');
            $table->text('description');
            $table->text('data');
            $table->smallInteger('qualify_customer')->nullable();
            $table->timestamps();

            $table->foreign('service_request_id')
                ->references('id')
                ->on('service_requests');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('service_request_offerors');
        Schema::enableForeignKeyConstraints();
    }
}
