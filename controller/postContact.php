<?php 

$nom = isset($_POST['nom']);
$prenom = isset($_POST['prenom']);
$email = isset($_POST['email']);
$msg = isset($_POST['msg']);

$to = 'wadleyp96@gmail.com';
$subject = $nom .' '.  $prenom .'a contactez LADDO';
$message = $msg;
$headers = 'From: '.$email. "\r\n" .
     'Reply-To: wadleyp96@gmail.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)){
     echo "Email send with succes";
}else{
     echo "Error email don't send";
}


?>



