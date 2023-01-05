<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mise_a__disposition', function (Blueprint $table) {
            $table->id();
            $table->string('cni_beneficiaire');
            $table->double('montant');
            $table->foreignId('id_compte')->constrained('comptes');
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
        Schema::dropIfExists('mise_a__disposition');
    }
};
