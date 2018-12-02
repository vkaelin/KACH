<?php
$array = array("name" => "", "phone" => "", "email" => "", "object" => "", "message" => "", "nameError" => "", "phoneError" => "",
    "emailError" => "", "phoneError" => "", "messageError" => "", "isSuccess" => false);
$emailTo = "valikaelin@gmail.com";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array["name"] = verifyInput($_POST["name"]);
    $array["phone"] = verifyInput($_POST["phone"]);
    $array["email"] = verifyInput($_POST["email"]);
    $array["object"] = verifyInput($_POST["object"]);
    $array["message"] = verifyInput($_POST["message"]);
    $array["isSuccess"] = true;
    $emailText = "";
    if (empty($array["name"])) {
        $array["nameError"] = "Prénom et nom obligatoires.";
        $array["isSuccess"] = false;
    }
    else {
        $emailText .= "Nom: {$array["name"]}\n"; // Les accolades spécifient qu'il y a une variable
    }
    if(!isPhone($array["phone"])) {
        $array["phoneError"] = "Numéro de téléphone incorrect";
        $array["isSuccess"] = false;
    }
    else {
        $emailText .= "Téléphone: {$array["phone"]}\n";
    }
    if(!isEmail($array["email"])) {
        $array["emailError"] = "Email incorrect.";
        $array["isSuccess"] = false;
    }
    else {
        $emailText .= "Email: {$array["email"]}\n";
    }
    if (empty($array["object"])) {
        $array["objectError"] = "Objet obligatoire.";
        $array["isSuccess"] = false;
    }
    else {
        $emailText .= "Objet: {$array["object"]}\n";
    }
    if (empty($array["message"])) {
        $array["messageError"] = "Message obligatoire.";
        $array["isSuccess"] = false;
    }
    else {
        $emailText .= "Message: {$array["message"]}\n";
    }
    if ($array["isSuccess"]) {
        $headers = "From: {$array["name"]} <{$array["email"]}>\r\nReply-To: {$array["email"]}";
        mail($emailTo, "Un message du site KACH", $emailText, $headers);
    }
    echo json_encode($array);
}
function isEmail($var) {
    return filter_var($var, FILTER_VALIDATE_EMAIL);
}
function isPhone($var) {
    if($var == "") {
        return false;
    }
    return preg_match("/^[0-9 ]*$/", $var); // L'étoile permet que cela soit vide, autrement le remplacer par un +
}
function verifyInput($var) {
    $var = trim($var); // Enlève les espaces, retour à la ligne etc
    $var = stripslashes($var); // Enlève tous les backslashs
    $var = htmlspecialchars($var);
    return $var;
}