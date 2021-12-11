<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class PopulateProductStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            INSERT INTO products(`name`, `description`, `price`)
            VALUES('table', 'IKEA table', 1000.00),
                  ('computer', 'laptop', 6000.00),
                  ('chair', '', 505.50);
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
            DELETE FROM `products`;
        ");
    }
}
