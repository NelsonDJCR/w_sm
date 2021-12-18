<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_service_request')->nullable();
            $table->bigInteger('offeror_id')->unsigned()->index();
            $table->string('operation');
            $table->double('amount');
            $table->bigInteger('id_user_registers');
            $table->string('ip');
            $table->text('observation');
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
        Schema::dropIfExists('operations');
    }
}
