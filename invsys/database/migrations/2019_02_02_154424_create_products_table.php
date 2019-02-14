<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('id')->primary();
            $table->unsignedInteger('collection_id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->integer('quantity');
            $table->float('price', 6, 2);
            $table->timestamps();

            //$table->foreign('collection_id')->references('id')->on('product_collections');
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
