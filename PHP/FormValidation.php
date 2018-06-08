<?php
// define variables and set to empty values
$name_error = $email_error = $message_error = $day_error = $time_error = $doctor_error = $champ_error=  "";
$name = $email = $message = $day = $time = $doctor =  "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //
  if (empty($_POST["name"])) {
    $name_error = "<script> document.getElementById('1').style.borderColor='#FF0000';</script>Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $name_error = "Only letters and white space allowed";
    }
  }
//
  if (empty($_POST["email"])) {
    $email_error = "<script> document.getElementById('2').style.borderColor='#FF0000';</script> Email is required ";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Invalid email format";
    }/*elseif(!preg_match('#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$.yopmail.com#',$email) ||
        !preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.jetable.org#",$emai)){
          $email_error = "Invalid email format jetable";
        }*/
}
  //
  if (empty($_POST["day"]) || empty($_POST["time"]) || empty($_POST["doctor"])){
    $day_error = "<script> document.getElementById('3').style.borderColor='#FF0000';</script>";
    $time_error = "<script> document.getElementById('4').style.borderColor='#FF0000';</script>";
    $doctor_error = "<script> document.getElementById('5').style.borderColor='#FF0000';</script>";
    $champ_error = "Champs is required ";
  }else {
    $day = test_input($_POST["day"]);
    $time = test_input($_POST["time"]);
    $doctor = test_input($_POST["doctor"]);
    }
  //
  if (empty($_POST["message"])) {
      $message = "";
      $message_error="<script> document.getElementById('6').style.borderColor='#FF0000';</script> Message is required ";
    } else {
      $message = test_input($_POST["message"]);
    }
//
   if ($name_error == '' and $email_error == '' and $champ_error== '' and $doctor_error == '' and $time_error== '' and $day_error == ''){
        $message_body = '';
        unset($_POST['submit']);
        foreach ($_POST as $key => $value){
            $message_body .=  "$key: $value\n";
        }
//
        $mailto = "azizkone14@gmail.com";
        $subject = "Ask for an appointment ";
        $txt =  $email." want to get an appointment with ".$doctor." at ".$day." ". $time.".\n\n" .$message;
        if (mail($mailto, $subject, $txt)){
          /*  $success ='<script>alert("Message sent, thank you for contacting us!");</script>';*/
            $name = $email = $message = $day = $time = $doctor= '';
              header("location:index.php");
              echo"<script language='javascript'>
                  alert('Message sent, thank you for contacting us!');
                  </script>";
        }
    }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
