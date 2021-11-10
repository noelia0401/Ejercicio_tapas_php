<?php
session_start();
include 'head.php';
                                             
echo'<img src = "images/barra.jpg" width = "718" height = "375" alt = "sede"/>';
// 0 FRIA      1 CALIENTE   2 BOCADILLO
$_SESSION['tapas'] = array (
  'TV-0001' => array ('Crujiente de Arroz con rollitos de atún y verduras en escabeche',10,0),
  'TV-0002' =>array ('La Mar de Pincho',4,0),
  'TV-0003' =>array ('Pincho el indiano de Cantabria', 8,1),
  'TV-0004' =>array ('Tierra, sabor, tradición',9,1),
  'PV-0001' =>array ('Txerri Beltz', 12,2),
  'PV-0002' =>array ('Esencia', 11,0),
  'PV-0003' =>array ('Rebanada de Vida',10,2)
  
);
$_SESSION['votos'] =array('TV-0001' => 0,
            'TV-0002' =>0,
            'TV-0003' => 0,
            'TV-0004' => 0,
            'PV-0001' =>0,
            'PV-0002' =>0,
            'PV-0003' =>0);
//var_dump ($tapas);
include 'pie.php';

