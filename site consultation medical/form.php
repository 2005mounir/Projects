
<?php
  


if($_SERVER['REQUEST_METHOD'] ==='POST'){

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


/*
//get functions fron function.php
$errFname = validFirstname($firstname);
$errLname = lastName($lastname);
$errEmail =  validEmail($email);
$errDateofBerth = DateofBerth($dateberth);
$errTlfnumber = validtlfNumber($tlfnumber);
$errSexe = exeValid($sexe);
$errTemperateur = validtemperateur($temperature);
$errTention1 = validtention1($tention1);
$errTention2 = validtenstion2($tention2);
$errWheight = validWheight($wheight);
$errHeight = alidHeight($height);
$errReasen = Reasen($Rsnconsultation);
$errvalidSymtoms = validSymtoms($symtoms);
*/



/*
// make an empty array for push the erreurs;
$erreur =[];

if(!empty($errFname)) $erreur['firstname'] = $errFname;
if(!empty($errLname)) $erreur['lastname'] = $errLname;
if(!empty($errEmail)) $erreur['email'] = $errEmail;
if(!empty($errDateofBerth)) $erreur['Dateofberth'] = $errDateofBerth;
if(!empty($errTlfnumber)) $erreur['tlfNumber'] = $errTlfnumber;
if(!empty($errSexe)) $erreur['sexe'] = $errSexe;
if(!empty($errTemperateur)) $erreur['temperateur'] = $errTemperateur;
if(!empty($errTention1)) $erreur['tention1'] = $errTention1;
if(!empty($errTention2)) $erreur['Tention2'] = $errTention2;
if(!empty($errWheight)) $erreur['Weight'] = $errWheight;
if(!empty($errHeight)) $erreur['height'] = $errHeight;
if(!empty($errReasen)) $erreur['reasen'] = $errReasen;
if(!empty($errvalidSymtoms)) $erreur['symtoms'] = $errvalidSymtoms;
*/

$erreurs1 = validFirstname($firstname);
$lastnameErreur = validLastName($lastname);

$allErreures = [$erreurs1 , $lastnameErreur];

foreach($allErreures as $errall){
    if(empty($errall)){
         addData($pdo , $firstname ,
                     $lastname , $email ,
                     $dateberth , $tlfnumber,
                     $sexe ,$temperature ,
                     $tention1 , $tention2 ,
                     $wheight  , $height ,
                     $Rsnconsultation ,$symtoms,
                     $MdcSuggestion);
    }
}





}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>mini aplication php</title>

</head>
<body>
  
        

    <header class="main-header">
    <div class='logo'>
        <h2><span>DCT</span>Mounir</h2>
    </div>
    <nav class='navbar'>
        <a href="home.html">Home</a>
        <a href="hospital.html">Hospital</a>
        <a href="about.html">About</a>
        <a href="#">Contact</a>
        <a href="form.html" class="cta-button">Consultation</a>
    </nav>
</header>

    <h1 class='h1'>Medical consultation</h1>
    
    <form action="" method='POST'>
        <h2>information personel</h2>
        <label for="firstname"> First name :</label>
        <input type="text" id='firstname' name='firstname' placeholder='Ali....'>

         <span class="firstNameerreurs"  style = 'color:red;'>
            <?php if(!empty($erreurs1)):?>
                <?php foreach ($erreurs1 as $err):?>
                    <?= htmlspecialchars($err)?><br>
                    
                <?php endforeach;?>
            <?php endif?>
         </span>

        
    <br>
    <br>
        <label for="lastname">Last name :</label>
        <input type="text" id='lastname' name='lastname' placeholder='Alaoui...'>

        <span class="lastnameErreur" style = 'color:red;'>
            <?php if(!empty($lastnameErreur)):?>
                <?php foreach($lastnameErreur as $lsNerr):?>
                    <?= htmlspecialchars($lsNerr)?><br>
                <?php endforeach;?>
            <?php endif?>
        </span>
        
       
    <br>
    <br>
         <label for="email">Email :</label>
         <input type="text" id='email' name ='email' placeholder='email@gmail.com'>
    <br>
    <br>
        <label for="dateofberth"> Date of berth :</label>  
        <input type="date" id='dateofberth' name='dateofberth' placeholder='12/1/2025'>
    <br>
    <br>
         <label for="tlfnumber"> Telephone number :</label>
         <input type="text" id='tlfnumber' name='tlfnumber' placeholder='+212 ...'>
    <br>
    <br>
         <label for="sexe">Sexe :</label>
         <select name="sexe" id="sexe">
            <option value="" disabled selected>Sexe</option>
            <option value="Man">Man</option>
            <option value="Women">Women</option>
         </select>
    <br>
    <br>

         <h2>Consultation information</h2>
    <br>
    
         <label for="temperateur"> temperature(℃) :</label>
         <input type="text"  id ='temperateur' name='temperateur' placeholder='℃'>
    <br>
    <br>
         <label for="tention"> tention :</label>
         <input type="text" id='tentio1' name='tention1' placeholder=' tention1...'>
         <input type="text" id='tentio2' name='tention2' placeholder='tention2...'>
    <br>
    <br>

        <label for="wheight"> Wheight :</label>
        <input type="text" id='wheight' name='wheight' placeholder='kg..'>
   <br>
   <br>
         <label for="height">Height  :</label>
         <input type="text" id='height' name='height' placeholder='cm...'>
    <br>
    <br>
        <label for="rsn"> Reasen for consultation :</label>
        <input type="text" id='rsn' name='Rsnconsultation' placeholder='Rsnconsultation...'>


        
   <div class='symptoms-section'>
    <label>Select Symptoms</label>
    <div class='symptoms-grid'>
        <div class="check-item">
            <input type="checkbox" id='headache' name="symtoms[]" value="headache">
            <label for="headache">Headache</label>
        </div>
        <div class="check-item">
            <input type="checkbox" id='fever' name="symtoms[]" value="fever">
            <label for="fever">Fever</label>
        </div>
        <div class="check-item">
            <input type="checkbox" id='pain' name="symtoms[]" value="pain">
            <label for="pain">Pain</label>
        </div>
    </div> 
</div>
    
    <button type='submit'>Submit</button>

    </form>

</body>
</html>




