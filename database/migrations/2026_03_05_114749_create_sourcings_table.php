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
        Schema::create('sourcings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('compte_id')->constrained();
            $table->date('date_debut_mission')->nullable();
            $table->date('date_fin_mission')->nullable();
            $table->string('action')->nullable();
            $table->integer('nombre_candidat')->nullable();
            $table->text('criteres')->nullable();
            $table->string('produitachete')->nullable();
            $table->string('recrutement')->nullable();
            $table->string('titre_poste')->nullable();
            $table->string('remplacement')->nullable();
            $table->string('noteremplacement')->nullable();
            $table->string('notesuivi')->nullable();
            $table->date('date_remplacement')->nullable();
            $table->string('nom_candidat')->nullable();
            $table->date('date_embauche')->nullable();
            $table->date('date_signature')->nullable();
            $table->string('type_contrat')->nullable();
            $table->decimal('salaire', 10, 2)->nullable();
            $table->string('type_salaire')->nullable();
            $table->date('date_recrutement')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sourcings');
    }
};
