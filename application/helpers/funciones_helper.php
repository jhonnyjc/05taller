<?php
function formatearfecha($fecha)
{
   $dia=substr($fecha,8,2);
   $mes=substr($fecha,5,2);
   $anio=substr($fecha,2,4);
   $hora=substr($fecha,11,5);

   $fechaformateada=$dia."/".$mes."/".$anio." ".$hora;
   return $fechaformateada;

}

function estado($Nro_de_factura)
{
  if ($Nro_de_factura>=50)
  {
      $estado="lleno tardara mas tiempo";
  }
  else
  {
    $estado="disponible";
  }
  return $estado;


} 





?>