
<?php
const API_URL="https://whenisthenextmcufilm.com/api";
#Vamos a útilizar a llamar a un API
$ch=curl_init(API_URL);
//Indicar que no te muestra el resultaod en pantalla
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//Extraer el resultado en la variable result
$result=curl_exec($ch);
//Trasfornar la daa a un array asociativo
$data=json_decode($result,true);
//Cerar la coneción con curl
curl_close($ch);
//Mostrarlo en pantalla
//var_dump($data)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La última película de Marvel</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    body{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    img{
        width: 50vh;
        border-radius: 20px;
        border: 1px solid red;
        margin:10px 0 10px 0
    }
    hgroup{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 80vh;
    }
    footer{
        display: flex;
        flex-direction: column;
        gap: 15px;
        font-size: 30px;
        justify-content: center;
        align-items: center;
        margin-top: 50px;
        width: 100%;
        background-color: black;
        height: 30vh;
        color: white;
    }
    section{
        padding-top: 50px;
        padding-bottom: 20px;
        display: flex;
        gap: 15px;
        font-size: 30px;
        justify-content: center;
        align-items: center;
        width: 30%;
        background-color: black;
        height: 15vh;
        color: white;
        border-bottom: 1px solid white;
    }
    
    h2{
        font-size: 25px;
    }
    @media(max-width:850px){
        hgroup{
            margin: 0 20px 0 20px;
            padding: 0 20px 0 20px;
            justify-content: start;
            align-items: start;
            width: 50vh;
        }
        body{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
  
    }
    @media(max-width:450px){
        hgroup{
        margin: 0 20px 0 20px;
        padding: 0 20px 0 20px;
        }
    }

</style>
</head>
<body>
<img src="<?=$data["poster_url"]?>" alt="poster de la última película">
<hgroup>
    <h2> <?= $data["title"];?> </h2>
    <h3>
        <?=
        "Se entrena en ".$data["days_until"]." días";
        ?>
    </h3>
    <p><?="Fecha de estreno: ".$data["release_date"]?></p>
    <p><?=
    "Descripción: ".$data["overview"]
    ?></p>
</hgroup>   
</body>
<footer>
<section>
<a href="https://www.facebook.com/ShandeAlvan2004" target="_blank"><i class="fa-brands fa-facebook"></i></a>
<a href="https://www.instagram.com/alvan_saa/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
<a href="https://github.com/saalvan1202/" target="_blank"><i class="fa-brands fa-github"></i></a><br/></section>
<h2>Shande Alvan</h2><br/>       
</footer>
</html>