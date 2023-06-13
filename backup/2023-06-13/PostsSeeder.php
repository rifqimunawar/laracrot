<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => 'Lama Tak Terdengar, PMII Rayon Teknik Kembali Melaksanakan Diskusi Senja Di Tempat Tak Terduga',
            'slug' => 'lama-tak-terdengar-pmii-rayon-teknik-kembali-melaksanakan-diskusi-senja-di-tempat-tak-terduga',
            'content' => '<p><strong>PMII Rayon Teknik</strong>-kembali menggelar Diskusi Senja dengan tema yang menarik, \"Paradigma PMII\". Diskusi yang dilaksanakan pada sore hari di Gedung Pasca Sarjana Lantai 2 ini dihadiri oleh kader-kader PMII Teknik. Diskusi tersebut berlangsung selama beberapa jam sampai pada pukul 17.00 WIB.</p><p>Pemateri pada diskusi kali ini adalah Ilyas Khairul Alimnis, seorang kader Mujahid dari PMII Rayon Teknik yang kini telah sukses sebagai seorang pengusaha. Sahabat Ilyas Khairul Alimnis memaparkan pandangannya tentang paradigma PMII yang sejalan dengan kondisi zaman. Dalam diskusinya, sahabat Ilyas memaparkan pentingnya PMII sebagai organisasi kaderisasi mahasiswa yang mampu memberikan kontribusi positif bukan hanya di lingkungan kampus melainkan juga bagi bangsa dan negara.</p><p>Diskusi Senja kali ini juga dihadiri oleh sahabati Elisnawati sebagai moderator. Sahabat Elisnawa berhasil memimpin diskusi dengan lancar dan mampu mengajak para peserta diskusi untuk berpartisipasi aktif dalam diskusi tersebut.</p><p>Dalam diskusi ini, para peserta diajak untuk membahas peran PMII dalam mengatasi berbagai persoalan sosial yang sedang dihadapi oleh bangsa dan negara. Para anggota dan kader juga membahas tentang pentingnya menjaga komunikasi yang baik dengan pihak-pihak terkait dan membangun jaringan organisasi yang kuat.</p><p>Ketua PMII Rayon Teknik, Sahabat Agil Abdul Gandi Kusnadi, mengungkapkan kegembiraannya atas terselenggaranya Diskusi Senja ini. \"Kami sangat senang dapat menggelar Diskusi Senja kembali setelah sekian lama tidak melakukan kegiatan serupa. Kami berharap diskusi ini dapat memberikan wawasan baru bagi para anggota maupun kader PMII Rayon Teknik dan meningkatkan semangat kader-kader PMII untuk terus berkontribusi bagi bangsa dan negara,\" ujarnya.</p><p>Diskusi Senja PMII Rayon Teknik ini diharapkan dapat menjadi momen yang bermanfaat bagi para anggota maupun kader PMII Rayon Teknik dan dapat memotivasi kader-kader PMII untuk terus berproses. Semoga kegiatan seperti ini dapat terus diadakan di masa yang akan datang dan dapat memberikan manfaat yang besar bagi organisasi dan masyarakat.</p>',
            'image' => "blog_-1683723820.jpeg",
            'category_id' => "2",
            'user_id' => "1",
            'views' => "82",
            'active' => "1",
            'created_at' => '2023-05-10 06:03:40',
            'updated_at' => '2023-05-16 04:59:59',
        ]);
    }
}
