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
                       ->on('plan_medios')
                       ->onCascade('delete');
            $table->foreign('idProgramaContacto')
                       ->references('id')
                       ->on('programa_contactos')
                       ->onCascade('delete');           
        });
        \App\Models\DetallePlanMedio::insert([
            ['id' => 4543,
             'idPlanMedio' => 516, 
             'idProgramaContacto' => 1277,
             'idsMedioPlataforma' => '99',          
             'tipoTier' => 2,
             'tipoNota' => 2,
             'tipoEtapa' => 2,
             'statusPublicado' => 1,
             'created_at' => '2019-05-17 14:30:21',
             'updated_at' => '2021-05-30 02:16:19',
             'deleted_at' => NULL
            ],
            ['id' => 4544,
             'idPlanMedio' => 516, 
             'idProgramaContacto' => 423, 
             'idsMedioPlataforma' =>'3',            
             'tipoTier' => 1,
             'tipoNota' => 2,
             'tipoEtapa' => 2,
             'statusPublicado' => 1,
             'created_at' => '2019-05-17 14:30:51',
             'updated_at' => '2021-05-30 02:16:19',
             'deleted_at' => NULL
            ],
            ['id' => 4545,
             'idPlanMedio' => 516, 
             'idProgramaContacto' => 745, 
             'idsMedioPlataforma' =>'54',           
             'tipoTier' => 3,
             'tipoNota' => 1,
             'tipoEtapa' => 2,
             'statusPublicado' => 1,
             'created_at' => '2019-05-17 14:38:51',
             'updated_at' => '2021-05-30 02:16:19',
             'deleted_at' => NULL
            ],
            ['id' => 4546,
             'idPlanMedio' => 516, 
             'idProgramaContacto' => 839, 
             'idsMedioPlataforma' =>'59,60',        
             'tipoTier' => 1,
             'tipoNota' => 2,
             'tipoEtapa' => 2,
             'statusPublicado' => 0,
             'created_at' => '2019-05-17 14:39:06',
             'updated_at' => '2021-05-30 02:16:18',
             'deleted_at' => NULL
            ],
            ['id' => 8997,
             'idPlanMedio' => 780, 
             'idProgramaContacto' => 745, 
             'idsMedioPlataforma' =>'54,78,193',    
             'tipoTier' => 2,
             'tipoNota' => 1,
             'tipoEtapa' => 2,
             'statusPublicado' => 1,
             'created_at' => '2020-04-23 03:23:29',
             'updated_at' => '2021-05-26 01:22:06',
             'deleted_at' => NULL
            ],
            ['id' => 9002,
             'idPlanMedio' => 943, 
             'idProgramaContacto' => 600, 
             'idsMedioPlataforma' =>'54,78,193,853',
             'tipoTier' => 2,
             'tipoNota' => 1,
             'tipoEtapa' => 2,
             'statusPublicado' => 1,
             'created_at' => '2020-04-23 13:34:45',
             'updated_at' => '2021-05-26 01:22:07',
             'deleted_at' => NULL
            ],
            ['id' => 9006,
             'idPlanMedio' => 943, 
             'idProgramaContacto' => 1277,
             'idsMedioPlataforma' => '99',          
             'tipoTier' => 2,
             'tipoNota' => 2,
             'tipoEtapa' => 2,
             'statusPublicado' => 1,
             'created_at' => '2020-04-23 14:47:15',
             'updated_at' => '2021-05-26 01:22:07',
             'deleted_at' => NULL
            ],
            ['id' => 9007,
             'idPlanMedio' => 977, 
             'idProgramaContacto' => 745, 
             'idsMedioPlataforma' =>'54',           
             'tipoTier' => 2,
             'tipoNota' => 2,
             'tipoEtapa' => 2,
             'statusPublicado' => 0,
             'created_at' => '2020-04-23 15:02:57',
             'updated_at' => '2020-04-23 15:02:57',
             'deleted_at' => NULL
            ],
            ['id' => 9008,
             'idPlanMedio' => 977, 
             'idProgramaContacto' => 1260,
             'idsMedioPlataforma' => '59',          
             'tipoTier' => 3,
             'tipoNota' => 2,
             'tipoEtapa' => 2,
             'statusPublicado' => 0,
             'created_at' => '2020-04-23 15:03:42',
             'updated_at' => '2020-04-23 15:03:42',
             'deleted_at' => NULL
            ],
            ['id' => 9009,
             'idPlanMedio' => 943, 
             'idProgramaContacto' => 966, 
             'idsMedioPlataforma' =>'3,4',          
             'tipoTier' => 1,
             'tipoNota' => 2,
             'tipoEtapa' => 2,
             'statusPublicado' => 1,
             'created_at' => '2020-04-23 19:15:24',
             'updated_at' => '2021-05-26 01:22:08',
             'deleted_at' => NULL
            ],
            ['id' => 9011,
             'idPlanMedio' => 1651,
             'idProgramaContacto' => 1277,
             'idsMedioPlataforma' => '99',          
             'tipoTier' => 2,
             'tipoNota' => 1,
             'tipoEtapa' => 2,
             'statusPublicado' => 1,
             'created_at' => '2020-04-23 21:24:35',
             'updated_at' => '2021-05-26 01:22:08',
             'deleted_at' => NULL
            ],
            ['id' => 9014,
             'idPlanMedio' => 1651,
             'idProgramaContacto' => 1260,
             'idsMedioPlataforma' => '59',          
             'tipoTier' => 3,
             'tipoNota' => 1,
             'tipoEtapa' => 2,
             'statusPublicado' => 1,
             'created_at' => '2020-04-24 15:47:30',
             'updated_at' => '2021-05-26 01:23:05',
             'deleted_at' => NULL
            ],
            ['id' => 9086,
             'idPlanMedio' => 1651,
             'idProgramaContacto' => 600, 
             'idsMedioPlataforma' => '54,193',      
             'tipoTier' => 2,
             'tipoNota' => 2,
             'tipoEtapa' => 2,
             'statusPublicado' => 0,
             'created_at' => '2020-05-05 15:00:49',
             'updated_at' => '2020-05-05 15:00:49',
             'deleted_at' => NULL
            ],
            ['id' => 9087,
             'idPlanMedio' => 1651,
             'idProgramaContacto' => 1281,
             'idsMedioPlataforma' => '4',           
             'tipoTier' => 1,
             'tipoNota' => 1,
             'tipoEtapa' => 2,
             'statusPublicado' => 1,
             'created_at' => '2020-05-05 15:12:06',
             'updated_at' => '2021-05-26 00:24:23',
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
        Schema::dropIfExists('detalle_plan_medios');
    }
};
