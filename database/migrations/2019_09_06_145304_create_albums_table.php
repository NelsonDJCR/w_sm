<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('offeror_id')->unsigned()->index();
            $table->string('title');
            $table->text('description')->nullable();
            $table->date('date')->nullable();
            $table->tinyInteger('published')->default('0');
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
        Schema::dropIfExists('albums');
    }
}
