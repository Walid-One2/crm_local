<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id'                => 1,
                'fonction_id'       => 2,
                'responsable_id'    => 1,
                'statut'            => null,
                'email'             => 'dhiaeddine993@gmail.com',
                'tel'               => null,
                'password'          => '$2y$12$lm1LD7is.DHvfQdmRsm3Q.VvitnH4HVE5zHJs5Odzj.JX5VOXygAm',
                'roles'             => null,
                'created_at'        => '2026-01-28 10:18:43',
                'updated_at'        => '2026-01-28 10:18:43',
                'deleted_at'        => null,
                'remember_token'    => 'bUkUmftmYLrJCCODMhpFyi0DqVN4WMubhdpTi3Ras8dRBlAn1HlhZZhXQR0B',
                'email_verified_at' => null,
                'name'              => 'Dhiaeddine Boukthir',
            ],
            [
                'id'                => 2,
                'fonction_id'       => 4,
                'responsable_id'    => null,
                'statut'            => null,
                'email'             => 'aladin.bg@gmail.com',
                'tel'               => null,
                'password'          => '$2y$12$g7z.CeRNmEbAnCFnhOvkBeSKI/8/r.krArryxiKpuS/K8pkje4gpO',
                'roles'             => null,
                'created_at'        => '2026-02-20 10:12:48',
                'updated_at'        => '2026-02-20 10:12:48',
                'deleted_at'        => null,
                'remember_token'    => null,
                'email_verified_at' => null,
                'name'              => 'Aladin Belgacem',
            ],
        ]);
    }
}
