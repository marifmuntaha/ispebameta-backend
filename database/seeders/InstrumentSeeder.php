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
            (object)['aspect' => 1, 'name' => '1', 'desc' => 'Guru menyusun perencanaan yang dapat menggambarkan proses pembelajaran yang efektif berbasis keunggulan madrasah'],
            (object)['aspect' => 1, 'name' => '2', 'desc' => 'Guru menyusun perencanaan pembelajaran yang mendukung terlaksananya pembelajaran kontekstual, kebermaknaan, humanis, metakognitif, moderat dan tercapainya misi madrasah'],
            (object)['aspect' => 1, 'name' => '3', 'sub' => 'A', 'desc' => 'Guru menyusun perencanaan pembelajaran yang menggambarkan terlaksananya pembelajaran abad 21 dengan memperhatikan penguatan pendidikan karakter dan akhlakul karimah, Budaya Literasi, numerasi, sains dan sosial budaya, Berfikir Kritis, kolaboratif, komunikatif dan kreatif, terampil memecahkan masalah'],
            (object)['aspect' => 1, 'name' => '3', 'sub' => 'B', 'desc' => 'Guru menyusun perencanaan pembelajaran yang menggambarkan terlaksananya pembelajaran abad 21 dengan memperhatikan penguatan pendidikan karakter dan akhlakul karimah, Budaya Literasi, numerasi, sains dan sosial budaya, Berfikir Kritis, kolaboratif, komunikatif dan kreatif, terampil memecahkan masalah'],
            (object)['aspect' => 1, 'name' => '3', 'sub' => 'C', 'desc' => 'Guru menyusun perencanaan pembelajaran yang menggambarkan terlaksananya pembelajaran abad 21 dengan memperhatikan penguatan pendidikan karakter dan akhlakul karimah, Budaya Literasi, numerasi, sains dan sosial budaya, Berfikir Kritis, kolaboratif, komunikatif dan kreatif, terampil memecahkan masalah'],
            (object)['aspect' => 1, 'name' => '3', 'sub' => 'D', 'desc' => 'Guru menyusun perencanaan pembelajaran yang menggambarkan terlaksananya pembelajaran abad 21 dengan memperhatikan penguatan pendidikan karakter dan akhlakul karimah, Budaya Literasi, numerasi, sains dan sosial budaya, Berfikir Kritis, kolaboratif, komunikatif dan kreatif, terampil memecahkan masalah'],
            (object)['aspect' => 1, 'name' => '4', 'desc' => 'Guru menyusun perencanaan pembelajaran yang mengimplementasikan pendekatan pembelajaran saintifik dengan model pembelajaran Problem Solving, Dicovery Learning, Project Base Learning, Inquiry dan sejenisnya'],
            (object)['aspect' => 1, 'name' => '5', 'desc' => 'Guru merencanakan pembelajaran berbasis teknologi informasi dan/atau pemanfaatan sumber daya yang tersedia di sekitar lingkungan belajar'],
            (object)['aspect' => 1, 'name' => '6', 'desc' => 'Guru menyusun perencanaan penilaian yang mengintegrasikan penilaian proses dan hasil belajar'],
            (object)['aspect' => 2, 'name' => '1', 'desc' => 'Guru melaksanakan pembelajaran kontekstual, kebermaknaan, humanis, metakognitif, dan moderat'],
            (object)['aspect' => 2, 'name' => '2', 'sub' => 'A', 'desc' => 'Guru melaksanakan pembelajaran dengan mengintegrasikan kecakapan abad 21 dengan memperhatikan penguatan pendidikan karakter dan akhlakul karimah, budaya literasi, numerasi, sains dan sosial budaya, berfikir kritis, kolaboratif, komunikatif dan kreatif, terampil memecahkan masalah '],
            (object)['aspect' => 2, 'name' => '2', 'sub' => 'B', 'desc' => 'Guru melaksanakan pembelajaran dengan mengintegrasikan kecakapan abad 21 dengan memperhatikan penguatan Budaya Literasi, numerasi, sains dan sosial budaya'],
            (object)['aspect' => 2, 'name' => '2', 'sub' => 'C', 'desc' => 'Guru melaksanakan pembelajaran dengan mengintegrasikan kecakapan abad 21 dengan memperhatikan mengembangkan berfikir kritis, kolaboratif, komunikatif dan kreatif'],
            (object)['aspect' => 2, 'name' => '2', 'sub' => 'D', 'desc' => 'Guru melaksanakan pembelajaran dengan mengintegrasikan kecakapan abad 21 dengan memperhatikan kemampuan pemecahan masalah'],
            (object)['aspect' => 2, 'name' => '3', 'desc' => 'Guru melaksanakan pembelajaran tematik integratif dengan mengimplementasikan pendekatan pembelajaran saintifik dengan model pembelajaran Problem solving, Dicovery Learning, Project Base Learning, Inquiry dan sejenisnya'],
            (object)['aspect' => 2, 'name' => '4', 'desc' => 'Guru melaksanakan pembelajaran berbasis teknologi informasi dan/atau pemanfaatan sumber daya yang tersedia di sekitar lingkungan belajar'],
            (object)['aspect' => 2, 'name' => '5', 'desc' => 'Guru melakukan penilaian yang mengintegrasikan penilaian proses dan hasil belajar '],
            (object)['aspect' => 3, 'name' => '1', 'desc' => 'Guru menyusun instrumen penilaian (soal/alat penilaian) yang sesuai dengan KI-KD dan tujuan pembelajaran'],
            (object)['aspect' => 3, 'name' => '2', 'desc' => 'Guru menyusun soal higher order thinking skills dengan mengintegrasikan literasi dan karakter akhlakul karimah (sikap dan perilaku)'],
            (object)['aspect' => 3, 'name' => '3', 'desc' => 'Guru menyusun soal yang menghormati dan menghargai perbedaan suku, ras toleransi, moderasi dan menjaga komitmen kebangsaan'],
            (object)['aspect' => 3, 'name' => '4', 'desc' => 'Guru melaksanakan penilaian dengan memanfaatkan teknologi informasi dan/atau sumber daya yang tersedia di lingkungan belajar'],
            (object)['aspect' => 3, 'name' => '5', 'desc' => 'Guru melaksanakan analisis hasil penilaian'],
            (object)['aspect' => 3, 'name' => '6', 'desc' => 'Guru melaksanakan tindak lanjut hasil penilaian'],
        ]);
        $instruments->map(function ($instrument) {
            DB::table('instruments')->insert([
                'aspect' => $instrument->aspect,
                'name' => $instrument->name,
                'desc' => $instrument->desc
            ]);
        });
    }
}
