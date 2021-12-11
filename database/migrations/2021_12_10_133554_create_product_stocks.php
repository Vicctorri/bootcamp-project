<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateProductStocks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE TABLE `products_stock` (
                `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                `product_id` int(10) unsigned NOT NULL,
                `color` varchar(50) DEFAULT 'Black',
                `quantity` int(10) unsigned NOT NULL DEFAULT 0,
                `comment` tinytext DEFAULT NULL,
                PRIMARY KEY (`id`),
                KEY `products_stock_FK` (`product_id`),
                CONSTRAINT `products_stock_FK` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
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
            DROP TABLE `products_stock`;
        ");
    }
}
