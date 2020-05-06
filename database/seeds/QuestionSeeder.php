<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => '¿Cuál es la tasa de alcohol máxima permitida a un conductor novel?',
            'answer1' => '0,25 miligramos de alcohol por litro de aire espirado.',
            'answer2' => '0,3 miligramos de alcohol por litro de aire espirado.',
            'answer3' => '0,15 miligramos de alcohol por litro de aire espirado.',
            'correct_ans' => 3,
            'hint' => 'La DGT establece la tasa máxima de alcohol permitida en 0,5 gramos por 
            litro de sangre o 0,25 miligramos por litro en aire respirado para conductores en general, y 0,15 miligramos para conductores novel',
            'correct' => null,
            'image' => ''
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => 'Para tratar de controlar o reducir una hemorragia por el oído, ¿cree usted que es conveniente taponarlo?',
            'answer1' => 'Sí, lo taponaremos porque es el método más eficaz.',
            'answer2' => 'No, lo adecuado es cubrir, sin presionar, el oído con una gasa estéril.',
            'answer3' => 'No, lo adecuado es inclinar la cabeza hacia delante para facilitar la salida de la sangre.',
            'correct_ans' => 2,
            'hint' => 'Ante una hemorragia externa: hay que realizar una compresión directa, aplicando gasas sobre la herida y haciendo presión fuerte. La presión directa se puede sustituir por un vendaje cuando la herida pare de sangrar, cuando la superficie sea amplia o si hay más heridos para atender.',
            'correct' => null,
            'image' => ''
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => 'Para incorporarse a la circulación, ¿se puede dar marcha atrás?',
            'answer1' => 'No, en ningún caso.',
            'answer2' => 'Sí, pero solo en vías urbanas.',
            'answer3' => 'Sí, es una de las maniobras en las que está permitido.',
            'correct_ans' => 3,
            'hint' => 'El Reglamento de Circulación establece de forma general, que estará prohibido circular marcha atrás excepto en los casos en que se utilice como maniobra complementaria de cualquier maniobra que se le exija. Así pues podrá realizarse de forma complementaria a la parada, el estacionamiento o la incorporación a la circulación, siempre que no se recorran más de 15 metros marcha atrás ni se invada un cruce.',
            'correct' => null,
            'image' => ''
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => 'El vehículo que salga de una vía no pavimentada, ¿a qué vehículo debe ceder el paso?',
            'answer1' => 'A todos los que circulen por la vía pavimentada.',
            'answer2' => 'Únicamente a los que se aproximen por la izquierda.',
            'answer3' => 'Únicamente a los vehículos de motor que se aproximen por la derecha. ',
            'correct_ans' => 1,
            'hint' => 'Los vehículos que circulen por vías sin pavimentar siempre deberán ceder el paso a los que circulen por la vía pavimentada.',
            'correct' => null,
            'image' => ''
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => 'El consumo de cannabis afecta al comportamiento del conductor porque…',
            'answer1' => 'Aumenta su nivel de atención.',
            'answer2' => 'Disminuye la somnolencia.',
            'answer3' => 'Aumenta su tiempo de reacción.',
            'correct_ans' => 3,
            'hint' => 'El cannabis tiene un grave efecto de alteración de la percepción con distorsión en las sensaciones de tipo espacio temporal y atenuación de la atención y de la capacidad de autocontrol, haciendo que aumente el tiempo de reacción y la somnolencia del conductor. También disminuirá su nivel de atención y concentración.',
            'correct' => null,
            'image' => ''
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => '¿Puede realizar un cambio de sentido en un lugar donde esté prohibido adelantar?',
            'answer1' => 'No, salvo que el cambio de sentido esté expresamente autorizado.',
            'answer2' => 'Sí, cuando la circulación en sentido contrario lo permita.',
            'answer3' => 'Sí, excepto entre la puesta y la salida de sol, porque disminuye la visibilidad.',
            'correct_ans' => 1,
            'hint' => 'Como norma general el Reglamento de Circulación indica que estará prohibido hacer un cambio de sentido donde esté prohibido adelantar, a no ser que el cambio de sentido esté expresamente autorizado.',
            'correct' => null,
            'image' => ''
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => '¿Está permitido remolcar con un turismo a un vehículo averiado por una autopista?',
            'answer1' => 'No, debe hacerlo una grúa.',
            'answer2' => 'Sí, hasta el taller más próximo',
            'answer3' => 'Sí, cuando la grúa tarde más de media hora',
            'correct_ans' => 1,
            'hint' => 'Solamente los vehículos-grúa destinados a ese fin podrán remolcar a aquellos vehículos que se hayan quedado detenidos en una autopista debido a una emergencia.',
            'correct' => null,
            'image' => ''
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => '¿Están obligados a llevar cinturón de seguridad los pasajeros de un taxi?',
            'answer1' => ' Sí, pero únicamente cuando viajen en las plazas delanteras.',
            'answer2' => 'Sí, en todos los casos, tanto en asientos delanteros como traseros.',
            'answer3' => 'No, no es necesario.',
            'correct_ans' => 2,
            'hint' => 'Los pasajeros de un taxi, tanto los que ocupen los asientos traseros como delanteros, estarán obligados a llevar cinturón de seguridad en todo tipo de vías urbanas e interurbanas.',
            'correct' => null,
            'image' => ''
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => '¿Para qué se debe utilizar el carril izquierdo en las calzadas de doble sentido y dos carriles?',
            'answer1' => 'Para circular todo el trayecto.',
            'answer2' => 'Para nada, pues no se debe circular por el carril izquierdo.',
            'answer3' => 'Para adelantar.',
            'correct_ans' => 3,
            'hint' => 'En las calzadas que cuenten con un doble sentido de circulación y dos carriles para cada sentido, se deberá circulará por el carril derecho, y solo se utilizará el izquierdo para adelantar siendo ese el uso que le deben dar los usuarios de la vía.',
            'correct' => null,
            'image' => ''
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => 'La carga que sobresale por delante de un vehículo, ¿cómo debe ir señalizada?',
            'answer1' => 'Con una luz blanca, de noche o en condiciones que disminuyan sensiblemente la visibilidad.',
            'answer2' => 'Con una luz blanca, tanto de día como de noche.',
            'answer3' => 'Con una luz blanca y un reflectante blanco, de noche o en condiciones que disminuyan sensiblemente la visibilidad.',
            'correct_ans' => 1,
            'hint' => 'La carga transportada que sobresalga de un vehículo por su parte delantera no deberá ser señalizada en horas diurnas, pero si en horas nocturnas o con poca visibilidad, en que se colocará una luz blanca y un panel reflectante blanco en la parte sobresaliente.',
            'correct' => null,
            'image' => ''
        ]);

    }
}
