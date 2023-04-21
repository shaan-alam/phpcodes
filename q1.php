<?php



if (isset($_POST['num1']) && $_POST['num1'] != 0 && 
    isset($_POST['num2']) && $_POST['num2'] != 0 && 
    isset($_POST['num3']) && $_POST['num3'] != 0) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    $max = $num1;

    if ($num2 > $max) $max = $num2;
    if ($num3 > $max) $max = $num3;

    echo "Greatest number: ".$max;
} else {
    echo "Please input all the three values";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Question 1</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <input type="number" name="num3">
        <button type="submit">Submit</button>
    </form>    
</body>
</html>