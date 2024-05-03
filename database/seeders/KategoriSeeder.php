<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategoriData = [
            [
                'kategori_kode' => 'MKN',
                'kategori_nama' => 'Makanan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_kode' => 'MNM',
                'kategori_nama' => 'Minuman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_kode' => 'BRG',
                'kategori_nama' => 'Barang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_kode' => 'BJS',
                'kategori_nama' => 'Baju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_kode' => 'ELK',
                'kategori_nama' => 'Elektronik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data seed lainnya sesuai kebutuhan
        ];

        // Masukkan data seed ke dalam tabel m_kategori
        DB::table('m_kategori')->insert($kategoriData);
    }
}
