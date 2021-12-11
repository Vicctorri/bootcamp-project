<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterProductsTableAddManufacturerIdColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('products', 'manufacturer_id')){
            Schema::dropColumn('products', ['manufacturer_id']);
        }
        Schema::table('products', function(Blueprint $table){
            $table->foreignId('manufacturer_id')
            ->nullable()
            ->after('id')
            ->constrained('manufactures', 'id')
            ->cascadeOnUpdate()
            ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function(Blueprint $table){
            $table->dropConstrainedForeignId('manufacturer_id');
        });
    }
}
