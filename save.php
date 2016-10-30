<html>
<body background="img/bg_1.jpg" style="border:solid, border-color:white">
  <form action="save.php" method="post">
    <h3 style="color:white">Hello user, we are here to take comments on our website.<br/>
    Do let us know your opinion. Post your comments below and we will try improvising!<br/>
  Thank you, in advance! </h3>
    <h2 style="color:white">Comments</h2>
   <input type="text" name="comment" value="" placeholder="Enter your text here">
   <input type="submit" name="submit" value="Submit">
  </form>
  <h3 style="color:white">
  <?php
  $comment = trim($_POST['comment']);
  if (empty($comment))
  {
      exit("must provide a comment");
    }
  $comment = strip_tags($comment);
  file_put_contents("comments.txt", $comment, FILE_APPEND);
  $comments = file_get_contents("comments.txt");
  echo htmlspecialchars($comments);
  ?></h3>

</body>
</html>
