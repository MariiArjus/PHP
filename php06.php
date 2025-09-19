<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 06</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>

<h1>harjutus6</h1>
  <h2>Geneeriminme</h2>
  <?php
  	for($nr=1;$nr<=100;$nr++){
		echo $nr;	
	}


// – loo arvud 1-100
// – loo pärast iga 10 arvu reavahetus
// – lisa iga arvu järele punkt (N: 1. 2. 3. jne…)

  ?>



 <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <img src="/img/<?php echo $pildid[2]; ?> alt="">
      </div>
</div>

<div class="row">
  <?php

    foreach ($pildid as $pilt) {
      echo '<div class="col-sm-2">';
    echo '<img class="img-fluid" src="/img/'" .$pilt. '" alt="">'';
    echo '</div>';

      }
    ?>
          </div>
</div>




 <div class="container">
      <div class="row">
        <div class="col-sm-4"><img src="/img/devlin.jpg" alt=""></div>
        <div class="col-sm-4"><img src="/img/freeland.jpg"alt=""></div>
        <div class="col-sm-4"><img src="/img/freeland.jpg"alt=""></div>
      </div>
    </div>


	  <h1>harjutus6</h1>
  <h2>Geneeriminme</h2>
  <?php
  //kolmega jagunev
        for ($i=1; $i <= 100; $i++) {
            if ($i%3==0) {
             echo "<br>";
        }
        echo $i. "<br>";  
    }


  //kahanev
    for ($i=10; $i <= 0; $i--) {
        echo $i. "<br>";  
    }




    echo "<br>";


  //10x10 tärnid
    for ($i=1; $i <= 10; $i++) {
        echo " *";
        if ($i%10==0) {
            echo "<br>";
        }
    }

    echo "<br>";


  //tärnidega read
    for ($i=1; $i <= 0; $i++) {
        echo "*";
    }

    for ($i=1; $i <= 0; $i++) {
        echo "*<br>";
    }


    echo "<br>";


  	for ($i=1; $i <= 100; $i++) {
		echo $i. ". ";	
        if ($i%10==0) {
            echo "<br>";
        }

	}


?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
