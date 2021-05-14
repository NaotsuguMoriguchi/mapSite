<html>

<head>
    <meta charset="utf-8" />
    <title>Perú</title>

    <style>
    @keyframes símboloKey {
        from {
            margin-left: -190px;
        }

        to {
            margin-left: 20px;
        }
    }

    input {
        text-align: center;
    }

    /* The element to apply the animation to */
    .símbolo_class {
        animation-name: símboloKey;
        margin-left: -190px;
        animation-duration: 2s;
        animation-fill-mode: forwards;
        margin-top: 30px;
    }

    @keyframes menuKey {
        from {
            margin-left: 60px;
        }

        to {
            margin-left: 0px;
        }
    }

    .menu {
        writing-mode: vertical-rl;
        text-orientation: downright;
        transform: rotate(180deg);
        font-size: 16px;
        color: #333;
        margin-top: 0px;
        margin-left: 10px;
        border-radius: 10px;
        font-size: 16px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

    }

    .menuDiv {
        z-index: 50;

        animation-duration: 2s;
        animation-fill-mode: forwards;
        animation-name: menuKey;
    }

    .menu:hover {
        background-color: #a3eded;
    }

    img {
        cursor: pointer;
    }

    .subMenu_1 {
        width: 210px;
        height: 53px;
        background-image: url('assets/submenu1.png');
        z-index: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        left: 900px;
        top: 400px
    }

    .subMenuSel_1 {
        width: 210px;
        height: 53px;
        background-image: url('assets/submenu1.png');
        z-index: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        left: 900px;
        top: 400px;
        animation-name: subMenuSelKey_1;
        animation-duration: 2s;
        animation-fill-mode: forwards;
    }

    @keyframes subMenuSelKey_1 {
        from {
            left: 900px;
        }

        to {
            left: 600px;
        }
    }

    .subMenuUnSel_1 {
        width: 210px;
        height: 53px;
        background-image: url('assets/submenu1.png');
        z-index: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        left: 600px;
        top: 400px;
        animation-name: subMenuUnSelKey_1;
        animation-duration: 2s;
        animation-fill-mode: forwards;
    }

    img {
        cursor: pointer;
    }

    @keyframes subMenuUnSelKey_1 {
        from {
            left: 600px;
        }

        to {
            left: 900px;
        }
    }

    .subMenuSel_2 {
        width: 331px;
        height: 53px;
        background-image: url('assets/submenu2.png');
        z-index: 100;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        left: 900px;
        top: 487px;
        animation-name: subMenuSelKey_2;
        animation-duration: 2s;
        animation-fill-mode: forwards;
    }

    @keyframes subMenuSelKey_2 {
        from {
            left: 900px;
        }

        to {
            left: 450px;
        }
    }

    .subMenuUnSel_2 {
        width: 331px;
        height: 53px;
        background-image: url('assets/submenu2.png');
        z-index: 100;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        left: 900px;
        top: 487px;
        animation-name: subMenuUnSelKey_2;
        animation-duration: 2s;
        animation-fill-mode: forwards;
    }

    img {
        cursor: pointer;
    }

    @keyframes subMenuUnSelKey_2 {
        from {
            left: 450px;
        }

        to {
            left: 900px;
        }
    }
    </style>

    <?php
        
        //#### $locationAry[ idNum, name, x, y, w, con, att1, att2] ####//
        $locationAry = [
            [0, "", 0 , 0, 0],
            
            [1, "España", 131, 298, 221, 
                "España<br><br>Capital:	Madrid<br>
                Idioma:	Español<br>
                Superficie:	505 811 km_<br>
                Población:	44.108.530<br>
                Densidad:	87,2 hab./km_<br>
                Moneda:	Euro<br>
                Tipo de gobierno:	Monarquía parlamentaria<br>
                España está ubicada en la Europa Occidental, ocupa la mayor parte de la Península Ibérica y, fuera de ella, dos archipiélagos (el de las Islas Canarias en el Océano Atlántico y el de las Islas Baleares en el Mar Mediterráneo) y dos ciudades, Ceuta y Melilla, en el norte de África, aparte de varias islas menores en esta zona y otras cercanas a la península.
                España está dividida administrativamente en 17 comunidades autónomas o autonomías y 2 ciudades autónomas. Hay 50 provincias formadas por el territorio peninsular e insular. Ceuta, Melilla y las plazas de soberanía no forman parte de éste régimen. Las provincias son la base sobre las que se asentaron la creación de las comunidades autónomas. En la península Ibérica hay multitud de climas debido a la orografía y la disposición de las costas, por lo que se puede hablar de microclimas locales en muchas ocasiones. En extensión territorial es el cuarto país de Europa, por detrás de Rusia (el mayor, incluso si sólo se refiere al territorio contenido en Europa), Ucrania y Francia, y el segundo de la Unión Europea. Los límites físicos de España son  Portugal y el Océano Atlántico al oeste, el Mar Mediterráneo al este, el Estrecho de Gibraltar al sur y los Pirineos, junto con el Golfo de Vizcaya y el Mar Cantábrico al norte.
                Los principales sistemas montañosos son: Pirineos, Sistema Ibérico, Cordillera Cantábrica, Sistema Central y Cordilleras Béticas (Subbética y Penibética). Cuenta con 105 aeropuertos situados en las distintas regiones, de ellos 33 son internacionales, siendo el más importante el aeropuerto de Madrid-Barajas.  
                .",
                "assets/fscommand/esp1.jpg",
                "assets/fscommand/esp2.jpg",
                "assets/fscommand/esp3.jpg",
                "assets/fscommand/esp4.jpg"
            ],
            [2, "Portugal", 102, 332, 81,
                'Portugal<br><br>Capital:	Lisboa<br>
                Idioma:	Portugués  y Mirandés<br>
                Superficie:	92.391 km_<br>
                Población:	10.566.212<br>
                Densidad:	109 hab./km_<br>
                Moneda:	Euro<br>
                Tipo de gobierno:	República semipresidencialista<br>
                Portugal  está situado al sur-occidente de Europa y es miembro de la Unión Europea (UE), delimitado al este y norte del país con el Reino de España y al sur y oeste por el océano Atlántico. 
                Portugal continental se divide en 18 distritos. Además de estos, hay dos regiones autónomas: las Azores y Madeira  que conforman Portugal insular, (son islas muy montañosas y a cientos de kilómetros del Portugal Continental). Cada distrito se subdivide en municipios y estos, a su vez, en freguesías. Está dividido en dos por su río principal, el Tajo. Al norte el paisaje es montañoso, aunque el punto más alto de Portugal sea el Monte Pico en las Azores. El sur ofrece sobre todo las extensas planicies, y su clima es algo más cálido y seco que el norte, más fresco y más lluvioso. Los principales ríos son: el Duero, el Mondego, el Zêzere, el Sado, el Miño y el Guadiana. A pesar de el Tajo es el río de mayor longitud en el territorio nacional, es nacido en España en la Sierra de Albarracín, el mayor río exclusivamente portugués es el Mondego nacido en la Serra de Estrella. En cuanto al relieve también puede dividirse en dos zonas: Portugal Norte, es montañoso y de clima atlántico. (Desde el Tajo hasta Galicia) y  Portugal Sur que es llano y de clima atlántico. (Desde el Tajo hasta el Golfo de Cádiz. 
                ',
                "assets/fscommand/port1.jpg",
                "assets/fscommand/port2.jpg",
                "assets/fscommand/port3.jpg",
                "assets/fscommand/port4.jpg"
            ],
            [4, "Italia", 429, 284, 197,
                'Italia<br><br>Capital:	Roma<br>
                Idioma:	Italiano<br>C
                Superficie:	301.270 km_<br>
                Población:	58.751.711<br>
                Densidad:	195 hab./km_<br>
                Moneda:	Euro<br>
                Tipo de gobierno:	República<br>
                Italia es un país de Europa del sur, que forma parte de la Unión Europea (UE).  Su territorio consiste principalmente de una península alargada (Península Itálica) y de dos grandes islas en el mar Mediterráneo: Sicilia y Cerdeña donde crea masas acuáticas importantes, como el Mar Tirreno al noroeste, el Mar Adriático al noreste y el Mar Jónico al sudeste. Por el norte está bordeado por los Alpes, por donde limita con Francia, Suiza, Austria y Eslovenia. Los estados independientes de San Marino y Ciudad del Vaticano son enclaves dentro del territorio italiano. Italia forma parte del G8 o grupo de las ocho naciones más industrializadas del mundo. Situada en el corazón del antiguo Imperio Romano, está llena de tesoros que reconstruyen la historia de las bases de la civilización occidental.
                Se encuentra dividida en 20 regiones administrativas, divididas en provincias y estas a su vez en comunas. De estas, 5 (Valle de Aosta, Friuli-Venecia Julia, Sicilia, Cerdeña y Trentino - Alto Adigio) tienen un estatus especial en razón de su naturaleza geográfica, cultural o social. Las demás se someten a un estatuto común de administración.
                La cordillera de los Apeninos forma la columna vertebral de la península, yendo desde el noroeste hasta donde se unen en los Alpes, la cadena montañosa que luego forma un arco el cual encierra a Italia desde el norte. Allí se encuentra también una gran llanura aluvial, la llanura Padana (Milán), drenada por el río Po y sus varios afluentes provenientes de los Alpes, Apeninos y Dolomitas. Su punto más alto es el Monte Bianco (Mont Blanc) a 4.810 m de altura, pero Italia se asocia más fácilmente con dos volcanes famosos: el actualmente inactivo Vesubio cerca de Nápoles y el muy activo Etna en Sicilia.
                Es reconocida por su arte, cultura y numerosísimos monumentos, entre ellos la torre de Pisa y el Coliseo romano; así como por su gastronomía (platos italianos famosos son la pizza y la pasta), su vino, su estilo de vida, su pintura, su diseño, cine, teatro, literatura y música, en particular la ópera. Lema nacional: Libertad, igualdad, humanidad
                ',
                "assets/fscommand/ita1.jpg",
                "assets/fscommand/ita2.jpg",
                "assets/fscommand/ita3.jpg",
                "assets/fscommand/ita4.jpg"
            ],
            [3, "Córcega (Italia)", 450, 373, 22,
                'Córcega (Italia)<br><br>Capital:	Ajaccio<br>
                Idioma:	Corso y Frances<br>
                Superficie:	8.680 km_<br>
                Población:	272.000<br>
                Densidad:	31 hab./km_<br>
                Moneda:	<br>
                Tipo de gobierno:	<br>
                Córcega es una isla situada a 200 km aproximadamente al sureste de la Costa Azul, al oeste de la Toscana y al norte de Cerdeña. Se sitúa junto con Cerdeña en una micro-placa continental separada de la de Francia y de Italia llamada "bloque corso-sardo". Se conoce a Córcega con el nombre de isla de la Belleza. Gracias a sus mil kilómetros de costas, de los cuales aproximadamente 300 son de arena fina,  es un sitio soñado para los deportistas náuticos, los submarinistas y otros amantes del mar. Pero es igualmente una montaña en el mar. Además, a principios del siglo, algunos la habían apodado la isla verde, para diferenciarla de las otras islas mediterráneas, mucho más áridas. En efecto,  a pesar de su posición meridional y su insolación, es una isla verde.
                No constituye una región sino simplemente una colectividad territorial, la "Colectividad Territorial de Córcega"; esta diversa denominación se traduce en la práctica en que goza de mayor poder relativo que las restantes regiones de Francia. Esta colectividad territorial está formada por dos departamentos: Alta Córcega (capital: Bastia) y Córcega del Sur (capital: Ajaccio).
                Su geografía es más bien boscosa y montañosa, en la costa sur predominan los acantilados escarpados (Bonifacio). La isla tiene un clima mediterráneo, con veranos calurosos y secos e inviernos suaves y lluviosos. La vegetación natural la formaban bosques mediterráneos, masas forestales, y arbustos. Predomina la vegetación esclerófila perennifolia, sobre todo encinas y alcornoques. Las montañas son mucho más frescas y húmedas.
                ',
                "",
                "",
                "",
                ""
            ],
            [5, "Croacia", 539, 294, 87,
                'Croacia<br><br>Capital:	Zagreb<br>
                Idioma:	croata<br>
                Superficie:	56.542 km_<br>
                Población:	4.495.248<br>
                Densidad:	83 hab./km_<br>
                Moneda:	kuna<br>
                Tipo de gobierno:	república<br>
                Croacia es un país europeo, antigua república de Yugoslavia. Se encuentra en la orilla nororiental del mar Adriático. Limita con Eslovenia y Hungría al norte; con Serbia y Montenegro por el este, y con Bosnia-Herzegovina al sur y al este. Se divide en 20 condados y 1 ciudad.
                Esta república se encorva como un bumerán desde las llanuras de la Panonia de Eslabona, a través del centro montañoso, hasta llegar a la península de Istria y la accidentada costa adriática. El extremo meridional de la costa croata, incluida la ciudad de Dubrovnik, está separado del resto del país por un saliente de Bosnia-Herzegovina.
                La principal atracción turística de Croacia la constituyen sus playas. Sin embargo, la mayoría de su litoral consta de grandes guijarros en lugar de arena. Las islas son tan bellas como las helénicas; existen 1.185, pero sólo 66 están habitadas. Cuenta con siete excelentes parques naturales. Brijuni, cerca de Pula, es el que está cultivado con más ahínco; destacan sus bien conservados bosques de encinas mediterráneas. El montañoso Parque Nacional de Risnjak alberga linces, mientras que los frondosos bosques del Parque Nacional de Paklenica están poblados de insectos, reptiles y aves, entre ellos el buitre leonado, en peligro de extinción. En el Parque Nacional de Plitvice se pueden encontrar osos, lobos y ciervos.
                El clima varía del mediterráneo de la costa adriática al continental del interior. Las soleadas zonas costeras ofrecen veranos cálidos y 
                ',
                "assets/fscommand/croa1.jpg",
                "assets/fscommand/croa2.jpg",
                "assets/fscommand/croa3.jpg",
                "assets/fscommand/croa4.jpg"
            ],
            [6, "Bosnia Herzegovina", 575, 313, 77,
                "",
                "assets/fscommand/bos1.jpg",
                "assets/fscommand/bos2.jpg",
                "assets/fscommand/bos3.jpg",
                "assets/fscommand/bos4.jpg"
            ],
            [7, "República Federal de Yugoslavia", 618, 295, 86,
                'República Federal de Yugoslavia<br><br>El territorio conocido genéricamente como Yugoslavia es el que agrupa a los actuales estados de Eslovenia, Croacia, Bosnia-Herzegovina, Serbia, Montenegro y Macedonia. Es el suelo de los herederos de los pueblos eslavos meridionales. 
                Serbia y el movimiento Pan-eslavo
                La progresiva desaparición del poder otomano en Europa, así como los resultados de las guerras balcánicas de (1912-13) con su desenlace favorable a Serbia contribuyeron de forma decisiva a aumentar el sentimiento paneslavo de todos los pueblos de la zona, a fin de superar las divisiones políticas y religiosas existentes entre ellos, basándose en la pertenencia a un grupo socio-étnico común.
                La creación del nuevo estado surge a partir de la unión de los Reinos de Serbia y Montenegro (ambos independizados del Imperio Otomano en el siglo XIX) y a los que se une una cantidad sustancial de territorio que antiguamente fue parte de Austria-Hungría.
                Estas áreas anteriormente austrohúngaras que formaron parte del nuevo reino incluían Croacia, Eslavonia y Vojvodina de la parte húngara del imperio; Carniola, parte de Estiria y la mayor parte de Dalmacia del lado austríaco, además de la provincia imperial de Bosnia y Herzegovina.
                ',
                "assets/fscommand/yugo1.jpg",
                "assets/fscommand/yugo2.jpg",
                "assets/fscommand/yugo3.jpg",
                "assets/fscommand/yugo4.jpg"
            ],

            [8, "Bulgaría", 696, 334, 102,
                'Bulgaría<br><br>Capital:	Sofía<br>
                Idioma:	Búlgaro<br>
                Superficie:	110.910 km_<br>
                Población:	7.537.929<br>
                Densidad:	67.9 hab./km_<br>
                Moneda:	Lev<br>
                Tipo de gobierno:	República<br>
                La República de Bulgaria es un país europeo ubicado en el sudeste del continente. Colinda al norte con Rumania, al sur con Grecia y Turquía y al oeste con Serbia y con la República de Macedonia. Su capital es Sofía.
                Organización político-administrativa<br>
                Artículo principal: Organización político-administrativa de Bulgaria<br>
                Regiones<br>
                Bulgaria ha sido uno de los países que más problemas económicos ha tenido al tiempo de desligar su economía de la antigua URSS, lo que ha mermado sus posibilidades en relación con otros países del área de Europa central. En la agricultura, dos terceras partes del suelo del país están dedicados al cultivo de cereales, fundamentalmente trigo, maíz, cebada, centeno y arroz. Los cultivos industriales del tabaco, el algodón y el girasol representan una parte más rentable de la organización agrícola. En el proceso de privatización de la tierra, se ha sufrido una gran parcelación que no ha beneficiado a las explotaciones.
                En la industria destaca la siderurgia, las plantas de productos químicos y la producción textil. Carece casi por completo de petróleo lo que agrava su dependencia exterior en materia energética.
                ',
                "assets/fscommand/bul1.jpg",
                "assets/fscommand/bul2.jpg",
                "assets/fscommand/bul3.jpg",
                "assets/fscommand/bul4.jpg"
            ],

            [9, "Francia", 253, 165, 210,
                "Francia<br><br>Capital:	París<br>
                Idioma:	Francés<br>
                Superficie:	675 417 km_ km_<br>
                Población:	63 213 894<br>
                Densidad:	93,59 hab./km_<br>
                Moneda:	Euro<br>
                Tipo de gobierno:	República<br>
                Francia, es un país cuyo territorio metropolitano se encuentra en Europa Occidental, incluyendo además diversos territorios e islas en otros continentes.<br>
                La parte metropolitana limita al suroeste con España y Andorra, al oeste con el Océano Atlántico; al norte con el Canal de la Mancha; al noreste con Bélgica, Luxemburgo, Alemania y Suiza; al este con Mónaco e Italia; y al sureste con el Mar Mediterráneo. En América del Sur los territorios coloniales de Francia, también limitan territorialmente con Brasil, Surinam y las Antillas Holandesas, entre otros límites. Los franceses se refieren comúnmente al territorio metropolitano como el Hexágono por su forma geográfica.
                Se divide administrativamente en 26 regiones y sus correspondientes 100 departamentos son de la metrópoli o de ultramar. Las 22 regiones metropolitanas están constituidas por 96 departamentos metropolitanos, y estos por 329 distritos, los que están conformados por 3879 cantones, y estos a su vez por 36 568 comunas o municipios. Las 4 regiones de ultramar son San Pedro y Miquelón, Mayotte, Polinesia Francesa, y Wallis y Futuna. Y 1 colectividad sui géneris: Nueva Caledonia las cuales están constituidas por 4 departamentos de ultramar: Reunión, Guadalupe, Martinica y Guayana Francesa.
                1 territorio de ultramar conformado por las Tierras Australes (Kerguelen, Crozet, Islas Saint-Paul y Amsterdam) y las Tierras Antárticas (Tierra Adelia y Estación Dumont d'Urville), cuya denominación general es Tierras Australes y Antárticas Francesas
                6 dependencias son islas francesas dispersas y actualmente deshabitadas: Clipperton, en el nor-oriente del Océano Pacífico (administrada desde la Polinesia Francesa); y Europa, Gloriosa, Saint Cristopher, Tromelin, y Bassas da India, en el sur-occidente del Océano Índico (administradas desde el departamento de la Reunión. Las principales islas son: Nueva Caledonia, Córcega, Kerguelen, Reunión, Guadalupe, Lifou, Martinica, Tahití, Maré y Mayotte, entre muchas otras.
                Principalmente la capital es prolija en monumentos artísticos e históricos, algo que sin embargo no ha sido limitación para que uno en especial se convierta en su símbolo, por encima de los demás: La Torre Eiffel.
                Es un país altamente desarrollado, con la sexta economía más grande del mundo y comparte junto con Alemania el nombre de potencia europea. Es considerado como uno de los paises con mayor calidad de vida ya que la poblacion disfruta de un alto grado de servicios, aparte de la sanidad que es una de las mejores del mundo. La edad promedio de las mujeres es el mas alto mundialmente eso refleja una exelente vida, aparte de que francia es una pais de primer mundo y goza de todos los servicios que la población requiere.
                ",
                "assets/fscommand/fra1.jpg",
                "assets/fscommand/fra2.jpg",
                "assets/fscommand/fra3.jpg",
                "assets/fscommand/fra4.jpg"
            ],
            [10, "Eslovenia", 537, 287, 55,
                'Eslovenia<br><br>Capital:	Liubliana<br>
                Idioma:	Esloveno<br>
                Superficie:	20.273 km_<br>
                Población:	2.011.070<br>
                Densidad:	96 hab./km_<br>
                Moneda:	Tolar<br>
                Tipo de gobierno:	República democrática<br>
                Eslovenia es un país de la Unión Europea que se encuentra en Europa Central. Limita con Italia al oeste, con el mar Adriático por el suroeste, con Croacia por el sur y el este, con Hungría por el noreste y con Austria por el norte.
                Es un Estado de la Europa balcánica, entre Austria, Hungría, Croacia e Italia, que se abre al mar por el golfo de Trieste, a través del puerto de Koper Capodistra en la península de Istria. Es un país con una costa muy pequeña (Mar Adriático). País de extensos bosques,  su relieve comprende los montes Karavanke, el macizo cristalino de Pohorje y las mesetas calcáreas de Notranjsko y Dolenjsko. Los Alpes Julianos, con la mayor elevación del país, el monte Triglav (2.864 m), conservan huellas de la erosión glaciar cuaternaria, con lagos como el Bled. Las formaciones kársticas, extendidas desde Lubliana hasta el litoral, están excavadas por ríos subterráneos y constituyen enormes cavidades, como las cuevas de Postojna, de 19 km de longitud. Aparte del Drava y el Sava, cabe citar el río Kolpa. El clima es básicamente alpino, salvo en las zonas próximas al mar. El clima varía desde el templado del litoral, hasta el más extremo de las mesetas del este y de las montañas, aquí con mayores lluvias en verano
                ',
                "assets/fscommand/eslo1.jpg",
                "assets/fscommand/eslo2.jpg",
                "assets/fscommand/eslo3.jpg",
                "assets/fscommand/eslo4.jpg"
            ],

            [11, "Mallorca (España)", 325, 444, 22,
                "Mallorca (España)<br><br>Capital:	Palma de Mallorca<br>
                Idioma:	castellano y el catalán<br>
                Superficie:	3.625'75 km_<br>
                Población:	955.045 habitantes<br>
                Densidad:	214,84 hab./km_<br>
                Moneda:	<br>
                Tipo de gobierno:	<br>
                Mallorca es la isla más grande del archipiélago balear, siendo este archipiélago la comunidad autónoma más oriental de España, casualmente comunidad autónoma uniprovincial. Al igual que Ibiza, Mallorca es un destino turístico importante. 
                La capital de la isla (y también de la comunidad autónoma española de las Islas Baleares) es Palma de Mallorca o como la conocen los habitantes de la \"Part Forana\" (la parte de la isla que no es la capital): Ciutat. El archipiélago de Cabrera, administrativamente, está agrupado con Mallorca, en el municipio de Palma.
                La isla tiene una población censada de 955.045 habitantes (2004), de la cual algo menos de la mitad vive en su capital, Palma de Mallorca. Las ciudades que la siguen en población son Manacor, Inca, Llucmajor, Alcúdia y Sóller. Al ser el turismo la principal actividad de la isla, recibe anualmente unos 11 millones de visitantes, por lo que en verano, la población de estas ciudades se multiplica.
                La geografía física de Mallorca viene configurada por la Sierra de Tramuntana que, al noroeste de la isla, da lugar a impresionantes acantilados que contrastan con las playas del resto de su litoral. El Pla es la fértil llanura central. Al oeste de la llanura central y en el centro de la bahía de Palma, entre Calvià y Llucmajor está situada la capital, Palma.
                ",
                "assets/fscommand/mac1.jpg",
                "assets/fscommand/mac2.jpg",
                "assets/fscommand/mac3.jpg",
                "assets/fscommand/mac4.jpg"
            ],
            [12, "Cardeña (Italia)", 430, 419, 40,
                'Cardeña (Italia)<br><br>Capital:	Cagliari<br>
                Idioma:	Italiano y  Sardo<br>
                Superficie:	24.090 km_<br>
                Población:	1.637.639<br>
                Densidad:	68 hab/km_<br>
                Moneda:	<br>
                Tipo de gobierno:	<br>
                Cerdeña es una isla italiana en el centro del mar mediterráneo occidental, situada entre Córcega al norte, Italia al este, Túnez al sur, y las islas Baleares al oeste. Es por su extensión, la segunda isla del Mediterráneo después de Sicilia.
                La capital de la región de Cerdeña se halla en la ciudad de Cagliari, situada al sur de la isla. Otras ciudades: Sassari, Alguer, Porto Torres, Olbia, Tempio Pausania, La Maddalena, Ozieri, Nuoro, Oristano, Iglesias y Carbonia.
                Es una región autónoma de Italia. La región está dividida en cuatro provincias: Cagliari, Sassari, Nuoro y Oristano; Cerdeña es una de las cinco regiones italianas cuyos habitantes han sido reconocidos como un "popolo"(pueblo diferenciado) por el Parlamento italiano. Ejemplo: la región de Veneto
                La isla tiene numerosas y extraordinarias zonas turísticas, incluyendo la Costa Esmeralda y Gennargentu. La isla es particularmente famosa por sus playas, pero también es rica en otros lugares interesantes. Los restos arqueologicos nuragicos constituyen un aliciente turístico.
                ',
                "",
                "",
                "",
                ""
            ],

            [13, "Sicilia (Italia)", 512, 491, 55,
                'Sicilia (Italia)<br><br>Capital:	Palermo<br>
                Idioma:	<br>
                Superficie:	25.708 km_<br>
                Población:	5.015.591<br>
                Densidad:	195 hab/km_<br>
                Moneda:	<br>
                Tipo de gobierno:	<br>
                Sicilia es la séptima isla europea por dimensiones, la principal isla italiana y la mayor del Mar Mediterráneo. Dentro de la Región autónoma se encuentran, además de la isla homónima, varias islas más pequeñas: los archipiélagos de las Islas Eolias a nordeste, las Islas Egadas al oeste, las Islas Pelagie al suroeste, y las islas de Pantelleria al sur y Ústica al noroeste.
                El archipiélago de Malta geográficamente es parte integrante de Sicilia. Malta ha estado unida a Sicilia, incluso políticamente. La isla de está separada del continente por el Estrecho de Messina.
                Tanto la isla principal como las que la rodean, son de origen volcánico. Hoy en día sigue habiendo una gran actividad volcánica, con varios volcanes en activo: Predominan las zonas montañosas: a las cuatro cordilleras principales (Madonie, Nebrodi, Peloritani e Iblei) se suman mesetas, macizos aislados y el Etna, volcán activo y pico más alto de la isla.
                Está bañada al norte por el Mar Tirreno, al sur por el Mediterráneo, el Estrecho de Mesina la separa de Calabria. Sus ríos son numerosos pero de poco caudal, entre ellos se encuentran el Simeto, el Platani y el Salso. 
                ',
                "",
                "",
                "",
                ""
            ],

            [14, "Grecia", 659, 399, 150,
                'Grecia<br><br>Capital:	Atenas<br>
                Idioma:	Griego<br>
                Superficie:	131.940 km_<br>
                Población:	10.668.354<br>
                Densidad:	81 hab./km_<br>
                Moneda:	Euro<br>
                Tipo de gobierno:	República presidencialista<br>
                Grecia (oficialmente República Helénica) es un país del sureste de Europa que forma parte de la Unión Europea (UE). Situado en el lado sur de la península balcánica en el litoral del Mar Mediterráneo, hace frontera por tierra con Albania, Antigua República Yugoslava de Macedonia, Bulgaria y Turquía. Por mar hace frontera con Italia, Turquía y Albania. Está dividida administrativamente en 13 regiones, divididas a su vez en prefecturas Lema nacional: Libertad o Muerte
                El territorio griego es muy variado. Contando con 9.000 islas, islotes y afloramientos rocosos, siendo segundo de Europa luego de Noruega y décimo detrás de Estados Unidos en longitud costera. Es mayoritariamente montañosa y cuenta con varias cadenas entre ellas los Alpes Dináricos al oeste (los cuales por medio de islas cambian de dirección hacia el sureste al sur del Peloponeso); montes Ródope, la cadena del Olimpo entre otras. Es el país de Europa con mayor número de picos montañosos. Su mayor altura se encuentra en la cadena del Olimpo en el monte Mytikas, siendo este el 4to de Europa en prominencia 
                Climáticamente se distinguen 3 zonas bien marcadas. Clima Mediterraneo en el Sur y zona de la cuenca del Egeo. Alpino en el oeste (con excepción de la región de las islas del Jónico), centro, noroeste y partes del norte. El norte es mayoritariamente de clima continental como en la mayoría de los países de Europa central (de hecho esta parte del país corresponde geofísicamente a Europa central).
                ',
                "assets/fscommand/gre1.jpg",
                "assets/fscommand/gre2.jpg",
                "assets/fscommand/gre3.jpg",
                "assets/fscommand/gre4.jpg"
            ],

            [15, "República de Macedonia", 664, 386, 47,
                'República de Macedonia<br><br>Capital:	Skopje<br>
                Idioma:	eslavo-macedonio y albanés_<br>
                Superficie:	25.713 km_<br>
                Población:	2.022.547<br>
                Densidad:	81 hab./km_<br>
                Moneda:	Denar macedonio<br>
                Tipo de gobierno:	<br>
                Macedonia es un estado independiente en la península balcánica al sudeste de Europa. Debido a la disputa con Grecia por el nombre de Macedonia, internacionalmente se usan las denominaciones ex República Yugoslava de Macedonia o Antigua República Yugoslava de Macedonia. Está organizada administrativamente en 34 condados y 85 Municipalidades 
                Abarca sólo una parte de la región geográfica de la región histórica de Macedonia. Lo que queda de esta región está dividido entre la vecina Grecia (con aproximadamente la mitad del total) y Bulgaria (con menos del 10%).
                El terreno es mayoritariamente montañoso, situado entre los Sharr y los Osogovske planina alrededor del valle del río Vardar. Tres grandes lagos (Lago Ohrid, Lago Prespa y Lago Doiran) se encuentran en la frontera meridional de la República, divididos por la frontera con Albania y Grecia. La región es sismicamente activa y ha sido lugar de terremotos destructivos en el pasado, el más reciente en 1963 cuando Skopje fue severamente dañada por un gran terremoto. Las ciudades más grandes del país son Skopje, Bitola, Kumanovo, Prilep y Tetovo 
                ',
                "assets/fscommand/mac1.jpg",
                "assets/fscommand/mac2.jpg",
                "assets/fscommand/mac3.jpg",
                "assets/fscommand/mac4.jpg"
            ],

            [16, "Albania", 640, 380, 30,
                'Albania<br><br>Capital:	Tirana<br>
                Idioma:	Albanés<br>
                Superficie:	28.748 km_<br>
                Población:	3.582.205<br>
                Densidad:	125 hab./km_<br>
                Moneda:	Lek<br>
                Tipo de gobierno:	República parlamentaria<br>
                Albania es un país mediterráneo del sudeste de Europa. Limita con Montenegro al norte, Serbia (Kosovo) al noreste, Macedonia al este y Grecia al sur, tiene una costa al mar Adriático al oeste y otra al mar Jónico al suroeste. Está dividida en 12 condados o prefecturas, que están a la vez divididos en 36 distritos. La capital tiene un estado especial. Lema nacional: La fe de los albanos es el albanismo
                Es un estado muy montañoso, con alturas generalizadas de más de 1000 metros. Las tierras bajas sólo ocupan 1/7 del país y se reducen a la llanura litoral y a valles muy estrechos. Sus principales ríos son el Drin, el Vijosë y el Devoll. La costa frente al mar Adriático es recortada, salpicada por golfos y cabos. Las tierras costeras disfrutan de un clima mediterráneo, con temperaturas medias anuales de alrededor de 16ºC. En cambio, en el interior se vuelve un clima continental, con medias anuales de 10ºC y bruscos contrastes de temperaturas a lo largo del año. En algunas zonas montañosas las precipitaciones superan los 2000 mm. La vegetación mediterránea con maquias y coníferas destacan en la franja litoral mientras que en el interior montañoso predominan bosques de coníferas y caducifolias.
                La zona costera tiene está situada entre los Mares Adriático y Jónico. Sus principales ríos son el Drin, el Vjosë, el Seman y el Shkumbin.
                ',
                "assets/fscommand/alb1.jpg",
                "assets/fscommand/alb2.jpg",
                "assets/fscommand/alb3.jpg",
                "assets/fscommand/alb4.jpg"
            ],

            [17, "Turquía", 761, 384, 46,
                'Turquía<br><br>Capital:	Ankara<br>
                Idioma:	Turco<br>
                Superficie:	780.580 km_<br>
                Población:	4.319.167 hab.<br>
                Tipo de gobierno:	República<br>
                La República de Turquía, está situada entre Asia (97% de su territorio) y Europa (3% de su territorio). La península de Anatolia entre el Mar Negro y el Mediterráneo forma el «corazón» del país. Limita al noreste con Georgia, al este con Armenia y la República autónoma de Naxçiván (perteneciente a Azerbaiyán), al sudeste con Irán, al norte con el mar Negro, al oeste con Grecia, el mar Egeo y Bulgaria, y al sur con Iraq, Siria y el mar Mediterráneo.
                Es un estado miembro de las Naciones Unidas, OTAN, OSCE, OCDE, OIC, y el Consejo de Europa. Debido a su posición estratégica, ubicándose a medio camino entre Europa y Asia así como tres mares, su lema nacional es Paz en casa, paz en el mundo.
                Se divide administrativamente en 81 provincias, las cuales están a su vez, divididas en distritos (subprovincias) y comunas. Por otra parte, geográficamente el país esta dividido en 8 regiones.
                Los ríos de Turquía no son navegables ya que son muy rápidos. El Kizil Irmak es el río más largo del país y desemboca en el mar Negro. Los ríos Tigris y Éufrates fluyen desde el este de Turquía hasta su desembocadura en el golfo Pérsico. El relieve es en su mayoría montañoso con una estrecha llanura costera y una elevada meseta central (Anatolia)
                ',
                "assets/fscommand/tur1.jpg",
                "assets/fscommand/tur2.jpg",
                "assets/fscommand/tur3.jpg",
                "assets/fscommand/tur4.jpg"
            ],

            [18, "Rumanía", 662, 239, 145,
                '',
                "assets/fscommand/rum1.jpg",
                "assets/fscommand/rum2.jpg",
                "assets/fscommand/rum3.jpg",
                "assets/fscommand/rum4.jpg"
            ]
            
        ];
        $cityAry = [
            [0, "", 0, 0, 0],
            [1, "Lisboa", 122, 387, 18],
            [2, "Madrid", 206, 387, 18],
            [3, "Pairs", 368, 217, 18],
            [4, "Roma", 525, 394, 18],
            [5, "Liubliana", 557, 290, 18],                         
            [6, "Zagreb", 583, 301, 18],
            [7, "Saraievc", 605, 336, 18],
            [8, "Tirana", 645, 403, 18],
            [9, "Belgrado", 653, 315, 18],
            [10, "Skopje", 674, 394, 18],
            [11, "Bucarest", 757, 314, 18],
            [12, "Sofía", 719, 362, 18],
            [13, "Atenas", 704, 468, 18],
            [14, "Estambul", 773, 389, 18],


        ];
        //#### $riverAry[ idNum, name, x, y, w] ####//
        $riverAry = [
            [0, 0, 0],
            [1, "Río Tajo", 107, 382, 94],
            [3, "Río Ebro", 225, 331, 69],
            [5, "Río Loira", 280, 243, 102],
            [7, "Río Sena", 332, 202, 50],
            [9, "Río Ródano", 394, 224, 59],
            [11, "Río Po", 434, 301, 78],
            [13, "Río Danubio", 631, 304, 163]
            
        ];
        $mountAry = [

            [0, ""],
            
            [2, "Volcán Mulhacén", 197, 466, 23],
            [3, "Montes Cantábricos", 153, 312, 60],
            [4, "Montes Pirineos", 280, 312, 55],
            [5, "Montes Apeninos", 501, 362, 93],
            [6, "Montes Dináricos", 533, 311, 109],
            [7, "Montes Cárpatos", 700, 248, 54],
            [8, "Alpes Transilvanos", 699, 301, 82],
            [9, "Montes Balcanesi", 723, 342, 73],
            [10, "Sierra Morena", 153, 432, 73],
            [11, "Montes Dináricos", 213, 382, 73],
            [12, "Monte Etna", 5333, 342, 73],
            [13, "Mont Blac", 453, 308, 25],
            [1, "Volcán Vesubio", 539, 404, 23],

        ];

        $songAry = [
            [0, "", 0, 0, 0, 0],
            [1, "Torre Eiffel, Francia", 353, 203, 20, 2, "assets/fscommand/lugares/belen.JPG"],
            [2, "Catedral de la Sagrada Familia Española", 290, 358, 20, 2, "assets/fscommand/lugares/banios.JPG"],
            [3, "Torre Inclina de Pisa, Italia", 489, 344, 20, 2, "assets/fscommand/lugares/huascaran.JPG"],
            [4, "Ciudad del Vaticano, Italia", 505, 372, 20, 2, "assets/fscommand/lugares/callejon.JPG"],
            [5, "Coliseo Romano, Italia", 531, 389, 20, 2, "assets/fscommand/lugares/conococha.JPG"],
            [6, "Partenón, Grecia", 668, 449, 20, 2, "assets/fscommand/lugares/conococha.JPG"],  
            [7, "Puente Viejo, Florenica Italia", 528, 342, 20, 2, "assets/fscommand/lugares/conococha.JPG"],
            [8, "Monte Olimp Gracia" , 709, 403, 20, 2, "assets/fscommand/lugares/conococha.JPG"]        
        ];

        $songImgAry = [0, "fortress", "fort"];
    ?>
    <script>
    var locationAry = <?=json_encode($locationAry)?>;
    var riverAry = <?=json_encode($riverAry)?>;
    var cityAry = <?=json_encode($cityAry)?>;
    var mountAry = <?=json_encode($mountAry)?>;
    var songAry = <?=json_encode($songAry)?>;
    var mapPositionArry = [
        [],        
    ];
    var colorAry = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

    var colormapAry = [
        [],
        [2,9], //1
        [1], //2
        [], //3
        [9,10],//4
        [6,7,10,],//5
        [5,7],//6
        [5,6,8,15,16,18],//7
        [7,14,15,17,18],//8
        [1,4],//9
        [4,5],//10
        [],//11
        [],//12
        [],//13
        [8,15,16,17],//14
        [7,8,14,16],//15
        [7,14,15],//16
        [8,14],//17
        [7,8],//18   
        
    ];

    var mapPositionArry = [
        [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], 
        [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], 
        [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], 
    ]
    function getObj(id) {
        return document.getElementById(id);
    }

    function loginOver() {
        getObj("login").style.background = "url('assets/loginSel.png')";
    }

    function logOut() {
        getObj("login").style.background = "url('assets/login.png')";
    }

    var beforPage = "";
    var main2mapSet = 0;
    var scale = 0.73;

    function openPage(page) {
        var x = getObj("be");
        x.autoplay = true;
        x.load();

        for (i = 1; i < 7; i++) {
            getObj("page_3_" + i).style.display = "none";
            getObj('submenu2_' + i).src = "assets/submenu2_" + i + ".png";
            getObj("submenu2_" + i).setAttribute("rol", 0);
        }

        if (main2mapSet == 0) {
            main2mapSet = 1;

            for (var i = 1; i < locationAry.length; i = i + 1) {   

                getObj('selmap_' + locationAry[i][0]).style.width = scale *  locationAry[i][4] + 2 + "px";

               
                mapPositionArry[locationAry[i][0]][0] = scale *  locationAry[i][2] - 228 + 171;
                mapPositionArry[locationAry[i][0]][1] = scale *  locationAry[i][3] - 31 - 63;
            }
        }

        if (page == 2) {
            getObj("page_1").style.display = "flex";
            getObj('subMenu_1').className = "subMenuUnSel_1";
            getObj('subMenu_1').rol = 1;

        }

        if (page == 3) {
            getObj("page_2").style.display = "flex";
            getObj("page_2_5").style.display = "";
            getObj('subMenu_1').className = "subMenuUnSel_1";
            getObj('subMenu_1').rol = 1;

            var W_element = getObj('map_min_container').offsetWidth;
            


            if (W_element == 500) {

                for (var i = 1; i < locationAry.length; i = i + 1) {
                    getObj('map_' + i).style.left = scale * getObj('map_' + i).offsetLeft - 258 + 60 + "px";
                    getObj('map_' + i).style.top = scale * getObj('map_' + i).offsetTop - 29 + "px";
                    getObj('map_' + i).style.width = scale *  getObj('map_' + i).offsetWidth + 2 + "px";

                }

                getObj('map_min_container').style.width = 499 + "px";
            }
        }
        if (page == 4) {
            getObj("page_2").style.display = "flex";
            getObj("page_2_6").style.display = "";
            getObj("selmapview").style.display = "";
            getObj('subMenu_1').className = "subMenuUnSel_1";
            getObj('subMenu_1').rol = 1;
            getObj("minmap").src = "";
        }
        beforPage = page;
    }

    function openMainPage() {
        getObj('icoDiv').style.display = "";
        getObj('right_bar').style.display = "";
        getObj('subMenu_1').style.display = "flex";
        getObj('subMenu_2').style.display = "flex";

        getObj('progress').style.display = "none";
        getObj('main').style.display = "";
    }

    function page3close() {
        var x = getObj("be");
        x.autoplay = true;
        x.load();
        selmapClose();

        clockFlag = 0;
        beforPage = "";
        getObj("page_2").style.display = "none";
        getObj("selmapview").style.display = "none";
    }

    function openProgressPage() {
        getObj('login').style.display = "none";
        getObj('progress').style.display = "";

        loading();
        //openMainPage();
    }

    var sec = 0;

    function loading() {
        if (sec > 9) openMainPage();

        sec++;
        getObj('pg').src = "assets/pg_" + (sec % 6) + ".png";
        setTimeout(loading, 200);

        getObj('pros').innerHTML = sec * 10 + "%";
    }

    function subMenu(sel) {
        var x = getObj("be");
        x.autoplay = true;
        x.load();

        if (beforPage == "") {
            if (sel == 1) {

                if (getObj('subMenu_1').rol == 1 || !getObj('subMenu_1').rol) {

                    getObj('subMenu_1').className = "subMenuSel_1";
                    getObj('subMenu_1').rol = 2;

                    if (getObj('subMenu_2').rol == 2) {
                        getObj('subMenu_2').className = "subMenuUnSel_2";
                        getObj('subMenu_2').rol = 1;
                    }

                } else {
                    getObj('subMenu_1').className = "subMenuUnSel_1";
                    getObj('subMenu_1').rol = 1;
                }


            } else {

                if (getObj('subMenu_2').rol == 1 || !getObj('subMenu_2').rol) {

                    getObj('subMenu_2').className = "subMenuSel_2";
                    getObj('subMenu_2').rol = 2;

                    if (getObj('subMenu_1').rol == 2) {
                        getObj('subMenu_1').className = "subMenuUnSel_1";
                        getObj('subMenu_1').rol = 1;
                    }

                } else {
                    getObj('subMenu_2').className = "subMenuUnSel_2";
                    getObj('subMenu_2').rol = 1;
                }

            }
        }
    }
    var mountFlag = 1;

    function menuOver(sel) {

        getObj('submenu' + sel).src = "assets/subselmenu" + sel + ".png";
    }

    function menuOut(sel) {

        getObj('submenu' + sel).src = "assets/submenu" + sel + ".png";
    }

    function riverover(id, sel) {

        if (mountFlag == 0)
            getObj(("r_") + id).src = "assets/river_min/" + sel + ".png";
    }

    function riverout(id, sel) {
        if (mountFlag == 0)
            getObj(("r_") + id).src = "assets/river_min/" + sel + ".png";
    }
    var riverselcnt = 0;
    var riverselok = 0;

    function riversel(sel) {
        if (sel == riverAry[answerIndx][0]) {

            var x = getObj("bien");
            x.autoplay = true;
            x.load();

            mountFlag = 1;
            getObj("play1_1").style.display = "flex";
            clockFlag = 0;
            riverselcnt = 0;
            getObj("p").value = getObj("p").value * 1 + 5;

            riverselok = sel;

        } else {

            if (riverselcnt > 1) {
                var x = getObj("boing");
                x.autoplay = true;
                x.load();

                mountFlag = 1;
                getObj("play1_1").style.display = "flex";
                clockFlag = 0;
                riverselcnt = 0;
                getObj("p").value = getObj("p").value * 1 - 5;

                if (answerIndx == 0) return false;

                getObj(("r_" + riverAry[answerIndx][0])).src = "assets/river_min/" + (getObj(("r_" + riverAry[
                    answerIndx][0])).getAttribute("x")) + ".png";
                riverselok = sel;

            } else {
                riverselcnt++;

                var x = getObj("mal");
                x.autoplay = true;
                x.load();

            }
        }

    }

    function mountover(sel) {
        if (mountFlag == 0)
            getObj(("m_") + sel).src = "assets/mount/m" + sel + "_12.png";
    }

    function mountout(sel) {
        if (mountFlag == 0)
            getObj(("m_") + sel).src = "assets/mount/m" + sel + "_11.png";
    }
    var mountcnt = 0;

    function mountsel(sel) {

        if (answerIndx > 0) {

            if (sel == mountAry[answerIndx][0]) {
                var x = getObj("bien");
                x.autoplay = true;
                x.load();

                mountFlag = 1;

                getObj(("m_") + sel).src = "assets/mount/m" + sel + "_12.png";

                getObj("p").value = getObj("p").value * 1 + 15;

                getObj("play1_2").style.display = "flex";

                clockFlag = 0;
                mountcnt = 0;
            } else {

                if (mountcnt > 1) {
                    var x = getObj("boing");
                    x.autoplay = true;
                    x.load();

                    mountFlag = 1;
                    getObj("play1_2").style.display = "flex";
                    clockFlag = 0;
                    mountcnt = 0;
                    getObj("p").value = getObj("p").value * 1 - 5;

                    getObj(("m_") + mountAry[answerIndx][0]).src = "assets/mount/m" + mountAry[answerIndx][0] +
                        "_12.png";

                    //riverselok = sel;

                } else {
                    mountcnt++;

                    var x = getObj("mal");
                    x.autoplay = true;
                    x.load();

                }
            }

        }

    }

    function cityover(sel) {

    }

    function cityout(sel) {


    }


    function fortressover(sel) {

    }

    function fortressyout(sel) {

    }

    function fortresssel(sel) {
       // getObj(("fs_") + sel).src = "assets/fortresssel.png";
    }

    function fortover(sel) {

    }

    function fortout(sel) {

    }

    function fortsel(kind, sel) {

        //if(kind == 1){
        getObj(("f_") + sel).src = "assets/fortresssel.png";
        //}else{
        getObj(("f_") + sel).src = "assets/fortsel.png";
        //}

    }

    var beforeSelColor = 0;

    function selColor(sel) {
        var x = getObj("be");
        x.autoplay = true;
        x.load();

        if (sel != beforeSelColor) {
            if (beforeSelColor > 0)
                getObj("color_" + beforeSelColor).src = "assets/color" + beforeSelColor + ".png";
            getObj("color_" + sel).src = "assets/colorsel" + sel + ".png"
        } else {

        }

        beforeSelColor = sel;
    }
    
    var colorCnt = 1;

    function colormap(sel) {

        getObj("color_erro").style.display = "none";

        if (mountFlag == 0) {

            flag = 0;
            for (var i = 0; i < colormapAry[sel].length; i++) {

                if (colorAry[colormapAry[sel][i]] == beforeSelColor || colorAry[sel] > 0) {

                    flag = 1;
                }
            }
            if (flag == 0) {
                getObj("map_" + sel).src = "assets/map_" + beforeSelColor + "/" + sel + ".png";

                colorAry[sel] = beforeSelColor;

                if (colorCnt == 18) {
                    clockFlag = 0;
                }

                colorCnt++;
            } else {
                //Selecciona otro color
                getObj("color_erro").style.display = "";
            }

        }

    }

    function page1close() {

        var x = getObj("be");
        x.autoplay = true;
        x.load();

        clockFlag = 0;
        beforPage = "";
        getObj("page_1").style.display = "none";

    }

    function page2close() {
        var x = getObj("be");
        x.autoplay = true;
        x.load();

        beforPage = "";
        getObj("timeDiv").style.display = "none";
        getObj("page_2").style.display = "none";

        getObj("page_2_1").style.display = "none";
        getObj("page_2_2").style.display = "none";
        getObj("page_2_3").style.display = "none";
        getObj("page_2_4").style.display = "none";
        getObj("page_2_5").style.display = "none";
        getObj("page_2_6").style.display = "none";

        getObj("answerDiv").style.display = "none";
        getObj("tiempo").style.display = "none";
        getObj("piezas").style.display = "none";
        getObj("selmapDiv").style.display = "none";

        getObj("selmapview").style.display = "";
        getObj("selmapback").style.display = "none";
        getObj("selmapDiv").style.display = "none";
        getObj("piezas").style.display = "none";
        getObj("tiempo").style.display = "none";

        clockFlag = 0;

        playClose1_1();
        playClose1_2();
        playClose1_3();
        playClose1_4();
    }

    function page2open(sel) {
        var x = getObj("be");
        x.autoplay = true;
        x.load();

        getObj("page_1").style.display = "none";
        getObj("page_2").style.display = "flex";
        getObj("page_" + sel).style.display = "";

        var W_element = getObj('rever_min_container').offsetWidth;

        if (W_element == 500) {
            for (var i = 1; i < riverAry.length; i++) {
                getObj('r_' + riverAry[i][0]).style.left = scale * getObj('r_' + riverAry[i][0]).offsetLeft - 262 + 65 + "px";
                getObj('r_' + riverAry[i][0]).style.top = scale * getObj('r_' + riverAry[i][0]).offsetTop - 33 + 5 + "px";
                getObj('r_' + riverAry[i][0]).style.width = scale * getObj('r_' + riverAry[i][0]).offsetWidth + "px";
            }
            getObj('rever_min_container').style.width = 499 + "px";
        }

        W_element = getObj('mount_min_container').offsetWidth;
        if (W_element == 500) {
            for (var i = 1; i < mountAry.length; i = i + 1) {
                getObj('m_' + mountAry[i][0]).style.left = scale * getObj('m_' + mountAry[i][0]).offsetLeft - 256 + 60 + "px";
                getObj('m_' + mountAry[i][0]).style.top = scale * getObj('m_' + mountAry[i][0]).offsetTop - 31 + "px";
                getObj('m_' + mountAry[i][0]).style.width = scale * getObj('m_' + mountAry[i][0]).offsetWidth + "px";
            }
            getObj('mount_min_container').style.width = 499 + "px";
        }

        W_element = getObj('star_min_container').offsetWidth;
        if (W_element == 500) {
            for (var i = 1; i < cityAry.length; i = i + 1) {
                getObj('s_' + cityAry[i][0]).style.left = scale * getObj('s_' + cityAry[i][0]).offsetLeft - 255 + 60 + "px";
                getObj('s_' + cityAry[i][0]).style.top = scale * getObj('s_' + cityAry[i][0]).offsetTop - 28 + "px";
                getObj('s_' + cityAry[i][0]).style.width = scale * getObj('s_' + cityAry[i][0]).offsetWidth + "px";
            }
            getObj('star_min_container').style.width = 499 + "px";
        }

        W_element = getObj('fort_min_container').offsetWidth;        
        if (W_element == 500) {
            for (var i = 1; i < songAry.length; i = i + 1) {
                getObj('f_' + songAry[i][0]).style.left = scale * getObj('f_' + songAry[i][0]).offsetLeft - 257 + 60 + "px";
                getObj('f_' + songAry[i][0]).style.top = scale * getObj('f_' + songAry[i][0]).offsetTop - 27 + "px";
                getObj('f_' + songAry[i][0]).style.width = 1.5 * getObj('f_' + songAry[i][0]).offsetWidth + "px";
            }
            getObj('fort_min_container').style.width = 499 + "px";
        }
    }
    var answerIndx = 0;
    var clockFlag = 0;

    function play1_1() {

        var x = getObj("be");
        x.autoplay = true;
        x.load();

        if (getObj(("r_" + riverAry[answerIndx][0]))) {
            getObj(("r_" + riverAry[answerIndx][0])).src = "assets/river_min/" + riverAry[answerIndx][0] + ".png";

        }
        if (getObj(("r_" + riverselok))) {

            getObj(("r_" + riverselok)).src = "assets/river_min/" + riverselok + ".png";
        }

        getObj("play1_1").style.display = "none";
        getObj("t").value = 16;

        getObj("timeDiv").style.display = "";
        getObj("answerDiv").style.display = "";

        answerIndx = Math.round(Math.random() * 100) % (riverAry.length - 1);
        if(answerIndx == 0)answerIndx = 1;

        getObj("q").innerHTML = riverAry[answerIndx][1];
        mountFlag = 0;
        clockFlag = 1;
        clock();
    }

    function playClose1_1() {
        if (getObj(("r_" + riverAry[answerIndx][0]))) {
            getObj(("r_" + riverAry[answerIndx][0])).src = "assets/river_min/" + riverAry[answerIndx][0] + ".png";

        }
        if (getObj(("r_" + riverselok))) {

            getObj(("r_" + riverselok)).src = "assets/river_min/" + riverselok + ".png";
        }

        getObj("p").value = "0";

        var x = getObj("be");
        x.autoplay = true;
        x.load();


        getObj("play1_1").style.display = "flex";
        clockFlag = 0;
        mountFlag = 1;
        getObj("answerDiv").style.display = "none";
        getObj("page_2").style.display = "none";
        getObj("page_2_1").style.display = "none";
        getObj("timeDiv").style.display = "none";


        getObj("page_1").style.display = "flex";
    }

    function playClose1_2() {
        var x = getObj("be");
        x.autoplay = true;
        x.load();

        getObj("p").value = "0";
        getObj("play1_2").style.display = "flex";
        clockFlag = 0;
        mountFlag = 1;

        getObj("answerDiv").style.display = "none";
        getObj("page_2").style.display = "none";
        getObj("page_2_2").style.display = "none";
        getObj("timeDiv").style.display = "none";


        getObj("page_1").style.display = "flex";
    }

    function playClose1_3() {

        var x = getObj("be");
        x.autoplay = true;
        x.load();

        getObj("p").value = 0;

        if (getObj(("s_") + answerIndx)) getObj(("s_") + answerIndx).src = "assets/star.png";

        getObj("play1_3").style.display = "flex";
        clockFlag = 0;
        mountFlag = 1;
        getObj("answerDiv").style.display = "none";
        getObj("page_2").style.display = "none";
        getObj("page_2_3").style.display = "none";
        getObj("timeDiv").style.display = "none";


        getObj("page_1").style.display = "flex";
    }

    function playClose1_5() {
        getObj("timeDiv").style.display = "none";
        getObj("p").style.display = "";
        getObj("ptitle").style.display = "";

        clockFlag = 0;
        beforPage = "";
        getObj("page_1").style.display = "none";

        var x = getObj("be");
        x.autoplay = true;
        x.load();
        getObj("play1_5").style.display = "flex";
        clockFlag = 0;
        mountFlag = 1;
        getObj("answerDiv").style.display = "none";
        getObj("page_2").style.display = "none";
        getObj("page_2_5").style.display = "none";
        getObj("timeDiv").style.display = "none";

        for (var i = 1; i < locationAry.length; i++) {
            getObj("map_" + locationAry[i][0]).src = "assets/map_w/" + locationAry[i][0] + ".png";
        }

    }


    function playClose1_4() {

        if (answerIndx > 1) {
            getObj(("f_") + answerIndx).src = "assets/fort.png";
        } else if (answerIndx > 0) {
            getObj(("f_") + answerIndx).src = "assets/fortress.png";
        }

        getObj("p").value = "";

        var x = getObj("be");
        x.autoplay = true;
        x.load();

        getObj("play1_4").style.display = "flex";
        clockFlag = 0;
        mountFlag = 1;
        getObj("answerDiv").style.display = "none";
        getObj("page_2").style.display = "none";
        getObj("page_2_4").style.display = "none";
        getObj("timeDiv").style.display = "none";


        getObj("page_1").style.display = "flex";
    }

    function clock() {
        if (clockFlag == 1 && getObj("t").value > 0) {
            getObj("t").value = getObj("t").value - 1;

            var x = getObj("beep");
            x.autoplay = true;
            x.load();

            setTimeout(clock, 1500);
        }
    }

    function play1_2() {

        for (var i = 1; i < mountAry.length; i++) {
            getObj("m_" + mountAry[i][0]).src = "assets/mount/m" + mountAry[i][0] + "_11.png";
        }

        var x = getObj("be");
        x.autoplay = true;
        x.load();

        mountFlag = 0;

        getObj("play1_2").style.display = "none";
        getObj("t").value = 16;

        getObj("timeDiv").style.display = "";
        getObj("answerDiv").style.display = "";

        answerIndx = Math.round(Math.random() * 100) % (mountAry.length - 1);
        if (answerIndx == 0) answerIndx = 1;

        getObj("q").innerHTML = mountAry[answerIndx][1];


        clockFlag = 1;
        clock();
    }

    function citysel(sel) {
        if (mountFlag == 0) {



            if (sel == cityAry[answerIndx][0] && cityAry[answerIndx][0] > 0) {

                var x = getObj("bien");
                x.autoplay = true;
                x.load();
                riverselcnt = 0;
                mountFlag = 1;
                getObj("play1_3").style.display = "flex";
                clockFlag = 0;
                getObj("p").value = getObj("p").value * 1 + 5;
                getObj(("s_") + answerIndx).src = "assets/starsel.png";
                riverselok = sel;

            } else {

                if (riverselcnt > 1) {
                    var x = getObj("boing");
                    x.autoplay = true;
                    x.load();

                    mountFlag = 1;
                    getObj("play1_3").style.display = "flex";
                    clockFlag = 0;
                    riverselcnt = 0;
                    getObj("p").value = getObj("p").value * 1 - 5;

                    getObj(("s_") + answerIndx).src = "assets/starsel.png";

                    riverselok = sel;

                } else {
                    var x = getObj("mal");
                    x.autoplay = true;
                    x.load();
                    riverselcnt++;
                }
            }
        }
    }

    function play1_5_close() {
        getObj("regresar").style.display = "none";

        getObj("p").style.display = "";
        getObj("ptitle").style.display = "";
        getObj("play1_5").style.display = "";
        getObj("timeDiv").style.display = "none";
        mountFlag = 1;
        clockFlag = 0;
    }

    function play1_5() {
        getObj("regresar").style.display = "";

        getObj("p").style.display = "none";
        getObj("ptitle").style.display = "none";

        var x = getObj("be");
        x.autoplay = true;
        x.load();

        mountFlag = 0;

        getObj("play1_5").style.display = "none";

        for (i = 1; i < locationAry.length; i++) {
            getObj("map_" + locationAry[i][0]).src = "assets/map_w/" + locationAry[i][0] + ".png";
            colorAry[locationAry[i][0]] = 0;
        }
        getObj("timeDiv").style.display = "";
        getObj("t").value = 64;
        clockFlag = 1;
        clock();

    }

    function play1_3() {
        mountFlag = 0;

        var x = getObj("be");
        x.autoplay = true;
        x.load();

        getObj("play1_3").style.display = "none";
        getObj("t").value = 16;

        getObj("timeDiv").style.display = "";
        getObj("answerDiv").style.display = "";

        if (getObj(("s_") + answerIndx)) getObj(("s_") + answerIndx).src = "assets/star.png";

        answerIndx = Math.round(Math.random() * 100) % (cityAry.length - 1);

        if (answerIndx == 0) answerIndx = 1;

        getObj("q").innerHTML = cityAry[answerIndx][1];


        clockFlag = 1;
        clock();
    }

    function fortsel(kind, sel) {


        if (mountFlag == 0) {

            if (sel == songAry[answerIndx][0] && songAry[answerIndx][0] > 0) {

                var x = getObj("bien");
                x.autoplay = true;
                x.load();

                mountFlag = 1;
                getObj("play1_4").style.display = "flex";
                clockFlag = 0;
                getObj("p").value = getObj("p").value * 1 + 5;

                riverselok = sel;
                riverselcnt = 0;
                if (answerIndx > 0) {
                    getObj(("f_") + answerIndx).src = "assets/fortsel.png";
                } else {
                    getObj(("f_") + answerIndx).src = "assets/fortresssel.png";
                }

            } else {

                if (riverselcnt > 1) {


                    var x = getObj("boing");
                    x.autoplay = true;
                    x.load();

                    mountFlag = 1;
                    getObj("play1_4").style.display = "flex";
                    clockFlag = 0;
                    riverselcnt = 0;
                    getObj("p").value = getObj("p").value * 1 - 5;

                    if (answerIndx > 0) {
                        getObj(("f_") + answerIndx).src = "assets/fortsel.png";
                    } else {
                        getObj(("f_") + answerIndx).src = "assets/fortresssel.png";
                    }


                    riverselok = sel;

                } else {

                    var x = getObj("mal");
                    x.autoplay = true;
                    x.load();
                    riverselcnt++;
                }
            }
        }

    }


    function play1_4() {

        var x = getObj("be");
        x.autoplay = true;
        x.load();

        mountFlag = 0;

        getObj("play1_4").style.display = "none";
        getObj("t").value = 16;

        getObj("timeDiv").style.display = "";
        getObj("answerDiv").style.display = "";

        if (answerIndx > 1) {
            getObj(("f_") + answerIndx).src = "assets/fort.png";
        } else if (answerIndx > 0) {
            getObj(("f_") + answerIndx).src = "assets/fortress.png";
        }

        answerIndx = Math.round(Math.random() * 100) % (songAry.length - 1);

        if (answerIndx == 0) answerIndx = 1;

        getObj("q").innerHTML = songAry[answerIndx][1];


        clockFlag = 1;
        clock();
    }

    function selmapClose() {
        //alert("Sdfsf");
        var x = getObj("be");
        x.autoplay = true;
        x.load();
        getObj("minmap").style.display = "none";
        getObj("selmapview").style.display = "";
        getObj("selmapback").style.display = "none";
        getObj("selmapDiv").style.display = "none";
        getObj("piezas").style.display = "none";
        getObj("tiempo").style.display = "none";
    }

    function selmap(sel) {
        //tiempopiezas

        var x = getObj("be");
        x.autoplay = true;
        x.load();

        for (i = 1; i < locationAry.length; i++) {
            getObj("selmap_" + locationAry[i][0]).style.left = "0px";
            getObj("selmap_" + locationAry[i][0]).style.top = "0px";
            getObj("selmap_" + locationAry[i][0]).setAttribute("rol", 0);
        }

        getObj("selmapview").style.display = "none";
        getObj("selmapback").style.display = "";
        getObj("selmapDiv").style.display = "";
        getObj("pp").value = locationAry.length - 1;

        if (sel == 1) {
            getObj("minmap").style.display = "none";
            getObj("piezas").style.display = "";            
            getObj("minmap").src = "";

        } else if (sel == 2) {

            getObj("piezas").style.display = "";
            getObj("tiempo").style.display = "";           
            getObj("tt").value = 73;
            getObj("minmap").style.display = "none";
            getObj("minmap").src = "";
            clockFlag = 1;
            clock1();

        } else if (sel == 3) {

            getObj("piezas").style.display = "";    
            getObj("minmap").style.display = "";        
            getObj("minmap").src = "assets/minmap.png";

        } else if (sel == 4) {

            getObj("piezas").style.display = "";
            getObj("tiempo").style.display = "";            
            getObj("tt").value = 73;
            getObj("minmap").style.display = "";
            getObj("minmap").src = "assets/minmap.png";
            clockFlag = 1;
            clock1();

        }

    }

    function clock1() {
        if (clockFlag == 1 && getObj("tt").value > 0 && getObj("pp").value > 0) {
            getObj("tt").value = getObj("tt").value - 1;
            setTimeout(clock1, 1500);
        }
    }
    beforeX = 0;
    beforeY = 0;
    selMoveMap = 0;
    selMoveIconIndex = 0;

    // start the function for auto code 
    function handleIconMoveUp(sel) {}

    function handleIconMoveDown(e, sel) {

    }

    function handleIconItemMove(e) {}
    // end the function for auto code 


    

    function selUpMap(sel) {
        //alert("asdf");
        window.removeEventListener('mousemove', divMove, true);

        if (selMoveMap == 0) return false;
        console.log('selmovemap------------>', selMoveMap)

        var div = getObj("selmap_" + selMoveMap);

        getObj("x1").value = mapPositionArry[selMoveMap][0];

        leftAmount = div.style.left;
        leftAmount = leftAmount.replace("px", "") * 1;

        topAmount = div.style.top;
        topAmount = topAmount.replace("px", "") * 1;

        getObj("x").value = leftAmount;
        getObj("y").value = topAmount;

        if (selMoveMap > 0 && getObj("selmap_" + selMoveMap).getAttribute("rol") == 0) {
            if (mapPositionArry[selMoveMap][0] - 3 < leftAmount && leftAmount < mapPositionArry[selMoveMap][0] + 3) {

                console.log('selmovemap------------>', mapPositionArry[selMoveMap][1]);

                if (mapPositionArry[selMoveMap][1] - 3 < topAmount && topAmount < mapPositionArry[selMoveMap][1] + 3) {

                    var x = getObj("bien");
                    x.autoplay = true;
                    x.load();

                    getObj("selmap_" + selMoveMap).setAttribute("rol", 1);
                    getObj("pp").value = getObj("pp").value * 1 - 1;

                    getObj("selmap_" + selMoveMap).style.left = mapPositionArry[selMoveMap][0] + "px";
                    getObj("selmap_" + selMoveMap).style.top = mapPositionArry[selMoveMap][1] + "px";
                }
            }
        }

    }
    window.addEventListener('mouseup', selUpMap, false);

    function selDownMap(e, sel) {
        selMoveMap = sel;
        gMouseDownX = e.clientX;
        gMouseDownY = e.clientY;

        if (selMoveMap > 0 && getObj("selmap_" + selMoveMap).getAttribute("rol") == 0) {
            var div = getObj("selmap_" + selMoveMap);

            //The following block gets the X offset (the difference between where it starts and where it was clicked)
            let leftPart = "";

            if (!getObj("selmap_" + selMoveMap).style.left)
                leftPart += "0px"; //In case this was not defined as 0px explicitly.
            else
                leftPart = div.style.left;

            let leftPos = leftPart.indexOf("px");
            let leftNumString = leftPart.slice(0, leftPos); // Get the X value of the object.
            gMouseDownOffsetX = gMouseDownX - parseInt(leftNumString, 10);

            //The following block gets the Y offset (the difference between where it starts and where it was clicked)
            let topPart = "";
            if (!div.style.top)
                topPart += "0px"; //In case this was not defined as 0px explicitly.
            else
                topPart = div.style.top;
            let topPos = topPart.indexOf("px");
            let topNumString = topPart.slice(0, topPos); // Get the Y value of the object.
            gMouseDownOffsetY = gMouseDownY - parseInt(topNumString, 10);

            window.addEventListener('mousemove', divMove, true);
        }
    }

    function divMove(e) {
        var div = getObj("selmap_" + selMoveMap);
        div.style.position = 'absolute';
        let topAmount = e.clientY - gMouseDownOffsetY;
        div.style.top = topAmount + 'px';
        let leftAmount = e.clientX - gMouseDownOffsetX;
        div.style.left = leftAmount + 'px';

    }

    function selmapInfoHide() {
        getObj("cityDiv").style.display = "none";
    }

    function selmapinfo(sel) {
        //getObj("infomap_"+sel) = ;
        getObj("cityDiv").style.display = "flex";
        getObj("cityTxt").innerHTML = locationAry[sel][5];
        getObj("cityImg_1").src = locationAry[sel][6];
        getObj("cityImg_2").src = locationAry[sel][7];
        getObj("cityImg_3").src = locationAry[sel][8];
        getObj("cityImg_4").src = locationAry[sel][9];

    }

    function selmapover(sel) {
        getObj("infomap_" + sel).src = "assets/map_4/" + sel + ".png"
    }

    function selmapout(sel) {
        getObj("infomap_" + sel).src = "assets/map_w/" + sel + ".png"
    }
    //onclick="selstarinfo(1)" onmouseover="selstarover(1)" onmouseout="selstarout(1)"

    function selstarinfo(sel) {
        //getObj("infomap_"+sel) = ;
    }

    function selstarover(sel) {
        // getObj("infomap_"+sel).src = "assets/map_4/"+sel+".png"
        getObj("infstar_" + sel).src = "assets/starsel.png"
    }

    function selstarout(sel) {
        getObj("infstar_" + sel).src = "assets/star.png"
    }

    function inforiverover(id, sel) {
        getObj(("rr_") + id).src = "assets/river_min/" + sel + ".png";
    }

    function inforiverout(id, sel) {
        getObj(("rr_") + id).src = "assets/river_min/" + sel + ".png";
    }

    function inforiversel(sel) {


    }

    function infomountover(sel) {

        getObj(("mm_") + sel).src = "assets/mount/m" + sel + "_12.png";
    }

    function infomountout(sel) {

        getObj(("mm_") + sel).src = "assets/mount/m" + sel + "_11.png";
    }

    function infomountsel(sel) {



    }
    

    function infofortsel(k, sel) {

        getObj("fortAlam").style.display = "";  
        getObj("fortAlamImg").src = songAry[sel][6];
    }

    function infoiover(k, sel) {
        getObj("i_" + sel).src = "assets/itemSel" + k + ".png";
    }

    function infoitout(k, sel) {
        getObj("i_" + sel).src = "assets/item" + k + ".png";
    }

    function infofortover(k, sel) {

        if (k > 1) {
            getObj(("ff_") + sel).src = "assets/fortsel.png";
        } else {
            getObj(("ff_") + sel).src = "assets/fortresssel.png";
        }
    }

    function infofortout(k, sel) {
        getObj("fortAlam").style.display = "none";
        if (k > 1) {
            getObj(("ff_") + sel).src = "assets/fort.png";
        } else {
            getObj(("ff_") + sel).src = "assets/fortress.png";
        }
    }

    function menuOver1(sel, page) {
        var x = getObj("be");
        x.autoplay = true;
        x.load();

        if (getObj("submenu" + sel).getAttribute("rol") == 0) {

            if (sel == "2_1" || sel == "2_2") {

                getObj('submenu' + sel).src = "assets/subselmenu" + sel + ".gif";
            } else {
                getObj('submenu' + sel).src = "assets/subselmenu" + sel + ".png";
            }

            getObj("submenu" + sel).setAttribute("rol", 1);
            getObj("page_3_" + page).style.display = "";

        } else {
            getObj("submenu" + sel).setAttribute("rol", 0);
            getObj('submenu' + sel).src = "assets/submenu" + sel + ".png";
            getObj("page_3_" + page).style.display = "none";
        }
    }

    function icoClose() {
        if (getObj("icoDiv").getAttribute("rol") == 0) {
            getObj("icoDiv").setAttribute("rol", 1);

            getObj("icoDiv").style.backgroundImage = "url('assets/ico_.png')";
        } else {
            getObj("icoDiv").setAttribute("rol", 0);
            getObj("icoDiv").style.backgroundImage = "url('assets/ico.png')";
        }
    }
    var speaktime = 0;

    function icoSpeak() {
        var x = getObj("explain");
        x.autoplay = true;
        x.load();
        speaktime = 0;
        setTimeout(icoSpeaker, 100);
        getObj("icoDiv").style.backgroundImage = "url('assets/ico.png')";
    }

    function icoSpeaker() {
        speaktime++;
        if (speaktime % 2 == 1) {
            getObj("icoDiv").style.backgroundImage = "url('assets/ico1.png')";
        } else {
            getObj("icoDiv").style.backgroundImage = "url('assets/ico.png')";
        }

        if (speaktime > 60) return false;
        setTimeout(icoSpeaker, 100);
    }

    function ayudeShow() {
        getObj("ayude").style.display = "";
    }

    function ayudeClose() {
        getObj('ayude').style.display = "none";
    }
    </script>

</head>
<audio src="assets/sounds/1_mal.mp3" id="mal"></audio>

<audio src="assets/sounds/2_be.mp3" id="be"></audio>
<audio src="assets/sounds/3_da_clic_y revisaes.mp3" id="explain"></audio>
<audio src="assets/sounds/4_boing.mp3" id="boing"></audio>
<audio src="assets/sounds/5_bien.wav" id="bien"></audio>
<audio src="assets/sounds/6_beep.mp3" id="beep"></audio>
<audio src="assets/sounds/456.mp3"></audio>

<div style="position: absolute; display:none"> <input type="text" id="x"><input type="text" id="y"><input type="text"
        id="x1">
</div>

<body leftmargin="0px" topmargin="opx" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">

    <div style="position:absolute; left:250px; top:200px; z-index:500; display:none" id="selmapDiv">

        <?php
        for($i = 1; $i < count($locationAry); $i++){
        ?>
            <img rol="0" src="assets/selmap/<?=$locationAry[$i][0]?>.png" 
            style="position: absolute; left: <?=$locationAry[$i][2]?>px; top: <?=$locationAry[$i][3]?>px; width: <?=$locationAry[$i][4]?>px" 
            onmouseup="selUpMap(<?=$locationAry[$i][0]?>)" onmousedown="selDownMap(event, <?=$locationAry[$i][0]?>)" id="selmap_<?=$locationAry[$i][0]?>"
            ondragstart="return false;">
        <?php }?>

    </div>

    <div id="subMenu_1" class="subMenu_1" rol=1 style="display: flex;z-index: 100;">
        <div><img src="assets/submenu1_1.png"></div>
        <div style="margin-left:5px; display:flex; align-items:center; justify-content:center">
            <img src="assets/submenu1_2.png" width="35px" id="submenu1_2" onmouseover="menuOver('1_2')"
                onmouseout="menuOut('1_2')" onclick="openPage(2)" title="LOCALIZA EN EL MAPA">
        </div>
        <div style="margin-left:5px; display:flex; align-items:center; justify-content:center">
            <img src="assets/submenu1_3.png" height="35px" id="submenu1_3" onmouseover="menuOver('1_3')"
                onmouseout="menuOut('1_3')" onclick="openPage(3)" title="COLOREA EL MAPA">
        </div>
        <div style="margin-left:5px; display:flex; align-items:center; justify-content:center">
            <img src="assets/submenu1_4.png" width="35px" id="submenu1_4" onmouseover="menuOver('1_4')"
                onmouseout="menuOut('1_4')" onclick="openPage(4)" title="ARMA EL MAPA">
        </div>
        <div style="margin-left:5px; display:flex; align-items:center; justify-content:center">
            <img src="assets/submenu1_5.png" width="35px" id="submenu1_5" onmouseover="menuOver('1_5')"
                onmouseout="menuOut('1_5')">
        </div>
    </div>

    <div id="subMenu_2" style="width: 331px; height:53px; background-image:url('assets/submenu2.png'); z-index:100; display:flex; 
    align-items:center; justify-content:center;  position:absolute; left:900px; top:487px" rol=2>

        <div style="display:flex; align-items:center; justify-content:center">
            <img src="assets/submenu2_1.png" width="46px" id="submenu2_1" onclick="menuOver1('2_1', 1)" rol=0
                title="REGIONES">
        </div>
        <div style="margin-left:5px; display:flex; align-items:center; justify-content:center">
            <img src="assets/submenu2_2.png" width="46px" id="submenu2_2" onclick="menuOver1('2_2', 2)" rol=0
                title="PRRINCIPALES MUNICIPIOS">
        </div>
        <div style="margin-left:5px; display:flex; align-items:center; justify-content:center">
            <img src="assets/submenu2_3.png" height="46px" id="submenu2_3" onclick="menuOver1('2_3', 4)" rol=0
                title="HIDROGRAFíA">
        </div>
        <div style="margin-left:5px; display:flex; align-items:center; justify-content:center">
            <img src="assets/submenu2_4.png" width="46px" id="submenu2_4" onclick="menuOver1('2_4', 3)" rol=0
                title="QROGRAFíA">
        </div>
        <div style="margin-left:5px; display:flex; align-items:center; justify-content:center">
            <img src="assets/submenu2_5.png" width="46px" id="submenu2_5" onclick="menuOver1('2_5', 5)" rol=0
                title="LUGARES FAMOSOS">
        </div>
        <div style="margin-left:5px; display:flex; align-items:center; justify-content:center">
            <img src="assets/submenu2_6.png" width="46px" id="submenu2_6" onclick="menuOver1('2_6', 6)" rol=0
                title="RECURSOS NATURALES Y ACTIVIDADES ECONOMICAS">
        </div>
    </div>

    <div id="timeDiv" style="position: absolute; left:664px; top:70px; z-index:400; display:none">
        <input type="text" value="0" style="width: 50px; height:50px; font-size:32px" id="t">
        <input type="text" value="0" style="width: 60px; height:50px; font-size:32px" id="p"><br>
        <a style="color: #8b162a;">Tiempo</a><a style="color: #1c9409;" id="ptitle"> Puntos</a>
    </div>

    <div id="tiempo" style="position: absolute; left:600px; top:70px; z-index:400; display:none">
        <input type="text" value="0" style="width: 50px; height:50px; font-size:32px" id="tt"><br>
        <a style="color: #8b162a;">Tiempo</a>
    </div>
    <div id="piezas" style="position: absolute; left:660px; top:70px; z-index:400; display:none">
        <input type="text" value="0" style="width: 60px; height:50px; font-size:32px" id="pp"><br>
        <a style="color: #1c9409;"> Piezas</a>
    </div>

    <div id="answerDiv" style="position: absolute; left:640px; top:303px; z-index:400; display:none">

        <a style="color: #fc052e;">Localiza en el <br> mapa</a><br>
        <a id="q"> </a>
    </div>

    <div style="display: flex;">

        <div id="left_bar" style="width: 50px; z-index:100; background-color:#FFF">

        </div>

        <div id="content_bar" style="background-image: url('assets/bg.png'); width:800px; height: 600px; background-repeat: no-repeat;">

            <div id="login"
                style="background-image: url('assets/login.png'); width:800px; height: 250px; cursor:pointer; color:#FFF; font-size:32px; 
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; text-align:center; padding-top:350px; display:;"
                onmouseover="loginOver()" onmouseout="logOut()" onclick="openProgressPage()">Click para iniciar</div>

            <div id="progress" style="background-image: url('assets/progress.png'); width:800px; height: 600px; cursor:pointer; color:#FFF; font-size:32px; 
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; display:none">
                <div style="padding-top: 200px; padding-left:400px; display:flex">
                    <div style="padding-top: 5px;">cargando</div>
                    <div style="margin-left: 15px;"><img src="assets/pg_1.png" id="pg"></div>
                    <div style="font-size: 24px; padding-top:10px; margin-left:10px" id="pros">1%</div>
                </div>

            </div>

            <div id="main" style="z-index: 50; display: none;">

                <div id="símbolo" class="símbolo_class" style="z-index: 99999999999999999">
                    <img src="assets/Símbolo.png" width="200px">
                </div>

                <div id="page_1"
                    style="margin-left:70px; width:695px; height:441px; background-image:url('assets/submain_.png'); display:none;">
                    <div style=" writing-mode: vertical-rl; text-orientation: downright; transform: rotate(180deg); font-size:72px; color:#FFF; 
                     border-radius: 10px;  height:380px">

                    </div>
                    <div style="padding-top:20px; margin-left:120px; height:400px; width:550px; " id="page_1_1">

                        <div style="height: 30px; margin-top:210px; padding-left:10px; color:#00caff"><img
                                src="assets/find_4.png" style="vertical-align:middle" onclick="page2open('2_1')">
                            Hidrogrfia</div>
                        <div style="height: 30px; margin-top:5px; padding-left:10px; color:#1ccc00"><img
                                src="assets/find_3.png" style="vertical-align:middle" onclick="page2open('2_2')">
                            Orografia</div>
                        <div style="height: 30px; margin-top:5px; padding-left:10px; color:#ff6755"><img
                                src="assets/find_2.png" style="vertical-align:middle" onclick="page2open('2_3')">
                            Principales municipios</div>
                        <div style="height: 30px; margin-top:5px; padding-left:10px; color:#e1c400"><img
                                src="assets/find_1.png" style="vertical-align:middle" onclick="page2open('2_4')">
                            Lugares famosos</div>
                        <div style="height: 30px; margin-top:15px; padding-left:520px; color:#e1c400"><img
                                src="assets/close.png" style="vertical-align:middle" onclick="page1close()"> </div>

                    </div>
                </div>
                <div id="page_2"
                    style="margin-left:70px; width:695px; height:441px; background-image:url('assets/submain_.png'); display:none; z-index:200">
                    <div style=" writing-mode: vertical-rl; text-orientation: downright; transform: rotate(180deg); font-size:72px; color:#FFF; 
                     border-radius: 10px;  height:380px">

                    </div>

                    <div style="padding-top:20px; margin-top:20px; margin-left:120px; height:400px; width:550px; 
                        background-repeat: no-repeat; background-attachment: fixed;  background-position: center; display: none; "
                        id="page_2_1">

                        <div style="height: 30px; margin-top:0px; padding-left:12px; color:#8b162a; display:flex">
                            <div id="play1_1" style="display: flex;">
                                <div><img src="assets/q.png" style="vertical-align:middle" onclick="play1_1()"></div>
                                <div style="margin-left: 5px;">Siguiente<br>pregunts </div>
                            </div>
                        </div>
                        <div style="height: 30px; margin-top:15px; padding-left:10px; color:#666"><img
                                src="assets/back.png" style="vertical-align:middle" onclick="playClose1_1()"> Regresar
                        </div>

                        <div style="width:500px; height:500px; position:relative; left:150px; top:-90px;
                        background-repeat: no-repeat; " id="rever_min_container">
                            <?php 
                        
                            for($i = 1; $i < count($riverAry); $i++){                             
                                    
                            ?>
                            <img title="Río Colorado" id="r_<?=$riverAry[$i][0]?>" src="assets/river_min/<?=$riverAry[$i][0]?>.png" style="position:absolute;left: <?=$riverAry[$i][2]?>px;top: <?=$riverAry[$i][3]?>px; width: <?=$riverAry[$i][4]?>px;" onmouseover="riverover(<?=$riverAry[$i][0]?>, <?php echo $riverAry[$i][0]+1;?>)" x="<?php echo $riverAry[$i][0]+1;?>" y="<?=$riverAry[$i][0]?>" onmouseout="riverout(<?=$riverAry[$i][0]?>, <?=$riverAry[$i][0]?>)"  onclick="riversel(<?=$riverAry[$i][0]?>)">
                            
                            <?php }?>
                            <img src="assets/close.png" style="position:absolute; left:370px; top:355px"
                                onclick="playClose1_1()">
                        </div>


                    </div>



                    <div style="padding-top:20px; margin-top:20px; margin-left:120px; height:400px; width:550px; 
                        background-repeat: no-repeat; background-attachment: fixed;  background-position: center; display: none"
                        id="page_2_2">

                        <div style="height: 30px; margin-top:0px; padding-left:12px; color:#8b162a; display:flex">
                            <div style="display: flex;" onclick="play1_2()" id="play1_2">
                                <div><img src="assets/q.png" style="vertical-align:middle"></div>
                                <div style="margin-left: 5px;">Siguiente<br>pregunts </div>
                            </div>
                        </div>
                        <div style="height: 30px; margin-top:15px; padding-left:10px; color:#666"><img
                                src="assets/back.png" style="vertical-align:middle" onclick="playClose1_2()"> Regresar
                        </div>

                        <div style="width:500px; height:500px; position:relative; left:150px; top:-90px;
                        background-repeat: no-repeat; " id="mount_min_container">

                            <?php 
                        
                            for($i = 1; $i < count($mountAry); $i++){                             
                                    
                            ?>
                            <img id="m_<?=$mountAry[$i][0]?>" src="assets/mount/m<?=$mountAry[$i][0]?>_11.png"
                                style="position:absolute;left: <?=$mountAry[$i][2]?>px;top: <?=$mountAry[$i][3]?>px;width: <?=$mountAry[$i][4]?>px;" onmouseover="mountover(<?=$mountAry[$i][0]?>)"
                                onmouseout="mountout(<?=$mountAry[$i][0]?>)" onclick="mountsel(<?=$mountAry[$i][0]?>)" title="">
                            
                            <?php }?>
                            <img src="assets/close.png" style="position:absolute; left:370px; top:355px"
                                onclick="playClose1_2()">
                        </div>

                    </div>

                    <div style="padding-top:20px; margin-top:20px; margin-left:120px; height:400px; width:550px; 
                        background-repeat: no-repeat; background-attachment: fixed;  background-position: center; display: none"
                        id="page_2_3">

                        <div style="height: 30px; margin-top:0px; padding-left:12px; color:#8b162a; display:flex">
                            <div style="display: flex;" onclick="play1_3()" id="play1_3">
                                <div><img src="assets/q.png" style="vertical-align:middle"></div>
                                <div style="margin-left: 5px;">Siguiente<br>pregunts </div>
                            </div>
                        </div>

                        <div style="height: 30px; margin-top:15px; padding-left:10px; color:#666"><img
                                src="assets/back.png" style="vertical-align:middle" onclick="playClose1_3()"> Regresar
                        </div>

                        <div style="width:500px; height:500px; position:relative; left:150px; top:-90px;
                        background-repeat: no-repeat; " id="star_min_container">
                            <?php 
                        
                            for($i = 1; $i < count($cityAry); $i++){                             
                                    
                            ?>
                            <img title="" id="s_<?=$cityAry[$i][0]?>" src="assets/star.png"
                                style="position: absolute;left: <?=$cityAry[$i][2]?>px;top: <?=$cityAry[$i][3]?>px; width:<?=$cityAry[$i][4]?>px" onclick="citysel(<?=$cityAry[$i][0]?>)"
                                onmouseover="cityover(<?=$cityAry[$i][0]?>)" onmouseout="cityout(<?=$cityAry[$i][0]?>)">
                            <?php }?>


                            <img src="assets/close.png" style="position:absolute; left:370px; top:355px"
                                onclick="playClose1_3()">
                        </div>

                    </div>

                    <div style="padding-top:20px; margin-top:20px; margin-left:120px; height:400px; width:550px; 
                        background-repeat: no-repeat; background-attachment: fixed;  background-position: center; display: none"
                        id="page_2_4">

                        <div style="height: 30px; margin-top:0px; padding-left:12px; color:#8b162a; display:flex">

                            <div style="display: flex;" onclick="play1_4()" id="play1_4">
                                <div><img src="assets/enter.png" style="vertical-align:middle"></div>
                                <div style="margin-left: 5px;">Siguiente<br>pregunts </div>
                            </div>

                        </div>
                        <div style="height: 30px; margin-top:15px; padding-left:10px; color:#666"><img
                                src="assets/back.png" style="vertical-align:middle" onclick="playClose1_4()"> Regresar
                        </div>

                        <div style="width:500px; height:500px; position:relative; left:150px; top:-90px;
                        background-repeat: no-repeat; " id="fort_min_container">

                        <?php 
                        
                        for($i = 1; $i < count($songAry); $i++){                             
                                
                        ?>
                            <img title="" id="f_<?=$songAry[$i][0]?>" src="assets/<?=$songImgAry[$songAry[$i][5]]?>.png" width="10px"
                                style="position:absolute;left: <?=$songAry[$i][2]?>px;top: <?=$songAry[$i][3]?>px;" onclick="fortsel(<?=$songAry[$i][5]?>, <?=$songAry[$i][0]?>)"
                                onmouseover="fortover(<?=$songAry[$i][5]?>, <?=$songAry[$i][0]?>)" onmouseout="fortover(<?=$songAry[$i][5]?>, <?=$songAry[$i][0]?>)">

                        <?php }?>    

                            <img src="assets/close.png" style="position:absolute; left:370px; top:355px"
                                onclick="playClose1_4()">
                        </div>

                    </div>

                    <div style="padding-top:20px; margin-top:20px; margin-left:120px; height:400px; width:550px; 
                        background-repeat: no-repeat; background-attachment: fixed;  background-position: center; display: none"
                        id="page_2_5">
                        <div>
                            <div style="height: 30px; margin-top:0px; padding-left:12px; color:#8b162a; display:flex">
                                <div style="display: flex;" onclick="play1_5()" id="play1_5">
                                    <div><img src="assets/enter.png" style="vertical-align:middle"></div>
                                    <div style="margin-left: 5px;">Inicio </div>
                                </div>
                            </div>
                            <div style="height: 30px; margin-top:15px; padding-left:10px; color:#666; "
                                onclick="play1_5_close()" id="">
                                <div id="regresar" style="display: none;">
                                    <img src="assets/back.png" style="vertical-align:middle;"> Regresar
                                </div>
                            </div>

                        </div>
                        <div style="width:500px; height:500px; position:relative; left:150px; top:-90px; 
                        background-repeat: no-repeat; " id="map_min_container">

                            <?php
                            for($i = 1; $i < count($locationAry); $i++){
                            ?>
                            <img title="" id="map_<?=$locationAry[$i][0]?>" src="assets/map_w/<?=$locationAry[$i][0]?>.png"
                                style="position: absolute;left: <?=$locationAry[$i][2]?>px;top: <?=$locationAry[$i][3]?>px; width: <?=$locationAry[$i][4]?>px" onclick="colormap(<?=$locationAry[$i][0]?>)">

                            <?php }?>

                            <img src="assets/close.png" style="position:absolute; left:370px; top:355px"
                                onclick="playClose1_5()">
                        </div>
                        <div>
                            <div style="position: absolute; left: 285px; top: 423px; font-family: 'Arial'; color: #666666; display: none;"
                                id="color_erro">
                                Selecciona otro<br> color
                            </div>
                            <img id="color_1" src="assets/color1.png" style="position: absolute; left:243px; top:489px"
                                onclick="selColor(1)">

                            <img id="color_2" src="assets/color2.png" style="position: absolute; left:277px; top:489px"
                                onclick="selColor(2)">
                            <img id="color_3" src="assets/color3.png" style="position: absolute; left:313px; top:489px"
                                onclick="selColor(3)">
                            <img id="color_4" src="assets/color4.png" style="position: absolute; left:349px; top:489px"
                                onclick="selColor(4)">


                        </div>
                    </div>

                    <div style="padding-top:20px; margin-top:20px; margin-left:120px; height:400px; width:550px; 
                        background-repeat: no-repeat; background-attachment: fixed;  background-position: center; display: none "
                        id="page_2_6">
                        <div>
                            <div style="height: 30px; margin-top:0px; padding-left:12px; color:#8b162a; display:flex">

                            </div>
                            <div style="height: 30px; margin-top:15px; padding-left:10px; color:#666"
                                onclick="playClose1_6()"></div>

                        </div>
                        <div style="width:500px; height:500px; position:relative; left:150px; top:-90px;
                        background-repeat: no-repeat; ">
                            <img src="assets/minmap.png" style="position: absolute;left: -136px;top: 69px;width: 544px; display: none;" id="minmap">
                            <img src="assets/close.png" style="position:absolute; left:370px; top:355px"
                                onclick="page3close()">
                        </div>
                        <div>
                            <div style="display: none;" id="selmapback">
                                <img id="color_1" src="assets/back.png"
                                    style="position: absolute; left:242px; top:489px" onclick="selmapClose()">
                            </div>
                            <div style="display: none;" id="selmapview">

                                <img id="color_1" src="assets/selmap1.png"
                                    style="position: absolute; left:242px; top:489px" onclick="selmap(1)">
                                <img id="color_2" src="assets/selmap2.png"
                                    style="position: absolute; left:281px; top:489px" onclick="selmap(2)">
                                <img id="color_3" src="assets/selmap3.png"
                                    style="position: absolute; left:321px; top:490px" onclick="selmap(3)">
                                <img id="color_4" src="assets/selmap4.png"
                                    style="position: absolute; left:359px; top:490px" onclick="selmap(4)">
                            </div>
                        </div>
                    </div>

                </div>
                <div id="page_3">

                    <div id="page_3_1" style="display:none">
                        <?php 
                        
                        for($i = 1; $i < count($locationAry); $i++){                             
                                
                        ?>
                        <img title="<?=$locationAry[$i][1]?>" id="infomap_<?=$locationAry[$i][0]?>"
                            src="assets/map_w/<?=$locationAry[$i][0]?>.png"
                            style="position: absolute;left: <?=$locationAry[$i][2]?>px; top: <?=$locationAry[$i][3]?>px; width: <?=$locationAry[$i][4]?>px"
                            onclick="selmapinfo(<?=$i?>)"
                            onmouseover="selmapover(<?=$locationAry[$i][0]?>)"
                            onmouseout="selmapout(<?=$locationAry[$i][0]?>)">
                        <?php }?>
                    </div>

                    <div id="page_3_3" style="display: none;">
                        <?php                        
                        for($i = 1; $i < count($mountAry); $i++){ 
                        ?>

                        <img title="<?=$mountAry[$i][1]?>" id="mm_<?=$mountAry[$i][0]?>"
                            src="assets/mount/m<?=$mountAry[$i][0]?>_11.png"
                            style="position:absolute;left: <?=$mountAry[$i][2]?>px;top: <?=$mountAry[$i][3]?>px;width:<?=$mountAry[$i][4]?>px;"
                            onmouseover="infomountover(<?=$mountAry[$i][0]?>)"
                            onmouseout="infomountout(<?=$mountAry[$i][0]?>)"
                            onclick="infomountsel(<?=$mountAry[$i][0]?>)">

                        <?php }?>
                    </div>

                    <div id="page_3_2" style="display:none">

                        <?php 
                        for($i = 1; $i < count($cityAry); $i++){
                        ?>

                        <img title="<?=$cityAry[$i][1]?>" id="infstar_<?=$cityAry[$i][0]?>" src="assets/star.png"
                            style="position: absolute;left: <?=$cityAry[$i][2]?>px;top: <?=$cityAry[$i][3]?>px; width: <?=$cityAry[$i][4]?>px"
                            onclick="selstarinfo(<?=$cityAry[$i][0]?>)" onmouseover="selstarover(<?=$cityAry[$i][0]?>)"
                            onmouseout="selstarout(<?=$cityAry[$i][0]?>)">

                        <?php }?>
                    </div>
                    <div id="page_3_4" style="display: none;">

                        <?php 
                        for($i = 1; $i < count($riverAry); $i++){
                        ?>
                        <img title="<?=$riverAry[$i][1]?>" id="rr_<?=$riverAry[$i][0]?>"
                            src="assets/river_min/<?=$riverAry[$i][0]?>.png"
                            style="position:absolute;left: <?=$riverAry[$i][2]?>px;top: <?=$riverAry[$i][3]?>px;width: <?=$riverAry[$i][4]?>px;"
                            x="<?php echo ($riverAry[$i][0]+1);?>" y="<?=$riverAry[$i][0]?>"
                            onmouseover="inforiverover(<?=$riverAry[$i][0]?>, <?php echo ($riverAry[$i][0]+1);?>)"
                            onmouseout="inforiverout(<?=$riverAry[$i][0]?>, <?=$riverAry[$i][0]?>)"
                            onclick="inforiversel(<?=$riverAry[$i][0]?>)">

                        <?php }?>

                    </div>

                    <div id="page_3_5" style="display: none">
                        <?php                         
                        
                        $itemLabelAry = [   
                                            "",
                                            "Recursos forestales", "Industria", "", "", "Ganado", "", "", "", "", "",//1
                                            "Minería", "Maíz", "Ganadería", "Pesca", "Caña de azúcar", "Caa", "", "", "", "Turismo",//11
                                            "Arroz", "", "", "", "", "", "", "", "", "",//21
                                            "", "", "", "", "Industria", "", "", "", "", "",//31
                                            "", "", "", "Coyote", "", "Pia", "", "", "", "",//41
                                            
                                            "", "", "", "", "", "", "", "", "Reptiles", "",//51
                                            "Camarón", "", "Platano", "", "", "Frutales v hortalizas", "", "", "Aguacate", "",//61
                                            "Papa", "Chile", "", "", "", "Limón", "", "", "", "",//71
                                            "Algodón", "", "Industria:Salinas, conservas, tabaco", "Petróleo", "", "", "", "", "", "Naranja",//81
                                            "Trigo", "", "", "", "", "", "", "", "Zapupe", "Café", //91
                                           

                                            "Plátano", "Mango", "Flores", "Frijol", "", "", "", "", "", "",//101
                                            "Palmeras", "", "Sal", "", "Vino", "Naranja", "Jaguar", "Guacamaya", "Mono Araña", "Nueces de Brasil",//111
                                            "Recursos forestales", "Vicuña", "Chinchilla", "", "", "", "", "", "", "", //121
                                            "", "", "", "", "", "", "", "", "", "", //131
                                        ];
                        for($i = 1; $i < count($songAry); $i++){ 
                        ?>
                        <img title="<?=$songAry[$i][1]?>" id="ff_<?=$songAry[$i][0]?>"
                            src="assets/<?=$songImgAry[$songAry[$i][5]]?>.png"
                            style="position:absolute;left: <?=$songAry[$i][2]?>px; top: <?=$songAry[$i][3]?>px; width: <?=$songAry[$i][4]?>px"
                            onclick="infofortsel(<?=$songAry[$i][5]?>, <?=$songAry[$i][0]?>)"
                            onmouseover="infofortover(<?=$songAry[$i][5]?>, <?=$songAry[$i][0]?>)"
                            onmouseout="infofortout(<?=$songAry[$i][5]?>, <?=$songAry[$i][0]?>)">
                        <?php }?>

                    </div>

                    <div id="page_3_6" style="display: none;">
                        <img id="i_1" src="assets/item14.png" width="40px" style="position: absolute;left: 199px;top: 136px;" onmouseover="infoiover(14, 1)" onmouseout="infoitout(14, 1)" title="Pesca" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_2" src="assets/item14.png" width="40px" style="position: absolute;left: 79px;top: 417px;" onmouseover="infoiover(14, 2)" onmouseout="infoitout(14, 2)" title="Pesca" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_3" src="assets/item14.png" width="40px" style="position: absolute;left: 336px;top: 395px;" onmouseover="infoiover(14, 3)" onmouseout="infoitout(14, 3)" title="Pesca" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_4" src="assets/item14.png" width="40px" style="position: absolute;left: 718px;top: 433px;" onmouseover="infoiover(14, 4)" onmouseout="infoitout(14, 4)" title="Pesca" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_5" src="assets/item125.png" width="30px" style="position: absolute;left: 387px;top: 366px;" onmouseover="infoiover(125, 5)" onmouseout="infoitout(125, 5)" title="Exportación" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_6" src="assets/item125.png" width="30px" style="position: absolute;left: 626px;top: 445px;" onmouseover="infoiover(125, 6)" onmouseout="infoitout(125, 6)" title="Exportación" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_7" src="assets/item125.png" width="30px" style="position: absolute;left: 605px;top: 508px;" onmouseover="infoiover(125, 7)" onmouseout="infoitout(125, 7)" title="Exportación" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_8" src="assets/item13.png" width="30px" style="position: absolute;left: 639px;top: 383px;" onmouseover="infoiover(13, 8)" onmouseout="infoitout(13, 8)" title="Ganadería" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_9" src="assets/item13.png" width="30px" style="position: absolute;left: 635px;top: 295px;" onmouseover="infoiover(13, 9)" onmouseout="infoitout(13, 9)" title="Ganadería" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_10" src="assets/item13.png" width="30px" style="position: absolute;left: 485px;top: 350px;" onmouseover="infoiover(13, 10)" onmouseout="infoitout(13, 10)" title="Ganadería" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_11" src="assets/item13.png" width="30px" style="position: absolute;left: 300px;top: 300px;" onmouseover="infoiover(13, 11)" onmouseout="infoitout(13, 11)" title="Ganadería" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_12" src="assets/item20.png" width="30px" style="position: absolute;left: 200px;top: 400px;" onmouseover="infoiover(20, 12)" onmouseout="infoitout(20, 12)" title="Turismo" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_13" src="assets/item20.png" width="30px" style="position: absolute;left: 350px;top: 254px;" onmouseover="infoiover(20, 13)" onmouseout="infoitout(20, 13)" title="Turismo" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_14" src="assets/item20.png" width="30px" style="position: absolute;left: 446px;top: 308px;" onmouseover="infoiover(20, 14)" onmouseout="infoitout(20, 14)" title="Turismo" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_15" src="assets/item77.png" width="40px" style="position: absolute;left: 221px;top: 430px;" onmouseover="infoiover(77, 15)" onmouseout="infoitout(77, 15)" title="Vino" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_16" src="assets/item77.png" width="40px" style="position: absolute;left: 369px;top: 200px;" onmouseover="infoiover(77, 16)" onmouseout="infoitout(77, 16)" title="Vino" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_17" src="assets/item77.png" width="40px" style="position: absolute;left: 510px;top: 278px;" onmouseover="infoiover(77, 17)" onmouseout="infoitout(77, 17)" title="Vino" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_18" src="assets/item9.png" width="30px" style="position: absolute;left: 738px;top: 247px;" onmouseover="infoiover(9, 18)" onmouseout="infoitout(9, 18)" title="Trigo" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_19" src="assets/item9.png" width="30px" style="position: absolute;left: 547px;top: 290px;" onmouseover="infoiover(9, 19)" onmouseout="infoitout(9, 19)" title="Trigo" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_20" src="assets/item9.png" width="30px" style="position: absolute;left: 532px;top: 497px;" onmouseover="infoiover(9, 20)" onmouseout="infoitout(9, 20)" title="Trigo" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_21" src="assets/item9.png" width="30px" style="position: absolute;left: 295px;top: 371px;" onmouseover="infoiover(9, 21)" onmouseout="infoitout(9, 21)" title="Trigo" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_22" src="assets/item134.png" width="30px" style="position: absolute;left: 227px;top: 270px;" onmouseover="infoiover(134, 22)" onmouseout="infoitout(134, 22)" title="Estrella de Mar" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_23" src="assets/item61.png" width="30px" style="position: absolute;left: 495px;top: 494px;" onmouseover="infoiover(61, 23)" onmouseout="infoitout(61, 23)" title="Exportación" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_24" src="assets/item92.png" width="30px" style="position: absolute;left: 109px;top: 414px;" onmouseover="infoiover(92, 24)" onmouseout="infoitout(92, 24)" title="Aguila Real" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_25" src="assets/item87.png" width="30px" style="position: absolute;left: 303px;top: 255px;" onmouseover="infoiover(87, 25)" onmouseout="infoitout(87, 25)" title="Ganado Bovino" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_26" src="assets/item129.png" width="20px" style="position: absolute;left: 742px;top: 292px;" onmouseover="infoiover(129, 26)" onmouseout="infoitout(129, 26)" title="Gas" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_27" src="assets/item44.png" width="30px" style="position: absolute;left: 223px;top: 343px;" onmouseover="infoiover(44, 27)" onmouseout="infoitout(44, 27)" title="Lobo" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_28" src="assets/item44.png" width="30px" style="position: absolute;left: 688px;top: 295px;" onmouseover="infoiover(44, 28)" onmouseout="infoitout(44, 28)" title="Lobo" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_29" src="assets/item84.png" width="30px" style="position: absolute;left: 674px;top: 250px;" onmouseover="infoiover(84, 29)" onmouseout="infoitout(84, 29)" title="Petróleo" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_30" src="assets/item131.png" width="30px" style="position: absolute;left: 121px;top: 362px;" onmouseover="infoiover(131, 30)" onmouseout="infoitout(131, 30)" title="Caballos Salvajes" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_31" src="assets/item132.png" width="31px" style="position: absolute;left: 580px;top: 323px;" onmouseover="infoiover(132, 31)" onmouseout="infoitout(132, 31)" title="Oso Pardo" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                            
                        <img id="i_32" src="assets/item13.png" width="30px" style="position: absolute;left: 150px;top: 320px;" onmouseover="infoiover(13, 32)" onmouseout="infoitout(13, 32)" title="Ganadería" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_33" src="assets/item11.png" width="30px" style="position: absolute;left: 180px;top: 340px;" onmouseover="infoiover(11, 33)" onmouseout="infoitout(13, 33)" title="Minería" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_34" src="assets/item52.png" width="30px" style="position: absolute;left: 400px;top: 240px;" onmouseover="infoiover(52, 34)" onmouseout="infoitout(52, 34)" title="Venado" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_35" src="assets/item135.png" width="30px" style="position: absolute;left: 360px;top: 290px;" onmouseover="infoiover(135, 35)" onmouseout="infoitout(135, 35)" title="Garza" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_36" src="assets/item77.png" width="40px" style="position: absolute;left: 560px;top: 408px;" onmouseover="infoiover(77, 36)" onmouseout="infoitout(77, 36)" title="Vino" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_37" src="assets/item136.png" width="20px" style="position: absolute;left: 530px;top: 388px;" onmouseover="infoiover(136, 37)" onmouseout="infoitout(136, 37)" title="Naranjas" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">

                        <img id="i_38" src="assets/item115.png" width="20px" style="position: absolute;left: 770px;top: 378px;" onmouseover="infoiover(115, 38)" onmouseout="infoitout(115, 38)" title="Tabaco" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_39" src="assets/item115.png" width="20px" style="position: absolute;left: 690px;top: 406px;" onmouseover="infoiover(115, 39)" onmouseout="infoitout(115, 39)" title="Tabaco" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                    </div>

                </div>

            </div>



        </div>




        <div id="fortAlam"
            style="position: absolute; left: 590px; top: 130px; background-color: #FFF; border-radius: 5px; width: 246px; height:181px; display: none; border: solid 1px #ccc; ">
            <img id="fortAlamImg" src="" width="240px" height="175px" style="margin-left: 3px; margin-top: 3px">
        </div>

        <div id="cityDiv"
            style="position: absolute; left: 130px; top: 70px; width:626px; height:405px; background-image:url('assets/submain1.png'); display:none;">
            <div style=" writing-mode: vertical-rl; text-orientation: downright; transform: rotate(180deg); font-size:61px; color:#FFF; 
             border-radius: 10px;  height:380px; margin-left: 10px;">
                Sur de Europa
            </div>
            <div style="border:#cc9900 solid 1px; padding-top:20px; margin-top:20px; margin-left:25px; height:330px; width:490px;"
                id="">
                <div style="height: 165px; width: 483px; font-family:''; font-size: 14px; overflow-y: scroll; padding-left: 3px; padding-right: 3px"
                    id="cityTxt"></div>
                <div style="height: 155px; width: 490px; overflow-x: auto; margin-top:10px">
                    <img src="" width="200px" height="150px" style="margin-left: 5px" id="cityImg_1">
                    <img src="" width="200px" height="150px" style="margin-left: 5px" id="cityImg_2">
                    <img src="" width="200px" height="150px" style="margin-left: 5px" id="cityImg_3">
                    <img src="" width="200px" height="150px" style="margin-left: 5px" id="cityImg_4">
                </div>
                <div style="position: absolute; left: 560px; top: 335px"><img src="assets/close.png" width="32px"
                        onclick="selmapInfoHide()"></div>
            </div>
        </div>
        <div style="position: absolute; left: 354px; top:109px; width: 366px; height: 383px; background-image: url('assets/ayude.png'); display: none;"
            id="ayude">
            <div style="height: 50px" onclick="ayudeClose()"></div>
        </div>
        <div style="position: absolute; left: 780px; top: 1px; display: none; width: 126px; height: 171px; background-image: url(assets/ico.png)"
            id="icoDiv" rol=0>
            <div style="height: 50px;  " onclick="icoClose()"></div>
            <div style="height: 40px;  " onclick="icoSpeak()"></div>
            <div style="height: 70px; " onclick="ayudeShow()"></div>
        </div>

        <div id="right_bar" style="width: 50px; cursor:pointer; display:none">
            <div style="z-index:400; width: 33px; height: 135px; margin-top: 330px; background-image:url('assets/menu1.png'); display:flex; align-items:center; justify-content:center;"
                class="menuDiv">
                <div class="menu" onclick="subMenu(1)">ACTIVIDADES</div>
            </div>
            <div style="width: 33px; height: 91px; background-image:url('assets/menu2.png'); display:flex; align-items:center; justify-content:center; "
                class="menuDiv">
                <div class="menu" onclick="subMenu(2)">MENU</div>
            </div>
        </div>
        <div id="xxx" style="width: calc(100% - 900px); border:solid 0px; z-index:100; background:#FFF"></div>
    </div>
</body>

</html>
