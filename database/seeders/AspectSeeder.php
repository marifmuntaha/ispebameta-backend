<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AspectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aspects = collect([
            (object)['number' => 1, 'name' => 'RENCANA PEMBELAJARAN', 'desc' => ''],
            (object)['number' => 2, 'name' => 'PELAKSANAAN PEMBELAJARAN', 'desc' => ''],
            (object)['number' => 3, 'name' => 'PENILAIAN PEMBELAJARAN', 'desc' => ''],
        ]);

        $aspects->map(function ($aspect){
            DB::table('aspects')->insert([
                'number' => $aspect->number,
                'name' => $aspect->name,
                'desc' => $aspect->desc
            ]);
        });
    }
}
