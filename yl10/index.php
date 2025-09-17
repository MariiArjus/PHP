<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1>avaleht</h1>
    <?php

    include("menu.php");

    if(!empty($_GET['leht'])){
	    $leht = htmlspecialchars($_GET['leht']);
	    if(is_file($leht.'.php')){
		    include($leht.'.php');
	    } else {
		    echo '<p>404 Valitud lehte ei eksisteeri!</p>';
	    }
    } else {

    ?>
    <h1>avaleht</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur recusandae sit placeat aliquid eos labore perferendis corrupti pariatur, alias rem unde nostrum atque harum! Assumenda itaque eaque suscipit vel impedit.</p>
<h1>avaleht</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum aspernatur aliquid illo tempora consequatur aliquam, ut accusantium architecto sit molestias adipisci vero atque explicabo mollitia quod nulla quasi? Veniam, iusto?</p>

<form action="">
    Start: <input type="time" name="start" id=""><br>
    Finish: <input type="time" name="finish" id=""><br>
    <input type="submit" value="Leia aega">

    </form>
    <?php
    $s = strtotime($_GET["start"]);
    $f = strtotime($_GET["finish"]);

    $diff = abs($s - $f)/3600*60;
    echo intdiv($diff, 60).":".$diff % 60;


    }
    ?>
    <br><h1>--------------------------------</h1>
    <?php
    $allikas = 'tootajad.csv';
    $minu_csv = fopen($allikas, 'r') or die('Ei leia faili!');
    $mkokku = 0; $nkokku = 0;
    $mpalk = 0; $npalk = 0;
    while(!feof($minu_csv)){
        $rida = fgetcsv($minu_csv, filesize($allikas),';');
        if ($rida[1] == "m") {
                $mkokku+=1;
                $mpalk += $rida[2];
            } else {
                $nkokku+=1;
                $npalk += $rida[2];
            }    
    }
    if($mpalk/$mkokku>$npalk/$nkokku){
        echo "naised ei saa piisavalt";
    } else if($mpalk/$mkokku<$npalk/$nkokku){
        echo "mehed ei saa piisavalt";
    } else {
        echo "kõik võrdsed";
    }

    // echo "mehi kokku: " .$mkokku."<br>";
    // echo "naisi kokku: " .$nkokku."<br>";

    fclose($minu_csv);
?>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
