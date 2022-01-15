<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterProductVariantAddVariantValueIdVariantValueName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('product_variants', function (Blueprint $table) {
            $table->bigInteger('variant_value_id');
            $table->string('variant_value_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('product_variants', function (Blueprint $table) {
            $table->dropColumn('variant_value_id');
            $table->dropColumn('variant_value_name');
        });
    }
}
