<?php

namespace Database\Seeders;

use App\Models\Book;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Country::factory(50)->create();
        \App\Models\Author::factory(25)->create();
        Book::factory(15)->create();
        for ($i=1; $i <= 15; $i++) { 
            $book = Book::find($i);
            $book->authors()->attach(random_int(1,25));
            
        }

    }
}
