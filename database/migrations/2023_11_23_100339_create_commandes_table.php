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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('nom_commande');
            $table->string('adresse_livraison');
            $table->date('date_commande');
            $table->string('statut_commande');
            $table->integer('quantites');
            $table->integer('montant_total');

            $table->unsignedBigInteger('clients_id')->unsigned();
            $table->foreign('clients_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('livraisons_id')->unsigned();
            $table->foreign('livraisons_id')->references('id')->on('livraisons')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
