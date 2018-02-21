<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentesNomPrix extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ventes', function (Blueprint $table) {
            $table->string('nom', 50)->after('boisson_id');
            $table->integer('prix')->after('nom');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ventes', function (Blueprint $table) {
            $table->dropColumn(['nom','prix']);
        });
    }
}