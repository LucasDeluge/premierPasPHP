<?php
session_start();
echo "Au revoir, votre nom était : <br>";
echo $_SESSION["name"];
echo "<br>";
echo "Votre mot de passe était : <br>";
echo $_SESSION["password"];
?>