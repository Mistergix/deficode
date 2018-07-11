<?php

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    $name = $_REQUEST['name'];

    $visitor_email = $_REQUEST['mail'];

    $message = $_REQUEST['message'];

    $headers = "From: $visitor_email";

    $email_to = 'deficode@parkours.fr';
    //$email_to = 'deficode@parkours.fr';
    
    $email_subject = "Nouveau message site";
    
    $email_body = "Vous avez reçu un message de $name.\n"."Le voici :\n $message\n Mail: $visitor_email";


    mail($email_to,$email_subject,$email_body, $headers);

    /*echo "hi $name";
    echo "hi $fname";
    echo "hi $visitor_email";
    echo "hi $phone";
    echo "hi $message";
    echo "hi $headers";*/

    header('Location: ../index.php');
  }
  else
  {
    throw new Exception('chelou');
  }
  

?>
