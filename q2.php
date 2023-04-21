<?php

$months = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
$num = 0;

if (isset($_POST['number']) && $_POST['number'] != 0) {
    $num = $_POST['number'];
    echo "Number of days: ".$months[$num - 1];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Question 2</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="number" />
        <button>Submit</button>    
    </form>    
</body>
</html>