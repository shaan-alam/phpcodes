<?php

if (isset($_POST['string1'])) {
  $string1 = $_POST['string1'];

  if ($string1 == strrev($string1)) {
    echo "Palindrome string"; 
  } else {
    echo "Not palindrome string!";
  }
}

?>

<html lang="en">
<head>
  <title>Question 14</title>
</head>
<body>
  <form method="POST">
    <input type="text" name="string1">
    <button>Submit</button>
  </form>  
</body>
</html>