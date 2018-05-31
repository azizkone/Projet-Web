<?php

if(isset($_POST['submit'])){

  if(isset($_POST['name']) && !empty($_POST['name']))
  {
    $name=$_POST['name'];
  }
  if($name="")
  {
     //nom pas rempli : le message n'est pas valide et on le renseigne dans l'alerte
   $alert.="Merci de renseigner votre nom<br/>";
  }
  echo "<script>window.location.replace(\"../index.html\")</script>";
  $alert="votre message a ete envoyer";
}


$adresse = (htmlspecialchars($_POST['adresse']));
	$telephone = (htmlspecialchars ($_POST['telephone']));
	$adresse_mail = (htmlspecialchars ($_POST['adresse_mail']));
	$annee = (htmlspecialchars ($_POST['annee']));
	$commentaire = (htmlspecialchars ($_POST['commentaire']));
?>



 





