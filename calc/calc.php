<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>

  <!-- HTML test -->
<form>

    <input type="text" name="nr1" placeholder="First Number">
    <input type="text" name="nr2" placeholder="Second Number">
    <br>
    <button type="add" name="add" value="add" > + </button>
    <button type="subtract" name="subtract" value="subtract"> - </button>
    <button type="multiply" name="multiply" value="multiply"> * </button>
    <button type="divide" name="divide" value="divide"> / </button>
</form>

<p> Result: </p>

<?php

// zbrajanje

if(isset($_GET["add"])){
    $total1 = $_GET["nr1"];
    $total2 = $_GET["nr2"];
    echo $total1 . "+" . $total2 . "=" . $total1 + $total2;
}

// oduzimanje

if(isset($_GET["subtract"])){
    $total1 = $_GET["nr1"];
    $total2 = $_GET["nr2"];
    echo $total1 . "-" . $total2 . "=" . $total1 - $total2;
}

// mnozenje

if(isset($_GET["multiply"])){
    $total1 = $_GET["nr1"];
    $total2 = $_GET["nr2"];
    echo $total1 . "*" . $total2 . "=" . $total1 * $total2;
}

// dijeljenje

if(isset($_GET["divide"])){
    $total1 = $_GET["nr1"];
    $total2 = $_GET["nr2"];
    if ($total2 == 0) {

// mby promjeniti na kraju

        echo "Im afraid I can't do that, Dave, I can't divide by zero";
            
    } else {
    echo $total1 . "/" . $total2 . "=" . $total1 / $total2;
    }
}

?>

</body>
</html>