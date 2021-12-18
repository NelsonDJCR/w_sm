<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnEmergencyPhoneToOfferors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('offerors', function (Blueprint $table) {
            $table->string('phone_emergeny')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('offerors', function (Blueprint $table) {
            $table->dropColumn('phone_emergeny');
        });
    }
}
