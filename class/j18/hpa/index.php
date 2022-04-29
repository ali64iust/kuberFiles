<?php
   $x = 0.00001;
   for ($i = 0; $i <= 1000000 ; $i++){
     $x += sqrt($x);
   }
   echo "ok!";
?>
