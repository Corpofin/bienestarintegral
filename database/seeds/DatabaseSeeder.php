<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Patient::class, 50)->create();
        factory(App\Professional::class, 5)->create();
        
        DB::table('specialties')->insert(['specialty' => 'Masajes', 'description' => 'El masaje es una forma de manipulación de las capas superficiales y profundas de los músculos del cuerpo utilizando varias técnicas, para mejorar sus funciones, ayudar en procesos de curación, disminuir la actividad refleja de los músculos, inhibir la excitabilidad motoneuronal, promover la relajación y el bienestar y como actividad recreativa.']);
        DB::table('specialties')->insert(['specialty' => 'Estética', 'description' => 'El tratamiento estético ayuda a que el cuerpo y en especial la piel refleje un bienestar y salud interior del cuerpo']);
        DB::table('specialties')->insert(['specialty' => 'Pedicuría', 'description' => 'Tratamiento específico enfocado en los pies, su salud superficial y su belleza y estética']);
        DB::table('specialties')->insert(['specialty' => 'Manicuría', 'description' => 'Tratamiento de belleza cosmético para las uñas y manos que suele realizarse en casa o en un salón de belleza. En una manicura se cortan o liman los bordes de las uñas, se realizan masajes a las manos y se aplica esmalte de uñas']);
        DB::table('specialties')->insert(['specialty' => 'Depilación', 'description' => 'La depilación o extirpación del pelo es una técnica cosmética que consiste en eliminar el vello de alguna zona del cuerpo, utilizada particularmente por el ser humano.']);
        DB::table('specialties')->insert(['specialty' => 'Rehabilitación', 'description' => 'El conjunto de medidas sociales, educativas y profesionales destinadas a restituir al paciente minusválido la mayor capacidad e independencia posibles']);

        DB::table('treatments')->insert(['treatment' => 'Drenaje Linfático']);
        DB::table('treatments')->insert(['treatment' => 'Uñas arqueadas']);
        DB::table('treatments')->insert(['treatment' => 'Ultrasonido']);
        DB::table('treatments')->insert(['treatment' => 'Reflexología']);
        DB::table('treatments')->insert(['treatment' => 'Limpieza de acné']);
        DB::table('treatments')->insert(['treatment' => 'Masaje con piedras calientes']);
        DB::table('treatments')->insert(['treatment' => 'Francesitas']);
        DB::table('treatments')->insert(['treatment' => 'Acupuntura']);

        DB::table('series')->insert(['series' => '2 x 1', 'cant' => 2]);
        DB::table('series')->insert(['series' => '10 sesiones al precio de 9', 'cant' => 10]);
        DB::table('series')->insert(['series' => '5 sesiones en una semana', 'cant' => 5]);
        DB::table('series')->insert(['series' => '1 sesión por mes 2017', 'cant' => 12]);

        factory(App\Appointment::class, 50)->create();
    }
}
