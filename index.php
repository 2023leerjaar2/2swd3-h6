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

    <?php
require_once 'dbconnect.php';
?>

    <div class="container">
    <form method="POST">
      <h2>Registratie</h2>
      <div class="input-container">
        <label for="gebruikersnaam">Gebruikersnaam:</label>
        <input type="text" id="" name="gebruikersnaam">
      </div>
      <div class="input-container">
        <label for="wachtwoord">Wachtwoord:</label>
        <input type="password" id="" name="wachtwoord">
      </div>
      <input type="submit" value="registreren" name="submit" >      
    </form>
    <a href="login.php"><input type="submit" value="inloggen" name="log"></a>
  </div>


  <?php
if(isset($_POST['submit'])){
    if(!empty($_POST['gebruikersnaam'])&& !empty($_POST['wachtwoord'])){ 


        $gebruikersnaam = $_POST['gebruikersnaam'];
        $wachtwoord = $_POST['wachtwoord'];

        $sql = "INSERT INTO gebruiker (gebruikersnaam, wachtwoord) VALUES ('$gebruikersnaam', '$wachtwoord')";

        try{
            $conn->query($sql);

            $conn->close();
            echo "<section class='toegevoegd'> gebruiker is toegevoegd </section>";

        } catch(Exception $e){
            $error = "query is niet goed";
            die($error);
        }
    }else{
    echo "vul alle gegevens in";
    }
}
?>



    </main>
</body>
</html>