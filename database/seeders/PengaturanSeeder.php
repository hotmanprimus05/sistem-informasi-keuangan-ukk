<?php

namespace Database\Seeders;

use App\Models\Pengaturan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengaturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengaturan::create([
            'nama' => 'WalHiv',
            'logo' => '',
            'kota_id' => 3322,
            // 'alamat' => fake()->address()
            'alamat' => "Jalan Palir Raya No.66 - 68, Podorejo, Ngaliyan, Kota Semarang, Jawa Tengah 50187, Indonesia"
        ]);
    }
}
