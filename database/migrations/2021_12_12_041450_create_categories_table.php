<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');//cột name với data type là varchar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *3
     * @return void
     */
    //restore
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
