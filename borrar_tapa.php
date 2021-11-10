<?php
session_start();
include 'head.php';
if (isset($_REQUEST['borrar']))
{
  $codigo=$_REQUEST['codigo'];

  $elementos=count($_SESSION['tapas']);
  //echo $elementos." elementos<br>";

  unset($_SESSION['tapas'][$codigo]);
  $elementos_borrar=count($_SESSION['tapas']);
  if ($elementos != $elementos_borrar)
  {
    echo "La tapa se ha borrado exitosamente<br><br>";
  }
  else 
  {
    echo "LA TAPA NO EXISTE O NO SE HA BORRADO<br><br>";
  }
}

                                             
 print' 
            <strong>INTRODUCE EL CODIGO DE LA TAPA A  PARA BORRAR <BR><BR></strong>
                                     
        <div   class="postcontent">
         <form action="borrar_tapa.php" method="post">
            <table align="center" class="content-layout">
              
              
              <tr>
                <td align="right">Codigo de la Tapa :</td><td>
             
                    <input type="text" name="codigo" size="10"/>
                </td>
              </tr>
              
              
              <tr>
                <td colspan="2" >
                    <input name="borrar" type="submit"  value="Borrar Tapa"/>
                </td>
             </tr>
        </table>
    </form>
        </div>';
var_dump ($_SESSION['tapas']);
 include 'pie.php';