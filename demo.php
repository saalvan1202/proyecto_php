<style>
    input{
        width: 20vh;
        height: 4vh;
    }
</style>

<?php
//Lo malo es que cuando intentas logear tus datos, se tiene que encontrar un sali da de pantalla


//CONSTANTES
define("LOGO","Hola");

const PHP="Hola mundo";


$name="Shande Andres";
$apellidos="Alvan Rios";
//Para mostrar el tipo de dato y el dato "El valor de la variable"

//Interpolación de cadena
$fullName="$name $apellidos y su edad es: ";

//Hay métodos que te permiten validar que tipo de datos es isString("valor")
var_dump($name);
gettype($name);
$a=10;
$b=16;
//Refleja el la salida del 
echo $fullName;
?>

<h2>
    <?php
    // for($i=0;$i<10;$i++){
    //     echo    "Hola";
    // };
    if($a<$b){
        echo $a . " es menor que " . $b;
    }
    else{
        echo "Al reves";
    }
    ?><br/>
    <input type="number" id="a">
</h2>
<!-- ELSE IF -->
 <?php if($a>$b):?>
 <h2>Hola mundo</h2>
 <?php else :?>
    <h2>Hola</h2>   
<?php endif; ?>

<?php 
const inte=12;
const outp=13;
$intOut= inte>outp ? "EresViejo":"Eres joven";
echo $intOut;

//Con el match puedes evaluar valors directamente, pero también puedes
//hacer que cuando necesitas un valor verdadero, devuelva ese valor
$output= match(inte){
    0,1,3,4=>"Eres un bebe",
    5,6,7,8,9,10,11,12=>"Eres un joven",
    default=>"No sé qué decirte la verdad"
};
$outputAge= match(true){
    inte<10=>"Eres un bebe",
    inte>10=>"Eres un viejo",
    default=>"No se que decirte"

}
?>

<h2><?=$output , $outputAge?></h2>
<!-- ESTRUCTURA DE DATOS -->
 <?php
 $array=["Python","JS","TS","Java"];
 $array[]="VUE";
 ?>
 
<ul>
<!-- Manera de íterar un array -->
<?php foreach($array as $key=>  $valor):?>
    <li><?=$key." ".$valor?></li>
<?php endforeach;?>
</ul>

 <h2><?= $array[1]?></h2>
 <!-- ARRAY ASOCIATIVO -->
<?php
  $arrayA=[
    "name"=>"Shande Andres",
    "apellidos"=>"Alvan Rios",
    "age"=>12,
    "talentos"=>["dev","fut"],
  ]
?>