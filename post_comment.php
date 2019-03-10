<?php
mysql_connect("127.0.0.1:3306", "root", "");
mysql_select_db("10.03");

$name = $_POST["name"];
$email = $_POST["email"];
$comment = $_POST["comment"];
$comment_length = strlen($comment);

if($comment_length > 100)
{
  header("location: index.php?error=1");
}
else
{
  mysql_query("INSERT INTO comments (name, email, comment) VALUES('$name', \"$email\", '$comment')");
  header("location: index.php");
}
?>
