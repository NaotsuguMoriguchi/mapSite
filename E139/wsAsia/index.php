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
            [1, "Yemen", 308, 461, 142, 
                "Yemen<br><br>Capital:	Sana<br>
                Idioma:	Árabe<br>
                Superficie:	527.968 km_<br>
                Población:	20.727.063<br>
                Densidad:	37 hab./km_<br>
                Moneda:	Rial Yemení<br>
                Tipo de gobierno:	República parlamentaria<br>
                Yemen es un país de Oriente Medio, al sur de la península de Arabia, rodeado por el mar Arábigo, el golfo de Adén y el mar Rojo; entre Omán y Arabia Saudita. El sector oeste de Yemen es de predominio montañoso, con alturas que rebasan los 3.500 metros, mientras el oriental es básicamente de mesetas, dominado por el desierto. No hay ríos permanentes y las precipitaciones son muy escasas. Las temperaturas, normalmente muy elevadas, se presentan más suaves en las zonas marítimas y en las montañas. Yemen fue uno de los más antiguos centros de civilización del Oriente Próximo. Su tierra, relativamente fértil, y su húmedo clima permitieron el desarrollo de una población estable. De ahí su nombre, Yaman, que en árabe significa \"prosperidad\" o \"bendición\", términos derivados del significado original de la palabra, \"derecha\", que también podría indicar su situación geográfica desde el punto de vista oriental, cuyo punto de orientación es el Este. Su lema nacional es: Dios, la Patria, la Revolución.
                ",
                "assets/fscommand/yem1.jpg",
                "assets/fscommand/yem2.jpg",
                "assets/fscommand/yem3.jpg",
                "assets/fscommand/yem4.jpg"
            ],
            [2, "Omán", 442, 413, 98,
                'Omán<br><br>Capital:	Mascate<br>
                Idioma:	Árabe<br>
                Superficie:	212.457 km_<br>
                Población:	3.001.583<br>
                Densidad:	12.3 hab./km_<br>
                Moneda:	Rial omaní<br>
                Tipo de gobierno:	Monarquía absoluta islámica<br>
                ',
                "assets/fscommand/oma1.jpg",
                "assets/fscommand/oma2.jpg",
                "assets/fscommand/oma3.jpg",
                "assets/fscommand/oma4.jpg"
            ],
            [4, "Qatar", 446, 393, 21,
                'Qatar<br><br>Capital:	Doha
                Idioma:	Árabe<br>
                Superficie:	11.437 km_<br>
                Población:	863.051<br>
                Densidad:	79 hab./km_<br>
                Moneda:	Rial qatarí<br>
                Tipo de gobierno:	Monarquía absoluta<br>
                Qatar es un país de Oriente Medio ubicado en una península del Golfo Pérsico. desde Arabia Saudí. Gran parte del país es una planicie baja y estéril, cubierta de arena. Al sureste está el espectacular Khor al Adaid o "mar interior", un área de dunas movedizas de arena que rodean una bahía del golfo.
                El punto más alto de Qatar se encuentra en el Jebel Dukhan al oeste, una serie de bajos afloramientos de piedra caliza que corre de sur a norte desde Zikrit a través de Umm Bab hasta la frontera austral, y que alcanza alrededor de 90 metros sobre el nivel del mar. En esta zona también se encuentran los principales depósitos interiores de petróleo de Qatar, mientras que los yacimientos de gas natural están en el mar, al noroeste de la península.
                El ingreso nacional de Qatar deriva principalmente de las exportaciones de petróleo y gas natural. Las reservas de petróleo del país están estimadas en 15 billones de barriles (2.4 km_). La riqueza y estándar de vida de los qataríes son comparables a las de naciones europeas occidentales. 
                ',
                "assets/fscommand/qat1.jpg",
                "assets/fscommand/qat2.jpg",
                "assets/fscommand/qat3.jpg",
                "assets/fscommand/qat4.jpg"
            ],
            [3, "Emiratos Arabes Unidos", 446, 393, 68,
                'Emiratos Arabes Unidos<br><br>Capital:	Abu Dhabi<br>
                Idioma:	Árabe<br>
                Superficie:	83.600 km_<br>
                Población:	2.563.212<br>
                Densidad:	46 hab./km_<br>
                Moneda:	Dirham de Emiratos Árabes Unidos<br>
                Tipo de gobierno:	Monarquía absoluta y federal<br>
                Los Emiratos Árabes Unidos, es un estado de Asia en Oriente Medio compuesto por siete emiratos, Abu Dhabi, Ajman, Dubai, Fujairah, Ras Al-Khaimah, Sharjah y Umm al-Qaiwain.
                Están situados en el Suroeste de Asia, bordeando el Golfo de Omán y el Golfo Pérsico, entre Omán y Arabia Saudí. Es una localización estratégica a lo largo del Estrecho de Ormuz, un punto vital para el tránsito mundial de  petróleo crudo. Está considerado como uno de los quince estados pertenecientes a la supuesta "Cuna de la Humanidad." 
                El territorio de Emiratos Árabes Unidos era conocido anteriormente como la "Costa de los Piratas". Y durante la época del Protectorado británico, como los Estados de la tregua. El interior del territorio es un desierto arenoso por lo que la mayoría de sus habitantes viven en ciudades costeras y algunos pocos en oasis del interior.
                ',
                "assets/fscommand/emi1.jpg",
                "assets/fscommand/emi2.jpg",
                "assets/fscommand/emi3.jpg",
                "assets/fscommand/emi4.jpg"
            ],
            [5, "Arabia Saudita", 273, 243, 215,
                'Arabia Saudita<br><br>Capital:	Riad<br>
                Idioma:	Árabe<br>
                Superficie:	1.960.582 km_<br>
                Población:	26.417.599<br>
                Densidad:	12 hab./km_<br>
                Moneda:	Rial<br>
                Tipo de gobierno:	Monarquía absoluta / teocracia<br>
                El Reino de Arabia Saudita es un país de la Península Arábica. Limita con Iraq, Jordania, Kuwait, Omán, Qatar, Emiratos Árabes Unidos y Yemen. Ocupa el 80% de la Península Arábiga. Muchas de las fronteras con los Emiratos Árabes Unidos, Oman y Yemen no están bien definidos, razón por la cual la exacta dimensión del país no es conocida.
                El clima es seco y caliente. La mitad del país está deshabitado por ser un desierto de temperaturas extremas con ciertas zonas donde se encuentran oasis. En la mayor parte de la Arabia Saudita la vegetación es escasa y se limita algunas hierbas xerofíticas y arbustos. La fauna la componen gatos salvajes, monos babuinos, lobos y hienas. La costa sobre el Mar Rojo, particularmente los arrecifes de corales, tienen una rica fauna marítima. El área de la costa se extiende por 2.640 kilómetros. El lema nacional es: No hay más dios que Alá y Mahoma es su mensajero
                ',
                "assets/fscommand/arab1.jpg",
                "assets/fscommand/arab2.jpg",
                "assets/fscommand/arab3.jpg",
                "assets/fscommand/arab4.jpg"
            ],
            
            [7, "Irák", 352, 185, 92,
                'Irák<br><br>Capital:	Bagdad<br>
                Idiomas:	Árabe y kurdo<br>
                Superficie:	437.072 km_<br>
                Población:	26.783.383<br>
                Densidad:	55 hab./km_<br>
                Moneda:	Dinar iraquí<br>
                Tipo de gobierno:	República<br>
                La República de Iraq (k), es un país situado en Oriente Medio, al Suroeste de Asia. Limita al Norte con Turquía, al Sur con Arabia Saudí y Kuwait, al Noroeste con Siria, al Oeste con Jordania y al Este con Irán.
                Iraq está dividido en 18 provincias: Al Anbar, Basora, Kerbala, Al Muthanna, Al Qadisyah, Nayaf, Erbi,  Suleimaniya, At Ta\'mim, Babil, Bagdad, Dahuk, Dhi Qar, Diyala, Maysan, Ninawa, Salah ad Din y Wasit 
                Las montañas en el nordeste son una extensión del sistema alpino que se extiende hacia el este desde los Balcanes, entra en el sur de Turquía, el norte de Iraq, Irán y Afganistán, y termina en el Himalaya. . Gran parte de la tierra es desierto o páramo. El promedio de temperatura varía desde 48 grados centígrados en julio y agosto hasta temperaturas bajo cero en enero. La mayoría de las precipitaciones ocurren desde el mes de diciembre hasta abril, en la zona montañosa del norte de Iraq cae bastante más lluvia que en la zona central o del desierto del sur.
                ',
                "assets/fscommand/ira1.jpg",
                "assets/fscommand/ira2.jpg",
                "assets/fscommand/ira3.jpg",
                "assets/fscommand/ira4.jpg"
            ],
            [6, "Kuwait", 419, 313, 23,
                "LORETO<br><br>Capital:	Kuwait<br>
                Idioma:	Árabe<br>
                Superficie:	17.820 km_<br>
                Población:	2.335.648<br>
                Densidad:	116 hab./km_<br>
                Moneda:	Dinar kuwaití<br>
                Tipo de gobierno:	Monarquía<br>
                El Estado de Kuwait es una pequeña monarquía en la costa del Golfo Pérsico. Limita con Iraq al Norte y con Arabia Saudita al Sur. Consta principalmente de desiertos, con pequeñas diferencias de altitud. Es el único país del mundo sin lagos o reservas de agua naturales.
                Posee nueve islas, siendo la mayor Bubiyan, que está unida al continente por un puente de cemento. Tras la liberación en 1991, la isla se convirtió en una base militar y actualmente no se permite la entrada de civiles. Las islas son Auhah, Bubiyan, Failaka, Kubbar, Miskan, Qaruh, Umm al Maradim, Umm an Namil y Warbah.
                ",
                "assets/fscommand/kuw1.jpg",
                "assets/fscommand/kuw2.jpg",
                "assets/fscommand/kuw3.jpg",
                "assets/fscommand/kuw4.jpg"
            ],
            [8, "Jordania", 274, 215, 82,
                'Jordania<br><br>Capital:	Amán<br>
                Idioma:	Árabe<br>
                Superficie:	92.300 km_<br>
                Población:	5.759.732<br>
                Densidad:	58 hab./km_<br>
                Moneda:	Dinar jordano<br>
                Tipo de gobierno:	Monarquía constitucional<br>
                Jordania, es un país de Asia ubicado en la región de Oriente Medio. Limita al Norte con Siria, al noreste con Iraq, al este y sur con el reino de Arabia Saudita, al suroeste con el Mar Rojo, y al oeste con Israel (incluyendo Cisjordania).
                Se divide en doce gobernaciones. Los jordanos son en su mayoría árabes, excepto por pequeñas comunidades de chechenos, circasianos, armenios, y kurdos que se han adaptado a la cultura árabe.
                Alrededor del 70% de la población de Jordania es urbana; menos del 6% de la población rural es nómada o seminómada. La mayoría de la gente vive donde las precipitaciones ayudan a la agricultura. Alrededor de 1.7 millones de personas registradas como refugiados palestinos y desplazados residen en Jordania, la mayoría como ciudadanos y su Lema nacional es: Dios, Patria y el Rey.
                ',
                "assets/fscommand/jor1.jpg",
                "assets/fscommand/jor2.jpg",
                "assets/fscommand/jor3.jpg",
                "assets/fscommand/jor4.jpg"
            ],

            [9, "Israel", 273, 213, 21,
                'Israel<br><br>Capital:	Jerusalén<br>
                Idioma:	Hebreo, árabe<br>
                Superficie:	20.770 km_<br>
                Población:	6.876.883<br>
                Densidad:	302 hab./km_<br>
                Moneda:	Nuevo sheqel<br>
                Tipo de gobierno:	República parlamentaria<br>
                Israel es un país de Asia que se encuentra en la orilla oriental del Mar Mediterráneo, en la zona conocida como Próximo Oriente. Limita al norte con Líbano y Siria, al este con Jordania y Cisjordania, al oeste con el mar Mediterráneo y la Franja de Gaza, y al sur con el golfo de Aqaba (Mar Rojo) y Egipto.
                El territorio está dividido en 6 distritos o mejozot: Central , Haifa, Jerusalén Norte, y Sur,  Israel, Tel Aviv yAltos del Golán. También posee las zonas militares de Judea y Samaria (Cisjordania) y hasta septiembre de 2005, la Franja de Gaza.
                El territorio de la franja de Gaza fue entregado por las autoridades israelíes a la Autoridad Nacional Palestina en septiembre de 2005. El proceso de retirada del territorio implicó conflictos dentro de la sociedad israelí, debido a la retirada de casi 8.000 colonos judíos que vivían en la franja de Gaza, frente a una población de 1,4 millones de palestinos.
                ',
                "assets/fscommand/isr1.jpg",
                "assets/fscommand/isr2.jpg",
                "assets/fscommand/isr3.jpg",
                "assets/fscommand/isr4.jpg"
            ],
            [13, "Turquía", 251, 54, 188,
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
            
             [11, "Siria", 279, 126, 123,
                'Siria<br><br>Capital:	Damasco<br>
                Idioma:	Árabe<br>
                Superficie:	185,180 km_<br>
                Población:	19.043.000<br>
                Densidad:	99 hab./km_<br>
                Moneda:	Libra siria<br>
                Tipo de gobierno:	República<br>
                Siria es un país del Oriente Medio en la orilla oriental del mar Mediterráneo que comparte fronteras con Israel, Líbano, Jordania, Iraq y Turquía. Se divide administrativamente en 14 provincias. 
                En el país se distinguen tres regiones: En el oeste se encuentra una llanura litoral, separada por el Yabal Ansariyya, (una doble cordillera en cuyo interior se abren diversos valles), el centro del país está formado por una accidentada meseta con varios picos; la región del este está constituida por el valle del Eúfrates; el principal río  que surca el país, en el extremo noreste, la frontera con Turquía la forma el curso del río Tigris.
                Su agricultura es favorecida desde 1978 por la construcción de la presa de Tabka, que permite regar amplias superficies, se dedica prioritariamente al cultivo de cereales, algodón, olivos y hortalizas. Cuenta con ganadería ovina, caprina y bovina.
                ',
                "assets/fscommand/sir1.jpg",
                "assets/fscommand/sir2.jpg",
                "assets/fscommand/sir3.jpg",
                "assets/fscommand/sir4.jpg"
            ],
            [12, "Chipre", 252, 139, 27,
                'Chipre<br><br><br>Capital:	Nicosia<br>
                Idioma:	Griego, turco<br>
                Superficie:	9.2504 km_<br>
                Población:	1.103.790<br>
                Densidad:	84 hab./km_<br>
                Moneda:	Libra chipriota<br>
                Tipo de gobierno:	República presidencialista<br>
                Chipre se ubica en el oeste de Asia (más específicamente, Oriente Próximo). La isla se encuentra rodeada por el mar Mediterráneo y está constituida por tres zonas geográficas: el macizo de Troodos en el suroeste de la isla, (rocas de origen basáltico y que se elevan hasta los 1.953 metros). Al norte se encuentra una cadena montañosa denominada Kyrenia. Entre el macizo de Troodos y las montañas de Kyrenia se ubica la llanura de Mesaoria, donde se encuentra la capital, Nicosia. En la antigüedad, la zona de Mesaoria estaba cubierta por las aguas, y existían dos islas formadas por las zonas montañosas de Chipre.
                ',
                "assets/fscommand/chi1.jpg",
                "assets/fscommand/chi2.jpg",
                "assets/fscommand/chi3.jpg",
                "assets/fscommand/chi4.jpg"
            ],
            [14, "Estambul", 271, 37, 33,
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
            
            // [15, "Azerbaiyan", 575, 177, 46,
            //     'CAJAMARCA<br><br>EXTENSIÓN TERRITORIAL:  33 317, 54 Km²
            //     POBLACIÓN: 1 449 075 habitantes<br>
            //     CAPITAL:Cajamarca<br>
            //     DATOS IMPORTANTES: Cajamarca tiene una expresión folklórica muy alegre que desborda en las fiestas de carnaval y las fiestas patronales. Por su tradición ancestral de origen español son famosas las corridas de toros en Cutervo y Santa Cruz.',
            //     "assets/fscommand/cajamarca1.jpg",
            //     "assets/fscommand/cajamarca2.jpg"
            // ],
            [15, "Irán", 418, 162, 183,
                "LORETO<br><br>Capital:	Teherán<br>
                Idioma:	Persa<br>
                Superficie:	1.648.195 km_<br>
                Población:	68.017.860<br>
                Densidad:	41 hab./km_<br>
                Moneda:	Rial<br>
                Tipo de gobierno:	República islámica<br>
                Irán es un país de Oriente Medio. Desde el I milenio adC hasta 1935 fue conocido como Persia. Limita con Pakistán y Afganistán por el este; Turkmenistán por el noreste, el Mar Caspio por el norte y Azerbaiyán y Armenia por el noroeste; Turquía e Iraq por el oeste y finalmente con la costa del Golfo Pérsico y el Golfo de Omán por el sur. Irán está dividida en 28 provincias. El paisaje iraní está dominado por cordilleras que separan varias cuencas y mesetas unas de otras. La poblada parte occidental es la más montañosa, con cordilleras como los Montes Zagros y las Montañas Elburz, formando ésta el punto más alto del país en el Damavand a 5.607 m. La mitad oriental del país consiste básicamente en un desierto deshabitado formado por cuencas con ocasionales lagos de sal.
                Las únicas llanuras se encuentran a lo largo de la costa del mar Caspio y en el Golfo pérsico junto a la frontera con Iraq en Arvandrud (Shatt al-Arab). También otras llanuras menos extensas se encuentran a lo largo de la costa del Golfo, en el Estrecho de Hormuz y en el Mar de Omán.
                El clima es árido o semiárido, excepto en la costa del mar Caspio donde domina un clima subtropical.
                ",
                "assets/fscommand/iran1.jpg",
                "assets/fscommand/iran2.jpg",
                "assets/fscommand/iran3.jpg",
                "assets/fscommand/iran4.jpg"
            ],

            [10, "Líbano", 283, 203, 9,
                'Líbano<br><br>Capital:	Beirut<br>
                Idioma:	Árabe<br>
                Superficie:	10.452 km_<br>
                Población:	3.826.018<br>
                Densidad:	358 ha b./km_<br>
                Moneda:	Libra libanesa<br>
                Tipo de gobierno:	República<br>
                El Líbano es un pequeño Estado de Oriente Próximo, situado junto al Mar Mediterráneo, que baña sus costas occidentales. Al norte y al este, el Líbano da paso a las tierras semidesérticas de Siria, y al sur la estrecha frontera del país se encuentra con los límites de Israel.
                Básicamente el relieve libanés, bastante montañoso, puede dividirse en cuatro grandes unidades estructurales, que se suceden de oeste a este; primero, una franja costera bastante estrecha, donde se asientan los núcleos de población principales; segundo, la Cordillera del Líbano, una masa caliza con altitud máxima superior a los 3.000 m; en tercer lugar, la depresión sinclinal de la Bekaa; y finalmente, la Cordillera del Antilíbano, que constituye el límite natural con Siria. En la franja costera se escalonan una serie de terrazas formadas en el pleistoceno que se elevan hasta 100 metros sobre el nivel del mar. 
                ',
                "assets/fscommand/lib1.jpg",
                "assets/fscommand/lib2.jpg",
                "assets/fscommand/lib3.jpg",
                "assets/fscommand/lib4.jpg"
            ],

            
            
        ];
        $cityAry = [
            [0, "", 0, 0, 0],
            [1, "Estambul", 281, 35, 18],
            [2, "Nicosia", 256, 138, 18],
            [3, "Ankara", 344, 112, 18],
            [4, "Damasco", 297, 192, 18],
            [5, "Teherán", 496, 260, 18],                         
            [6, "Bagdad", 396, 259, 18],
            [7, "Amman", 302, 234, 18],
            [8, "Sana", 326, 480, 18],
            [9, "Mascate", 501, 439, 18],
            [10, "Riyad", 414, 368, 18],
            [11, "Kuwait", 423, 309, 18],
            [12, "Abu Dhabí", 469, 407, 18],
            [13, "Beirut", 278, 198, 18],
            [14, "Jerusalén", 271, 220, 18],
            [15, "Daha", 444, 400, 18],     


        ];
        //#### $riverAry[ idNum, name, x, y, w] ####//
        $riverAry = [
            [0, 0, 0],
            [1, "Río Tigris", 365, 144, 74],
            [3, "Río Eufrates", 333, 118, 105]
            
        ];
        $mountAry = [

            [0, ""],
            [1, "Montes Tauro", 280, 95, 57],
            [2, "Meseta Yemen", 325, 498, 108],
            [3, "Montes Pónticos", 432, 176, 64],
            [4, "Montes Zagros", 475, 268, 56],
            [5, "Monte Sinaí", 280, 260, 29],
            [6, "Montes Elbruz", 525, 241, 55],

        ];

        $songAry = [
            [0, "", 0, 0, 0, 0],
            [1, "Mercado de Estambul", 280, 24, 20, 2, "assets/fscommand/lugares/belen.JPG"],
            [2, "Tel Aviv, Israel", 271, 215, 20, 2, "assets/fscommand/lugares/banios.JPG"],
            [3, "Cd. de la Meca, Arabia Saudita", 301, 370, 20, 2, "assets/fscommand/lugares/huascaran.JPG"],  
            [4, "Torre de Agua, Arabia Saudita", 398, 343, 20, 2, "assets/fscommand/lugares/huascaran.JPG"], 
            [5, "Minarete, Kuwait", 421, 292, 20, 2, "assets/fscommand/lugares/huascaran.JPG"],  
            [6, "Mezquita del Imán, Irán", 494, 286, 20, 2, "assets/fscommand/lugares/huascaran.JPG"],   
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
        [2,5], //1
        [1,5,3], //2
        [2,4,5], //3
        [3,5],//4
        [1,2,3,4,6,7,8],//5
        [5,7],//6
        [5,6,8,11,13,15],//7
        [5,7,9,11],//8
        [8,10],//9
        [9,11],//10
        [7,8,10,13],//11
        [],//12
        [7,11,14,15],//13
        [],//14
        [7,13],//15        
        
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
                            <img src="assets/minmap.png" style="position: absolute;left: -19px;top: -6px;width: 276px; display: none;" id="minmap">
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
                        <img id="i_1" src="assets/item14.png" width="30px" style="position: absolute;left: 231px;top: 106px;" onmouseover="infoiover(14, 1)" onmouseout="infoitout(14, 1)" title="Pesca" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_2" src="assets/item84.png" width="40px" style="position: absolute;left: 378px;top: 175px;" onmouseover="infoiover(84, 2)" onmouseout="infoitout(84, 2)" title="Petróleo" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_3" src="assets/item84.png" width="40px" style="position: absolute;left: 396px;top: 273px;" onmouseover="infoiover(84, 3)" onmouseout="infoitout(84, 3)" title="Petróleo" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_4" src="assets/item84.png" width="40px" style="position: absolute;left: 399px;top: 314px;" onmouseover="infoiover(84, 4)" onmouseout="infoitout(84, 4)" title="Petróleo" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_5" src="assets/item84.png" width="40px" style="position: absolute;left: 455px;top: 315px;" onmouseover="infoiover(84, 5)" onmouseout="infoitout(84, 5)" title="Petróleo" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_6" src="assets/item84.png" width="40px" style="position: absolute;left: 479px;top: 345px;" onmouseover="infoiover(84, 6)" onmouseout="infoitout(84, 6)" title="Petróleo" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_7" src="assets/item84.png" width="40px" style="position: absolute;left: 428px;top: 425px;" onmouseover="infoiover(84, 7)" onmouseout="infoitout(84, 7)" title="Petróleo" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_8" src="assets/item84.png" width="40px" style="position: absolute;left: 459px;top: 454px;" onmouseover="infoiover(84, 8)" onmouseout="infoitout(84, 8)" title="Petróleo" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_9" src="assets/item136.png" width="30px" style="position: absolute;left: 409px;top: 196px;" onmouseover="infoiover(136, 9)" onmouseout="infoitout(136, 9)" title="Dátiles" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_10" src="assets/item136.png" width="30px" style="position: absolute;left: 434px;top: 215px;" onmouseover="infoiover(136, 10)" onmouseout="infoitout(136, 10)" title="Dátiles" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_11" src="assets/item136.png" width="30px" style="position: absolute;left: 510px;top: 292px;" onmouseover="infoiover(136, 11)" onmouseout="infoitout(136, 11)" title="Dátiles" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_12" src="assets/item136.png" width="30px" style="position: absolute;left: 296px;top: 333px;" onmouseover="infoiover(136, 12)" onmouseout="infoitout(136, 12)" title="Dátiles" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_13" src="assets/item136.png" width="30px" style="position: absolute;left: 326px;top: 429px;" onmouseover="infoiover(136, 13)" onmouseout="infoitout(136, 13)" title="Dátiles" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_14" src="assets/item136.png" width="30px" style="position: absolute;left: 492px;top: 458px;" onmouseover="infoiover(136, 14)" onmouseout="infoitout(136, 14)" title="Dátiles" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_15" src="assets/item137.png" width="30px" style="position: absolute;left: 281px;top: 80px;" onmouseover="infoiover(137, 15)" onmouseout="infoitout(137, 15)" title="Alfombras" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_16" src="assets/item137.png" width="30px" style="position: absolute;left: 566px;top: 384px;" onmouseover="infoiover(137, 16)" onmouseout="infoitout(137, 16)" title="Alfombras" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_17" src="assets/item13.png" width="40px" style="position: absolute;left: 278px;top: 272px;" onmouseover="infoiover(13, 17)" onmouseout="infoitout(13, 17)" title="Ganado Bovino" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_18" src="assets/item13.png" width="40px" style="position: absolute;left: 365px;top: 281px;" onmouseover="infoiover(13, 18)" onmouseout="infoitout(13, 18)" title="Ganado Bovino" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_19" src="assets/item13.png" width="40px" style="position: absolute;left: 525px;top: 243px;" onmouseover="infoiover(13, 19)" onmouseout="infoitout(13, 19)" title="Ganado Bovino" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_20" src="assets/item13.png" width="40px" style="position: absolute;left: 365px;top: 506px;" onmouseover="infoiover(13, 20)" onmouseout="infoitout(13, 20)" title="Ganado Bovino" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_21" src="assets/item81.png" width="26px" style="position: absolute;left: 282px;top: 110px;" onmouseover="infoiover(81, 21)" onmouseout="infoitout(81, 21)" title="Algodón" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_22" src="assets/item81.png" width="26px" style="position: absolute;left: 429px;top: 176px;" onmouseover="infoiover(81, 22)" onmouseout="infoitout(81, 22)" title="Algodón" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_23" src="assets/item81.png" width="26px" style="position: absolute;left: 547px;top: 277px;" onmouseover="infoiover(81, 23)" onmouseout="infoitout(81, 23)" title="Algodón" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_24" src="assets/item81.png" width="26px" style="position: absolute;left: 317px;top: 507px;" onmouseover="infoiover(81, 24)" onmouseout="infoitout(81, 24)" title="Algodón" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_25" src="assets/item129.png" width="15px" style="position: absolute;left: 367px;top: 227px;" onmouseover="infoiover(129, 25)" onmouseout="infoitout(129, 25)" title="Algodón" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_26" src="assets/item129.png" width="15px" style="position: absolute;left: 421px;top: 384px;" onmouseover="infoiover(129, 26)" onmouseout="infoitout(129, 26)" title="Algodón" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_27" src="assets/item125.png" width="30px" style="position: absolute;left: 243px;top: 164px;" onmouseover="infoiover(125, 27)" onmouseout="infoitout(125, 27)" title="Exportación" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_28" src="assets/item132.png" width="35px" style="position: absolute;left: 352px;top: 112px;" onmouseover="infoiover(132, 28)" onmouseout="infoitout(132, 28)" title="Oso Polar" onmouseup="handleIconMoveUp(1)" onmousedown="handleIconMoveDown(event,1)" ondragstart="return false;">
                        <img id="i_29" src="assets/item117.png" width="30px" style="position: absolute;left: 482px;top: 304px;" onmouseover="infoiover(117, 29)" onmouseout="infoitout(117, 29)" title="Tígre Siberiano" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_30" src="assets/item44.png" width="30px" style="position: absolute;left: 396px;top: 145px;" onmouseover="infoiover(44, 30)" onmouseout="infoitout(44, 30)" title="Lobo" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
                        <img id="i_31" src="assets/item95.png" width="30px" style="position: absolute;left: 406px;top: 417px;" onmouseover="infoiover(95, 31)" onmouseout="infoitout(95, 31)" title="Víbora" onmouseup="handleIconMoveUp(2)" onmousedown="handleIconMoveDown(event,2)" ondragstart="return false;">
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
            <div style=" writing-mode: vertical-rl; text-orientation: downright; transform: rotate(180deg); font-size:47px; color:#FFF; 
             border-radius: 10px;  height:380px; margin-left: 25px;">
                suroeste Asiatico
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
