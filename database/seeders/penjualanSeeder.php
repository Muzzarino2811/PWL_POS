<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class penjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data seed untuk tabel t_penjualan
        $penjualanData = [
            [
                'user_id' => 1, // Sesuaikan dengan ID user tertentu
                'pembeli' => 'Taufiq',
                'penjualan_kode' => 'PJ1',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2, // Sesuaikan dengan ID user tertentu
                'pembeli' => 'Hidayat',
                'penjualan_kode' => 'PJ2',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3, // Sesuaikan dengan ID user tertentu
                'pembeli' => 'Joko',
                'penjualan_kode' => 'PJ3',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1, // Sesuaikan dengan ID user tertentu
                'pembeli' => 'Dodo',
                'penjualan_kode' => 'PJ4',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2, // Sesuaikan dengan ID user tertentu
                'pembeli' => 'Raditya',
                'penjualan_kode' => 'PJ5',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3, // Sesuaikan dengan ID user tertentu
                'pembeli' => 'Dika',
                'penjualan_kode' => 'PJ6',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1, // Sesuaikan dengan ID user tertentu
                'pembeli' => 'Fathir',
                'penjualan_kode' => 'PJ7',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2, // Sesuaikan dengan ID user tertentu
                'pembeli' => 'Fighaz',
                'penjualan_kode' => 'PJ8',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3, // Sesuaikan dengan ID user tertentu
                'pembeli' => 'Ardian',
                'penjualan_kode' => 'PJ9',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1, // Sesuaikan dengan ID user tertentu
                'pembeli' => 'Raisa',
                'penjualan_kode' => 'PJ10',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data seed lainnya sesuai kebutuhan
        ];

        // Masukkan data seed ke dalam tabel t_penjualan
        DB::table('t_penjualan')->insert($penjualanData);
    }
}
