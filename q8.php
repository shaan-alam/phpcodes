<?php

$str = "";

if (isset($_POST['string']) && $_POST['string'] != '') {
    $str = $_POST['string'];
    $reverse = "";

    $i = strlen($str) - 1;
    while ($i >= 0) {
        $reverse = $reverse.$str[$i];
        $i--;
    }

    echo "Reverse: ".$reverse;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Question 8</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="string">
        <button>Submit</button>
    </form>
</body>
</html>