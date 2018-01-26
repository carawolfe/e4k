<?php
  }

else

  {

  if (isset($_POST["from"]))
    {
    $from = $_POST["from"]; // sender
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $message = wordwrap($message, 70);

    mail("Test@example.com",$subject,$message,"From: $from\n");
    echo "Thank you for sending an email";
    }
  }
?>