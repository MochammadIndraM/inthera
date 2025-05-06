<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Membuat user admin
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),  // Menggunakan bcrypt untuk enkripsi password
            'role' => 'admin',  // Menambahkan role admin
        ]);

        DB::table('data_penyakit')->insert([
            [
                'kode_penyakit' => 'P01',
                'nama_penyakit' => 'Anemia Defisiensi Besi',
            ],
            [
                'kode_penyakit' => 'P02',
                'nama_penyakit' => 'Anemia Megaloblastik',
            ],
            [
                'kode_penyakit' => 'P03',
                'nama_penyakit' => 'Anemia Aplastik',
            ],
            [
                'kode_penyakit' => 'P04',
                'nama_penyakit' => 'Anemia Hemolitik',
            ],
            [
                'kode_penyakit' => 'P05',
                'nama_penyakit' => 'Thalasemia Mayor',
            ],
            [
                'kode_penyakit' => 'P06',
                'nama_penyakit' => 'Thalasemia Beta',
            ],
            [
                'kode_penyakit' => 'P07',
                'nama_penyakit' => 'Thalasemia Alfa',
            ],
            [
                'kode_penyakit' => 'P08',
                'nama_penyakit' => 'Polisitemia Vera',
            ],
        ]);

        // Seeder untuk tabel gejala
        DB::table('data_gejala')->insert([
            ['kode_gejala' => 'G01', 'nama_gejala' => 'Sakit Kepala', 'pertanyaan' => 'Apakah Anda sering mengalami sakit kepala?'],
            ['kode_gejala' => 'G02', 'nama_gejala' => 'Pusing', 'pertanyaan' => 'Apakah Anda merasa pusing atau kepala terasa berputar?'],
            ['kode_gejala' => 'G03', 'nama_gejala' => 'Penglihatan Kabur', 'pertanyaan' => 'Apakah penglihatan Anda sering menjadi kabur?'],
            ['kode_gejala' => 'G04', 'nama_gejala' => 'Sesak Napas', 'pertanyaan' => 'Apakah Anda mengalami kesulitan bernapas atau sesak napas?'],
            ['kode_gejala' => 'G05', 'nama_gejala' => 'Palpitasi (Jantung berdebar)', 'pertanyaan' => 'Apakah Anda merasa jantung berdebar lebih cepat dari biasanya?'],
            ['kode_gejala' => 'G06', 'nama_gejala' => 'Nafas Pendek', 'pertanyaan' => 'Apakah Anda mudah terengah-engah saat melakukan aktivitas ringan?'],
            ['kode_gejala' => 'G07', 'nama_gejala' => 'Trombosis Vena (Pembekuan darah di vena)', 'pertanyaan' => 'Apakah Anda mengalami pembengkakan atau nyeri pada kaki akibat pembekuan darah?'],
            ['kode_gejala' => 'G08', 'nama_gejala' => 'Lemah, Lesu, dan Mudah Lelah', 'pertanyaan' => 'Apakah Anda merasa lemah, lesu, atau mudah lelah meskipun tidak banyak beraktivitas?'],
            ['kode_gejala' => 'G09', 'nama_gejala' => 'Pucat', 'pertanyaan' => 'Apakah kulit Anda tampak lebih pucat dari biasanya?'],
            ['kode_gejala' => 'G10', 'nama_gejala' => 'Mukosa Pucat', 'pertanyaan' => 'Apakah bagian dalam kelopak mata atau mulut Anda terlihat pucat?'],
            ['kode_gejala' => 'G11', 'nama_gejala' => 'Koilonychia (Kuku melengkung seperti sendok)', 'pertanyaan' => 'Apakah kuku Anda berbentuk cekung seperti sendok?'],
            ['kode_gejala' => 'G12', 'nama_gejala' => 'Pika (Keinginan makan benda yang bukan makanan)', 'pertanyaan' => 'Apakah Anda memiliki keinginan untuk makan benda yang bukan makanan, seperti tanah atau kertas?'],
            ['kode_gejala' => 'G13', 'nama_gejala' => 'Ikterus (Kuning pada kulit dan mata)', 'pertanyaan' => 'Apakah kulit atau bagian putih mata Anda terlihat menguning?'],
            ['kode_gejala' => 'G14', 'nama_gejala' => 'Neutropenia (Rendahnya sel darah putih)', 'pertanyaan' => 'Apakah Anda sering terkena infeksi atau demam tanpa sebab yang jelas?'],
            ['kode_gejala' => 'G15', 'nama_gejala' => 'Kepala Terasa Ringan', 'pertanyaan' => 'Apakah Anda sering merasa kepala ringan atau seperti melayang?'],
            ['kode_gejala' => 'G16', 'nama_gejala' => 'BAB Berwarna Hitam', 'pertanyaan' => 'Apakah Anda pernah buang air besar dengan warna hitam pekat?'],
            ['kode_gejala' => 'G17', 'nama_gejala' => 'Splenomegali (Pembesaran limpa)', 'pertanyaan' => 'Apakah Anda merasakan nyeri atau rasa penuh di perut kiri atas?'],
            ['kode_gejala' => 'G18', 'nama_gejala' => 'Urin Gelap (Coklat Seperti Teh)', 'pertanyaan' => 'Apakah urin Anda berwarna gelap seperti teh?'],
            ['kode_gejala' => 'G19', 'nama_gejala' => 'Kesemutan', 'pertanyaan' => 'Apakah Anda sering mengalami kesemutan di tangan atau kaki?'],
            ['kode_gejala' => 'G20', 'nama_gejala' => 'Pendarahan', 'pertanyaan' => 'Apakah Anda mengalami pendarahan yang tidak biasa atau sulit berhenti?'],
        ]);

        $this->call(RuleSeeder::class);
        $this->call([CfPakarSeeder::class,]);
    }
}
