<?php
    if ($_POST['nom'] == ''){
	            $nom = $_POST['name'];
                $email_from = $_POST['email'];
	            $email_message = nl2br($_POST["message"]);
	            $email_message = trim($email_message)."<br><br> Message signé sous le nom de : ".$_POST['name'];
	            $email_to = "cloe.ds@hotmail.com"; //Recipient
	            $email_subject = utf8_decode($_POST['subject']);
	
                $passage_ligne = "\r\n";
	
                $boundary = md5(rand()); // Random boundary key
    
	            $headers = 'From: ' . $email_from . $passage_ligne; //Sender
                $headers.= "MIME-Version: 1.0" . $passage_ligne; //MIME Version
                $headers .= 'Content-Type: text/html; charset=UTF-8' . $passage_ligne; //Content (2 versions ex:text/plain et text/html)
            }
	        if(mail($email_to,$email_subject, $email_message, $headers)==true){  //Sending mail
                header('Location:contact.php?message=envoyé#anchor'); //Redirection
		        exit;
            }
	        else{
		        header('Location:contact.php?erreur=erreur#anchor');
	        }
        ?>