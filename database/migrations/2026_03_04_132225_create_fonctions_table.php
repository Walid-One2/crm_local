<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('fonctions', function (Blueprint $table) {
            $table->id();
            $table->string('intitule', 190)->unique();
            $table->timestamps();
        });

        DB::table('fonctions')->insert([
            ['intitule' => 'ROLE_ADMIN',               'created_at' => now(), 'updated_at' => now()],
            ['intitule' => 'ROLE_RESPONSABLE',         'created_at' => now(), 'updated_at' => now()],
            ['intitule' => 'ROLE_COMMERCIAL',          'created_at' => now(), 'updated_at' => now()],
            ['intitule' => 'ROLE_CHARGESUIVI',         'created_at' => now(), 'updated_at' => now()],
            ['intitule' => 'ROLE_RH',                  'created_at' => now(), 'updated_at' => now()],
            ['intitule' => 'ROLE_COMMERCIAL_F',        'created_at' => now(), 'updated_at' => now()],
            ['intitule' => 'ROLE_CREDITEUR',           'created_at' => now(), 'updated_at' => now()],
            ['intitule' => 'ROLE_RH_AGENDA',           'created_at' => now(), 'updated_at' => now()],
            ['intitule' => 'ROLE_CHARGESUIVI_RH',      'created_at' => now(), 'updated_at' => now()],
            ['intitule' => 'ROLE_CHARGESUIVI_DIGITAL', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('fonctions');
    }
};