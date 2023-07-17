
<?php

$forward=$_POST["for"] ?? null;
$right=$_POST["right"] ?? null;
$left=$_POST["left"] ?? null;
$backward=$_POST["back"] ?? null;
$stop=$_POST["stop"] ?? null;

$direction=array($forward,$right,$left,$backward,$stop);

foreach($direction as $value){

if( !empty($value) ){

$result=$value;

}
}

echo $result;


?>
