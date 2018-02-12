<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoissonIngredientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boisson_ingredient', function (Blueprint $table) {

            $table->integer('boisson_id');
            $table->integer('ingredient_id');
            $table->primary(['boisson_id','ingredient_id']);  //clé primaire : couple
            $table->foreign('boisson_id')->references('id')->on('boissons'); //clé étrangère
            $table->foreign('ingredient_id')->references('id')->on('ingredients'); //clé étrangère
            $table->integer('nbDose');
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
        Schema::dropIfExists('boisson_ingredient');
    }
}
