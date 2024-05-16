<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data seed untuk tabel m_barang
        $barangData = [
            [
                'kategori_id' => 1, // Sesuaikan dengan ID kategori Makanan
                'barang_kode' => 'MK1',
                'barang_nama' => 'Nasi Goreng',
                'harga_beli' => 5000,
                'harga_jual' => 10000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 1, // Sesuaikan dengan ID kategori Makanan
                'barang_kode' => 'MK2',
                'barang_nama' => 'Ayam Goreng',
                'harga_beli' => 8000,
                'harga_jual' => 15000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 2, // Sesuaikan dengan ID kategori Minuman
                'barang_kode' => 'MN1',
                'barang_nama' => 'Es Teh',
                'harga_beli' => 2000,
                'harga_jual' => 5000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 2, // Sesuaikan dengan ID kategori Minuman
                'barang_kode' => 'MN2',
                'barang_nama' => 'Jus Jeruk',
                'harga_beli' => 3000,
                'harga_jual' => 7000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3, // Sesuaikan dengan ID kategori Barang
                'barang_kode' => 'BR1',
                'barang_nama' => 'Buku',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3, // Sesuaikan dengan ID kategori Barang
                'barang_kode' => 'BR2',
                'barang_nama' => 'Pensil',
                'harga_beli' => 500,
                'harga_jual' => 1000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 4, // Sesuaikan dengan ID kategori Baju
                'barang_kode' => 'BJ1',
                'barang_nama' => 'Kaos',
                'harga_beli' => 8000,
                'harga_jual' => 12000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 4, // Sesuaikan dengan ID kategori Baju
                'barang_kode' => 'BJ2',
                'barang_nama' => 'Celana Jeans',
                'harga_beli' => 15000,
                'harga_jual' => 20000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 5, // Sesuaikan dengan ID kategori Elektronik
                'barang_kode' => 'EL1',
                'barang_nama' => 'Smartphone',
                'harga_beli' => 2000000,
                'harga_jual' => 2500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 5, // Sesuaikan dengan ID kategori Elektronik
                'barang_kode' => 'EL2',
                'barang_nama' => 'Laptop',
                'harga_beli' => 5000000,
                'harga_jual' => 6000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data seed lainnya sesuai kebutuhan
        ];

        // Masukkan data seed ke dalam tabel m_barang
        DB::table('m_barang')->insert($barangData);
    }
}
