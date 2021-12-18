<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('consecutive');
            $table->bigInteger('customer_id')->unsigned()->index();
            $table->dateTime('initial_date');
            $table->dateTime('final_date');
            $table->smallInteger('total_models');
            $table->smallInteger('billable_items');
            $table->bigInteger('total_value');
            $table->bigInteger('tax_value');
            $table->bigInteger('base_value');
            $table->tinyInteger('state');
            $table->text('data')->nullable();
            $table->text('description')->nullable();
            $table->bigInteger('city_id')->unsigned()->index();
            $table->text('address')->nullable();
            $table->text('contact')->nullable();
            $table->text('phone_contact')->nullable();


            $table->timestamps();

            $table->foreign('customer_id')
                ->references('id')
                ->on('customers');
            $table->foreign('city_id')
                ->references('id')
                ->on('cities');
        });
        DB::update("ALTER TABLE service_requests AUTO_INCREMENT = 40;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_requests');
    }
}
