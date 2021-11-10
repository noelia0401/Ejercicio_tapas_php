<?php
session_start();
include 'head.php';

if (isset($_REQUEST['votar']))
{
  $codigo=$_REQUEST['codigo'];
  $_SESSION['votos'][$codigo]++;
}

echo'<form action="votar_tapa.php" method="post">
  Selecciona la Tapa a la cual quieres votar
    <select name="codigo">';
    foreach ($_SESSION['tapas'] as $clave=>$valor)
    {
    echo '<option value="'.$clave.'">'.$valor[0].'<option>';
    }
    //<option value="">Crujiente de Arroz con rollitos de atún y verduras en escabeche</option>
    //<option value="">La Mar de Pincho</option>
    //<option value="">Pincho el indiano de Cantabria</option>
    //<option value="">Tierra, sabor, tradición</option>
    //<option value="">Txerri Beltz</option>
    //<option value="">Esencia</option>
    //<option value="">Rebanada de Vida</option>
    echo '</select>
    <br> 
<input name="votar" type="submit"  value="Votar"/>
             
</form>';

 include 'pie.php';

