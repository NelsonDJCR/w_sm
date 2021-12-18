<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValidationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('validations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->bigInteger('document_validate_id')->unsigned()->index();
            $table->string('file');
            $table->text('description')->nullable();
            $table->tinyInteger('state');
            $table->tinyInteger('offeror_or_customer');                             // Cliente=1 - Modelo=2
            $table->tinyInteger('natural_or_juridical');                            // Natural=1 - Jurídica=2
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->foreign('document_validate_id')
                ->references('id')
                ->on('document_validates');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('validations');
    }
}
