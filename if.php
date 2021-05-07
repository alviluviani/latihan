<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$hari_ini = "senin";
if($hari_ini == "senin") {
  echo "I Love Monday";
} else {
  echo "Ini bukan hari senin";
}

$nilai = 90;
echo "<br>";
if($nilai < 85){
echo "nilai  anda B";

}else if ($nilai < 60){
    echo "nilai anda C";
}else{
    echo "nilai anda A";
}
?>
</body>
</html>


