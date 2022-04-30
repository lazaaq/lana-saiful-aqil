<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'project_category_id' => 1,
            'title' => 'Sistem Kesehatan dan Keselamatan Rumah Sakit',
            'description' => 'Di pertengahan 2021, saya dan dua teman saya diberi tugas projek oleh dosen saya untuk membuat Sistem Informasi K3 Rumah Sakit atau disingkat SIK3RS. SIK3RS adalah sistem yang terdiri dari Aplikasi Web Admin, Aplikasi Android, dan API untuk Android. Di project ini saya berperan dalam pembuatan aplikasi web admin (Menggunakan laravel), dan pembuatan API untuk Android (Menggunakan Laravel Sanctum).',
            'demo' => 'https://drive.google.com/file/d/1OnoKEo0PoMIBnzUDPNNZVV86n5EFK_5u/view?usp=sharing',
        ]);
        Project::create([
            'project_category_id' => 1,
            'title' => 'Company Profile Sekolah',
            'description' => 'Pada bulan oktober 2021, saya mendapat klien yang merupakan instansi sekolah di Tegal, Jawa Tengah. Sekolah tersebut bernama SMAIT Luqman Al Hakim. Saya diamanahi untuk membuat website company profile yang meliputi menu beranda, profil sekolah, prestasi siswa, kolom guru, fasilitas sekolah, berita terbaru, galeri, dan kontak.

            Selain membuat company profile, saya juga membuat sistem PPDB Online untuk pendaftaran peserta didik baru di sekolah tersebut (Untuk selengkapnya ada di bawah). Dan juga, selain membuat disisi backend, saya juga membuat disisi frontend. Stack yang saya gunakan di sisi frontend adalah HTML CSS Javascript sederhana. Sedangkan di sisi backend saya menggunakan Laravel.',
            'demo' => 'https://drive.google.com/file/d/1OnoKEo0PoMIBnzUDPNNZVV86n5EFK_5u/view?usp=sharing',
        ]);
        Project::create([
            'project_category_id' => 1,
            'title' => 'Sistem Penerimaan Peserta Didik Baru Sekolah',
            'description' => 'Seperti yang telah saya singgung diatas, saya juga membuat sistem PPDB Online untuk pendaftaran peserta didik baru. Flow-nya sederhana, user siswa akan mendaftar akun baru dengan menyertakan biodata dari siswa, lalu akan diarahkan ke login. Setelah login berhasil, maka user akan diarahkan ke “timeline” dari PPDB. User akan diminta membayar biaya pendaftaran (melalui transfer), melengkapi berkas, tes seleksi, dan lain sebagainya sesuai dengan timeline yang telah ditentukan.',
        ]);
        Project::create([
            'project_category_id' => 1,
            'title' => 'Database Alumni Sekolah',
            'description' => 'Website database alumni sekolah yang saya buat adalah website sekolah MAN Insan Cendekia Pekalongan. Di dalam nya terdapat data data alumni peserta didik Sekolah MAN Insan Cendekia Pekalongan, mulai dari nama lengkap, jurusan kuliah, nama angkatan, kontak, foto profil, dan banyak sebagainya. Tujuan dari pembuatan website ini adalah untuk memudahkan adik kelas MAN Insan Cendekia Pekalongan untuk menghubungi kakak kelasnya yang telah berkuliah, sehingga dapat mendiskusikan mengenai kelanjutan studi dari adik kelas tersebut. Karena kebanyakan adik kelas di SMA masih bingung dengan pilihan karir nya di masa depan. Dengan adanya website ini, mudah mudahan dapat membantu adik kelas untuk berkomunikasi dengan alumni yang telah berkuliah. Untuk website nya sendiri sudah online dan bisa digunakan oleh masyarakat umum.',
            'website' => 'https://iaicp.xyz/login.php',
        ]);
        Project::create([
            'project_category_id' => 1,
            'title' => 'Sigma Hartek',
            'description' => 'Landing Page',
            'website' => 'http://sigma-hartek.herokuapp.com/index.html',
        ]);
        Project::create([
            'project_category_id' => 1,
            'title' => 'Forklift Karuniamas',
            'description' => 'Landing Page',
            'website' => 'http://karuniamasforklift.com/',
        ]);
        Project::create([
            'project_category_id' => 1,
            'title' => 'Kelapa Indonesia',
            'description' => 'Landing Page',
            'website' => 'https://kelapaindonesia.herokuapp.com/',
        ]);
        Project::create([
            'project_category_id' => 1,
            'title' => 'Restaurant',
            'description' => 'Landing Page',
            'code' => 'https://github.com/lazaaq/compro-restaurant',
        ]);
        Project::create([
            'project_category_id' => 1,
            'title' => 'Livelihood Online Store',
            'description' => 'Landing Page',
            'website' => 'https://liveligang.github.io/',
        ]);
    }
}
