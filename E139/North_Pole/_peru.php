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
            [1, "Canadá-Estados Unidos", 216, 153, 171, 
                "TUMBES<br><br>EXTENSIÓN TERRITORIAL: 4 657, 67 Km²
                POBLACIÓN: 197 602 habitantes<br>
                CAPITAL: Tumbes<br>
                DATOS IMPORTANTES: Sus playas son uno de sus principales atractivos, constituidas por hermosas arenas blancas y aguas templadas, dado que el departamento está situado en zona tropical donde se puede disfrutar de sol todo el año.",
                "assets/fscommand/tumbes1.jpg",
                "assets/fscommand/tumbes2.jpg"
            ],
            [6, "Rusia-Norte de Europa", 392, 94, 288,
                'CAJAMARCA<br><br>EXTENSIÓN TERRITORIAL:  33 317, 54 Km²
                POBLACIÓN: 1 449 075 habitantes<br>
                CAPITAL:Cajamarca<br>
                DATOS IMPORTANTES: Cajamarca tiene una expresión folklórica muy alegre que desborda en las fiestas de carnaval y las fiestas patronales. Por su tradición ancestral de origen español son famosas las corridas de toros en Cutervo y Santa Cruz.',
                "assets/fscommand/cajamarca1.jpg",
                "assets/fscommand/cajamarca2.jpg"
            ],
            [2, "Tierra de Buffin", 322, 297, 55,
                'PIURA<br><br>EXTENSIÓN TERRITORIAL: 35 897, 17 Km²
                POBLACIÓN: 1 558 716 habitantes<br><br>
                CAPITAL: Piura<br>
                DATOS IMPORTANTES: Este departamento destaca  como el primer productor de algodón, mangos, limones y arroz y el segundo departamento petrolero del Perú. Con el paso del tiempo se  ha convertido en un polo de desarrollo por sus intensas actividades económicas.',
                "assets/fscommand/piura1.jpg",
                "assets/fscommand/piura2.jpg"
            ],
            [3, "Isla Victoria", 355, 247, 54,
                'CAJAMARCA<br><br>EXTENSIÓN TERRITORIAL:  33 317, 54 Km²
                POBLACIÓN: 1 449 075 habitantes<br>
                CAPITAL:Cajamarca<br>
                DATOS IMPORTANTES: Cajamarca tiene una expresión folklórica muy alegre que desborda en las fiestas de carnaval y las fiestas patronales. Por su tradición ancestral de origen español son famosas las corridas de toros en Cutervo y Santa Cruz.',
                "assets/fscommand/cajamarca1.jpg",
                "assets/fscommand/cajamarca2.jpg"
            ],
            [4, "Groelandia", 382, 251, 101,
                'CAJAMARCA<br><br>EXTENSIÓN TERRITORIAL:  33 317, 54 Km²
                POBLACIÓN: 1 449 075 habitantes<br>
                CAPITAL:Cajamarca<br>
                DATOS IMPORTANTES: Cajamarca tiene una expresión folklórica muy alegre que desborda en las fiestas de carnaval y las fiestas patronales. Por su tradición ancestral de origen español son famosas las corridas de toros en Cutervo y Santa Cruz.',
                "assets/fscommand/cajamarca1.jpg",
                "assets/fscommand/cajamarca2.jpg"
            ],
            [5, "Islandia", 484, 357, 37,
                'CAJAMARCA<br><br>EXTENSIÓN TERRITORIAL:  33 317, 54 Km²
                POBLACIÓN: 1 449 075 habitantes<br>
                CAPITAL:Cajamarca<br>
                DATOS IMPORTANTES: Cajamarca tiene una expresión folklórica muy alegre que desborda en las fiestas de carnaval y las fiestas patronales. Por su tradición ancestral de origen español son famosas las corridas de toros en Cutervo y Santa Cruz.',
                "assets/fscommand/cajamarca1.jpg",
                "assets/fscommand/cajamarca2.jpg"
            ],
            
        ];
        $cityAry = [
            [0, "", 0, 0, 0],
            [1, "Ottawa", 550, 388, 18],
            [2, "Ciudad", 459, 524, 18],
            [3, "Washington", 563, 423, 18],

        ];
        //#### $riverAry[ idNum, name, x, y, w] ####//
        $riverAry = [
            [0, 0, 0],
            [1, "Gran Lago de Osos", 420, 260, 23],
            [3, "Gran Lago de Esclavos", 424, 290, 28],
            [5, "Río Mackenzie", 394, 227, 33],
            [7, "Río Columbia", 356, 297, 58],
            [9, "Río Misuri", 424, 400, 36],
            [11, "Río Nelson", 488, 331, 30],
            [13, "Río Cheyenne", 421, 424, 40],
            [15, "Lago Gran Salado", 408, 424, 11],
            [17, "Río Bravo", 431, 453, 52],
            [19, "Río Yaqui", 417, 481, 20],
            [21, "Lago Hurón", 531, 399, 21],
            [23, "Lago Michigan", 518, 402, 17],
            [25, "Lago Superior", 503, 385, 33],
            [27, "Río Otawa", 575, 375, 50],
            [29, "Lago Ontario", 538, 413, 34],
            [31, "Río Mississipi", 492, 403, 43],
            [33, "Río Pánuco", 468, 514, 12],
            [35, "Río Lerma", 452, 516, 12],
            [37, "Lago de Chapala", 441, 514, 14],
            [39, "Lago Cuitzeo", 458, 524, 8],
            [41, "Río Belice", 447, 530, 31],
            [43, "Río Grijalva", 488, 540, 19],
            [45, "Río Orange", 492, 525, 33],
            [47, "Río Hondo", 506, 532, 25],

            
        ];
        $mountAry = [

            [0, ""],
            [1, "Montes Apalaches", 529, 433, 55],
            [2, "Montañas Rocallosas", 377, 314, 68],
            [3, "Meseta del Río Columbia", 340, 325, 37],
            [4, "Sierra Nevada", 399, 410, 35],
            [5, "Sierra Madre Occidental", 433, 486, 32],
            [6, "Sierra Madre Oriental", 452, 478, 30],
            [7, "Meseta del Colorado", 437, 453, 29],
            [8, "Sierra Madre del Sur", 499, 537, 29],
            [9, "Sierra de Californía", 378, 429, 55],
            [10, "Volcán Popocatepetl e Iztaccíhuatl", 465, 507, 20],
            [11, "Volcán de Colima", 442, 518, 20],
            [12, "Volcán Nevado de Toluca", 459, 525, 20],
            [13, "Volcán Pico de Orizaba", 477, 532, 19],
            [14, "Volcán Santa Elena", 379, 400, 20],
            [15, "Volcán Shasta", 363, 443, 20],


        ];

        $songAry = [
            [0, "", 0, 0, 0, 0],
            [1, "Esculturas Indias", 263, 162, 20, 2, "assets/fscommand/lugares/belen.JPG"],
            [2, "Puente Golden Gate, Bahía de San Francisco", 243, 243, 20, 2, "assets/fscommand/lugares/banios.JPG"],
            [3, "Acapulco", 337, 350, 20, 2, "assets/fscommand/lugares/huascaran.JPG"],  
            [4, "Cataratas Victória", 429, 303, 20, 2, "assets/fscommand/lugares/huascaran.JPG"], 
            [5, "Monte Rushmore (Caras de Presidentes)", 577, 138, 20, 2, "assets/fscommand/lugares/huascaran.JPG"],  
            [6, "Estatua de la Libertad", 318, 427, 20, 2, "assets/fscommand/lugares/belen.JPG"],
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
        [2], //1
        [3,4], //2
        [2,4,7], //3
        [2,3,7,8],//4
        [4,7,8,6],//5
        [5,8,11],//6
        [3,4,5,8,10,9],//7
        [4,5,6,11,10,7],//8
        [7,8,10,12],//9
        [7,9,8,11,13,12],//10
        [6,8,10,13,14,15,19],//11
        [9,10,13,14,16,15],//12
        [10,11,14,12],//13
        [12,13,11,18,17,16],//14
        [12,16,17,20],//15
        [12,14,17,15],//16
        [15,16,14,18,21,20],//17
        [11,19,22,20,21,17],//18
        [11,28,22],//19
        [15,18,17,21,22,23],//20
        [17,18,20],//21
        [19,18,20,23,24],//22
        [20,22,24],//23
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
        <!-- <div style="margin-left:5px; display:flex; align-items:center; justify-content:center">
            <img src="assets/submenu2_2.png" width="46px" id="submenu2_2" onclick="menuOver1('2_2', 2)" rol=0
                title="PRRINCIPALES MUNICIPIOS">
        </div> -->
       <!--  <div style="margin-left:5px; display:flex; align-items:center; justify-content:center">
            <img src="assets/submenu2_3.png" height="46px" id="submenu2_3" onclick="menuOver1('2_3', 4)" rol=0
                title="HIDROGRAFíA">
        </div>
        <div style="margin-left:5px; display:flex; align-items:center; justify-content:center">
            <img src="assets/submenu2_4.png" width="46px" id="submenu2_4" onclick="menuOver1('2_4', 3)" rol=0
                title="QROGRAFíA">
        </div> -->
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
                            <img src="assets/minmap.png" style="position: absolute;left: -16px;top: -16px;width: 310px; display: none;" id="minmap">
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
                        <img id="i_1" src="assets/item125.png" width="30px" style="position: absolute;left: 265px;top: 361px;" onmouseover="infoiover(125, 1)" onmouseout="infoitout(125, 1)" title="Exportación" onmouseup="handleIconMoveUp(5)" onmousedown="handleIconMoveDown(event,5)" ondragstart="return false;">
                        <img id="i_2" src="assets/item125.png" width="30px" style="position: absolute;left: 526px;top: 200px;" onmouseover="infoiover(125, 2)" onmouseout="infoitout(125, 2)" title="Exportación" onmouseup="handleIconMoveUp(5)" onmousedown="handleIconMoveDown(event,5)" ondragstart="return false;">
                        <img id="i_3" src="assets/item11.png" width="30px" style="position: absolute;left: 479px;top: 101px;" onmouseover="infoiover(11, 3)" onmouseout="infoitout(11, 3)" title="Minería" onmouseup="handleIconMoveUp(3)" onmousedown="handleIconMoveDown(event,3)" ondragstart="return false;">
                        <img id="i_4" src="assets/item11.png" width="30px" style="position: absolute;left: 324px;top: 297px;" onmouseover="infoiover(11, 4)" onmouseout="infoitout(11, 4)" title="Minería" onmouseup="handleIconMoveUp(4)" onmousedown="handleIconMoveDown(event,4)" ondragstart="return false;">
                        <img id="i_5" src="assets/item11.png" width="30px" style="position: absolute;left: 576px;top: 312px;" onmouseover="infoiover(11, 5)" onmouseout="infoitout(11, 5)" title="Minería" onmouseup="handleIconMoveUp(5)" onmousedown="handleIconMoveDown(event,5)" ondragstart="return false;">
                        <img id="i_6" src="assets/item84.png" width="40px" style="position: absolute;left: 323px;top: 438px;" onmouseover="infoiover(84, 6)" onmouseout="infoitout(84, 6)" title="Petróleo" onmouseup="handleIconMoveUp(6)" onmousedown="handleIconMoveDown(event,6)" ondragstart="return false;">
                        <img id="i_7" src="assets/item147.png" width="40px" style="position: absolute;left: 428px;top: 219px;" onmouseover="infoiover(147, 7)" onmouseout="infoitout(147, 7)" title="Ballena Franca" onmouseup="handleIconMoveUp(7)" onmousedown="handleIconMoveDown(event,7)" ondragstart="return false;">
                        <img id="i_8" src="assets/item148.png" width="40px" style="position: absolute;left: 450px;top: 427px;" onmouseover="infoiover(148, 8)" onmouseout="infoitout(148, 8)" title="Ballena Jorobada" onmouseup="handleIconMoveUp(8)" onmousedown="handleIconMoveDown(event,8)" ondragstart="return false;">
                        <img id="i_9" src="assets/item155.png" width="30px" style="position: absolute;left: 283px;top: 258px;" onmouseover="infoiover(155, 9)" onmouseout="infoitout(155, 9)" title="Morsa" onmouseup="handleIconMoveUp(5)" onmousedown="handleIconMoveDown(event,5)" ondragstart="return false;">
                        <img id="i_10" src="assets/item52.png" width="30px" style="position: absolute;left: 244px;top: 205px;" onmouseover="infoiover(52, 10)" onmouseout="infoitout(52, 10)" title="Ciervo" onmouseup="handleIconMoveUp(5)" onmousedown="handleIconMoveDown(event,5)" ondragstart="return false;">
                        <img id="i_11" src="assets/item130.png" width="30px" style="position: absolute;left: 423px;top: 287px;" onmouseover="infoiover(130, 11)" onmouseout="infoitout(130, 11)" title="Oso Pardo" onmouseup="handleIconMoveUp(5)" onmousedown="handleIconMoveDown(event,5)" ondragstart="return false;">
                        <img id="i_12" src="assets/item127.png" width="30px" style="position: absolute;left: 581px;top: 153px;" onmouseover="infoiover(127, 12)" onmouseout="infoitout(127, 12)" title="Buho Nival" onmouseup="handleIconMoveUp(5)" onmousedown="handleIconMoveDown(event,5)" ondragstart="return false;">
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
                Perú
            </div>
            <div style="border:#cc9900 solid 1px; padding-top:20px; margin-top:20px; margin-left:25px; height:330px; width:490px;"
                id="">
                <div style="height: 165px; width: 490px; font-family:''; font-size: 14px; overflow-y: scroll; padding-left: 3px; padding-right: 3px"
                    id="cityTxt"></div>
                <div style="height: 165px; width: 490px">
                    <img src="" width="200px" height="160px" style="margin-left: 5px" id="cityImg_1">
                    <img src="" width="200px" height="160px" style="margin-left: 75px" id="cityImg_2">
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
