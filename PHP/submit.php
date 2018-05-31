<?php
if (isset($_POST['submit'])) {
//
  $name=(htmlspecialchars($_POST["name"]));
  $email=(htmlspecialchars($_POST["email"]));
  $day= (htmlspecialchars($_POST["day"]));
  $time= (htmlspecialchars($_POST["time"]));
  $doctor= (htmlspecialchars($_POST["doctor"]));
  $message= (htmlspecialchars($_POST["message"]));

        if(empty($name) || empty($email) || empty($day) || empty($time) || empty($doctor) || empty($message)){
          header("location:../index.php?submit=empty");
          exit();
        }
        else {
               // test avec une chaine qui est une adresse email
               $email = 'xxxx@xxx.xxx';
               // Vérifie si la chaine ressemble à un email
               if (!preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email)) {
                   header("location:../index.php?submit=email");
                     exit();
               }
               elseif(!preg_match('$email== #^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.yopmail.com#')){
                 header("location:../index.php?submit=jetable");
                 exit();
                } else {
                  header("location:../index.php");
                    exit();
                }
      }
}


           /*else{
              header("location:../index.php");
              exit();*/

             /* else {
                    // test avec une chaine qui est une adresse email
                    $email = 'xxxx@xxx.xxx';
                    // Vérifie si la chaine ressemble à un email
                    if (!preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email)) {
                        header("location:../index.php?submit=email");
                    }
              $email ='';
              $domaine_extrait=!preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email);
              $domaine_bloques= array ('jetable.com', 'ephemail.net', 'yopmail.com', 'spamgourmet.com', 'haltospam.com', 'iximail.com');
              echo $domaine_extrait. ' ';
              elseif(in_array($domaine_extrait, $domaine_bloques)) {
                      // verification adresse email jetable
                        header("location:../index.php?submit=jetable");
                        exit();
                      }
              else{
                  header("location:../index.php?submit=succes");
                  exit();
                }
              }

           /*$monmail = "k.aziz.k@live.fr";
           $objet = "From: Ask for an appointment ";
           $sujet = "'$mail.'want to get an appointment with'.$doctor.'at '.$day.''.$time.'.".\n\n".$message;
             mail($monmail,$objet,$sujet);*/

?>
