<?php

namespace Database\Seeders;

use Illuminate\Container\Attributes\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as FacadesDB;

class produkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FacadesDB::table('produk')->insert([
            [ 'nama' => 'Produk A', 'harga' => 100000, 'gambar' => 'photo.jpeg'],
            [ 'nama' => 'Produk B', 'harga' => 50000, 'gambar' => 'photo.jpeg'],
            [ 'nama' => 'Produk C', 'harga' => 70000, 'gambar' => 'photo.jpeg']
        ]);
    }
}
