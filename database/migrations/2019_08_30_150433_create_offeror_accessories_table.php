<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferorAccessoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offeror_accessories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('offeror_id')->unsigned()->index();
            $table->bigInteger('accessory_id')->unsigned()->index();
            $table->integer('cost');
            $table->bigInteger('currency_id')->unsigned()->index();
            $table->text('description');
            $table->timestamps();

            $table->foreign('offeror_id')
                ->references('id')
                ->on('offerors');

            $table->foreign('accessory_id')
                ->references('id')
                ->on('accessories');

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
        Schema::dropIfExists('offeror_accessories');
    }
}
