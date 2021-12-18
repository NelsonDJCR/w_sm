<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferorsRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offerors_ratings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('score');
            $table->bigInteger('offeror_id')->unsigned()->index();
            $table->bigInteger('customer_id')->unsigned()->index();
            $table->bigInteger('service_request_offeror_id')->unsigned()->index();
            $table->mediumtext('comments')->nullable();
            $table->timestamps();

            $table->foreign('offeror_id')
                ->references('id')
                ->on('offerors');

            $table->foreign('customer_id')
                ->references('id')
                ->on('customers');

            $table->foreign('service_request_offeror_id')
                ->references('id')
                ->on('service_request_offerors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offerors_ratings');
    }
}
