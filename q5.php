<?php

if (isset($_POST['number']) && $_POST['number'] != 0) {
    $number = $_POST['number'];
    $temp = $number;

    $count = 0;

    for ($i = 1; $i <= $temp; $i++) {
        if ($temp % $i == 0) {
            $count += 1;
        }
        if ($count > 2) break;
    }

    if ($count == 2) {
        echo $number." is a prime number";
    } else {
        echo $number." is not a prime number";
    }
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Question 5</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="number">
        <button>Submit</button>
    </form>
</body>
</html>