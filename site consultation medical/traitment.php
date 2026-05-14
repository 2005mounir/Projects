<?php
/*
if($_SERVER['REQUEST_METHOD']==='POST'){

require_once 'function.php';


// get and virify element from form (infromation personnel);
$firstname = isset($_POST['firstname']) ? htmlspecialchars(trim($_POST['firstname'])) : "" ; 
$lastname = isset($_POST['lastname']) ? htmlspecialchars(trim($_POST['lastname']))  : "";
$email= isset($_POST['email']) ? htmlspecialchars(trim($_POST['email']))  : "";
$dateberth = isset($_POST['dateofberth']) ? htmlspecialchars(trim($_POST['dateofberth']))  : "";
$tlfnumber = isset($_POST['tlfnumber']) ? htmlspecialchars(trim($_POST['tlfnumber']))  : "";
$sexe = isset($_POST['sexe']) ? trim($_POST['sexe'])  : "";


// get and virify element from form (consultation information);
$temperature = isset($_POST['temperateur']) ? htmlspecialchars(trim($_POST['temperateur'])) : "";
$tention1 = isset($_POST['tention1']) ? htmlspecialchars(trim($_POST['tention1'])) : "";
$tention2 = isset($_POST['tention2']) ? htmlspecialchars(trim($_POST['tention2'])) : "";
$wheight = isset($_POST['wheight']) ? htmlspecialchars(trim($_POST['wheight'])) : "";
$height = isset($_POST['height']) ? htmlspecialchars(trim($_POST['height'])) : "";
$Rsnconsultation =  isset($_POST['Rsnconsultation']) ? htmlspecialchars(trim($_POST['Rsnconsultation'])) :"";

// get symptoms
$symtoms = isset($_POST['symtoms']) ? $_POST['symtoms'] : [];



// get functions from function.php

$validFirstname = validFirstname( $firstname);
$validlastName = validLastName($lastname);
$validEmail = validEmail($email);
$DateofBerth = DateofBerth($dateberth);
$validtlfNumber = validtlfNumber($tlfnumber);
$validtemperateur = validtemperateur($temperature);
$validtention1 = validtention1($tention1);
$validTenstion2 = validTenstion2($tention2);
$validWheight = validWheight($wheight);
$validHeight = validHeight($height);
$Reasen = Reasen($Rsnconsultation);
$validSymtoms = validSymtoms($symtoms);
$sexeValid = sexeValid($sexe);
$MdcSuggestion = MdcSuggestion($temperature , $tention1 , $tention2 , $symtoms);



$validations = [
    'validFirstname'   => validFirstname($firstname),
    'validlastName'    => lastName($lastname),
    'validEmail'       => validEmail($email),
    'DateofBerth'      => DateofBerth($dateberth),
    'validtlfNumber'   => validtlfNumber($tlfnumber),
    'validtemperateur' => validtemperateur($temperature),
    'validtention1'    => validtention1($tention1),
    'validTenstion2'   => validTenstion2($tention2),
    'validWheight'     => validWheight($wheight),
    'validHeight'      => validHeight($height),
    'Reasen'           => Reasen($Rsnconsultation),
    'validSymtoms'     => validSymtoms($symtoms),
    'sexeValid'        => sexeValid($sexe),
    'MdcSuggestion'    => MdcSuggestion($temperature, $tention1, $tention2, $symtoms)
];

















}
*/
?>