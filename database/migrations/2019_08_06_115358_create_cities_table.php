<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('country_id')->unsigned()->index();
            $table->bigInteger('department_id')->unsigned()->index();
            $table->boolean('state');
            $table->timestamps();

            $table->foreign('country_id')
                ->references('id')
                ->on('countries');

            $table->foreign('department_id')
                ->references('id')
                ->on('departments');
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
        Schema::dropIfExists('cities');
        Schema::enableForeignKeyConstraints();
    }
}
