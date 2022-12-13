<?php

namespace Database\Seeders;

use App\Models\speakers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpeakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        speakers::create([
            'name' => 'Ümit Özdağ',
            'party_id' => '8',
            'placement' => '1',
            'status' => 'Genel Başkan',
        ]);
        speakers::create([
            'name' => 'Ömer Faruk Gergerlioğlu',
            'party_id' => '9',
            'placement' => '2',
            'status' => 'Kocaeli Milletvekili',
        ]);
        speakers::create([
            'name' => 'Muharrem İnce',
            'party_id' => '7',
            'placement' => '3',
            'status' => 'Genel Başkan',
        ]);
        speakers::create([
            'name' => 'Cem Uzan',
            'party_id' => '3',
            'placement' => '4',
            'status' => 'Genel Başkan',
        ]);
        speakers::create([
            'name' => 'Ahmet Davutoğlu',
            'party_id' => '4',
            'placement' => '5',
            'status' => 'Genel Başkan',
        ]);
        speakers::create([
            'name' => 'Metin Külünk',
            'party_id' => '1',
            'placement' => '6',
            'status' => 'MKYK Üyesi',
        ]);
    }
}
