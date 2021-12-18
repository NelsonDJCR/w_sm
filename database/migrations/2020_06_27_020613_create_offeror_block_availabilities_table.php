<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferorBlockAvailabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offeror_block_availabilities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('offeror_id')->unsigned()->index();
            $table->date('initial_date');
            $table->date('final_date');
            $table->string('motive')->nullable();
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
        Schema::dropIfExists('offeror_block_availabilities');
    }
}
