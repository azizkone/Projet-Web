<?php
   session_start();
   // Contrôle si les variables ne sont pas vides et existantes et si l'année entrée par le client correspond à la date actuelle .
if (isset($_POST["name"]) && !empty($_POST['nom']) 
        && isset($_POST["email"]) && !empty($_POST['email'])
        && isset($_POST["message"]) && !empty($_POST['message'])
        && isset($_POST["day"]) && !empty($_POST['day']) 
        && isset($_POST["time"]) && !empty($_POST['time'])
        && isset($_POST["doctor"]) && !empty($_POST['doctor']))
{
       $name= $_POST["name"];
       $email= $_POST["email"];
       $day= $_POST["day"] ;
       $time= $_POST["time"] ;
       $doctor= $_POST["doctor"] ;
       $message= $_POST["message"];


    // On contrôle avec htmlspecialchars que le client ne rentre pas du code html qui pourrait être malveillant .
	$name = (htmlspecialchars($_POST['name']));  
	$email = (htmlspecialchars($_POST['email']));
	$day = (htmlspecialchars ($_POST['day']));
	$message = (htmlspecialchars ($_POST['message']));
	$time = (htmlspecialchars ($_POST['time']));
    $doctor = (htmlspecialchars ($_POST['doctor']));


    // test avec une chaine qui est une adresse email 
    $email = 'xxxx@xxx.xxx'; 
    // Vérifie si la chaine ressemble à un email
    if (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email)) {
        echo 'Cet email est correct.';
    } 
    else {
        echo 'Cet email a un format non adapté.';
    }
    /**
     * function pour interdire les adresse email jetable
     */
    function valid_domaine($email) {
        $domaine_extrait=preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email);
        $domaine_bloques= array ('jetable.com', 'ephemail.net', 'yopmail.com', 'spamgourmet.com', 'haltospam.com', 'iximail.com');
        echo $domaine_extrait. ' ';
        if (in_array($domaine_extrait, $domaine_bloques)) {
            echo 'Le site ne permet pas l’utilisation d’email jetable';
        }
        else { 
        return TRUE;
        } 
    }
}
    
    