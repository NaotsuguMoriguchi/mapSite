<html>

<head>
    <meta charset="utf-8" />
    <title> Sur de Africa</title>

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
            [1, "Sudáfrica", 359, 422, 179, 
                "Sudáfrica<br><br>Capital:	<br>
                Idioma:	Afrikaans, inglés, ndebele, sesotho, sesotho sa Leboa, swazi, tsonga, tswana, venda, xhosa y zulú.<br>
                Superficie:	1.219.080 km_<br>
                Población:	43.647.658 hab<br>
                Densidad:	<br>
                Moneda:	Rand (ZAR<br>
                Tipo de gobierno:	República<br>
                Sudáfrica es un país ubicado en el extremo meridional de África. Limita con los estados de Namibia, Botsuana, Zimbabwe, Mozambique y Swazilandia. Sus capitales son Pretoria (administrativa), Bloemfontein (judicial) y Ciudad del Cabo (legislativa). Se encuentra dividida en nueve provincias: Cabo del Norte, Cabo Occidental, Cabo Oriental, Estado Libre, Gauteng, KwaZulu-Natal, Mpumalanga, Noroeste y Limpopo.
                Ciudad del Cabo es una de las tres capitales de Sudáfrica (junto con Pretoria y Bloemfontein), y capital de la provincia del Cabo Occidental. Es, para muchos, la más hermosa ciudad del país. Prueba de ello son los millares de turistas que recibe anualmente.
                En Robben Island (isla de las focas), una isla muy cercana a Ciudad del Cabo, estuvo preso por largo tiempo, el líder del movimiento anti-apartheid y Premio Nobel de la Paz, Nelson Mandela.
                Es el primer estado y hasta ahora el único que construyó sus armas nucleares y después desmanteló totalmente su programa.
                ",
                "assets/fscommand/sud1.jpg",
                "assets/fscommand/sud2.jpg",
                "assets/fscommand/sud3.jpg",
                "assets/fscommand/sud4.jpg"
            ],
            [2, "Namibia", 294, 370, 157,
                'Namibia<br><br>Capital:	Windhoek
                Idioma:	alemán o afrikaans
                Superficie:	
                Población:	
                Densidad:	
                Moneda:	
                Tipo de gobierno:	República
                Namibia es un país del sudoeste de África que ocupa el territorio de lo que fue conocido hasta la década de 1960 como África del Sudoeste, limitando al norte con Angola, al noreste con Zambia, al oeste con el océano Atlántico, al este con Botswana, y al sudeste y al sur con Sudáfrica.
                Está dividida en 13 regiones: Caprivi, Erongo, Hardap, Karas, Kavango, Khomas, Kunene, Ohangwena, Omaheke, Omusati, Oshana, Oshikoto y Otjozondjupa.
                Se localiza en una zona desértica dominada por el desierto del Namib, que le da su nombre al país, y salvo la zona norte del país, es un lugar seco y desértico con escasa precipitación pluvial.
                La economía tradicionalmente ha dependido de la minería, principalmente explotando diamantes y uranio. En años recientes el turismo se ha vuelto mucho más importante dada la belleza natural del país y la interesante fauna nativa, tradicionalmente africana, pero en un ambiente diferente al comúnmente asociado con la sabana africana.
                ',
                "assets/fscommand/nam1.jpg",
                "assets/fscommand/nam2.jpg",
                "assets/fscommand/nam3.jpg",
                "assets/fscommand/nam4.jpg"
            ],
            [4, "Madagascar", 651, 295, 88,
                '',
                "assets/fscommand/mada1.jpg",
                "assets/fscommand/mada2.jpg",
                "assets/fscommand/mada3.jpg",
                "assets/fscommand/mada4.jpg"
            ],
            [3, "Lezoto", 476, 499, 25,
                'Lezoto<br><br>180,000 hab.<br>
                Idioma:  sesotho, ingles<br>
                Monarquía parlamentaria<br>
                Moneda: Loti lesothense<br>
                Lesotho es un país del sur de África, rodeado enteramente por la República de Sudáfrica. Anteriormente conocido bajo el nombre de Basutolandia. El nombre del país puede traducirse por «el país de los que hablan sotho».  Es un país con un gran número de montañas  en el Norte se encuentra la cordillera de las Maloti, y al Sureste, las Drakensberg. Lesotho, con una altura de más de 1.000 metros sobre el nivel del mar en su punto más bajo, tiene la cota inferior más alta del mundo. Las particularidades geográficas de este país, y su cercanía a Sudáfrica (país al cual exporta agua potable), han hecho posible el desarrollo de proyectos hidroeléctricos de considerable magnitud. El himno nacional de Lesoto es "Lesotho Fat_e La Bo-ntata Rona", cuya traducción literal es "Lesoto, Tierra de Nuestros Padres". La Universidad Nacional de Lesotho se encuentra cerca de la ciudad, en un pueblo llamado Roma, y también existe un aeropuerto internacional en las cercanías, en Thoteng-ea-Moli.
                ',
                "assets/fscommand/lez1.jpg",
                "assets/fscommand/lez2.jpg",
                "assets/fscommand/lez3.jpg",
                "assets/fscommand/lez4.jpg"
            ],
            [5, "Botswana", 391, 376, 111,
                'Botswana<br><br>Capital:	Gaborone<br>
                Idioma:	Inglés<br>
                Superficie:	600.370 km_<br>
                Población:	1.640.115<br>
                Densidad:	<br>
                Moneda:	Pula<br>
                Tipo de gobierno:	República parlamentaria<br>
                Botswana es una nación del sur de África. Limita al norte con Zambia, al este con Zimbawe, al sur con Sudáfrica y al oeste y al norte con Namibia. El país está dominado en gran medida por el desierto del Kalahari, que domina en especial el norte Está subdividida en distritos, a su vez subdivididos indistintamente en municipios y distritos administrativos. Actualmente, Botswana cuenta con 8 distritos:  Central, Ghanzi, Kgalagadi, Kgatleng, Kweneng, Noreste, Sureste y Meridional.y el oeste del país. 
                La mayoría de la población es del grupo Tswan. Se cree que uno de cada cuatro adultos es portador del SIDA, lo que ha convertido al país en el de menor esperanza de vida (30 años), cuando hace 10 años la esperanza de vida era muy diferente (60 años). La alfabetización es  del 77%.
                La ganadería y la minería dominan su economía, estrechamente atada a Sudáfrica. Su principal fuente de desarrollo industrial son las  minas de asbesto y manganeso
                En la capital se encuentra la sede de la Comunidad Sudafricana para el Desarrollo; la organización fue fundada en 1980 con el objetivo de incrementar la cooperación económica de sus miembros y reducir la dependencia de Sudáfrica. se encuentra también la Universidad de Botsuana y posee un aeropuerto internacional.
                ',
                "assets/fscommand/bots1.jpg",
                "assets/fscommand/bots2.jpg",
                "assets/fscommand/bots3.jpg",
                "assets/fscommand/bots4.jpg"
            ],
            
            [7, "Mozambique", 502, 276, 132,
                'Mozambique<br><br>Capital:	Maputo
                Idioma:	Portugués<br>
                Superficie:	799.380 km_<br>
                Población:	19.406.703<br>
                Densidad:	24,28 hab./km_<br>
                Moneda:	Metical<br>
                Tipo de gobierno:	República<br>
                Mozambique se encuentra situado al este de África, a orillas del océano Índico. Limita al norte con Tanzania y Malawi, al noroeste con Zambia, al oeste con Zimbabwe, al suroeste con Swazilandia, al sur y al suroeste con Sudáfrica y al este con el océano Índico. Es miembro de Comunidad de Países de Lengua Portuguesa y de la Mancomunidad Británica de Naciones.
                Está dividida en 11 provincias: Cabo Delgado, Gaza, Inhambane, Manica, Maputo (ciudad), Maputo (provincia), Nampula, Niassa, Sofala, Tete y Zambezia.
                El país e localiza en la costa este de África, en la mayor planicie costera del continente (la mitad del territorio del país se encuentra a 230 m sobre el nivel del mar). La cadena montañosa conocida como Inyanga se localiza al oeste del país, alcanzando su máxima altura en 2500 m. Las mayores elevaciones montañosas se encuentran cerca de Zimbabwe, Zambia y Malawi.
                Las costas son muy irregulares, estando cubiertas por grandes pantanos. Sus playas son excelentes para el turismo, gracias a su fina arena blanca y aguas cristalinas. Otro reclamo turístico es su bajo precio, sobre todo el del pescado fresco, de gran calidad.
                ',
                "assets/fscommand/moza1.jpg",
                "assets/fscommand/moza2.jpg",
                "assets/fscommand/moza3.jpg",
                "assets/fscommand/moza4.jpg"
            ],
            [6, "Swazilandia", 515, 465, 16,
                "",
                "assets/fscommand/swa1.jpg",
                "assets/fscommand/swa2.jpg",
                "assets/fscommand/swa3.jpg",
                "assets/fscommand/swa4.jpg"
            ],
            [8, "Zimbawe", 446, 345, 97,
                'Zimbawe<br><br>Capital:	Harare<br>
                Idioma:	Inglés, Shona, Ndbele<br>
                Superficie:	390.580 km_<br>
                Población:	12160.172 hab<br>
                Densidad:	<br>
                Moneda:	Dólar zimbabuense<br>
                Tipo de gobierno:	República presidencialista<br>
                Zimbabwe es un país localizado en la parte sur del continente africano, entre el río Zambeze, las cataratas Victoria y el río Limpopo. Carece de costas, limita al oeste con Botswana, al norte con Zambia, al sur con Sudáfrica y Mozambique al este. Parte de sus territorios se corresponden con la antigua Rhodesia.
                Está subdividida en 8 provincias y dos ciudades con rango provincial: Bulawayo (ciudad), Harare (ciudad), Manicalandia, Mashonalandia Central, Mashonalandia Oriental, Mashonalandia Occidental, Masvingo, Matabelelandia Septentrional, Matabelelandia Meridional y Midlands.
                En el país se puede encontrar una de las escasas grandes construcciones antiguas hechas por nativos en el África negra, se trata de la ciudadela del Gran Zimbabwe que da nombre al país, posee minas de oro.
                ',
                "assets/fscommand/zim1.jpg",
                "assets/fscommand/zim2.jpg",
                "assets/fscommand/zim3.jpg",
                "assets/fscommand/zim4.jpg"
            ],

            [9, "Angola", 289, 240, 147,
                'LA LIBERTAD<br><br>Capital:	Luanda<br>
                Idioma:	Portugués y lingala<br>
                Superficie:	1.246.700 km_<br>
                Población:	10.978.552<br>
                Densidad:	9 hab./km_<br>
                Moneda:	Kwanza
                Tipo de gobierno:	República presidencialista<br>
                Angola es un país del suroeste de África que tiene fronteras con Namibia, la República Democrática del Congo, Zambia, y el Océano Atlántico. Es una antigua colonia portuguesa, que tiene recursos naturales considerables, entre los que se destacan el petróleo y los diamantes. 
                El nombre del país es una derivación portuguesa de la palabra bantú Ngola, que hace referencia al título de los jefes nativos de esa región en el Siglo XVI, en el tiempo de la colonización portuguesa.
                Está dividida en 18 provincias: Bengo, Benguela, Bié, Cabinda, Cuando Cubango, Cuanza Norte, Cuanza Sul, Cunene, Huambo, Huila, Luanda, Lunda Norte, Lunda Sul, Malanje, Moxico, Namibe, Uige y Zaire. Sus ciudades principales son : Lubango, Namibe,Huambo (Nova Lisboa), Lobito, Benguela.
                Tiene una economía que se encuentra en el desorden debido a un cuarto de siglo de guerra casi continua. A pesar de sus recursos naturales abundantes, está entre las más bajas del mundo.
                La agricultura de subsistencia proporciona el sustento principal para el 85% de la población. La producción petrolífera es vital para la economía, mejora las perspectivas, pero la lucha interna desalienta la inversión externa en el sector de petrolífero. No obstante a pesar de haber firmado un acuerdo de paz en noviembre de 1994, la violencia sigue, millones de minas permanecen enterradas en las tierras, por lo que muchos granjeros están poco dispuestos a volver a sus campos. Por consiguiente, la mayor parte del alimento del país todavía debe ser importado. 
                ',
                "assets/fscommand/ango1.jpg",
                "assets/fscommand/ango2.jpg",
                "assets/fscommand/ango3.jpg",
                "assets/fscommand/ango4.jpg"
            ],
            [10, "Zambia", 410, 256, 141,
                'Zambia<br><br>Capital:	<br>
                Idioma:	Inglés<br>
                Superficie:	752.614 km_<br>
                Población:	9.582.418<br>
                Densidad:	13 hab./km_<br>
                Moneda:	Kwacha zambiano<br>
                Tipo de gobierno:	República presidencialista<br>
                Zambia es un estado sin salida al mar en el centro-sur del continente africano. Limita al norte con la República Democrática del Congo, al noreste Tanzania, al este Malawi,  al sur Mozambique, Zimbabwe, Botsuana y Namibia, y al oeste Angola.
                El nombre de Zambia se debe al río Zambeze. Se divide en nueve provincias, cada una administrada por un vice-ministro designado que realizan esencialmente las funciones de un gobernador. Las 9 provincias son: Provincia Central (Kabwe), Provincia de Copperbelt (Ndola),  Provincia Oriental (Chipata), Provincia de Luapula (Mansa), Provincia de Lusaka (Lusaka), Provincia del Norte (Kasama), Provincia del Noroeste (Solwezi), Provincia del Sur (Livingstone), Provincia Occidental (Mongu). 
                El territorio es fundamentalmente montañoso y presenta numerosas depresiones y hundimientos tectónicos. El punto más alto se encuentra en las montañas Mafinga a 2.301 metros y el más bajo a 329 m en el río Zambeze que da nombre al país. La altitud media no supera los 1.500 m, y las depresiones son frecuentemente de carácter pantanoso, y están ocupadas por ríos como el Kafue, afluente del Zambeze, o por lagos, como el Bangüelo (Bangweulu), Moero (Mweru), y Kariba. En el este del país, y en dirección noreste-suroeste, se extienden los montes Muchinga, que se elevan hasta los 2.164 m (monte Myika). Predominan la sabana y la selva.
                ',
                "assets/fscommand/zam1.jpg",
                "assets/fscommand/zam2.jpg",
                "assets/fscommand/zam3.jpg",
                "assets/fscommand/zam4.jpg"
            ],
             [11, "Tanzania", 496, 169, 132,
                'Tanzania<br><br>Capital:	Dodoma<br>
                Idioma:	Swahili<br>
                Superficie:	948.087 km_<br>
                Población:	37.445.392<br>
                Densidad:	39 hab./km_<br>
                Moneda:	Chelín tanzano<br>
                Tipo de gobierno:	República<br>
                Tanzania es un país situado en la costa este de África Central. Limita al norte con Kenia y Uganda, al oeste con Ruanda, Burundi, la República Democrática del Congo, al sur con Zambia, Malawi y Mozambique y al este con el Océano Índico. El país comprende el territorio de Tanganica y las islas de Zanzíbar, Pemba y Mafia. Se Divide administrativamente en 25 regiones. Al suroeste se encuentra la meseta de Ufipa, la cordillera de Mbeya y las montañas de Rungwe. Entre la costa y la meseta Masai están los montes Ukaguru y Nguru. Cerca de la costa se hallan las montañas de Usambara y el Kilimanjaro (5895 m), el pico más elevado del continente
                Su economía se basa en la producción de café, algodón, sisal, té y diamantes. Lema nacional: Libertad y Unidad
                ',
                "assets/fscommand/tanz1.jpg",
                "assets/fscommand/tanz2.jpg",
                "assets/fscommand/tanz3.jpg",
                "assets/fscommand/tanz4.jpg"
            ],
            [12, "Malawi", 535, 272, 39,
                'Malawi<br><br>Capital:	Lilongüe<br>
                Idioma:	Inglés y Chichewa<br>
                Superficie:	118.480 km_<br>
                Población:	10385.849<br>
                Densidad:	88 hab./km_<br>
                Moneda:	Kwacha<br>
                Tipo de gobierno:	Democracia multipartidista<br>
                Malawi es un país que se encuentra situado al Sureste de África. Limita al oeste con Zambia, al oeste, sur y este con Mozambique y al norte con Tanzania.<br>
                Se encuentra, administrativamente dividido en tres regiones: la región norte, con capital en Mzuzu, la región centro, con capital en Lilongwe, que además es capital de la nación, y la región sur con capital en Blantyre. Éstas regiones a su vez se dividen en distritos; en total Malawi tiene veintisiete distritos repartidos en las tres regiones
                Es uno de los países de África más densamente poblados. La mayoría de la población son negros africanos, que se dividen  en varias etnias, los principales grupos son los chewa, nyanja, yao, tumbuka y lomwe. 
                ',
                "assets/fscommand/mal1.jpg",
                "assets/fscommand/mal2.jpg",
                "assets/fscommand/mal3.jpg",
                "assets/fscommand/mal4.jpg"
            ],
            [13, "Zaire", 290, 102, 220,
                'Zaire<br><br>Capital:	Kinshasa<br>
                Idioma:	Francés (Lingala, Kikongo, Swahili y Tshiluba también son lenguas nacionales)<br>
                Superficie:	2.345.410 km_<br>
                Población:	60.764.490<br>
                Densidad:	26 hab./km_<br>
                Moneda:	<br>
                Tipo de gobierno:	Gobierno transitorio<br>
                República Democrática del Congo país de África, conocido como Zaire entre los años 1971 y 1999. Se sitúa en el corazón de la porción central-occidental del África Sub-sahariana y limita con Angola, la República del Congo, la República Centroafricana, Sudán, Uganda, Ruanda, Burundi, Tanzania (limítrofe del Lago Tanganica yZambia). El territorio es atravesado por el ecuador, con un tercio país en el Hemisferio Norte y dos tercios en el sur. Tiene acceso al mar a través de una estrecha franja de 40 km de costa, siguiendo el Río Congo hasta el Golfo de Guinea. El nombre Congo (cazador) es dado por el grupo étnico de los Bakongo, asentados a las riveras del río Congo. Fue la colonia belga del Congo Belga. Su nombre en la post-independencia cambió en 1971, de Congo-Kinshasa (después su capital, para distinguirse de la República del Congo o Congo-Brazzaville) a Zaire, en 1997.
                se reparte en 10 provincias : Bandundu, Bajo Congo, Ecuador, Kasai Occidental, Kasai Oriental, Katanga, Maniema,  Kivu del Norte, Oriental, Kivu del Sur y una ciudad autónoma (Kinshasa):
                ',
                "assets/fscommand/zai1.jpg",
                "assets/fscommand/zai2.jpg",
                "assets/fscommand/zai3.jpg",
                "assets/fscommand/zai4.jpg"
            ],
            [14, "Kenia", 544, 101, 94,
                'Kenia<br><br>Capital:	Nairobi<br>
                Idioma:	Suahelí e inglés<br>
                Superficie:	582.650 km_<br>
                Población:	34.707,817<br>
                Densidad:	53 hab./km_<br>
                Moneda:	Shilling<br>
                Tipo de gobierno:	República<br>
                Kenia es un país situado en el este de África, en las costas del Índico. Limita al norte con Sudán y Etiopía, al noreste con Somalia, al oeste con Uganda, al sur con Tanzania y al este con el océano Índico.  El país toma su nombre del Monte Kenia, la cumbre más alta del país y la segunda de África, tras el Kilimanjaro. El nombre significa "montaña luminosa" 
                Se divide en ocho territorios administrativos: el área de Nairobi y siete provincias: Central, Costera, Oriental, Nororiental, Occidental, Rift Valley  y Nyanza 
                Las provincias se subdividen en distritos (wilaya), que a su vez se dividen en unidades menores llamadas divisiones (tarafa), y éstas se dividen en localidades (mtaa), y en sublocalidades (kijiji). Los gobiernos provinciales están encabezados por un comisionado provincial (provincial commissioner, PC).
                ',
                "assets/fscommand/ken1.jpg",
                "assets/fscommand/ken2.jpg",
                "assets/fscommand/ken3.jpg",
                "assets/fscommand/ken4.jpg"
            ],
            [15, "Burundi", 489, 189, 22,
                'Burundi<br><br>Capital:	Bujumbura<br>
                Idioma:	Kirundi y francés<br>
                Superficie:	27.830 km_<br>
                Población:	6.223.897<br>
                Densidad:	230 hab./km_<br>
                Moneda:	Franco burundés<br>
                Tipo de gobierno:	República presidencialista<br>
                Burundi es una pequeña nación situada en el África central en pleno gran Valle del Rift. Limitando con la República Democrática del Congo y con el lago Tanganica al oste, con Ruanda al norte y con Tanzania al este y al sur. 
                Es en su mayor parte una meseta ondulada con una altitud media de 1.502 m esta desciende hacia el oeste a la depresión del valle del Rift. Donde se sitúa la zona más baja del país a orillas del lago Tanganica a unos 772 m. El monte Heha con 2670 m es la máxima altura, otros montes importantes son el monte Kavumu de 2.634 m o el monte Mukike de 2.600 m. De norte a sur el país es atravesado por la cadena montañosa de Crête du Nile.
                Los principales ríos son el río Ruzuzi que constituye la frontera con el Congo desenbocando en el lago Tanganica, el Malagasari y el Ruvuvu. El kagera que es considerado la fuente más remota del río Nilo nace en el norte del país desde donde se dirige hacia el lago Victoria. El principal lago es el lago Tanganica que comparte con Tanzania, el Congo y Zambia. A parte cuenta con muchos otros lagos en el norte como Mwungera, Narungazi, Rwihinda, Cohoha, Rwera y Kanzigiri
                El clima es ecuatorial, moderado por la altitud de la mayor parte del país. La tempertura media anual es de 21,1 ºC en la meseta y 24,4 en el Rift Valley 
                ',
                "assets/fscommand/bur1.jpg",
                "assets/fscommand/bur2.jpg",
                "assets/fscommand/bur3.jpg",
                "assets/fscommand/bur4.jpg"
            ],
            
            [17, "Uganda", 493, 111, 66,
                'Uganda<br><br>Capital:	<br>
                Idioma:	Inglés<br>
                Superficie:	236.040 km_<br>
                Población:	27.269.482<br>
                Densidad:	106 hab./km_<br>
                Moneda:	Chelín Ugandés<br>
                Tipo de gobierno:	República democrática<br>
                Uganda se encuentra situada en el este de África. Limita al norte con Sudán, al oeste con la República Democrática del Congo, al sur con Ruanda y Tanzania y al este con Kenia. En parte del territorio ugandés, concretamente en parte del territorio fronterizo con Tanzania, se encuentra el Lago Victoria, de donde nace uno de los ramales del Nilo. En la frontera con la República Democrática del Congo también se encuentran algunos lagos.
                Se encuentra dividido en 78 distritos, estos distritos se agrupan en cuatro divisiones administrativas: Norte, Este, Central y Oeste. Los distritos deben su nombre a la ciudad cabecera. Por ejemplo, la ciudad de Kampala se encuentra en el Distrito de Kampala.
                Aunque Uganda no posee salida al mar, tiene acceso a varios cuerpos de agua, incluyendo el Lago Victoria, Lago Alberto, Lago Kyoga y Lago Eduardo. El país se localiza al Este de África, sobre una meseta, con un promedio de 900 m sobre el nivel del mar. 
                El clima es tropical, difiere entre las distintas regiones del país. Uganda posee varias islas en el Lago Victoria. Las ciudades más importantes del país se encuentran en el sur, incluyendo a la capital Kampala y la ciudad de Entebbe.
                ',
                "assets/fscommand/uga1.jpg",
                "assets/fscommand/uga2.jpg",
                "assets/fscommand/uga3.jpg",
                "assets/fscommand/uga4.jpg"
            ],
            [16, "Ruanda", 485, 174, 25,
                "Ruanda<br><br>Capital:	Kigali<br>
                Idioma:	Francés, kinyarwanda, Inglés<br>
                Superficie:	26.338 km_<br>
                Población:	7.954.013<br>
                Densidad:	281 hab./km_<br>
                Moneda:	Franco ruandés<br>
                Tipo de gobierno:	República presidencialista<br>
                Ruanda limita al norte con Uganda, al sur y al este con Tanzania y al oeste con la República Democrática del Congo. La frontera con la República Democrática del Congo está establecida en gran medida por el lago Kivu. Es un país muy accidentado, con muchas subidas y bajadas, por lo que se le conoce como el país de las mil colinas. Está dividida en 5 provincias, que desde el 1 de enero de 2006 sustituyen a las anteriores 12: Provincia Norte, Provincia Sur, Provincia Este, Provincia Oeste Y Provincia de Kigali
                También es conocido como las \"nieblas de África\", por su fauna salvaje, principalmente por sus gorilas de montañas, por sus ciudades típicas y por los parques nacionales y parajes naturales que ofrece su paisaje montañoso. Pero por desgracia, es recordado hoy día por las sangrientas guerras que lo azotaron recientemente y particularmente por el genocidio ocurrido en 1994. Los cambios que este bello país ha sufrido son traumáticos para su pueblo.
                ",
                "assets/fscommand/ruan1.jpg",
                "assets/fscommand/ruan2.jpg",
                "assets/fscommand/ruan3.jpg",
                "assets/fscommand/ruan4.jpg"
            ],
            [18, "República Centroafricana", 307, 34, 158,
                'República Centroafricana<br><br>Capital:	Bangui<br>
                Idioma:	Francés<br>
                Superficie:	622.984 km_<br>
                Población:	3.683.538<br>
                Densidad:	5,8 hab./km_<br>
                Moneda:	<br>
                Tipo de gobierno:	República presidencialista<br>
                La República Centroafricana es un país situado en el centro-norte de África. Limita al norte con Chad, al oeste con Camerún, al sur con la República del Congo y la República Democrática del Congo y al este con Sudán.
                El país se divide en catorce prefecturas administrativas, dos prefecturas económicas y una comuna autónoma.
                El territorio consta de una vasta altiplanicie ondulada. La principal riqueza de este país radica en la exportación de su subsuelo: los diamantes, la mayoría de calidad gema, constituyen la principal riqueza, pero la proliferación de prácticas fraudulentas provoca pérdidas económicas muy elevadas; también se extrae oro y uranio. La mayor parte de la población se dedica a los cultivos de subsistencia (maíz, mijo), junto a otros comerciales (algodón, café, tabaco). El café y las maderas son las principales exportaciones.
                La población debe soportar unas penosas condiciones de vida,  y convivir con las endemias y la desnutrición, lo que determina la existencia de una elevada tasa de mortalidad. Lema nacional: Unidad, Dignidad, Trabajo
                ',
                "assets/fscommand/centroaf1.jpg",
                "assets/fscommand/centroaf2.jpg",
                "assets/fscommand/centroaf3.jpg",
                "assets/fscommand/centroaf4.jpg"
            ],

            [19, "Camerún", 236, 25, 95,
                'Camerún<br><br>Idioma:	<br>
                Superficie:	475.440 km_<br>
                Población:	16.988.132<br>
                Densidad:	34 hab./km_<br>
                Moneda:	<br>
                Tipo de gobierno:	República<br>
                Camerún es una república unitaria en África central,  se encuentra situado en el golfo de Guinea. Limita al norte y al oeste con Nigeria, al sur con Gabón y Guinea Ecuatorial, al este con la República Centroafricana y Chad. Al oeste limita con el océano Atlántico.
                Divisiones administrativas: 10 provincias, Adamaoua, Centro, Este, Extremo-Norte, Litoral, Norte, Norte-Oeste, Oeste, Sur, Sur-Oeste.<br>
                En el país se distinguen varias regiones. Una de ellas es la región litoral que va desde la costa fronteriza con Nigeria hasta la fronteriza con Guinea Ecuatorial. La ciudad más importante de la costa de Camerún es Buea. Posteriormente la altura del país se va elevando gradualmente: así, Douala se encuentra casi al nivel del mar, en el estuario del río Wouri y Yaoundé se encuentra situada ya a unos 700 metros sobre el nivel del mar. Pasado Yaoundé se encuentra un macizo montañoso que separa esta zona del país de la del norte. La ciudad más importante de esta zona montañosa es Tibesti. El norte el territorio es más llano. Las ciudades más importantes del norte de Camerún son Garoua y Maroua. En el extremo norte del país se encuentra una porción del lago Chad. En el sur y el sureste el territorio se convierte en selva, la cual se va haciendo más espesa a medida que nos acercamos a la frontera con el Congo. En la meseta oeste, en la frontera con Nigeria, se encuentra la zona anglófona del país, cuya ciudad más importante es Bamenda.
                ',
                "assets/fscommand/cam1.jpg",
                "assets/fscommand/cam2.jpg",
                "assets/fscommand/cam3.jpg",
                "assets/fscommand/cam4.jpg"
            ],
            [21, "Congo", 278, 124, 84,
                'REPÚBLICA DEL CONGO<br><br>Capital:	Brazzaville<br>
                Idioma:	Francés, Lingala y Kituba<br>
                Superficie:	342.000 km_<br>
                Población:	3.602.269<br>
                Densidad:	10,5 hab./km_<br>
                Moneda:	<br>
                Tipo de gobierno:	República<br>
                La República del Congo también conocida con los nombre de Congo Brazzaville y Congo se encuentra en la costa atlántica del centro de África. Limita con la República Centroafricana y Camerún, al oeste con Gabón, al sur con Angola (a través del enclave de Cabinda), y al sur y al este con la República Democrática del Congo (ex Zaire).  Está subdividida sucesivamente en regiones (10) y distritos. El distrito de Brazzaville no pertenece a ninguna región.
                El país se caracteriza por una baja densidad de población, que además se concentra en un 85% en las áreas urbanas del suroeste, dejando el resto del territorio prácticamente deshabitado y ocupado por la selva ecuatorial. 
                ',
                "assets/fscommand/con1.jpg",
                "assets/fscommand/con2.jpg",
                "assets/fscommand/con3.jpg",
                "assets/fscommand/con4.jpg"
            ],
            [20, "Cabinada", 303, 172, 25,
                'Cabinda es una de las 18 provincias en que se encuentra dividida administrativamente Angola. Es un exclave de Angola al estar separada del resto del país por la República Democrática del Congo, que rodea la provincia por el este y el sur. Al norte se encuentra la República del Congo y al oeste el Atlántico. En 1991 tenía una población de 163.000 habitantes, con una área de 7.270 km².
                Ciertos grupos han buscado la independencia del exclave, pues reclaman más atención a la provincia',
                "assets/fscommand/ango1.jpg",
                "assets/fscommand/ango2.jpg",
                "assets/fscommand/ango3.jpg",
                "assets/fscommand/ango4.jpg"
            ],
             
            [22, "Gabón", 243, 144, 70,
                'Gabón<br><br>Capital:	Libreville<br>
                Idioma:	Francés<br>
                Superficie:	267.667 km_<br>
                Población:	1.394.307<br>
                Densidad:	5 hab./km_<br>
                Moneda:	<br>
                Tipo de gobierno:	República presidencialista<br>
                Gabón es un país del centro-oeste de África. Limita con Guinea Ecuatorial, Camerún, la República del Congo y el Golfo de Guinea. Sus divisiones administrativas son 9 provincias: Estuaire, Haut-Ogooue, Moyen-Ogooue, Ngounie, Nyanga, Ogooue-Ivindo, Ogooue-Lolo, Ogooue-Maritime, Woleu-Ntem.
                Tene grandes reservas de mineral de hierro y de árboles de maderas muy finas. Otros recursos importantes son el petróleo, el manganeso y el uranio.<br>
                Su poca población, abundantes recursos naturales y la inversión privada extranjera han ayudado a hacer de Gabón uno de los países más prósperos de la región. <br>
                Lema nacional: Unión Trabajo Justicia
                ',
                "assets/fscommand/gabo1.jpg",
                "assets/fscommand/gabo2.jpg",
                "assets/fscommand/gabo3.jpg",
                "assets/fscommand/gabo4.jpg"
            ],
            [23, "Malabo", 221, 140, 25,
                '',
                "assets/fscommand/mal1.jpg",
                "assets/fscommand/mal2.jpg",
                "assets/fscommand/mal3.jpg",
                "assets/fscommand/mal4.jpg"
            ],
            [24, "Guinea Ecuatorial", 252, 145, 22,
                'Guinea Ecuatorial<br><br>Capital:	Malabo<br>
                Idioma:	Español<br>
                Superficie:	28.051 km_<br>
                Población:	523.051<br>
                Densidad:	18,65 hab./km_<br>
                Moneda:	<br>
                Tipo de gobierno:	República<br>
                Guinea Ecuatorial es un pequeño país situado en la parte ecuatorial del África. Consta de un territorio continental de 26.017 km_, denominado Mbini (antiguo Rio Muni), que limita al norte con Camerún, al este y sur con Gabón y al oeste con el océano Atlántico; y de otro insular de 2.034 km_, formado por las islas de Annobon (a la altura de Santo Tomé y Príncipe, llamada Pagalú durante la dictadura de Macías), Corisco, Elobey Grande, Elobey Chico y la isla de Bioko (antigua Fernando Poo) donde se encuentra la capital Malabo. Mbini comprende una franja costera llana, que va accidentándose hacia el interior, en donde se encuentra una serie de cadenas montañosas llamadas "de las Siete Montañas". El terreno está suavemente ondulado y cubierto por vegetación selvática. Alrededor del 60% del área pertenece a la cuenca del río Mbini (antes llamado Benito).
                Está dividida administrativamente en siete provincias con sus respectivas capitales',
                "assets/fscommand/guin1.jpg",
                "assets/fscommand/guin2.jpg",
                "assets/fscommand/guin3.jpg",
                "assets/fscommand/guin4.jpg"
            ],
            
        ];
        $cityAry = [
            [0, "", 0, 0, 0],
            [1, "República Centroafricana", 353, 80, 18],
            [2, "Cabinda (Angola)", 300, 222, 18],
            [3, "Malabo", 224, 146, 18],
            [4, "Kinshasa", 336, 222, 18],
            [5, "Nairabi", 572, 147, 18],
            [6, "Antananariva", 683, 389, 18],
            [7, "Luanda", 330, 280, 18],
            [8, "Kampala", 523, 132, 18],
            [9, "Kigali", 491, 174, 18],
            [10, "Harare", 500, 380, 18],
            [11, "Gaborne", 444, 432, 18],
            [12, "Pretoria", 488, 447, 18],
            [13, "MBabane", 516, 464, 18],
            [14, "Lilonwe", 555, 329, 18],
            [15, "Maseru", 481, 502, 18],
            [16, "Dodoma", 554, 208, 18],
            [17, "Maputo", 537, 421, 18],
            [18, "Brazzaville", 312, 200, 18],
            [19, "Bujumbura", 493, 197, 18],
            [20, "Windhoek", 338, 398, 18],
            [21, "Lusaka", 475, 335, 18],
            // [22, "Jartúm", 640, 324, 18],
            [23, "Camerún", 286, 100, 18],
            // [24, "Niamey", 268, 348, 18],

        ];
        //#### $riverAry[ idNum, name, x, y, w] ####//
        $riverAry = [
            [0, 0, 0],
            [1, "Río Zaire", 294, 118, 207],
            [3, "Río Kasai", 344, 214, 97],
            [5, "Lago Victória", 519, 157, 37],
            [7, "Lago Tanganica", 488, 202, 29],
            [9, "Lago Niassa", 546, 274, 19],
            [11, "Lago Zambezi", 432, 328, 129],
            [13, "Cataratas Victória", 451, 382, 40],
            [15, "Río Orange", 360, 494, 131],

            
        ];
        $mountAry = [

            [0, ""],
            [1, "Montes de Camerún", 268, 881, 55],
            [2, "Monte Klonda", 297, 314, 68],
            [3, "Meseta del Cabo", 418, 504, 97],
            [4, "Moseta Matopo", 520, 400, 43],
            [5, "Monte Kenya", 580, 130, 29],
            [6, "Cordillera de Madagascar", 656, 350, 68],
            [7, "Monte Kilimanjaro", 561, 200, 29],


        ];

        $songAry = [
            [0, "", 0, 0, 0, 0],
            [1, "Ruinas de Machupichu", 500, 393, 20, 2, "assets/fscommand/lugares/belen.JPG"],
            [2, "Desierto de Kalahari", 412, 427, 20, 2, "assets/fscommand/lugares/banios.JPG"],
            [3, "Montaña Plana, República de Sudáfrica", 392, 537, 20, 2, "assets/fscommand/lugares/huascaran.JPG"],  
            [4, "Monte Kilimanjaro, Tanzania", 558, 177, 20, 2, "assets/fscommand/lugares/huascaran.JPG"], 
            [5, "Cataratas Victória, Botswana", 458, 374, 20, 2, "assets/fscommand/lugares/huascaran.JPG"],  
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
        [2,2,5,6,7,8], //1
        [1,5,9], //2
        [1], //3
        [],//4
        [1,2,8,10],//5
        [1],//6
        [1,8,10,11,12],//7
        [1,5,7,10,12],//8
        [2,10,13],//9
        [5,8,9,11,12,13],//10
        [7,10,12,14,15,16,17],//11
        [7,10,11],//12
        [9,10,15,16,17,21],//13
        [11,17],//14
        [11,13,16],//15
        [11,13,15,17],//16
        [11,13,14,16],//17
        [13,19,21],//18
        [18,21,24],//19
        [21,22],//20
        [13,18,19,20,22],//21
        [19,20,21,24],//22
        [],//23
        [19,22],//24 
        
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
                            <img src="assets/minmap.png" style="position: absolute;left: -42px;top: -14px;width:391px; display: none;" id="minmap">
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
                        <img id="i_1" src="assets/item14.png" width="30px" style="position: absolute;left: 169px;top: 148px;" onmouseover="infoiover(14, 1)" onmouseout="infoitout(14, 1)" title="Pesca" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_2" src="assets/item14.png" width="30px" style="position: absolute;left: 21679px;top: 364px;" onmouseover="infoiover(14, 2)" onmouseout="infoitout(14, 2)" title="Pesca" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_3" src="assets/item14.png" width="30px" style="position: absolute;left: 612px;top: 424px;" onmouseover="infoiover(14, 3)" onmouseout="infoitout(14, 3)" title="Pesca" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_4" src="assets/item14.png" width="30px" style="position: absolute;left: 669px;top: 227px;" onmouseover="infoiover(14, 4)" onmouseout="infoitout(14, 4)" title="Pesca" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_5" src="assets/item125.png" width="30px" style="position: absolute;left: 221px;top: 193px;" onmouseover="infoiover(125, 5)" onmouseout="infoitout(125, 5)" title="Exportación" onmouseup="handleIconMoveUp(5)" onmousedown="handleIconMoveDown(event,5)" ondragstart="return false;">
                        <img id="i_6" src="assets/item125.png" width="30px" style="position: absolute;left: 236px;top: 348px;" onmouseover="infoiover(125, 6)" onmouseout="infoitout(125, 6)" title="Exportación" onmouseup="handleIconMoveUp(5)" onmousedown="handleIconMoveDown(event,5)" ondragstart="return false;">
                        <img id="i_7" src="assets/item125.png" width="30px" style="position: absolute;left: 284px;top: 450px;" onmouseover="infoiover(125, 7)" onmouseout="infoitout(125, 7)" title="Exportación" onmouseup="handleIconMoveUp(5)" onmousedown="handleIconMoveDown(event,5)" ondragstart="return false;">
                        <img id="i_8" src="assets/item125.png" width="30px" style="position: absolute;left: 513px;top: 553px;" onmouseover="infoiover(125, 8)" onmouseout="infoitout(125, 8)" title="Exportación" onmouseup="handleIconMoveUp(5)" onmousedown="handleIconMoveDown(event,5)" ondragstart="return false;">
                        <img id="i_9" src="assets/item125.png" width="30px" style="position: absolute;left: 600px;top: 389px;" onmouseover="infoiover(125, 9)" onmouseout="infoitout(125, 9)" title="Exportación" onmouseup="handleIconMoveUp(5)" onmousedown="handleIconMoveDown(event,5)" ondragstart="return false;">
                        <img id="i_10" src="assets/item125.png" width="30px" style="position: absolute;left: 638px;top: 214px;" onmouseover="infoiover(125, 10)" onmouseout="infoitout(125, 10)" title="Exportación" onmouseup="handleIconMoveUp(5)" onmousedown="handleIconMoveDown(event,5)" ondragstart="return false;">
                        <img id="i_11" src="assets/item84.png" width="40px" style="position: absolute;left: 202px;top: 160px;" onmouseover="infoiover(84, 11)" onmouseout="infoitout(84, 11)" title="Petróleo" onmouseup="handleIconMoveUp(11)" onmousedown="handleIconMoveDown(event,11)" ondragstart="return false;">
                        <img id="i_12" src="assets/item84.png" width="40px" style="position: absolute;left: 248px;top: 212px;" onmouseover="infoiover(84, 12)" onmouseout="infoitout(84, 12)" title="Petróleo" onmouseup="handleIconMoveUp(12)" onmousedown="handleIconMoveDown(event,12)" ondragstart="return false;">
                        <img id="i_13" src="assets/item11.png" width="30px" style="position: absolute;left: 313px;top: 104px;" onmouseover="infoiover(11, 13)" onmouseout="infoitout(11, 13)" title="Minería" onmouseup="handleIconMoveUp(13)" onmousedown="handleIconMoveDown(event,13)" ondragstart="return false;">
                        <img id="i_14" src="assets/item11.png" width="30px" style="position: absolute;left: 450px;top: 271px;" onmouseover="infoiover(11, 14)" onmouseout="infoitout(11, 14)" title="Minería" onmouseup="handleIconMoveUp(14)" onmousedown="handleIconMoveDown(event,14)" ondragstart="return false;">
                        <img id="i_15" src="assets/item11.png" width="30px" style="position: absolute;left: 364px;top: 315px;" onmouseover="infoiover(11, 15)" onmouseout="infoitout(11, 15)" title="Minería" onmouseup="handleIconMoveUp(15)" onmousedown="handleIconMoveDown(event,15)" ondragstart="return false;">
                        <img id="i_16" src="assets/item11.png" width="30px" style="position: absolute;left: 427px;top: 326px;" onmouseover="infoiover(11, 16)" onmouseout="infoitout(11, 16)" title="Minería" onmouseup="handleIconMoveUp(16)" onmousedown="handleIconMoveDown(event,16)" ondragstart="return false;">
                        <img id="i_17" src="assets/item11.png" width="30px" style="position: absolute;left: 420px;top: 399px;" onmouseover="infoiover(11, 17)" onmouseout="infoitout(11, 17)" title="Minería" onmouseup="handleIconMoveUp(17)" onmousedown="handleIconMoveDown(event,17)" ondragstart="return false;">
                        <img id="i_18" src="assets/item11.png" width="30px" style="position: absolute;left: 488px;top: 374px;" onmouseover="infoiover(11, 18)" onmouseout="infoitout(11, 18)" title="Minería" onmouseup="handleIconMoveUp(18)" onmousedown="handleIconMoveDown(event,18)" ondragstart="return false;">
                        <img id="i_19" src="assets/item11.png" width="30px" style="position: absolute;left: 326px;top: 421px;" onmouseover="infoiover(11, 19)" onmouseout="infoitout(11, 19)" title="Minería" onmouseup="handleIconMoveUp(19)" onmousedown="handleIconMoveDown(event,19)" ondragstart="return false;">
                        <img id="i_20" src="assets/item11.png" width="30px" style="position: absolute;left: 408px;top: 530px;" onmouseover="infoiover(11, 20)" onmouseout="infoitout(11, 20)" title="Minería" onmouseup="handleIconMoveUp(20)" onmousedown="handleIconMoveDown(event,20)" ondragstart="return false;">
                        <img id="i_21" src="assets/item13.png" width="36px" style="position: absolute;left: 392px;top: 430px;" onmouseover="infoiover(13, 21)" onmouseout="infoitout(13, 21)" title="Ganado Bovino" onmouseup="handleIconMoveUp(21)" onmousedown="handleIconMoveDown(event,21)" ondragstart="return false;">
                        <img id="i_22" src="assets/item13.png" width="36px" style="position: absolute;left: 417px;top: 472px;" onmouseover="infoiover(13, 22)" onmouseout="infoitout(13, 22)" title="Ganado Bovino" onmouseup="handleIconMoveUp(22)" onmousedown="handleIconMoveDown(event,22)" ondragstart="return false;">
                        <img id="i_23" src="assets/item100.png" width="36px" style="position: absolute;left: 247px;top: 106px;" onmouseover="infoiover(100, 23)" onmouseout="infoitout(100, 23)" title="Café" onmouseup="handleIconMoveUp(23)" onmousedown="handleIconMoveDown(event,23)" ondragstart="return false;">
                        <img id="i_24" src="assets/item100.png" width="36px" style="position: absolute;left: 304px;top: 239px;" onmouseover="infoiover(100, 24)" onmouseout="infoitout(100, 24)" title="Café" onmouseup="handleIconMoveUp(24)" onmousedown="handleIconMoveDown(event,24)" ondragstart="return false;">
                        <img id="i_25" src="assets/item100.png" width="36px" style="position: absolute;left: 459px;top: 115px;" onmouseover="infoiover(100, 25)" onmouseout="infoitout(100, 25)" title="Café" onmouseup="handleIconMoveUp(25)" onmousedown="handleIconMoveDown(event,25)" ondragstart="return false;">
                        <img id="i_26" src="assets/item100.png" width="36px" style="position: absolute;left: 514px;top: 119px;" onmouseover="infoiover(100, 26)" onmouseout="infoitout(100, 26)" title="Café" onmouseup="handleIconMoveUp(26)" onmousedown="handleIconMoveDown(event,26)" ondragstart="return false;">
                        <img id="i_27" src="assets/item100.png" width="36px" style="position: absolute;left: 558px;top: 145px;" onmouseover="infoiover(100, 27)" onmouseout="infoitout(100, 27)" title="Café" onmouseup="handleIconMoveUp(27)" onmousedown="handleIconMoveDown(event,27)" ondragstart="return false;">
                        <img id="i_28" src="assets/item149.png" width="36px" style="position: absolute;left: 568px;top: 518px;" onmouseover="infoiover(149, 28)" onmouseout="infoitout(149, 28)" title="Café" onmouseup="handleIconMoveUp(28)" onmousedown="handleIconMoveDown(event,27)" ondragstart="return false;">
                        <img id="i_29" src="assets/item147.png" width="40px" style="position: absolute;left: 293px;top: 540px;" onmouseover="infoiover(147, 29)" onmouseout="infoitout(147, 29)" title="Ballena Franca" onmouseup="handleIconMoveUp(29)" onmousedown="handleIconMoveDown(event,29)" ondragstart="return false;">
                        <img id="i_30" src="assets/item148.png" width="40px" style="position: absolute;left: 598px;top: 448px;" onmouseover="infoiover(148, 30)" onmouseout="infoitout(148, 30)" title="Ballena Jorobada" onmouseup="handleIconMoveUp(30)" onmousedown="handleIconMoveDown(event,30)" ondragstart="return false;">
                        <img id="i_31" src="assets/item146.png" width="36px" style="position: absolute;left: 286px;top: 175px;" onmouseover="infoiover(146, 31)" onmouseout="infoitout(146, 31)" title="Lagarto del Desierto" onmouseup="handleIconMoveUp(31)" onmousedown="handleIconMoveDown(event,31)" ondragstart="return false;">
                        <img id="i_32" src="assets/item145.png" width="36px" style="position: absolute;left: 526px;top: 221px;" onmouseover="infoiover(145, 32)" onmouseout="infoitout(145, 32)" title="Elefante" onmouseup="handleIconMoveUp(32)" onmousedown="handleIconMoveDown(event,32)" ondragstart="return false;">
                         <img id="i_33" src="assets/item144.png" width="36px" style="position: absolute;left: 391px;top: 177px;" onmouseover="infoiover(144, 33)" onmouseout="infoitout(144, 33)" title="Gorila" onmouseup="handleIconMoveUp(33)" onmousedown="handleIconMoveDown(event,33)" ondragstart="return false;">
                         <img id="i_34" src="assets/item142.png" width="36px" style="position: absolute;left: 350px;top: 395px;" onmouseover="infoiover(142, 34)" onmouseout="infoitout(142, 34)" title="León" onmouseup="handleIconMoveUp(34)" onmousedown="handleIconMoveDown(event,34)" ondragstart="return false;">
                         <img id="i_35" src="assets/item81.png" width="26px" style="position: absolute;left: 400px;top: 76px;" onmouseover="infoiover(81, 35)" onmouseout="infoitout(81, 35)" title="Algodón" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                         <img id="i_36" src="assets/item81.png" width="26px" style="position: absolute;left: 529px;top: 421px;" onmouseover="infoiover(81, 36)" onmouseout="infoitout(81, 36)" title="Algodón" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                         <img id="i_37" src="assets/item81.png" width="26px" style="position: absolute;left: 484px;top: 427px;" onmouseover="infoiover(81, 37)" onmouseout="infoitout(81, 37)" title="Algodón" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
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
            <div style=" writing-mode: vertical-rl; text-orientation: downright; transform: rotate(180deg); font-size:65px; color:#FFF; 
             border-radius: 10px;  height:380px; margin-left: 10px;">
                Sur de Africa
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
