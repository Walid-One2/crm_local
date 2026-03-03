<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fonction_id')
                  ->nullable()
                  ->constrained('fonctions')
                  ->nullOnDelete()
                  ->cascadeOnUpdate();
            $table->unsignedBigInteger('responsable_id')->nullable();
            $table->integer('statut')->nullable();
            $table->string('email', 180)->unique();
            $table->string('tel', 20)->nullable();
            $table->string('password')->nullable();
            $table->longText('roles')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
            $table->softDeletes(); // deleted_at
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('name')->nullable();

            // Auto-référence : responsable est un autre user
            $table->foreign('responsable_id')
                  ->references('id')
                  ->on('users')
                  ->nullOnDelete()
                  ->cascadeOnUpdate();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
