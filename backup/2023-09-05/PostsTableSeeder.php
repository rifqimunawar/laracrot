<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Lama Tak Terdengar, PMII Rayon Teknik Kembali Melaksanakan Diskusi Senja Di Tempat Tak Terduga',
                'slug' => 'lama-tak-terdengar-pmii-rayon-teknik-kembali-melaksanakan-diskusi-senja-di-tempat-tak-terduga',
                'content' => '<p><strong>PMII Rayon Teknik</strong>-kembali menggelar Diskusi Senja dengan tema yang menarik, \\"Paradigma PMII\\". Diskusi yang dilaksanakan pada sore hari di Gedung Pasca Sarjana Lantai 2 ini dihadiri oleh kader-kader PMII Teknik. Diskusi tersebut berlangsung selama beberapa jam sampai pada pukul 17.00 WIB.</p><p>Pemateri pada diskusi kali ini adalah Ilyas Khairul Alimnis, seorang kader Mujahid dari PMII Rayon Teknik yang kini telah sukses sebagai seorang pengusaha. Sahabat Ilyas Khairul Alimnis memaparkan pandangannya tentang paradigma PMII yang sejalan dengan kondisi zaman. Dalam diskusinya, sahabat Ilyas memaparkan pentingnya PMII sebagai organisasi kaderisasi mahasiswa yang mampu memberikan kontribusi positif bukan hanya di lingkungan kampus melainkan juga bagi bangsa dan negara.</p><p>Diskusi Senja kali ini juga dihadiri oleh sahabati Elisnawati sebagai moderator. Sahabat Elisnawa berhasil memimpin diskusi dengan lancar dan mampu mengajak para peserta diskusi untuk berpartisipasi aktif dalam diskusi tersebut.</p><p>Dalam diskusi ini, para peserta diajak untuk membahas peran PMII dalam mengatasi berbagai persoalan sosial yang sedang dihadapi oleh bangsa dan negara. Para anggota dan kader juga membahas tentang pentingnya menjaga komunikasi yang baik dengan pihak-pihak terkait dan membangun jaringan organisasi yang kuat.</p><p>Ketua PMII Rayon Teknik, Sahabat Agil Abdul Gandi Kusnadi, mengungkapkan kegembiraannya atas terselenggaranya Diskusi Senja ini. \\"Kami sangat senang dapat menggelar Diskusi Senja kembali setelah sekian lama tidak melakukan kegiatan serupa. Kami berharap diskusi ini dapat memberikan wawasan baru bagi para anggota maupun kader PMII Rayon Teknik dan meningkatkan semangat kader-kader PMII untuk terus berkontribusi bagi bangsa dan negara,\\" ujarnya.</p><p>Diskusi Senja PMII Rayon Teknik ini diharapkan dapat menjadi momen yang bermanfaat bagi para anggota maupun kader PMII Rayon Teknik dan dapat memotivasi kader-kader PMII untuk terus berproses. Semoga kegiatan seperti ini dapat terus diadakan di masa yang akan datang dan dapat memberikan manfaat yang besar bagi organisasi dan masyarakat.</p>',
                'image' => 'blog_-1685008925.jpeg',
                'category_id' => 1,
                'user_id' => 1,
                'views' => 116,
                'active' => 1,
                'created_at' => '2023-05-10 06:03:40',
                'updated_at' => '2023-07-10 10:29:49',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Inovatif! Raie Aswajjillah Menjadi Juara dalam Kompetisi PolarDB Global Hackathon 2023 Kategori Innovation Award dengan Menciptakan Platform Web Devwork',
                'slug' => 'inovatif-raie-aswajjillah-menjadi-juara-dalam-kompetisi-polardb-global-hackathon-2023-kategori-innovation-award-dengan-menciptakan-platform-web-devwork',
                'content' => '<p><strong>PMII Rayon Teknik</strong> - PolarDB Global Hackathon 2023 telah berakhir, dan Raie Aswajjillah kader PMII Rayon Teknik berhasil meraih juara dalam kategori \\"Innovation Award\\" dari kompetisi tersebut! Lomba hackathon yang diselenggarakan oleh Alibaba Cloud Tianchi ini menghadirkan 3155 tim dari 33 negara dan wilayah yang berpartisipasi serta menggunakan PolarDB dan produk-produk Alibaba Cloud lainnya untuk membangun solusi inovatif.</p><p>Di antara 3155 tim tersebut, Raie Aswajjillah berhasil meraih juara dengan menciptakan aplikasi web Devwork. Devwork adalah platform aplikasi web yang menyatukan para pengembang, pekerja, freelancer, individu yang terampil, dan orang biasa untuk berkolaborasi satu sama lain untuk saling menguntungkan. Siapa saja dapat berkontribusi pada aplikasi ini dengan memposting apa saja yang diinginkan, atau menjadi pengembang yang terampil dan bekerja dengan semua orang di dalam aplikasi ini.</p><p>Keberhasilan Raie Aswajjillah patut diacungi jempol, terutama karena kompetisi hackathon yang diikuti oleh ribuan tim dari seluruh dunia. Melalui aplikasi web Devwork, Raie mampu menciptakan sebuah solusi yang unik dan inovatif, dengan menawarkan kesempatan bagi para pengembang dan pekerja untuk bekerja sama dalam sebuah platform terpadu. Selain itu, aplikasi ini juga memberikan kesempatan bagi individu yang terampil untuk menawarkan jasanya kepada pengguna lain dalam rangka meningkatkan keterampilan dan memperoleh penghasilan tambahan.</p><p>Raie merasa sangat bersyukur atas pencapaian yang telah ia raih dan mengungkapkan rasa terima kasih kepada Allah SWT, Alibaba Cloud, Tianchi, dan juga CodePolitan atas penyelenggaraan kompetisi yang luar biasa ini. &nbsp;<i>\\"Tidak pernah terpikirkan bahwa saya akan memenangkan kompetisi ini, ini adalah pertama kalinya saya mendapatkan penghargaan dari kompetisi tingkat internasional bergengsi, Alhamdulillah, saya sangat bersyukur atas pencapaian yang telah aku raih.\\"</i> ungkapnya saat dihubungi melalui chat WhatsApps</p><p>Selamat kepada Raie Aswajjillah atas kemenangannya di PolarDB Global Hackathon 2023. Dengan inovasi tersebut, Raie membuktikan bahwa teknologi dapat digunakan untuk membawa perubahan positif bagi masyarakat. Kita berharap bahwa aplikasi web Devwork yang dibuat oleh Raie Aswajjillah akan terus berkembang dan memberikan manfaat bagi semua orang yang menggunakannya.</p><p>Selengkapnya kunjungi link dibawah, untuk melihat dan menggunakan aplikasi yang telah dibuat oleh sahabat Raie:</p><p><a href=\\"https://www.alibabacloud.com/blog/the-winners-of-the-polardb-global-hackathon-2023-have-been-announced_599833\\">Pengumuman Juara</a></p><p><a href=\\"https://www.alibabacloud.com/id/developer/projecthub\\">Showcase Project</a></p><p><a href=\\"https://www.alibabacloud.com/blog/devwork-a-platform-for-developers-workers-and-individuals_599896?spm=a3c0i.28117407.8054513620.17.6c952110ZNz0RJ\\">Devwork</a></p>',
                'image' => 'blog_-1685009734.jpg',
                'category_id' => 1,
                'user_id' => 1,
                'views' => 74,
                'active' => 1,
                'created_at' => '2023-05-13 08:35:22',
                'updated_at' => '2023-07-11 22:10:44',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'PMII Rayon Teknik Sukses Menggelar Taman Baca',
                'slug' => 'pmii-rayon-teknik-sukses-menggelar-taman-baca',
            'content' => '<p style="text-align:justify;"><span style="background-color:rgb(247,247,248);color:rgb(55,65,81);"><strong>Bandung-</strong>Demi mendorong minat baca dan literasi di kalangan kader PMII Uninus, PMII Rayon Teknik menggelar taman baca. Acara yang diselenggarakan pada tanggal 31 Mei 2023 di pelataran Rumput Surga, kampus Universitas Islam Nusantara berhasil menarik perhatian banyak kader PMII dari berbagai Rayon.</span></p><p style="text-align:justify;"><span style="background-color:rgb(247,247,248);color:rgb(55,65,81);">Taman Baca ini merupakan salah satu proyek yang diinisiasi oleh PMII Rayon Teknik dengan tujuan untuk meningkatkan kesadaran akan pentingnya membaca dan mengembangkan keterampilan literasi di kalangan mahasiswa. Dalam era digital seperti sekarang ini, di mana informasi mudah diakses melalui internet, minat baca seringkali menurun. Oleh karena itu, PMII Rayon Teknik merasa penting untuk mengembangkan budaya literasi di kalangan kader PMII Uninus.</span></p><p style="text-align:justify;"><span style="background-color:rgb(247,247,248);color:rgb(55,65,81);">Acara Taman Baca ini diisi dengan berbagai kegiatan menarik, mulai dari pameran buku, membaca bersama, hingga diskusi buku. Pameran buku menyajikan beragam genre mulai dari fiksi, non-fiksi, hingga buku-buku akademik. Mahasiswa dan kader PMII Uninus dapat melihat dan memilih buku-buku yang menarik minat mereka. Selain itu, diskusi buku memberikan kesempatan bagi mahasiswa untuk berbagi pengalaman membaca dan saling merekomendasikan buku yang menarik.</span></p><p style="text-align:justify;"><span style="background-color:rgb(247,247,248);color:rgb(55,65,81);">Ketua PMII Rayon Teknik, Agil Abdul Gani Kusnadi, mengatakan, “Kami sangat senang melihat antusiasme mahasiswa, mulai dari mahasiswa biasa hingga kader PMII dari berbagai Rayon hadir dalam acara Taman Baca ini. Melalui kegiatan ini, kami berharap dapat meningkatkan minat baca dan literasi di kalangan mahasiswa maupun kader PMII Uninus. Literasi adalah kunci untuk pengembangan diri dan peningkatan pemahaman terhadap dunia di sekitar kita.”</span></p><figure class="image"><img src="/userfiles/images/Screenshot_20230601_163023_com_whatsapp_edit_18382835981048.jpg"></figure><p style="text-align:justify;"><span style="background-color:rgb(247,247,248);color:rgb(55,65,81);">Taman Baca ini juga merupakan upaya PMII Rayon Teknik untuk mendukung program Komisariat PMII Uninus dalam upaya meningkatkan kualitas kader PMII Uninus. Dengan menggelar acara ini, PMII Rayon Teknik berharap dapat memberikan kontribusi positif dalam peningkatan minat baca dan kemampuan literasi di wilayah Kampus Universitas Islam Nusantara.</span></p><p style="text-align:justify;"><span style="background-color:rgb(247,247,248);color:rgb(55,65,81);">Acara Taman Baca yang sukses ini mendapat apresiasi dari para mahasiswa dan kader PMII Uninus. Mereka berharap acara serupa dapat diadakan secara berkala untuk terus memperkuat minat baca dan literasi di kalangan Kampus Universitas Islam Nusantara.</span></p>',
                'image' => 'blog_-1685612179.jpg',
                'category_id' => 1,
                'user_id' => 1,
                'views' => 60,
                'active' => 1,
                'created_at' => '2023-06-01 09:27:21',
                'updated_at' => '2023-07-11 09:21:21',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Kader PMII Uninus Hadiri Harlah PMII ke-63 di Solo dengan Antusiasme Tinggi',
                'slug' => 'kader-pmii-uninus-hadiri-harlah-pmii-ke-63-di-solo-dengan-antusiasme-tinggi',
            'content' => '<p style="text-align:justify;"><strong>Solo, 23 Juni 2023</strong> - Pergerakan Mahasiswa Islam Indonesia (PMII) Komisariat Universitas Islam Nusantara (Uninus) Cabang Kota Bandung dengan penuh antusiasme mengirimkan 120 kadernya untuk menghadiri perayaan Puncak Harlah PMII ke-63 yang diselenggarakan di Kota Solo.</p><p style="text-align:justify;">Perayaan Harlah PMII ke-63 di Solo merupakan momen yang ditunggu-tunggu oleh seluruh anggota PMII di Indonesia. Acara ini merupakan wadah untuk merayakan sejarah panjang perjuangan PMII dalam memajukan keadilan dan kesejahteraan untuk Bangsa Indonesia. Selain itu, perayaan Harlah juga menjadi ajang penting untuk memperkuat persatuan dan persaudaraan antara kader-kader PMII dari berbagai daerah.</p><p style="text-align:justify;">Dalam acara puncak perayaan Harlah, Ketua PB PMII, Muhammad Abdullah Syukri, hadir untuk memberikan orasi pergerakan kepada para kader PMII dari berbagai daerah di Indonesia. Dalam orasinya, Abdullah Syukri mengapresiasi dedikasi dan perjuangan PMII dalam mewujudkan perubahan yang positif bagi Bangsa dan Negara.</p><p style="text-align:justify;">Tak hanya itu, perayaan Harlah PMII ke-63 ini juga dihadiri oleh Menteri Pertahanan Republik Indonesia Letnan Jenderal (Letjen) TNI (Purn) Prabowo Subianto yang turut memberikan sambutan dan pesan kepada kader-kader PMII. Kehadiran Menteri Pertahanan merupakan pengakuan terhadap pentingnya peran mahasiswa dalam membangun bangsa dan negara.</p><p style="text-align:justify;">Tidak ketinggalan, Walikota Surakarta, Gibran Rakabuming Raka turut hadir dalam acara tersebut untuk memberikan apresiasi atas kontribusi PMII untuk Bangsa dan Negara.</p><p style="text-align:justify;">Ketua PMII Uninus, sahabat Riki Ramdan mengungkapkan kegembiraannya melihat antusiasme kader-kader PMII Uninus dalam mengikuti perayaan Harlah. "Kami bangga dengan semangat dan semakin tingginya partisipasi kader PMII Uninus dalam perayaan Harlah PMII ke-63 di Solo. Mereka adalah agen perubahan yang siap berkontribusi nyata dalam membangun masyarakat yang lebih adil dan sejahtera," ujar sahabat Riki.</p><p style="text-align:justify;">Kehadiran kader PMII Uninus dalam perayaan Harlah PMII ke-63 di Solo menjadi bukti komitmen terhadap organisasi dan misi yang diemban. Kader PMII Uninus datang dengan penuh semangat dan determinasi untuk aktif membawa perubahan yang lebih baik Bangsa dan Negara Kesatuan Republik Indonesia.</p>',
                'image' => 'Kader PMII Uninus Hadiri Harlah PMII ke-63 di Solo dengan Antusiasme Tinggi_PMII_UNINUS-1689015076.jpg',
                'category_id' => 1,
                'user_id' => 1,
                'views' => 69,
                'active' => 1,
                'created_at' => '2023-06-24 01:51:16',
                'updated_at' => '2023-07-11 21:38:05',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Ketua PMII Komisariat Uninus Sibuk Membuat Konten Receh di Media Sosial Selama Liburan',
                'slug' => 'ketua-pmii-komisariat-uninus-sibuk-membuat-konten-receh-di-media-sosial-selama-liburan',
            'content' => '<p style="text-align:justify;"><strong>Uninus, 11 Juli 2023</strong> - Ketua Pergerakan Mahasiswa Islam Indonesia (PMII) Komisariat Universitas Nusantara (Uninus), Sahabat Riki Ramdan, memilih untuk mengisi waktu liburannya dengan kegiatan yang tidak biasa. Bukan mengunjungi tempat wisata atau berpartisipasi dalam kegiatan sosial, Sahabat Riki justru sibuk membuat konten receh di media sosial.</p><p style="text-align:justify;">Dalam era digital yang semakin berkembang pesat, media sosial telah menjadi platform yang populer bagi banyak orang untuk berbagi pengalaman, ide, dan konten-konten kreatif. Hal ini pun tidak luput dari perhatian Riki, yang mengambil kesempatan ini untuk menghibur pengikutnya melalui konten-konten yang tidak terduga.</p><p style="text-align:justify;">Sahabat Riki atau yang biasa dipanggil Tum Iki, mahasiswa jurusan Teknik Informatika Uninus yang juga terpilih sebagai Ketua PMII Komisariat Uninus pada awal periode kepengurusan tahun ini, menunjukkan sisi kreatifnya dengan membuat konten receh yang mengundang tawa di media sosial. Konten-konten yang ia buat meliputi inspiratif, meme lucu, video singkat, dan parodi mengenai kehidupan sehari-hari dan yang sangat relatable bagi banyak orang.</p><p style="text-align:justify;">Bukan hanya membuat konten receh, Tum Iki juga berusaha untuk menyampaikan pesan-pesan positif dan motivasi melalui kontennya. Ia berharap bahwa dengan melibatkan diri dalam dunia digital, ia dapat menginspirasi dan menghibur banyak orang, terutama para mahasiswa yang tengah menjalani masa liburan.</p><p style="text-align:justify;">Meski terlihat sebagai kegiatan yang sederhana, Tum Iki tidak melupakan tanggung jawabnya sebagai ketua PMII Komisariat Uninus. Ia tetap menjalankan tugas-tugasnya dalam menjalankan kegiatan-kegiatan di PMII dan membangun solidaritas di antara kader-kader PMII. Aktivitas membuat konten di media sosial hanyalah salah satu cara Tum Iki untuk melepaskan kepenatan dan mengisi waktu liburannya.</p><p style="text-align:justify;">Melalui kreativitasnya dalam menciptakan konten receh, Sahabat Riki telah berhasil menarik perhatian netizen. Banyak pengikutnya yang mengapresiasi konten-konten yang dibuatnya, dengan mengungkapkan rasa kagum dan kegembiraan mereka melalui komentar dan like.</p><p style="text-align:justify;">Tum Iki berharap bahwa kontennya dapat memberikan semangat dan keceriaan kepada siapa pun yang melihatnya. Ia juga berencana untuk terus mengembangkan kemampuannya dalam menciptakan konten yang lebih menarik dan bermakna di masa depan.</p><p style="text-align:justify;">Sementara itu, reaksi dari anggota PMII Komisariat Uninus terhadap kegiatan baru Tum Iki ini cukup beragam. Ada yang menganggapnya sebagai kegiatan yang tidak produktif, namun ada juga yang menyambut positif dan melihatnya sebagai bentuk kreativitas dan hiburan yang menyenangkan.</p><p style="text-align:justify;">Dengan semakin berkembangnya media sosial sebagai platform untuk berbagi dan berinteraksi, tidak jarang melihat individu-individu seperti Sahabat Riki yang menggunakan kesempatan ini untuk mengekspresikan diri dan berbagi konten kreatif. Semoga, kegiatan semacam ini dapat memberikan semangat dan keceriaan dalam kehidupan sehari-hari kita.</p>',
                'image' => 'blog_-1689054898.png',
                'category_id' => 2,
                'user_id' => 1,
                'views' => 4,
                'active' => 0,
                'created_at' => '2023-07-11 12:54:58',
                'updated_at' => '2023-07-11 13:04:07',
            ),
        ));
        
        
    }
}