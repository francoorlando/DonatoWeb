
<?php

header('Content-Type: application/json');

include "../conexion.php";


$sql = "SELECT * FROM eventos";
mysqli_set_charset($conection, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($conection, $sql)) die();

while($row = mysqli_fetch_array($result)) 
{ 
 $id=$row['id'];
 $title=$row['title'];
$className=$row['className'];
$start=$row['start'];
 $end=$row['end'];

 $eventos[] = array('id'=> $id, 'title'=> $title, 'className'=>$className,
  'start'=> $start,'end'=> $end );
}

$json_string = json_encode($eventos);
echo $json_string;

//Se declara que esta es una aplicacion que genera un JSON
header('Content-type: application/json; charset=utf-8"');
      //Se abre el acceso a las conexiones que requieran de esta aplicacion
header("Access-Control-Allow-Origin: *");

?>