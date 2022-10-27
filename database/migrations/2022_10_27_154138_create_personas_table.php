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
            $table->tinyInt('genero',1)->comment('');  
            $table->date('fechaNacimiento')->comment(''); 
            $table->string('profesion')->comment(''); 
            $table->text('observacion')->comment(''); 
            $table->tinyInt('famoso',1)->comment('');   
            $table->delete();
            $table->timestamps();
        });
        \App\Models\Persona::insert([
            [306, 'Elías', 'Betty', NULL, 0, NULL, 'Productora', NULL, NULL, '2017-06-06 22:59:36', '2021-08-06 20:22:35', NULL],
            [330, 'Acuña Villalobos', 'Pedro', NULL, 1, NULL, 'Editor General de Televisión', NULL, NULL, '2017-06-17 22:53:24', '2021-03-15 18:48:56', NULL],
            [1102, 'Coya ', 'Hugo', '', 1, NULL, '', '', 1, '2019-05-17 14:33:52', '2019-05-17 14:33:52', NULL],
            [1583, 'Garcia ', 'Brenda', '', 0, NULL, '', '', NULL, '2020-04-23 14:45:57', '2020-04-23 14:45:57', NULL]
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
