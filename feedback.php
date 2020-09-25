<?php
// define variables and set to empty values
$name = $subpage = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $subpagepos = test_input($_POST["subpagepos"])
  $subpageneg = test_input($_POST["subpageneg"])
  $comment = test_input($_POST["comment"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>