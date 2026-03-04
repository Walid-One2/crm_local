<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->foreignId('fonction_id')
                ->nullable()
                ->constrained('fonctions')
                ->nullOnDelete()
                ->cascadeOnUpdate();

            $table->foreignId('responsable_id')
                ->nullable()
                ->constrained('responsables')
                ->nullOnDelete()
                ->cascadeOnUpdate();

            $table->integer('statut')->nullable();

            $table->string('email', 180)->unique();
            $table->string('tel', 20)->nullable();
            $table->string('password', 255)->nullable();
            $table->longText('roles')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();

            $table->softDeletes();

            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('name', 255)->nullable();

            $table->index('fonction_id', 'idx_users_fonction_id');
            $table->index('responsable_id', 'idx_users_responsable_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};