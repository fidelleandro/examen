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
        Schema::create('plan_medios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('campaign_id')->unsigned()->comment('');
            $table->string('nombre')->comment('');
            $table->string('descripcion')->comment('');
            $table->boolean('status',4)->comment('');  
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('campaign_id')
                       ->references('id')
                       ->on('campaigns')
                       ->onCascade('delete');
        });

        \App\Models\PlanMedio::insert([
            ['id' => 516, 'campaign_id' => 448, 'nombre' => 'Agente de Prensa 2019','descripcion' => 'Proyecto financiado por Innovate Perú y PUCP','status' => 1,'created_at' => '2019-05-17 14:27:20','updated_at' => '2019-05-17 14:27:20','deleted_at' => NULL],
            ['id' => 780, 'campaign_id' => 675, 'nombre' => 'Book Media','descripcion' => 'Difundir','status' => 1,'created_at' => '2019-11-06 20:03:08','updated_at' => '2019-11-06 20:03:08','deleted_at' => NULL],
            ['id' => 943, 'campaign_id' => 798, 'nombre' => 'En voz alta: Audioteca para personas con disc','descripcion' => 'Publicar notas en webs y gestionar entrevista','status' => 1,'created_at' => '2020-04-23 03:22:19','updated_at' => '2020-04-23 03:22:19','deleted_at' => NULL],
            ['id' => 977, 'campaign_id' => 823, 'nombre' => 'Difusión Booktrailer.pe','descripcion' => 'Difundir nota o entrevistas de la herramienta','status' => 1,'created_at' => '2020-05-21 17:55:11','updated_at' => '2020-05-21 17:55:11','deleted_at' => NULL],
            ['id' => 1651,'campaign_id' => 1360,'nombre' => 'Fiestas patrias','descripcion' => 'Entrevistas','status' => 1,'created_at' => '2021-07-26 20:01:01','updated_at' => '2021-07-26 20:12:44','deleted_at' => NULL]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_medios');
    }
};
