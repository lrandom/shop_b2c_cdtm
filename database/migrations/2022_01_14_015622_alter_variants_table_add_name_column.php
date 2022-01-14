<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterVariantsTableAddNameColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('variants', function (Blueprint $table) {
            $table->string('name')->nullable();
            if (Schema::hasColumn('variants', 'product_id')) {
                $table->dropColumn('product_id');
            }

            if (Schema::hasColumn('variants', 'variant_id')) {
                $table->dropColumn('variant_id');
            }

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('variants', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->bigInteger('variant_id');
            $table->bigInteger('product_id');
        });
    }
}
