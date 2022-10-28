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
        Schema::create('programa_contactos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('programa_id')->unsigned()->comment(''); 
            $table->bigInteger('idContacto')->unsigned()->comment('');  
            $table->boolean('tipoInfluencia',4)->comment('');  
            $table->string('idsMedioPlataforma')->comment('');  
            $table->string('observacion')->nullable()->comment('');  
            $table->boolean('activo',1)->default(1)->comment('');  
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('programa_id')
                       ->references('id')
                       ->on('programas')
                       ->onCascade('delete');
            $table->foreign('idContacto')
                       ->references('id')
                       ->on('personas')
                       ->onCascade('delete');                      
        });

        \App\Models\ProgramaContacto::insert([
            ['id' => 423, 
             'programa_id' => 47, 
             'idContacto' => 330, 
             'tipoInfluencia' => 2, 
             'idsMedioPlataforma' => '3',
             'observacion' => '',
             'activo' => 0,
             'created_at' => '2018-04-12 15:41:51',
             'updated_at' => '2021-07-20 14:37:30',
             'deleted_at' => NULL
            ],
            ['id' => 600, 
             'programa_id' => 142,
             'idContacto' => 330, 
             'tipoInfluencia' => 2, 
             'idsMedioPlataforma' => '54,78,193,853' ,
             'observacion' => NULL,
             'activo' => 0,
             'created_at' => '2018-10-03 13:58:42',
             'updated_at' => '2021-08-02 18:31:58',
             'deleted_at' => NULL
            ],
            ['id' => 745, 
             'programa_id' => 203,
             'idContacto' => 1102,
             'tipoInfluencia' => 2, 
             'idsMedioPlataforma' => '54,78,193',
             'observacion' => '',
             'activo' => 1,
             'created_at' => '2019-03-25 22:46:53',
             'updated_at' => '2019-09-17 17:28:08',
             'deleted_at' => NULL
            ],
            ['id' => 839, 
             'programa_id' => 71, 
             'idContacto' => 1102,
             'tipoInfluencia' => 2, 
             'idsMedioPlataforma' => '59,60',
             'observacion' => '',
             'activo' => 1,
             'created_at' => '2019-05-17 14:33:52',
             'updated_at' => '2019-07-01 17:09:58',
             'deleted_at' => NULL
            ],
            ['id' => 966, 
             'programa_id' => 143,
             'idContacto' => 306, 
             'tipoInfluencia' => 2, 
             'idsMedioPlataforma' => '3,4,99,514',
             'observacion' => '',
             'activo' => 1,
             'created_at' => '2019-07-15 22:51:20',
             'updated_at' => '2020-07-31 17:22:42',
             'deleted_at' => NULL
            ],
            ['id' => 1260,
             'programa_id' => 368,
             'idContacto' => 1583,
             'tipoInfluencia' => 2, 
             'idsMedioPlataforma' => '59',
             'observacion' => '',
             'activo' => 1,
             'created_at' => '2020-03-25 19:43:01',
             'updated_at' => '2020-04-25 22:07:07',
             'deleted_at' => NULL
            ],
            ['id' => 1276,
             'programa_id' => 126,
             'idContacto' => 330, 
             'tipoInfluencia' => 2, 
             'idsMedioPlataforma' => '5,6',
             'observacion' => '',
             'activo' => 0,
             'created_at' => '2020-04-23 13:31:57',
             'updated_at' => '2021-04-22 17:31:34',
             'deleted_at' => NULL
            ],
            ['id' => 1277,
             'programa_id' => 710,
             'idContacto' => 1583,
             'tipoInfluencia' => 2, 
             'idsMedioPlataforma' => '99',
             'observacion' => '',
             'activo' => 1,
             'created_at' => '2020-04-23 14:45:58',
             'updated_at' => '2020-04-23 20:59:00',
             'deleted_at' => NULL
            ],
            ['id' => 1281,
             'programa_id' => 106,
             'idContacto' => 1102,
             'tipoInfluencia' => 2, 
             'idsMedioPlataforma' => '4',
             'observacion' => ''  ,
             'activo' => 1,
             'created_at' => '2020-05-05 15:11:09',
             'updated_at' => '2020-06-12 14:31:27',
             'deleted_at' => NULL
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programa_contactos');
    }
};
