<?php


function check_lowercase($str) {
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] >= 'A' && $str[$i] <= 'Z') {
            return false;
        }
    }

    return true;
}

if (isset($_POST['string'])) {
    $string = $_POST['string'];

    if (check_lowercase($string)) {
        echo "Input string consists of lowercase characters only!";
    } else {
        echo "Input string doesnt consists of lowercase characters only!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Question 10</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="string">
        <button>Submit</button>
    </form>
</body>
</html>