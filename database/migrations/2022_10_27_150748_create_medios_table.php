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
        Schema::create('medios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->comment('');
            $table->string('alias')->comment('');
            $table->tinyInt('tipoRegion',4)->comment('');
            $table->text('observacion')->comment('');  
            
            $table->timestamps();
            $table->delete();
        });
        \App\Models\Medio::insert([
            [22, 'El Comercio', 'EL COMERCIO', 1, NULL, '2021-03-02 00:34:50', '2021-05-20 16:51:25', NULL],
            [64, 'Radio Nacional', 'RADIO NACIONAL', 2, NULL, '2021-03-01 18:33:56', '2021-05-21 20:15:43', NULL],
            [76, 'RPP', 'RPP', 3, 'CANAL 10  MOVISTAR', '2021-03-01 22:20:42', '2021-03-01 22:20:42', NULL],
            [123, 'TV Perú', 'TV PERÚ', 1, NULL, '2021-02-19 22:36:16', '2021-02-19 22:36:16', NULL]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medios');
    }
};
