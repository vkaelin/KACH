<?php
$array = array("firstname" => "", "name" => "", "email" => "", "phone" => "", "message" => "", "firstnameError" => "", "nameError" => "",
    "emailError" => "", "phoneError" => "", "messageError" => "", "isSuccess" => false);
$emailTo = "valikaelin@gmail.com";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array["firstname"] = verifyInput($_POST["firstname"]);
    $array["name"] = verifyInput($_POST["name"]);
    $array["email"] = verifyInput($_POST["email"]);
    $array["phone"] = verifyInput($_POST["phone"]);
    $array["message"] = verifyInput($_POST["message"]);
    $array["isSuccess"] = true;
    $emailText = "";
    if (empty($array["firstname"])) {
        $array["firstnameError"] = "Votre prénom est obligatoire.";
        $array["isSuccess"] = false;
    }
    else {
        $emailText .= "FirstName: {$array["firstname"]}\n"; // Les accolades spécifient qu'il y a une variable
    }
    if (empty($array["name"])) {
        $array["nameError"] = "Votre nom est obligatoire.";
        $array["isSuccess"] = false;
    }
    else {
        $emailText .= "Name: {$array["name"]}\n";
    }
    if(!isEmail($array["email"])) {
        $array["emailError"] = "Votre email est obligatoire.";
        $array["isSuccess"] = false;
    }
    else {
        $emailText .= "Email: {$array["email"]}\n";
    }
    if(!isPhone($array["phone"])) {
        $array["phoneError"] = "Votre numéro de téléphone est incorrect";
        $array["isSuccess"] = false;
    }
    else {
        $emailText .= "Phone: {$array["phone"]}\n";
    }
    if (empty($array["message"])) {
        $array["messageError"] = "Votre message est obligatoire.";
        $array["isSuccess"] = false;
    }
    else {
        $emailText .= "Message: {$array["message"]}\n";
    }
    if ($array["isSuccess"]) {
        $headers = "From: {$array["firstname"]} {$array["name"]} <{$array["email"]}>\r\nReply-To: {$array["email"]}";
        mail($emailTo, "Un message de votre site", $emailText, $headers);
    }
    echo json_encode($array);
}
function isEmail($var) {
    return filter_var($var, FILTER_VALIDATE_EMAIL);
}
function isPhone($var) {
    return preg_match("/^[0-9 ]*$/", $var); // L'étoile permet que cela soit vide, autrement le remplacer par un +
}
function verifyInput($var) {
    $var = trim($var); // Enlève les espaces, retour à la ligne etc
    $var = stripslashes($var); // Enlève tous les backslashs
    $var = htmlspecialchars($var);
    return $var;
}