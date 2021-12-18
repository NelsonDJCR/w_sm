<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferorServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offeror_services', function (Blueprint $table) {
            $table->uuid('id');
            $table->bigInteger('offeror_id')->unsigned()->index();
            $table->bigInteger('service_id')->unsigned()->index();
            $table->bigInteger('time_unit_id')->unsigned()->index();
            $table->bigInteger('currency_id')->unsigned()->index();
            $table->mediumText('description');

            $table->integer('quantity');
            $table->integer('cost');
            $table->timestamps();

            $table->foreign('offeror_id')
                ->references('id')
                ->on('offerors');

            $table->foreign('service_id')
                ->references('id')
                ->on('services');

            $table->foreign('time_unit_id')
                ->references('id')
                ->on('time_units');

            $table->foreign('currency_id')
                ->references('id')
                ->on('currencies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offeror_services');
    }
}
