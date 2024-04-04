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
            $table->string('image_name');
            $table->string('product_name');
            $table->text('Description');
            $table->integer('stock');
            $table->unsignedBigInteger('idcategory');
            $table->decimal('price', 8, 2);
            $table->decimal('old_price', 8, 2)->nullable();
            $table->decimal('weight', 8, 2)->nullable();
            $table->boolean('sale')->default(false);
            $table->timestamps();

            // Define a chave estrangeira para a coluna 'idcategory'
            $table->foreign('idcategory')->references('id')->on('categories');
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
