<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>

<?php

error_reporting(0);
$total1 = $_GET["number1"];
$total2 = $_GET["number2"]+ 0;
$result = null;

if(is_numeric($total1) and is_numeric($total2)){

// zbrajanje

if(isset($_GET["add"])){
    $result = $total1 . "+" . $total2 . "=" . ($total1 + $total2);
}

// oduzimanje

if(isset($_GET["subtract"])){
    $result = $total1 . "-" . $total2 . "=" . ($total1 - $total2);
}

// mnozenje

if(isset($_GET["multiply"])){
    $result = $total1 . "*" . $total2 . "=" . ($total1 * $total2);
}

// dijeljenje

if(isset($_GET["divide"])){
    if ($total2 === 0) {

// mby promjeniti na kraju

        $result = "Im afraid I can't do that, Dave, I can't divide by zero";
            
    } else {
    $result = $total1 . "/" . $total2 . "=" . ($total1 / $total2);
    }
}
} else{
$result = "Please enter a number in both slots";
}


?>

  <!-- HTML test -->
<form>

    <input type="number" name="number1" placeholder="First Number">
    <input type="number" name="number2" placeholder="Second Number">
    <br>
    <button type="submit" name="add" value="add" > + </button>
    <button type="submit" name="subtract" value="subtract"> - </button>
    <button type="submit" name="multiply" value="multiply"> * </button>
    <button type="submit" name="divide" value="divide"> / </button>
</form>

<p> Result: </p>

<?php

echo $result

?>

</body>
</html>
