<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateUsuariosTable
 * Una migracion es un versionamiento de una base de datos
 *
 * Para crear una migracion se usa el comando: php artisan make:migration create_usuarios_table --table=usuarios
 * NOTA: --table=usuarios me crea por defecto el up y el down con el nombre de esta tabla
 *
 * Para poder ejecutar una migracion se usa el comando: php artisan migrate
 *
 * Para revertir una migracion se usa: php artisan migrate:rollback
 */
class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     * Con esto creo la tabla
     *
     * @return void
     */
    public function up()
    {

        // Schema::table ... Se usa para MODIFICAR LA TABLA

        //Para crear una tabla se usa Schema::create

        /*Si añadi un nuevo campo y quiero actualizar eso, debo revertirla
            y a su vez volverla a crear con el siguiente comando
            php artisan migrate:refresh
        */
//        Schema::create('usuarios', function (Blueprint $table) {
//            $table->increments('id');//Campo autoincremental
//            $table->string('nombre', 255);
//            $table->string('email', 255);
//            $table->string('password', 255);
//            $table->integer('edad');
//            $table->integer('sueldo');
//            $table->timestamps();//La ultima vez que cree el registro, y la ultima vez que modifique el registro
//        });

        /*PAra hacer lo mismo de arriaba pero orientado a mysql se hace de la siguiente manera*/

        DB::statement("
        CREATE TABLE usuarios(
            id int(255) AUTO_INCREMENT NOT NULL,
            nombre VARCHAR(255),
            email VARCHAR(255),
            password VARCHAR(255),
            PRIMARY KEY (id)
        )ENGINE = InnoDB;");
    }

    /**
     * Reverse the migrations.
     * Con esto borro la tabla
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuarios');//Eliminar la tabla
    }
}
