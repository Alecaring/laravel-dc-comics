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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descrizione');
            $table->text('image');
            $table->decimal('price', 10, 2); // Prezzo della casa
            $table->string('address'); // Indirizzo della casa
            $table->integer('bedrooms'); // Numero di camere da letto
            $table->integer('bathrooms'); // Numero di bagni
            $table->integer('square_meters'); // Superficie in metri quadrati
            $table->string('property_type'); // Tipo di proprietà
            $table->string('status'); // Stato della casa
            $table->year('built_year'); // Data di costruzione
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
