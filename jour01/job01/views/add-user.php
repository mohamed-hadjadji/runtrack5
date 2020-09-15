<?php
session_start();

 include("../models/Utilisateurs.php");
	
    $user = new Utilisateurs_model();

    if (isset($_POST['inscription'])) 
    {
        $user->register($_POST['login'], $_POST['mdp1'], $_POST['mdp2']);
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <form>
   	
   </form>
</body>
</html>