 <h1>Harjutus 04</h1>

    <h2>4.7 hinne</h2>
      <form action="#" method="get">
        Punktid <input type="number" name="punktid" required value="5" min="1" max="10"><br>
        <input type="submit" value="anna hinne">
      </form>
      <?php
          if(isset($_GET["synniaasta"])){
               $punktid = $_GET["punktid"];

              switch($punktid){ 
	                case ($punktid>=10) : echo '5'; 
	                break; 
	                case (($punktid>=5) && ($punktid<=9)): echo '3'; 
	                break; 
	                default: echo 'MA'; 
              } 
          }
      ?>







        <h2>4.6 Juubel</h2>
      <form action="#" method="get">
        sünniaasta <input type="number" name="synniaasta" required value="2000"><br>
        <input type="submit" value="leia juubel">
    </form>
    <?php
    if(isset($_GET["synniaasta"])){
      $vanus = 2025 - $_GET["synniaasta"];
      if($vanus%5 == 0){
        echo "on juuvel";
      } else {
        echo "ei ole juubel";
      }
    }
    ?>

     <h2>jagamine</h2>
      <form action="#" method="get">
        arv1 <input type="number" name="arv1" required><br>
        arv2 <input type="number" name="arv2" required><br>
        <input type="submit" value="jaga">
              </form>

        <?php
        if(isset($_GET["arv1"] && isset($_GET["arv2"]))){
          $arv1 = $_GET["arv1"];
          $arv2 = $_GET["arv2"];

          if($arv2==0){
            echo "nuliga ei saa jagada";
          } else {
            echo $arv1 / $arv2;
          }

          
        }

        ?>
