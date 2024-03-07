<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create(['kategori' => 'Lab. Hardware']);
        Kategori::create(['kategori' => 'Lab. Rpl']);
        Kategori::create(['kategori' => 'Lab. Tkp']);
        Kategori::create(['kategori' => 'Lab. Mm']);
        Kategori::create(['kategori' => 'Lab. Film']);
        Kategori::create(['kategori' => 'Lab. Kkpi']);
        Kategori::create(['kategori' => 'Ub Jurusan']);
    }
}
