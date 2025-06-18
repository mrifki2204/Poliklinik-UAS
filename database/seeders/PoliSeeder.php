<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
        public function run()
    {
        DB::table('polis')->insert([
            [
                'nama' => 'Poli Umum',
                'deskripsi' => 'Poli yang menangani berbagai keluhan umum, seprti demam, batuk, flu, dan gangguan kesehatan ringan lainnya',
            ],
             [
                'nama' => 'Poli Penyakit Dalam',
                'deskripsi' => 'menangani pasien dewasa dengan berbagai gangguan organ internal, seprti gangguan pencernaan, pernapasan, ginjal, dan hati. Dokter spesialis penyakit dalam di poli ini sering menangani kasus-kasus kompleks yang memerlukan pengobatan jangka panjang',
            ],
            [
                'nama' => 'Poli Anak',
                'deskripsi' => 'Poli yang menangani masalah kesehatan bayi, balita, dan anak-anak. Layanan ini mencakup imunisasi, pemantauan tumbuh kembang, serta diagnosis dan pengobatan penyakit khusus pada anak',
            ],
             [
                'nama' => 'Poli Ortopedi',
                'deskripsi' => 'Poli yang memberikan layanan untuk pasien dengan gangguan pada tulang, sendi, dan otot, layanan ini mencakup diagnosis, terapi fisik, hingga tindakan operatif.',
            ],
              [
                'nama' => 'Polii Mata',
                'deskripsi' => 'Poli yang menangani masalah penglihatan, seperti rabun jauh, rabun dekat, katarak, dan glaukoma. Poli ini juga menawarkan layanan pemeriksaan mata rutin dan pemberian resep kacamata atau lensa kontak.',
            ],

            [
                'nama' => 'Poli THT',
                'deskripsi' => 'Poli yang menangani gangguan yang berkaitan dengan telinga, hidung, dan tenggorokan, seperti infeksi, sinusitis, atau gangguan pendengaran',
            ],

            [
                'nama' => 'Poli Poli Kebidanan dan Kandungan',
                'deskripsi' => 'Poli yang poli yang manangani perawatan kesehatan reproduksi wanita, termasuk kehamilan, persalinan, dan masalah lain yang berkaitan dengan sistem reproduksi wanita',
            ]
        ]);
    }
}
