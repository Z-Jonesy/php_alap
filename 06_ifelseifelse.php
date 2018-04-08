<?php
$a=2;
$ora=11;

if($ora <= 10){
  print "Jó reggelt";
} 
elseif ($ora <= 18){
    print "Jó napot";
}
else{
    print "Jó estét";
}
print "<br>";
print ($a%2 == 0) ? "páros" : "páratlan";

?>