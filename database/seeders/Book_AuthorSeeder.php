<?php

namespace Database\Seeders;

use App\Models\Book_Author;
use Illuminate\Database\Seeder;

class Book_AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book_Author::factory(10)->create();
    }
}
