<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentYearMonth = date('Ym');
        $patientCount = User::where('no_rm', 'like', $currentYearMonth . '-%')->count();
        $no_rm = $currentYearMonth . '-' . str_pad($patientCount + 1, 3, '0', STR_PAD_LEFT);

        User::create([
            'nama' => 'Bambang Gautama',
            'email' => 'bambang@pasien.com',
            'password' => Hash::make('pasien123'),
            'role' => 'pasien',
            'alamat' => 'Jl. Merdeka No. 123, Jakarta',
            'no_hp' => '081234567890',
            'no_ktp' => '3175010101900001',
            'no_rm' => $no_rm,
        ],
        [
            'nama' => 'Rudi Wijaya',
            'email' => 'rudi.wijaya@pasien.com',
            'password' => Hash::make('pasien123'),
            'role' => 'pasien',
            'alamat' => 'Jl. Merdeka No. 242, Depok',
            'no_hp' => '081234567847',
            'no_ktp' => '3175010101900008',
           'no_rm' => $no_rm,
        ],
        [
            'nama' => 'Agus Prabowo',
            'email' => 'agus.prabowo@pasien.com',
            'password' => Hash::make('pasien123'),
            'role' => 'pasien',
            'alamat' => 'Jl. Indah No. 512, Tangerang',
            'no_hp' => '081234567853',
            'no_ktp' => '3175010101900007',
            'no_rm' => $no_rm,
        ],
        [
            'nama' => 'Yudi Setiawan',
            'email' => 'yudi.setiawan@pasien.com',
            'password' => Hash::make('pasien123'),
            'role' => 'pasien',
            'alamat' => 'Jl. Merdeka No. 888, Jakarta Selatan',
            'no_hp' => '081234567884',
            'no_ktp' => '3175010101900004',
            'no_rm' => $no_rm,
        ],
        [
            'nama' => 'Ferry Setiawan',
            'email' => 'ferry.setiawan@pasien.com',
            'password' => Hash::make('pasien123'),
            'role' => 'pasien',
            'alamat' => 'Jl. Raya No. 568, Bekasi Timur',
            'no_hp' => '081234567884',
            'no_ktp' => '3175010101900004',
            'no_rm' => $no_rm,
        ],
        [
            'nama' => 'Hendra Kurniawan',
            'email' => 'hendra.kurniawan@pasien.com',
            'password' => Hash::make('pasien123'),
            'role' => 'pasien',
            'alamat' => 'Jl. Merdeka No. 178, Jakarta Barat',
            'no_hp' => '081234567849',
            'no_ktp' => '3175010101900006',
            'no_rm' => $no_rm,
        ],
        [
            'nama' => 'Toni Puspito',
            'email' => 'toni.puspito@pasien.com',
            'password' => Hash::make('pasien123'),
            'role' => 'pasien',
            'alamat' => 'Jl. Merdeka No. 472, Jakarta Pusat',
            'no_hp' => '081234567824',
            'no_ktp' => '3175010101900008',
            'no_rm' => $no_rm,
        ],
        [
            'nama' => 'Rizal Hidayat',
            'email' => 'rizal.hidayat@pasien.com',
            'password' => Hash::make('pasien123'),
            'role' => 'pasien',
            'alamat' => 'Jl. Merdeka No. 720, Jakarta Timur',
            'no_hp' => '081234567893',
            'no_ktp' => '3175010101900009',
            'no_rm' => $no_rm,
        ],
        [
            'nama' => 'Heru Rudianto',
            'email' => 'heru.rudianto@pasien.com',
            'password' => Hash::make('pasien123'),
            'role' => 'pasien',
            'alamat' => 'Jl. Merdeka No. 570, Jakarta Utara',
            'no_hp' => '081234567895',
            'no_ktp' => '3175010101900004',
            'no_rm' => $no_rm,
        ],

    );
           foreach ($pasien as $pasien) {
            User::create($pasien);
        }
    }


}
