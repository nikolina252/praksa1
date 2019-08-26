<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>moja kalkulator</title>
</head>
<body>
    
    <h2>Moj prvi kalkulator</h2>

<form action="nina_kalkulator.php" method="POST">
Broj 1:<input type="number" name="num1" >
Broj 2: <input type="number" name="num2" >
<br><br>Odaberite operaciju:
<input type="submit" value="+" name="oper">
<input type="submit" value="-" name="oper">
<input type="submit" value="/" name="oper">
<input type="submit" value="*" name="oper">

<br><br>
<?php
 $num1 = $_POST["num1"];
 $num2 = $_POST["num2"];
 $oper = $_POST["oper"];
 echo "<br>"."Rezultat: ";
   if ($oper == "+" ) {
        echo $num1 + $num2;
    } elseif ($oper == "-" ){
        echo $num1 - $num2;
    } elseif ($oper == "*" ){
        echo $num1 * $num2;
    } elseif ($oper == "/" ){
        echo $num1 / $num2;
    } elseif($oper == "" ){
        echo "0";
    }
?>
</form>
</body>
</html>