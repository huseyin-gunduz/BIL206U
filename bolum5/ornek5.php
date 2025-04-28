<?php 

   $mantiksal = false;
 
   echo "Oncesi  : ". gettype($mantiksal) . "\n"; 

   settype($mantiksal, "integer");

   echo "Sonrasi : ". gettype($mantiksal) ; 

?> 
