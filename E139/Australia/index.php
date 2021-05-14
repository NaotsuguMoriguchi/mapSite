<html>

<head>
    <meta charset="utf-8" />
    <title>Australia</title>

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
            [1, "Australia Occidental", 112, 88, 200, 
                "Australia Occidental<br><br>Capital:	Perth,<br>
                Idioma:	<br>
                Superficie:	2.525.500 km_.<br>
                Población:	<br>
                Densidad:	<br>
                Moneda:	<br>
                Tipo de gobierno:	<br>
                Australia Occidental es el mayor de los estados de Australia, llegando a cubrir el tercio occidental del país-continente. Limita con Australia Meridional y el Territorio del Norte. Tiene una extensión total de 2.525.500 km_.
                En su ciudad capital Perth, situada a orillas del río Swan, viven 1,5 millones de personas, es decir las dos terceras partes de los habitantes del estado. Gran parte del estado es árido, alberga dos desiertos: Gibson y Victoria, pero también se destaca por la gran cantidad de parques nacionales.
                Entre las principales atracciones del estado están: Parque Nacional de Namburg, Wave Rock, Ningaloo Ref, Parque Nacional Kalbarri, Parque Nacional Bungle Bungle-Purnululu.
                E un estado minero, que aporta el 25% del ingreso nacional. Se extrae oro, carbón, mineral de hierro y diamantes, entre otros. También existen áreas vitivinícolas, en Perth y Swan Valley, que prosperan gracias al excelente clima y suelo para este cultivo.
                La capital del estado es la ciudad de Perth en la parte meridional de la costa oeste. Otras ciudades importantes son Bunbury, Kalgoorlie, Albany, Geraldton, Port Hedland y Broome, aunque todas ellas bastante menores que Perth. El territorio cercano a la costa es relativamente templado y forestal, aunque gran parte del estado es cálido y árido, muy poco habitado.
                ",
                "assets/fscommand/aus1.jpg",
                "assets/fscommand/aus2.jpg",
                "assets/fscommand/aus3.jpg",
                "assets/fscommand/aus4.jpg"
            ],
            [2, "Territorio del Norte", 302, 46, 123,
                'Territorio del Norte<br><br>Capital:	Darwin<br>
                Idioma:	<br>
                Superficie:	<br>
                Población:	<br>
                Densidad:	<br>
                Moneda:	<br>
                Tipo de gobierno:	<br>
                Es un territorio federal de Australia. La capital es Darwin. Otra ciudad importante es Alice Springs, a 1.500 km en el interior del desierto.
                La mayor parte de la población se encuentra concentrada alrededor de la autopista Stuart, que une a Darwin con el sur de Australia. El resto de la población habita en pequeños asentamientos dispersos por todo el territorio. 
                ',
                "assets/fscommand/aus1.jpg",
                "assets/fscommand/aus2.jpg",
                "assets/fscommand/aus3.jpg",
                "assets/fscommand/aus4.jpg"
            ],
            [4, "Queensland", 421, 53, 187,
                'Queensland<br><br>Capital:	Brisbane<br>
                Población:	3,796,800<br>
                Tipo de gobierno:	<br>
                Queensland es uno de los estados que forman Australia. Se encuentra en la parte noreste del país, la capital es Brisbane. Es el único estado australiano con un sistema legislativo unicameral, llamado Parlamento de Queensland.
                Colinda al Este con el Océano Pacífico, al oeste se encuentra el Territorio del Norte, al suroeste el estado de Australia Meridional, al sur se encuentra Nueva Gales del Sur y en el norte Nueva Guinea
                La economía se basa en las Industrias primarias, especialmente plátanos, cacahuetes, algodón y lana. También hay industrias mineras de bauxita y carbón. Las industrias del sector secundario se basan en el tratamiento de los minerales.
                ',
                "assets/fscommand/aus1.jpg",
                "assets/fscommand/aus2.jpg",
                "assets/fscommand/aus3.jpg",
                "assets/fscommand/aus4.jpg"
            ],
            [3, "Australia Meridional", 307, 263, 145,
                'Australia Meridional en Australia<br><br>Australia Meridional es un estado de Australia, en el sur de la parte central del país, frente al océano Antártico. Su extensión es de 984.377 km_. La capital de Australia Meridional es Adelaida, conocida como "la ciudad de las iglesias". Fue proclamada como colonia británica el 26 de diciembre de 1836. Se convirtió en un estado de Australia en 1901 junto con las otras cinco colonias británicas en Australia (Nueva Gales del Sur, Victoria, Queensland, Australia Occidental y Tasmania). El estado tiene aproximadamente 1.530.000 habitantes (2004), la mayoría de los cuales viven en las fértiles áreas costeras y en la ribera del Río Murray.',
                "assets/fscommand/aus1.jpg",
                "assets/fscommand/aus2.jpg",
                "assets/fscommand/aus3.jpg",
                "assets/fscommand/aus4.jpg"
            ],
            [5, "Nueva Gales del Sur", 449, 307, 155,
                'Nueva Gales del Sur<br><br>Capital:	Sydney<br>
                Idioma:	<br>
                Superficie:	800 642 km_<br>
                Población:	6,764,600<br>
                Densidad:	8.45/km_<br>
                Moneda:	<br>
                Tipo de gobierno:	<br>
                Nueva Gales del Sur  es el estado más antiguo y poblado de Australia. Se encuentra en la parte sudoriental del país, al norte de Victoria y al sur de Queensland.<br>
                Sus cuatro ciudades principales son, Newcastle, Gosford, Sydney y Wollogong, todas ellas en la costa. Físicamente, el estado de Nueva Gales del Sur puede dividirse en cuatro secciones: La franja costera, con climas que van desde el fresco templado en el extremo sur hasta el casi subtropical en la frontera con Queensland.  Las regiones montañosas de la Gran Barrera Divisoria y las tierras altas a su alrededor. Muchos picos superan los mil metros de altitud, siendo el más alto el Monte Kosciuszko. Las llanuras destinadas sobre todo a la agricultura que ocupan buena parte de la superficie del estado, la densidad de población es aquí muy inferior a la de la costa. Las llanuras áridas del extremo noroccidental del estado, casi inhabitables. 
                ',
                "assets/fscommand/aus1.jpg",
                "assets/fscommand/aus2.jpg",
                "assets/fscommand/aus3.jpg",
                "assets/fscommand/aus4.jpg"
            ],
            
            [7, "Tasmania", 480, 473, 45,
                'Tasmania<br><br>Capital:	Hobart<br>
                Superficie:	90 758 km_<br>
                Población:	478 400<br>
                Densidad:	6.92/km_<br>
                La isla de Tasmania, en Oceanía es un estado de Australia; localizad a 240 km al sureste del continente, separada por el estrecho de Bass. La capital y ciudad más grande es Hobart, que incluye las ciudades de Hobart, Glenorchy, y Clarence. Otras ciudades son Launceston en el norte, y Devonport y Burnie en noroeste.
                Tasmania estuvo unida al continente australiano hasta hace 13.000 años y tras la subida del nivel de las aguas ésta quedó aislada, creándose el estrecho de Bass. Su relieve es montañoso. El monte Ossa tiene una altitud de 1.617 m y es la cima más alta de Tasmania. Los ríos son de curso rápido y aunado con las altas precipitaciones presentan las condiciones ideales para la instalación de centrales hidroeléctricas. La isla posee un clima templado, estable y húmedo. Destaca en la agricultura y en la pesca. Posee una tecnología avanzada para sus actividades comerciales.
                El animal más conocido de los existentes en la isla es el llamado Demonio de Tasmania (Sarcophilus lanarius), actualmente en peligro de extinción. Aunque el más famoso de ellos sigue siendo el Tigre de Tasmania (Tilacino Thylacinus cynocephalus), extinto en 1936 tras años de sobrecaza, y que aún hoy es un reclamo turístico de la isla, apareciendo incluso en su escudo de armas.
                ',
                "assets/fscommand/zel1.jpg",
                "assets/fscommand/zel2.jpg",
                "assets/fscommand/zel3.jpg",
                "assets/fscommand/zel4.jpg"
            ],
            [6, "Victoría", 446, 379, 99,
                "Victoría<br><br>Capital:	Canberra<br>
                Idioma:	Inglés<br>
                Superficie:	7.686.850 km_<br>
                Población:	20.090.437<br>
                Densidad:	2,5 hab./km_<br>
                Moneda:	Dólar australiano<br>
                Tipo de gobierno:	Monarquía parlamentaria.<br>
                Australia es el sexto país más grande del mundo en superficie, y el único que ocupa la isla-continente homónima. Australia también incluye la isla de Tasmania, ubicada al Sur, y otras islas menores. Tiene fronteras marítimas con Nueva Zelanda que está ubicada en el sureste, y con Papúa Nueva Guinea, Indonesia y Timor Oriental en el norte. No tiene fronteras terrestres.
                Está bañada por los océanos Índico, Glaciar Antártico y Pacífico, y separada de Asia por los mares de Timor y de Arafura. El clima está fuertemente influenciado por corrientes oceánicas, incluyendo El Niño, el cual causa sequías periódicas, y el sistema estacional tropical de baja presión, que produce ciclones en el norte de Australia. La región desértica o semiárida es la de mayor extensión, un 40% de su territorio está cubierto por dunas de arena.
                Es el continente más seco, menos poblado, más plano, con los terrenos de mayor antigüedad y los menos fértiles. Curiosamente la montaña más alta del país, el Monte Mawson (2.745 m), no se halla en la propia isla de Australia, sino que se encuentra en la pequeña isla Heard, en el Océano Índico meridional. El Monte Kosciuszko, con 2.228 m, es la principal elevación de la isla de Australia.
                Se divide en seis estados, dos territorios interiores y varios territorios exteriores. Los estados de Australia son: Nueva Gales del Sur, Queensland, Australia Meridional, Tasmania, Victoria y Australia Occidental. Los dos territorios interiores son el 
                 y el Territorio de la capital australiana.<br>
                Sólo los extremos sureste y suroeste tienen un clima templado; parte es selva tropical, parte pastos y parte desierto. La Gran Barrera de Coral, el arrecife de coral más grande del mundo, se encuentra a una corta distancia de la costa noreste y se extiende durante 1.200 km de Norte a Sur. El Monte Augustus, situado en Australia Occidental, es el monolito más grande del mundo.
                El Gran Pozo Artesiano, una importante fuente de agua, es la mayor y más profunda cuenca de agua potable del mundo. Australia sufre de cierta escasez de agua, que ha llegado a que algunas ciudades y pueblos a todo lo largo del país hayan tenido que enfrentarse a serios problemas de acumulación y uso del agua, llegando a imponer restricciones sobre su uso para disminuir el consumo.
                Los principales recursos naturales son: bauxita, carbón, hierro, cobre, estaño, oro, plata, uranio, niquel, tungsteno, plomo, zinc, diamantes, gas natural y petróleo.
                ",
                "assets/fscommand/aus1.jpg",
                "assets/fscommand/aus2.jpg",
                "assets/fscommand/aus3.jpg",
                "assets/fscommand/aus4.jpg"
            ],
            [8, "Nueva Zelanda", 666, 399, 123,
                'Nueva Zelanda<br><br>Capital:	Wellington<br>
                Idioma:	inglés, maorí<br>
                Superficie:	268.680 km_<br>
                Población:	4.072.000<br>
                Densidad:	15 hab./km_<br>
                Moneda:	dólar neozelandés<br>
                Tipo de gobierno:	monarquía constitucional<br>
                Nueva Zelanda es un país de Oceanía formado por dos grandes islas, la Isla Norte y la Isla Sur, junto a otras islas menores. Sus nombres oficiales son New Zealand en inglés y Aotearoa en maorí. Limita al norte y al este con el Pacífico Sur, al oeste con el Mar de Tasmania y al sur con el Océano del Sur. La Isla del Norte es la que tiene más población y constituye el núcleo de las actividades comerciales y de negocios, además de volcanes hay abundantes aguas termales y géiseres, mientras que la Isla del Sur es más rica en majestuosos paisajes y parques naturales es la mayor y se encuentra dividida de noreste a suroeste por los Alpes Meridionales (o Alpes Neozelandeses), con su mayor altura en el Monte Cook de 3.754 metros. La ciudad principal es Auckland y la capital es Wellington.
                Está organizada en 13 regiones, los cuales a su vez se subdividen en 95 distritos y 4 distritos maoríes. La isla Norte se encuentra separada de la Sur por el estrecho de Cook y numerosos islotes. Las otras islas tienen menos área y población. Las más importantes son: Stewart, Waiheke, Gran Barrera,  y Chatham. 
                El clima es templado y húmedo, con una temperatura promedio de 12 ºC. El extremo norte tiene un clima subtropical mientras que el invierno del sur suele ser riguroso. Wellington sufre de unos de los vientos más fuertes del mundo y también hay muchos terremotos; la ciudad fue casi totalmente destruida por terremotos en 1848 y 1855.
                ',
                "assets/fscommand/zel1.jpg",
                "assets/fscommand/zel2.jpg",
                "assets/fscommand/zel3.jpg",
                "assets/fscommand/zel4.jpg"
            ],

            [9, "Nueva Caledonia", 692, 231, 40,
                'Nueva Caledonia<br><br>Capital:	Numea<br>
                Idioma:	Francés<br>
                Superficie:	19.060 km_<br>
                Población:	232.258<br>
                Densidad:	12.5 hab./km_<br>
                Moneda:	Franco CFP<br>
                Tipo de gobierno:	País de ultramar<br>
                Nueva Caledonia es un país de ultramar en Oceanía que forma parte de la República Francesa, y por tanto a la Unión Europea. Está localizada en el suroeste del Océano Pacífico a unos 1.200 km al este de Australia y 1.500 km al noreste de Nueva Zelanda.
                Se compone de una isla principal, Grande Terre, y varias islas más pequeñas como el Archipiélago de Belep al norte, las islas de la Lealtad al este, la Isla de Los Pinos al sur y las Islas Chesterfield y Bellona al oeste. Grande Terre es por mucho la isla más grande, y la única con montañas. Tiene una forma alargada de noroeste a sureste, midiendo 350 km de largo por 50-70 km de ancho. Una cadena montañosa corre a lo largo de la isla y cuenta con cinco picos de más de 1.500 m.
                En un antiguo fragmento del supercontinente. Gondwana, Nueva Caledonia y Nueva Zelanda se separaron de Australia hace 85 millones de años. Las islas aún conservan flora y fauna que tuvo su origen en Gondwana. La especie mejor conocida es el cagu o cagou, un ave del tamaño de una gallina e incapaz de volar, con una larga cresta y un gracioso cacareo. El árbol niaouli, que también crece en Australia y Nueva Zelanda es de interés médico ya que es utilizada para combatir resfriados. Antes de la llegada de los europeos, el único mamífero existente en la isla era el roussette (zorro volador), un enorme murciélago vegetariano, el cual es una delicia para los habitantes locales.
                Las islas formas dos ecoregiones, el bosque lluvioso de Nueva Caledonia en las Islas de la Lealtad, Isla de los Pinos y la parte oriental de Grande Terre y el bosque seco de Nueva Caledonia en la parte occidental de Grande Terre. 
                Numea es la capital y principal puerto de Nueva Caledonia. Es la mayor ciudad de habla francesa en el Océano Pacífico y tiene un ambiente cosmopolita. Hay numerosos hoteles para turistas en una península al sur del centro de la ciudad, mientras que en el distrito norte están las grandes fundidoras que procesan el níquel de Nueva Caledonia.
                ',
                "assets/fscommand/zel1.jpg",
                "assets/fscommand/zel2.jpg",
                "assets/fscommand/zel3.jpg",
                "assets/fscommand/zel4.jpg"
            ],
            [10, "Fiji", 734, 187, 30,
                'Fiji<br><br>Capital:	Suva
                Idioma:	Inglés<br>
                Superficie:	18.270 km_<br>
                Población:	893.354<br>
                Densidad:	47 hab./km_<br>
                Moneda:	Dólar fijiano<br>
                Tipo de gobierno:	República<br>
                Fiji es un país insular situado en el sur del Océano Pacífico, al este de Vanuatu, oeste de Tonga y al sur de Tuvalu. Para ser un país de su tamaño, Fiji tiene fuerzas armadas excepcionalmente capaces, y ha sido uno de los países que más han colaborado en las misiones de paz que la ONU ha organizado en diversas partes del mundo. Lema nacional: Miedo a Dios y honor a la Reina
                Está dividida en cuatro divisiones administrativas: División Central, División Oriental, División Occidental y División Norte 
                Consiste en 322 islas, de las cuales alrededor de un tercio no están habitadas. Las dos islas más importantes son Viti Levu y Vanua Levu. En Viti Levu está la capital Suva, que alberga a tres cuartos de la población total del país. Las islas son montañosas, con picos de hasta 1.200 metros, y con bosque trópical. Otras ciudades importantes son Savusavu y Lautoka. Otras islas importantes de Fiji son Taveuni, Kadavu (la tercera y cuarta isla en tamaño respectivamente) y Rotuma a quinientos kilómetros al norte del archipiélago.
                Dotado con recursos forestales, minerales y pesqueros es una de las islas con una economía más desarrollada del Pacífico. Las principales fuentes de divisas para el país son las exportaciones de azúcar y la creciente industria turística 
                Debido a su diversidad étnica y religiosa. La cultura del país es el resultado de un mosaico entre las tradiciones indígena, india y europea. La cultura de los nativos tiene características entre melanesias y polinesias, aunque experimento cambios debido a la cristianización. El deporte preferido en el país es el Rugby 
                ',
                "assets/fscommand/zel1.jpg",
                "assets/fscommand/zel2.jpg",
                "assets/fscommand/zel3.jpg",
                "assets/fscommand/zel4.jpg"
            ],
             [11, "Samoa Occidental", 758, 140, 22,
                'Samoa<br><br>Capital:	Apia
                Idioma:	Samoano e inglés
                Superficie:	2.944 km_
                Población:	177.714
                Densidad:	60 hab./km_
                Moneda:	Tala 
                Tipo de gobierno:	Monarquía
                Samoa es un país que comprende un grupo de islas perteneciente al archipiélago de la Polinesia al sur del Pacífico. Se encuentra al este de la línea internacional de cambio de fecha y al sur del ecuador, aproximadamente a mitad de camino entre Hawai y Nueva Zelanda. Las islas son de origen volcánico, y el 96 % del territorio lo componen las dos grandes islas de Upolu y Savai\'i, el resto se distrubuye entre ocho pequeños islotes: Manono, Apolima, Nuutele, Nuulua, Namua, Fanuatapu, Nuusafee y Nuulopa. En Upolu 
                El clima de es tropical, con una temperatura media anual de 26.5 °C, y una estación lluviosa de noviembre a abril. La cumbre más alta se sitúa en Savai\'i, y se denomina Silisili con 1.858 metros. La economía se basa en  la agricultura, siendo la actividad más importante la exportación de copra. El Lema nacional es: Samoa se apoya en Dios
                ',
                "assets/fscommand/zel1.jpg",
                "assets/fscommand/zel2.jpg",
                "assets/fscommand/zel3.jpg",
                "assets/fscommand/zel4.jpg"
            ],
            [12, "Vanuatu", 679, 140, 41,
                '',
                "assets/fscommand/zel1.jpg",
                "assets/fscommand/zel2.jpg",
                "assets/fscommand/zel3.jpg",
                "assets/fscommand/zel4.jpg"
            ],
            [13, "Tuvalu", 732, 94, 16,
                'Tuvalu<br><br>Capital:	Funafuti<br>
                Idioma:	tuvaluano e inglés<br>
                Superficie:	26 km_<br>
                Población:	11.636<br>
                Densidad:	441/km_<br>
                Moneda:	Dólar australiano<br>
                Tipo de gobierno:	Monarquía constitucional<br>
                Tuvalu es una isla-nación. Conjunto de nueve atolones coralinos habitados por polinesios en el Océano Pacífico. Después del Vaticano es la nación independiente con menor número de habitantes. Debido a su baja elevación, las islas que constituyen esta nación son amenazadas por cualquier futuro aumento del nivel del mar. La población puede evacuar durante las próximas décadas a Nueva Zelanda, o Niue, una pequeña isla del Pacífico que no es amenazada por aumento del nivel del mar, pero tiene una baja tasa de natalidad.
                Siendo uno el cuarto país más pequeño en el mundo, también tiene tierras muy pobres. No hay agua potable, y la tierra es escasamente utilizable para la agricultura. El  Lema nacional: Tuvalu para el Todopoderoso
                Aunque no tiene ninguna subdivisión, el país puede ser dividido en 9 islas, o más bien atolones, a mitad del camino entre Hawaii y Australia. Originalmente, sólo ocho de estas islas estaban habitadas, de ahí el nombre Tuvalu que quiere decir "ocho islas" en idioma tuvaluano. Las nueve islas son: Funafuti, Nanumea, Nanumaga, Niutao, Nui, Niulakita, Nukufetau, Nukulaelae y Vaitupu 
                En el 2001 el gobierno de Tuvalu anunció que las islas, de las cuales el punto más elevado es de 5 msnm, tendrían que ser evacuadas en caso de aumento del nivel del océano. Nueva Zelanda ha aceptado recibir un contingente anual de 75 evacuados, mientras que Australia rechazó las peticiones.
                ',
                "assets/fscommand/zel1.jpg",
                "assets/fscommand/zel2.jpg",
                "assets/fscommand/zel3.jpg",
                "assets/fscommand/zel4.jpg"
            ],
            [14, "Islas Salomón", 622, 53, 94,
                'CAJAMARCA<br><br>Capital:	Honiara<br>
                Idioma:	Inglés<br>
                Superficie:	28.450 km_<br>
                Población:	538.032<br>
                Densidad:	17 hab./km_<br>
                Moneda:	Dólar de las Islas Salomón<br>
                Tipo de gobierno:	Democracia parlamentaria<br>
                Islas Salomón, es un país de Oceanía que forma parte de la Mancomunidad Británica de Naciones (MBN).<br>
                Su territorio esta formado por un archipiélago constituido por más de 990 islas pertenecientes a la Melanesia. Situado al sudoeste del océano Pacífico, al este de Papúa Nueva Guinea. Las islas principales son: Choiseul, las islas de Nueva Georgia, Santa Isabel, las islas de Russel, las islas Florida, Malaita, Guadalcanal, Sikaiana, Maramasike, Ulawa, Uki, San Cristóbal, Santa Ana, Rennell, Bellona y las islas Santa Cruz. La distancia entre las islas más occidentales y las más orientales es de cerca de 1 500 kilómetros. Las Islas se dividen en 9 provincias: Central, Choiseul (Lauru), Guadalcanal, Isabel, Makira, Malaita, Rennell y Bellona, Temotu y Occidental y un territorio capital. Honiara
                Las islas Santa Cruz, al norte de Vanuatu están particularmente aisladas, a más de 200 kilómetros de las otras islas. Los volcanes, de grados variables de actividad, están situados en algunas de las islas más grandes, mientras que varias de las islas más pequeñas simplemente son atolones minúsculos cubiertos de arena y cocoteros.
                ',
                "assets/fscommand/zel1.jpg",
                "assets/fscommand/zel2.jpg",
                "assets/fscommand/zel3.jpg",
                "assets/fscommand/zel4.jpg"
            ],
            

            
            
        ];
        $cityAry = [
            [0, "", 0, 0, 0],
            [1, "Camberra", 528, 384, 18],
            [2, "Wellington", 755, 442, 18],


        ];
        //#### $riverAry[ idNum, name, x, y, w] ####//
        $riverAry = [
            [0, 0, 0],
            [1, "Río Fitzroy", 240, 101, 51],
            [3, "Río Ord", 295, 106, 12],
            [5, "Río Victoria", 307, 101, 15],
            [7, "Río Daly", 317, 74, 44],
            [9, "Río Roper", 349, 112, 42],
            [11, "Río Mackay", 309, 215, 13],
            [13, "Lago Ballard", 225, 335, 15],
            [15, "Lago Eyre", 428, 261, 23],
            [17, "Lago Frome", 436, 312, 13],
            [19, "Río Darling", 490, 289, 113],
            [21, "Río Murray", 423, 366, 122],

            
        ];
        $mountAry = [

            [0, ""],
            [1, "Planicie Kimberley", 230, 104, 57],
            [2, "Gran Cordillera Divisoria", 475, 98, 108],
            [3, "Montes Pónticos", 679, 505, 55],
            [4, "Montes Zagros", 239, 327, 150],
            [5, "Monte Kosciousko", 506, 417, 29],


        ];

        $songAry = [
            [0, "", 0, 0, 0, 0],
            [1, "Pinturas Rupestres", 227, 184, 20, 2, "assets/fscommand/lugares/belen.JPG"],
            [2, "Rosa Ayers", 334, 215, 20, 2, "assets/fscommand/lugares/banios.JPG"],
            [3, "Roca Ola", 198, 330, 20, 2, "assets/fscommand/lugares/huascaran.JPG"],  
            [4, "Puerto de Sydney", 556, 326, 20, 2, "assets/fscommand/lugares/huascaran.JPG"], 
            [5, "Melbourne", 504, 396, 20, 2, "assets/fscommand/lugares/huascaran.JPG"],  
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
        [2,3], //1
        [1,3,4], //2
        [1,2,4,5,6], //3
        [2,3,5],//4
        [3,4,6],//5
        [3,5],//6
        [6,8],//7
        [7,9],//8
        [8,10,12],//9
        [9,11,12],//10
        [10,11,13],//11
        [9,10,11,13],//12
        [11,12,14],//13
        [12,13],//14        
        
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
        getObj(("fs_") + sel).src = "assets/fortresssel.png";
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
                            <img src="assets/minmap.png" style="position: absolute;left: -137px;top: -13px;width: 530px; display: none;" id="minmap">
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
                        <img id="i_1" src="assets/item14.png" width="30px" style="position: absolute;left: 529px;top: 106px;" onmouseover="infoiover(14, 1)" onmouseout="infoitout(14, 1)" title="Pesca" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_2" src="assets/item14.png" width="30px" style="position: absolute;left: 100px;top: 300px;" onmouseover="infoiover(14, 2)" onmouseout="infoitout(14, 2)" title="Pesca" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_3" src="assets/item14.png" width="30px" style="position: absolute;left: 562px;top: 373px;" onmouseover="infoiover(14, 2)" onmouseout="infoitout(14, 2)" title="Pesca" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_4" src="assets/item13.png" width="40px" style="position: absolute;left: 335px;top: 71px;" onmouseover="infoiover(13, 4)" onmouseout="infoitout(13, 4)" title="Ganado Bovino" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_5" src="assets/item13.png" width="40px" style="position: absolute;left: 249px;top: 101px;" onmouseover="infoiover(13, 5)" onmouseout="infoitout(13, 5)" title="Ganado Bovino" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_6" src="assets/item13.png" width="40px" style="position: absolute;left: 150px;top: 292px;" onmouseover="infoiover(13, 6)" onmouseout="infoitout(13, 6)" title="Ganado Bovino" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_7" src="assets/item13.png" width="40px" style="position: absolute;left: 308px;top: 317px;" onmouseover="infoiover(13, 7)" onmouseout="infoitout(13, 7)" title="Ganado Bovino" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_8" src="assets/item13.png" width="40px" style="position: absolute;left: 478px;top: 272px;" onmouseover="infoiover(13, 8)" onmouseout="infoitout(13, 8)" title="Ganado Bovino" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_9" src="assets/item13.png" width="40px" style="position: absolute;left: 668px;top: 532px;" onmouseover="infoiover(13, 9)" onmouseout="infoitout(13, 9)" title="Ganado Bovino" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_10" src="assets/item11.png" width="30px" style="position: absolute;left: 211px;top: 175px;" onmouseover="infoiover(11, 10)" onmouseout="infoitout(11, 10)" title="Minería" onmouseup="handleIconMoveUp(20)" onmousedown="handleIconMoveDown(event,20)" ondragstart="return false;">
                        <img id="i_11" src="assets/item11.png" width="30px" style="position: absolute;left: 376px;top: 136px;" onmouseover="infoiover(11, 11)" onmouseout="infoitout(11, 11)" title="Minería" onmouseup="handleIconMoveUp(20)" onmousedown="handleIconMoveDown(event,20)" ondragstart="return false;">
                        <img id="i_12" src="assets/item11.png" width="30px" style="position: absolute;left: 376px;top: 312px;" onmouseover="infoiover(11, 12)" onmouseout="infoitout(11, 12)" title="Minería" onmouseup="handleIconMoveUp(20)" onmousedown="handleIconMoveDown(event,20)" ondragstart="return false;">
                        <img id="i_13" src="assets/item11.png" width="30px" style="position: absolute;left: 138px;top: 249px;" onmouseover="infoiover(11, 13)" onmouseout="infoitout(11, 13)" title="Minería" onmouseup="handleIconMoveUp(20)" onmousedown="handleIconMoveDown(event,20)" ondragstart="return false;">
                        <img id="i_14" src="assets/item11.png" width="30px" style="position: absolute;left: 472px;top: 347px;" onmouseover="infoiover(11, 14)" onmouseout="infoitout(11, 14)" title="Minería" onmouseup="handleIconMoveUp(20)" onmousedown="handleIconMoveDown(event,20)" ondragstart="return false;">
                        <img id="i_15" src="assets/item11.png" width="30px" style="position: absolute;left: 745px;top: 430px;" onmouseover="infoiover(11, 15)" onmouseout="infoitout(11, 15)" title="Minería" onmouseup="handleIconMoveUp(20)" onmousedown="handleIconMoveDown(event,20)" ondragstart="return false;">
                        <img id="i_16" src="assets/item11.png" width="30px" style="position: absolute;left: 716px;top: 480px;" onmouseover="infoiover(11, 16)" onmouseout="infoitout(11, 16)" title="Minería" onmouseup="handleIconMoveUp(20)" onmousedown="handleIconMoveDown(event,20)" ondragstart="return false;">
                        <img id="i_17" src="assets/item11.png" width="30px" style="position: absolute;left: 193px;top: 321px;" onmouseover="infoiover(11, 17)" onmouseout="infoitout(11, 17)" title="Minería" onmouseup="handleIconMoveUp(20)" onmousedown="handleIconMoveDown(event,20)" ondragstart="return false;">
                        <img id="i_18" src="assets/item95.png" width="30px" style="position: absolute;left: 251px;top: 224px;" onmouseover="infoiover(95, 18)" onmouseout="infoitout(95, 18)" title="Víbora" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_19" src="assets/item84.png" width="40px" style="position: absolute;left: 546px;top: 403px;" onmouseover="infoiover(84, 19)" onmouseout="infoitout(84, 19)" title="Petróleo" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_20" src="assets/item84.png" width="40px" style="position: absolute;left: 688px;top: 417px;" onmouseover="infoiover(84, 20)" onmouseout="infoitout(84, 20)" title="Petróleo" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_21" src="assets/item20.png" width="30px" style="position: absolute;left: 508px;top: 411px;" onmouseover="infoiover(20, 21)" onmouseout="infoitout(20, 21)" title="Automotríz" onmouseup="handleIconMoveUp(36)" onmousedown="handleIconMoveDown(event,36)" ondragstart="return false;">
                        <img id="i_22" src="assets/item139.png" width="30px" style="position: absolute;left: 428px;top: 200px;" onmouseover="infoiover(139, 22)" onmouseout="infoitout(139, 22)" title="Automotríz" onmouseup="handleIconMoveUp(36)" onmousedown="handleIconMoveDown(event,36)" ondragstart="return false;">
                        <img id="i_23" src="assets/item138.png" width="30px" style="position: absolute;left: 232px;top: 346px;" onmouseover="infoiover(138, 23)" onmouseout="infoitout(138, 23)" title="Automotríz" onmouseup="handleIconMoveUp(36)" onmousedown="handleIconMoveDown(event,36)" ondragstart="return false;">
                        <img id="i_24" src="assets/item126.png" width="36px" style="position: absolute;left: 622px;top: 537px;" onmouseover="infoiover(126, 24)" onmouseout="infoitout(126, 24)" title="Ballena Franca" onmouseup="handleIconMoveUp(31)" onmousedown="handleIconMoveDown(event,31)" ondragstart="return false;">
                        <img id="i_25" src="assets/item126.png" width="36px" style="position: absolute;left: 661px;top: 401px;" onmouseover="infoiover(126, 25)" onmouseout="infoitout(126, 25)" title="Ballena Franca" onmouseup="handleIconMoveUp(31)" onmousedown="handleIconMoveDown(event,31)" ondragstart="return false;">
                        <img id="i_30" src="assets/item126.png" width="30px" style="position: absolute;left: 615px;top: 229px;" onmouseover="infoiover(126, 30)" onmouseout="infoitout(126, 30)" title="Delfín" onmouseup="handleIconMoveUp(29)" onmousedown="handleIconMoveDown(event,29)" ondragstart="return false;">
                        <img id="i_31" src="assets/item126.png" width="30px" style="position: absolute;left: 676px;top: 502px;" onmouseover="infoiover(126, 31)" onmouseout="infoitout(126, 31)" title="Delfín" onmouseup="handleIconMoveUp(29)" onmousedown="handleIconMoveDown(event,29)" ondragstart="return false;">
                        <img id="i_32" src="assets/item126.png" width="30px" style="position: absolute;left: 72px;top: 244px;" onmouseover="infoiover(126, 32)" onmouseout="infoitout(126, 32)" title="Delfín" onmouseup="handleIconMoveUp(32)" onmousedown="handleIconMoveDown(event,32)" ondragstart="return false;">
                        <img id="i_33" src="assets/item140.png" width="30px" style="position: absolute;left: 484px;top: 490px;" onmouseover="infoiover(140, 33)" onmouseout="infoitout(140, 33)" title="Demonio de Tasmanía" onmouseup="handleIconMoveUp(33)" onmousedown="handleIconMoveDown(event,33)" ondragstart="return false;">
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
            <div style=" writing-mode: vertical-rl; text-orientation: downright; transform: rotate(180deg); font-size:72px; color:#FFF; 
             border-radius: 10px;  height:380px">
                Australia
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
