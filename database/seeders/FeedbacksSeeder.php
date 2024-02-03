<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedbacksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $feedbacks = [
            (object)['aspect' => 1, 'code' => 1, 'desc' => 'perencanaan proses pembelajaran yang efektif berbasis keunggulan'],
            (object)['aspect' => 1, 'code' => 2, 'desc' => 'perencanaan pembelajaran yang mendukung terlaksananya pembelajaran kontekstual, kebermaknaan, humanis, metakognitif, moderat dan tercapainya misi madrasah,'],
            (object)['aspect' => 1, 'code' => 3, 'desc' => 'perencanaan pembelajaran yang menggambarkan terlaksananya pembelajaran abad 21 dengan memperhatikan penguatan pendidikan karakter dan akhlakul karimah, Budaya Literasi, numerasi, sains dan sosial budaya, Berfikir Kritis, kolaboratif, komunikatif dan kreatif, terampil memecahkan masalah'],
            (object)['aspect' => 1, 'code' => 4, 'desc' => 'perencanaan pembelajaran yang mengimplementasikan pendekatan pembelajaran saintifik dengan model pembelajaran Problem solving, Dicovery Learning, Project Base Learning, Inquiry,dan sejenisnya'],
            (object)['aspect' => 1, 'code' => 5, 'desc' => 'perencanaan pembelajaran yang memanfaatkan teknologi informasi dan/atau pemanfaatan sumber daya yang tersedia di sekitar lingkungan belajar'],
            (object)['aspect' => 1, 'code' => 6, 'desc' => 'perencanaan penilaian yang mengintegrasikan penilaian proses dan hasil belajar'],
        ];
    }
}
