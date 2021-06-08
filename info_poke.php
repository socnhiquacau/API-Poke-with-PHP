
<?php
$ch = curl_init();
$i = $_GET["id"];
$url ="https://pokeapi.co/api/v2/pokemon/$i";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ch);
$decode = json_decode($data, true);


$img = "https://pokeres.bastionbot.org/images/pokemon/$i.png";
$name = ucfirst( $decode['name']);
$type = $decode['types'][0]["type"]['name'];
$abilities = $decode['abilities'];
$skill =[];

for ($i=0; $i < count($abilities) ; $i++) { 
     $skill[$i]= $abilities[$i]['ability']['name'];
}

var_dump($skill);

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      <img class="card-img-top" src="<?= $img ?>" alt="Card image cap">
        <h3>Hệ</h3><p class="card-text"></p>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?= $name ?></h5>
        
        <p class="card-text"><?= $type ?>.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>