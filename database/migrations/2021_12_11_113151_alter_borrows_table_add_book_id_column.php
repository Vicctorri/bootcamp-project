<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterBorrowsTableAddBookIdColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('borrows', 'book_id')){
            Schema::dropColumn('borrows', ['book_id']);
        }
        Schema::table('borrows', function(Blueprint $table){
            $table->foreignId('book_id')
            ->nullable()
            ->after('id')
            ->constrained('books', 'id')
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
        Schema::table('borrows', function(Blueprint $table){
            $table->dropConstrainedForeignId('book_id');
        });
    }
}
