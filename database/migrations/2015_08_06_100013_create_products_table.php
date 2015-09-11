<?php

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
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->text('description');
            $table->text('tag');
            $table->integer('category_id');
            $table->integer('quantity');
            $table->integer('stock_status_id');
            $table->integer('condition_id');
            $table->string('image');
            $table->integer('manufacturer_id');
            $table->boolean('shipping');
            $table->decimal('price');
            $table->dateTime('date_available');
            $table->integer('sort_order');
            $table->boolean('status');
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
