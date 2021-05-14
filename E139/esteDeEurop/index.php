<html>

<head>
    <meta charset="utf-8" />
    <title>Rusia y vecinos</title>

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
            
            [1, "Rusia", 125, 115, 690, 
                "Rusia<br><br>Capital:	Moscú<br>
                Idioma:	Ruso<br>
                Superficie:	17.075.200 km_<br>
                Población:	142.893.540<br>
                Densidad:	8 hab./km_<br>
                Moneda:	Rublo<br>
                Tipo de gobierno:	República. federal democrática<br>
                Rusia es el país más extenso del mundo, extendiéndose entre Europa y Asia. Su costa se extiende del Océano Ártico al Océano Pacífico del Norte, y tiene además costa en mares interiores como el Mar Báltico, Mar Negro y Mar Caspio. Limita con: Noruega, Finlandia, Estonia, Letonia, Bielorrusia, Lituania, Polonia, Ucrania, Georgia, Azerbaiyán, Kazajstán, China, Mongolia y Corea del Norte.
                Consiste en un gran número de subdivisiones políticas diferentes, haciendo un total de 89 componentes constituyentes. Hay 21 repúblicas dentro de la federación que disfrutan de un alto grado de autonomía sobre la mayor parte de cuestiones y estas corresponden a algunas minorías étnicas de Rusia. El territorio restante consiste en 49 provincias conocidas como oblast y seis regiones (kray), entre las que se encuentran diez distritos autónomos y un oblast autónomo. Aparte de estos hay dos ciudades federales: Moscú y San Petersburgo. 
                ",
                "assets/fscommand/rus1.jpg",
                "assets/fscommand/rus2.jpg",
                "assets/fscommand/rus3.jpg",
                "assets/fscommand/rus4.jpg"
            ],
            [2, "Georgia", 165, 452, 32,
                'Georgia<br><br>Capital:	Tbilisi<br>
                Idioma:	Georgiano<br>
                Superficie:	69.500 km_<br>
                Población:	4.677.401<br>
                Densidad:	67,3 hab./km_<br>
                Moneda:	Lari<br>
                Tipo de gobierno:	República<br>
                Georgia se sitúa en la costa oriental del mar Negro. El Cáucaso, frontera natural entre Europa y Asia, marca el carácter montañoso del relieve. El Gran Cáucaso, por el norte, separa Georgia de Rusia y alberga el Shkhara, cumbre de Georgia y la segunda cima de Europa. El Cáucaso Menor, al sur, aísla el país de Turquía y Armenia. Entre ambas cadenas se abren dos valles fluviales: el del Kura, que desemboca en el Caspio, y el del Rioni, que fluye hacia el Negro creando una región de tierras bajas;  ostenta una de las topografías más varias de las antiguas repúblicas soviéticas.
                Los terremotos y deslices de montaña en estas zonas llegan a ser característicos y condicionan el estilo de vida. Entre los desastres naturales más recientes estuvo el deslizamiento de rocas en Ajaria, en 1989, que desplazó a cientos de personas y dos terremotos en 1991 que destruyeron varios pueblos en la zona central y norte del país además de Osetia del Sur.
                ',
                "assets/fscommand/geo1.jpg",
                "assets/fscommand/geo2.jpg",
                "assets/fscommand/geo3.jpg",
                "assets/fscommand/geo4.jpg"
            ],
            [3, "Azerbaiyán", 181, 461, 28,
                "Azerbaiyán<br><br>Capital:	Bakú<br>
                Idioma:	Azerí<br>
                Superficie:	86.600 km_<br>
                Población:	7.911.974<br>
                Densidad:	90 hab./km_<br>
                Moneda:	Manat azerbaiyano<br>
                Tipo de gobierno:	República presidencialista<br>
                Azerbaiyán en el Cáucaso al borde del Mar Caspio, limita con Rusia por el norte, con Georgia, Armenia, por el oeste e Irán por el sur. Está dividido en: 59 rayones, 11 ciudades y 1 república autónoma 
                El relieve está condicionado por la cordillera del Cáucaso, que alcanza una altitud de 4.480 metros en la montaña Bazar Djuzi. Tanto el norte como el suroeste del país es muy montañoso, quedando sólo la zona sur (atravesada por el río Kura) apta para la agricultura.
                Perteneciente a Azerbaiyán pero separada físicamente de él, se encuentra la República autónoma de Naxçiván que limita con Armenia, Turquía e Irán
                La economía está basada en la industria, incluyendo construcción de maquinaria, refinado de petróleo (del que el país es un productor muy importante), industria textil y química. En las tierras bajas, cercanas al mar Caspio el clima permite el cultivo de algodón, frutas, té, tabaco y otros cultivos típicos de los climas subtropicales. El gusano de seda es cultivado para su aprovechamiento en la industria textil. En las zonas montañosas del norte y del oeste se practica la ganadería: vacas, ovejas y cabras. En el Mar Caspio se practica la pesca, entre la que hay que citar la del esturión.
                ",
                "assets/fscommand/aze1.jpg",
                "assets/fscommand/aze2.jpg",
                "assets/fscommand/aze3.jpg",
                "assets/fscommand/aze4.jpg"
            ],
            [4, "Azerbaiyán", 176, 468, 22,
                'Azerbaiyán<br><br>Capital:	Bakú<br>
                Idioma:	Azerí<br>
                Superficie:	86.600 km_<br>
                Población:	7.911.974<br>
                Densidad:	90 hab./km_<br>
                Moneda:	Manat azerbaiyano<br>
                Tipo de gobierno:	República presidencialista<br>
                Azerbaiyán en el Cáucaso al borde del Mar Caspio, limita con Rusia por el norte, con Georgia, Armenia, por el oeste e Irán por el sur. Está dividido en: 59 rayones, 11 ciudades y 1 república autónoma 
                El relieve está condicionado por la cordillera del Cáucaso, que alcanza una altitud de 4.480 metros en la montaña Bazar Djuzi. Tanto el norte como el suroeste del país es muy montañoso, quedando sólo la zona sur (atravesada por el río Kura) apta para la agricultura.
                Perteneciente a Azerbaiyán pero separada físicamente de él, se encuentra la República autónoma de Naxçiván que limita con Armenia, Turquía e Irán
                La economía está basada en la industria, incluyendo construcción de maquinaria, refinado de petróleo (del que el país es un productor muy importante), industria textil y química. En las tierras bajas, cercanas al mar Caspio el clima permite el cultivo de algodón, frutas, té, tabaco y otros cultivos típicos de los climas subtropicales. El gusano de seda es cultivado para su aprovechamiento en la industria textil. En las zonas montañosas del norte y del oeste se practica la ganadería: vacas, ovejas y cabras. En el Mar Caspio se practica la pesca, entre la que hay que citar la del esturión.
                ',
                "assets/fscommand/arm1.jpg",
                "assets/fscommand/arm2.jpg",
                "assets/fscommand/arm3.jpg",
                "assets/fscommand/arm4.jpg"
            ],
            [5, "Kazajstán", 214, 388, 155,
                'Kazajstán<br><br>Capital:	Astaná<br>
                Idioma:	Kazaco<br>
                Superficie:	2.727.300 km_<br>
                Población:	15.233.244<br>
                Densidad:	6,2 hab./km_<br>
                Moneda:	Tenge<br>
                Tipo de gobierno:	República Autoritaria<br>
                Kazajstán, Kazajistán o Kazakstán  es un país en Asia Central. Formó parte de la Unión de Repúblicas Socialistas Soviéticas (URSS) hasta que esta fue disuelta en 1991.
                Limita con Rusia, China, Kirguizistán, Uzbekistán y Turkmenistán y tiene una costa en el Mar Caspio. El país se extiende en una enorme estepa situada entre el Mar Caspio y los montes Altai. Al sur, limita con el desierto de Kyzylkum, ubicado entre el Mar de Aral y la llamada "Estepa del Hambre", mientras que al norte del país se encuentran las mesetas del lago Baljash y al oeste las estribaciones de los montes Altai y Tien Shan. Es el noveno país más grande del mundo por superficie, pero su semidesierto le impide tener una población proporcional a su territorio. Se divide en  14 provincias  y 3 ciudades
                ',
                "assets/fscommand/kaz1.jpg",
                "assets/fscommand/kaz2.jpg",
                "assets/fscommand/kaz3.jpg",
                "assets/fscommand/kaz4.jpg"
            ],
            [6, "Uzbekistán", 232, 438, 75,
                "Uzbekistán<br><br>Capital:	Tashkent<br>
                Idioma:	Uzbeko<br>
                Superficie:	447.400 km_<br>
                Población:	25.563.441<br>
                Densidad:	57 hab./km_<br>
                Moneda:	Som Uzbeco<br>
                Tipo de gobierno:	<br>
                Uzbekistán es un país situado en Asia Central. Limita al norte y noroeste con Kazajstán, al sur con Afganistán, al noreste con Kirguizistán, al sureste con Tayikistán y al suroeste con Turkmenistán. Es uno de los dos únicos países en el mundo que no sólo no tienen salida al mar sino que tampoco la tiene ninguno de los países con los que tiene frontera. El otro país en esta situación es Liechtenstein
                Está dividido en 12 regiones autónomas (vilotayi), una ciudad (shahri) y una república autónoma (respublikasi). Es el país más poblado de Asia Central. Sus principales exportaciones son: algodón, oro, gas natural, fertilizantes minerales, metales ferrosos, textiles, vehículos de motor.
                ",
                "assets/fscommand/uzb1.jpg",
                "assets/fscommand/uzb2.jpg",
                "assets/fscommand/uzb3.jpg",
                "assets/fscommand/uzb4.jpg"
            ],
            [7, "Turkmenistán", 226, 470, 49,
                'Turkmenistán<br><br>Capital:	A_gabat<br>
                Idioma:	Turcomano<br>
                Superficie:	488,100 km_;<br>
                Población:	4,603,244<br>
                Densidad:	9.4/km_<br>
                Moneda:	Manat turcomano<br>
                Tipo de gobierno:	República presidencialista<br>
                Turkmenistán, es un país en Asia Central, una de las repúblicas constituyentes de la Unión Soviética hasta su disolución en 1991. Comparte fronteras con Afganistán, Irán, Kazajstán y Uzbekistán. Posee salida hacia el Mar Caspio.
                E está dividida en cuatro provincias (Balkan, Dashovuz, Leban y Mary) y una ciudad (Asjabad). Enclavado en su mayor parte en la depresión aralocaspiana, y ocupado casi en su totalidad por el desierto de Karakum y la meseta de Karabil. Al suroeste se elevan los macizos del Gran Blján (1880 m), el Pequeño Balján (1006 m), y la cordillera de Kopet-Dag, que lo separan de Irán. Por el Noreste y este penetran los rebordes rocosos de la meseta de Ustiurt, que comparte con Kazajstán y Uzbekistán.
                Los ríos principales son el Amu Daria, el Atrak y el Murgab. La costa turkmena, situada en su totalidad en el mar Caspio, es llana en su mitad meridional y escarpada en el centro y sur. En la parte septentrional está la bahía de Kasnovodsk, la península del mismo nombre y el golfo de Kará-BogazGol, ocupado por un gran pantano de agua salada. El clima es subtropical desértico, con poca lluvia. Los vientos son cálidos y secos, y la mayor cantidad de precipitaciones ocurren entre enero y mayo. 
                ',
                "assets/fscommand/tur1.jpg",
                "assets/fscommand/tur2.jpg",
                "assets/fscommand/tur3.jpg",
                "assets/fscommand/tur4.jpg"
            ],

            [8, "Tayikistán", 297, 479, 26,
                'LA LIBERTAD<br><br>Capital:	Dushanbe<br>
                Idioma:	Tayiko<br>
                Superficie:	143.100 km_<br>
                Población:	6.507.000<br>
                Densidad:	51 hab./km_<br>
                Moneda:	Somoni<br>
                Tipo de gobierno:	República<br>
                Tayikistán es un país en Asia central. Limita con Afganistán, República Popular China, Kirguizistán y Uzbekistán. Es considerado miembro de las Naciones Unidas desde el 2 de Marzo de 1992.
                Tayikistán no tiene ninguna salida al mar, y es el país más pequeño de Asia Central en extensión. Tiene numerosas sierras y cordilleras, incluyendo la Tian Shan y la Pamir. Más del 50% del país está por encima del nivel del mar. El país se extiende sobre los límites de la meseta de Pamir, con alturas superiores a los 7.000 m, una parte del río Amu-Darya y la cadena de Zeravshan. Al norte, el sistema del Pamir culmina en el pico Comunismo a 7.495 m de altitud por encima de los valles cubiertos de glaciares, cuya superficie ocupa más de 8.000 km_. Por el sur el terreno está formado por altas mesetas que superan los 4.000 m, de donde emergen cadenas montañosas que alcanzan los 6.000 m. Los principales ríos son el Pyanj (alto Amu Darya) y el Vajsh. Los ríos Amu-Darya y Pyanj forman la frontera con Afganistán. Al noroeste se encuentra el fértil valle de Fergana.
                ',
                "assets/fscommand/taj1.jpg",
                "assets/fscommand/taj2.jpg",
                "assets/fscommand/taj3.jpg",
                "assets/fscommand/taj4.jpg"
            ],

            [9, "Kirgustán", 304, 464, 38,
                '',
                "assets/fscommand/kir1.jpg",
                "assets/fscommand/kir2.jpg",
                "assets/fscommand/kir3.jpg",
                "assets/fscommand/kir4.jpg"
            ],
            
        ];
        $cityAry = [
            [0, "", 0, 0, 0],
            [1, "Moscú", 200, 339, 18],
            [2, "Tbilisi", 176, 456, 10],
            [3, "Ereván", 178, 469, 10],
            [4, "Baku", 195, 469, 12],
            [5, "Astana", 321, 443, 18],                         
            [6, "Dushanbe", 274, 473, 18],
            [7, "Ashkabad", 243, 478, 18],
            [8, "Tashkent", 303, 409, 12],
            [9, "Bishkek", 319, 467, 12],


        ];
        //#### $riverAry[ idNum, name, x, y, w] ####//
        $riverAry = [
            [0, 0, 0],
            [1, "Río Don", 186, 302, 20],
            [3, "Río Volta", 168, 270, 129],
            [5, "Río Amu Daryá", 264, 463, 54],
            [7, "Río Irtish", 322, 366, 45],
            [9, "Río Ob", 307, 281, 61],
            [11, "Río Yenise", 431, 159, 92],
            [13, "Río Lena", 528, 197, 68],
            [15, "Río Amur", 573, 390, 33],
            
        ];
        $mountAry = [

            [0, ""],
            [1, "Meseta Yemen", 174, 316, 60],
            [2, "Montes Elbruz", 164, 440, 29],
            [3, "Montes Altai", 435, 379, 61],
            [4, "Montes Verjoiansk", 618, 243, 66],
            [5, "Montes Yablonovi", 533, 364, 59],
            [6, "Montes Chersky", 656, 306, 44],
            [7, "Montes de Kolima", 686, 298, 60],

        ];

        $songAry = [
            [0, "", 0, 0, 0, 0],
            [1, "Ferrocarril Transiberiano, Rusia", 213, 311, 20, 2, "assets/fscommand/lugares/belen.JPG"],
            [2, "Catedral de San Basilio, Rusia", 180, 330, 20, 2, "assets/fscommand/lugares/banios.JPG"],
            [3, "Desierto de Kara Kum, Turkmenistán", 237, 462, 20, 2, "assets/fscommand/lugares/huascaran.JPG"],
            [4, "Centro Espacial Baykonur, Rusia", 329, 369, 20, 2, "assets/fscommand/lugares/callejon.JPG"],
            [5, "Casa de Madera, Rusia", 542, 283, 20, 2, "assets/fscommand/lugares/conococha.JPG"]   
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
        [2,3,5], //1
        [1,3,4], //2
        [2,4,7], //3
        [2,3],//4
        [1,6,7,9,],//5
        [5,7,9,8],//6
        [5,6],//7
        [7,9],//8
        [5,6,8],//9
        
        
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
                            <img src="assets/minmap.png" style="position: absolute;left: -129px;top: 53px;width: 533px; display: none;" id="minmap">
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

                       
                        <img id="i_1" src="assets/item125.png" width="30px" style="position: absolute;left: 181px;top: 210px;" onmouseover="infoiover(125, 1)" onmouseout="infoitout(125, 1)" title="Exportación" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_2" src="assets/item125.png" width="30px" style="position: absolute;left: 306px;top: 149px;" onmouseover="infoiover(125, 2)" onmouseout="infoitout(125, 2)" title="Exportación" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_3" src="assets/item125.png" width="30px" style="position: absolute;left: 532px;top: 149px;" onmouseover="infoiover(125, 3)" onmouseout="infoitout(125, 3)" title="Exportación" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_4" src="assets/item125.png" width="30px" style="position: absolute;left: 729px;top: 375px;" onmouseover="infoiover(125, 4)" onmouseout="infoitout(125, 4)" title="Exportación" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_5" src="assets/item125.png" width="30px" style="position: absolute;left: 599px;top: 461px;" onmouseover="infoiover(125, 5)" onmouseout="infoitout(125, 5)" title="Exportación" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_6" src="assets/item14.png" width="30px" style="position: absolute;left: 150px;top: 150px;" onmouseover="infoiover(14, 6)" onmouseout="infoitout(14, 6)" title="Pesca" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_7" src="assets/item14.png" width="30px" style="position: absolute;left: 589px;top: 123px;" onmouseover="infoiover(14, 7)" onmouseout="infoitout(14, 7)" title="Pesca" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_8" src="assets/item14.png" width="30px" style="position: absolute;left: 710px;top: 175px;" onmouseover="infoiover(14, 8)" onmouseout="infoitout(14, 8)" title="Pesca" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_9" src="assets/item14.png" width="30px" style="position: absolute;left: 695px;top: 381px;" onmouseover="infoiover(14, 9)" onmouseout="infoitout(14, 9)" title="Pesca" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_10" src="assets/item11.png" width="30px" style="position: absolute;left: 253px;top: 253px;" onmouseover="infoiover(11, 10)" onmouseout="infoitout(11, 10)" title="Minería" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_11" src="assets/item11.png" width="30px" style="position: absolute;left: 389px;top: 205px;" onmouseover="infoiover(11, 11)" onmouseout="infoitout(11, 11)" title="Minería" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_12" src="assets/item11.png" width="30px" style="position: absolute;left: 698px;top: 248px;" onmouseover="infoiover(11, 12)" onmouseout="infoitout(11, 12)" title="Minería" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_13" src="assets/item11.png" width="30px" style="position: absolute;left: 667px;top: 371px;" onmouseover="infoiover(11, 13)" onmouseout="infoitout(11, 13)" title="Minería" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_14" src="assets/item11.png" width="30px" style="position: absolute;left: 552px;top: 312px;" onmouseover="infoiover(11, 14)" onmouseout="infoitout(11, 14)" title="Minería" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_15" src="assets/item11.png" width="30px" style="position: absolute;left: 438px;top: 322px;" onmouseover="infoiover(11, 15)" onmouseout="infoitout(11, 15)" title="Minería" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_16" src="assets/item11.png" width="30px" style="position: absolute;left: 290px;top: 346px;" onmouseover="infoiover(11, 16)" onmouseout="infoitout(11, 16)" title="Minería" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_17" src="assets/item11.png" width="30px" style="position: absolute;left: 272px;top: 399px;" onmouseover="infoiover(11, 17)" onmouseout="infoitout(11, 17)" title="Minería" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_18" src="assets/item11.png" width="30px" style="position: absolute;left: 184px;top: 408px;" onmouseover="infoiover(11, 18)" onmouseout="infoitout(11, 18)" title="Minería" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_19" src="assets/item84.png" width="40px" style="position: absolute;left: 168px;top: 332px;" onmouseover="infoiover(84, 19)" onmouseout="infoitout(84, 19)" title="Petróleo" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_20" src="assets/item84.png" width="40px" style="position: absolute;left: 208px;top: 405px;" onmouseover="infoiover(84, 20)" onmouseout="infoitout(84, 20)" title="Petróleo" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_21" src="assets/item84.png" width="40px" style="position: absolute;left: 279px;top: 476px;" onmouseover="infoiover(84, 21)" onmouseout="infoitout(84, 21)" title="Petróleo" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_22" src="assets/item84.png" width="40px" style="position: absolute;left: 556px;top: 379px;" onmouseover="infoiover(84, 22)" onmouseout="infoitout(84, 22)" title="Petróleo" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_23" src="assets/item13.png" width="40px" style="position: absolute;left: 347px;top: 394px;" onmouseover="infoiover(13, 23)" onmouseout="infoitout(13, 23)" title="Petróleo" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_24" src="assets/item13.png" width="40px" style="position: absolute;left: 448px;top: 369px;" onmouseover="infoiover(13, 24)" onmouseout="infoitout(13, 24)" title="Petróleo" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_25" src="assets/item13.png" width="40px" style="position: absolute;left: 539px;top: 399px;" onmouseover="infoiover(13, 25)" onmouseout="infoitout(13, 25)" title="Petróleo" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_26" src="assets/item13.png" width="40px" style="position: absolute;left: 602px;top: 259px;" onmouseover="infoiover(13, 26)" onmouseout="infoitout(13, 26)" title="Petróleo" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_27" src="assets/item81.png" width="26px" style="position: absolute;left: 215px;top: 470px;" onmouseover="infoiover(81, 27)" onmouseout="infoitout(81, 27)" title="Petróleo" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_28" src="assets/item81.png" width="26px" style="position: absolute;left: 244px;top: 479px;" onmouseover="infoiover(81, 28)" onmouseout="infoitout(81, 28)" title="Petróleo" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_29" src="assets/item81.png" width="26px" style="position: absolute;left: 308px;top: 436px;" onmouseover="infoiover(81, 29)" onmouseout="infoitout(81, 29)" title="Petróleo" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_30" src="assets/item129.png" width="15px" style="position: absolute;left: 213px;top: 330px;" onmouseover="infoiover(129, 30)" onmouseout="infoitout(129, 30)" title="Gas" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_31" src="assets/item129.png" width="15px" style="position: absolute;left: 247px;top: 449px;" onmouseover="infoiover(129, 31)" onmouseout="infoitout(129, 31)" title="Gas" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_32" src="assets/item129.png" width="15px" style="position: absolute;left: 531px;top: 297px;" onmouseover="infoiover(129, 32)" onmouseout="infoitout(129, 32)" title="Gas" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_33" src="assets/item127.png" width="30px" style="position: absolute;left: 231px;top: 265px;" onmouseover="infoiover(127, 33)" onmouseout="infoitout(127, 33)" title="Buho Nival" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_34" src="assets/item128.png" width="20px" style="position: absolute;left: 571px;top: 236px;" onmouseover="infoiover(128, 34)" onmouseout="infoitout(128, 34)" title="Visón" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_35" src="assets/item131.png" width="35px" style="position: absolute;left: 295px;top: 462px;" onmouseover="infoiover(131, 35)" onmouseout="infoitout(131, 35)" title="Caballos Salvajes" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_36" src="assets/item44.png" width="30px" style="position: absolute;left: 436px;top: 236px;" onmouseover="infoiover(44, 36)" onmouseout="infoitout(44, 36)" title="Lobo" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_37" src="assets/item130.png" width="30px" style="position: absolute;left: 610px;top: 218px;" onmouseover="infoiover(130, 37)" onmouseout="infoitout(130, 37)" title="Oso Polar" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_38" src="assets/item20.png" width="40px" style="position: absolute;left: 278px;top: 307px;" onmouseover="infoiover(20, 38)" onmouseout="infoitout(20, 38)" title="Automotríz" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_39" src="assets/item132.png" width="35px" style="position: absolute;left: 492px;top: 216px;" onmouseover="infoiover(132, 39)" onmouseout="infoitout(132, 39)" title="Oso Polar" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_40" src="assets/item117.png" width="30px" style="position: absolute;left: 609px;top: 304px;" onmouseover="infoiover(117, 40)" onmouseout="infoitout(117, 40)" title="Tígre Siberiano" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                    </div>

                </div>
fo
            </div>



        </div>




        <div id="fortAlam"
            style="position: absolute; left: 590px; top: 130px; background-color: #FFF; border-radius: 5px; width: 246px; height:181px; display: none; border: solid 1px #ccc; ">
            <img id="fortAlamImg" src="" width="240px" height="175px" style="margin-left: 3px; margin-top: 3px">
        </div>

        <div id="cityDiv"
            style="position: absolute; left: 130px; top: 70px; width:626px; height:405px; background-image:url('assets/submain1.png'); display:none;">
            <div style=" writing-mode: vertical-rl; text-orientation: downright; transform: rotate(180deg);width: 55px; margin-left: 20px; font-size:54px; color:#FFF; 
             border-radius: 10px;  height:380px">
                Rusia y vecinos
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
