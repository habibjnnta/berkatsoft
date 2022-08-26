<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create(['kategori' => 'Now Playing', 'url' => 'now_playing']);
        Kategori::create(['kategori' => 'Popular', 'url' => 'popular']);
        Kategori::create(['kategori' => 'Top Rated', 'url' => 'top_rated']);
        Kategori::create(['kategori' => 'Up Coming', 'url' => 'upcoming']);
    }
}
