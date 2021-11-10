<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_product', function (Blueprint $table) {
            $table->id();
            $table->string('status',30)->default('Activo');
            $table->bigInteger('product_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('product');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories_product');
    }
}
