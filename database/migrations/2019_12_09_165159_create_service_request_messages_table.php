<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceRequestMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_request_messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('service_request_offeror_id')->unsigned()->index();
            $table->text('message');
            $table->bigInteger('user_sender_id')->unsigned()->index();
            $table->string('user_sender_name');
            $table->timestamps();

            $table->foreign ('service_request_offeror_id')
                ->references('id')
                ->on ('service_request_offerors');

            $table->foreign ('user_sender_id')
                ->references('id')
                ->on ('users');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_request_messages');
    }
}
