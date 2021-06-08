<?php

$ch = curl_init();
$p = 20;
$card ='';


    for ($i=1; $i <= $p ; $i++) { 
        $url ="https://pokeapi.co/api/v2/pokemon/$i";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);
        $decode = json_decode($data, true);
        $img = "https://pokeres.bastionbot.org/images/pokemon/$i.png";

     
        $name = ucfirst( $decode['name']);
        $type = $decode['types'][0]["type"]['name'];

        switch ($type) {
            case 'grass':
                $color_card = "#afde06";
                break;
            case 'fire':
                $color_card = "#e8492a";
                break; 
             case 'water':
                $color_card = "#0eb6ec";
                break;  
              case 'normal':
                $color_card = "#e7e7de";
                    break;   
             case 'fairy':
                $color_card = "#ed82b2";
                            break;    
               case 'poison':
                $color_card = "#024043";
                break;                                 
            default:
                 $color_card="";
                break;
        }
       
        //    echo "<pre>";
        // print_r($type);
        // echo "</pre>";

        $card.='
        
        
         <div class="card" style="width: 16rem; background-color: '.$color_card.' ">
            <img class="card-img-top" src="'.$img.'" alt="">
            <div class="card-body text-center">
                <p class="card-text name"> <a href="./info_poke.php?id='.$i.'"> '. $name.' </a>  </p>
                <p class="card-text"> '.$type.' </p>
            </div>
        </div>
        
        
        '
        
    ?>
       

<?php } curl_close($ch) ;?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">
<style>
.name{
    font-family: 'Odibee Sans', cursive;
    font-size: 25px;
}
.card{
    display: inline-block !important;
    margin: 7px; 
    box-shadow: 6px 6px 2px 1px rgba(0, 0, 255, .2);
}
</style>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon</title>
</head>
<body>
    
<div class="container">


<?= $card ?>


</div>




</body>
</html>
