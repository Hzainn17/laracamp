<?php

namespace Database\Seeders;

use App\Models\Camp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $camps = [
            [
                'title'=>'Gila Belajar',
                'slug'=>'gila-belajar',
                'price'=>280,
            ],
            [
                'title'=>'Baru Mulai',
                'slug'=>'baru-mulai',
                'price'=>140,
            ],

        ];

        foreach ($camps as $key => $camp) {
            Camp::create($camp);
        }
    }
}
