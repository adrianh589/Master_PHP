<?php

use Illuminate\Database\Seeder;

class frutas_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * Los seeders sirven para rellenar una base de datos de informacion
     * seed = semilla = sembrar información
     *
     * No es buena practica usarlos a menos que queramos tener informacion por defecto en la BD
     *
     * @return void
     */
    public function run()
    {
        for ( $i=0; $i<=20; $i++ ){//Aqui se rellena la tabla con informacion que nosotros le suministremos
            DB::table('frutas')->insert(array(
                'nombre' => 'cereza' . $i,
                'descripcion' => 'descripcion de la fruta' . $i,
                'precio' => $i,
                'fecha' => date('Y-m-d')
            ));
        }

        $this->command->info('La tabla de frutas ha sido rellenada');//Esto es apra imprimir
        // en artisan el mensaje que nosotros
        // queramos cuand ya haya terminado de introducir los datos en la tabla de la BD

        //Para ejecutar esto en artisan se hace el siguiebte comando:
        //php artisan db:seed --class=frutas_seed
    }
}
