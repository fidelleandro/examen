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
        Schema::create('detalle_plan_medios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idPlanMedio')->unsigned()->comment('');
            $table->bigInteger('idProgramaContacto')->unsigned()->comment('');
            $table->string('idsMedioPlataforma')->comment('');
            $table->boolean('tipoTier',4)->comment(''); 
            $table->boolean('tipoNota',4)->comment(''); 
            $table->boolean('tipoEtapa',4)->comment(''); 
            $table->boolean('statusPublicado',4)->comment(''); 
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('idPlanMedio')
                       ->references('id')
                       ->on('medios')
                       ->onCascade('delete');
            $table->foreign('idProgramaContacto')
                       ->references('id')
                       ->on('programa_contactos')
                       ->onCascade('delete');           
        });
        \App\Models\DetallePlanMedio::insert([
            [4543, 516, 1277, '99', 2, 2, 2, 1, '2019-05-17 14:30:21', '2021-05-30 02:16:19', NULL],
            [4544, 516, 423, '3', 1, 2, 2, 1, '2019-05-17 14:30:51', '2021-05-30 02:16:19', NULL],
            [4545, 516, 745, '54', 3, 1, 2, 1, '2019-05-17 14:38:51', '2021-05-30 02:16:19', NULL],
            [4546, 516, 839, '59,60', 1, 2, 2, 0, '2019-05-17 14:39:06', '2021-05-30 02:16:18', NULL],
            [8997, 780, 745, '54,78,193', 2, 1, 2, 1, '2020-04-23 03:23:29', '2021-05-26 01:22:06', NULL],
            [9002, 943, 600, '54,78,193,853', 2, 1, 2, 1, '2020-04-23 13:34:45', '2021-05-26 01:22:07', NULL],
            [9006, 943, 1277, '99', 2, 2, 2, 1, '2020-04-23 14:47:15', '2021-05-26 01:22:07', NULL],
            [9007, 977, 745, '54', 2, 2, 2, 0, '2020-04-23 15:02:57', '2020-04-23 15:02:57', NULL],
            [9008, 977, 1260, '59', 3, 2, 2, 0, '2020-04-23 15:03:42', '2020-04-23 15:03:42', NULL],
            [9009, 943, 966, '3,4', 1, 2, 2, 1, '2020-04-23 19:15:24', '2021-05-26 01:22:08', NULL],
            [9011, 1651, 1277, '99', 2, 1, 2, 1, '2020-04-23 21:24:35', '2021-05-26 01:22:08', NULL],
            [9014, 1651, 1260, '59', 3, 1, 2, 1, '2020-04-24 15:47:30', '2021-05-26 01:23:05', NULL],
            [9086, 1651, 600, '54,193', 2, 2, 2, 0, '2020-05-05 15:00:49', '2020-05-05 15:00:49', NULL],
            [9087, 1651, 1281, '4', 1, 1, 2, 1, '2020-05-05 15:12:06', '2021-05-26 00:24:23', NULL]
        ]); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_plan_medios');
    }
};
