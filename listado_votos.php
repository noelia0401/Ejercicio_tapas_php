<?php
session_start();
include 'head.php';

echo '<table>
    <thead>
        <th>Codigo tapa</th>
        <th>numero votos</th>
    </thead>
    <tbody>';
    foreach ($_SESSION['votos'] as $clave=>$valor)
    {
    echo '<tr>
        <td>'.$clave.'</td>
        <td>'.$valor.'</td>
    </tr>';
    }
    echo '</tbody>';
 
 include 'pie.php';

