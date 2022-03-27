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

            $table->increments('id');
            $table->foreignId('category_id');
            $table->integer('user_id')->nullable()->unsigned();
            $table->string('kode_product')->nullable();
            $table->string('nama_product');
            $table->string('slug_product');
            $table->text('deskripsi_product')->nullable();
            $table->string('image')->nullable(); //banner productnya
            $table->string('qty')->nullable();
            $table->string('satuan')->nullable()->default(0);
            $table->double('harga')->nullable();
            $table->string('status')->nullable();
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('category_id')->references('id')->on('category');
            $table->timestamps();


            // $table->bigIncrements('product_id');
            // //$table->unsignedBigInteger('brand_id');
            // // $table->foreign('brand_id')->references('brand_id')
            // //     ->on('brands')->onUpdate('cascade')->onDelete('cascade');

            // $table->string('product_name');
            // $table->string('product_slug')->unique();
            // $table->string('sku')->unique();
            // //create a column for available or unavailable, and default is active
            // $table->boolean('status')->default(1);
            // //if product is unavailable then an available data comes
            // // $table->date('data_available')->nullable();
            // // $table->boolean('is_off')->default(0);
            // // $table->integer('off_price')->default(0);
            // // $table->boolean('has_size')->default(0);
            // // $table->integer('buy_price');
            // $table->integer('sale_price');
            // $table->integer('quantity');
            // // $table->string('made_in')->nullable();
            // // $table->decimal('weight')->nullable();
            // $table->text('description')->nullable();
            // // $table->string('cover', 255)->nullable();
            // // $table->softDeletes();
            // $table->timestamps();
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
