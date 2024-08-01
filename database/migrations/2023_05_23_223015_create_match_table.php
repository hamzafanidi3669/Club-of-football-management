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
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->string('nom_equipe_domicile');
            $table->string('nom_equipe_exterieur');
            $table->date('date_matche');
            $table->timestamp('heure_matche');
            $table->string('lieu');
            $table->string('resultat')->nullable();
            $table->string('image_equipe_domicile');
            $table->string('image_equipe_exterieur');
            $table->string('nom_championnat');
            $table->string('image_championnat');
            $table->string('ville');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('match');
    }
};
