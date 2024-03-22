<?php
// 17. sorunun cozumu

$not = 60;
if($not < 50)
{ 
    echo "FF"; 
}
elseif($not>50 && $not <60)
{
    echo "CC";
}
elseif($not>60 && $not <75)
{
    echo "BB"; 
}
elseif($not>75 && $not <100)
{ 
    echo "AA"; 
}
else{ 
    echo "DZ"; 
}
?>
