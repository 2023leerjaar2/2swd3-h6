<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<main>
 <div class="container">
    <form method="POST">
      <h2>Login</h2>
      <div class="input-container">
        <label for="gebruikersnaam">Gebruikersnaam:</label>
        <input type="text" id="" name="gebruikersnaam">
      </div>
      <div class="input-container">
        <label for="wachtwoord">Wachtwoord:</label>
        <input type="password" id="" name="wachtwoord">
      </div>
      <a href=""></a><input type="submit" value="inloggen" name="submit" >
    </form>
    <a href="index.php"><input type="submit" value="registreren" name="log"></a>
  </div>

  <?php
if(isset($_POST['submit'])){
    require "dbconnect.php";

    try{
        $uname = $_POST['gebruikersnaam'];
        $pass = $_POST['wachtwoord'];
        $sql = "SELECT * FROM gebruiker WHERE gebruikersnaam = '$uname' AND wachtwoord = '$pass'";
        $result = $conn->query($sql);
   
    }catch (Exeption $e) {
        $error = $e->getMessage();
        echo $error;
    }

    if($result->num_rows == 1){
        session_start();
        $_SESSION['gebruikersnaam'] = $uname;
        $_SESSION['loggedIn'] = true;
        header("location: logindin.php");
    }else{
        echo  "<section class='fout'>inlog fout </section>"  ;
    }
}else{}
?>

</main>
</body>
</html>