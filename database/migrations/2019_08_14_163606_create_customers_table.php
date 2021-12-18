<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('customer_type')->default('Natural');
            $table->integer('state')->default(1);
            $table->integer('validated')->default(0);
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('document')->nullable();
            $table->string('document_number')->nullable();
            $table->tinyInteger('level')->nullable();
            $table->tinyInteger('verification')->nullable();
            $table->decimal('score',2,1)->nullable();       //promedio de calificaciones
            $table->integer('number_score')->nullable();                // numero de calificaiones
            $table->date('birthday')->nullable();
            $table->date('first_service')->nullable();
            $table->date('last_service')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_phone')->nullable();

            $table->timestamps();

        });

        DB::update("ALTER TABLE customers AUTO_INCREMENT = 10000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('customers');
        Schema::enableForeignKeyConstraints();
    }
}
