<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 07</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>

<h1>harjutus7</h1>
  <h2>funktsioonid</h2>
<?php
  	function tervita(){
		echo "Hello World!";	
  	}


function uudiskiri(){
  echo '<div class="row">
    <div class="col-sm-2">
    <form action="">
      <input type="text"><input placeholder="liitu uudiskirjaga">
      <input type="submit" value="liitu" class="btn btn-success">
    </form>
  </div>
</div>';
}

function createUser($u){
  $lu = strtolower($u);
  echo $lu. "@hkhk.edu.ee";
  echo "<br>";
  $p = substr(password_hash($lu, PASSWORD_BCRYPT),7, 7);
  echo $p;
}


function vahemikus($a1, $a2, $s){
  for ($i=$a1; $i <= $a2; $i=$i+3) {
    echo $i;
  }
}

function rectangles($a1, $a2){
  return $a1 * $a2;
}

//isikukood
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

function headMotted(){
  $alused = array("jüri", "mari", "uku");
  $oeldised = array("armastab", "viskab", "tõmbaba");
  $sihitised = array("mind", "sind", "teda");

  echo $alused[array_rand($alused)]. " ".$oeldised[array_rand($oeldised)]. " ".$sihitised[array_rand($sihitised)];
}

headMotted();


echo "<br>";

tervita();
uudiskiri();
createUser("Mario");
echo "<br>";
vahemikus(2,20,3);
echo "<br>";
echo ik("60807287068");

?>

<h2>ristküliku pindala</h2>
<form>
  Külg 1<input type="number" name="kylg1" value="10">
  Külg 2<input type="number" name="kylg2" value="10">
  <input type="submit" name="Arvuta pindala">
</form>
<?php
echo "pindala ".rectangles($_GET['kylg1'], $_GET['kylg2']);
// echo "pindala ".(isset($_GET['kylg1'])) ? "sisesta küljed" : rectangles($_GET['kylg1'], $_GET['kylg2']);
echo "<br>";

?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
