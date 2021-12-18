<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offerors', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->integer('state')->default(1);
            $table->integer('validated')->default(0);
            $table->bigInteger('user_id')->unsigned();
            $table->string('name');
            $table->string('document')->nullable();
            $table->string('document_number')->nullable();
            $table->string('level')->nullable();
            $table->tinyInteger('verification')->nullable();
            $table->decimal('score', 2, 1)->nullable();       //promedio de calificaciones
            $table->integer('number_score')->nullable();                // numero de calificaiones
            $table->date('birthday')->nullable();
            $table->string('gender')->nullable();
            $table->smallInteger('height')->nullable();                 // altura: guardar en centimetros
            $table->smallInteger('weight')->nullable();                 // peso: guardar en centimetros
            $table->smallInteger('bust_measurement')->nullable();       // medida de busto: guardar en centimetros
            $table->smallInteger('hip_measurement')->nullable();        // medida de cadera: guardar en centimetros
            $table->smallInteger('waist_measurement')->nullable();      // medida de cintura: guardar en centimetros

            $table->string('eyes_color')->nullable();                   // color de ojos: ejemplo cafe, negros
            $table->string('hair_color')->nullable();                   // color de cabello: ejemplo castaño, rubio
            $table->string('hair_length')->nullable();                  // longitud de cabello
            $table->string('has_tatoos')->nullable();                   // tiente tatuajes: YES or NOT
            $table->string('contexture')->nullable();                   // contextura: normal, delgado, ateltico,etc
            $table->string('skin_color')->nullable();                   // color de piel
            $table->text('style')->nullable();                          // estilo: casual, elegante,
            $table->string('agency')->nullable();
            $table->string('show_profile')->nullable();

            $table->bigInteger('country_id')->unsigned()->index()->nullable();               //nacionalidad
            $table->bigInteger('city_id')->unsigned()->index()->nullable();
            $table->mediumText('address')->nullable();
            $table->mediumText('eps')->nullable();

            $table->mediumText('description')->nullable();
            $table->text('tags')->nullable();
            $table->string('ethnicity')->nullable();
            $table->date('first_service')->nullable();
            $table->date('last_service')->nullable();


            $table->text('piercings')->nullable();
            $table->mediumText('have_place')->nullable();
            $table->mediumText('receive_services')->nullable();
            $table->mediumText('zones')->nullable();
            $table->mediumText('at_home')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->foreign('country_id')
                ->references('id')
                ->on('countries');

            $table->foreign('city_id')
                ->references('id')
                ->on('cities');
        });

        // Full Text Index
        DB::statement('ALTER TABLE offerors ADD FULLTEXT fulltext_index (tags)');
        DB::update("ALTER TABLE offerors AUTO_INCREMENT = 10000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('offerors');
        Schema::enableForeignKeyConstraints();
    }
}
