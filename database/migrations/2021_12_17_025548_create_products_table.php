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
            $table->string('name');
            $table->longText('content');
            $table->double('price');
            $table->bigInteger('brand_id');
            $table->double('discount_amount')->nullable();
            $table->tinyInteger('discount_type')->default(2); //1 - percentage, 2- direct amount
            $table->string('meta_keyword')->nullable();
            $table->text('meta_content')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('short_description')->nullable();
            $table->bigInteger('category_id');
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
        Schema::dropIfExists('products');
    }
}
