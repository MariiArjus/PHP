<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 09</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1>harjutus 9</h1>
<?php
    function tervita($n){
        $puhastatud = ucfirst(strtolower(trim($n)));
        return $puhastatud;
    }

    echo tervita(" niMI  ")
?>


<?php
    echo "<br>";
    $i = "stalker";
    $punktid = strtoupper(implode('.', str_split($i)));
    echo $punktid
?>

<?php
    echo "<br>";

function emaili_loomine($e, $p){
    $tapikad = array("ä", "ö", "õ", "ü");
    $asendus = array("a", "o", "o", "y");
    $enimi = str_replace($tapikad, $asendus, mb_strtolower(trim($e)));
    $pnimi = str_replace($tapikad, $asendus, mb_strtolower(trim($p)));

    return $enimi.".".$pnimi."@hkhk.edu.ee";

}

echo emaili_loomine("üöõä", "zdg");
?>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
