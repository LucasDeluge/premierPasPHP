<?php
session_start();
if(isset($_POST['name']) && $_POST['password'] !== ""){
    $_SESSION['name'] = $_POST["name"];
    $_SESSION['password'] = $_POST["password"];
echo "Nom = {$_POST["name"]} <br> ";
echo "Password = {$_POST["password"]} <br> ";
echo "Bonjour {$_POST["name"]}, votre mot de passe est : {$_POST["password"]}";
echo '<br><a href="./testSession.php">Redirection</a>';
}
?>
