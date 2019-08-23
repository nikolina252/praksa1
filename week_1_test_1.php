<html>
<title>Zadatak 1</title>

<body>
<h3>Zadatak kod kuće 1</h3>
<?php
echo"Pozdrav ";
?>
<br>
<?php
echo"Varijable(string, broj, niz)";

//string
$ab="Moja omiljena pjesma";
//broj
$vb=4;
$gh=6;
echo"<br>";
//niz
echo"Niz<br>";

$pjesma = array(" Tvoj Kerber", "Seobe", "Nebo je malo za sve", "Kad ljubav izda");

echo $ab."je pod rednim brojem ".$vb." ".$pjesma[3];
echo"<br>";

?>
<br>
<?php
echo"Sabiranje, Oduzimanje, Dijeljenje i Množenje";
$a=1;
$b=2;
$c=3;
$d=4;
$f=5;

$sabiranje = $a + $f;
$oduzimanje =$d - $a;
$mnozenje = $b * $c;
$dijeljenje = $d / $b;

echo"<br>";
echo $sabiranje."<br>";
echo $oduzimanje."<br>";
echo $mnozenje."<br>";
echo $dijeljenje."<br>";

?>
<h3>Zadatak kod kuce 2</h3>
<p>Upotreba kontrolnih struktura (sa varijacijama == i ===)</p>
<p>3=="3"</p>
<?php

$ni=3;
$na="3";
if($ni == $na){
    echo"Tačno";
}
else{
    echo"Netačno";
}
echo"<br>";
?>

<p>3==="3"</p>
<?php
$bi=3;
$ba="3";
if($bi === $ba){
    echo"Tačno";
}
else{
    echo"Netačno";
}
echo"<br>";
?>
<h3>Zadatak kod kuce 3</h3>
<p>if i ifelse</p>
<?php
echo"U prodavnici ima 10 jabuka, ukoliko meni treba do 10 jabuka ispisace se:<br>";
$j=10;
$m=5;
if($j <= 0){
    echo"U prodavnici ima jabuka";
}
elseif($j<$m){
    echo"U prodavnici nema dovoljno jabuka";

}
else{
    echo"U prodavnici nema jabuka";
}
?>
<br>
<?php
echo"U prodavnici ima 10 jabuka, ukoliko meni treba vise od 10 jabuka ispisace se:<br>";
$j=10;
$m=25;
if($j <= 0){
    echo"U prodavnici ima jabuka";
}
elseif($j<$m){
    echo"U prodavnici nema dovoljno jabuka";

}
else{
    echo"U prodavnici nema jabuka";
}
?>


</body>

</html>