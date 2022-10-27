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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombreComercial')->comment('');
            $table->string('razonSocial')->comment('');
            $table->string('rubro')->comment('');
            $table->string('observacion')->comment(''); 
            $table->delete();
            $table->timestamps();
        });
        \App\Models\Cliente::insert([
            [32, 'Making Connexion', 'Making Connexion SAC', 'Comunicaciones', '', '2019-05-17 14:23:32', '2019-05-17 14:23:32', NULL],
            [59, 'Bookmedia', 'Bookmedia', 'Editorial', '', '2020-04-23 03:13:54', '2020-04-23 03:13:54', NULL]
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
