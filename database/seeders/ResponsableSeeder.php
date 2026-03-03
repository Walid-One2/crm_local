<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResponsableSeeder extends Seeder
{
    public function run(): void
    {
        $responsables = [
            ['id' => 1, 'responsable_nom' => 'walid.elh'],
            ['id' => 2, 'responsable_nom' => 'mouaad.elh'],
            ['id' => 3, 'responsable_nom' => 'ali.elh'],
        ];

        DB::table('responsables')->insert($responsables);
    }
}
