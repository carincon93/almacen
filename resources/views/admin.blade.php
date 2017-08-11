@extends('layouts.app')

@section('content')
<div class="card floor-plan">
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1555 1574">
            <title>Recurso 14</title>
            <g>
                <path d="M920.5,483v-1H876.2l.05-.55c1.24-13.29,6-23.38,14.27-30,6.73-5.41,14.59-7.49,20.66-8.24-31.78-5.35-34.9-36.33-34.93-36.67l0-.54h37.3v-1h-5.18V372h0V357h0V254h0V239h0V6.8H647.14V493.2h261.2V483Z" style="fill: #fff"/>
                <path d="M528,965V954h10.08V738H528V721h10.08V584.29H482.25V574H526.7c-1.28-12.69-5.94-22.34-13.83-28.7-8.78-7.07-19.6-8.36-25.57-8.46q-2.2.16-4.55.16l-.06-1a36.57,36.57,0,0,1,4.55-.16c33.36-2.4,38.82-31.47,39.45-35.84H482.25V481H526.7c-1.28-12.69-5.94-22.34-13.83-28.7-8.78-7.07-19.6-8.36-25.57-8.46q-2.2.16-4.55.16l-.06-1a36.81,36.81,0,0,1,4.55-.16c33.36-2.4,38.82-31.47,39.45-35.84H482.25V395.71h55.83V255H528V238h10.08V17H528V7H317V17H300V7H17V17H5.29V238H17v17H5.29v92H17v17H1V483H17v17H1V644H6.29v77H17v17H6.29V954H17v11H300V954h17v11Z" style="fill: #fff"/>
                <path d="M1408,1110h-10v-10H1149v10h-10v215h10v17h-10v79h269v-79h-10v-17h10v-93h-38l.05-.55c1.24-13.33,6-23.45,14.29-30.07,6.66-5.35,14.42-7.42,20.42-8.17-31.77-5.34-34.68-36.34-34.71-36.68l0-.54h38Z" style="fill: #fff"/>
                @isset($dataClassr)
                @if($dataClassr->disponibilidad == 'no disponible')
                <path d="M1130,1100H882v10H872v129h59v7H886.06c.55,4.46,5.58,35,39,37.56a36.59,36.59,0,0,1,4.54.17l-.06,1q-2.35,0-4.54-.17c-5.73.11-15.94,1.4-24.44,8.22-8.28,6.64-13.14,17-14.47,30.72h38v1.5h6v7H882v10H872v40h47v7H886c-.06,3.12.68,21.92,26.6,30H919v93.13H872V1557h10v10h250V1100Z" style="fill: #fc0"/>
                @else
                <path d="M1130,1100H882v10H872v129h59v7H886.06c.55,4.46,5.58,35,39,37.56a36.59,36.59,0,0,1,4.54.17l-.06,1q-2.35,0-4.54-.17c-5.73.11-15.94,1.4-24.44,8.22-8.28,6.64-13.14,17-14.47,30.72h38v1.5h6v7H882v10H872v40h47v7H886c-.06,3.12.68,21.92,26.6,30H919v93.13H872V1557h10v10h250V1100Z" style="fill: #fff"/>
                @endif
                @endisset
                <path d="M1027.08,965V954H1017V738h10.08V721H1017V584.29h55.83V574h-44.45c1.28-12.69,5.94-22.34,13.83-28.7,8.78-7.07,19.6-8.36,25.57-8.46q2.2.16,4.55.16l.06-1a36.57,36.57,0,0,0-4.55-.16c-33.36-2.4-38.82-31.47-39.45-35.84h44.43V481h-44.45c1.28-12.69,5.94-22.34,13.83-28.7,8.78-7.07,19.6-8.36,25.57-8.46q2.2.16,4.55.16l.06-1a36.81,36.81,0,0,0-4.55-.16c-33.36-2.4-38.82-31.47-39.45-35.84h44.43V395.71H1017V255h10.08V238H1017V17h10.08V7h211V17h17V7h283V17h11.71V238h-11.71v17h11.71v92h-11.71v17h16V483h-16v17h16V644h-5.29v77h-10.71v17h10.71V954h-10.71v11h-283V954h-17v11Z" style="fill: #fff"/>
                <rect x="1132.5" y="1109.5" width="6" height="216" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1132.5" y="1325.5" width="16" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1132.5" y="1093.5" width="16" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1132.5" y="970.5" width="16" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1238.5" y="954.5" width="16" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1538.5" y="954.5" width="15.92" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1538.5" y="721.5" width="15.92" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1538.5" y="483.5" width="15.92" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1538.5" y="347.5" width="15.92" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1538.5" y="238.5" width="15.92" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1538.5" y="0.5" width="15.92" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1398.5" y="970.5" width="16" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <polygon points="1026.5 970.5 1010.5 970.5 1010.83 954.5 1026.5 954.5 1026.5 970.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1010.83" y="721.5" width="15.67" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1010.83" y="483.5" width="15.98" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="908.83" y="483.5" width="15.98" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="630.83" y="483.5" width="15.8" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="630.83" y="356.5" width="15.8" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="630.83" y="238.5" width="15.8" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="630.83" y="120.5" width="15.8" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="630.83" y="0.5" width="15.8" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1010.83" y="238.5" width="15.67" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="908.83" y="238.5" width="15.67" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1398.5" y="1093.5" width="16" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1408.5" y="1231" width="6" height="94.5" style="stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1408.5" y="1341.5" width="6" height="82" style="stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1398.5" y="1325.5" width="16" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1132.5" y="1557.5" width="16" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="866.5" y="1557.5" width="16" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1398.5" y="1557.5" width="16" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <path d="M1415,1156.5h-44.5s3,37,44,37c0,0-40-5-44,38h38" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <path d="M1415,1443.5h-44.5s3,37,44,37c0,0-40-5-44,38h38" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <path d="M931,1245.5H886.5s3,38.73,44,38.73c0,0-40-5.23-44,39.77h38" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="866.5" y="1093.5" width="16" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="866.5" y="1325.5" width="16" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <polygon points="872.5 1239.5 872.5 1109.5 866.5 1109.5 866.5 1239.5 866.5 1245.5 872.5 1245.5 931.5 1245.5 931.5 1239.5 872.5 1239.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1004.5" y="1445.5" width="6" height="250" transform="translate(2578 563) rotate(90)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="903.5" y="1304.5" width="6" height="48" transform="translate(2235 422) rotate(90)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="866.5" y="1511.63" width="6" height="45.87" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1270.5" y="1445.5" width="6" height="250" transform="translate(2844 297) rotate(90)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <polygon points="1074.5 1093.5 1074.5 1016.5 1068.5 1016.5 1068.5 1093.5 1030.5 1093.5 1030.5 1016.5 1024.5 1016.5 1024.5 1093.5 882.5 1093.5 882.5 1099.5 1024.5 1099.5 1030.5 1099.5 1068.5 1099.5 1074.5 1099.5 1132.5 1099.5 1132.5 1093.5 1074.5 1093.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <polygon points="1391.5 1093.5 1391.5 976.5 1385.5 976.5 1385.5 1093.5 1347.5 1093.5 1347.5 1010 1341.5 1010 1341.5 1093.5 1294.5 1093.5 1294.5 1035.5 1288.5 1035.5 1288.5 1093.5 1242.5 1093.5 1242.5 1035.5 1236.5 1035.5 1236.5 1093.5 1156.5 1093.5 1156.5 1055.5 1150.5 1055.5 1150.5 1093.5 1148.5 1093.5 1148.5 1099.5 1150.5 1099.5 1156.5 1099.5 1236.5 1099.5 1242.5 1099.5 1288.5 1099.5 1294.5 1099.5 1341.5 1099.5 1347.5 1099.5 1385.5 1099.5 1391.5 1099.5 1398.5 1099.5 1398.5 1093.5 1391.5 1093.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <polygon points="919.5 1388.5 919.5 1382.5 872.5 1382.5 872.5 1341.5 866.5 1341.5 866.5 1382.5 814.5 1382.5 814.5 1388.5 814.5 1476.5 820.5 1476.5 832.5 1476.5 832.5 1494.75 838.67 1494.75 850.5 1494.75 850.5 1505.5 850.5 1511.63 856.75 1511.63 913.5 1511.63 919.5 1511.63 919.5 1505.5 919.5 1419.5 913.5 1419.5 913.5 1505.5 856.75 1505.5 856.75 1494.75 856.75 1488.5 856.75 1488.5 850.5 1488.5 850.5 1488.5 838.67 1488.5 838.67 1476.5 838.67 1470.5 838.67 1470.5 832.5 1470.5 832.5 1470.5 820.5 1470.5 820.5 1388.5 919.5 1388.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="407" y="1325.5" width="16" height="16" transform="translate(830 2667) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="407" y="1093.5" width="16" height="16" transform="translate(830 2203) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="141" y="1093.5" width="16" height="16" transform="translate(298 2203) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="141" y="1148" width="6" height="177.5" transform="translate(288 2473.5) rotate(-180)" style="stroke: #000;stroke-miterlimit: 10"/>
                <rect x="141" y="1109.5" width="6" height="39" transform="translate(288 2258) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="141.5" y="1518.5" width="6" height="39" transform="translate(289 3076) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="141" y="1325.5" width="16" height="16" transform="translate(298 2667) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="407" y="1557.5" width="16" height="16" transform="translate(830 3131) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="673" y="1557.5" width="16" height="16" transform="translate(1362 3131) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="141" y="1557.5" width="16" height="16" transform="translate(298 3131) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <path d="M624.5,1245.5H669s-3,38.73-44,38.73c0,0,40-5.23,44,39.77H631" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="673" y="1093.5" width="16" height="16" transform="translate(1362 2203) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="673.53" y="970.5" width="15.97" height="16" transform="translate(1363.03 1957) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="673" y="1325.5" width="16" height="16" transform="translate(1362 2667) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <polygon points="683 1239.5 683 1109.5 689 1109.5 689 1239.5 689 1245.5 683 1245.5 624 1245.5 624 1239.5 683 1239.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="545" y="1445.5" width="6" height="250" transform="translate(2118.5 1022.5) rotate(90)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="646" y="1304.5" width="6" height="48" transform="translate(1977.5 679.5) rotate(90)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="683" y="1511.63" width="6" height="45.87" transform="translate(1372 3069.13) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="279" y="1445.5" width="6" height="250" transform="translate(1852.5 1288.5) rotate(90)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <polygon points="636 1388.5 636 1382.5 683 1382.5 683 1341.5 689 1341.5 689 1382.5 741 1382.5 741 1388.5 741 1476.5 735 1476.5 723 1476.5 723 1494.75 716.83 1494.75 705 1494.75 705 1505.5 705 1511.63 698.75 1511.63 642 1511.63 636 1511.63 636 1505.5 636 1419.5 642 1419.5 642 1505.5 698.75 1505.5 698.75 1494.75 698.75 1488.5 698.75 1488.5 705 1488.5 705 1488.5 716.83 1488.5 716.83 1476.5 716.83 1470.5 716.83 1470.5 723 1470.5 723 1470.5 735 1470.5 735 1388.5 636 1388.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="141.5" y1="1341.5" x2="141.5" y2="1518.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <polygon points="1414.5 1421.5 1138.5 1421.5 1138.5 1341.5 1132.5 1341.5 1132.5 1557.5 1138.5 1557.5 1138.5 1427.5 1409 1427.5 1409 1443.5 1414.5 1443.5 1414.5 1421.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1408.5" y="1518.5" width="6" height="39" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1408.5" y="1109.5" width="6" height="47" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1268" y="1533" width="6" height="75" transform="translate(-299.5 2841.5) rotate(-90)" style="stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1181" y="1535" width="6" height="71" transform="translate(-386.5 2754.5) rotate(-90)" style="stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1094" y="1535" width="6" height="71" transform="translate(-473.5 2667.5) rotate(-90)" style="stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1007" y="1534" width="6" height="73" transform="translate(-560.5 2580.5) rotate(-90)" style="stroke: #000;stroke-miterlimit: 10"/>
                <path d="M886.5,1388.5s-2,22,27,31" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <path d="M669,1388.5s2,22-27.5,31" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1068.5" y="912.5" width="6" height="122" transform="translate(98 2045) rotate(-90)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1270.5" y="848.5" width="6" height="250" transform="translate(300 2247) rotate(-90)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="406.5" y="970.5" width="16" height="16" transform="translate(829 1957) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="673.53" y="970.5" width="15.97" height="16" transform="translate(1363.03 1957) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="140.5" y="970.5" width="16" height="16" transform="translate(297 1957) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="480.34" y="912.66" width="6" height="121.68" transform="translate(-490.16 1456.84) rotate(-90)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="278.5" y="848.5" width="6" height="250" transform="translate(-692 1255) rotate(-90)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1393.5" y="825.5" width="6" height="284" transform="translate(429 2364) rotate(-90)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1129.5" y="861.5" width="6" height="212" transform="translate(165 2100) rotate(-90)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1238.5" y="0.5" width="16" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1010.83" y="0.5" width="15.67" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1393.5" y="-138.5" width="6" height="284" transform="translate(1400 -1393) rotate(90)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1129.5" y="-102.5" width="6" height="212" transform="translate(1136 -1129) rotate(90)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1549.21" y="737.5" width="5.21" height="217" transform="translate(3103.62 1692) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1549.21" y="644.5" width="5.21" height="77" transform="translate(3103.62 1366) rotate(-180)" style="stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1550.21" y="254.5" width="4.21" height="93" transform="translate(3104.62 602) rotate(-180)" style="stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1550.21" y="16.5" width="4.21" height="222" transform="translate(3104.62 255) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="1554.5" y1="644.5" x2="1554.5" y2="364" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1010.83" y="16.5" width="5.58" height="222" transform="translate(2027.25 255) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1010.83" y="737.5" width="5.58" height="217" transform="translate(2027.25 1692) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1046.86" y="469.16" width="5.58" height="45.69" transform="translate(1541.66 -557.66) rotate(90)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <polygon points="1016.42 396.21 1016.42 254.5 1010.83 254.5 1010.83 401.65 1011.5 401.65 1016.42 401.65 1072.5 401.65 1072.5 396.21 1016.42 396.21" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <polygon points="1017.5 578.35 1016.5 578.35 1010.83 578.35 1010.83 721.5 1016.42 721.5 1016.42 584 1016.5 583.57 1016.5 583.79 1072.5 583.79 1072.5 578.35 1017.5 578.35" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <path d="M1072,406.5h-44.25s3.25,37,44.25,37c0,0-40.25-5-44.25,38H1072" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <path d="M921,406.5H876.75s3.25,37,44.25,37c0,0-40.25-5-44.25,38H921" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <path d="M1072,499.5h-44.25s3.25,37,44.25,37c0,0-40.25-5-44.25,38H1072" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="300.5" y="954.5" width="16" height="16" transform="translate(617 1925) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="0.58" y="954.5" width="15.92" height="16" transform="translate(17.08 1925) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="0.58" y="721.5" width="15.92" height="16" transform="translate(17.08 1459) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="0.58" y="483.5" width="15.92" height="16" transform="translate(17.08 983) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="0.58" y="347.5" width="15.92" height="16" transform="translate(17.08 711) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="0.58" y="238.5" width="15.92" height="16" transform="translate(17.08 493) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="0.58" y="0.5" width="15.92" height="16" transform="translate(17.08 17) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="528.5" y="954.5" width="15.68" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="631.5" y="954.5" width="15.68" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="631.5" y="838.5" width="15.68" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="631.5" y="721.5" width="15.68" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="631.5" y="601.5" width="15.68" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="528.5" y="721.5" width="15.68" height="16" transform="translate(1072.68 1459) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="528.19" y="483.5" width="16" height="16" transform="translate(1072.37 983) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="528.5" y="238.5" width="15.68" height="16" transform="translate(1072.68 493) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="155.5" y="825.5" width="6" height="284" transform="translate(-809 1126) rotate(-90)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="419.5" y="861.5" width="6" height="212" transform="translate(-545 1390) rotate(-90)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="300.5" y="0.5" width="16" height="16" transform="translate(617 17) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="528.5" y="0.5" width="15.68" height="16" transform="translate(1072.68 17) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="155.5" y="-138.5" width="6" height="284" transform="translate(162 -155) rotate(90)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="419.5" y="-102.5" width="6" height="212" transform="translate(426 -419) rotate(90)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="0.58" y="737.5" width="5.21" height="217" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="0.58" y="644.5" width="5.21" height="77" style="stroke: #000;stroke-miterlimit: 10"/>
                <rect x="0.58" y="737.5" width="5.21" height="77" style="stroke: #000;stroke-miterlimit: 10"/>
                <rect x="0.58" y="254.5" width="4.21" height="93" style="stroke: #000;stroke-miterlimit: 10"/>
                <rect x="0.58" y="60.5" width="4.21" height="178" style="stroke: #000;stroke-miterlimit: 10"/>
                <rect x="0.58" y="16.5" width="4.21" height="44" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="0.5" y1="644.5" x2="0.5" y2="364" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="538.58" y="16.5" width="5.6" height="222" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="538.58" y="737.5" width="5.6" height="217" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="641.58" y="854.5" width="5.6" height="100" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="673.53" y="767.65" width="5.66" height="202.85" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="641.58" y="767.65" width="5.6" height="70.85" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="641.58" y="617.5" width="5.6" height="104" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="641.58" y="579.5" width="5.6" height="22" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="866.5" y="970.5" width="15.89" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="866.5" y="970.5" width="15.89" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="908.82" y="954.5" width="15.68" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="908.82" y="838.5" width="15.68" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="908.82" y="721.5" width="15.68" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="908.82" y="601.5" width="15.68" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="908.82" y="854.5" width="5.6" height="100" transform="translate(1823.23 1809) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="908.82" y="737.5" width="5.6" height="101" transform="translate(1823.23 1576) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="908.82" y="617.5" width="5.6" height="104" transform="translate(1823.23 1339) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="908.82" y="0.5" width="15.68" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="908.82" y="120.5" width="15.68" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="908.82" y="16.5" width="5.6" height="104" transform="translate(1823.23 137) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="640.82" y="16.5" width="5.82" height="104" transform="translate(1287.45 137) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="640.82" y="136.5" width="5.82" height="102" transform="translate(1287.45 375) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="640.82" y="254.5" width="5.82" height="102" transform="translate(1287.45 611) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="640.82" y="372.5" width="5.82" height="111" transform="translate(1287.45 856) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="908.82" y="136.5" width="5.6" height="102" transform="translate(1823.23 375) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="908.83" y="356.5" width="15.67" height="16" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="908.82" y="254.5" width="5.6" height="102" transform="translate(1823.23 611) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="908.82" y="372.5" width="5.6" height="32" transform="translate(1823.23 777) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="908.82" y="579.5" width="5.6" height="22" transform="translate(1823.23 1181) rotate(-180)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="502.55" y="469.16" width="5.58" height="45.69" transform="translate(997.34 -13.34) rotate(90)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <polygon points="538.58 396.21 538.58 254.5 544.18 254.5 544.18 401.65 544.18 401.65 538.58 401.65 482.5 401.65 482.5 396.21 538.58 396.21" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <polygon points="537.5 578.35 538.5 578.35 544.18 578.35 544.18 721.5 538.58 721.5 538.58 584 538.5 583.57 538.5 583.79 482.5 583.79 482.5 578.35 537.5 578.35" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <path d="M483,406.5h44.25s-3.25,37-44.25,37c0,0,40.25-5,44.25,38H483" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <path d="M483,499.5h44.25s-3.25,37-44.25,37c0,0,40.25-5,44.25,38H483" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <polygon points="880.99 767.65 876.58 767.65 702.5 767.65 702.5 773.91 876.58 773.91 876.58 970.5 882.39 970.5 882.39 767.65 880.99 767.65" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="647.5" y1="579.5" x2="908.5" y2="579.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="900.76" y="952.56" width="5.6" height="41.88" transform="translate(1877.06 69.94) rotate(90)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="801.76" y="937.56" width="5.6" height="71.88" transform="translate(1778.06 168.94) rotate(90)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <polygon points="876.5 864.7 768.42 864.7 766.5 864.7 762.82 864.7 762.82 976.5 768.42 976.5 768.42 870.3 876.5 870.3 876.5 864.7" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="649.76" y="952.56" width="5.6" height="41.88" transform="translate(1626.06 320.94) rotate(90)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="774.76" y="365.44" width="5.6" height="262.12" transform="translate(1274.06 -281.06) rotate(90)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="774.76" y="-127.56" width="5.6" height="262.12" transform="translate(781.06 -774.06) rotate(90)" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1010.5" y="641.5" width="6" height="80"/>
                <rect x="1011" y="738" width="6" height="80"/>
                <rect x="1011" y="837" width="6" height="80"/>
                <rect x="539" y="642" width="5" height="80"/>
                <rect x="539" y="738" width="5" height="78"/>
                <rect x="539" y="830" width="5" height="80"/>
                <rect x="316.5" y="0.5" width="128" height="6" style="stroke: #000;stroke-miterlimit: 10"/>
                <rect x="146.5" y="0.5" width="154" height="6" style="stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1082.5" y="0.5" width="156" height="6" style="stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1254.5" y="0.5" width="249" height="6" style="stroke: #000;stroke-miterlimit: 10"/>
                <rect x="1011" y="159.5" width="5.5" height="79"/>
                <rect x="1011" y="254.5" width="5.5" height="79"/>
                <rect x="1011" y="48.5" width="5.5" height="79"/>
                <rect x="539" y="255" width="5" height="80"/>
                <rect x="539" y="64" width="5" height="174"/>
                <rect x="164" y="1002" width="6" height="81"/>
                <rect x="1549" y="738" width="5" height="80"/>
                <rect x="1549" y="839" width="5" height="81"/>
                <rect x="1550.5" y="62.5" width="4" height="176"/>
                <line x1="631" y1="957" x2="544" y2="957" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="1011" y1="957.5" x2="925" y2="957.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="642" y1="945.5" x2="544" y2="945.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="642" y1="934" x2="544" y2="934" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="642" y1="922.5" x2="544" y2="922.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="642" y1="911" x2="544" y2="911" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="642" y1="899.5" x2="544" y2="899.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="642" y1="888" x2="544" y2="888" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="642" y1="876.5" x2="544" y2="876.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="1011" y1="945.5" x2="914" y2="945.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="1011" y1="934" x2="914" y2="934" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="1011" y1="922.5" x2="914" y2="922.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="1011" y1="911" x2="914" y2="911" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="1011" y1="899.5" x2="914" y2="899.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="1011" y1="888" x2="914" y2="888" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="1011" y1="876.5" x2="914" y2="876.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="689.63" y1="976.5" x2="762.49" y2="976.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="679" y1="964.5" x2="763" y2="964.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="679" y1="952.5" x2="763" y2="952.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="679" y1="940.5" x2="763" y2="940.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="679" y1="928.5" x2="763" y2="928.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="679" y1="916.5" x2="763" y2="916.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="679" y1="904.5" x2="763" y2="904.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="679" y1="892.5" x2="763" y2="892.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="679" y1="880.5" x2="763" y2="880.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="679" y1="868.5" x2="763" y2="868.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="768" y1="964.5" x2="877" y2="964.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="768" y1="952.5" x2="877" y2="952.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="768" y1="940.5" x2="877" y2="940.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="768" y1="928.5" x2="877" y2="928.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="768" y1="916.5" x2="877" y2="916.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="768" y1="904.5" x2="877" y2="904.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="768" y1="892.5" x2="877" y2="892.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <line x1="768" y1="880.5" x2="877" y2="880.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <polygon points="405 1093.5 399 1093.5 398.5 1093.5 319 1093.5 319 1011.5 313 1011.5 313 1093.5 267 1093.5 267 1011.5 261 1011.5 261 1093.5 214 1093.5 214 1010 208 1010 208 1093.5 170 1093.5 170 977 164 977 164 1093.5 157 1093.5 157 1099.5 164 1099.5 170 1099.5 208 1099.5 214 1099.5 261 1099.5 267 1099.5 313 1099.5 319 1099.5 399 1099.5 405 1099.5 407 1099.5 407 1093.5 406.5 1093.5 405 1093.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
                <polygon points="533.5 1093.5 531 1093.5 525 1093.5 520.5 1093.5 487 1093.5 487 1014.5 525 1014.5 525 1066.5 531 1066.5 531 1014.5 531 1013.5 531 1008.5 472.5 1008.5 472.5 1014.5 481 1014.5 481 1093.5 445.42 1093.5 445.42 1008.5 439.82 1008.5 439.82 1093.5 423 1093.5 423 1099.5 481 1099.5 487 1099.5 525 1099.5 531 1099.5 673 1099.5 673 1093.5 533.5 1093.5" style="fill: none;stroke: #000;stroke-miterlimit: 10"/>
            </g>
        </svg>



    </div>
</div>
@endsection
