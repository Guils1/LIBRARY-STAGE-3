<?php

namespace Database\Seeders;

use \App\Models\Books;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Books::factory(10)->create();
        // $books = new Books();
        // $books->name = 'Teste';
        // $books->cover = 'Teste';
        // $books->price = '1.11';
        // $books->description = 'TesteTesteTesteTesteTesteTesteTesteTesteTesteTesteTesteTeste';
        // $books->stock = '2';
        // $books->save();
    }
}
