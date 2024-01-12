<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndicatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $indicators = collect([
            (object)['instrument' => 1, 'code' => 'A', 'desc' => 'Rencana pembelajaran guru belum menggambarkan proses pembelajaran yang efektif serta belum berbasis keunggulan Madrasah'],
            (object)['instrument' => 1, 'code' => 'B', 'desc' => 'Rencana pembelajaran guru belum menggambarkan proses pembelajaran yang efektif namun telah berbasis keunggulan Madrasah'],
            (object)['instrument' => 1, 'code' => 'C', 'desc' => 'Rencana pembelajaran guru  sebagian mengindikasikan proses  pembelajaran dilakukan secara efektif namun  belum berbasis keunggulan Madrasah'],
            (object)['instrument' => 1, 'code' => 'D', 'desc' => 'Rencana pembelajaran guru  sebagian mengindikasikan proses  pembelajaran dilakukan secara efektif namun  telah berbasis keunggulan Madrasah'],
            (object)['instrument' => 1, 'code' => 'E', 'desc' => 'Rencana pembelajaran guru telah menggambarkan proses pembelajaran yang efektif namun belum berbasis keunggulan Madrasah'],
            (object)['instrument' => 1, 'code' => 'F', 'desc' => 'Rencana pembelajaran guru telah menggambarkan proses pembelajaran yang efektif dengan memperhatikan basis keunggulan Madrasah'],
            (object)['instrument' => 2, 'code' => 'A', 'desc' => 'Rencana pembelajaran yang disusun oleh guru belum mendukung terlaksananya pembelajaran kontekstual, kebermaknaan, humanis, metakognitif, moderat dan tercapainya misi madrasah'],
            (object)['instrument' => 2, 'code' => 'B', 'desc' => 'Rencana pembelajaran yang disusun oleh guru sebagian telah  mencerminkan pembelajaran kontekstual, bermakna, humanis, metakognitif serta moderat'],
            (object)['instrument' => 2, 'code' => 'C', 'desc' => 'Rencana pembelajaran yang disusun oleh guru telah  mencerminkan pembelajaran kontekstual, bermakna, humanis, '],
            (object)['instrument' => 2, 'code' => 'D', 'desc' => 'Rencana pembelajaran yang disusun oleh guru telah mendukung terlaksananya pembelajaran  kontekstual, bermakna, humanis, metakognitif '],
            (object)['instrument' => 2, 'code' => 'E', 'desc' => 'Rencana pembelajaran yang disusun oleh guru telah mendukung terlaksananya pembelajaran  kontekstual, bermakna, humanis, metakognitif serta moderat'],
            (object)['instrument' => 2, 'code' => 'F', 'desc' => 'Rencana pembelajaran yang disusun oleh guru telah mendukung terlaksananya pembelajaran  kontekstual, bermakna, humanis, metakognitif serta moderat dan tercapainya misi madrasah'],
            (object)['instrument' => 3, 'code' => 'A', 'desc' => 'Rencana pembelajaran yang disusun oleh guru belum mendukung terlaksananya pembelajaran abad 21  serta belum mendukung pengembangan  pendidikan karakter dan akhlaqul Karimah '],
            (object)['instrument' => 3, 'code' => 'B', 'desc' => 'Rencana pembelajaran yang disusun oleh guru sebagian mendukung terlaksananya pembelajaran abad 21  dengan indikasi  aktifitas pengembangan pendidikan karakter dan Akhlaqul Karimah'],
            (object)['instrument' => 3, 'code' => 'C', 'desc' => 'Rencana pembelajaran yang disusun oleh guru  telah mendukung terlaksananya pembelajaran abad 21  dengan indikasi  aktifitas pengembangan pendidikan karakter dan Akhlaqul Karimah'],
            (object)['instrument' => 4, 'code' => 'A', 'desc' => 'Rencana pembelajaran yang disusun oleh guru belum mendukung terlaksananya pembelajaran abad 21  serta belum mengembangkan Budaya Literasi, numerasi, sains dan sosial budaya'],
            (object)['instrument' => 4, 'code' => 'B', 'desc' => 'Rencana pembelajaran yang disusun oleh guru sebagian telah mendukung terlaksananya pembelajaran abad 21  dengan  mengembangkan Budaya Literasi, '],
            (object)['instrument' => 4, 'code' => 'C', 'desc' => 'Rencana pembelajaran yang disusun oleh guru sebagian telah mendukung terlaksananya pembelajaran abad 21  dengan  mengembangkan Budaya numerasi, '],
            (object)['instrument' => 4, 'code' => 'D', 'desc' => 'Rencana pembelajaran yang disusun oleh guru sebagian telah mendukung terlaksananya pembelajaran abad 21  dengan  mengembangkan Budaya sains'],
            (object)['instrument' => 4, 'code' => 'E', 'desc' => 'Rencana pembelajaran yang disusun oleh guru telah mendukung terlaksananya pembelajaran abad 21  dengan  mengembangkan Budaya literasi, numerasi, sains dan sosial budaya serta sains secara konsisten'],
            (object)['instrument' => 5, 'code' => 'A', 'desc' => 'Rencana pembelajaran yang disusun oleh guru belum mendukung terlaksananya pembelajaran abad 21  serta tidak mengembangkan Berfikir Kritis, kolaboratif, komunikatif dan kreatif'],
            (object)['instrument' => 5, 'code' => 'B', 'desc' => 'Rencana pembelajaran yang disusun oleh guru sebagian telah mendukung terlaksananya pembelajaran abad 21  dengan  mengembangkan Berfikir Kritis'],
            (object)['instrument' => 5, 'code' => 'C', 'desc' => 'Rencana pembelajaran yang disusun oleh guru sebagian telah mendukung terlaksananya pembelajaran abad 21  dengan  mengembangkan Budaya kolaboratif dan komunikatif'],
            (object)['instrument' => 5, 'code' => 'D', 'desc' => 'Rencana pembelajaran yang disusun oleh guru sebagian telah mendukung terlaksananya pembelajaran abad 21  dengan  mengembangkan berfikir kreatif'],
            (object)['instrument' => 5, 'code' => 'E', 'desc' => 'Rencana pembelajaran yang disusun oleh guru telah mendukung terlaksananya pembelajaran abad 21  dengan  mengembangkan Berfikir Kritis, kolaboratif, komunikatif dan kreatif secara konsisten '],
            (object)['instrument' => 6, 'code' => 'A', 'desc' => 'Rencana pembelajaran yang disusun oleh guru belum mendukung terlaksananya pembelajaran abad 21  serta belum mengindikasikan pengembangan kemampuan pemecahan masalah '],
            (object)['instrument' => 6, 'code' => 'B', 'desc' => 'Rencana pembelajaran yang disusun oleh guru sebagian mendukung terlaksananya pembelajaran abad 21  serta telah  mengindikasikan pengembangan kemampuan pemecahan masalah '],
            (object)['instrument' => 6, 'code' => 'C', 'desc' => 'Rencana pembelajaran yang disusun oleh guru  telah mendukung terlaksananya pembelajaran abad 21  serta  mengindikasikan pengembangan kemampuan pemecahan masalah secara konsisten '],
            (object)['instrument' => 7, 'code' => 'A', 'desc' => 'Rencana pembelajaran yang disusun oleh guru belum mendukung implementasi pendekatan  pembelajaran saintifik dengan model pembelajaran Problem solving, Dicovery Learning, Project Base Learning, Inquiry,dan sejenisnya'],
            (object)['instrument' => 7, 'code' => 'B', 'desc' => 'Rencana pembelajaran yang disusun oleh guru sebagian telah mendukung terlaksananya Pendekatan  pembelajaran saintifik  dengan  mengembangkan pembelajaran Problem solving'],
            (object)['instrument' => 7, 'code' => 'C', 'desc' => 'Rencana pembelajaran yang disusun oleh guru sebagian telah mendukung terlaksananya  pendekatan  pembelajaran saintifik  dengan  mengembangkan  model pembelajaran Dicovery Learning'],
            (object)['instrument' => 7, 'code' => 'D', 'desc' => 'Rencana pembelajaran yang disusun oleh guru sebagian telah mendukung terlaksananya pendekatan  pembelajaran saintifik  dengan  mengembangkan  model pembelajaran Project Base Learning'],
            (object)['instrument' => 7, 'code' => 'E', 'desc' => 'Rencana pembelajaran yang disusun oleh guru sebagian telah mendukung terlaksananya pendekatan  pembelajaran saintifik dengan  mengembangkan  model pembelajaran inquiri'],
            (object)['instrument' => 7, 'code' => 'F', 'desc' => 'Rencana pembelajaran yang disusun oleh guru telah mendukung terlaksananya pendekatan  pembelajaran saintifik  dengan  mengembangkan model pembelajaran Problem solving, Dicovery Learning, Project Base Learning, Inquiry,dan sejenisnya secara konsisten'],
            (object)['instrument' => 8, 'code' => 'A', 'desc' => 'Perencanaan pembelajaran yang disusun oleh guru  belum mendukung pemanfaatan teknologi informasi dan/ atau pemanfaatan terhadap sumberdaya yang terdapat dilingkungan sekitar'],
            (object)['instrument' => 8, 'code' => 'B', 'desc' => 'Perencanaan pembelajaran yang disusun oleh guru telah berbasis pemanfaatan teknologi informasi '],
            (object)['instrument' => 8, 'code' => 'C', 'desc' => 'Perencanaan pembelajaran yang disusun oleh guru telah  berbasis pemanfaatan sumberdaya yang terdapat disekitar lingkungan '],
            (object)['instrument' => 8, 'code' => 'D', 'desc' => 'Perencanaan pembelajaran yang disusun oleh guru sebagian  berbasis pemanfaatan teknologi informasi dan/ atau pemanfaatan terhadap sumberdaya yang terdapat dilingkungan sekitar'],
            (object)['instrument' => 8, 'code' => 'E', 'desc' => 'Perencanaan pembelajaran yang disusun oleh guru telah didukung pemanfaatan teknologi informasi dan/ atau pemanfaatan terhadap sumberdaya yang terdapat dilingkungan sekitar secara konsisten'],
            (object)['instrument' => 9, 'code' => 'A', 'desc' => 'Perencanaan pembelajaran yang disusun oleh guru  belum mengintegrasikan penilaian proses pembelajaran dan hasil belajar secara memadai'],
            (object)['instrument' => 9, 'code' => 'B', 'desc' => 'Perencanaan pembelajaran yang disusun oleh guru telah mengintegrasikan penilaian proses yang belum sepenuhnya mencakup seluruh ranah penilaian pembelajaran'],
            (object)['instrument' => 9, 'code' => 'C', 'desc' => 'Perencanaan pembelajaran yang disusun oleh guru telah mengintegrasikan penilaian proses  mencakup seluruh ranah penilaian pembelajaran secara konsisten'],
            (object)['instrument' => 9, 'code' => 'D', 'desc' => 'Perencanaan pembelajaran yang disusun oleh guru telah mengintegrasikan penilaian hasil pembelajaran'],
            (object)['instrument' => 9, 'code' => 'E', 'desc' => 'Perencanaan pembelajaran yang disusun oleh guru telah mengintegrasikan penilaian hasil pembelajaran dilengkapi dengan lampiran rencana penilaian pembelajaran secara terpadu'],
            (object)['instrument' => 9, 'code' => 'F', 'desc' => 'Perencanaan pembelajaran yang disusun oleh guru telah mengintegrasikan penilaian proses pembelajaran dan penilaian hasil pembelajaran dilengkapi dengan lampiran rencana penilaian pembelajaran secara terpadu'],
            (object)['instrument' => 10, 'code' => 'A', 'desc' => 'Proses pembelajaran belum tersaji secara kontekstual, kebermaknaan, humanis, metakognitif dan moderat, Pembelajaran didominasi penyampaian komunikasi satu arah dari guru'],
            (object)['instrument' => 10, 'code' => 'B', 'desc' => 'Proses pembelajaran sebagian sudah memenuhi syarat dari kriteria pembelajaran kontekstual, bermakna, humanis, metakognitif, dan moderat. Kegiatan pembelajaran terlaksana secara antusias'],
            (object)['instrument' => 10, 'code' => 'C', 'desc' => 'Pelaksanaan pembelajaran tersaji dengan antusisme yang tinggi, dilakukan secara kontekstual, memberikan pengalaman bermakna, menghargai potensi humanistik.'],
            (object)['instrument' => 10, 'code' => 'D', 'desc' => 'Pelaksanaan pembelajaran telah mencerminkan pendayagunaan potensi humanistik, memperhatikan proses pembelajaran bermakna, kontekstual, menggabungkan berbagai ide gagasan baru secara harminis'],
            (object)['instrument' => 11, 'code' => 'A', 'desc' => 'Kegiatan pembelajaran masih dilaksanakan secara tradisional, berpusat pada guru dengan pesan pesan karakter dan akhlakul Karimah secara lisan, belum mengindikasikan pembelajaran yang mencerminkan kecakapan abad 21'],
            (object)['instrument' => 11, 'code' => 'B', 'desc' => 'Pelaksanaan pembelajaran sebagian telah mengadaptasikan beberapa metode yang memungkinkan peserta didik turut aktif, dengan penerapan penguatan karakter dan akhlakul Karimah yang belum sepenuhnya menjiwai proses kegiatan pembelajaran'],
            (object)['instrument' => 11, 'code' => 'C', 'desc' => 'Pembelajaran terlaksana secara antusias, memberikan pengalaman yang mengindikasikan kecakapan abad 21 berupa aktifitas komunikasi, kolaborasi serta upaya memunculkan sikap kritis dan kreatif dijiwai dengan penerapan karakter dan akhlakul Karimah secara terpadu'],
            (object)['instrument' => 12, 'code' => 'A', 'desc' => 'Kegiatan pembelajaran belum mengintegrasikan kecakapan abad 21 yang ditandai belum dilakukannya pembiasaan  budaya literasi, numerasi, sains dan sosial budaya'],
            (object)['instrument' => 12, 'code' => 'B', 'desc' => 'Kegiatan pembelajaran telah mendukung sebagian indikasi kecakapan  abad 21  dengan fokus pada pengembangan   Budaya Literasi   namun belum berdampak pada kebiasaan yang dilakukan oleh siswa'],
            (object)['instrument' => 12, 'code' => 'C', 'desc' => 'Kegiatan pembelajaran telah mendukung sebagian indikasi kecakapan  abad 21  dengan fokus pada pengembangan   Budaya sains yang dilakukan secara terpadu dalam kegiatan intrakurikuler'],
            (object)['instrument' => 12, 'code' => 'D', 'desc' => 'Kegiatan pembelajaran telah mendukung sebagian indikasi kecakapan  abad 21  dengan fokus pada pengembangan   Budaya Numerasi  yang dilakukan secara terpadu dalam kegiatan intrakurikuler'],
            (object)['instrument' => 12, 'code' => 'E', 'desc' => 'Kegiatan pembelajaran telah mendukung terpenuhinya kecakapan abad 21  yang dilakukan secara antusias dan terpadu dan memberi dampak kepada terbentuknya budaya baca dan menghasilkan karya literasi seperti majalah dinding  dan karya lainnya'],
            (object)['instrument' => 13, 'code' => 'A', 'desc' => 'Pembelajaran yang dilakukan oleh guru belum mengindikasikan pemenuhan kecakapan  abad 21  yang tercermin  dalam proses pembelajaran yang dilakukan guru lebih banyak menjelaskan dan siswa memperhatikan serta mengerjakan tugas yang diberikan '],
            (object)['instrument' => 13, 'code' => 'B', 'desc' => 'Pembelajaran  belum  sepenuhnya mengindikasikan pemenuhan kecakapan abad 21, pengembangan kritikal thinking baru sebatas pemberian kesempatan kepada siswa secara aktif ( membaca,bertanya,berdiskusi dan menggunakan media yang tersedia)'],
            (object)['instrument' => 13, 'code' => 'C', 'desc' => 'Pembelajaran  belum  sepenuhnya mengindikasikan pemenuhan kecakapan abad 21, pengembangan suasana kelas yang kolaboratif dan komunikatif telah disajikan melalui pengalaman konkrit menyajikan ide ide yang  bermanfaat bagi kehidupan'],
            (object)['instrument' => 13, 'code' => 'D', 'desc' => 'Sebagian aspek yang mengindikasikan pelaksanaan pembelajaran yang mengintegrasikan kecakapan abad 21 telah tersajikan secara baik, antusiasme siswa dalam mengemukakan gagasan dalam bentuk kritikal thinking dan pembinaan kreatifitas melalui pengalaman konkret'],
            (object)['instrument' => 13, 'code' => 'E', 'desc' => 'Proses pembelajaran telah terlaksana sangat baik dengan mengintegrasikan kecakapan abad 21 serta mendukung budaya kreatifitas dan kritikal thinking yang dilakukan secara konsisten dalam bentuk pengalaman konkret, dan bermakna serta memberikan dampak kemampuan siswa dalam memecahkan masalah '],
            (object)['instrument' => 14, 'code' => 'A', 'desc' => 'Guru belum menunjukan proses pembelajaran yang mendukung kecakapan abad 21  yang berdampak kepada terbentuknya kemampuan memecahkan masalah'],
            (object)['instrument' => 14, 'code' => 'B', 'desc' => 'Guru  telah menunjukan sebagian upaya untuk membiasakan peserta didik melalui kecakapan abad 21 serta membina kemampuan memecahkan masalah melalui tugas tugas yang diberikan'],
            (object)['instrument' => 14, 'code' => 'C', 'desc' => 'Pembelajaran yang dilakukan oleh guru telah mencerminkan kemampuan kecakapan abad 21 yang diindikasikan dengan dibinanya kemampuan mengidentifikasi masalah,menganalisis serta secara kreatif mengambil keputusan '],
            (object)['instrument' => 15, 'code' => 'A', 'desc' => 'Guru belum  mengimplementasikan  pendekatan  pembelajaran saintifik  dalam pembelajaran tematik integratif  sehingga belum  mendorong terimplementasikannya model pembelajaran Problem solving, Dicovery Learning, Project Base Learning, Inquiry,dan sejenisnya'],
            (object)['instrument' => 15, 'code' => 'B', 'desc' => 'Guru telah mulai mencoba melaksanakan pembelajaran menggunakan  Pendekatan  pembelajaran saintifik  dengan  mengembangkan pembelajaran Problem solving'],
            (object)['instrument' => 15, 'code' => 'C', 'desc' => 'Guru sebagian telah melaksanakan pembelajaran yang mendukung terlaksananya  pendekatan  pembelajaran saintifik  dengan  mengembangkan  model pembelajaran Dicovery Learning'],
            (object)['instrument' => 15, 'code' => 'D', 'desc' => 'Guru sebagian telah melaksanakan pembelajaran yang mendukung terlaksananya pendekatan  pembelajaran saintifik  dengan  mengembangkan  model pembelajaran Project Base Learning'],
            (object)['instrument' => 15, 'code' => 'E', 'desc' => 'Guru sebagian telah melaksanakan pembelajaran yang mendukung terlaksananya pendekatan  pembelajaran saintifik dengan  mengembangkan  model pembelajaran inquiri'],
            (object)['instrument' => 15, 'code' => 'F', 'desc' => 'Guru sebagian telah melaksanakan pembelajaran yang mendukung terlaksananya pendekatan  pembelajaran saintifik  dengan  mengembangkan model pembelajaran Problem solving, Dicovery Learning, Project Base Learning, Inquiry,dan sejenisnya secara konsisten'],
            (object)['instrument' => 16, 'code' => 'A', 'desc' => 'Guru  belum melaksanakan pembelajaran yang mendukung pemanfaatan teknologi informasi dan/ atau pemanfaatan terhadap sumberdaya yang terdapat dilingkungan sekitar'],
            (object)['instrument' => 16, 'code' => 'B', 'desc' => 'Pelaksanaan pembelajaran yang dilakukan oleh guru  telah memanfaatkan  teknologi informasi yang dimanfaatkan untuk mencari dan menemukan sumber belajar'],
            (object)['instrument' => 16, 'code' => 'C', 'desc' => 'pelaksanaan  pembelajaran yang dilakukan  oleh guru telah  berbasis teknologi dan informasi yang dilakukan bukan hanya sekedar untuk mencari dan menemukan ide sumber belajar tetapi memanfaatkannya sebagai sarana penyampaian pembelajaran '],
            (object)['instrument' => 16, 'code' => 'D', 'desc' => 'pelaksanaan  pembelajaran yang dilakukan  oleh guru telah mendukung pemanfaatan sumberdaya berbasis lingkungan baik didalam madrasah maupun diluar madrasah sebagai sumber belajar'],
            (object)['instrument' => 16, 'code' => 'E', 'desc' => 'pelaksanaan  pembelajaran mencerminkan kegiatan inovatif dan kreatif  didukung pemanfaatan teknologi informasi dan/ atau pemanfaatan terhadap sumberdaya yang terdapat dilingkungan sekitar secara konsisten'],
            (object)['instrument' => 17, 'code' => 'A', 'desc' => 'penilaian proses dan hasil belajar  yang dilakukan oleh guru belum   memperhatikan tujuan pembelajaran.'],
            (object)['instrument' => 17, 'code' => 'B', 'desc' => 'penilaian proses dan hasil belajar yang dilakukan oleh guru telah  sesuai tujuan pembelajaran namun belum digunakan untuk perbaikan pembelajaran.'],
            (object)['instrument' => 17, 'code' => 'C', 'desc' => 'penilaian proses dan hasil belajar yang dilakukan oleh guru mencakup 3 ranah penilaian '],
            (object)['instrument' => 17, 'code' => 'D', 'desc' => 'penilaian proses dan hasil belajar yang dilakukan oleh guru mencakup 3 ranah penilaian dan di dukung dengan teknik  penilaian yang sesuai dengan karakteristiknya masing masing '],
            (object)['instrument' => 17, 'code' => 'E', 'desc' => 'penilaian proses dan hasil belajar yang dilakukan oleh guru dilakukan secara sistematis melalui tahapan perencanaan  pelaksanaan dan mendapatkan hasil penilaian yang memadai'],
            (object)['instrument' => 17, 'code' => 'F', 'desc' => 'kegiatan penilaian proses dan hasil belajar yang dilakukan oleh guru  menggunakan berbagai teknik penilaian untuk mengetahui pencapaian tujuan pembelajaran secara sistemis dan berkesinambungan yang berdampak pada perbaikan proses pembelajaran dan hasil belajar siswa.'],
            (object)['instrument' => 18, 'code' => 'A', 'desc' => 'Instrumen penilaian yang dibuat oleh guru belum mempertimbangkan kompetensi dan tujuan yang disusun dalam perencanaan pembelajaran '],
            (object)['instrument' => 18, 'code' => 'B', 'desc' => 'Instrumen penilaian yang disusun oleh guru diambil dari buku, Lembar Kerja siswa dengan asumsi instrumen penilaian sudah menyesuaikan hasil pembelajaran'],
            (object)['instrument' => 18, 'code' => 'C', 'desc' => 'Instrumen penilaian yang dimiliki terbatas berupa instrumen penilaian pengetahuan, sedangkan penilaian sikap dan keterampilan tidak disusun'],
            (object)['instrument' => 18, 'code' => 'D', 'desc' => 'Instrumen penilaian yang disusun oleh guru sesuai dengan kompetensi yang dikembangkan dalam ranah pengetahuan, sikap dan keterampilan'],
            (object)['instrument' => 19, 'code' => 'A', 'desc' => 'Naskah soal yang disusun belum didasarkan kepada taksonomi yang sedang dikembangkan sehingga naskah soal HOTS belum terpenuhi'],
            (object)['instrument' => 19, 'code' => 'B', 'desc' => 'Naskah soal yang disusun telah memenuhi kriteria penyusunan naskah soal HOTS namun belum mengintegrasikan dengan budaya literasi dan akhlakul karimah yang dikembangkan '],
            (object)['instrument' => 19, 'code' => 'C', 'desc' => 'Naskah soal yang disusun mempertimbangkan level High Order Thinking Skill dan secara sistematis mengintegrasikan budaya literasi dan karakter akhlakul Karimah '],
            (object)['instrument' => 20, 'code' => 'A', 'desc' => 'Naskah soal yang disusun oleh guru belum mempertimbangkan sikap menghormati, menghargai perbedaan suku, ras toleransi, moderasi dan komitmen berbangsa '],
            (object)['instrument' => 20, 'code' => 'B', 'desc' => 'Naskah soal yang disusun sebagian memperhatikan sikap menghormati, menghargai perbedaan suku, ras toleransi, moderasi dan komitmen berbangsa '],
            (object)['instrument' => 20, 'code' => 'C', 'desc' => 'Naskah soal yang disusun telah memperhatikan sikap menghormati, menghargai perbedaan suku, ras toleransi, moderasi dan komitmen berbangsa '],
            (object)['instrument' => 20, 'code' => 'D', 'desc' => 'Naskah soal yang disusun telah memperhatikan sikap menghormati, menghargai perbedaan suku, ras toleransi, moderasi dan komitmen berbangsa serta ditelaah oleh tim penyusun naskah untuk menghindarkan kemungkinan pemahaman yang tidak sesuai'],
            (object)['instrument' => 21, 'code' => 'A', 'desc' => 'Penilaian yang dilakukan oleh guru belum memanfaatkan  teknologi informasi dan sumber daya yang tersedia di lingkungan '],
            (object)['instrument' => 21, 'code' => 'B', 'desc' => 'Penilaian yang dilakukan oleh guru sebagian memanfaatkan teknologi informasi sebagai media'],
            (object)['instrument' => 21, 'code' => 'C', 'desc' => 'Penilaian yang dilakukan oleh guru sebagian memanfaatkan sumber daya dan lingkungan yang tersedia di sekitar madrasah '],
            (object)['instrument' => 21, 'code' => 'D', 'desc' => 'Penilaian yang dilakukan oleh guru memadukan pemanfaatan teknologi informasi dan sumberdaya yang tersedia dilingkungan sekitar '],
            (object)['instrument' => 21, 'code' => 'E', 'desc' => 'Penilaian yang dilakukan oleh guru memadukan pemanfaatan teknologi informasi dan sumberdaya yang tersedia dilingkungan sekitar secara konsisten dan diolah menggunakan teknologi'],
            (object)['instrument' => 22, 'code' => 'A', 'desc' => 'Guru belum  melaksanakan analisis terhadap kegiatan penilaian yang dilakukannya '],
            (object)['instrument' => 22, 'code' => 'B', 'desc' => 'Guru telah melaksanakan analisis hasil penilaian namun belum menjadi pertimbangan bagi upaya perbaikan proses pembelajaran '],
            (object)['instrument' => 22, 'code' => 'C', 'desc' => 'Guru melaksanakan analisis penilaian secara konsisten serta menjadikannya sebagai pijakan guna melaksanakan perbaikan dan pengayaan '],
            (object)['instrument' => 23, 'code' => 'A', 'desc' => 'Guru melaksanakan analisis penilaian secara konsisten serta menjadikannya sebagai pijakan guna melaksanakan perbaikan dan pengayaan '],
            (object)['instrument' => 23, 'code' => 'B', 'desc' => 'Guru telah memiliki program tindak lanjut hasil penilaian namun belum sepenuhnya merupakan hasil analisis terhadap penilaian pembelajaran '],
            (object)['instrument' => 23, 'code' => 'C', 'desc' => 'Guru telah memiliki program tindak lanjut hasil penilaian yang dilakukan berdasarkan analisis terhadap pencapaian hasil pembelajaran '],
            (object)['instrument' => 23, 'code' => 'D', 'desc' => 'Guru telah memiliki program tindak lanjut hasil penilaian yang dilakukan berdasarkan analisis terhadap pencapaian hasil pembelajaran serta berimbas pada peningkatan kompetensi siswa '],
        ]);

        $indicators->map(function ($indicator){
            DB::table('indicators')->insert([
                'instrument' => $indicator->instrument,
                'code' => $indicator->code,
                'desc' => $indicator->desc
            ]);
        });
    }
}