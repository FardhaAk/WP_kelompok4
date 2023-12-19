<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Book;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('books')->insert([
            'title' => 'Judul Buku 1',
            'author' => 'Penulis 1',
            'year' => 'Tahun 2020',
            'copies_in_circulation' => 100,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('books')->insert([
            'title' => 'Judul Buku 2',
            'author' => 'Penulis 2',
            'year' => 'Tahun 2021',
            'copies_in_circulation' => 150,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('books')->insert([
            'title' => 'Judul Buku 3',
            'author' => 'Penulis 3',
            'year' => 'Tahun 2019',
            'copies_in_circulation' => 120,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('books')->insert([
            'title' => 'Judul Buku 4',
            'author' => 'Penulis 4',
            'year' => 'Tahun 2022',
            'copies_in_circulation' => 200,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('books')->insert([
            'title' => 'Judul Buku 5',
            'author' => 'Penulis 5',
            'year' => 'Tahun 2018',
            'copies_in_circulation' => 80,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
