<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('site', function (Blueprint $table) {
            $table->id();
            $table->string('site', 190)->unique();
            $table->timestamps();
        });

        DB::table('site')->insert([
            ['site' => 'emploi.ma',             'created_at' => now(), 'updated_at' => now()],
            ['site' => 'emploi.ci',             'created_at' => now(), 'updated_at' => now()],
            ['site' => 'emploi.cm',             'created_at' => now(), 'updated_at' => now()],
            ['site' => 'emploisenegal.com',     'created_at' => now(), 'updated_at' => now()],
            ['site' => 'emploimali.com',        'created_at' => now(), 'updated_at' => now()],
            ['site' => 'emploiguinee.com',      'created_at' => now(), 'updated_at' => now()],
            ['site' => 'emploiburkina.com',     'created_at' => now(), 'updated_at' => now()],
            ['site' => 'AfricaWork Executive',  'created_at' => now(), 'updated_at' => now()],
            ['site' => 'AfricaWork Holding',    'created_at' => now(), 'updated_at' => now()],
            ['site' => 'AWRH',                  'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site');
    }
};
