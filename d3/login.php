<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <style type="text/css">
      .error {color: red;}
    </style>
  </head>
  <body>
<?php
  $idErr = "";
  $passErr = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["id"])) {
      $idErr = "ID can not be enpty.";
    }

    if (empty($_POST["password"])) {
      $passErr = "Password can not be empty.";
    }
?>

    <form method="POST" action="project.php">
      <fieldset>
        <legend>Login or Signup</legend>
        <label>ID: </label>
        <input type="text" name="id">
        <span class="error">* <?php echo $idErr; ?></span>
        <br>
        <label>Password: </label>
        <input type="text" name="password">
        <span class="error">* <?php echo $passErr; ?></span>
        <br>
        <input type="submit" name="login" value="Login">
      </fieldset>
    <br>
    <a href="login.php">try again</a>
  </body>
</html>


