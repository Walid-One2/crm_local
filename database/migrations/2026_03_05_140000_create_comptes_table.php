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
        Schema::create('comptes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pays_id')->nullable()->constrained();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->string('nom')->nullable();
            $table->text('description')->nullable();
            $table->string('adresse')->nullable();
            $table->string('complementadresse')->nullable();
            $table->string('cp')->nullable();
            $table->string('ville')->nullable();
            $table->string('siteweb')->nullable();
            $table->string('tel')->nullable();
            $table->string('tel2')->nullable();
            $table->string('fax')->nullable();
            $table->string('statut')->nullable();
            $table->string('email')->nullable();
            $table->integer('niveau_satisfaction')->nullable();
            $table->string('statut_f')->nullable();
            $table->foreignId('user_id_F')->nullable();
            $table->foreignId('site_id')->nullable();
            $table->string('numero_ice')->nullable();
            $table->string('uid')->nullable();
            $table->string('categorie')->nullable();
            $table->date('date_note_devis')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comptes');
    }
};
