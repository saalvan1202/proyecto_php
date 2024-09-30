<?php
const API_URL="https://whenisthenextmcufilm.com/api";
#Vamos a útilizar a llamar a un API
$ch=curl_init(API_URL);
//Indicar que te muestra el resultaod en pantalla
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
$data=json_decode($result,true);
curl_close($ch);
?>
<h2>Hola</h2>