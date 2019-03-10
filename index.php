<!DOCTYPE html> 
<html lang="uk">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Stan Kleshnov">
	<link rel="alternate" hreflang="en" href="index.html?language=en">
	<link rel="alternate" hreflang="ru" href="index.html?language=ru">
	<link rel="alternate" hreflang="ua" href="index.html">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/index.css">
	<title>Test task Agiliway</title>
</head>
<body>
  <h1>Залишити відгук</h1>
  <form action="post_comment.php" method="POST">
        <div>
           <img class="poster" src="img/EventsPosterKlimt.jpg" alt="Poster">
        </div>
        <input type="text" name="name" placeholder="Ім'я"><br/>
        <input type="email" name="email" placeholder="Email:"><br/>
        <textarea name="comment" cols="50" rows="3" placeholder="Ваш відгук"></textarea>
        <input type="submit" value="Відгук">
  </form>

                        <?php
                        mysql_connect("127.0.0.1:3306", "root", "");
                        mysql_select_db("10.03");

                        $find_comments = mysql_query("SELECT * FROM comments");
                        while ($row = mysql_fetch_assoc($find_comments))
                        {
                          $comment_name = $row['name'];
                          $email = $row['email'];
                          $comment = $row['comment'];

                          echo "$comment_name - $comment<p></p>";
                        }

                        if(isset($_GET['error']))
                        {
                           echo "100 Character Limit";
                        }
                        ?>




  <footer>
  </footer>
</body>
</html>
