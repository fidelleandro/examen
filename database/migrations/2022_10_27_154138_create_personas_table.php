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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('apellidos')->comment('');
            $table->string('nombres')->comment('');
            $table->string('apodo')->comment('');
            $table->tinyInteger('genero',1)->comment('');  
            $table->date('fechaNacimiento')->comment(''); 
            $table->string('profesion')->comment(''); 
            $table->text('observacion')->comment(''); 
            $table->tinyInteger('famoso',1)->comment('');    
            $table->timestamps();
            $table->softDeletes();
        });
        \App\Models\Persona::insert([
            ['id' => 306, 'apellidos' => 'Elías','nombres' => 'Betty','apodo' => NULL,'genero' => 0,'fechaNacimiento' => NULL,'profesion' => 'Productora','observacion' => NULL,'famoso' => NULL,'created_at' => '2017-06-06 22:59:36','updated_at' => '2021-08-06 20:22:35','deleted_at' => NULL],
            ['id' => 330, 'apellidos' => 'Acuña Villalobos','nombres' => 'Pedro','apodo' => NULL,'genero' => 1,'fechaNacimiento' => NULL,'profesion' => 'Editor General de Televisión','observacion' => NULL,'famoso' => NULL,'created_at' => '2017-06-17 22:53:24','updated_at' => '2021-03-15 18:48:56','deleted_at' => NULL],
            ['id' => 1102,'apellidos' => 'Coya ','nombres' => 'Hugo','apodo' => '','genero' => 1,'fechaNacimiento' => NULL,'profesion' => '','observacion' => '','famoso' => 1,'created_at' => '2019-05-17 14:33:52','updated_at' => '2019-05-17 14:33:52','deleted_at' => NULL],
            ['id' => 1583,'apellidos' => 'Garcia ','nombres' => 'Brenda','apodo' => '','genero' => 0,'fechaNacimiento' => NULL,'profesion' => '','observacion' => '','famoso' => NULL,'created_at' => '2020-04-23 14:45:57','updated_at' => '2020-04-23 14:45:57','deleted_at' => NULL]
        ]);    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
};
