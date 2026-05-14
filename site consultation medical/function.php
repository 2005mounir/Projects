<?php

 require 'traitment.php';
 require 'connection_db.php';


 

/*valid first name;*/
function validFirstname($firstname){
  $erreurs1 = [];

 //cheking if first Nmae is empty;
   if($firstname ==""){
       $erreurs1 [] =  'Please fill  first name';
      
   }
   // lenght value of input
   if(strlen($firstname) > 50){
      $erreurs1 [] = 'kepp it under 50 chars';
      
   }



   // cheking if fist Nme has a number;
   if(preg_match("/[0-9]/" , $firstname)){
      $erreurs1 [] =  'Please enter letter only in first name ';
         
   }

   // cheking if element is has space;
   if(preg_match("/[\s]/" , $firstname)){
    $erreurs1 [] = 'Please no spaces in first name';
      
   }

 // checking if element has a special chars;
$arraySpc = ['~','!','#','@','$','%','^','&','*','(',')','_','=','{','}','[',']','?'];
$splitFistname = str_split($firstname);

foreach($arraySpc as $spc){
  foreach($splitFistname as $splFname){
   if($splFname == $spc){
     $erreurs1 [] =  'please do not enter symblos';
     
    }
   }
 }
 return $erreurs1;
}





/* valid last Name lastname*/
function validLastName($lastname){

  $lastnameErreur = [];

   //cheking if last Nmae is empty
   if($lastname ==""){
      $lastnameErreur[] = 'the last Name is empty.';
      
   }
   // lenght value of input
   if(strlen($lastname) > 60){
       $lastnameErreur[] = 'this last Name is very tall.';
      
   }
   //chiking if last Name has a number;
   if(preg_match("/[0-9]/" , $lastname)){
      $lastnameErreur[] = 'Please dont add number in last Name.';
   }
   // cheking if element is has space;
   if(preg_match("/[\s]/" , $lastname)){
       $lastnameErreur[] = 'Please do not spaces in last Name.';
   
   }
  
   // ! // checking if last Name has a special chars;
    $arraySpc2 = ['~','!','#','@','$','%','^','&','*','(',')','_','=','{','}','[',']','?'];
    $splitLastname = str_split($lastname);
    
    for($l = 0 ; $l < count($arraySpc2) ; $l++){
      for($t = 0 ; $t < count($splitLastname) ; $t++){
         if($splitLastname[$t]==$arraySpc2[$l]){
             $lastnameErreur[] = 'please do not enter symblos in last Name.';
         }
      }
    }
    return $lastnameErreur;
}





/*valid email*/
function validEmail($email){

   // cheking if email is empty;
   if($email ==""){
      echo'<p style:"color : red;"> please enter  your email</p>';
      exit;
   }

   // valid the way how write email;
   if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      echo '<p style:"color : red;"> please enter a correct email</p>';
      exit;
   };
 
   //explode email
   $explodEmail = explode('@',$email);
   $part1 = $explodEmail[0];
   $part2 = $explodEmail[1];

   // valid part1 from email
  $emailSpecial = ['~','!','#','@','$','%','^','&','*','(',')','_','=','{','}','[',']','?'];
  foreach($emailSpecial as $emailSpeciale){
   $emailSplait = str_split($part1);
   foreach($emailSplait as $emailSplt){
     if($emailSplt == $emailSpeciale){
     echo '<p style="color:red;">please do not enter symblos in email</p>';
     exit;
     }
   }
  }

  //valid part2 from enmail;
  if($part2 !== 'gmail.ma'){
   echo '<p style="color:red;"> email it should end with gmail.ma</p>';
   exit;
  }

}



 
//function for valid date ofberth;
function DateofBerth($dateberth){
   
//checking if date 
   if($dateberth ==''){
      echo '<p style="color:red;">date of berth is empty</p>';
      exit;
   }

   $newDate = Date('Y-m-d');
   if($dateberth > $newDate){
      echo '<p style="color:red;">the birth date is too big</p>'; 
      exit;
   }
}




//valid phone number
function validtlfNumber($tlfnumber){
 if($tlfnumber ==""){
     echo '<p style="color:red;">fill your phone number please</p>';
   exit;
 }

if(strlen($tlfnumber)<0 || strlen($tlfnumber) >10){
     echo '<p style="color:red;">this number is not correct</p>';
   exit;
};

}




//function for valid sexe;
function sexeValid($sexe){
if($sexe == ""){
  echo  '<p style="color:red;">Sexe is empty</p>';
  exit;
 }

}




// valid temperateur 
function validtemperateur($temperature){

   if($temperature ==""){
      echo '<p style="color:red;">the temperateur is  empty</p>';
      exit;
   }


if($temperature === 0){
    echo '<p style="color:red;">the temperateur is too small</p>';
    exit;
}
};




//valid tention1 
function validtention1($tention1){
   if($tention1 =="" ){
       echo '<p style="color:red;">the tention1 is empty</p>';
       exit;
   }
   if(!is_numeric($tention1)){
      echo '<p style="color:red;">please in the tension1 sing just a numeric</p>';
      exit;
   }
   
}






// valid tention2
function validtenstion2($tention2){
   if($tention2 =="" ){
         echo '<p style="color:red;">the tention2 is empty</p>';
         exit;
      }
      if(!is_numeric($tention2)){
         echo '<p style="color:red;">please in the tension2 sing just a numeric</p>';
         exit;
      }
      
}





//valid wheight 
function validWheight($wheight){
   if($wheight ===""){
      echo '<p style="color:red;">the wheight is empty</p>';
      exit;
   }
   if(!is_numeric($wheight)){
      echo '<p style="color:red;">please  in the wheight write just s number</p>';
      exit;
   }
   if($wheight < 30 || $wheight > 90){
      echo '<p style="color:red;">the wheight is not normal</p>';
    exit;
   }
}





//validate height 
function validHeight($height){
  if($height == ""){
     echo '<p style="color:red;">the height is empty</p>';
     exit;
  }
  if($height > 1.99){
   echo '<p style="color:red;">the height is not normal</p>';
   exit;
  }
}





// validate reasen of consultation
function Reasen($Rsnconsultation){
     if($Rsnconsultation == ""){
        echo '<p style="color:red;">the reasean of consultation is empty</p>';
        exit;
     }
  
   $spc = ['~','!','#','@','$','%','^','&','*','(',')','_','=','{','}','[',']','?'];
   $splitreasen = str_split($Rsnconsultation);

   foreach($splitreasen as $splRsn){
      foreach($spc as $sp){
         if($splRsn == $sp){
            echo '<p style="color:red;">dont add sepcial chars in reasen of consultation please</p>'; 
          exit();
         }
      }
   }
}






//function for valid symtoms;
function validSymtoms($symtoms){
   if(is_array($symtoms) && empty($symtoms)){ 
        echo 'check box is empty';
    exit();
   }
}



// function for Medication Suggestion ;
function MdcSuggestion($temperature, $tention1, $tention2, $symtoms) {
    $medication = '';

    foreach($symtoms as $spms) {
        
        switch (true) {
            
            case ($spms == 'fever' && $temperature > 37 && $tention1 > 12):
                $medication = 'Ibuprofen';
                break 2;

            case ($spms == 'fever' && $temperature > 37 && $tention2 > 12):
                $medication = 'Doliprane';
                break 2;

            case ($spms == 'fever' && $temperature > 37):
                $medication = 'Paracetamol';
                break 2;

           
            case ($spms == 'pain' && $tention1 > 12 && $tention2 > 12):
                $medication = 'Avil';
                break 2;

            case ($spms == 'pain' && $temperature > 37):
                $medication = 'Avil';
                break 2;

            
            case ($spms == 'headache' && $tention1 > 12):
                $medication = 'Avil';
                break 2;
        }
    }

    return $medication;
}




   
   

// function add data to databases;
function addData($pdo ,  $firstname ,
                     $lastname , $email ,
                     $dateberth , $tlfnumber,
                     $sexe ,$temperature ,
                     $tention1 , $tention2 ,
                     $wheight  , $height ,
                     $Rsnconsultation ,$symtoms,
                     $MdcSuggestion
 ){
    
 $sql = "INSERT INTO consultation( firstname ,
                     lastname , email ,
                     dateberth , tlfnumber,
                     sexe ,temperature ,
                     tention1 , tention2 ,
                     wheight  , height ,
                     Rsnconsultation ,symtoms,
                     MdcSuggestion)VALUES( 
                     firstname ,
                     lastname , email ,
                     dateberth , tlfnumber,
                     sexe ,temperature ,
                     tention1 , tention2 ,
                     wheight  , height ,
                     Rsnconsultation ,symtoms)";

      $stmt = $pdo->prepare($sql);
      $stmt->execute([
         $firstname , $lastname,
         $email , $dateberth ,
         $tlfnumber , $sexe ,
         $temperature , $tention1,
         $tention2 , $wheight , 
         $height , $Rsnconsultation , 
         $symtoms , $MdcSuggestion
      ]);


 }
















?>