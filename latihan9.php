<?php
$arrWarna = array("Blue", "Black", "Red", "Yellow", "Green");

echo "Menampilkan isi array dengan for : <br>";
for ($i=0; $i<count($arrWarna); $i++)
{
echo "Do You Like <font color=$arrWarna[$i]>". $arrWarna[$i]
."</font> ?<br>";
}

echo "<br>Men isi array dengan foreach : </br>";
foreach ($arrWarna as $warna)
{
  echo "Do You Like <font color=$warna>". $warna . "</font>?<br>";
}
 ?>
