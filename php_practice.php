<!--Hello World!

<h1>Hello World!</h1>

<style>
    h1{
        color: blue;
    }
</style>

<script>
    alert("Hello World!");
</script>
-->

<?php 
//    echo "Hello World!";
  #  echo "Hello World!";
?>

    <!-- Hello -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>This is my first PHP page</h1> -->

    <?php
    
        // eChO "<b>Hello my name is John!</b><br>"; 

    //aZ09_
  /*  $a = 5;
    var_dump($a);
    var_dump("John");
    var_dump(3.14);
    var_dump(true);
    var_dump([1,2,3]);
    var_dump(null);
    */

    // $a = 5;  //global

    // echo $a."<br>";

    // function test(){
    //     // $a = 0; //local
    //     static $a = 0; //static
    //     echo $a."<br>";
    //     $a++;
    // }

    // test(); 
    // test(); 
    
    // echo ("Hello <br>"), ("Hello <br>"), ("Hello <br>"); 
    // echo "World! <br>","World! <br>","World! <br>";
    // print ("Hello <br>"); 
    // print "World! <br>";

    // $a = 5;
    // echo "$a Eggs";

    $a = "John Cruz";
    $b = -5;
    $c = 3.14;
    $d = false;
    $e = [1, 2 , 3];
    $f = new stdClass();
    $g = null;
    $h = fopen("php_practice.php", "r");

    // var_dump($a);
    // echo '<br>';
    //  var_dump($b);
    // echo '<br>';
    //  var_dump($c);
    // echo '<br>';
    //  var_dump($d);
    // echo '<br>';
    //  var_dump($e);
    // echo '<br>';
    //  var_dump($f);
    // echo '<br>';
    //  var_dump($g);
    // echo '<br>';
    //  var_dump($h);
    // echo '<br>';

    // echo strlen($a), "<br>";
    // echo str_word_count($a), "<br>";
    // echo strpos($a, "Cruz"), "<br>"; //Position
    // echo strtoupper($a), "<br>"; //UpperCase
    // echo strtolower($a), "<br>"; //LowerCase
    // echo str_replace("Cruz", "Manaloto", $a), "<br>";//Replace
    // echo strrev($a), "<br>"; //Reverse String
    // echo trim ("Hello Love!  "), "<br>"; //Trim string
    // var_dump (explode ("o","Hello Love!"));

    //echo var_dump("Hello" . "World!");
    // $x = "Hello";
    // $y = "World";

    // echo "$x $y <br>";

    // echo "John \$Bai\" Cruz";

    // $a = 5;
    // $b = 3.14;
    // $c = "5";

    // echo PHP_INT_MAX, "<br>";
    // echo PHP_INT_MIN, "<br>";
    // echo PHP_INT_SIZE, "<br>";

    // echo is_long($c), "<br>";

    // echo PHP_FLOAT_MAX, "<br>";
    // echo PHP_FLOAT_MIN, "<br>";
    // echo PHP_FLOAT_DIG, "<br>";
    // echo PHP_FLOAT_EPSILON, "<br>";

    // echo is_float($b), "<br>", "<br>";

    // echo is_numeric($c), "<br>";

    // $a = (string) "John Cruz";
    // $b = (string) -5;
    // $c = (string) 3.14;
    // $d = (string) true;
    // $e = (string) null;
    // $f = (string) fopen("php_practice.php", "r");

    // $a = (int) "John Cruz";
    // $b = (int) -5;
    // $c = (int) 3.14;
    // $d = (int) false;
    // $e = (int) null;
    // $f = (int) fopen("php_practice.php", "r");

    // $a = (float) "5John Cruz";
    // $b = (float) -5;
    // $c = (float) 3.14;
    // $d = (float) false;
    // $e = (float) null;
    // $f = (float) fopen("php_practice.php", "r");

    // $a = (bool) "John Cruz";
    // $b = (bool) -5;
    // $c = (bool) 3.14;
    // $d = (bool) false;
    // $e = (bool) null;
    // $f = (bool) fopen("php_practice.php", "r");

    // $a = (array) "John Cruz";
    // $b = (array) -5;
    // $c = (array) 3.14;
    // $d = (array) false;
    // $e = (array) null;
    // $f = (array) fopen("php_practice.php", "r");

    // $a = "John Cruz";
    // $b = -5;
    // $c = 3.14;
    // $d = false;
    // $e = null;
    // $f = fopen("php_practice.php", "r");

    // unset($a);

    //  var_dump($a);
    // echo '<br>';
    //  var_dump($b);
    // echo '<br>';
    //  var_dump($c);
    // echo '<br>';
    //  var_dump($d);
    // echo '<br>';
    //  var_dump($e);
    // echo '<br>';
    //  var_dump($f);
    // echo '<br>';

    // echo pi();
    
    // echo min(5, 1, 3, 2);

    // echo max(5, 1, 3, 2);

    // echo abs(10);

    // echo sqrt(25);

    // echo round(3.45, 0);

    // echo rand(5, 10);

    // constants
    // $x = 10;
    // define("_GREETING", "Hello World!");

    // // echo $x;
    // // var_dump (_GREETING);

    // const _GREETING2 = "Hello People!";

    // echo _GREETING2;
    
    // function test(){
    //     echo _GREETING2;
    // }

    // test();

    // echo $x;
    // unset(_GREETING);
    // echo _GREETING;

    // arithmetics

    // // + addition
    // echo 10 + 100 + 20, "<br>";
    
    // // - subtraction
    // echo 10 - 100 - 20, "<br>";

    // // add and sub
    // echo 10 - 20 + 100 - 10, "<br>"; //left to right

    // // * multiplication
    // echo 10 * 10 * 10, "<br>";

    // // / division
    // echo 10 / 5 / 2, "<br>";

    // // multiplication and division
    // echo 10 / 5 * 2, "<br>";

    // // add/sub and division/multi
    // echo 50 + 10 / 2, "<br>"; // multi/division before add/subtract

    // // % modulus
    // echo 7 % 3, "<br>";

    // // ** exponential
    // echo 10 ** 10, "<br>";

    // assignment 

    // // = equals
    // $x = 10;
    // echo $x, "<br>";

    // // +=
    // $x = $x + 10;
    // $x += 10;
    // echo $x, "<br>";

    // // -=
    // $x = $x - 10;
    // $x -= 10;
    // echo $x, "<br>";

    // // /=
    // $x = $x /10;
    // $x /= 10;
    // echo $x, "<br>";

    // // *=
    // $x = $x * 10;
    // $x *= 10;
    // echo $x, "<br>";

    // // comparison
    // // == equals to = similar value
    // var_dump(10 == "10");
    // // === identical = similar value and data types
    // var_dump(10 == "10");
    // // != <> not equals to = not similar value
    // var_dump(10 != "10");
    // var_dump(10 <> "10");
    // // !== not identical = not similar value or not similar data types
    // var_dump(10 !== "10");
    // // < less than = checks if first value is less than second value
    // var_dump(10 < 9);
    // // > greater than = checks if first value is greater than second value
    // var_dump(10 > 9);
    // // <= less than or equals to 
    // var_dump(10 <= 10);
    // // >= greater than or equals to
    // var_dump(10 >= 10);
    // // <=> spaceship = checks if first value is less than or equals or greater than second value 
    // var_dump(1 <=> 2);
    // var_dump(2 <=> 2);
    // var_dump(3 <=> 2);

    // increment and decrement
    // pre-increment
    // $x = 10;
    // echo ++$x, "<br>";

    // // post-increment
    // $y = 10;
    // echo $y++, "<br>";

    // // pre-decrement
    // $x = 10;
    // echo --$x, "<br>";

    // // post-decrement
    // $y = 10;
    // echo $y--, "<br>";

    ?>
</body>
</html>
