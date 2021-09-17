<?php
 $Email="josearita03.jtr@educatrachos.hn";
 $Nombre=$_POST["Nombre"];
 $Departamento=$_POST["Departamento"];
 $Mensaje=$_POST["Mensaje"];
 $Email=$_POST["E-mail"];
 $thank="Gracias.Html";
 $message="
 Nombre:".$Nombre."
 Departamento:".$Departamento."
 Mensaje:".$Mensaje."
 Email:".$Email."";
if(mail($Email,"formulario",$message))Header("location: $thank");
?>
