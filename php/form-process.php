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

    $EmailTo = "ekdesign99@gmail.com";

    $Subject = "New Message From Website";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";


// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

    // Envoi
    mail($to, $subject, $msg, implode("\r\n", $headers));
}
header("Location: /contact.php");