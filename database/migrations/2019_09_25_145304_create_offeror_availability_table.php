<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferorAvailabilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offeror_availabilities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('offeror_id')->unsigned()->index();
            $table->time('star_time');
            $table->time('end_time');
            $table->boolean('monday');
            $table->boolean('tuesday');
            $table->boolean('wednesday');
            $table->boolean('thursday');
            $table->boolean('friday');
            $table->boolean('saturday');
            $table->boolean('sunday');
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
        Schema::dropIfExists('offeror_availabilities');
    }
}
