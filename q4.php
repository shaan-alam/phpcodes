<?php

if (isset($_POST['n'])) {
    $n = $_POST['n'];
    $count = 0;
    $sum = 0;

    for ($i = 1; $count < $n; $i = $i + 2) {
        $sum = $sum + $i;
        $count = $count + 1;
    }

    echo "Sum: ".$sum."<br />";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Question 4</title>
</head>
<body>
    Enter n:
    <form method="POST">
        <input type="number" name="n">
        <button>Submit</button>
    </form>
</body>
</html>