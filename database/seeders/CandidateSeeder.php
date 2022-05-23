<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Candidate;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $candidates = [
            ['first_name' => 'Zola', 'last_name' => 'Towne', 'email' => 'garrison40@example.com'],
            ['first_name' => 'Stephania', 'last_name' => 'Yundt', 'email' => 'qritchie@example.com'],
            ['first_name' => 'Margret', 'last_name' => 'Reichert', 'email' => 'ralph.harber@example.org'],
            ['first_name' => 'Mozell', 'last_name' => 'Jones', 'email' => 'walsh.tia@example.coma'],
            ['first_name' => 'Destiny', 'last_name' => 'Emmerich', 'email' => 'ybraun@example.com'],
            ['first_name' => 'Cortney', 'last_name' => 'McDermott', 'email' => 'cordia.douglas@example.net'],
            ['first_name' => 'Melvin', 'last_name' => 'Crooks', 'email' => 'enos.goodwin@example.net'],
            ['first_name' => 'Mack', 'last_name' => 'Ferry', 'email' => 'phand@example.org'],
            ['first_name' => 'Fanny', 'last_name' => 'Deckow', 'email' => 'kblick@example.org'],
            ['first_name' => 'Katarina', 'last_name' => 'Ebert', 'email' => 'shawna25@example.net'],
        ];
        Candidate::insert($candidates);
    }
}
