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
function greetings($nama){
        echo "Hallo $nama, selamat datang di SMK Plus Pelita Nusantara"."<br>";
    }
    greetings("Alvi");
    greetings("Luviani");
    greetings("Rahayu");

    //no2 
     function reverseString ($str){
        $i = strlen($str) -1;
        for ($j = 0; $j < $i; $j++){
            $temp = $str [$i];
            $str[$i] = $str[$j];
            $str[$j] = $temp;
            $i--;
        };
        echo "$str <br>";
    }

    // Hapus komentar di bawah ini untuk jalankan Code
    // reverseString("abduh");
    // reverseString("Sanbercode");
    // reverseString("We Are Sanbers Developers")
    reverseString ("Alvi");
    reverseString ("Luviani");
    reverseString ("Rahayu");
    reverseString ("We Are Developer");
    echo "<br>";

    //no3
    function palindrome ($str){
        $old_str = $str;
        $i = strlen($str) - 1;
        for ($j = 0; $j < $i; $j++){
            $temp = $str[$i];
            $str[$i] = $str[$j];
            $str[$j] = $temp;
            $i --;
        );
        if ($str == $old_str){
            echo " kata sold_str merupakan kalimat palindrome <br>";
        }else{
            echo " kata $old_str bukan kalimat palindrome <br>";
        };
        }
        }
?>
</body>
</html>