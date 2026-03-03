<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResponsableSeeder extends Seeder
{
    public function run(): void
    {
        $responsables = [
            ['responsable_nom' => 'walid.elh'],
            ['responsable_nom' => 'mouaad.elh'],
            ['responsable_nom' => 'ali.elh'],
        ];

        DB::table('responsables')->insert($responsables);
    }
}
