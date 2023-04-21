<?php

if (isset($_POST['string1']) && isset($_POST['string2'])) {
  $string1 = $_POST['string1'];
  $string2 = $_POST['string2'];

  if (strstr($string1, $string2)) {
    echo "String 1 contains string 2"; 
  } else {
    echo "String 1 does not contain string 2";
  }
}

?>

<html lang="en">
<head>
  <title>Question 11</title>
</head>
<body>
  <form method="POST">
    <input type="text" name="string1">
    <input type="text" name="string2">
    <button>Submit</button>
  </form>  
</body>
</html>