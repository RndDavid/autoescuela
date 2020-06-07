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
        // B
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => '¿Cuál es la tasa de alcohol máxima permitida a un conductor novel?',
            'answer1' => '0,25 miligramos de alcohol por litro de aire espirado.',
            'answer2' => '0,3 miligramos de alcohol por litro de aire espirado.',
            'answer3' => '0,15 miligramos de alcohol por litro de aire espirado.',
            'correct_ans' => 3,
            'hint' => 'La DGT establece la tasa máxima de alcohol permitida en 0,5 gramos por litro de sangre o 0,25 miligramos por litro en aire respirado para conductores en general, y 0,15 miligramos para conductores novel',
            'image' => '../img/tests/id_1.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => 'Para tratar de controlar o reducir una hemorragia por el oído, ¿cree usted que es conveniente taponarlo?',
            'answer1' => 'Sí, lo taponaremos porque es el método más eficaz.',
            'answer2' => 'No, lo adecuado es cubrir, sin presionar, el oído con una gasa estéril.',
            'answer3' => 'No, lo adecuado es inclinar la cabeza hacia delante para facilitar la salida de la sangre.',
            'correct_ans' => 2,
            'hint' => 'Ante una hemorragia externa: hay que realizar una compresión directa, aplicando gasas sobre la herida y haciendo presión fuerte. La presión directa se puede sustituir por un vendaje cuando la herida pare de sangrar, cuando la superficie sea amplia o si hay más heridos para atender.',
            'image' => '../img/tests/id_2.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => 'Para incorporarse a la circulación, ¿se puede dar marcha atrás?',
            'answer1' => 'No, en ningún caso.',
            'answer2' => 'Sí, pero solo en vías urbanas.',
            'answer3' => 'Sí, es una de las maniobras en las que está permitido.',
            'correct_ans' => 3,
            'hint' => 'El Reglamento de Circulación establece de forma general, que estará prohibido circular marcha atrás excepto en los casos en que se utilice como maniobra complementaria de cualquier maniobra que se le exija. Así pues podrá realizarse de forma complementaria a la parada, el estacionamiento o la incorporación a la circulación, siempre que no se recorran más de 15 metros marcha atrás ni se invada un cruce.',
            'image' => '../img/tests/id_3.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => 'El vehículo que salga de una vía no pavimentada, ¿a qué vehículo debe ceder el paso?',
            'answer1' => 'A todos los que circulen por la vía pavimentada.',
            'answer2' => 'Únicamente a los que se aproximen por la izquierda.',
            'answer3' => 'Únicamente a los vehículos de motor que se aproximen por la derecha. ',
            'correct_ans' => 1,
            'hint' => 'Los vehículos que circulen por vías sin pavimentar siempre deberán ceder el paso a los que circulen por la vía pavimentada.',
            'image' => '../img/tests/id_4.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => 'El consumo de cannabis afecta al comportamiento del conductor porque…',
            'answer1' => 'Aumenta su nivel de atención.',
            'answer2' => 'Disminuye la somnolencia.',
            'answer3' => 'Aumenta su tiempo de reacción.',
            'correct_ans' => 3,
            'hint' => 'El cannabis tiene un grave efecto de alteración de la percepción con distorsión en las sensaciones de tipo espacio temporal y atenuación de la atención y de la capacidad de autocontrol, haciendo que aumente el tiempo de reacción y la somnolencia del conductor. También disminuirá su nivel de atención y concentración.',
            'image' => '../img/tests/id_5.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => '¿Puede realizar un cambio de sentido en un lugar donde esté prohibido adelantar?',
            'answer1' => 'No, salvo que el cambio de sentido esté expresamente autorizado.',
            'answer2' => 'Sí, cuando la circulación en sentido contrario lo permita.',
            'answer3' => 'Sí, excepto entre la puesta y la salida de sol, porque disminuye la visibilidad.',
            'correct_ans' => 1,
            'hint' => 'Como norma general el Reglamento de Circulación indica que estará prohibido hacer un cambio de sentido donde esté prohibido adelantar, a no ser que el cambio de sentido esté expresamente autorizado.',
            'image' => '../img/tests/id_6.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => '¿Está permitido remolcar con un turismo a un vehículo averiado por una autopista?',
            'answer1' => 'No, debe hacerlo una grúa.',
            'answer2' => 'Sí, hasta el taller más próximo',
            'answer3' => 'Sí, cuando la grúa tarde más de media hora',
            'correct_ans' => 1,
            'hint' => 'Solamente los vehículos-grúa destinados a ese fin podrán remolcar a aquellos vehículos que se hayan quedado detenidos en una autopista debido a una emergencia.',
            'image' => '../img/tests/id_7.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => '¿Están obligados a llevar cinturón de seguridad los pasajeros de un taxi?',
            'answer1' => ' Sí, pero únicamente cuando viajen en las plazas delanteras.',
            'answer2' => 'Sí, en todos los casos, tanto en asientos delanteros como traseros.',
            'answer3' => 'No, no es necesario.',
            'correct_ans' => 2,
            'hint' => 'Los pasajeros de un taxi, tanto los que ocupen los asientos traseros como delanteros, estarán obligados a llevar cinturón de seguridad en todo tipo de vías urbanas e interurbanas.',
            'image' => '../img/tests/id_8.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => '¿Para qué se debe utilizar el carril izquierdo en las calzadas de doble sentido y dos carriles?',
            'answer1' => 'Para circular todo el trayecto.',
            'answer2' => 'Para nada, pues no se debe circular por el carril izquierdo.',
            'answer3' => 'Para adelantar.',
            'correct_ans' => 3,
            'hint' => 'En las calzadas que cuenten con un doble sentido de circulación y dos carriles para cada sentido, se deberá circulará por el carril derecho, y solo se utilizará el izquierdo para adelantar siendo ese el uso que le deben dar los usuarios de la vía.',
            'image' => '../img/tests/id_9.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => 'La carga que sobresale por delante de un vehículo, ¿cómo debe ir señalizada?',
            'answer1' => 'Con una luz blanca, de noche o en condiciones que disminuyan sensiblemente la visibilidad.',
            'answer2' => 'Con una luz blanca, tanto de día como de noche.',
            'answer3' => 'Con una luz blanca y un reflectante blanco, de noche o en condiciones que disminuyan sensiblemente la visibilidad.',
            'correct_ans' => 1,
            'hint' => 'La carga transportada que sobresalga de un vehículo por su parte delantera no deberá ser señalizada en horas diurnas, pero si en horas nocturnas o con poca visibilidad, en que se colocará una luz blanca y un panel reflectante blanco en la parte sobresaliente.',
            'image' => '../img/tests/id_10.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => '¿Qué alumbrado llevará encendido una motocicleta durante el día?',
            'answer1' => 'El de corto alcance o cruce.',
            'answer2' => 'El de posición o el de corto alcance.',
            'answer3' => 'Ninguno.',
            'correct_ans' => 1,
            'hint' => 'Las motocicletas que circulen por cualquier vía pública urbana o interurbana deberán llevar encendida de forma obligatoria durante el día el alumbrado de corto alcance o cruce.',
            'image' => '../img/tests/id_11.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => 'Una línea blanca continua sobre la calzada, sensiblemente más ancha que en el caso general...',
            'answer1' => 'indica la existencia de un carril especial.',
            'answer2' => 'sirve para delimitar, únicamente, los carriles bus.',
            'answer3' => 'indica el borde de la calzada.',
            'correct_ans' => 1,
            'hint' => 'Una línea blanca continua, ligeramente más ancha que el resto, puede indicar la existencia de un carril especial en la calzada, y los vehículos que circulen por dicho carril especial podrán sobrepasar la línea blanca continua con precaución, cuando así lo requiera la maniobra o el destino que desean seguir.',
            'image' => '../img/tests/id_13.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => 'La mayor parte de las víctimas mortales por accidente de circulación se producen en...',
            'answer1' => 'vías interurbanas.',
            'answer2' => 'vías urbanas.',
            'answer3' => 'travesías.',
            'correct_ans' => 1,
            'hint' => 'La mayoría de las víctimas, especialmente las mortales, se producen en accidentes en vías interurbanas, especialmente en los tramos rectos incluso más que en las curvas, a velocidades entre 50 y 80 km por hora.',
            'image' => '../img/tests/id_14.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => 'Cuando un vehículo accidentado comienza a arder, ¿qué se debe hacer primero?',
            'answer1' => 'Apagar el fuego.',
            'answer2' => 'Sacar rápidamente a los heridos.',
            'answer3' => 'Ir a buscar ayuda.',
            'correct_ans' => 2,
            'hint' => 'Se debe prestar a los heridos el auxilio que resulte más adecuado para que no resulte más agravada su situación.',
            'image' => '../img/tests/id_15.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => '¿Está permitido colocar los triángulos de preseñalización de peligro a menos de 50 metros del vehículo averiado?',
            'answer1' => 'Sí, a esa distancia ya son visibles.',
            'answer2' => 'No, deben estar al menos a 100 metros.',
            'answer3' => 'No.',
            'correct_ans' => 3,
            'hint' => 'Los triángulos de preseñalización de un vehículo averiado deben colocarse como mínimo a 50 metros del vehículo, haciendo qué estos sean visible por el resto de usuarios de la vía al menos desde 100 metros por detrás.',
            'image' => '../img/tests/id_16.jpg'
        ]);
        // A1/A2
        DB::table('questions')->insert([
            'category' => 'A1_A2',
            'question' => 'Si nos vemos obligados a frenar durante el trazado de una curva, debemos utilizar...',
            'answer1' => 'solamente el freno delantero.',
            'answer2' => 'simultáneamente los dos frenos, el delantero con menor presión y aumentarla con el trasero.',
            'answer3' => 'solamente el freno trasero.',
            'correct_ans' => 2,
            'hint' => ' Si nos vemos obligados a frenar durante el trazado de una curva, debemos utilizar simultáneamente los dos frenos, el delantero con menor presión y aumentarla con el trasero.',
            'image' => '../img/tests/id_17.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'A1_A2',
            'question' => 'Su motocicleta está equipada con frenos de tambor. ¿Qué mantenimiento precisa dicho sistema de frenos?',
            'answer1' => 'Sustitución de las pastillas si se encuentran desgastadas',
            'answer2' => 'Comprobación de la viscosidad del líquido de frenos y su relleno, si fuera preciso, con aceite multigrado.',
            'answer3' => 'Sustituir las zapatas si se encuentran desgastadas y limpiarlas si fuera necesario.',
            'correct_ans' => 3,
            'hint' => 'El sistema de frenos de tambor precisa de mantenimiento, a saber: sustituir las zapatas si se encuentran desgastadas y limpiarlas si fuera necesario.',
            'image' => '../img/tests/id_18.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'A1_A2',
            'question' => 'En relación con el casco de protección, el motorista debe saber que...',
            'answer1' => 'debe quedar bastante holgado para que cumpla su función protectora.',
            'answer2' => 'es preferible utilizar el tipo jet.',
            'answer3' => 'debe estar homologado.',
            'correct_ans' => 3,
            'hint' => 'La elección de un casco y su adecuada utilización puede ser vital. Lo importante es que sea seguro, homologado, que se adapte a nuestra cabeza y que esté bien abrochado porque, si no, ni el mejor de los cascos nos protegerá.',
            'image' => '../img/tests/id_19.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'A1_A2',
            'question' => 'Ante un accidente de tráfico, ¿cuál es la primera medida a adoptar?',
            'answer1' => 'Identificar a los heridos inconscientes.',
            'answer2' => 'Señalizar y proteger la zona.',
            'answer3' => 'Taponar las hemorragias de los heridos.',
            'correct_ans' => 2,
            'hint' => 'Antes de nada y para evitar que se produzca un nuevo accidente, es primordial hacer segura la zona del accidente. ¡Tu seguridad y la de los propios accidentados son lo primero!',
            'image' => '../img/tests/id_20.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'A1_A2',
            'question' => 'La motocicleta que se observa en la fotografía tiene sus neumáticos en perfecto estado y circula por una calzada seca y con pavimento en buen estado. En caso de frenada, las anteriores condiciones...',
            'answer1' => 'favorecerán el que no aumente la distancia de detención.',
            'answer2' => 'favorecerán el que disminuya la distancia de reacción.',
            'answer3' => 'provocarán un aumento en la distancia de frenado.',
            'correct_ans' => 1,
            'hint' => 'Los pavimentos mojados ocasionan una disminución de las condiciones de adherencia, por lo que en caso de peligro, la distancia de frenado se verá aumentada. Por el contrario cuando la calzada esté seca y en buen estado dicha situación favorecerá que no aumente la distancia de detención.',
            'image' => '../img/tests/id_21.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'A1_A2',
            'question' => 'La fatiga, el alcohol o el mal tiempo, ¿influyen en los accidentes?',
            'answer1' => 'No, porque los factores de riesgo son otros.',
            'answer2' => 'Sí, son factores de riesgo que aumentan la probabilidad y gravedad de los accidentes.',
            'answer3' => 'No, ya que un accidente es impredecible.',
            'correct_ans' => 2,
            'hint' => 'La fatiga, el alcohol, la ingesta de medicamentos o el mal tiempo son factores de riesgo que influyen en la precisión del conductor y en la seguridad de la conducción, haciendo que aumenten las probabilidades de accidente.',
            'image' => '../img/tests/id_22.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'A1_A2',
            'question' => 'Cuando los motoristas circulan en grupos grandes...',
            'answer1' => 'pueden ir todos juntos y ocupar toda la calzada.',
            'answer2' => 'deben circular muy juntos, para que puedan ser adelantados con facilidad por otros vehículos.',
            'answer3' => 'no deben ir todos juntos, sino divididos en subgrupos distanciados entre sí.',
            'correct_ans' => 3,
            'hint' => 'Cuando un grupo de motocicletas circule conjuntamente por una vía será recomendable que circulen todos juntos para evitar que se dividan y alejen entre si y la primera posición la deberá ocupar la motocicleta de menor potencia, ya que de ésta manera el resto de motocicletas se verá obligado a circular a la velocidad de éstas y no se descolgará del grupo.',
            'image' => '../img/tests/id_23.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'A1_A2',
            'question' => 'Una motocicleta de más de cuatro años de antigüedad, ¿cuándo debe pasar la inspección técnica reglamentaria?',
            'answer1' => 'Cada año.',
            'answer2' => 'Cada seis meses.',
            'answer3' => ' Cada dos años.',
            'correct_ans' => 3,
            'hint' => 'Todas las motocicletas deberán pasar una inspección técnica reglamentaria, la primera de ellas a los cuatro años desde su fecha de matriculación. Una vez superada esta prueba, y a partir de este momento, las inspecciones deberán realizarse cada dos años y se anotarán en dicha tarjeta ITV.',
            'image' => '../img/tests/id_24.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'A1_A2',
            'question' => 'Un permiso de conducción caducado...',
            'answer1' => 'no podrá ser prorrogado.',
            'answer2' => 'sólo podrá prorrogarse si su titular supera de nuevo las pruebas prácticas y teóricas correspondientes.',
            'answer3' => 'no autoriza a conducir a su titular.',
            'correct_ans' => 3,
            'hint' => 'Si te caduca el carnet de conducir no debes examinarte de nuevo a la hora de renovarlo. El permiso de conducir caducado no te autoriza a circular, pero puedes renovarlo cuando quieras.',
            'image' => '../img/tests/id_25.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'A1_A2',
            'question' => 'La disposición más generalizada de los mandos en la motocicleta es la que permite accionar con la mano izquierda...',
            'answer1' => 'el puño acelerador y la maneta del freno delantero.',
            'answer2' => 'la maneta de embrague, la bocina y las luces.',
            'answer3' => 'la maneta de embrague y se acciona el puño acelerador.',
            'correct_ans' => 2,
            'hint' => 'En la gran mayoría de las motocicletas encontraremos que mediante el uso de la maneta izquierda podremos accionar la palanca del embrague, el mando de señales acústicas o bocina y el sistema de alumbrado.',
            'image' => '../img/tests/id_26.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'A1_A2',
            'question' => 'Al realizar con su motocicleta un giro muy cerrado a una velocidad de 30 km/h, ¿qué puede suceder si al describir dicho giro aprieta fuertemente el freno delantero?',
            'answer1' => 'Nada, debido a que a esta velocidad el efecto giroscópico estabilizaría la motocicleta.',
            'answer2' => 'Que la rueda delantera quede bloqueada y produzca una caída.',
            'answer3' => 'Que la rueda trasera quede bloqueada por la fuerza cinética y se produzca una caída.',
            'correct_ans' => 2,
            'hint' => 'Si el conductor de una motocicleta acciona el freno delantero fuertemente mientras describe la trayectoria de una curva, la velocidad de giro de dicha rueda se reducirá de forma también muy brusca, conteniendo la inercia, no solo de la motocicleta, sino también la del piloto. El resultado es un traslado brutal de pesos, que hará que la rueda delantera deje de girar, quedando bloqueada y produciendo la caída del conductor.',
            'image' => '../img/tests/id_27.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'A1_A2',
            'question' => 'Con su motocicleta, ¿cuál debe ser su comportamiento ante un semáforo amarillo fijo?',
            'answer1' => 'Acelerar para pasar antes de que cambie a luz roja.',
            'answer2' => 'Pasar igual que si fuera intermitente.',
            'answer3' => 'Detenerme como si se tratara de una luz roja, si es posible hacerlo con seguridad.',
            'correct_ans' => 3,
            'hint' => 'Una luz amarilla no intermitente obliga a los vehículos a detenerse en las mismas condiciones que si se tratara de una luz roja fija, a no ser que, cuando se encienda, el vehículo se encuentre tan cerca del lugar de detención que no pueda detenerse antes del mismo en condiciones de seguridad suficientes.',
            'image' => '../img/tests/id_28.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'A1_A2',
            'question' => '¿Es correcto situar toda la carga en la parte trasera del vehículo?',
            'answer1' => 'No, porque al aumentar el peso en la rueda trasera, la motocicleta puede bascular durante la marcha.',
            'answer2' => 'Sí, es el lugar más apropiado para la carga más pesada.',
            'answer3' => 'Sí, es el lugar más idóneo para situar cualquier tipo de carga.',
            'correct_ans' => 1,
            'hint' => 'En ningún caso colocaremos toda la carga en la parte trasera, ya que podría aumentar el peso en la rueda trasera, y la motocicleta podría bascular durante la marcha.',
            'image' => '../img/tests/id_29.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'A1_A2',
            'question' => 'Si conduce una motocicleta que tiene un motor de explosión de cuatro tiempos, ¿con qué tipo de mezcla funciona este motor?',
            'answer1' => 'Con gasóleo, aceite y aire.',
            'answer2' => 'Con gasolina y aire.',
            'answer3' => 'Con gasolina, aceite y aire.',
            'correct_ans' => 2,
            'hint' => 'Cuando decimos que una motocicleta tiene un motor de cuatro tiempos, significará que el motor se alimenta de una mezcla de gasolina y aire, que entra en la cámara de combustión del cilindro y no necesita de aceite para su funcionamiento.',
            'image' => '../img/tests/id_30.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'A1_A2',
            'question' => 'Si conduce su motocicleta por una autopista o autovía, fuera de poblado, a la velocidad máxima permitida para dichas vías, debe saber que con este comportamiento...',
            'answer1' => 'ante cualquier imprevisto la distancia de frenado disminuirá.',
            'answer2' => 'aumentará el consumo de carburante.',
            'answer3' => 'se mejora la aerodinámica del vehículo.',
            'correct_ans' => 2,
            'hint' => 'A mayor velocidad aumenta el riesgo de accidente, la distancia de reacción y anticipación y la atención necesaria al volante. Así mismo contra mayor sea la velocidad instantánea también será mayor el consumo de carburante y el desgaste de los neumáticos en todos los casos.',
            'image' => '../img/tests/id_31.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'A1_A2',
            'question' => 'Si su motocicleta lleva enganchado un remolque, ¿puede circular por la carretera con niebla que se observa en la fotografía?',
            'answer1' => 'Sí, a velocidad suficientemente reducida.',
            'answer2' => 'No.',
            'answer3' => 'Sólo en el caso de disponer de alumbrado de niebla.',
            'correct_ans' => 2,
            'hint' => 'Las motocicletas, los vehículos de tres ruedas, los ciclomotores y los ciclos y bicicletas podrán arrastrar un remolque o semirremolque, siempre que la circulación sea de día y en condiciones que no disminuyan la visibilidad. Así pues no se podrá arrastrar un remolque con niebla densa ya que esta disminuye la visibilidad y el reglamento así lo prohíbe.',
            'image' => '../img/tests/id_32.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'A1_A2',
            'question' => 'En la utilización del casco es fundamental:',
            'answer1' => 'Que esté correctamente abrochado.',
            'answer2' => 'Que exteriormente esté bien, aunque haya sufrido caídas anteriores.',
            'answer3' => 'Que quede bastante holgado porque así es más cómodo.',
            'correct_ans' => 1,
            'hint' => 'Es imprescindible que el casco de protección esté correctamente abrochado y se debe comprobar que el sistema de sujeción impide que el casco salga aunque se tire con fuerza. En ningún caso debe quedar holgado ya que sino podrá salirse al primer impacto.',
            'image' => '../img/tests/id_33.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'A1_A2',
            'question' => '¿Por qué no se debe retirar el casco a un motorista accidentado?',
            'answer1' => 'Para que no roce la cabeza con el suelo.',
            'answer2' => 'Para que la cabeza permanezca abrigada.',
            'answer3' => 'Para evitar lesiones en la columna vertebral.',
            'correct_ans' => 3,
            'hint' => 'En caso de presenciar un accidente de motocicleta no deberemos extraer el casco a los accidentados en ningún caso ya que debemos tener en cuenta que hay partes óseas dentro de la columna vertebral, que pueden afectar al interior del conducto medular y a la médula, y que pueden causarle lesiones en la columna vertebral.',
            'image' => '../img/tests/id_34.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'A1_A2',
            'question' => 'Con viento, la conducción de la motocicleta es más peligrosa cuando éste sopla...',
            'answer1' => 'de frente.',
            'answer2' => 'a ráfagas.',
            'answer3' => 'por detrás.',
            'correct_ans' => 2,
            'hint' => 'Cuando sopla el viento a ráfagas laterales, la conducción será especialmente peligrosa para la circulación, ya que el conductor de la motocicleta deberá ser muy cauteloso al adelantar y circular en paralelo con vehículos de grandes dimensiones, porque en este recorrido el viento se parará y sufriremos el rebufo.',
            'image' => '../img/tests/id_35.png'
        ]);
        DB::table('questions')->insert([
            'category' => 'A1_A2',
            'question' => 'Acaba de obtener el permiso de la clase A1 y no es titular de ningún otro permiso, ¿debe llevar la placa identificativa de conductor novel?',
            'answer1' => 'Sí, durante el primer año de conducción.',
            'answer2' => 'Sí, durante los dos primeros años de conducción.',
            'answer3' => 'No, ya que esta norma no afecta a las motocicletas.',
            'correct_ans' => 1,
            'hint' => 'Todos los conductores de motocicleta noveles con una antigüedad de menos de un año en su permiso de conducir, siendo el primer permiso que obtienen, estarán obligados a llevar una placa L que los identifique durante el primer año de conducción y que situarán en un lugar visible de la parte trasera de la motocicleta. En el caso de las motocicletas, pese a que no es tan frecuente, también deberán llevarla todos aquellos conductores que tengan una antigüedad de menos de un año en su permiso de conducir.',
            'image' => '../img/tests/id_36.jpg'
        ]);
        // C
        DB::table('questions')->insert([
            'category' => 'C',
            'question' => 'Si conduce un camión de grandes dimensiones, ¿Está obligado a retirarse hacia el borde con el objetivo de facilitar el adelantamiento a los vehículos de detrás?',
            'answer1' => 'Sí, en todo caso.',
            'answer2' => 'Sí, durante los dos primeros años de conducción.',
            'answer3' => 'Sí, cuando la anchura de la calzada no permite realizar el adelantamiento con facilidad.',
            'correct_ans' => 3,
            'hint' => 'El conductor que advierta que otro que le sigue tiene el propósito de adelantar a su vehículo estará obligado a ceñirse al borde derecho de la calzada con el objetivo de facilitar el adelantamiento al vehículo que le sigue, cuando la anchura de la calzada no permita realizar el adelantamiento con facilidad.',
            'image' => '../img/tests/id_37.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'C',
            'question' => 'Circulando por una autopista o autovía se deberá abandonar por la primera salida…',
            'answer1' => 'Si por razones de emergencia se circula a velocidad inferior a 90 km/h.',
            'answer2' => 'Si por razones de emergencia se circula a velocidad inferior a 70 km/h.',
            'answer3' => 'Si por razones de emergencia se circula a velocidad inferior a 60 km/h.',
            'correct_ans' => 3,
            'hint' => 'En Autopista y Autovía si por razones de emergencia se circula a velocidad inferior a 60 km/h., se deberá abandonar la vía por la 1ª salida (Art. 38.2).',
            'image' => '../img/tests/id_38.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'C',
            'question' => 'La distancia de detención se divide en...',
            'answer1' => 'dos fases: la distancia de reacción y la distancia de frenado.',
            'answer2' => 'tres fases: la distancia de reacción, la distancia de frenado, y la distancia de seguridad.',
            'answer3' => 'dos fases: la distancia de parada y la distancia de inmovilización.',
            'correct_ans' => 1,
            'hint' => 'La distancia de detención se divide en dos fases: la distancia de reacción y la distancia de frenado. La distancia de reacción dependerá del conductor y es la distancia que recorre el vehículo desde que aparece el peligro hasta que el conductor pisa el pedal del freno, mientras que la distancia de frenado dependerá del vehículo, el entorno y el estado de la vía, y será la distancia que recorre el vehículo desde que se pisa el pedal del freno hasta que se detiene por completo.',
            'image' => '../img/tests/id_39.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'C',
            'question' => 'Fumar mientras se conduce, ¿puede producir distracciones?',
            'answer1' => 'Sí.',
            'answer2' => 'No, en ningún caso.',
            'answer3' => 'Sí, pero solo en vía interurbanas.',
            'correct_ans' => 1,
            'hint' => 'Sujetar un cigarrillo en la mano es una práctica de riesgo que supone muchas pequeñas distracciones. No es solo sujetar el cigarro, sino encenderlo, apagarlo o procurar que no se desprenda la ceniza de él.',
            'image' => '../img/tests/id_40.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'C',
            'question' => 'Según la normativa de circulación, un vehículo pesado es un...',
            'answer1' => 'Vehículo destinado al transporte de mercancías cuya MMA exceda de 3.500Kgs.',
            'answer2' => 'Automóvil especialmente acondicionado para el transporte de mercancías, cuya M.M.A. sea superior a 6 TM y cuya capacidad de carga útil superior a 3.500Kgs.',
            'answer3' => 'Automóvil para el transporte de mercancías, cuya M.M.A. no exceda de 6 Tm o que aun sobrepasando dicha masa, tenga una capacidad de carga útil exceda de 3,5 Tm.',
            'correct_ans' => 2,
            'hint' => 'Para ser considerado como vehículo pesado el Reglamento General de vehículo establece que el vehículo del que se trate debe estar destinado al transporte de mercancías, su Masa Máxima Autorizada ser superior a 6 toneladas y su capacidad de carga exceda de 3,5 toneladas.',
            'image' => '../img/tests/id_41.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'C',
            'question' => 'Un mecanismo intercambiador de calor o intercooler, consigue...',
            'answer1' => 'enfriar el aire de la admisión.',
            'answer2' => 'una mejor lubricación del mecanismo turbocompresor.',
            'answer3' => 'calentar el aire de la admisión para mejorar la combustión del gasóleo.',
            'correct_ans' => 1,
            'hint' => 'El intercooler es un radiador aire-aire o aire-agua que tiene como function la de enfriar el aire comprimido de la admisión por el turbocompresor o sobrealimentador de un motor de combustión interna.',
            'image' => '../img/tests/id_42.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'C',
            'question' => 'A qué velocidad como máximo podrá circular con su camión en una vía convencional con un arcén de 2 metros pavimentado y un carril por sentido:',
            'answer1' => '80 km/h',
            'answer2' => '90 km/h',
            'answer3' => '70 km/h',
            'correct_ans' => 1,
            'hint' => 'El límite de velocidad máxima que un camión no deberá rebasar en todo tipo de carreteras convencionales tras la modificación del Reglamento de Circulación será de 80 kilómetros/hora. Con este cambio todas las carreteras convencionales se tratarán por igual sea cual sea su arcén (Nueva normativa actualizada a 29/01/2019)',
            'image' => '../img/tests/id_43.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'C',
            'question' => '¿Cuál será la Masa Máxima Autorizada de un eje no motor de un camión?',
            'answer1' => '12 toneladas',
            'answer2' => '11,5 toneladas',
            'answer3' => '10 toneladas',
            'correct_ans' => 3,
            'hint' => 'Para los camiones se aplica una limitación de peso por eje, en función de si el vehículo tiene un eje simple, un eje tándem o un eje trídem. En el caso de un eje simple no motor la MMA autorizada sera de 10 toneladas mientras que si es motor será de 11,5 toneladas.',
            'image' => '../img/tests/id_44.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'C',
            'question' => 'Para cargar y descargar mercancías, ¿puede estacionar su camión donde se encuentre esta señal?',
            'answer1' => 'Sí, cuando no haya taxis parados o estacionados.',
            'answer2' => 'No, porque es un lugar reservado a la parada y estacionamiento de taxis libres y en servicio.',
            'answer3' => 'Sí, pero por el tiempo imprescindible para proceder a la carga y descarga.',
            'correct_ans' => 2,
            'hint' => 'Esta señal indica el lugar reservado a la parada y al estacionamiento de taxis libres y en servicio, y estará totalmente prohibida la parada y el estacionamiento de vehículos ajenos a dicha actividad, como por ejemplo, los camiones en toda la extensión que esta señal abarque.',
            'image' => '../img/tests/id_45.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'C',
            'question' => 'Cuando al intentar engranar una velocidad, pisando el pedal de embrague, se produce un ruido, conocido con el nombre de ‘rascar’ puede ser debido a que ...',
            'answer1' => 'Los muelles de los desplazables están rotos.',
            'answer2' => 'El sincronizador correspondiente a esa velocidad está desgastado.',
            'answer3' => 'El mecanismo que sincroniza todas las velocidades no actúa al accionar la palanca de velocidades.',
            'correct_ans' => 2,
            'hint' => 'Cuando al pisar el pedal de embrague para introducir una marcha, notamos que éste rasca produciendo un ruido estridente, la avería que probablemente sufra nuestro embrague es un desgaste del sincronizador correspondiente a dicha velocidad y se solucionará cambiándolo por otro.',
            'image' => '../img/tests/id_46.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'C',
            'question' => 'De las siguientes situaciones, ¿cuál produce más distracciones en la conducción?',
            'answer1' => 'Observar las señales de peligro.',
            'answer2' => 'Escuchar la radio.',
            'answer3' => 'Utilizar el teléfono móvil.',
            'correct_ans' => 3,
            'hint' => 'Manipular el teléfono móvil mientras se conduce es una de las acciones más peligrosas al volante ya que aumenta el número de distracciones que el conductor comete a la vez que aparecen numerosas desviaciones en la trayectoria del vehículo y dificultad de mantener una velocidad adecuada.',
            'image' => '../img/tests/id_47.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'C',
            'question' => '¿Es obligatorio emplear los dispositivos de preseñalización de peligro para advertir que un vehículo ha quedado inmovilizado en la calzada o el arcén?',
            'answer1' => 'Sí.',
            'answer2' => 'No.',
            'answer3' => 'Sí, pero sólo si la visibilidad es insuficiente.',
            'correct_ans' => 1,
            'hint' => 'Si nuestro vehículo ha quedado inmovilizado en el arcén o en la calzada de una vía bloqueando total o parcialmente el paso de otros vehículos, ya sea por avería u accidente, deberemos utilizar de forma obligatoria los dispositivos de preseñalización de peligro que todo vehículo debe llevar como accesorio obligatoriamente.',
            'image' => '../img/tests/id_48.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'C',
            'question' => 'Si en el camión que conduce es obligatoria la utilización del tacógrafo, debe saber que el tiempo máximo de conducción en dos semanas consecutivas no podrá exceder de...',
            'answer1' => '90 horas.',
            'answer2' => '80 horas.',
            'answer3' => '70 horas.',
            'correct_ans' => 1,
            'hint' => 'El tiempo máximo acumulado de conducción de un camión con tacógrafo y durante una semana será de 56 horas, que se contabilizarán desde las 0 horas de un lunes hasta las 24 horas del domingo. Tampoco se pueden superar 90 horas de conducción en 2 semanas consecutivas.',
            'image' => '../img/tests/id_49.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'C',
            'question' => 'Los vehículos obligados a mantener una separación mínima de 50 mts, dejarán de estar obligados cuando circulen...',
            'answer1' => 'En poblado.',
            'answer2' => 'Donde estuviese permitido adelantar.',
            'answer3' => 'Donde NO hubiere más de 1 carril para un mismo sentido.',
            'correct_ans' => 1,
            'hint' => 'Deberán tener una separación en carreteras convencionales de 50 metros cuando no se pretenda adelantar, excepto:
            En poblado.
            Donde estuviese prohibido adelantar.
            Donde hubiere más de 1 carril para un mismo sentido.
            Cuando la circulación estuviere tan saturada que no permita el adelantamiento.',
            'image' => '../img/tests/id_50.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'C',
            'question' => 'Practicar una conducción económica es aconsejable pero, ¿qué se entiende por "zona verde" del cuentarrevoluciones?',
            'answer1' => 'El rango que tiene el cuentakilómetros para indicar un consumo mínimo.',
            'answer2' => 'El rango que tienen algunos tacómetros para indicar un consumo mínimo.',
            'answer3' => 'El rango del recorrido del pedal del acelerador para indicar un consumo mínimo.',
            'correct_ans' => 2,
            'hint' => 'La zona verde del cuentarrevoluciones será la zona dónde se alcanza un mejor equilibrio entre la cantidad de aire que hay en el cilindro, la cantidad de carburante que se inyecta y el tiempo necesario para quemarlo, por tanto, se consigue un mayor aprovechamiento del carburante. Dicha zona o rango estará presente en algunos tacómetros para indicar el consumo mínimo recomendado.',
            'image' => '../img/tests/id_51.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'C',
            'question' => 'En defecto de señalización, en una vía urbana, ¿a qué velocidad máxima puede circular si conduce un camión de MMA superior a 3.500 kg?',
            'answer1' => '60 km/hora',
            'answer2' => '50 km/hora',
            'answer3' => '40 km/hora.',
            'correct_ans' => 2,
            'hint' => 'En vías urbanas o dentro de poblado,el límite de velocidad maxima sera de 50 kilómetros por hora para todo tipo de vehículos incluídos aquellos con una Masa Máxima Autorizada superior a 3500 kilogramos.',
            'image' => '../img/tests/id_52.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'C',
            'question' => 'Las alteraciones emocionales que pueden provocar el LSD, ¿cuánto tiempo se pueden prolongar?',
            'answer1' => 'Entre 5 y 10 horas.',
            'answer2' => 'Entre 9 y 12 horas.',
            'answer3' => 'La toma de LSD, no produce alteraciones emocionales.',
            'correct_ans' => 2,
            'hint' => 'Los efectos derivados del consumo de LSD por parte del conductor de un vehículo serán entre otros la aparición de ansiedad o pánico al volante y la alteración emocional que puede producir una reacción agresiva del mismo. Sus efectos comienzan a notarse entre los 30 y los 90 minutos tras su ingesta y su efecto se puede prolongar entre las 9 y las 12 horas.',
            'image' => '../img/tests/id_53.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'C',
            'question' => 'El conjunto de vehículos que se compone de un vehículo de motor acoplado a un semirremolque se denomina:',
            'answer1' => 'Tren turístico.',
            'answer2' => 'Vehículo articulado.',
            'answer3' => 'Tren de carretera.',
            'correct_ans' => 2,
            'hint' => 'Según la definición que el Reglamento General de Vehículos realiza del vehículo articulado, este será un automóvil constituido por un vehículo de motor acoplado a 1 semirremolque.',
            'image' => '../img/tests/id_54.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'C',
            'question' => 'Su camión, por causa de una avería queda inmovilizado en una autovía, ¿qué debe hacer?',
            'answer1' => 'Colocar dos dispositivos de preseñalización de peligro (triángulos reflectantes) uno delante y otro en la parte posterior de su camión.',
            'answer2' => 'Encender la luz de emergencia y colocar un dispositivo de preseñalización de peligro (triángulo reflectante) en la parte posterior.',
            'answer3' => 'Pedir a algún otro camión que me remolque.',
            'correct_ans' => 2,
            'hint' => 'Si sufrimos una avería con nuestro camión en una vía de único sentido como una autovía o autopista, deberemos en primer lugar cerciorarnos de que no existe peligro y encender la señal de emergencia, y posteriormente colocar un dispositivo de preseñalización de peligro en la parte posterior del vehículo a una distancia mínima de 50 metros para que el resto de conductores puedan ver que estamos inmovilizados.',
            'image' => '../img/tests/id_55.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'C',
            'question' => 'La somnolencia hace que…',
            'answer1' => 'resulte más fácil mantener la concentración en el tráfico.',
            'answer2' => 'disminuya el tiempo de reacción.',
            'answer3' => 'aumente las distracciones.',
            'correct_ans' => 3,
            'hint' => 'La somnolencia al volante entre otros efectos produce un aumento del tiempo de reacción, así como un aumento también de las distracciones al volante ya que impide concentrarse en el tráfico y en los posibles obstáculos o peligros que aparezcan en la vía.',
            'image' => '../img/tests/id_56.jpg'
        ]);
        // D
        DB::table('questions')->insert([
            'category' => 'D',
            'question' => 'En los servicios interurbanos de transporte de viajeros por carretera, contratados por plazas con pago individual, ¿qué niños que no ocupen plaza, no necesitan billete?',
            'answer1' => 'Los menos de 6 años.',
            'answer2' => 'Todos los que puedan viajar en brazos.',
            'answer3' => 'Los menos de 4 años.',
            'correct_ans' => 1,
            'hint' => 'Los niños menores de 4 años, que no ocupen plaza, no están obligados a pagar billete en los autobuses.',
            'image' => '../img/tests/id_57.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'D',
            'question' => 'Conforme a la Ley de Ordenación del Transporte Terrestre, LOTT, ¿cómo pueden ser los transportes públicos de viajeros por carretera?',
            'answer1' => 'De viajeros o privados.',
            'answer2' => 'Regulares o discrecionales.',
            'answer3' => 'Interiores o de mercancías.',
            'correct_ans' => 2,
            'hint' => 'Según la LOTT, los transportes públicos de viajeros pueden ser regulares (Con un horario prestablecido y constante) o discrecionales (sin horarios establecidos ni itinerarios predefinidos).',
            'image' => '../img/tests/id_58.png'
        ]);
        DB::table('questions')->insert([
            'category' => 'D',
            'question' => 'Si mantiene los neumáticos a la presión adecuada, ¿Qué conseguirá?',
            'answer1' => 'reducirá su duración.',
            'answer2' => 'mejorar la adherencia.',
            'answer3' => 'aumentar el consumo de carburante del motor.',
            'correct_ans' => 2,
            'hint' => 'Una presión insuficiente o incorrecta de los neumáticos, afecta directamente a la estabilidad del vehículo, llegando a aumentar el consumo de carburante. Es por ello imprescindible mantenerlos a la presión recomendada para mejorar su adherencia.',
            'image' => '../img/tests/id_59.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'D',
            'question' => 'Para realizar un cambio de dirección con un autobús de grandes dimensiones, el conductor deberá:',
            'answer1' => 'Conectar la señal de emergencia, en cualquier caso.',
            'answer2' => 'Realizar la maniobra sin rebasar las marcas longitudinales que existan en la intersección.',
            'answer3' => 'Adoptar las precauciones necesarias para evitar todo peligro al llevarlo a cabo.',
            'correct_ans' => 3,
            'hint' => 'Cuando se tenga que realizar un cambio de dirección con autobús de grandes dimensiones, se debe tener en cuenta que para hacerlo se deberá, probablemente, ocupar bastante espacio de la vía, llegando incluso a invadir zonas destinadas al sentido contrario o a otros usuarios. Por ello, además de señalizar esta maniobra, el conductor debe tomar todas las precauciones para evitar cualquier peligro para los demás usuarios.',
            'image' => '../img/tests/id_60.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'D',
            'question' => 'Como norma general, el autobús que usted conduce tendrá una anchura máxima de:',
            'answer1' => '2,55 metros.',
            'answer2' => '2,60 metros.',
            'answer3' => '2,50 metros.',
            'correct_ans' => 1,
            'hint' => 'La anchura máxima permitida para todos los vehículos es de 2,55 metros. Como excepción a esta norma, los autobuses que realicen traslado de presos tienen una anchura máxima de 2,60 metros.',
            'image' => '../img/tests/id_61.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'D',
            'question' => 'Como norma general, ¿está obligado a mantener una separación mínima de 50 metros con el vehículo que le precede si la M.M.A de su autobús es superior a 3.500 kg.?',
            'answer1' => 'Sí.',
            'answer2' => 'Solo en vías urbanas que no tengan carril reservado para la circulación de autobuses.',
            'answer3' => 'No.',
            'correct_ans' => 1,
            'hint' => 'Los autobuses de más de 3500 kg y 10 metros de largo deberán tener una separación en carreteras convencionales de 50 metros cuando no se pretenda adelantar.',
            'image' => '../img/tests/id_62.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'D',
            'question' => 'De acuerdo con la ley de tráfico, los agentes de tráfico pueden inmovilizar su vehículo cuando observen un exceso de tiempo de conducción superior al...',
            'answer1' => '25% de los tiempos establecidos por la regulación.',
            'answer2' => '20% de los tiempos establecidos por la regulación.',
            'answer3' => '50% de los tiempos establecidos por la regulación.',
            'correct_ans' => 3,
            'hint' => 'Cuando los agentes de tráfico observen un exceso en los tiempos de conducción o una reducción en los tiempos de descanso superior al 50%, los agentes podrán inmovilizar el vehículo. Excepto que el conductor podrá ser sustituido por otro.',
            'image' => '../img/tests/id_63.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'D',
            'question' => 'Los autobuses o autocares de largo recorrido, ¿pueden transportar viajeros de pie?',
            'answer1' => 'Sí, siempre que viajen en el pasillo de circulación.',
            'answer2' => 'No.',
            'answer3' => 'Sí.',
            'correct_ans' => 2,
            'hint' => 'Los autobuses solo tienen permitido transportar viajeros de pie cuando se encuentren realizando recorridos cortos. Los autobuses de largo recorrido como en este caso, están fabricados para garantizar la comodidad de los viajeros sentados y no pueden transportar pasajeros de pie.',
            'image' => '../img/tests/id_64.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'D',
            'question' => 'En una carretera convencional, la parada y el estacionamiento del autobús deberá efectuarse:',
            'answer1' => 'En el arcén.',
            'answer2' => 'Fuera de la calzada y dejando libre la parte transitable del arcén.',
            'answer3' => 'Únicamente en los lugares especialmente habilitados.',
            'correct_ans' => 2,
            'hint' => 'En las carreteras convencionales solamente se puede parar y estacionar fuera de la calzada y de la parte transitable del arcén. Además estas paradas o estacionamientos de deben realizar siempre en el lado derecho de la vía.',
            'image' => '../img/tests/id_65.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'D',
            'question' => 'Si pretende conducir un trolebús con capacidad para transportar 40 personas, ¿qué permiso necesitará?',
            'answer1' => 'El de la clase D1-E.',
            'answer2' => 'El de la clase D.',
            'answer3' => 'El de la clase D-E.',
            'correct_ans' => 2,
            'hint' => 'El permiso que autoriza a conducir trolebuses es el mismo que para conducir autobuses.Con el permiso de conducción D se puede conducir autobuses de cualquier peso y número de asientos, incluidos los trolebuses, también de cualquier peso y número de asientos.',
            'image' => '../img/tests/id_66.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'D',
            'question' => 'En los transportes públicos regulares de uso especial para escolares por carretera, ¿Cuándo será obligatoria la presencia de un acompañante en el vehículo?',
            'answer1' => 'Cuando como mínimo, la tercera parte de los viajeros sean menores de 12 años.',
            'answer2' => 'Siempre.',
            'answer3' => 'Cuando transporte alumnos de un centro de educación especial.',
            'correct_ans' => 3,
            'hint' => 'Existen 4 casos en las que será obligatorio llevar acompañante: 1) Siempre que al menos el 50% tengan menos de 12 años. 2) Transporte regular de uso especial cuando sea un transporte de un centro de educación especial. 3) Siempre en transporte discrecional 4) Transporte privado (centro de educación especial u origen o destino distintos al centro).',
            'image' => '../img/tests/id_67.png'
        ]);
        DB::table('questions')->insert([
            'category' => 'D',
            'question' => 'A cambiar un fusible fundido, sobre todo, ¿qué hay que tener en cuenta?',
            'answer1' => 'Que hay que reemplazarlo por otros de voltaje más alto para que no se funda de nuevo.',
            'answer2' => 'Que hay que reemplazarlo con otro de tensión más alta para que no se funda tan fácilmente.',
            'answer3' => 'Que el nuevo también transmite la misma tensión y amperios que el que se ha fundido.',
            'correct_ans' => 3,
            'hint' => 'Si tiene que cambiar un fusible fundido, se debe sustituir por otro de igual intensidad, que transmita la misma tensión y tenga el mismo amperaje que el que se ha sustituido. De otra forma, puede quedar desprotegido el circuito eléctrico y producirse una sobrecarga o subida de tensión que dañe al elemento que protegía el fusible fundido.',
            'image' => '../img/tests/id_68.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'D',
            'question' => 'Si está usted obligado a la utilización del tacógrafo y durante una semana ha efectuado una conducción de 56 horas, ¿cuántas horas le está permitido conducir como máximo la semana siguiente?',
            'answer1' => '34 horas.',
            'answer2' => '50 horas.',
            'answer3' => '45 horas.',
            'correct_ans' => 1,
            'hint' => 'El tiempo máximo de conducción en dos semanas consecutivas es de 90 horas. Si en una semana se ha conducido durante 56 horas, en la siguiente semana el tiempo máximo de conducción será de 34 horas.',
            'image' => '../img/tests/id_69.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'D',
            'question' => 'Si conduce un autobús de 12 metros de largo, ¿puede entrar en la vía donde está esta señal?',
            'answer1' => 'No.',
            'answer2' => 'Sí, esta señal afecta solo a los camiones.',
            'answer3' => 'Sí, pero siempre y cuando el autobús no transporte viajeros.',
            'correct_ans' => 1,
            'hint' => 'La señal vertical de restricción de paso R-203 que vemos en la imagen, indica que no podrán entrar a la vía donde se encuentre la señal, todos aquellos vehículos con una longitud superior a la indicada en la cifra en metros. Así pues este autobús de 12 metros no tendría permitido el paso.',
            'image' => '../img/tests/id_70.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'D',
            'question' => '¿Qué función cumple el radiador?',
            'answer1' => 'Permitir la refrigeración del líquido que viene del motor.',
            'answer2' => 'Aumentar la temperatura del motor.',
            'answer3' => 'Evitar la pérdida del líquido refrigerante.',
            'correct_ans' => 1,
            'hint' => 'La misión del radiador es la de enfriar el refrigerante que entra al motor así como de recoger el agua caliente que expulsa el sistema.',
            'image' => '../img/tests/id_71.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'D',
            'question' => 'Si Ud. Realiza un transporte escolar y de menores en un autobús de dos puertas, en el que no precisa acompañante, ¿por dónde deben los menores realizar el acceso y abandono del vehículo?',
            'answer1' => 'Por la puerta delantera.',
            'answer2' => 'El acceso por la puerta delantera y el abandono por la trasera.',
            'answer3' => 'Por la puerta trasera.',
            'correct_ans' => 1,
            'hint' => 'Cuando se realice un transporte escolar y/o de menores en el que no sea necesario llevar un acompañante, los viajeros deben subir o bajar del vehículo por la puerta delantera.',
            'image' => '../img/tests/id_72.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'D',
            'question' => '¿Cuándo deberá pasar la ITV un autobús destinado al transporte de menores?',
            'answer1' => 'Cada 6 meses, si tiene menos de 5 años.',
            'answer2' => 'Cada año, si tiene más de 5 años.',
            'answer3' => 'Cada 6 meses, si tiene más de 5 años.',
            'correct_ans' => 3,
            'hint' => 'Todos los autobuses, con independencia del tipo de transporte que realicen, deben pasar la inspección ITV cada año, hasta los 5 de antigüedad y después de los 5 años, cada año.',
            'image' => '../img/tests/id_73.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'D',
            'question' => 'Si usted decide utilizar el teléfono móvil en su vehículo, debe saber que:',
            'answer1' => 'La ley prohíbe su uso, incluso cuando está conectado a un dispositivo de manos libres.',
            'answer2' => 'Puede sufrir un accidente por distracción incluso utilizando el manos libres.',
            'answer3' => 'No existe ningún peligro si se utiliza conectado a cascos o auriculares.',
            'correct_ans' => 2,
            'hint' => 'Está prohibido circular utilizando el teléfono móvil si para ello hay que utilizar las manos, auriculares o cascos. Se permite usar el teléfono si se utiliza un sistema de manos libres, pero hay que tener en cuenta que el riesgo de accidente por distracción aumenta aunque se utiice este sistema.',
            'image' => '../img/tests/id_74.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'D',
            'question' => 'En la valoración inicial de las víctimas en un accidente, ¿qué debemos tener en cuenta?',
            'answer1' => 'El pulso, hemorragias leves y fracturas.',
            'answer2' => 'Las posibles fracturas.',
            'answer3' => 'Las funciones vitales del herido (consciencia, respiración, circulación).',
            'correct_ans' => 3,
            'hint' => 'Lo primero a valorar en los heridos en un accidente son sus funciones vitales. De entre todos los heridos se debe considerar más graves a aquellos que están inconscientes, que no respiran o que lo hacen con dificultad.',
            'image' => '../img/tests/id_75.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'D',
            'question' => '¿Debe saber colocar y distribuir la carga correctamente cuando conduce un autobús?',
            'answer1' => 'No, porque la carga no afecta a la estabilidad o la conducción del autobús.',
            'answer2' => 'Sí, porque puede influir en el comportamiento del autobús en el momento de trazar las curvas.',
            'answer3' => 'Sólo si el transporte se realice por vías interurbanas.',
            'correct_ans' => 2,
            'hint' => 'La carga del vehículo afecta a la aerodinámica, a la distancia de frenado y a su estabilidad, por lo que es muy importante que esté correctamente colocada y distribuida de manera que no comprometa la seguridad del vehículo durante la circulación.',
            'image' => '../img/tests/id_76.jpg'
        ]);
        // B
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => '¿Qué sector de peatones obliga al conductor a extremar las precauciones?',
            'answer1' => 'Las amas de casa con bolsas en la mano.',
            'answer2' => 'Los que realizan trabajos en la vía.',
            'answer3' => 'Los jóvenes que van a pie.',
            'correct_ans' => 2,
            'hint' => 'Los peatones que realizan obras de acondicionamiento y trabajos en la vía, son el sector de peatones con el que más cuidado debemos tener, ya que podremos encontrarlos dentro de la misma carretera realizando su tarea y deberemos extremar la precaución para no atropellarlos o alcanzarlos.',
            'image' => '../img/tests/id_77.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => '¿Por la reacción de qué material se crea la energía eléctrica de la batería de un vehículo?',
            'answer1' => 'Electrolito.',
            'answer2' => 'Posilito.',
            'answer3' => 'Neutrolito.',
            'correct_ans' => 1,
            'hint' => 'La energía eléctrica de un vehículo se crea gracias a la reacción que tiene el electrolito, que es el material que genera ésta reacción en concreto.',
            'image' => '../img/tests/id_78.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => '¿La maniobra de desplazamiento lateral implica siempre un cambio de carril?',
            'answer1' => 'Sí, pero solo en autopistas.',
            'answer2' => 'No, no siempre',
            'answer3' => 'Sí.',
            'correct_ans' => 2,
            'hint' => 'La maniobra de desplazamiento lateral no siempre implicará un cambio de carril sino que también se identifica con todo cambio sensible de posición del vehículo en la calzada a izquierda o derecha, o la invasión parcial o total de otro carril.',
            'image' => '../img/tests/id_79.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => '¿Cuál es la función de las barreras laterales?',
            'answer1' => 'Ordenar la circulación.',
            'answer2' => 'Indicar el borde de la calzada.',
            'answer3' => 'Indicar el borde de la plataforma.',
            'correct_ans' => 3,
            'hint' => 'Las barreras laterales, como parte de la señalización de una vía, tienen la finalidad de indicar el borde de la plataforma de la misma, para así evitar y proteger a los conductores de las salidas de la vía, especialmente en curvas cerradas.',
            'image' => '../img/tests/id_80.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => '¿Qué debe revisar si prevé que puede llover?',
            'answer1' => 'El líquido de frenos y la presión de los neumáticos.',
            'answer2' => 'El estado de los neumáticos y los limpiaparabrisas.',
            'answer3' => 'Nada, no es necesario ninguna revisión.',
            'correct_ans' => 2,
            'hint' => 'Si tenemos la intención de iniciar un viaje por carretera en el que se prevé que nos afecte la lluvia, deberemos realizar un mantenimiento preventivo del vehículo, revisando especialmente el estado de los neumáticos y los limpiaparabrisas. Estos se deben vigilar ya que son los encargados de barrer la lluvia del parabrisas para mejorar la visión de la vía. También deberemos comprobar la presión y la profundidad del dibujo del neumático para asegurar su adherencia al asfalto mojado.',
            'image' => '../img/tests/id_81.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => '¿Cuántos espejos retrovisores debe llevar una motocicleta con estructura de autoprotección?',
            'answer1' => 'Uno en el interior y otro en la parte exterior izquierda.',
            'answer2' => 'Dos de forma obligatoria, uno en cada lado, sea cual sea la velocidad máxima que pueda alcanzar.',
            'answer3' => 'Uno, si la velocidad máxima que puede alcanzar es menor a 100 km/hora.',
            'correct_ans' => 3,
            'hint' => 'Las motocicletas con estructura de autoprotección deberán llevar como mínimo un espejo retrovisor en su lado izquierdo si su velocidad máxima no supera los 100 kilómetros por hora. Si superara la velocidad de 100 km/hora entonces estarán obligadas a llevar un retrovisor en el lado izquierdo y otro en el derecho.',
            'image' => '../img/tests/id_82.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => '¿Cada cuánto tiempo aproximadamente se debe cambiar el líquido de frenos?',
            'answer1' => 'Cada 5 años.',
            'answer2' => 'Cada año.',
            'answer3' => 'Cada 2 ó 3 años.',
            'correct_ans' => 3,
            'hint' => 'Para que la frenada sea eficaz los fabricantes recomiendan cambiar el líquido de frenos cada 2 ó 3 años, y realizar revisiones periódicas y puesta a punto de los frenos en un taller especializado.',
            'image' => '../img/tests/id_83.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => 'Como norma general está prohibido conducir turismos con una tasa de alcoholemia superior a...',
            'answer1' => '0,8 gramos por litro de sangre.',
            'answer2' => '0,5 gramos por litro de sangre.',
            'answer3' => '0,3 gramos por litro de sangre.',
            'correct_ans' => 2,
            'hint' => 'Los conductores en general con mas de dos años de antigüedad con el permiso de conducir, no podrán conducir un vehículo con una tasa de alcoholemia superior a 0,5 gramos por litro en sangre o 0,25 miligramos por litro en aire expirado.',
            'image' => '../img/tests/id_84.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => '¿Cuántos minutos deben pasar detenido en un túnel para interrumpir el funcionamiento del motor?',
            'answer1' => '5 minutos.',
            'answer2' => '2 minutos.',
            'answer3' => '1 minuto.',
            'correct_ans' => 2,
            'hint' => 'Si debido a una emergencia nuestro vehículo queda averiado o detenido en el interior de un túnel, y se prevé que dicha inmovilización sea superior a dos minutos, deberemos apagar el motor del vehículo interrumpiendo su funcionamiento, y volverlo a encender cuando se reanude la circulación.',
            'image' => '../img/tests/id_85.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => '¿Cuál es la función de los conos como dispositivo de barrera?',
            'answer1' => 'Prohibir el paso a través de la línea imaginaria que los une.',
            'answer2' => 'Advertir de un accidente con heridos.',
            'answer3' => 'Prohibir el estacionamiento.',
            'correct_ans' => 1,
            'hint' => 'La principal finalidad que tienen los conos cuando son utilizados como dispositivo de barrera, es la prohibir el paso de vehículo a través de la línea imaginaria que los une. Es decir, ningún vehículo podrá atravesar dicha fila de conos.',
            'image' => '../img/tests/id_86.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => '¿Qué se ha de hacer con el aceite usado del vehículo?',
            'answer1' => 'Tirarlo a una alcantarilla o desagüe.',
            'answer2' => 'Tirarlo en arena sintética.',
            'answer3' => 'Tirarlo a un contenedor de recuperación de aceite.',
            'correct_ans' => 3,
            'hint' => 'El aceite del motor de nuestro vehículo deberá ser cambiado periódicamente siguiendo el calendario de mantenimiento de nuestro vehículo. Una vez extraído deberemos desecharlo tirándolo en un contenedor especial de recuperación de aceites industriales. En ocasiones también los ayuntamientos ponen a disposición una serie de puntos verdes sirven para lanzar los residuos que no podemos tirar en los contenedores normales. En ningún caso tiraremos este aceite a nuestro contenedor habitual ya que puede contaminar gravemente.',
            'image' => '../img/tests/id_87.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => '¿Cuál de éstas es una ventaja del sistema ABS en relación con la frenada?',
            'answer1' => 'Permite el bloqueo de las ruedas.',
            'answer2' => 'El vehículo es menos estable durante la frenada.',
            'answer3' => 'Acorta la distancia de frenada.',
            'correct_ans' => 3,
            'hint' => 'Existen sistemas que evitan el bloqueo de las ruedas como el ABS, que tiene como principal ventaja el acortar la distancia de frenado, además de que con este sistema no se produce el desgaste irregular de los neumáticos durante la frenada y el vehículo es más estable al frenar por completo.',
            'image' => '../img/tests/id_88.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => '¿Podrán realizar los agentes de circulación otras señales a parte de las que realicen con los brazos?',
            'answer1' => 'No, únicamente podrán dar señales con los brazos.',
            'answer2' => 'Sí, podrán dar órdenes mediante señales acústicas.',
            'answer3' => 'Los Agentes de la Autoridad no podrán dar órdenes ni con los brazos ni con las señales acústicas.',
            'correct_ans' => 2,
            'hint' => 'Cuando las circunstancias así lo exijan, los Agentes de Circulación podrán realizar también señales acústicas de advertencia al resto de usuarios de la vía con su silbato a parte de las que realicen habitualmente con los brazos.',
            'image' => '../img/tests/id_89.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => 'La iluminación, ¿es un sistema de seguridad activa?',
            'answer1' => 'No.',
            'answer2' => 'Sí.',
            'answer3' => 'Sólo las luces de emergencia.',
            'correct_ans' => 2,
            'hint' => 'Los elementos y sistemas de seguridad activa del vehículo son aquellos encargados de mantener la seguridad del conductor y los pasajeros, evitando que se produzca un accidente.La iluminación se considerará un sistema de seguridad activa del vehículo ya que proporciona al conductor la capacidad de ver y ser visto por otros conductores. Además evita posibles accidentes de tránsito en condiciones de baja o nula visibilidad.',
            'image' => '../img/tests/id_90.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => 'Un menor de 12 años, ¿puede ir como pasajero de una motocicleta?',
            'answer1' => 'Sí, siempre que tenga más de 7 años y el conductor sea su padre, madre, tutor o una persona autorizada.',
            'answer2' => 'Sí, en todo caso.',
            'answer3' => 'No, los menores de 12 años no pueden ir como pasajeros de una motocicleta.',
            'correct_ans' => 1,
            'hint' => 'Los menores de 12 años podrán viajar como pasajeros en una motocicleta o ciclomotor siempre que el conductor sea su padre, madre o tutor, o una persona autorizada por ellos.',
            'image' => '../img/tests/id_91.jpg'
        ]);
        DB::table('questions')->insert([
            'category' => 'B',
            'question' => 'En una autopista, ¿dónde puede realizar un cambio de sentido?',
            'answer1' => 'En cualquier mediana o paso abierto.',
            'answer2' => 'En una autopista no está permitido nunca el cambio de sentido.',
            'answer3' => 'En aquellos lugares habilitados por la señalización.',
            'correct_ans' => 3,
            'hint' => 'Según el Reglamento de Circulación estará prohibido realizar un cambio de sentido en los pasos a nivel, en los túneles, pasos inferiores y tramos de vía afectados por la señal «Túnel» (S-5), así como en las autopistas y autovías, excepto en los lugares habilitados al efecto y correctamente señalizados y, en general, en todos los tramos de la vía en que esté prohibido el adelantamiento, salvo que el cambio de sentido esté expresamente autorizado.',
            'image' => '../img/tests/id_92.jpg'
        ]);
    }
}