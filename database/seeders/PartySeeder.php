<?php

namespace Database\Seeders;

use App\Models\parties;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        parties::create([
            'name' => 'Adalet Kalkınma Partisi',
            'short_name' => 'AKP',
            'president' => 'Recep Tayyip Erdoğan',
        ]);
        parties::create([
            'name' => 'Cumhuuriyet Halk Partisi',
            'short_name' => 'CHP',
            'president' => 'Kemal Kılıçdaroğlu',
        ]);
        parties::create([
            'name' => 'Genç Parti',
            'short_name' => 'GP',
            'president' => 'Cem Uzan',
        ]);
        parties::create([
            'name' => 'Gelecek Partisi',
            'short_name' => 'GP',
            'president' => 'Ahmet Davutoğlu',
        ]);
        parties::create([
            'name' => 'Milliyetçi Hareket Partisi',
            'short_name' => 'MHP',
            'president' => 'Devlet Bahçeli',
        ]);
        parties::create([
            'name' => 'İyi Parti',
            'short_name' => 'İyi Parti',
            'president' => 'Meral Akşener',
        ]);
        parties::create([
            'name' => 'Memleket Partisi - MP',
            'short_name' => 'Memleket',
            'president' => 'Muharrem İnce',
        ]);
        parties::create([
            'name' => 'Zafer Partisi',
            'short_name' => 'ZP',
            'president' => 'Ümit Özdağ',
        ]);
        parties::create([
            'name' => 'Halkların Demokratik Partisi',
            'short_name' => 'HDP',
            'president' => 'Pervin Buldan - Mithat Sancar',
        ]);
    }
}
