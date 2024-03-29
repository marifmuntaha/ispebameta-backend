<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstrumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $instruments = collect([
            (object)['aspect' => 1, 'name' => '1', 'sub' => '', 'desc' => 'Guru menyusun perencanaan yang dapat menggambarkan proses pembelajaran yang efektif berbasis keunggulan madrasah', 'subdesc' => "", 'feedback' => 'perencanaan proses pembelajaran yang efektif berbasis keunggulan,'],
            (object)['aspect' => 1, 'name' => '2', 'sub' => '', 'desc' => 'Guru menyusun perencanaan pembelajaran yang mendukung terlaksananya pembelajaran kontekstual, kebermaknaan, humanis, metakognitif, moderat dan tercapainya misi madrasah', 'subdesc' => "", 'feedback' => 'perencanaan pembelajaran yang mendukung terlaksananya pembelajaran kontekstual, kebermaknaan, humanis, metakognitif, moderat dan tercapainya misi madrasah,'],
            (object)['aspect' => 1, 'name' => '3', 'sub' => 'A', 'desc' => 'Guru menyusun perencanaan pembelajaran yang menggambarkan terlaksananya pembelajaran abad 21', 'subdesc' => "Penguatan Pendidikan karakter dan akhlakul karimah", 'feedback' => 'perencanaan pembelajaran yang menggambarkan terlaksananya pembelajaran abad 21 dengan memperhatikan penguatan pendidikan karakter dan akhlakul karimah, Budaya Literasi, numerasi, sains dan sosial budaya, Berfikir Kritis, kolaboratif, komunikatif dan kreatif, Terampil memecahkan Masalah'],
            (object)['aspect' => 1, 'name' => '3', 'sub' => 'B', 'desc' => 'Guru menyusun perencanaan pembelajaran yang menggambarkan terlaksananya pembelajaran abad 21', 'subdesc' => "Budaya Literasi, numerasi, sains dan sosial budaya", 'feedback' => 'perencanaan pembelajaran yang menggambarkan terlaksananya pembelajaran abad 21 dengan memperhatikan penguatan pendidikan karakter dan akhlakul karimah, Budaya Literasi, numerasi, sains dan sosial budaya, Berfikir Kritis, kolaboratif, komunikatif dan kreatif, Terampil memecahkan Masalah'],
            (object)['aspect' => 1, 'name' => '3', 'sub' => 'C', 'desc' => 'Guru menyusun perencanaan pembelajaran yang menggambarkan terlaksananya pembelajaran abad 21', 'subdesc' => "Berfikir Kritis, kolaboratif, komunikatif dan kreatif", 'feedback' => 'perencanaan pembelajaran yang menggambarkan terlaksananya pembelajaran abad 21 dengan memperhatikan penguatan pendidikan karakter dan akhlakul karimah, Budaya Literasi, numerasi, sains dan sosial budaya, Berfikir Kritis, kolaboratif, komunikatif dan kreatif, Terampil memecahkan Masalah'],
            (object)['aspect' => 1, 'name' => '3', 'sub' => 'D', 'desc' => 'Guru menyusun perencanaan pembelajaran yang menggambarkan terlaksananya pembelajaran abad 21', 'subdesc' => "Terampil memecahkan Masalah", 'feedback' => 'perencanaan pembelajaran yang menggambarkan terlaksananya pembelajaran abad 21 dengan memperhatikan penguatan pendidikan karakter dan akhlakul karimah, Budaya Literasi, numerasi, sains dan sosial budaya, Berfikir Kritis, kolaboratif, komunikatif dan kreatif, Terampil memecahkan Masalah'],
            (object)['aspect' => 1, 'name' => '4', 'sub' => '', 'desc' => 'Guru menyusun perencanaan pembelajaran yang mengimplementasikan pendekatan pembelajaran saintifik dengan model pembelajaran Problem Solving, Dicovery Learning, Project Base Learning, Inquiry dan sejenisnya', 'subdesc' => "", 'feedback' => 'perencanaan pembelajaran yang mengimplementasikan pendekatan pembelajaran saintifik dengan model pembelajaran Problem solving, Dicovery Learning, Project Base Learning, Inquiry,dan sejenisnya'],
            (object)['aspect' => 1, 'name' => '5', 'sub' => '', 'desc' => 'Guru merencanakan pembelajaran berbasis teknologi informasi dan/atau pemanfaatan sumber daya yang tersedia di sekitar lingkungan belajar', 'subdesc' => "", 'feedback' => 'perencanaan pembelajaran yang berbasis teknologi informasi dan/atau pemanfaatan sumber daya yang tersedia di sekitar lingkungan belajar'],
            (object)['aspect' => 1, 'name' => '6', 'sub' => '', 'desc' => 'Guru menyusun perencanaan penilaian yang mengintegrasikan penilaian proses dan hasil belajar', 'subdesc' => "", 'feedback' => 'perencanaan penilaian yang mengintegrasikan penilaian proses dan hasil belajar'],
            (object)['aspect' => 2, 'name' => '1', 'sub' => '', 'desc' => 'Guru melaksanakan pembelajaran kontekstual, kebermaknaan, humanis, metakognitif, dan moderat', 'subdesc' => "", 'feedback' => 'proses pembelajaran yang efektif dan dilakukan secara kontekstual, bermakna, humanis, metakognitif dan moderat,'],
            (object)['aspect' => 2, 'name' => '2', 'sub' => 'A', 'desc' => 'Guru melaksanakan pembelajaran dengan mengintegrasikan kecakapan abad 21', 'subdesc' => "Penguatan Pendidikan karakter dan akhlakul karimah", 'feedback' => 'proses pembelajaran yang menggambarkan terlaksananya kecakapan abad 21 dengan menitik beratkan pada pembentukan budaya kreatif inovatif secara konsisten melalui budaya literasi numerasi sains serta mampu berkolaborasi terhadap pemecahan masalah,'],
            (object)['aspect' => 2, 'name' => '2', 'sub' => 'B', 'desc' => 'Guru melaksanakan pembelajaran dengan mengintegrasikan kecakapan abad 21', 'subdesc' => "Budaya Literasi, numerasi, sains dan sosial budaya", 'feedback' => 'proses pembelajaran yang menggambarkan terlaksananya kecakapan abad 21 dengan menitik beratkan pada pembentukan budaya kreatif inovatif secara konsisten melalui budaya literasi numerasi sains serta mampu berkolaborasi terhadap pemecahan masalah,'],
            (object)['aspect' => 2, 'name' => '2', 'sub' => 'C', 'desc' => 'Guru melaksanakan pembelajaran dengan mengintegrasikan kecakapan abad 21', 'subdesc' => "Berfikir Kritis, kolaboratif, komunikatif dan kreatif", 'feedback' => 'proses pembelajaran yang menggambarkan terlaksananya kecakapan abad 21 dengan menitik beratkan pada pembentukan budaya kreatif inovatif secara konsisten melalui budaya literasi numerasi sains serta mampu berkolaborasi terhadap pemecahan masalah,'],
            (object)['aspect' => 2, 'name' => '2', 'sub' => 'D', 'desc' => 'Guru melaksanakan pembelajaran dengan mengintegrasikan kecakapan abad 21', 'subdesc' => "Terampil memecahkan Masalah", 'feedback' => 'proses pembelajaran yang menggambarkan terlaksananya kecakapan abad 21 dengan menitik beratkan pada pembentukan budaya kreatif inovatif secara konsisten melalui budaya literasi numerasi sains serta mampu berkolaborasi terhadap pemecahan masalah,'],
            (object)['aspect' => 2, 'name' => '3', 'sub' => '', 'desc' => 'Guru melaksanakan pembelajaran tematik integratif dengan mengimplementasikan pendekatan pembelajaran saintifik dengan model pembelajaran Problem solving, Dicovery Learning, Project Base Learning, Inquiry dan sejenisnya', 'subdesc' => "", 'feedback' => 'proses pembelajaran yang mengimplementasikan pendekatan pembelajaran saintifik dengan model pembelajaran Problem solving, Dicovery Learning, Project Base Learning, Inquiry,dan sejenisnya,'],
            (object)['aspect' => 2, 'name' => '4', 'sub' => '', 'desc' => 'Guru melaksanakan pembelajaran berbasis teknologi informasi dan/atau pemanfaatan sumber daya yang tersedia di sekitar lingkungan belajar', 'subdesc' => "", 'feedback' => 'proses pembelajaran berbasis teknologi informasi dan/ atau pemanfaatan sumber daya yang tersedia di sekitar lingkungan belajar,'],
            (object)['aspect' => 2, 'name' => '5', 'sub' => '', 'desc' => 'Guru melakukan penilaian yang mengintegrasikan penilaian proses dan hasil belajar', 'subdesc' => "", 'feedback' => 'pelaksanaan penilaian yang mengintegrasikan penilaian proses dan hasil belajar serta berdampak pada perbaikan kualitas madrasah,'],
            (object)['aspect' => 3, 'name' => '1', 'sub' => '', 'desc' => 'Guru menyusun instrumen penilaian (soal/alat penilaian) yang sesuai dengan KI-KD dan tujuan pembelajaran', 'subdesc' => "", 'feedback' => 'penyusunan instrumen penilaian sesuai dengan kompetensi yang ditentukan dan tujuan,'],
            (object)['aspect' => 3, 'name' => '2', 'sub' => '', 'desc' => 'Guru menyusun soal higher order thinking skills dengan mengintegrasikan literasi dan karakter akhlakul karimah (sikap dan perilaku)', 'subdesc' => "", 'feedback' => 'naskah soal disusun pada level High order Thinking Skill dengan mengintegrasikan literasi dan karakter akhlakul Karimah'],
            (object)['aspect' => 3, 'name' => '3', 'sub' => '', 'desc' => 'Guru menyusun soal yang menghormati dan menghargai perbedaan suku, ras toleransi, moderasi dan menjaga komitmen kebangsaan', 'subdesc' => "", 'feedback' => 'penyusunan naskah soal menghormati, menghargai perbedaan suku, ras, toleransi, moderasi dan menjaga komitmen kebangsaan'],
            (object)['aspect' => 3, 'name' => '4', 'sub' => '', 'desc' => 'Guru melaksanakan penilaian dengan memanfaatkan teknologi informasi dan/atau sumber daya yang tersedia di lingkungan belajar', 'subdesc' => "", 'feedback' => 'penyusunan naskah soal memanfaatkan teknologi informasi dan atau sumber daya yang tersedia dilingkungan belajar'],
            (object)['aspect' => 3, 'name' => '5', 'sub' => '', 'desc' => 'Guru melaksanakan analisis hasil penilaian', 'subdesc' => "", 'feedback' => 'pengolahan hasil penilaian dilakukan melalui analisis hasil penilaian'],
            (object)['aspect' => 3, 'name' => '6', 'sub' => '', 'desc' => 'Guru melaksanakan tindak lanjut hasil penilaian', 'subdesc' => "", 'feedback' => 'pengolahan hasil penilaian berupa tindak lanjut hasil penilaian'],
        ]);
        $instruments->map(function ($instrument) {
            DB::table('instruments')->insert([
                'aspect' => $instrument->aspect,
                'name' => $instrument->name,
                'sub' => $instrument->sub,
                'desc' => $instrument->desc,
                'subdesc' => $instrument->subdesc,
                'feedback' => $instrument->feedback
            ]);
        });
    }
}
