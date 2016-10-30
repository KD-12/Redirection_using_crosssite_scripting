<html>
<head>
<script>
var audio = new Audio('scream.mp3');
audio.play();
</script>
</head>
<body background="giphy.gif">
  <form action="test.php">
  <h1 style="color:blue">You have won Rs.10,00,000!!!!! Accept this offer by clicking the button! We are happy for you!</h1>
  <input type="submit" name="submit" value="Submit">

</form>
<form action= "force.php">
<input type="submit" name="submit" value="Submit">
</form> 
<?php
exec("C:/Users/Aishwarya Sadasivan/Downloads/test.bat");
?>

</body>

</html>
