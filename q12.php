<?php

if (isset($_POST['string1'])) {
  $string1 = $_POST['string1'];

  $new_string = preg_replace('/\s+/', '', $string1);

  echo "New string: ".$new_string;
}

?>

<html lang="en">
<head>
  <title>Question 12</title>
</head>
<body>
  <form method="POST">
    <input type="text" name="string1">
    <button>Submit</button>
  </form>  
</body>
</html>