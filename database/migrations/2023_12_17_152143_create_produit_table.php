<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->string('reference');
            $table->integer('quantite_stock');
            $table->integer('quantite_alert');
            $table->foreignId('sous_categorie_id')
                ->constrained('sous_categorie')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produit');
    }
};
