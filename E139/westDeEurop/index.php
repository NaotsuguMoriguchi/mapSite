<html>

<head>
    <meta charset="utf-8" />
    <title>westDeEurop</title>

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
            
            [1, "Ucrania", 612, 397, 210, 
                "Ucrania<br><br>Capital:	Kiev<br>
                Idioma:	Ucraniano<br>
                Superficie:	603.700 km_<br>
                Población:	47.732.079<br>
                Densidad:	80 hab./km_<br>
                Moneda:	Hryvnia<br>
                Tipo de gobierno:	República presidencialista<br>
                Ucrania es un país en Europa, el segundo más grande del continente, que limita con el Mar Negro al sur, la Federación Rusa al este, Bielorrusia al norte y Polonia, Eslovaquia, Hungría, Rumania y Moldavia al Oeste. Se dividide en 24 regiones, la república autónoma de Crimea, y dos municipios.
                El paisaje está compuesto en su mayoría de fértiles llanuras (estepas), y mesetas, cruzada por importantes ríos como el Dnipro, Donetsk, Dnister y el Bug Meridional desembocando en el Mar Negro y el menor Mar de Azov. En el suroeste el delta del Danubio forma la frontera con Rumania. Las montañas sólo se encuentran al oeste en los Montes Cárpatos, el punto más alto es el Hora Hoverla de 2.061 m, así como una pequeña cordillera en Crimea en la zona costera sur. En realidad el país forma parte de la gran llanura europea que va de Alemania a los Urales.
                Tiene un clima templado continental, aunque el clima mediterráneo es predominante en la costa sur de Crimea. Las precipitaciones son mayores en el norte y oeste. El invierno es frío, aunque en el interior debido a su continentalidad se alcanzan las temperaturas más extremas. Los veranos son calurosos, sobre todo en el sur.
                ",
                "assets/fscommand/ucr1.jpg",
                "assets/fscommand/ucr2.jpg",
                "assets/fscommand/ucr3.jpg",
                "assets/fscommand/ucr4.jpg"
            ],
            [2, "Bielorrusia", 615, 343, 105,
                'Bielorrusia<br><br>Capital:	Minsk<br>
                Idioma:	Bielorruso, ruso<br>
                Superficie:	207.600 km_<br>
                Población:	11.616.890<br>
                Densidad:	50 hab./km_<br>
                Moneda:	Rublo bielorruso<br>
                Tipo de gobierno:	República<br>
                Bielorrusia, antiguamente Rusia Blanca, es un estado de Europa que, hasta 1991, formó parte de la Unión de Repúblicas Socialistas Soviéticas (URSS). Sus límites son  al Norte con Lituania y Letonia, al Este con la Federación Rusa, al Sur con Ucrania y al Oeste con Polonia.
                Actualmente Bielorrusia se divide en 6 regiones llamadas vobla__, estas son: Bierascie, Homiel, Horadnia, Mahilou, Minsk y Viciebsk; y una región especial: la capital Minsk. A su vez, las regiones se dividen en distritos. El territorio que ocupa este estado interior es llano y pantanoso, no hay montañas de gran altura.</mensaje>
                ',
                "assets/fscommand/belg1.jpg",
                "assets/fscommand/belg2.jpg",
                "assets/fscommand/belg3.jpg",
                "assets/fscommand/belg4.jpg"
            ],
            [3, "Francia", 256, 417, 173,
                "París<br><br>Idioma:	Francés<br>
                Superficie:	675 417 km_ km_<br>
                Población:	63 213 894<br>
                Densidad:	93,59 hab./km_<br>
                Moneda:	Euro<br>
                Tipo de gobierno:	República<br>
                Francia, es un país cuyo territorio metropolitano se encuentra en Europa Occidental, incluyendo además diversos territorios e islas en otros continentes.
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
            [4, "Moldavia", 680, 477, 50,
                'Moldavia<br><br>Capital:	Chi_in_u
                Idioma:	Moldavo<br>
                Superficie:	33.843 km_<br>
                Población:	4.455.421<br>
                Densidad:	131 hab./km_<br>
                Moneda:	Leu<br>
                Tipo de gobierno:	República<br>
                Moldavia es un país de la Europa del Este, que limita con Rumania por el Oeste y con Ucrania por el Este. Fue una de las repúblicas constituyentes de la Unión Soviética hasta 1991. Está dividida en 32 distritos, 3 municipios (Chi_in_u, B_l_i y Tighina), y dos regiones semi-autónomas (G_g_uzia y Transnistria).
                Es la nación más pobre del continente europeo, junto con Albania. La economía tradicionalmente agrícola, comenzó, en consonancia con el resto de territorios de la Unión Soviética, un acelerado proceso de industrialización, especialmente alimentaria (vino y azúcar refinado). La producción es variada: girasol, tabaco, cereales, vid, hortalizas, remolacha azucarera y patata. La ganadería es poco significativa, y es principalmente bobina y porcina, además de la cría de aves de corral al igual que la producción de refrigeradores, confección, materiales de construcción y maquinaria agrícola. Existe petróleo, aunque en poca cantidad, y se extrae sal de algunas minas. Es una de las ex-repúblicas soviéticas más pobres en recursos del subsuelo explotados.
                El límite occidental de Moldavia es delimitado por el río Prut, el cual se une al Danubio antes de desembocar en el Mar Negro. Hacia el noreste, el Dniéster es el río principal, atravesando el país de norte a sur. El país no tiene costa pero sí salida al mar mediante los ríos, que desembocan al Danubio. Moldavia se encuentra a tan solo 100km del Mar Negro en la frontera del suroeste, pero hay un punto, en el que el mar está a menos de 10km de la frontera. Mientras la parte norte del país es montañosa, las elevaciones no superan los 430 metros. La montaña más elevada de este estado es Dealul Balanesti. Posee un clima continental templado con veranos calurosos pero inviernos moderados.
                ',
                "assets/fscommand/cajamarca1.jpg",
                "assets/fscommand/cajamarca2.jpg"
            ],
            [6, "Noruega", 422, 37, 225,
                'Noruega<br><br>Castillo Real en Oslo
                Capital:	Oslo<br>
                Idioma:	Noruego y Sami<br>
                Superficie:	385.156 km_<br>
                Población:	4.640.219<br>
                Densidad:	12,1 hab./km_<br>
                Moneda:	Corona<br>
                Tipo de gobierno:	Monarquía constitucional Democratica parlamentaria<br>
                Noruega es un país de Europa, ubicado al noroeste de la península escandinava que comparte fronteras con Suecia, Rusia y Finlandia. Su nombre significa literalmente "Camino del Norte", debido a la forma alargada del país que se proyecta hacia el círculo polar ártico. Se divide en 19 regiones administrativas llamadas condados y 434 municipios. Sus principales ciudades son Oslo, Bergen, Trondheim, Stavanger y Tromso.
                El paisaje es generalmente rugoso y montañoso, coronado por glaciares y su costa es punzada por accesos en acentuado declive conocidos como fiordos, así como una multitud de islas e islotes. Es también conocida como la tierra del sol de medianoche ya que, debido a su ubicación nórdica, parte de Noruega se encuentra por encima del círculo ártico, donde en verano el sol no se pone y en invierno muchos de sus valles permanecen en la oscuridad por períodos prolongados.
                Bordea al Océano Atlántico en toda la extensión de su costa, unido por tres mares distintos: el Mar del Norte al sudoeste y su gran ensenada, el Skagerrak al sur, el Mar de Noruega al oeste y el Mar de Barents al noreste.  El clima es bastante templado, especialmente sobre la costa bajo influencia de la corriente del golfo. El clima del interior puede ser más severo y hacia el norte pueden encontrarse las condiciones más subárticas.
                ',
                "assets/fscommand/nor1.jpg",
                "assets/fscommand/nor2.jpg",
                "assets/fscommand/nor3.jpg",
                "assets/fscommand/nor4.jpg"
            ],
            [7, "Suecia", 484, 89, 117,
                'Suecia<br><br>Capital:	Estocolmo<br>
                Idioma:	Sueco<br>
                Superficie:	449.964 km<br>
                Población:	9 067 049<br>
                Densidad:	20 hab./km<br>
                Moneda:	Corona<br>
                Tipo de gobierno:	Monarquía constitucional<br>
                Suecia es un país ubicado en el norte de Europa, en la parte oriental de la península Escandinava. Limita al norte con Noruega y Finlandia, al este con Finlandia y el golfo de Botnia, al sur con el mar Báltico y al oeste con el mar del Norte y Noruega. Está dividida en 21 provincias o län, Cada provincia se encuentra dividida a su vez en municipios o kommuner, sumando un total de 289. Las mayores islas de Suecia son Gotland y Öland, los mayores lagos sonVänern y Vättern 
                Disfruta de un clima templado a pesar de su latitud septentrional, debido principalmente a la Corriente del Golfo. Al sur de Suecia abundan los árboles frondosos y hacia el norte dominan el paisaje los bosques de coníferas, helechos y abedules. En las montañas al norte de Suecia predomina un clima sub-ártico. En la porción del país ubicada sobre el norte del círculo ártico el sol nunca se pone durante el verano y durante el invierno la noche no tiene fin.
                ',
                "assets/fscommand/sue1.jpg",
                "assets/fscommand/sue2.jpg",
                "assets/fscommand/sue3.jpg",
                "assets/fscommand/sue4.jpg"
            ],

            [8, "Finlandia", 574, 63, 100,
                'Finlandia<br><br>Capital:	Helsinki<br>
                Idioma:	Finés y Sueco<br>
                Superficie:	337.030 km<br>
                Población:	5.249.034<br>
                Densidad:	17 hab./km<br>
                Moneda:	Euro<br>
                Tipo de gobierno:	República<br>
                Finlandia, Bordeado por el Golfo de Finlandia y el Golfo de Botnia. Hace frontera al sur con el Mar Báltico, al norte con Noruega, Rusia al este, al oeste con Suecia, Noruega y Rusia. Es un país nórdico miembro de la Unión Europea (UE). por tanto, se encuentra en el norte de Europa y es un país costero. Es uno de los países nórdicos. Una parte del extremo norte de Finlandia forma parte de la Península Escandinava.
                La reforma de 1997 aglutinó las 12 que componían tradicionalmente el mapa finlandés en sólo 6 provincias, estas provincias son: Finlandia, Finlandia Occidental, Finlandia Oriental, Oulu, Laponia y  La provincia de las Islas de Åland.
                El paisaje es fundamentalmente llano, con algunas colinas bajas. Su punto más alto, el Haltitunturi se encuentra en el extremo norte de Laponia. En contraste, posee un vastísimo número de lagos (alrededor de 190.000) e islas (aproximadamente 180.000). El paisaje lacustre está cubierto de extensos bosques boreales poco apropiados para el cultivo. La mayor parte de las islas se encuentran salpicando el archipiélago de Turku y las islas de Åland al suroeste, así como a lo largo de la costa sur, en el Golfo de Finlandia.
                ',
                "assets/fscommand/fin1.jpg",
                "assets/fscommand/fin2.jpg",
                "assets/fscommand/fin3.jpg",
                "assets/fscommand/fin4.jpg"
            ],

            [9, "República de Irlanda", 206, 301, 69,
                'Irlanda<br><br>Capital:	Dublín<br>
                Idioma:	Irlandés, inglés<br>
                Superficie:	70.273 km_<br>
                Población:	4.234.925<br>
                Densidad:	57 hab./km_<br>
                Moneda:	Euro<br>
                Tipo de gobierno:	República<br>
                Irlanda  es un país del noroeste de Europa, formando parte del archipiélago británico. La isla está dividida entre la República de Irlanda e Irlanda del Norte. Ubicada el oeste de la isla británica, se encuentra aproximadamente a 53° al norte de la línea del ecuador y 8° al oeste del meridiano de Greenwich. Irlanda está separada de la isla británica por el mar de Irlanda y del continente europeo por el Mar Celta. Es a veces llamada la "Isla Esmeralda."
                Consta de 30 condados administrativos. Además, las cinco ciudades (Dublín, Cork, Galway, Limerick y Waterford) se administran separadamente, y cinco municipios (Clonmel, Drogheda, Kilkenny, Sligo y Wexford) tienen una cierta autonomía dentro de sus condados respectivos.
                Su geografía consiste en una vasta planicie de poca altitud rodeada por un anillo de pequeñas cadenas montañosas costeras, se encuentra accidentada por los montes Donegal, Wicklow, Mourne, Mac Gillycuddys Reeks y principalmente por su más alta cumbre: el Carrantuonhill,. Además posee numerosos lagos entre los que destacan el Neah, el Erne y el Corrib. Los ríos más importantes son el Shannon, el Blackwater, el Barrow y el Bann. Las costas que circundan la isla suelen ser muy recortadas con fiordos y penínsulas, especialmente al oeste.
                ',
                "assets/fscommand/irl1.jpg",
                "assets/fscommand/irl2.jpg",
                "assets/fscommand/irl3.jpg",
                "assets/fscommand/irl4.jpg"
            ],

            [11, "Gran Bretaña", 248, 253, 111,
                'Reino Unido<br><br>Capital:	Londres<br>
                Idioma:	Inglés<br>
                Superficie:	244.820 km_<br>
                Población:	59.834.300<br>
                Densidad:	243 hab./km_<br>
                Moneda:	Libra esterlina<br>
                Tipo de gobierno:	Monarquía constitucional<br>
                El Reino Unido de la Gran Bretaña e Irlanda del Norte, más conocido por Reino Unido, o incorrectamente como Inglaterra, es un país insular del norte de Europa que está formado por Inglaterra, Escocia, Gales (en la isla de Gran Bretaña) e Irlanda del Norte (en la isla de Irlanda). Al sur del pais se encuentra el Canal de la Mancha, donde se encuentra el Eurotúnel, que comparte con Francia. Lema nacional: Dios y mi derecho
                Es un pais altamente desarollado y es junto con Alemania y Francia los tres paises más ricos de europa el denominado G-3 o los tres grandes. En la industria, las principales actividades son la maquinaria, el material de transporte (vehículos, ferrocarriles y aeronáutica) y los productos químicos. En la minería las tradicionales minas de carbón en forma de hulla situadas en Yorkshire, Gales, Escocia y Lancashire han suministrado a las centrales térmicas británicas la energía necesaria para el desarrollo económico. Con el petróleo descubierto en 1970 en el Mar del Norte es el segundo productor europeo tras Noruega. 
                ',
                "assets/fscommand/gra1.jpg",
                "assets/fscommand/gra2.jpg",
                "assets/fscommand/gra3.jpg",
                "assets/fscommand/gra4.jpg"
            ],

            [10, "Irlanda del norte", 259, 300, 21,
                'LA LIBERTAD<br><br>Capital:	Belfast<br>
                Idioma:	inglés, irlandés,escocés del Ulster<br>
                Superficie:	13,843 km_<br>
                Población:	1.685.267<br>
                Densidad:	122 hab./km_<br>
                Moneda:	Libra esterlina<br>
                Irlanda del Norte es una región administrativa del Reino Unido que se encuentra al nordeste de la isla de Irlanda, corresponde a la mayor parte del Ulster. Limita al norte con el Océano Atlántico, al este con el Canal del Norte, al sureste con el Mar de Irlanda, y al sur, suroeste y oeste con Irlanda. Cuenta con 24 distritos y 2 ciudades, agrupados en 6 condados: Antrim, Armagh, Down, Fermanagh, Tyrone y Londonderry. El Lema real es: Dios y mi derecho
                ',
                "assets/fscommand/nor1.jpg",
                "assets/fscommand/nor2.jpg",
                "assets/fscommand/nor3.jpg",
                "assets/fscommand/nor4.jpg"
            ],

            [12, "Bélgica", 369, 408, 38,
                'Bélgica<br><br>Imagen del parlamento en Bruselas<br>
                Capital:	Bruselas<br>
                Idioma:	Neerlandés, Francés, Alemán<br>
                Superficie:	30.510 km_<br>
                Población:	10.396.421<br>
                Densidad:	338 hab./km_<br>
                Moneda:	Euro<br>
                Tipo de gobierno:	Monarquía parlamentaria<br>
                Bélgica es un  país ubicado al noroeste de Europa que forma parte de la Unión Europea. limita al norte con Holanda y el mar del Norte, al este con Alemania y Luxemburgo, y al sur y suroeste con Francia. Junto a Holanda y Luxemburgo, Bélgica forma el Benelux. El territorio se divide geográficamente en 3 regiones: la planicie costera al noroeste, la meseta central y las altiplanicies de Ardenas al sureste. Siguiendo el ejemplo de los Países Bajos, la planicie costera ha ganado algunos espacios del Mar del Norte por medio de diques y canales. La meseta central es un valle fértil y la altiplanicie es un valle rocoso cubierto por densos bosques que se extienden hasta el norte de Francia. Ahí se encuentra el Botrange, el punto más alto del país, elevándose a 694 m sobre la superficie. Los principales ríos son el Escalda y el Mosa.
                El clima cerca del mar es húmedo y templado. Hacia el interior, lejos de la influencia marina, se da una amplia gama de temperaturas. En la región de las Ardenas alternan veranos cálidos con inviernos fríos. Las lluvias fuertes se limitan prácticamente a las tierras altas. La humedad y la llovizna son habituales, siendo abril y noviembre los meses más lluviosos.
                ',
                "assets/fscommand/belg1.jpg",
                "assets/fscommand/belg2.jpg",
                "assets/fscommand/belg3.jpg",
                "assets/fscommand/belg4.jpg"
            ],
            
            [13, "Holanda", 385, 381, 39,
                'Holanda Meridional<br><br>Capital:	La Haya<br>
                Idioma:	<br>
                Superficie:	2.818 km_ <br>
                Población:	3.452.323 <br>
                Densidad:	1.225hab./km_ <br>
                Moneda:	<br>
                Tipo de gobierno:	<br>
                Holanda Meridional es una de las doce provincias que conforman el actual Reino de los Países Bajos. Al igual que las demás provincias, está gobernada por un comisionado o comisario designado por el monarca y una cámara legislativa elegida mediante sufragio universal. La capital es La Haya (asimismo sede del Gobierno nacional); otras ciudades importantes: Rotterdam, Gouda, Dordrecht, Leiden y Delft. 
                ',
                "assets/fscommand/hol1.jpg",
                "assets/fscommand/hol2.jpg",
                "assets/fscommand/hol3.jpg",
                "assets/fscommand/hol4.jpg"
            ],

            [14, "Dinamarca", 438, 300, 39,
                'Dinamarca<br><br>Capital:	Copenhagen<br>
                Idioma:	Danés<br>
                Superficie:	43.094 km_<br>
                Población:	5.397.640<br>
                Densidad:	125 hab./km_<br>
                Moneda:	Corona danesa<br>
                Tipo de gobierno:	Monarquía constitucional<br>
                Dinamarca es un país en la península de Jutlandia al norte de Europa, El territorio del país bordea el Mar Báltico y el Mar del Norte, en una península y varias islas al norte de Alemania y al sudeste de Suecia.
                La península Jutlandia forma la parte de tierra firme de Dinamarca, su costa oeste está protegida por dunas y bancos de arena de las tempestades en el mar del norte. Las 405 islas se encuentran en el mar Báltico que forma también la frontera este de Jutlandia. Sólo 79 de estas islas están habitadas. La altura media de Dinamarca es de tan sólo 7 m por encima del nivel del mar.
                El paisaje danés fue formado en gran parte por los glaciares que cubrían por completo esta zona. En las idas y venidas de las masas de hielo se acumularon colinas de material arenoso. Hoy en día un cinturón de estas colinas separa el este del oeste de Jutlandia.
                Las ciudades más grandes: Copenhague, Århus, Odense, Aalborg, Frederiksberg y Esbjerg. Al este de Jutlandia, separada por el estrecho del "pequeño Belt", se encuentra la isla Fionia y en su lado sureste sigue la isla de Langeland ("tierra larga"), algo más pequeña. Más allá del "gran Belt" está la isla de Selanda con la capital Copenhague. Más al este está la isla granítica Bornholm. Además se encuentran bajo mandato de Dinamarca Groenlandia y las islas Feroe. 
                ',
                "assets/fscommand/din1.jpg",
                "assets/fscommand/din2.jpg",
                "assets/fscommand/din3.jpg",
                "assets/fscommand/din4.jpg"
            ],

            [15, "Estonia", 603, 261, 39,
                'Estonia<br><br>Capital:	Tallín<br>
                Idioma:	Estonio<br>
                Superficie:	45.226 km_<br>
                Población:	1.332.893<br>
                Densidad:	29,8 hab./km_<br>
                Moneda:	Corona estonia<br>
                Tipo de gobierno:	Democracia parlamentaria<br>
                Estonia está situada en el noreste de Europa y forma parte de la Unión Europea (UE). Limita con el Mar Báltico al oeste, el Golfo de Finlandia al norte, el estado báltico de Letonia al sur y Rusia al este. El área de Estonia incluye una pequeña porción de tierra en la ribera meridional del golfo de Finlandia y más de 1.500 islas del mar Báltico, entre las que destacan Saaremaa y Hiiumaa, situadas frente al golfo de Riga. El país se encuentra dividido en 15 condados
                Es un país muy llano en el que abundan los humedales. Su máxima altura es el Suur Munamagi, de apenas 318 metros. De su geografía destacan dos grandes lagos: el Vorts y el Peipus (el cuarto mayor de Europa). El clima es continental, con veranos templados e inviernos fríos. El influjo del Báltico modera la temperatura y aporta mucha humedad.
                ',
                "assets/fscommand/esl1.jpg",
                "assets/fscommand/esl2.jpg",
                "assets/fscommand/esl3.jpg",
                "assets/fscommand/esl4.jpg"
            ],

            [16, "Letonia", 585, 299, 64,
                'Letonia<br><br>Capital:	Riga<br>
                Idioma:	Letón<br>
                Superficie:	64.589 km_<br>
                Población:	2.331.500<br>
                Densidad:	36 hab./km_<br>
                Moneda:	Lat<br>
                Tipo de gobierno:	república<br>
                Letonia es una república del noreste de Europa que forma parte de la Unión Europea (UE). Limita al norte con Estonia, al este con Rusia, al sur con Bielorrusia y Lituania y al oeste con el mar Báltico Está dividida en 26 condados llamados rajons. 7 ciudades tienen un estado separado. La geografía de Letonia se caracteriza por la suavidad de las elevaciones montañosas, la cantidad de bosques, lagos y ríos, que desembocan en el mar Báltico y en el Golfo de Riga. La mayor parte de su territorio es llano, cubierto por depósitos de tierra y barro y con grandes zonas ocupadas por bosques de coníferas, páramos y pantanos. La llanura de Zemgale, al sur, hasta el límite con Lituania, contiene las tierras más fértiles, por lo que es considerada el granero del país.
                ',
                "assets/fscommand/let1.jpg",
                "assets/fscommand/let2.jpg",
                "assets/fscommand/let3.jpg",
                "assets/fscommand/let4.jpg"
            ],

            [17, "Lituania", 584, 336, 44,
                'Lituania<br><br>Capital:	Vilna<br>
                Idioma:	Lituano<br>
                Superficie:	65.303 km_<br>
                Población:	3596.617<br>
                Densidad:	52.5 hab./km_<br>
                Moneda:	Litas<br>
                Tipo de gobierno:	República presidencialista<br>
                Lituania es un país al Norte de Europa que forma parte de la Unión Europea (UE). Limita al norte con Letonia, al este y al sur con Belarús, al suroeste con Polonia y el enclave ruso de Kaliningrado y al oeste con el mar Báltico. Es uno de los 3 estados denominados Países Bálticos (los otros dos son Letonia y Estonia). Se encuentra dividido políticamente en diez condados: Alytus, Kaunas, Klaip_da, Marijampol_, Panev__ys, _iauliai, Taurag_, Tel_iai, Utena, Vilna.
                Es la más grande y poblada de las repúblicas bálticas, con una pequeña costa arenosa de aproximadamente 100 km, de los cuales solo 40 kilómetros están abiertos sobre el mar Báltico. Klaipeda, su principal puerto esta localizada en la desembocadura del golfo de Kursiu. La reserva natural del golfo de Kursiu, el Parque Nacional Kursiu Nerija, ha sido catalogado como Patrimonio de la Humanidad por la UNESCO.
                ',
                "assets/fscommand/lit1.jpg",
                "assets/fscommand/lit2.jpg",
                "assets/fscommand/lit3.jpg",
                "assets/fscommand/lit4.jpg"
            ],
            [18, "Luxemburgo", 400, 441, 14,
                'Luxemburgo<br><br>Capital:	Luxemburgo<br>
                Idioma:	Luxemburgués, francés y alemán<br>
                Superficie:	2.586 km_<br>
                Población:	451.600<br>
                Densidad:	174,6 hab./km_<br>
                Moneda:	Euro<br>
                Tipo de gobierno:	Monarquía constitucional<br>
                El Gran Ducado de Luxemburgo es un país del noroeste de Europa que forma parte de la Unión Europea (UE). Limita al norte y al oeste con Bélgica, al este con Alemania y al sur con Francia. Es el séptimo país más pequeño de Europa, El país está dividido en 3 distritos (Dikrech, Gréiwemaacher y Lëtzebuerg), que a la vez están divididos en 12 cantones (Dikrech, Esch, Elzech, Gréiwemaacher, Iechternach, Kapellen, Klierf, Lëtzebuerg,  Miersch, Réiden, Réimech, Veianen y Wolz), y después en 118 comunas, la unidad administrativa menor del país.
                Tiene un territorio de carácter montañoso y con extensas masas boscosas. El relieve presenta dos regiones diferenciadas: en el norte, llamado Oesling, se extienden las estribaciones meridionales del macizo montañoso de las Ardenas, con una altura máxima de 500 metros, y por la que discurren los afluentes del Mosela. Al sur, el Gutland, constituye una extensa llanura prolongación de la cuenca parisina. De este a oeste el país se haya atravesado por el Sauer, afluyente del Mosela, que por su orilla derecha recibe al Alzette y por la izquierda al Our y al Clerf, entre otros. El paisaje se completa con el curso del Mosela, que discurre por el sector oriental, trazando la frontera con Alemania.
                ',
                "assets/fscommand/lux1.jpg",
                "assets/fscommand/lux2.jpg",
                "assets/fscommand/lux3.jpg",
                "assets/fscommand/lux4.jpg"
            ],

            [19, "Polonia", 512, 363, 119,
                'Polonia<br><br>Capital:	Varsovia<br>
                Idioma:	Polaco<br>
                Superficie:	312.685 km_<br>
                Población:	38.557.984<br>
                Densidad:	124 hab./km_<br>
                Moneda:	Zloty<br>
                Tipo de gobierno:	República<br>
                Polonia (es un país de Europa Central que forma parte de la Unión Europea (UE) y OTAN. Limita con Alemania, Chequia, Eslovaquia, Ucrania, Bielorrusia, Lituania y Rusia (Kaliningrado). Se divide en 16 regiones llamadas voivodatos (en distintos periodos de la historia de Polonia el número de voivodatos ha sido mayor o menor). Las ciudades mayores son: _ód_, Cracovia, Wroc_aw, Pozna_, Gda_sk, Szczecin, Bydgoszcz, Lublin, Katowice, Bia_ystok, Toru_, Olsztyn y Rzeszów
                En general, el suelo es poco elevado formando en su mayor parte por el Escudo Báltico y la Llanura Sarmática, los Cárpatos polacos se dividen en dos grandes bloques alineados: el Beskides Oriental y el Beskides Occidental. Al sudeste del país se encuentran los Sudetes. Al norte se encuentran numerosos lagos de origen glaciar. El principal río de Polonia es el Vístula, el Oder cruza por territorio polaco antes de fomar parte de la frontera con Alemania. Por el norte Polonia limita con el Mar Báltico.
                Tiene un clima continental con una amplitud térmica anual que se acentúa conforme se avanza hacia el este, donde pueden superar los 20°C de diferencia. La temperatura media en verano es de 15 a 20°C, mientras que en invierno se sitúa por debajo de los 0°C. 
                En la agricultura destaca el cultivo de la papa, de la que es el quinto productor mundial, y el de cereales. La remolacha, las fibras textiles, el lúpulo y el tabaco son sus principales cultivos industriales. También se obtienen legumbres, forraje, hortalizas y fruta. La actividad pesquera es significativa y, aunque opera en el mar Báltico, destaca su flota pesquera de altura para la captura de merluza y el arenque. En cuanto a la obtención de recursos minerales y energéticos, el carbón es el principal recurso del país y uno de sus principales productos de exportación. Se extrae en las cuencas de la Alta Silesia y Walbrzych. Son también importantes las reservas de azufre, cobre y plomo, así como las de zinc, plata, níquel, magnesita y sal gema. El resto de los recursos energéticos es escaso, exceptuando el gas natural, que se encuentra en los Cárpatos.
                ',
                "assets/fscommand/pol1.jpg",
                "assets/fscommand/pol2.jpg",
                "assets/fscommand/pol3.jpg",
                "assets/fscommand/pol4.jpg"
            ],

            [20, "Alemania", 406, 355, 113,
                'Alemania<br><br>Capital:	Berlín<br>
                Idioma:	Alemán<br>
                Superficie:	357.021 km_<br>
                Población:	82.468.000<br>
                Densidad:	242 hab./km_<br>
                Moneda:	Euro<br>
                Tipo de gobierno:	República federal parlamentaria<br>
                Alemania  es un país de Europa central que forma parte de la Unión Europea (UE). Limita al norte con el mar del Norte, Dinamarca y el mar Báltico; al este con Polonia y República Checa; al sur con Austria y Suiza, y al oeste con Francia, Luxemburgo, Bélgica y Países Bajos.
                Contiene una vasta diversidad de paisajes; montañas, bosques, colinas, llanuras, lagos, ríos y costas. Algunos de sus ríos más importantes son el Rin, el Elba, el Danubio y el Meno. Entre los lagos destaca el Constanza y el Müritz. Se encuentra en una zona climática moderada con una temperatura media anual 9 ºC. El territorio es el cuarto en cuanto a tamaño dentro de la Unión Europea. Es una confederación de 16 estados llamados Bundesländer o, coloquialmente, Länder. Es la tercera potencia económica mundial. El  Lema nacional: Unidad y justicia y libertad
                Consta de tres grandes regiones fisiográficas: una llanura de tierras bajas en el norte, un área de mesetas en el centro y una región montañosa en el sur. Las tierras bajas, que conforman la llanura de Alemania del norte, tienen un relieve variado que engloba diversos valles fluviales y un gran terreno poblado de brezos.
                Tiene grandes yacimientos de diversos minerales. El más importante es el carbón bituminoso, el cual se encuentra principalmente en la región del Rhur y en el Territorio del Sarre, aunque la industria alemana ha agotado la mayor parte de este recurso. La zona este produce gran cantidad de lignito (carbón de baja calidad). La potasa abunda en el suroeste, cerca de Friburgo de Brisgovia, y los depósitos de petróleo y gas natural se encuentran en el norte, cerca de las desembocaduras de los ríos Ems y Weser, y al este del Kiel. También tiene grandes yacimientos de sal gema, además de pequeñas cantidades de mercurio, plata, sulfuro y filones de plomo, uranio y cinc.
                ',
                "assets/fscommand/ale1.jpg",
                "assets/fscommand/ale2.jpg",
                "assets/fscommand/ale3.jpg",
                "assets/fscommand/ale4.jpg"
            ],

            [21, "República Checa", 481, 434, 89,
                'República Checa<br><br>Capital:	Praga<br>
                Idioma:	checo<br>
                Superficie:	78.866 km_<br>
                Población:	10.241.138<br>
                Densidad:	58 hab./km_<br>
                Moneda:	Corona checa<br>
                Tipo de gobierno:	República<br>
                La República Checa es un país en Europa Central que forma parte de la Unión Europea (UE). Limita al norte con Polonia, al este con Eslovaquia, al sur con Austria, y al oeste con Alemania. Junto con Polonia, Eslovaquia y Hungría, integra el Grupo Visegrad de naciones. Consta de 13 regiones y una ciudad capital.
                El territorio es considerado centro geográfico casi exacto del continente europeo, ubicado a unos 50 grados de latitud Norte y 15 longitud Este. Su superficie en el interior del país con planicies y mesetas ligeramente onduladas, mientras que a lo largo de la frontera, con excepción del Sureste del país, se presentan cadenas monta_osas que formaban históricamente la frontera natural de los llamados Países Checos. El punto más bajo es la salida del río Elba de la República Checa, mientras que el más alto es el monte Sn__ka.
                Los principales ríos son: Moldava, Ohre y Elba. El país posee pocos recursos naturales entre los cuales estan carbón mineral, lignito, caolina, arcillas, grafito, madera y depende de los recursos energéticos y de las materias primas externas.
                ',
                "assets/fscommand/rchec1.jpg",
                "assets/fscommand/rchec2.jpg",
                "assets/fscommand/rchec3.jpg",
                "assets/fscommand/rchec4.jpg"
            ],

            [22, "Austria", 467, 474, 80,
                'Austria<br><br>Capital:	Viena<br>
                Idioma:	Alemán<br>
                Superficie:	83.871 km_<br>
                Población:	8.206.524<br>
                Densidad:	97 hab./km_<br>
                Moneda:	Euro<br>
                Tipo de gobierno:	República federal democrática
                Austria, cuyo nombre significa Imperio del Esteestá situada en Europa Central. Comparte fronteras terrestres con Alemania, República Checa, Eslovaquia, Hungría, Eslovenia, Italia, Suiza y Liechtenstein. Se divide en nueve Estados:  Burgenland, Corintia, Baja Austria, Alta Austria, Salzburgo, Estiria, Tirol, Vorarlberg y Viena. Es uno de los países más prósperos y desarrollados de Europa.
                La mayor parte del territorio está dentro de la sección oriental de los Alpes que alcanzan alturas de más de 3000 m. La población se concentra en los valles de los ríos entre los que destaca el del más importante, el Danubio, que entra en Austria por Passau, en la frontera con Alemania; pasando por Linz y Viena, hasta Bratislava, en la frontera con Eslovaquia. En Alemania recibe al Inn, que pasa por Innsbruck, con su afluente el Salzach, que pasa por Salzburgo. El lago Constanza es el más grande del país y forma la frontera oeste con Alemania y Suiza.
                ',
                "assets/fscommand/aus1.jpg",
                "assets/fscommand/aus2.jpg",
                "assets/fscommand/aus3.jpg",
                "assets/fscommand/aus4.jpg"
            ],

            [23, "Eslovaquia", 540, 461, 72,
                'Eslovaquia<br><br>Capital:	Bratislava<br>
                Idioma:	Eslovaco<br>
                Superficie:	48.845 km_<br>
                Población:	5.431.363<br>
                Densidad:	111 hab./km_<br>
                Moneda:	Corona eslovaca<br>
                Tipo de gobierno:	Democracia Parlamentaria<br>
                Eslovaquia es una república centroeuropea que forma parte de la Unión Europea (UE). Limita al noroeste con República Checa, al norte con Polonia, al este con Ucrania, al sur con Hungría y al suroeste con Austria.
                Está subdividida en 8 kraje, cada uno de los cuales lleva el nombre de su capital: Bratislava, Trnava, Tren_ín, Nitra, Zilina, Banská Bystrica, Presov y Ko_ice
                La inmensa mayoría de los ríos de Eslovaquia pertenecen a la cuenca del Danubio, tan sólo algunos del extremo norte son de la vertiente del Mar Báltico. En el norte y centro de Eslovaquia se encuentran los Cárpatos. En esta unidad geográfica se encuentran las s montañas Gerlachovsk_ SEIT y Rysy entre otras. 
                ',
                "assets/fscommand/esl1.jpg",
                "assets/fscommand/esl2.jpg",
                "assets/fscommand/esl3.jpg",
                "assets/fscommand/esl4.jpg"
            ],

            [24, "Hungría", 533, 478, 85,
                'Hungría<br><br>Capital:	Budapest<br>
                Idioma:	Húngaro<br>
                Superficie:	93.030 km_<br>
                Población:	10.082.000<br>
                Densidad:	108 hab./km_<br>
                Moneda:	Forint<br>
                Tipo de gobierno:	República democrática<br><br>
                
                Hungría es un país de Europa Central que forma parte de la Unión Europea (UE). Limita con Austria, Eslovaquia, Ucrania, Rumania, Serbia, Croacia y Eslovenia. Junto con Polonia, Eslovaquia y Chequia, integra el grupo Visegrad de naciones.
                El 50 % de la superficie de Hungría es llana: la Gran Llanura húngara ocupa toda la parte sudeste del país.  Desde el punto de vista turístico el país se divide en 9 regiones: 1. Budapest, 2. Danubio Central y alrededores de Budapest, 3. El Transdanubio Occidental, 4. El Transdanubio Central, 5. El Transdanubio del sur, 6. El lago Balaton y sus alrededores, 7. El norte de Hungría, 7. La Gran Llanura norte, 8. La Gran Llanura sur, 9. El lago Tisza. Uno de los lugares turísticos más frecuentados es la Puszta: se puede admirar su modo de vida tradicional, sus animales específicos y las magníficas demostraciones ecuestres en el Parque Nacional de Hortobágy y en el Parque Nacional de Kiskunság.
                El lago Balaton,  alargado a unos 100 km de Budapest, es el mayor de Europa Central, y es uno de los mayores lagos de agua dulce de Europa. Conocido como el parque de la nación, Balatón está dividido en dos orillas que difieren entre sí: en el margen sur se alza la zona turística con altos hoteles y minúsculas playas, y en el norte se hallan más poblaciones históricas y lugares de interés, senderos de montana, mejor vino y mucha menos ostentación. Se considera como el "mar interior" húngaro y es el principal destino del turismo doméstico. El río más importante es el Danubio. El clima es continental, con inviernos fríos, veranos cálidos y precipitaciones medias.
                ',
                "assets/fscommand/hun1.jpg",
                "assets/fscommand/hun2.jpg",
                "assets/fscommand/hun3.jpg",
                "assets/fscommand/hun4.jpg"
            ],
            [5, "Suiza", 399, 492, 68,
                'Suiza<br><br>Capital:	Berna<br>
                Idioma:	Alemán, francés, italiano, romanche<br>
                Superficie:	41.285 km_<br>
                Población:	7.261.200<br>
                Densidad:	176 hab./km_<br>
                Moneda:	Franco suizo<br>
                Tipo de gobierno:	República federal<br>
                Suiza se encuentra situado aproximadamente en el centro de Europa. Limita al oeste con Francia, al sur con Francia e Italia, al este con Liechtenstein y Austria y al norte con Alemania. Se integra de 26 cantones, Los cantones están divididos en 2.758 comunas. Cada cantón tiene su propia constitución, poder legislativo, gobierno y parlamento. Algunas ciudades importantes son: Basilea, Berna, Ginebra, Lausana y Zurich
                Es un país eminentemente montañoso, el paisaje está caracterizado por los Alpes, una alta cadena montañosa que discurre a través de la zona central y sur del país. Entre los altos picos de los Alpes Suizos está el Pico Dufour que alcanza los 4.634 metros sobre el nivel del mar. En el Pico Dufour se encuentran numerosos valles y algunos incluso con glaciares. De ese lugar emergen varios de los ríos principales de Europa, entre ellos el Rin, el Ródano, el Inn, el Aare y el Ticino, ríos que suelen desembocar en algunos lagos, como por ejemplo el Lago Lemán, el Lago de Zúrich, Lago Neuchâtel y el Lago Constanza. A su vez, estos y otros lagos son de origen glaciar, formados los más grandes en las morrenas terminales de los antiguos glaciares alpinos. 
                La parte del norte de Suiza, la más poblada, es más abierta, pero aún es medianamente montañosa. El clima suizo es normalmente templado, pero puede variar mucho dependiendo de la localidad, desde el severo clima en las altas montañas hasta el agradable clima mediterráneo en la parte sur. Los suizos son reconocidos por sus bancos, chocolates, quesos y relojes.
                ',
                "assets/fscommand/sui1.jpg",
                "assets/fscommand/sui2.jpg",
                "assets/fscommand/sui3.jpg",
                "assets/fscommand/sui4.jpg"
            ],
            
        ];
        $cityAry = [
            [0, "", 0, 0, 0],
            [1, "Gaborne", 264, 310, 18],
            [2, "Dublín", 242, 344, 18],
            [3, "Londres", 324, 397, 18],
            [4, "París", 341, 469, 18],
            [5, "Bruselas", 376, 416, 18],                         
            [6, "Luxemburgo", 398, 443, 18],
            [7, "Berna", 415, 500, 18],
            [8, "Copenhage", 451, 316, 18],
            [9, "Amsterdam", 399, 390, 18],
            [10, "Berlín", 483, 397, 18],
            [11, "Praga", 499, 449, 18],
            [12, "Viena", 516, 487, 18],
            [13, "Budapest", 561, 499, 18],
            [14, "Bratislava", 563, 469, 18],
            [15, "Varsovia", 590, 380, 18],  

            [16, "Kishinew", 691, 488, 18],
            [17, "Kiev", 714, 440, 18],
            [18, "Minsk", 652, 370, 18],
            [19, "Vilna", 602, 344, 18],
            [20, "Riga", 602, 315, 18],
            [21, "Tallin", 612, 267, 18],
            [22, "Gaborone", 626, 215, 18],
            [23, "Estocolmo", 535, 255, 18],
            [24, "Oslo", 475, 247, 18],


        ];
        //#### $riverAry[ idNum, name, x, y, w] ####//
        $riverAry = [
            [0, 0, 0],
            [1, "Lago Vanern", 532, 262, 20],
            [3, "Lago Vanern", 500, 270, 18],
            [5, "Río Támesi", 293, 381, 52],
            [7, "Lagos de Finlandia", 600, 179, 45],
            [9, "Río Nelson", 516, 292, 15],
            [11, "Río Elba", 435, 377, 70],
            [13, "Río Rhín", 389, 400, 50],
            [15, "Río Danubio", 450, 482, 147],
            [17, "Río Ródano", 375, 493, 29],
            [19, "Río Loira", 287, 496, 86],
            [21, "Río Sena", 319, 447, 54],
            
        ];
        $mountAry = [

            [0, ""],
            [1, "Cordillera Escandinava", 433, 67, 163],
            [2, "Montes Peninos", 299, 274, 56],
            [3, "Montes Vosgas", 404, 437, 31],
            [4, "Montes Pirineos", 280, 537, 50],
            [5, "Montes Alpes", 412, 497, 103],

        ];

        $songAry = [
            [0, "", 0, 0, 0, 0],
            [1, "Stonehenge, Gran bretana ", 312, 376, 20, 2, "assets/fscommand/lugares/belen.JPG"],
            [2, "Eurotúnel", 340, 424, 20, 2, "assets/fscommand/lugares/banios.JPG"],
            [3, "Torre Eiffel, Francia", 325, 462, 20, 2, "assets/fscommand/lugares/huascaran.JPG"],
            [4, "Castillo Neuschwanstein, Alemania", 454, 464, 20, 2, "assets/fscommand/lugares/callejon.JPG"],
            [5, "Muro de Berlín, Alemania", 471, 385, 20, 2, "assets/fscommand/lugares/conococha.JPG"],
            [6, "Edificio del Parlamento, Hungría", 559, 486, 20, 2, "assets/fscommand/lugares/conococha.JPG"]     
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
        [4, 24, 23,19, 2], //1
        [1,16,17,19], //2
        [5,12,18,20,], //3
        [1],//4
        [3,20,22],//5
        [7,8],//6
        [6,8],//7
        [6,7],//8
        [10],//9
        [9],//10
        [],//11
        [3,13,18,20],//12
        [12,20],//13
        [20],//14
        [16],//15
        [2,15,17],//16
        [2,16,19],//17
        [3,12,20],//18
        [1,2,17,20,21,23],//19
        [3,5,12,13,18,19,21,22,],//20
        [19,20,22,23],//21
        [5,20,21,23,24],//22
        [1,19,21,22,24],//23
        [22,23],//24 
        
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
        getObj("cityImg_3").src = locationAry[sel][7];
        getObj("cityImg_4").src = locationAry[sel][8];

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

        <div id="content_bar" style="background-image: url('assets/bg.png'); width:800px; height: 600px">

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
                            <img src="assets/minmap.png" style="position: absolute;left: -52px;top: -6px;width:467px; display: none;" id="minmap">
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
                        <img id="i_1" src="assets/item129.png" width="20px" style="position: absolute;left: 389px;top: 82px;" onmouseover="infoiover(129, 1)" onmouseout="infoitout(129, 1)" title="Gas" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_2" src="assets/item129.png" width="20px" style="position: absolute;left: 389px;top: 174px;" onmouseover="infoiover(129, 2)" onmouseout="infoitout(129, 2)" title="Gas" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_4" src="assets/item84.png" width="40px" style="position: absolute;left: 395px;top: 48px;" onmouseover="infoiover(84, 4)" onmouseout="infoitout(84, 4)" title="Petróleo" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_5" src="assets/item84.png" width="40px" style="position: absolute;left: 357px;top: 101px;" onmouseover="infoiover(84, 5)" onmouseout="infoitout(84, 5)" title="Petróleo" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_6" src="assets/item84.png" width="40px" style="position: absolute;left: 334px;top: 200px;" onmouseover="infoiover(84, 6)" onmouseout="infoitout(84, 6)" title="Petróleo" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_7" src="assets/item14.png" width="40px" style="position: absolute;left: 482px;top: 60px;" onmouseover="infoiover(14, 7)" onmouseout="infoitout(14, 7)" title="Pesca" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_8" src="assets/item14.png" width="40px" style="position: absolute;left: 198px;top: 185px;" onmouseover="infoiover(14, 8)" onmouseout="infoitout(14, 8)" title="Pesca" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_9" src="assets/item14.png" width="40px" style="position: absolute;left: 531px;top: 178px;" onmouseover="infoiover(14, 9)" onmouseout="infoitout(14, 9)" title="Pesca" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_10" src="assets/item13.png" width="40px" style="position: absolute;left: 227px;top: 333px;" onmouseover="infoiover(13, 10)" onmouseout="infoitout(13, 10)" title="Ganadería" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_11" src="assets/item13.png" width="40px" style="position: absolute;left: 408px;top: 372px;" onmouseover="infoiover(13, 11)" onmouseout="infoitout(13, 11)" title="Ganadería" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_12" src="assets/item13.png" width="40px" style="position: absolute;left: 573px;top: 333px;" onmouseover="infoiover(13, 12)" onmouseout="infoitout(13, 12)" title="Ganadería" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_13" src="assets/item13.png" width="40px" style="position: absolute;left: 497px;top: 243px;" onmouseover="infoiover(13, 13)" onmouseout="infoitout(13, 13)" title="Ganadería" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_14" src="assets/item11.png" width="40px" style="position: absolute;left: 555px;top: 91px;" onmouseover="infoiover(11, 14)" onmouseout="infoitout(11, 14)" title="Minería" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_15" src="assets/item11.png" width="40px" style="position: absolute;left: 481px;top: 375px;" onmouseover="infoiover(11, 15)" onmouseout="infoitout(11, 15)" title="Minería" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_16" src="assets/item11.png" width="40px" style="position: absolute;left: 528px;top: 387px;" onmouseover="infoiover(11, 16)" onmouseout="infoitout(11, 16)" title="Minería" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_17" src="assets/item11.png" width="40px" style="position: absolute;left: 662px;top: 415px;" onmouseover="infoiover(11, 17)" onmouseout="infoitout(11, 17)" title="Minería" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_18" src="assets/item20.png" width="40px" style="position: absolute;left: 497px;top: 296px;" onmouseover="infoiover(20, 18)" onmouseout="infoitout(20, 18)" title="Turismo" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_19" src="assets/item20.png" width="40px" style="position: absolute;left: 301px;top: 309px;" onmouseover="infoiover(20, 19)" onmouseout="infoitout(20, 19)" title="Turismo" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_20" src="assets/item20.png" width="40px" style="position: absolute;left: 436px;top: 425px;" onmouseover="infoiover(20, 20)" onmouseout="infoitout(20, 20)" title="Turismo" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_21" src="assets/item2.png" width="30px" style="position: absolute;left: 534px;top: 140px;" onmouseover="infoiover(2, 21)" onmouseout="infoitout(2, 21)" title="Industria" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_22" src="assets/item2.png" width="30px" style="position: absolute;left: 613px;top: 101px;" onmouseover="infoiover(2, 22)" onmouseout="infoitout(2, 22)" title="Industria" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_23" src="assets/item2.png" width="30px" style="position: absolute;left: 446px;top: 216px;" onmouseover="infoiover(2, 23)" onmouseout="infoitout(2, 23)" title="Industria" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_24" src="assets/item125.png" width="30px" style="position: absolute;left: 528px;top: 336px;" onmouseover="infoiover(125, 24)" onmouseout="infoitout(125, 24)" title="Exportación" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_25" src="assets/item125.png" width="30px" style="position: absolute;left: 464px;top: 339px;" onmouseover="infoiover(125, 25)" onmouseout="infoitout(125, 25)" title="Exportación" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_26" src="assets/item122.png" width="30px" style="position: absolute;left: 297px;top: 373px;" onmouseover="infoiover(122, 26)" onmouseout="infoitout(122, 26)" title="Vicuña" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_27" src="assets/item122.png" width="30px" style="position: absolute;left: 498px;top: 487px;" onmouseover="infoiover(122, 27)" onmouseout="infoitout(122, 27)" title="Vicuña" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_28" src="assets/item21.png" width="30px" style="position: absolute;left: 353px;top: 421px;" onmouseover="infoiover(21, 28)" onmouseout="infoitout(21, 28)" title="Arroz" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_29" src="assets/item77.png" width="50px" style="position: absolute;left: 404px;top: 441px;" onmouseover="infoiover(77, 29)" onmouseout="infoitout(77, 29)" title="Vino" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_30" src="assets/item77.png" width="50px" style="position: absolute;left: 293px;top: 535px;" onmouseover="infoiover(77, 30)" onmouseout="infoitout(77, 30)" title="Vino" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_31" src="assets/item92.png" width="31px" style="position: absolute;left: 322px;top: 383px;" onmouseover="infoiover(92, 31)" onmouseout="infoitout(92, 31)" title="Aguila" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_32" src="assets/item87.png" width="32px" style="position: absolute;left: 319px;top: 481px;" onmouseover="infoiover(87, 32)" onmouseout="infoitout(87, 32)" title="Quesos" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_33" src="assets/item133.png" width="25px" style="position: absolute;left: 405px;top: 490px;" onmouseover="infoiover(133, 33)" onmouseout="infoitout(133, 33)" title="Reloj" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_34" src="assets/item134.png" width="30px" style="position: absolute;left: 162px;top: 349px;" onmouseover="infoiover(134, 34)" onmouseout="infoitout(134, 34)" title="Extrella de Man" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_35" src="assets/item61.png" width="30px" style="position: absolute;left: 198px;top: 452px;" onmouseover="infoiover(61, 35)" onmouseout="infoitout(61, 35)" title="Camarón" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">

                        <img id="i_36" src="assets/item44.png" width="30px" style="position: absolute;left: 586px;top: 429px;" onmouseover="infoiover(44, 36)" onmouseout="infoitout(44, 36)" title="Zorro" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_37" src="assets/item98.png" width="30px" style="position: absolute;left: 516px;top: 199px;" onmouseover="infoiover(98, 37)" onmouseout="infoitout(98, 37)" title="Exportación" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">

                        <img id="i_38" src="assets/item81.png" width="30px" style="position: absolute;left: 666px;top: 375px;" onmouseover="infoiover(81, 38)" onmouseout="infoitout(81, 38)" title="Algodón" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_39" src="assets/item135.png" width="30px" style="position: absolute;left: 356px;top: 487px;" onmouseover="infoiover(135, 39)" onmouseout="infoitout(135, 39)" title="Garza" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
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
            <div style=" writing-mode: vertical-rl; text-orientation: downright; transform: rotate(180deg); font-size:50px; color:#FFF; 
             border-radius: 10px;  height:380px; margin-left: 20px;">
                Norrte de Europa
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
