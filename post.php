<html>
<body background="bg_1.jpg" style="border:solid, border-color:white">
  <form action="post.php" method="post">
    <h3 style="color:white">Hello user, we are here to take comments on our website.<br/>
    Do let us know your opinion. Post your comments below and we will try improvising!<br/>
  Thank you, in advance! </h3>
    <h2 style="color:white">Comments</h2>
   <input type="text" name="comment" value="" placeholder="Enter your text here">
   <input type="submit" name="submit" value="Submit">
 </form>
  <h3 style="color:white"><?php
    file_put_contents("comments.txt", $_POST ['comment'], FILE_APPEND);
    echo nl2br(file_get_contents("comments.txt"));
   ?><br></h3>

</body>
</html>
