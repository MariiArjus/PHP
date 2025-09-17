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


    <?php
    }
    ?>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>