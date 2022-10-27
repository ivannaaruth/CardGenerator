<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foodList', function (Blueprint $table) 
        {
                $table->bigIncrements('id');
                $table->string('pict');
                $table->string('foodName');
                $table->string('foodDescription');
                $table->string('price');
                $table->string('foodComposition');
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
        Schema::dropIfExists('foodList');
    }
};
