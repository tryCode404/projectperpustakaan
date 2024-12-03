<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Buku;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Profile;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed default users
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123'),
            'isAdmin' => true,
        ]);

        User::create([
            'name' => 'Abi',
            'email' => 'abi@gmail.com',
            'password' => Hash::make('12345678'),
            'isAdmin' => false,
        ]);

        User::create([
            'name' => 'Aji',
            'email' => 'aji@gmail.com',
            'password' => Hash::make('12345678'),
            'isAdmin' => false,
        ]);

        User::create([
            'name' => 'Yudha',
            'email' => 'yudha@gmail.com',
            'password' => Hash::make('12345678'),
            'isAdmin' => false,
        ]);

        User::create([
            'name' => 'Faris',
            'email' => 'faris@gmail.com',
            'password' => Hash::make('12345678'),
            'isAdmin' => false,
        ]);

        // Seed profiles
        Profile::create([
            'npm' => '19990020',
            'prodi' => 'Administrator',
            'alamat' => 'Dimana Bumi Dipijak',
            'noTelp' => '08123456789',
            'users_id' => 1,
        ]);

        Profile::create([
            'npm' => '17207024',
            'prodi' => 'Teknik Informatika',
            'alamat' => 'Jakarta Barat',
            'noTelp' => '085171502026',
            'users_id' => 2,

        ]);

        Profile::create([
            'npm' => '17215114',
            'prodi' => 'Teknik Informatika',
            'alamat' => 'Citayam',
            'noTelp' => '083819379569',
            'users_id' => 3,

        ]);

        Profile::create([
            'npm' => '17215012',
            'prodi' => 'Teknik Informatika',
            'alamat' => 'Jakarta Pusat',
            'noTelp' => '085697713966',
            'users_id' => 4,

        ]);

        Profile::create([
            'npm' => '17207025',
            'prodi' => 'Teknik Informatika',
            'alamat' => 'Jakarta Timur',
            'noTelp' => '085156166032',
            'users_id' => 5,

        ]);
        // Seed categories
        Kategori::create(['nama' => 'Novel', 'deskripsi' => 'Kumpulan Novel']);
        Kategori::create(['nama' => 'Pelajaran', 'deskripsi' => 'Kumpulan Buku materi pelajaran']);
        Kategori::create(['nama' => 'Rommance']);
        Kategori::create(['nama' => 'Drama']);
        Kategori::create(['nama' => 'Fiksi']);
        Kategori::create(['nama' => 'Pemrograman']);
        Kategori::create(['nama' => 'Science']);
        Kategori::create(['nama' => 'Horror']);

        // Seed books
        Buku::create([
            'kode_buku' => 'LSK-01',
            'Judul' => 'Laskar Pelangi',
            'Pengarang' => 'Andrea Hirata',
            'Penerbit' => 'Bentang Pustaka',
            'tahun_terbit' => '2005',
            'deskripsi' => 'Laskar Pelangi adalah novel pertama karya Andrea Hirata...'
        ]);

        Buku::create([
            'kode_buku' => 'HJN-01',
            'Judul' => 'Hujan',
            'Pengarang' => 'Tere Liye',
            'Penerbit' => 'Gramedia Pustaka',
            'tahun_terbit' => '2016',
            'deskripsi' => 'Pada 2042, dunia telah memasuki era di mana peran manusia telah digantikan...'
        ]);

        Buku::create([
            'kode_buku' => 'JNJ-01',
            'Judul' => 'Janji',
            'Pengarang' => 'Tere Liye',
            'Penerbit' => 'Tere Liye',
            'tahun_terbit' => '2021',
            'deskripsi' => 'Kisah ini tentang JANJI...'
        ]);

        Buku::create([
            'kode_buku' => 'AP-01',
            'Judul' => 'Algoritma dan Pemrograman',
            'Pengarang' => 'Lamhot Sitorus',
            'Penerbit' => 'Andi',
            'tahun_terbit' => '2015',
            'deskripsi' => 'Buku ini dirancang untuk mahasiswa Program Studi Ilmu Komputer...'
        ]);

        Buku::create([
            'kode_buku' => 'PBO-01',
            'Judul' => 'Pemrograman Berorientasi Objek',
            'Pengarang' => 'Syafei Karim',
            'Penerbit' => 'Tanesa',
            'tahun_terbit' => '2021',
            'deskripsi' => 'Pemrograman Berorientasi Objek (PBO) adalah salah satu konsep pemrograman...'
        ]);
    }
}
