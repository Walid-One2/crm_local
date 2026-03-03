<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FonctionSeeder extends Seeder
{
    public function run(): void
    {
        $fonctions = [
            ['intitule' => 'ROLE_ADMIN'],
            ['intitule' => 'ROLE_RESPONSABLE'],
            ['intitule' => 'ROLE_COMMERCIAL'],
            ['intitule' => 'ROLE_CHARGESUIVI'],
            ['intitule' => 'ROLE_RH'],
            ['intitule' => 'ROLE_COMMERCIAL_F'],
            ['intitule' => 'ROLE_CREDITEUR'],
            ['intitule' => 'ROLE_RH_AGENDA'],
            ['intitule' => 'ROLE_CHARGESUIVI_RH'],
            ['intitule' => 'ROLE_CHARGESUIVI_DIGITAL'],
        ];

        DB::table('fonctions')->insert($fonctions);
    }
}
