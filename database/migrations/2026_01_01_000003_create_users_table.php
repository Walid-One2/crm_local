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
            $table->unsignedBigInteger('fonction_id')->nullable();
            $table->unsignedBigInteger('responsable_id')->nullable();
            $table->integer('statut')->nullable();
            $table->string('email', 180)->unique();
            $table->string('tel', 20)->nullable();
            $table->string('password', 255)->nullable();
            $table->longText('roles')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('remember_token', 100)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('name', 255)->nullable();

            $table->foreign('fonction_id', 'fk_users_fonction')
                  ->references('id')->on('fonctions')
                  ->onDelete('set null')
                  ->onUpdate('cascade');

            $table->foreign('responsable_id', 'fk_users_responsable')
                  ->references('id')->on('users')
                  ->onDelete('set null')
                  ->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('fk_users_fonction');
            $table->dropForeign('fk_users_responsable');
        });
        Schema::dropIfExists('users');
    }
};
