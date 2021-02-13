<?php

session_start();


//$errorForm = [];

// NAME
if (empty($_POST["name"])) {
    $_SESSION["errorName"]= "Nom manquant";
} else {
    $name = strip_tags($_POST["name"]);
}

// EMAIL
if (empty($_POST["email"])) {
    $_SESSION["errorEmail"]= "Email manquant";
} else {
    $email = strip_tags($_POST["email"]);
}
//mobile
if (empty($_POST["mobile"])) {
    $_SESSION["errorMobile"]= "Téléphone manquant";
} else {
    $mobile = strip_tags($_POST["mobile"]);
}
//Type
if (empty($_POST["Dtype"])) {
    $_SESSION["errorDtype"]= "Type manquant";
} else {
    $Dtype = strip_tags($_POST["Dtype"]);
}
// MESSAGE
if (empty($_POST["message"])) {
    $_SESSION["errorMessage"]= "Message manquant";
} else {
    $message = strip_tags($_POST["message"]);
}

//if(count($errorForm) === 0) {
//}

if (count($_SESSION) === 0) {

    $from = 'david.gabriele@outlook.fr';
    // Plusieurs destinataires
    $to  = 'david.gabriele@outlook.fr';

    // Sujet
    $subject = 'Nouveau message du site web';

    // message
    $msg ='
    <html>
     <body>
     <h1>Nouveau message de '. $name .'</h1>
     <p>'. $message .'</p>
     </body>
    </html>
    ';

    // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $headers[] = 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

    // Envoi
    mail($to, $subject, $msg, implode("\r\n", $headers));
}
header("Location: /contact.php");