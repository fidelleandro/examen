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
            $table->id('id');
            $table->string('nombreComercial')->comment('');
            $table->string('razonSocial')->comment('');
            $table->string('rubro')->comment('');
            $table->string('observacion')->comment('');  
            $table->timestamps();
            $table->softDeletes();
        });
        \App\Models\Cliente::insert([
            ['id' => 32,'nombreComercial' => 'Making Connexion','razonSocial' => 'Making Connexion SAC','rubro' => 'Comunicaciones','observacion' => '','created_at' => '2019-05-17 14:23:32','updated_at' => '2019-05-17 14:23:32','deleted_at' => NULL],
            ['id' => 59,'nombreComercial' => 'Bookmedia', 'razonSocial' => 'Bookmedia', 'rubro' => 'Editorial','observacion' => '','created_at' => '2020-04-23 03:13:54','updated_at' => '2020-04-23 03:13:54','deleted_at' => NULL]
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
