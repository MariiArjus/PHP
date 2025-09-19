<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iseseisvad ülesanded</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h2>Tekst</h2>
    <?php
    $nimi = "Juhan Liiv, ";
    $mingi_asi = '"Ääremärkussed"';
    echo $nimi;
    echo $mingi_asi;
    echo "<br>";
    ?>


<h2>teisendamine</h2>

<?php
function tollidCM($tollid) {
    $cm = $tollid * 2.45;
    return round($cm, 2);
}

$tollid = 7;
$cm = tollidCM($tollid);

echo  "$tollid tolli on $cm cm";
?>


<h2>Loend</h2>
    <?php
    function printReverseNums($n) {
        for ($i = $n; $i >= 1; $i--) {
            echo $i . " ";
        }
    }
    printReverseNums(10);
    ?>


<h2>isikukood</h2>
<?php

function ik($ik){
  $pikkus = strlen($ik);
  if ($pikkus == 11){
    // return vastus="õige pikkusega";
    if (intval($ik[0]%2==0)){
      $vastus ="naine";
    } else{
      $vastus="mees";
    }
  } else{
    $vastus="vale pikkusega";
  }
  return $vastus;
}

echo ik("60807287068");
?>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>