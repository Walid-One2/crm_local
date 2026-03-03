<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FonctionSeeder extends Seeder
{
    public function run(): void
    {
        $fonctions = [
            ['id' => 1,  'intitule' => 'ROLE_ADMIN'],
            ['id' => 2,  'intitule' => 'ROLE_RESPONSABLE'],
            ['id' => 3,  'intitule' => 'ROLE_COMMERCIAL'],
            ['id' => 4,  'intitule' => 'ROLE_CHARGESUIVI'],
            ['id' => 5,  'intitule' => 'ROLE_RH'],
            ['id' => 6,  'intitule' => 'ROLE_COMMERCIAL_F'],
            ['id' => 7,  'intitule' => 'ROLE_CREDITEUR'],
            ['id' => 8,  'intitule' => 'ROLE_RH_AGENDA'],
            ['id' => 9,  'intitule' => 'ROLE_CHARGESUIVI_RH'],
            ['id' => 10, 'intitule' => 'ROLE_CHARGESUIVI_DIGITAL'],
        ];

        DB::table('fonctions')->insert($fonctions);
    }
}
