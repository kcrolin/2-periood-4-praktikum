<?php if (isset($_POST["submit"])) {
$username = $_POST['username'];
$password = $_POST['password'];
$message = "Vormis esines vigu!"; 
echo "<style>.passw{border:1px solid red;}</style>";}
else { 
$message = "Palun logi sisse!";}
?>

<!DOCTYPE HTML>
<html>
  <head>
  <title>Praktikum 4</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  </head>
  
  <body>
  <div class="content">
  <h2><?php echo $message;?></h2>
<form name="login" action="index.php" method="post">
<span>Kasutajanimi:</span> <input type="text" name="username" value="<?php if (isset($_POST["submit"])) {
$username = $_POST['username'];
echo $username;}?>"><br>
<span>Salasõna:</span> <input type="password" class="passw" name="password"></br>
<input type="submit" name="submit">
</form> 
<pre><?php print_r($_POST);?></pre>
</div>
   </body>
</html>
