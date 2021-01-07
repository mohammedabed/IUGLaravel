<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->text('PdtDescription');
            $table->text('MSRP');
            $table->string('Vendor');
            $table->integer('Code')->default(0);
            $table->integer('ProductlineID')->default(0);
            $table->integer('Scale')->nullable();
            $table->integer('QtyInStock')->nullable();
            $table->integer('BuyPrice');


          //  $table->unsignedBigInteger('category_id')->nullable();
         //   $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();

          //  $table->foreign('category_id')->references('id')->on('categories');
          //  $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
