<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisputesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disputes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('service_request_id');
            $table->integer('id_user');
            $table->string('reason');
            $table->string('answer');
            $table->string('decision');
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
        Schema::dropIfExists('disputes');
    }
}
