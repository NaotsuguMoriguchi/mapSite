<html>

<head>
    <meta charset="utf-8" />
    <title>Norte de Africa</title>

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
            [1, "Marruecos", 118, 100, 130, 
                "Marruecos<br><br>Marrakech<br>
                Puerta de la fortaleza de los Udaia<br>
                Capital:	Rabat<br>
                Idioma:	Árabe<br>
                Superficie:	446.550 km_<br>
                Población:	31.689.267<br>
                Densidad:	70 hab./km_<br>
                Moneda:	Dirham<br>
                Tipo de gobierno:	Monarquía Constitucional<br>
                El nombre completo del país en árabe puede traducirse como El Reino Occidental. El nombre Marruecos en otros lenguajes se origina a causa de la antigua capital imperial Marrakech, proveniente de la expresión Bereber que significa \"Tierra de Dios\".
                Marruecos limita al norte con el Mar Mediterráneo y el Océano Atlántico (Estrecho de Gibraltar).Al sur con el Sahara Occidental, al este con Argelia y al o este con el Océano atlántico. Su relieve es mayormente montañoso y el promedio de altura sobre el nivel del mar es de unos 800 m. Dos cadenas montañosas, el Rif, a lo largo de la costa norte y el centro, dividen a Marruecos en dos partes: El oriental y el atlántico. Sus Principales ciudades son Casablanca, Fez y Marrakech.</mensaje>
                ",
                "assets/fscommand/mar1.jpg",
                "assets/fscommand/mar2.jpg",
                "assets/fscommand/mar3.jpg",
                "assets/fscommand/mar4.jpg"
                
            ],
            [2, "Argelia", 163, 86, 216,
                'Argelia<br><br>Nieve en Bouzareah<br>
                Macizo de Hoggar<br>
                Imagen de la bahía de Argel, vista desde la basílica de Nuestra Señora de África <br>
                Pinturas rupestres de Tassili<br>
                Edificios de Argel<br>
                Capital:	Argel<br>
                Idioma:	Árabe, Bereber<br>
                Superficie:	2.381.740 km_<br>
                Población:	32.531.853<br>
                Densidad:	14 hab./km_<br>
                Moneda:	Dinar argelino<br>
                Tipo de gobierno:	República democrática
                Argelia es un país en el norte de África. Limita con el Mar Mediterráneo al norte, Túnez al noreste, Libia al este, Níger al sudeste, Malí y Mauritania al suroeste, y Marruecos al oeste.
                Es la segunda nación más grande de África, solo superada por Sudán. Se divide en 48 provincias o wilayas: recibe su nombre de su capital y ciudad más importante, Argel. Aunque, a partir del 2008, la capital del país será Algería, a 200 Km al sur de Argel.
                La mayor parte del país la ocupa el desierto del Sahara, que representa el 85 %  del territorio argelino. Abarca desde el océano Atlántico al Mar Rojo. El cual no es sólo una gran extensión de arena, también hay cordilleras, llanuras sin ningún tipo de vegetación (donde el rasgo más característico en muchos kilómetros es una piedra del tamaño de una pelota de tenis) y numerosos oasis, donde existen pequeños núcleos habitados y en los que se producen los dátiles más sabrosos del mundo. El Lema nacional: La revolución por el pueblo y para el pueblo
                ',
                "assets/fscommand/argl1.jpg",
                "assets/fscommand/argl2.jpg",
                "assets/fscommand/argl3.jpg",
                "assets/fscommand/argl4.jpg"
            ],
            [4, "Libia", 356, 123, 180,
                'Libia<br><br>Capital:	Trípoli<br>
                Idioma:	Árabe<br>
                Superficie:	1.759.540 km_<br>
                Población:	5.499.074<br>
                Densidad:	3,1/km_<br>
                Moneda:	Dinar libio<br>
                Tipo de gobierno:	<br>
                Libia es un país del norte de África. Limita con el Mar Mediterráneo al norte, al oeste con Túnez y Argelia, al suroeste con Níger, al sur con Chad, al sureste con Sudán y al este con Egipto.
                El país se caracteriza por sus grandes extensiones de desierto (Sahara) que cubren la totalidad del país a excepción de una estrecha franja litoral que es donde se encuentran los principales núcleos de población del país (como Trípoli y Bengasi). En la región, este desierto toma el nombre de desierto Líbico,  es una de las zonas más inhóspitas del planeta, donde se ha registrado 57ºC, la temperatura más alta de la Tierra.
                Posee 1.770 km de costa sobre el mar Mediterráneo, pero hacia el interior del país no hay presencia de aguas superficiales. El territorio es totalmente seco, pero el subsuelo tiene reservas de agua enormes en el sur del país, en la frontera con Chad. Estas reservas forman un lago subterráneo que cubre un área equivalente a la superficie total de Alemania.
                En Libia se construye el Gran río artificial, uno de los proyectos de ingeniería más grandes y costosos (unos 24.000 millones de US$) de la humanidad. Comprende la instalación de inmensas tuberías para transportar el agua de depósitos naturales subterráneos desde el sur del país hasta la costa, donde se concentra la población. Cuenta con un relativamente alto porcentaje de población inmigrante, resultado de la situación económica privilegida del país dentro de los estándares de África.
                ',
                "assets/fscommand/lib1.jpg",
                "assets/fscommand/lib2.jpg",
                "assets/fscommand/lib3.jpg",
                "assets/fscommand/lib4.jpg"
            ],
            [3, "Túnez", 340, 82, 42,
                'Túnez<br><br>La ciudad de Túnez<br>
                Capital:	Túnez<br>
                Idioma:	Árabe<br>
                Superficie:	163.610 km_<br>
                Población:	9.924.742<br>
                Densidad:	61 hab./km_<br>
                Moneda:	Dinar<br>
                Tipo de gobierno:	República<br>
                Túnez es un país situado al norte de la costa mediterránea africana, se localiza entre el Mar Mediterráneo y el Desierto del Sahara, limita con Argelia al Oeste y Libia al Sur y al Este. Gran parte de su territorio es semiárido y desértico. En el norte hay montañas y el clima es templado, con inviernos suaves y lluviosos y veranos calurosos y secos. 
                Se divide en 24 gobernaturas o wilay_t, posee una economía diversificada, con un importante sector agrícola, minero, de energía, turismo y manufacturas. El crecimiento en turismo y comercio han sido elementos claves en su desarrollo.
                La ciudad de Túnez, capital del país está situada al fondo de un amplio golfo, a continuación de la laguna del Behira o mar pequeña, unida por un canal al antepuerto de La Goulette, la ciudad se extiende por la llanura costera y las colinas que la rodean.
                Tras la independencia del país, Túnez se convirtió en su capital. Entre 1979 y 1990 acogió la sede central de la Liga Árabe, y entre 1982 y 1993 fue también la sede de los cuarteles generales de la Organización para la Liberación de Palestina y el refugio de su líder Yasser Arafat. Éste último edificio fue bombardeado por la aviación israelí en 1985, siendo la última acción de guerra vivida por la ciudad. 
                ',
                "assets/fscommand/tun1.jpg",
                "assets/fscommand/tun2.jpg",
                "assets/fscommand/tun3.jpg",
                "assets/fscommand/tun4.jpg"
            ],
            [5, "Egipto", 522, 133, 130,
                'Egipto<br><br>Vista panorámica de la ciudad de El Cairo<br>
                Panorámica de El Cairo<br>
                Capital:	El Cairo<br>
                Idioma:	Árabe<br>
                Superficie:	1.001.450 km_<br>
                Población:	77.505.756<br>
                Densidad:	75 hab./km_<br>
                Moneda:	Libra<br>
                Tipo de gobierno:	República<br>
                Egipto es un país de África, Limita al oeste con Libia, al sur con Sudán, al norte con el Mediterráneo y al este con el mar Rojo e Israel. El territorio se caracteriza por su conocido desierto (Sahara) que únicamente es atravesado por un río, el Nilo, el primero de los dos ríos del mundo por su longitud y que recorre el país de sur a norte en casi mil km, formando gargantas de hasta 400 m y cuya anchura varía de 20 a 1 km. hacia Al-Minya pierde caudal y desemboca en el Mediterráneo en forma de delta. Dado lo inhóspito del territorio la población se sitúa principalmente a las orillas del Nilo, la cual existe y vive en función de esta corriente fluvial; prueba de ello es que son las únicas tierras habitadas del país, el 3,5% de la superficie total, son las que corresponden a la estrecha franja de tierras regadas por el Nilo y abonadas por los fértiles limos que el río acarrea desde su origen en Etiopía, aunque también adquieren una cierta relevancia  algunos núcleos ubicados en la costa tanto mediterránea como del Mar Rojo. Además, hay que reseñar que en Egipto se encuentra el canal de Suez, el cual, separa la parte principal del territorio egipcio de la Península del Sinaí, que limita al este con Israel.
                La monotonía del desierto queda rota con la aparición de una larga línea de oasis que se extienden a ambos lados del curso del Nilo. Más allá de ésta línea se expanden varios desiertos casi deshabitados e improductivos. El Lema nacional: Silencio y paciencia, libertad, socialismo y unidad
                ',
                "assets/fscommand/egi1.jpg",
                "assets/fscommand/egi2.jpg",
                "assets/fscommand/egi3.jpg",
                "assets/fscommand/egi4.jpg"
            ],
            
            [7, "Mauritania", 63, 198, 138,
                'Mauritania<br><br>Mezquita en Chinguetti<br>
                Capital:	Nuakchott<br>
                Idioma:	Árabe<br>
                Superficie:	1.025.520 km_<br>
                Población:	2.747.000<br>
                Densidad:	2,3 hab/km_<br>
                Moneda:	Ouguiya<br>
                Tipo de gobierno:	Gobierno en Transición golpista. No reconocido por la comunidad internacional, pero es el actual dirigente del país.<br>
                Mauritania es un país en el noroeste de África. Tiene una extensa costa en el Océano Atlántico, Limita al norte con Marruecos, al noreste con Argelia, al este con Malí y al sur con Senegal y Malí. Situada en la región del Sahel
                El río Senegal le sirve de frontera. El país se encuentra dominado por el desierto del Sahara que ocupa casi la totalidad del territorio, a excepción de una estrecha banda litoral, donde se encuentran casi todas las ciudades importantes del país: Nouackchot y Nouadibou. Las principales ciudades del interior son Tidjika, Atar,  y Chinguetti
                Está dividida para efectos político-administrativos en 12 regiones y el distrito de la capital. La mayoría de la población  depende de la agricultura y la ganadería para su sustento, aunque nómadas y granjeros se ven obligados a menudo a emigrar a las ciudades desde que en la década de los 70 y 80 se acentuaron los procesos de sequía en el Sahel.
                ',
                "assets/fscommand/mau1.jpg",
                "assets/fscommand/mau2.jpg",
                "assets/fscommand/mau3.jpg",
                "assets/fscommand/mau4.jpg"
            ],
            [6, "Sahara Occidental", 66, 196, 100,
                "Sahara Occidental<br><br>Puesto militar en El Aaiún<br>
                Cercanías de Tifariti<br>
                Capital:	<br>
                Idioma:	Español y Árabe<br>
                Superficie:	266.000 km_<br>
                Población:	262.000 hab<br>
                Densidad:	1 hab./km_<br>
                Moneda:	Dirham de Marruecos<br>
                Tipo de gobierno:	<br>
                El Sahara Occidental es un territorio situado al noroeste de África, en la costa atlántica del desierto del Sahara. Sus límites son con Marruecos  al norte, Argelia al este, Mauritania al este y sur, y el océano Atlántico, al oeste.
                Atravesado por el Trópico de Cáncer, el territorio está ocupado por el desierto del Sahara, siendo una parte erg (desierto de arena) y otra de piedra. La escasa vegetación sólo crece en los oasis.
                Existen algunas especies de animales adaptadas al árido hábitat desértico, como el ratón brincante del desierto, la gacela Dama, la hubara, el corredor, ganga senegalesa, foca monje, fenec, dromedario, reptiles, etc. Especies extinguidas por los avatares históricos del territorio son el avestruz o el orix. El país cuenta con pocos recursos naturales y no posee suficientes precipitaciones como para abastecer la mayoría de las actividades agrícolas. Su economía se centra en el pastoreo nómada, la pesca y la extracción de fosfatos. La mayoría de los alimentos para la población urbana deben ser importados. Todo el comercio y otras actividades económicas son controladas por el gobierno.
                ",
                "assets/fscommand/sah1.jpg",
                "assets/fscommand/sah2.jpg",
                "assets/fscommand/sah3.jpg",
                "assets/fscommand/sah4.jpg"
            ],
            [8, "Mali", 109, 228, 190,
                'Mali<br><br>Askia<br>
                Capital:	Bamako<br>
                Idioma:	Francés<br>
                Superficie:	1.240.000 km_<br>
                Población:	11.415.261<br>
                Densidad:	9,1 hab./km_<br>
                Moneda:	Franco CFA<br>
                Tipo de gobierno:	República parlamentaria<br>
                Malí es un país de África. Limita al norte con Argelia, al este con Níger, al oeste con Mauritania y Senegal, y al sur con Costa de Marfil, Guinea y Burkina Faso.<br>
                El territorio es muy extenso y bastante variado. Se encuentra atravesado de oeste a este por el río Níger, el cual pasa por la capital Bamako y por las cercanías de Tombuctú (a 7 kilómetros). En la parte más occidental del país se encuentra el río Senegal, que más adelante servirá de frontera natural entre Mauritania y Sengal. El norte del país, delimitado por la frontera con Mauritania, el río Níger, la frontera con Argelia y la frontera con Níger, se encuentra dominado por el desierto del Sahara. Aquí en el norte se encuentran las minas de Taoudenni y los montes Trimetine, situados en el recodo que constituye la frontera de Argelia con la de Níger. Las principales ciudades del norte de Malí son Tombuctu y Gao.</mensaje>
                ',
                "assets/fscommand/mal1.jpg",
                "assets/fscommand/mal2.jpg",
                "assets/fscommand/mal3.jpg",
                "assets/fscommand/mal4.jpg"
            ],

            [9, "Senegal", 60, 329, 58,
                'Senegal<br><br>Capital:	Dakar<br>
                Idioma:	Francés<br>
                Superficie:	196,190 km_<br>
                Población:	10,284,929<br>
                Densidad:	52 hab/km_<br>
                Moneda:	Franco CFA<br>
                Tipo de gobierno:	<br>
                Senegal es un país al sur del río Senegal en el Oeste de África. Limita al oeste con el Océano Atlántico, frente al archipiélago de Cabo Verde,  al norte con Mauritania, al este con Mali, hacia el este y en conjunto con Guinea Bissau y Guinea, a la altura del río Gambia, Senegal rodea a Gambia. Gambia separa a las regiones de Cassamance (alta y baja), con el resto de Senegal, a excepción de la región del este, la cual tiene capital en Tambacunda. El territorio senegalés se caracteriza por tener pocas elevaciones, únicamente en la zona suroriental, en la frontera con Mali, hay alguna elevación más importante.
                Cuenta con una Reserva nacional de pájaros de Djoudj, ubicada en el norte de Senegal, la cual es considerada como la tercera reserva ornitológica del mundo,  se extiende en una superficie de 12.000 hectáreas y dispone de un plan de agua permanente que atrae más de 400 especies de pájaros.
                Se divide en 11 regiones, que a su vez están compuestas por 34 departamentos. Existe una unidad administrativa menor conocida como arrondissement. Tiene una gran variedad de grupos étnicos. 
                ',
                "assets/fscommand/sen1.jpg",
                "assets/fscommand/sen2.jpg",
                "assets/fscommand/sen3.jpg",
                "assets/fscommand/sen4.jpg"
            ],
            [10, "Gambia", 61, 362, 27,
                'Gambia<br><br>Capital:	Banjul<br>
                Idioma:	Inglés<br>
                Superficie:	11.295 km_<br>
                Población:	1.593.256 hab<br>
                Densidad:	132 hab./km_<br>
                Moneda:	Dalasi<br>
                Tipo de gobierno:	República presidencialista<br>
                Gambia es una nación en África occidental. Se encuentra rodeada en su totalidad por Senegal, se caracteriza por ser un país muy llano donde no se sobrepasan los 3 metros de altitud. El país se encuentra atravesado de este a oeste por el río Gambia, el cual da nombre al país. Este río es el eje del país y lo divide en dos partes bien diferenciadas, las que están al norte y las que están al sur del mismo. 
                Basa su economía  en los productos agrícolas y la ganadería para consumo interno. La industria se centra en la transformación de productos agrícolas (cacahuete) y de pescado.
                Banjul es la capital de Gambia y su centro económico y administrativo. La ciudad fue fundada por los británicos en 1816 como centro de intercambio comercial y como una base para la eliminación del tráfico de Esclavos. 
                ',
                "assets/fscommand/gam1.jpg",
                "assets/fscommand/gam2.jpg",
                "assets/fscommand/gam3.jpg",
                "assets/fscommand/gam4.jpg"
            ],
             [11, "Guinea Bissau", 64, 374, 35,
                'Guinea Bissau<br><br>Capital:	Bissau<br>
                Idioma:	Portugués<br>
                Superficie:	36.120 km_<br>
                Población:	1.413.446<br>
                Densidad:	50 hab./km_<br>
                Moneda:	Franco CFA<br>
                Tipo de gobierno:	República presidencialista<br>
                Guinea-Bissau es un país del oeste de África, y uno de los países más pequeños del África Continental. Limita con Senegal al norte, y Guinea al sur y al este, y con el Océano Atlántico al oeste. Anteriormente mientras era colonia Portuguesa era parte de Guinea Portuguesa, en la independencia el nombre de su capital, Bissau, fue agregado al nombre oficial del país para prevenir confusiones entre ella y la República de Guinea. Lema nacional: Unidad Lucha y Progreso
                Se divide administrativamente en 9 regiones: Bafata, Biombo, Bissau, Bolama, Cacheu, Gabu, Oio, Quinara y Tombali. Sus Principales ciudades son: Bissau, Bafatá, Gabú, Bissora, Bolama, Cacheu, y Catió
                ',
                "assets/fscommand/gbis1.jpg",
                "assets/fscommand/gbis2.jpg",
                "assets/fscommand/gbis3.jpg",
                "assets/fscommand/gbis4.jpg"
            ],
            [12, "Guinea", 78, 375, 85,
                'Guinea<br><br>Capital:	Conakry<br>
                Idioma:	Francés<br>
                Superficie:	245.857 km_<br>
                Población:	9.452.670<br>
                Densidad:	38,5 hab./km_<br>
                Moneda:	Franco guineano<br>
                Tipo de gobierno:	República<br>
                Guinea se encuentra situada en la costa oeste de África. Limita al norte con Guinea Bissau y Senegal, al sur con Sierra Leona, al sureste con Liberia y al este con Mali y Costa de Marfil. El país se caracteriza por tener una zona de costa, frecuentemente cubierta por manglares. Posteriormente el país va ganando en altura con algunas montañas que separan Conakry de Kankan. Entre Kankan y Nzerekoré el territorio es más llano. En la frontera con Costa de Marfil, en las cercanías de Nzerekoré, se encuentran los montes Nimba, que están declarados patrimonio de la humanidad por la UNESCO y que se encuentran entre Guinea y Costa de Marfil.
                ',
                "assets/fscommand/guin1.jpg",
                "assets/fscommand/guin2.jpg",
                "assets/fscommand/guin3.jpg",
                "assets/fscommand/guin4.jpg"
            ],
            [13, "Sierra Leona", 97, 405, 34,
                'Sierra Leona<br><br>Capital:	Freetown<br>
                Idioma:	Inglés<br>
                Superficie:	71.740 km_<br>
                Población:	5.883.889<br>
                Densidad:	82 hab./km_<br>
                Moneda:	Leone<br>
                Tipo de gobierno:	República presidencialista<br>
                Sierra Leona es un país de África occidental. Limita al norte con Guinea, al sureste con Liberia y al suroeste con el Océano Atlántico Durante el siglo XVIII fue un importante centro de tráfico de esclavos. Al igual que su país vecino Liberia, Sierra Leona fue fundada principalmente por esclavos liberados.
                La mayor parte de la costa está formada por manglares pantanosos, a excepción de la península donde está Freetown, la capital. El resto es una gran meseta con una altitud aproximada de 300 metros sobre el nivel del mar, principalmente poblada por bosques. En el extremo noreste del país hay montañas cuyo punto más alto es el Loma Mansa con 1948 metros de altura. El clima es de tipo tropical, cuya estación lluviosa va desde mayo hasta diciembre.
                ',
                "assets/fscommand/sie1.jpg",
                "assets/fscommand/sie2.jpg",
                "assets/fscommand/sie3.jpg",
                "assets/fscommand/sie4.jpg"
            ],
            [14, "Liberia", 113, 422, 55,
                'Liberia<br><br>Capital:	Monrovia<br>
                Idioma:	Inglés<br>
                Superficie:	111.370 km_<br>
                Población:	3.482.211<br>
                Densidad:	31 hab./km_<br>
                Moneda:	Dólar liberiano<br>
                Tipo de gobierno:	República<br>
                Liberia es un país en la costa oeste de África, junto a Sierra Leona y Costa de Marfil. Este país se ha visto inmerso en dos guerras civiles recientes (1989-1996) y (1999-2003) que han desplazado a cientos de miles de sus ciudadanos y devastado su economía. El  Lema nacional es: El amor por la libertad nos trajo aquí.
                Se divide en 15 condados: Bomi, Bong, Gbarpolu, Grand Bassa, Grand Cape Moun, Grand Gedeh, Grand Kru, Lofa, Margibi, Maryland, Montserrado, Nimba, River Cess, River Gee y Sinoe 
                El paisaje se caracteriza por sus llanuras costeras, que se elevan en una meseta y elevaciones de poca altura en el noreste del país. El clima es tropical: cálido y húmedo. Los inviernos son secos, con días calurosos que se refrescan por la noche. Los veranos son húmedos y nublados, con frecuentes lluvias intensas.
                ',
                "assets/fscommand/lib1.jpg",
                "assets/fscommand/lib2.jpg",
                "assets/fscommand/lib3.jpg",
                "assets/fscommand/lib4.jpg"
            ],
            [15, "Costa de Marfil", 151, 400, 70,
                'Costa de Marfil<br><br>Capital:	Yamoussoukro<br>
                Idioma:	Francés<br>
                Superficie:	322.460 km_<br>
                Población:	17.298.040<br>
                Densidad:	34 hab./km_<br>
                Moneda:	Franco CFA<br>
                Tipo de gobierno:	República<br>
                Costa de Marfil, es un país del Oeste de África. Limita con Liberia, Guinea, Malí, Burkina Faso y Ghana al oeste, norte y este, y con el Golfo de Guinea al sur.<br>
                Está dividida en 49 departamentos administrativos (departamentos principales). El territorio pude ser descrito como una gran llanura que se eleva gradualmente desde el nivel del mar hasta más de 500 metros de altitud en el norte. En la región sudeste existen lagunas interiores en el litoral marítimo, que comienzan en la frontera con Ghana y se prolongan a lo largo de la mitad oriental de la costa. La región sur, especialmente el sudeste, está cubierta por una densa selva tropical.
                La agricultura está muy bien organizada. Se cultiva café y el 40% del cacao mundial. Hay importantes reservas de petróleo y gas, y un buen nivel de inversiones extranjeras. También tiene una gran producción de azúcar y maíz.
                ',
                "assets/fscommand/cost1.jpg",
                "assets/fscommand/cost2.jpg",
                "assets/fscommand/cost3.jpg",
                "assets/fscommand/cost4.jpg"
            ],
            
            [17, "Burquina Faso", 185, 343, 88,
                '',
                "assets/fscommand/bur1.jpg",
                "assets/fscommand/bur2.jpg",
                "assets/fscommand/bur3.jpg",
                "assets/fscommand/bur4.jpg"
            ],
            [16, "Ghana", 209, 388, 57,
                "Ghana<br><br>Capital:	Accra<br>
                Idioma:	Inglés<br>
                Superficie:	239.460 km_<br>
                Población:	21.946.247<br>
                Densidad:	87 hab./km_<br>
                Moneda:	Cedi<br>
                Tipo de gobierno:	República presidencialista<br>
                Ghana se sitúa en el Golfo de Guinea, en África Occidental, a solo algunos grados al norte de la línea del Ecuador. Las costas están compuestas principalmente por litorales bajos y arenosos, desde los cuales se extienden planicies cubiertas de vegetación de pequeña talla, interrumpida por varios ríos, la mayoría de los cuales son navegables por medio de canoas. Al norte, en la frontera con Costa de Marfil, se extiende una faja de floresta tropical; esta área, conocida como Ashanti, es la mayor productora de cacao, minerales y madera del país. Se divide en 10 regiones, las cuales a su vez se dividen en 130 distritos.
                El lago Volta, el mayor lago artificial del mundo, se extiende desde la represa de Akosombo al suroeste de Ghana, hasta la ciudad de Yapei. El lago genera electricidad y proporciona una vía de transporte hacia el interior, además de ser un recurso potencialmente valioso para la irrigación y la agricultura.
                ",
                "assets/fscommand/gha1.jpg",
                "assets/fscommand/gha2.jpg",
                "assets/fscommand/gha3.jpg",
                "assets/fscommand/gha4.jpg"
            ],
            [18, "Togo", 249, 390, 25,
                'Togo<br><br>Capital:	Lomé<br>
                Idioma:	Francés<br>
                Superficie:	56.785 km_<br>
                Población:	5.399.991<br>
                Densidad:	95 hab./km_<br>
                Moneda:	Franco CFA<br>
                Tipo de gobierno:	República presidencialista<br>
                Togo es un país de África, que se encuentra situado a orillas del océano Atlántico. Limita al norte con Burkina Faso, al oeste con Ghana, al este con Benín y al sur con el océano Atlántico. El país es una estrecha franja de territorio que se extiende desde el atlántico hasta el interior. En la costa, se haya la capital del país, Lomé, la cual tiene la peculiaridad de ser una de las pocas capitales de nación situadas en zona fronteriza, en este caso junto a la frontera de Ghana. Según se avanza hacia el interior el territorio gana en altura, de forma que en el centro del país se encuentra una amplia meseta.
                Está dividido en cinco regiones administrativas y la comuna de Lomé, estas regiones son: Marítima, Altiplano, Central, Kara y Sabana 
                ',
                "assets/fscommand/tog1.jpg",
                "assets/fscommand/tog2.jpg",
                "assets/fscommand/tog3.jpg",
                "assets/fscommand/tog4.jpg"
            ],

            [19, "Benin", 259, 373, 38,
                'Benin<br><br>Capital:	Porto-Novo<br>
                Idioma:	Francés<br>
                Superficie:	112.620 km_<br>
                Población:	7.649.360<br>
                Densidad:	60 hab./km_<br>
                Moneda:	Franco CFA<br>
                Tipo de gobierno:	República democrática presidencial<br>
                Benín es un país de África occidental que limita al oeste con Togo, al este con Nigeria, y con Burkina Faso y Níger al norte. Extendido entre el río Níger al norte y la bahía de Benín al sur, la altitud de Benín es casi la misma en todo el país. La mayor parte de la población vive en las llanuras costeras del sur, donde se ubican las ciudades más grandes de Benín como Porto-Novo y Cotonú. 
                El sector norte del país está formado por sabanas y zonas montañosas semiáridas.El clima de Benín es cálido y húmedo, con relativamente más lluvia que otros países del oeste de África, hay dos estaciones de lluvia (abril-julio y septiembre-noviembre).
                ',
                "assets/fscommand/ben1.jpg",
                "assets/fscommand/ben2.jpg",
                "assets/fscommand/ben3.jpg",
                "assets/fscommand/ben4.jpg"
            ],
            [20, "Nigeria", 279, 353, 144,
                'Nigeria<br><br>Capital:	Abuja<br>
                Idioma:	Inglés<br>
                Superficie:	923.768 km_<br>
                Población:	133.881.703<br>
                Densidad:	47 hab./km_<br>
                Moneda:	Naira<br>
                Tipo de gobierno:	República federal presidencial<br>
                Nigeria es un país en el Oeste de África. Es el más poblado del continente africano. Limita al Oeste con Benin, Chad y Camerún en el Este, Níger en el norte y el Golfo de Guinea en el Sur. Las principales ciudades incluyen a la capital Abuja, la anterior capital Lagos, Abeokuta, Ibadan, Port Harcourt, Enugu, Kano, Kaduna, Jos, y la Ciudad Beni. 
                Se divide en 36 estados (a su vez los estados se dividen en áreas de Gobierno Local, 774 en total); y un distrito federal: el Territorio Capital Federal de Abuja.
                Desde que en los 1960s fue descubierto petróleo, la economía nigeriana pasó de ser agrícola y de pastoreo, a industrial, es uno de los países africanos que más se han desarrollado. No obstante, la fuerte dependencia del petróleo y que este se encuentre en manos de empresas extranjeras, hace que existan graves desigualdades sociales. La balanza de pagos es positiva gracias a la exportación de crudo que se conduce a través de gaseoductos desde el interior hasta los puertos del Atlántico. Destaca también la industria petroquímica, de automóviles y las refinerías.
                ',
                "assets/fscommand/ngra1.jpg",
                "assets/fscommand/ngra2.jpg",
                "assets/fscommand/ngra3.jpg",
                "assets/fscommand/ngra4.jpg"
            ],
             [21, "Níger", 250, 236, 181,
                'Níger<br><br>Capital:	Niamey<br>
                Idioma:	Francés<br>
                Superficie:	1.267.000 km_<br>
                Población:	12.162.856<br>
                Densidad:	8,4 hab./km_<br>
                Moneda:	Franco CFA<br>
                Tipo de gobierno:	República presidencialista<br>
                Níger es un país de África situado entre Argelia, Benín, Burkina Faso, Chad, Libia, Malí y Nigeria. <br>
                El territorio consta de dos partes bien diferenciadas; una a orillas del río Níger y otra interior dominada por el desierto del Sahara. Respecto a la primera, hay que decir que en ella se encuentra Niamey, la capital del país. Esta zona colindante con el río Níger es, junto con toda la frontera con Nigeria donde se hayan los principales núcleos de población del país. El resto del país se haya dominado por el desierto del Sahara, el cual alcanza su máximo esplendor en el Teneré. Quedan muchos vestigios de tierra fértil en el desierto. Además hay macizos montañosos como el del Air. Las ciudades más importantes de esta zona "interior" del país son Tahoua y Agadez. En el extremo suroriental del país se encuentra una parte del lago Chad, habitada por los Beri Beri. 
                ',
                "assets/fscommand/nig1.jpg",
                "assets/fscommand/nig2.jpg",
                "assets/fscommand/nig3.jpg",
                "assets/fscommand/nig4.jpg"
            ],
            [22, "Chad", 408, 236, 120,
                'Chad<br><br>Una calle de N\'Djamena<br>
                Capital:	N\'Djamena<br>
                Idioma:	francés y Árabe<br>
                Superficie:	1.840.000 km_<br>
                Población:	9826.419<br>
                Densidad:	7,2 hab./km_<br>
                Moneda:	Franco CFA<br>
                Tipo de gobierno:	Dictadura constituciona<br>
                Chad es un país centroafricano, se encuentra situado en la parte más oriental del desierto del Sahara, y es una nación que no tiene salida al mar. Limita al norte con Libia, al este con Sudán, al sur con la República Centroafricana y al oeste con Camerún, Níger y Nigeria. El país cuenta con dos zonas bien diferenciadas: la norte se encuentra dominada por el desierto, encontrándose en los puntos más septentrionales el Macizo de Tibesti. El sur es más llano y cuenta con mayor vegetación. En la mitad norte la población predominante es la árabe, mientras que en el sur predominan las etnias africanas como los sara.
                ',
                "assets/fscommand/cha1.jpg",
                "assets/fscommand/cha2.jpg",
                "assets/fscommand/cha3.jpg",
                "assets/fscommand/cha4.jpg"
            ],
            [23, "Sudán", 506, 229, 188,
                'Sudán<br><br>Capital:	Jartum<br>
                Idioma:	Árabe<br>
                Superficie:	2.505.813 km_<br>
                Población:	40.187.486<br>
                Densidad:	15 hab./km_<br>
                Moneda:	Dinar sudanés<br>
                Tipo de gobierno:Dictadura Islamnista<br>
                Sudán es el país más grande de África, situado al noreste del continente. Limita con Egipto al norte, el Mar Rojo al noreste, Eritrea y Etiopía al este, Kenia y Uganda al sureste, la República Democrática del Congo y la República Centroafricana al sudoeste, Chad al oeste y con Libia al noroeste.
                Está en parte atravesado por el Nilo y sus afluentes. En el centro se encuentra una gran llanura, bordeada al este y al oeste por montañas. En el sur el clima es tropical, mientras que en el norte es desértico. La desertificación que se extiende con el paso del tiempo hacia el sur, y la erosión del suelo suponen graves problemas para el país.
                Está dividido actualmente en 26 estados. Se distinguen distintas zonas, en primer lugar una zona litoral, que en el conjunto del país no es muy significativa, en la que se encuentra Port Sudan. También se distingue una zona en el noroeste dominada por el desierto de Nubia. El sur se distingue por un territorio de sabana. En el país  se unen los dos ramales del Nilo, donde se encuentran multitud de ruinas y pirámides que son mucho menos conocidas que las de Egipto. La región meridional  es predominantemente rural.
                La población del país es mayoritariamente árabe en el norte mientras que en el sur, en lo que se llama el Sudán meridional, la población es mayoritariamente negra. Lema nacional: La victoria es nuestra
                ',
                "assets/fscommand/sud1.jpg",
                "assets/fscommand/sud2.jpg",
                "assets/fscommand/sud3.jpg",
                "assets/fscommand/sud4.jpg"
            ],
            [24, "Eritrea", 669, 287, 82,
                'Eritrea<br><br>Capital:	Asmara<br>
                Idioma:	Árabe, tigriño<br>
                Superficie:	121.320 km_<br>
                Población:	4.669.638
                Densidad:	37 hab./km_<br>
                Moneda:	Nafka<br>
                Tipo de gobierno:	Gobierno de transición<br>
                Eritrea se encuentra ubicado en el denominado Cuerno de África. Tiene frontera con Sudán al oeste, Etiopía en el sur, y Yibuti al este. El noreste del país tiene una extensa costa con el Mar Rojo. Obtuvo la independencia en 1993, siendo pues uno de los estados independientes más jóvenes. Lema nacional: Nunca jamás arrodillarse
                <br>Está formado por seis regiones administrativas: Anseba, Debub (El Sur), Debubawi Keyih Bahri (Costa Meridional del Mar Rojo), Gash-Barka  y Maakel (El Centro), subdivididas a su vez en el ámbito de provincia y entidad local. 
                Se divide en cuatro regiones climáticas muy distintas:<br>
                El altiplano donde queda la capital, Asmara tiene un clima mediterráneo gracias a su altitud. <br>
                Las tierras bajas al oeste tienen un clima tropical pero la tierra es semiárida con variaciones entre desierto, sabana tropical y zonas con vegetación cerca de los ríos estacionales que corren del altiplano durante la estación de lluvias 
                La costa, que es muy árida y consiste de un desierto estrecho entre el mar y el interior montañoso
                Los acantilados orientales, que están entre el desierto litoral y las montañas del interior y gozan de dos estaciones de lluvias. Además de recibir lluvias estacionales, las zonas más altas de los acantilados orientales se cubren a menudo en niebla. 
                Carece de ríos permanentes. Las precipitaciones medias anuales alcanzan los 60 litros/m_ al año, por lo que el país sufre crónicamente de sequías.
                ',
                "assets/fscommand/erit1.jpg",
                "assets/fscommand/erit2.jpg",
                "assets/fscommand/erit3.jpg",
                "assets/fscommand/erit4.jpg"
            ],
            [25, "Djibouti", 735, 342, 25,
                '',
                "",
                "",
                "",
                ""
            ],
            [26, "Etiopía", 640, 326, 173,
                'Etiopía<br><br>Capital:	Addis Abeba<br>
                Idioma:	Amárico<br>
                Superficie:	1.127.127 km_<br>
                Población:	73.053.286<br>
                Densidad:	60 hab./km_<br>
                Moneda:	Birr<br>
                Tipo de gobierno:	República federal democrática<br>
                Etiopía está situada en el llamado cuerno de África, colinda al norte y noreste con Eritrea, al este con Djibouti y Somalia, al sur con Kenia y al oeste y sudoeste con Sudán.
                La red hidrográfica de Etiopía comprende el Nilo, el Azul, el Omo, el Awash, el Webbe Shibeli y el Genale, el lago más importante es el Tana ya que su desague es precisamente el Nilo. La característica fundamental del territorio es el alto Macizo etíope que forma una meseta central con alturas que oscilan entre los 1.800 y los 3.000 metros sobre el nivel del mar, lluvioso en general y de tierras fértiles a media altura donde se cultiva café y otros productos típicos de áreas de clima mediterráneo o subtropical. La meseta decae hacia Sudán y Somalia. La meseta que linda con Somalia es de lluvia irregular y domina el pastoreo.',
                "assets/fscommand/eti1.jpg",
                "assets/fscommand/eti2.jpg",
                "assets/fscommand/eti3.jpg",
                "assets/fscommand/eti4.jpg"
            ],
            [27, "Somalia", 735, 346, 109,
                'Somalia<br><br>Capital:	Mogadiscio<br>
                Idioma:	Somalí y Arabe, también se hablan inglés e italiano<br>
                Superficie:	637.657 km_<br>
                Población:	8.025.190<br>
                Densidad:	13 hab./km_<br>
                Moneda:	Chelín somalí<br>
                Tipo de gobierno:	Gobierno de transición<br>
                Somalia es un país ubicado en el llamado Cuerno de África, al este del continente africano. Sus Límites son al Oeste y Noroeste con Etiopía y Djibouti, al sur con Kenya, al Norte con el Golfo de Adén, y al Este con Océano Indico.
                El territorio está compuesto principalmente de llanuras, mesetas y tierras elevadas. En el norte. El clima es cálido durante todo el año con veranos inclementes, excepto en los territorios de mayor altitud del norte del país. A pesar de localizarse en el ecuador terrestre la lluvia es rara, y la mayor parte de Somalia se encuentra en terreno árido ó semiárido, adecuado tan sólo para el pastoreo nómada que practica más de la mitad de la población. Sólo en unas áreas de lluvias moderadas, en el noroeste y suroeste, donde se encuentran los dos ríos importantes del país, se practica una agricultura de cierta importancia.
                ',
                "assets/fscommand/som1.jpg",
                "assets/fscommand/som2.jpg",
                "assets/fscommand/som3.jpg",
                "assets/fscommand/som4.jpg"
            ],
            
        ];
        $cityAry = [
            [0, "", 0, 0, 0],
            [1, "Túnez", 353, 100, 18],
            [2, "El Aarúm", 111, 200, 18],
            [3, "Rabat", 200, 118, 18],
            [4, "Tripoli", 394, 138, 18],
            [5, "El Cairo", 580, 147, 18],
            [6, "Asmara", 685, 315, 18],
            [7, "Novakchott", 81, 300, 18],
            [8, "Dakar", 65, 338, 18],
            [9, "Banjul", 65, 360, 18],
            [10, "Bissau", 69, 380, 18],
            [11, "Conakry", 90, 388, 18],
            [12, "Freetown", 104, 417, 18],
            [13, "Monrovia", 126, 435, 18],
            [14, "Abidjan", 173, 426, 18],
            [15, "Bama Ko", 150, 364, 18],
            [16, "Ougadougou", 222, 366, 18],
            [17, "Arcra", 234, 434, 18],
            [18, "lomé", 257, 426, 18],
            [19, "Porto - Novo", 272, 423, 18],
            [20, "Abuja", 338, 398, 18],
            [21, "NDjamena", 427, 362, 18],
            [22, "Jartúm", 640, 324, 18],
            [23, "Argel", 286, 100, 18],
            [24, "Niamey", 268, 348, 18],
            [25, "Addis Abeba", 704, 392, 18],
            [26, "Djibouti", 736, 351, 18],
            [27, "Magadishu", 758, 457, 18],

        ];
        //#### $riverAry[ idNum, name, x, y, w] ####//
        $riverAry = [
            [0, 0, 0],
            [1, "Río Draa", 156, 130, 68],
            [3, "Río Niger", 118, 320, 236],
            [5, "Río Senegal", 64, 347, 62],
            [7, "Río Gambia", 63, 361, 44],
            [9, "Río Volta", 181, 402, 60],
            [11, "Lago Volta", 238, 414, 13],
            [13, "lago Chad", 402, 350, 22],
            [15, "Río Nilo", 573, 139, 133],

            
        ];
        $mountAry = [

            [0, ""],
            [1, "Montes Altai", 223, 89, 143],
            [2, "Montes Ahaggar", 279, 202, 60],
            [3, "Meseta Abisina", 655, 415, 101],
            [4, "Monte Daro", 138, 431, 31],
            [5, "Monte Tibesti", 393, 200, 29],


        ];

        $songAry = [
            [0, "", 0, 0, 0, 0],
            [1, "Casa Blanca, Marruecos", 179, 106, 20, 2, "assets/fscommand/lugares/belen.JPG"],
            [2, "Marrakech, Marruecos", 156, 139, 20, 2, "assets/fscommand/lugares/banios.JPG"],
            [3, "Desierto de Sahara, Argelia", 250, 207, 20, 2, "assets/fscommand/lugares/huascaran.JPG"],  
            [4, "Canal de Sues, Egipto", 608, 128, 20, 2, "assets/fscommand/lugares/huascaran.JPG"], 
            [5, "Piramides de Egipto, Egipto", 582, 134, 20, 2, "assets/fscommand/lugares/huascaran.JPG"],  
            [6, "Río Nilo, Egipto", 603, 175, 20, 2, "assets/fscommand/lugares/huascaran.JPG"], 
            [7, "Mesquita de Djénné, Malí", 242, 289, 20, 2, "assets/fscommand/lugares/huascaran.JPG"], 
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
        [2,6], //1
        [1,3,4,7,8,21], //2
        [2,4], //3
        [2,3,5,21,22,23],//4
        [4,23],//5
        [1,7],//6
        [2,6,8,9],//7
        [2,7,9,12,15,17,21],//8
        [7,8,10,11,12],//9
        [9],//10
        [9,12],//11
        [8,9,11,13,14,15],//12
        [12,14],//13
        [12,13,15],//14
        [8,12,14,16,17],//15
        [15,17,18],//16
        [8,15,16,18,19,21],//17
        [16,17,19],//18
        [17,18,20,21],//19
        [19,21],//20
        [2,4,8,17,19,20,22],//21
        [4,20,21,23],//22
        [4,5,22,24,26],//23
        [23,25,26],//24 
        [24,26.27],//25
        [23,24,25,27],//26
        [25,26],//27
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
        //getObj(("fs_") + sel).src = "assets/fortresssel.png";
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
                            <img src="assets/minmap.png" style="position: absolute;left: -156px;top: -11px;width: 580px; display: none;" id="minmap">
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
                        <img id="i_1" src="assets/item14.png" width="30px" style="position: absolute;left: 483px;top: 97px;" onmouseover="infoiover(14, 1)" onmouseout="infoitout(14, 1)" title="Pesca" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_2" src="assets/item14.png" width="30px" style="position: absolute;left: 79px;top: 455px;" onmouseover="infoiover(14, 2)" onmouseout="infoitout(14, 2)" title="Pesca" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_3" src="assets/item125.png" width="30px" style="position: absolute;left: 100px;top: 474px;" onmouseover="infoiover(125, 3)" onmouseout="infoitout(125, 3)" title="Exportación" onmouseup="handleIconMoveUp(3)" onmousedown="handleIconMoveDown(event,3)" ondragstart="return false;">
                        <img id="i_4" src="assets/item125.png" width="30px" style="position: absolute;left: 180px;top: 480px;" onmouseover="infoiover(125, 4)" onmouseout="infoitout(125, 4)" title="Exportación" onmouseup="handleIconMoveUp(4)" onmousedown="handleIconMoveDown(event,4)" ondragstart="return false;">
                        <img id="i_5" src="assets/item125.png" width="30px" style="position: absolute;left: 395px;top: 102px;" onmouseover="infoiover(125, 5)" onmouseout="infoitout(125, 5)" title="Exportación" onmouseup="handleIconMoveUp(5)" onmousedown="handleIconMoveDown(event,5)" ondragstart="return false;">
                        <img id="i_6" src="assets/item11.png" width="30px" style="position: absolute;left: 105px;top: 216px;" onmouseover="infoiover(11, 6)" onmouseout="infoitout(11, 6)" title="Minería" onmouseup="handleIconMoveUp(6)" onmousedown="handleIconMoveDown(event,6)" ondragstart="return false;">
                        <img id="i_7" src="assets/item11.png" width="30px" style="position: absolute;left: 100px;top: 293px;" onmouseover="infoiover(11, 7)" onmouseout="infoitout(11, 7)" title="Minería" onmouseup="handleIconMoveUp(7)" onmousedown="handleIconMoveDown(event,7)" ondragstart="return false;">
                        <img id="i_8" src="assets/item11.png" width="30px" style="position: absolute;left: 100px;top: 415px;" onmouseover="infoiover(11, 8)" onmouseout="infoitout(11, 8)" title="Minería" onmouseup="handleIconMoveUp(8)" onmousedown="handleIconMoveDown(event,8)" ondragstart="return false;">
                        <img id="i_9" src="assets/item11.png" width="30px" style="position: absolute;left: 120px;top: 435px;" onmouseover="infoiover(11, 9)" onmouseout="infoitout(11, 9)" title="Minería" onmouseup="handleIconMoveUp(9)" onmousedown="handleIconMoveDown(event,9)" ondragstart="return false;">
                        <img id="i_10" src="assets/item11.png" width="30px" style="position: absolute;left: 215px;top: 421px;" onmouseover="infoiover(11, 10)" onmouseout="infoitout(11, 10)" title="Minería" onmouseup="handleIconMoveUp(10)" onmousedown="handleIconMoveDown(event,10)" ondragstart="return false;">
                        <img id="i_11" src="assets/item11.png" width="30px" style="position: absolute;left: 300px;top: 383px;" onmouseover="infoiover(11, 11)" onmouseout="infoitout(11, 11)" title="Minería" onmouseup="handleIconMoveUp(11)" onmousedown="handleIconMoveDown(event,11)" ondragstart="return false;">
                        <img id="i_12" src="assets/item11.png" width="30px" style="position: absolute;left: 416px;top: 331px;" onmouseover="infoiover(11, 12)" onmouseout="infoitout(11, 12)" title="Minería" onmouseup="handleIconMoveUp(12)" onmousedown="handleIconMoveDown(event,12)" ondragstart="return false;">
                        <img id="i_13" src="assets/item13.png" width="36px" style="position: absolute;left: 167px;top: 245px;" onmouseover="infoiover(13, 13)" onmouseout="infoitout(13, 13)" title="Ganado Bovino" onmouseup="handleIconMoveUp(13)" onmousedown="handleIconMoveDown(event,13)" ondragstart="return false;">
                        <img id="i_14" src="assets/item13.png" width="36px" style="position: absolute;left: 396px;top: 301px;" onmouseover="infoiover(13, 14)" onmouseout="infoitout(13, 14)" title="Ganado Bovino" onmouseup="handleIconMoveUp(14)" onmousedown="handleIconMoveDown(event,14)" ondragstart="return false;">
                        <img id="i_15" src="assets/item13.png" width="36px" style="position: absolute;left: 473px;top: 354px;" onmouseover="infoiover(13, 15)" onmouseout="infoitout(13, 15)" title="Ganado Bovino" onmouseup="handleIconMoveUp(15)" onmousedown="handleIconMoveDown(event,15)" ondragstart="return false;">
                        <img id="i_16" src="assets/item13.png" width="36px" style="position: absolute;left: 603px;top: 409px;" onmouseover="infoiover(13, 16)" onmouseout="infoitout(13, 16)" title="Ganado Bovino" onmouseup="handleIconMoveUp(16)" onmousedown="handleIconMoveDown(event,16)" ondragstart="return false;">
                        <img id="i_17" src="assets/item13.png" width="36px" style="position: absolute;left: 767px;top: 396px;" onmouseover="infoiover(13, 17)" onmouseout="infoitout(13, 17)" title="Ganado Bovino" onmouseup="handleIconMoveUp(17)" onmousedown="handleIconMoveDown(event,17)" ondragstart="return false;">
                        <img id="i_20" src="assets/item13.png" width="36px" style="position: absolute;left: 736px;top: 462px;" onmouseover="infoiover(13, 20)" onmouseout="infoitout(13, 20)" title="Ganado Bovino" onmouseup="handleIconMoveUp(20)" onmousedown="handleIconMoveDown(event,20)" ondragstart="return false;">
                        <img id="i_21" src="assets/item84.png" width="40px" style="position: absolute;left: 324px;top: 81px;" onmouseover="infoiover(84, 21)" onmouseout="infoitout(84, 21)" title="Petróleo" onmouseup="handleIconMoveUp(21)" onmousedown="handleIconMoveDown(event,21)" ondragstart="return false;">
                         <img id="i_22" src="assets/item84.png" width="40px" style="position: absolute;left: 312px;top: 171px;" onmouseover="infoiover(84, 22)" onmouseout="infoitout(84, 22)" title="Petróleo" onmouseup="handleIconMoveUp(22)" onmousedown="handleIconMoveDown(event,22)" ondragstart="return false;">
                          <img id="i_23" src="assets/item84.png" width="40px" style="position: absolute;left: 452px;top: 165px;" onmouseover="infoiover(84, 23)" onmouseout="infoitout(84, 23)" title="Petróleo" onmouseup="handleIconMoveUp(23)" onmousedown="handleIconMoveDown(event,25)" ondragstart="return false;">
                           <img id="i_24" src="assets/item84.png" width="40px" style="position: absolute;left: 470px;top: 123px;" onmouseover="infoiover(84, 24)" onmouseout="infoitout(84, 24)" title="Petróleo" onmouseup="handleIconMoveUp(24)" onmousedown="handleIconMoveDown(event,24)" ondragstart="return false;">
                        <img id="i_25" src="assets/item84.png" width="40px" style="position: absolute;left: 501px;top: 137px;" onmouseover="infoiover(84, 25)" onmouseout="infoitout(84, 25)" title="Petróleo" onmouseup="handleIconMoveUp(25)" onmousedown="handleIconMoveDown(event,25)" ondragstart="return false;">
                            <img id="i_26" src="assets/item84.png" width="40px" style="position: absolute;left: 300px;top: 413px;" onmouseover="infoiover(84, 26)" onmouseout="infoitout(84, 26)" title="Petróleo" onmouseup="handleIconMoveUp(26)" onmousedown="handleIconMoveDown(event,26)" ondragstart="return false;">
                            <img id="i_27" src="assets/item84.png" width="40px" style="position: absolute;left: 250px;top: 448px;" onmouseover="infoiover(84, 27)" onmouseout="infoitout(84, 27)" title="Petróleo" onmouseup="handleIconMoveUp(27)" onmousedown="handleIconMoveDown(event,27)" ondragstart="return false;">
                            <img id="i_28" src="assets/item81.png" width="26px" style="position: absolute;left: 53px;top: 334px;" onmouseover="infoiover(81, 28)" onmouseout="infoitout(81, 28)" title="Algodón" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                            <img id="i_29" src="assets/item81.png" width="26px" style="position: absolute;left: 178px;top: 414px;" onmouseover="infoiover(81, 29)" onmouseout="infoitout(81, 29)" title="Algodón" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                            <img id="i_30" src="assets/item81.png" width="26px" style="position: absolute;left: 200px;top: 362px;" onmouseover="infoiover(81, 30)" onmouseout="infoitout(81, 30)" title="Algodón" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                            <img id="i_31" src="assets/item81.png" width="26px" style="position: absolute;left: 236px;top: 289px;" onmouseover="infoiover(81, 31)" onmouseout="infoitout(81, 31)" title="Algodón" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                            <img id="i_32" src="assets/item81.png" width="26px" style="position: absolute;left: 425px;top: 371px;" onmouseover="infoiover(81, 32)" onmouseout="infoitout(81, 32)" title="Algodón" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                            <img id="i_33" src="assets/item81.png" width="26px" style="position: absolute;left: 600px;top: 200px;" onmouseover="infoiover(81, 33)" onmouseout="infoitout(81, 33)" title="Algodón" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                            <img id="i_34" src="assets/item129.png" width="15px" style="position: absolute;left: 590px;top: 168px;" onmouseover="infoiover(129, 34)" onmouseout="infoitout(129, 34)" title="Gas" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                            <img id="i_35" src="assets/item129.png" width="15px" style="position: absolute;left: 505px;top: 200px;" onmouseover="infoiover(129, 35)" onmouseout="infoitout(129, 35)" title="Gas" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                            <img id="i_36" src="assets/item142.png" width="30px" style="position: absolute;left: 150px;top: 357px;" onmouseover="infoiover(142, 36)" onmouseout="infoitout(142, 36)" title="León" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                            <img id="i_37" src="assets/item117.png" width="30px" style="position: absolute;left: 573px;top: 324px;" onmouseover="infoiover(117, 37)" onmouseout="infoitout(117, 37)" title="Tígre Siberiano" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                            <img id="i_38" src="assets/item141.png" width="30px" style="position: absolute;left: 132px;top: 267px;" onmouseover="infoiover(141, 38)" onmouseout="infoitout(141, 38)" title="Camello" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                            <img id="i_39" src="assets/item143.png" width="30px" style="position: absolute;left: 729px;top: 408px;" onmouseover="infoiover(143, 39)" onmouseout="infoitout(143, 39)" title="Mandril" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">

                            <img id="i_40" src="assets/item15.png" width="25px" style="position: absolute;left: 160px;top: 404px;" onmouseover="infoiover(15, 40)" onmouseout="infoitout(15, 40)" title="Cafe" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                            <img id="i_41" src="assets/item15.png" width="25px" style="position: absolute;left: 105px;top: 381px;" onmouseover="infoiover(15, 41)" onmouseout="infoitout(15, 41)" title="Cafe" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                            <img id="i_42" src="assets/item59.png" width="30px" style="position: absolute;left: 560px;top: 227px;" onmouseover="infoiover(59, 42)" onmouseout="infoitout(59, 42)" title="Elefante" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                            <img id="i_43" src="assets/item136.png" width="30px" style="position: absolute;left: 463px;top: 284px;" onmouseover="infoiover(136, 43)" onmouseout="infoitout(136, 43)" title="Lagarto del Desierto" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                            <img id="i_44" src="assets/item59.png" width="30px" style="position: absolute;left: 372px;top: 197px;" onmouseover="infoiover(59, 44)" onmouseout="infoitout(59, 44)" title="Cocodrilc" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                            
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
            <div style=" writing-mode: vertical-rl; text-orientation: downright; transform: rotate(180deg); font-size:55px; color:#FFF; 
             border-radius: 10px;  height:380px; margin-left: 20px;">
                Norte de Africa
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
