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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
    
            $table->string('nom' )->required(); 
            $table->string('prenom' )->required();
            $table->string('universite')->required();
            $table->string('filiere')->required();
            $table->string('raison')->required();
            $table->string('numero')->required(); 
            $table->string('address')->nullable(); 
            $table->string('passeTemps')->nullable();
            $table->boolean('organisation_member')->default(false); 
            $table->enum('profession', ['professionnelle', 'etudiante']); 
            $table->string('organisationName')->nullable(); 
            $table->string('probleme')->required();
            $table->text('projet'); 
            $table->enum('secteur', ['tic','finance', 'sante', 'energie', 'autreSecteur']); 
            $table->string('attente')->nullable();
            $table->enum('heard_about_project', ['seanceInfo', 'reseauxSocial', 'ami', 'autre']);
            $table->string('nameOther')->nullable();
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
