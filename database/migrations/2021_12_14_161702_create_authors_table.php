<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE TABLE `authors` (
            `id` bigint(10) unsigned NOT NULL AUTO_INCREMENT,
            `name` varchar(30) DEFAULT NULL,
            `surname` varchar(30) DEFAULT NULL,
            PRIMARY KEY (`id`)
          ) ENGINE=InnoDB
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("
            DROP TABLE `authors`;
        ");
    }
}
