<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsAndEventsSeeder extends Seeder
{
    public function run(): void
    {
        // Seed berita
        DB::table('news_and_events')->insert([
            [
                'title' => 'Peluncuran Program Beasiswa Baru',
                'slug' => Str::slug('Peluncuran Program Beasiswa Baru'),
                'image' => 'beasiswa.jpg',
                'content' => "Universitas membuka program beasiswa baru untuk mahasiswa berprestasi di berbagai bidang akademik maupun non-akademik.
                Program ini bertujuan untuk memberikan kesempatan kepada mahasiswa agar dapat melanjutkan studi dengan dukungan finansial yang memadai.
                Selain itu, beasiswa ini juga memberikan pelatihan pengembangan diri, mentoring, dan kesempatan magang di perusahaan mitra.
                Pendaftaran dibuka mulai 1 Juni hingga 30 Juni 2025 melalui portal resmi universitas.
                Syarat utama pendaftar adalah mahasiswa aktif dengan IPK minimal 3.5, serta aktif dalam kegiatan organisasi atau sosial.
                Dengan adanya program ini, universitas berharap dapat mencetak generasi unggul yang siap menghadapi tantangan global.",
                'status' => 'published',
                'category' => 'news',
                'category_event' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Kegiatan Bakti Sosial Mahasiswa',
                'slug' => Str::slug('Kegiatan Bakti Sosial Mahasiswa'),
                'image' => 'baksos.jpg',
                'content' => "Mahasiswa dari berbagai fakultas melaksanakan kegiatan bakti sosial di Desa Kediri sebagai bentuk pengabdian kepada masyarakat.
                Kegiatan ini meliputi pengobatan gratis, pembagian sembako, penyuluhan kesehatan, serta pelatihan kewirausahaan untuk warga setempat.
                Acara ini mendapat apresiasi tinggi dari warga desa karena dinilai membantu meningkatkan kesejahteraan masyarakat.
                Menurut ketua panitia, kegiatan ini juga menjadi ajang untuk melatih kepedulian sosial mahasiswa agar lebih peka terhadap lingkungan sekitar.
                Universitas berencana menjadikan bakti sosial sebagai agenda rutin tahunan dengan skala yang lebih besar pada tahun berikutnya.",
                'status' => 'published',
                'category' => 'news',
                'category_event' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Seed event
        DB::table('news_and_events')->insert([
            [
                'title' => 'Seminar Nasional Teknologi Informasi',
                'slug' => Str::slug('Seminar Nasional Teknologi Informasi'),
                'image' => 'seminar-it.jpg',
                'content' => "Seminar nasional ini menghadirkan pakar teknologi dari berbagai universitas dan industri untuk membahas perkembangan terbaru dalam bidang teknologi informasi.
                Topik utama meliputi kecerdasan buatan (AI), big data, keamanan siber, serta transformasi digital di sektor pendidikan dan industri.
                Acara ini akan berlangsung selama dua hari dengan format hybrid, yaitu tatap muka di auditorium kampus dan online melalui platform Zoom.
                Peserta akan mendapatkan sertifikat resmi, materi presentasi, serta kesempatan untuk berdiskusi langsung dengan narasumber.
                Seminar ini terbuka untuk mahasiswa, dosen, praktisi, dan masyarakat umum yang tertarik dengan isu-isu teknologi.
                Universitas berharap acara ini dapat memperluas wawasan peserta dan memperkuat kolaborasi akademik dengan dunia industri.",
                'status' => 'published',
                'category' => 'event',
                'category_event' => 'akademik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Festival Seni Kampus',
                'slug' => Str::slug('Festival Seni Kampus'),
                'image' => 'festival-seni.jpg',
                'content' => "Festival Seni Kampus merupakan acara tahunan yang mempertemukan berbagai komunitas seni mahasiswa, mulai dari musik, tari, teater, hingga seni rupa.
                Tahun ini, festival akan menghadirkan penampilan spesial dari band lokal Kediri serta pameran karya seni digital mahasiswa.
                Selain itu, terdapat juga lomba mural, workshop fotografi, dan bazar kuliner kreatif yang dapat dinikmati oleh seluruh pengunjung.
                Acara ini bertujuan untuk mengembangkan kreativitas mahasiswa sekaligus mempererat kebersamaan antar fakultas.
                Festival akan dilaksanakan selama tiga hari di lapangan utama kampus dengan konsep panggung terbuka.
                Diharapkan festival ini dapat menjadi wadah ekspresi seni yang inklusif dan memperkuat identitas budaya kampus.",
                'status' => 'draft',
                'category' => 'event',
                'category_event' => 'non_akademik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
