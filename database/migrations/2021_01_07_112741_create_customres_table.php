<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customres', function (Blueprint $table) {
            $table->id();
            $table->String('Firstneame');
            $table->String('LastName');
            $table->String('Phone');
            $table->String('Address1');
            $table->String('Address2');
            $table->String('City');
            $table->String('State');
            $table->String('Country');
            $table->integer('PostCode')->default(0);
            $table->integer('CreditLimt')->default(0);
            $table->integer('SelesRepEmployeeNum')->default(0);

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
        Schema::dropIfExists('customres');
    }
}
