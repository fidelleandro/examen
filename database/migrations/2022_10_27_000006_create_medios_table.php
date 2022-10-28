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
            $table->boolean('tipoRegion',4)->comment('');
            $table->text('observacion')->nullable()->comment('');   
            $table->timestamps();
            $table->softDeletes();
        });
        \App\Models\Medio::insert([
            ['id' => 22, 
            'nombre' => 'El Comercio',
            'alias' => 'EL COMERCIO',
            'tipoRegion' => 1,
            'observacion' => NULL,
            'created_at' => '2021-03-02 00:34:50', 
            'updated_at' => '2021-05-20 16:51:25', 
            'deleted_at' =>NULL
            ],
            ['id' => 64, 
             'nombre' => 'Radio Nacional',
             'alias' => 'RADIO NACIONAL',
             'tipoRegion' => 2,
             'observacion' => NULL,
             'created_at' => '2021-03-01 18:33:56', 
             'updated_at' => '2021-05-21 20:15:43',
             'deleted_at' => NULL],
            ['id' => 76, 
             'nombre' => 'RPP',
             'alias' => 'RPP',
             'tipoRegion' => 3,
             'observacion' => 'CANAL 10  MOVISTAR',
             'created_at' => '2021-03-01 22:20:42', 
             'updated_at' => '2021-03-01 22:20:42', 
             'deleted_at' => NULL
            ],
            ['id' => 123,
            'nombre' => 'TV Perú',
            'alias' => 'TV PERÚ',
            'tipoRegion' => 1,
            'observacion' => NULL,
            'created_at' => '2021-02-19 22:36:16', 
            'updated_at' => '2021-02-19 22:36:16', 
            'deleted_at' => NULL]
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
