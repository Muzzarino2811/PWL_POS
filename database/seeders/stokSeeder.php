<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class stokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stokData = [
            [
                'barang_id' => 1, // Sesuaikan dengan ID barang tertentu
                'user_id' => 1, // Sesuaikan dengan ID user tertentu
                'stok_tanggal' => now(),
                'stok_jumlah' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_id' => 2, // Sesuaikan dengan ID barang tertentu
                'user_id' => 1, // Sesuaikan dengan ID user tertentu
                'stok_tanggal' => now(),
                'stok_jumlah' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_id' => 3, // Sesuaikan dengan ID barang tertentu
                'user_id' => 2, // Sesuaikan dengan ID user tertentu
                'stok_tanggal' => now(),
                'stok_jumlah' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_id' => 4, // Sesuaikan dengan ID barang tertentu
                'user_id' => 2, // Sesuaikan dengan ID user tertentu
                'stok_tanggal' => now(),
                'stok_jumlah' => 80,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_id' => 5, // Sesuaikan dengan ID barang tertentu
                'user_id' => 3, // Sesuaikan dengan ID user tertentu
                'stok_tanggal' => now(),
                'stok_jumlah' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_id' => 1,
                'user_id' => 3,
                'stok_tanggal' => now(),
                'stok_jumlah' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_id' => 2,
                'user_id' => 3,
                'stok_tanggal' => now(),
                'stok_jumlah' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_id' => 3,
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_id' => 4,
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 70,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_id' => 5,
                'user_id' => 2,
                'stok_tanggal' => now(),
                'stok_jumlah' => 35,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data seed lainnya sesuai kebutuhan
        ];

        // Masukkan data seed ke dalam tabel t_stok
        DB::table('t_stok')->insert($stokData);
    }
}
