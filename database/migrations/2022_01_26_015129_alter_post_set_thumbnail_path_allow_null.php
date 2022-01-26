<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPostSetThumbnailPathAllowNull extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        \Illuminate\Support\Facades\DB::statement(
            'ALTER TABLE `posts` MODIFY `thumbnail_path` varchar(255) NULL');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        \Illuminate\Support\Facades\DB::statement(
            'ALTER TABLE `posts` MODIFY `thumbnail_path` varchar(255) NOT NULL');

    }
}
