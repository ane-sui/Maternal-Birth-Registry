<?php 

session_start();
include_once 'conn.php';
include('functions.php');
$input = clean($_POST);
$name="";
$surname="";
$address="";
$age="";
$ethnicity="";
$nationality="";
$idNumber="";
$weight="";
$education="";
$phoneNumber="";
$pastComplications="";
$gaNumber="";
$obsteric="";
$childrenAlive="";
$admissionDate="";
$deliveryDate="";
$deliveryMethod="";
$bloodLoss="";
$placenta="";
$deliveredBy="";    
$assistedBy="";
$regDate="";
$birthOutcome="";
$twinStatus="";
$sex="";
$tetanus="";
$childHIVStatus="";
$apScore="";
$laborHours="";
$comments="";
$birthPlace="";
$profession="";
$maidenHivStatus="";
$hosNum="";
$ancNum="";
$errors=[];

ensure_is_user_authenticated();


// if(empty($name)&&empty($surname)&&empty($address)&&empty($ethnicity)&&empty($age)&&empty($nationality)&&empty($idNumber)&&empty($weight)&&empty($education)&&empty($phoneNumber)&&empty($complications)&&empty($gaNumber)&&empty($obsteric)&&empty($deliveryDate)&&empty($deliveryMethod)&&empty($bloodLoss)&&empty($placenta)&&empty($deliveredBy)&&empty($assistedBy)&&empty($regDate)&&empty($birthOutcome)&&empty($childrenAlive)&&empty($admissionDate)&&empty($apScore)&&empty($labor)&&empty($comments)&&empty($birthPlace)&&empty($profession)&&empty($vitaminA)&&empty($onAdmission)&&empty($sex)&&empty($tetanus)&&empty($childHIVStatus)&&empty($afterAdmission)&&empty($childWeight)&&empty($hosNum)&&empty($ancNum)&&empty($regBy)&&empty($childName)&&empty($maritalStatus)&&empty($husbandName)){
//     redirect("../maiden-reg.php?register=empty&name=$name&surname=$surname&address=$address&ethnicity=$ethnicity&age=$age&nationality=$nationality&idNumber=$idNumber&weight=$weight&education=$education&phoneNumber=$phoneNumber&complications=$complications&placenta=$placenta&gaNumber=$gaNumber&obsteric=$obsteric&deliveryDate=$deliveryDate&deliveryMethod=$deliveryMethod&bloodLoss=$bloodLoss&placenta=$placenta&deliveredBy=$deliveredBy&assistedBy=$assistedBy&regDate=$regDate&birthOutcome=$birthOutcome&childrenAlive=$childrenAlive&admissionDate=$admissionDate&apScore=$apScore&labor=$labor&comments=$comments&birthPlace=$birthPlace&profession=$profession&vitaminA=$vitaminA&onAdmission=$onAdmission&sex=$sex&tetanus=$tetanus&regBy=$regBy&childName=$childName&maritalStatus=$maritalStatus&husbandName=$husbandName");
//     exit();
// }

// elseif(empty($name)&&empty($surname)&&empty($address)&&empty($ethnicity)&&empty($age)&&empty($nationality)&&empty($idNumber)&&empty($weight)&&empty($education)&&empty($phoneNumber)&&empty($complications)&&empty($gaNumber)&&empty($obsteric)&&empty($deliveryDate)&&empty($deliveryMethod)&&empty($bloodLoss)&&empty($placenta)&&empty($deliveredBy)&&empty($assistedBy)&&empty($regDate)&&empty($birthOutcome)&&empty($childrenAlive)&&empty($admissionDate)&&empty($apScore)&&empty($labor)&&empty($comments)&&empty($birthPlace)&&empty($profession)&&empty($vitaminA)&&empty($onAdmission)&&empty($sex)&&empty($tetanus)&&empty($childHIVStatus)&&empty($afterAdmission)&&empty($childWeight)&&empty($hosNum)&&empty($ancNum)&&empty($regBy)&&empty($childName)&&empty($maritalStatus)&&empty($husbandName)){
//     redirect("../maiden-reg.php?register=empty");
//     exit();
// }

// elseif(empty($name)&&empty($surname)&&empty($address)&&empty($ethnicity)&&empty($age)&&empty($nationality)&&empty($idNumber)&&empty($weight)&&empty($education)&&empty($phoneNumber)&&empty($complications)&&empty($gaNumber)&&empty($obsteric)&&empty($deliveryDate)&&empty($deliveryMethod)&&empty($bloodLoss)&&empty($placenta)&&empty($deliveredBy)&&empty($assistedBy)&&empty($regDate)&&empty($birthOutcome)&&empty($childrenAlive)&&empty($admissionDate)&&empty($apScore)&&empty($labor)&&empty($comments)&&empty($birthPlace)&&empty($profession)&&empty($vitaminA)&&empty($onAdmission)&&empty($sex)&&empty($tetanus)&&empty($childHIVStatus)&&empty($afterAdmission)&&empty($childWeight)&&empty($hosNum)&&empty($ancNum)&&empty($regBy)&&empty($childName)&&empty($maritalStatus)&&empty($husbandName)){
//     redirect("../maiden-reg.php?register=empty");
//     exit();
// }

// elseif(empty($name)&&empty($surname)&&empty($address)&&empty($ethnicity)&&empty($age)&&empty($nationality)&&empty($idNumber)&&empty($weight)&&empty($education)&&empty($phoneNumber)&&empty($complications)&&empty($gaNumber)&&empty($obsteric)&&empty($deliveryDate)&&empty($deliveryMethod)&&empty($bloodLoss)&&empty($placenta)&&empty($deliveredBy)&&empty($assistedBy)&&empty($regDate)&&empty($birthOutcome)&&empty($childrenAlive)&&empty($admissionDate)&&empty($apScore)&&empty($labor)&&empty($comments)&&empty($birthPlace)&&empty($profession)&&empty($vitaminA)&&empty($onAdmission)&&empty($sex)&&empty($tetanus)&&empty($childHIVStatus)&&empty($afterAdmission)&&empty($childWeight)&&empty($hosNum)&&empty($ancNum)&&empty($regBy)&&empty($childName)&&empty($maritalStatus)&&empty($husbandName)){
//     redirect("../maiden-reg.php?register=empty");
//     exit();
// }
// elseif(empty($name)&&empty($surname)&&empty($address)&&empty($ethnicity)&&empty($age)&&empty($nationality)&&empty($idNumber)&&empty($weight)&&empty($education)&&empty($phoneNumber)&&empty($complications)&&empty($gaNumber)&&empty($obsteric)&&empty($deliveryDate)&&empty($deliveryMethod)&&empty($bloodLoss)&&empty($placenta)&&empty($deliveredBy)&&empty($assistedBy)&&empty($regDate)&&empty($birthOutcome)&&empty($childrenAlive)&&empty($admissionDate)&&empty($apScore)&&empty($labor)&&empty($comments)&&empty($birthPlace)&&empty($profession)&&empty($vitaminA)&&empty($onAdmission)&&empty($sex)&&empty($tetanus)&&empty($childHIVStatus)&&empty($afterAdmission)&&empty($childWeight)&&empty($hosNum)&&empty($ancNum)&&empty($regBy)&&empty($childName)&&empty($maritalStatus)&&empty($husbandName)){
//     redirect("../maiden-reg.php?register=empty");
//     exit();
// }
// elseif(empty($name)&&empty($surname)&&empty($address)&&empty($ethnicity)&&empty($age)&&empty($nationality)&&empty($idNumber)&&empty($weight)&&empty($education)&&empty($phoneNumber)&&empty($complications)&&empty($gaNumber)&&empty($obsteric)&&empty($deliveryDate)&&empty($deliveryMethod)&&empty($bloodLoss)&&empty($placenta)&&empty($deliveredBy)&&empty($assistedBy)&&empty($regDate)&&empty($birthOutcome)&&empty($childrenAlive)&&empty($admissionDate)&&empty($apScore)&&empty($labor)&&empty($comments)&&empty($birthPlace)&&empty($profession)&&empty($vitaminA)&&empty($onAdmission)&&empty($sex)&&empty($tetanus)&&empty($childHIVStatus)&&empty($afterAdmission)&&empty($childWeight)&&empty($hosNum)&&empty($ancNum)&&empty($regBy)&&empty($childName)&&empty($maritalStatus)&&empty($husbandName)){
//     redirect("../maiden-reg.php?register=empty");
//     exit();
// }
// elseif(empty($name)&&empty($surname)&&empty($address)&&empty($ethnicity)&&empty($age)&&empty($nationality)&&empty($idNumber)&&empty($weight)&&empty($education)&&empty($phoneNumber)&&empty($complications)&&empty($gaNumber)&&empty($obsteric)&&empty($deliveryDate)&&empty($deliveryMethod)&&empty($bloodLoss)&&empty($placenta)&&empty($deliveredBy)&&empty($assistedBy)&&empty($regDate)&&empty($birthOutcome)&&empty($childrenAlive)&&empty($admissionDate)&&empty($apScore)&&empty($labor)&&empty($comments)&&empty($birthPlace)&&empty($profession)&&empty($vitaminA)&&empty($onAdmission)&&empty($sex)&&empty($tetanus)&&empty($childHIVStatus)&&empty($afterAdmission)&&empty($childWeight)&&empty($hosNum)&&empty($ancNum)&&empty($regBy)&&empty($childName)&&empty($maritalStatus)&&empty($husbandName)){
//     redirect("../maiden-reg.php?register=empty");
//     exit();
// }
// elseif(empty($name)&&empty($surname)&&empty($address)&&empty($ethnicity)&&empty($age)&&empty($nationality)&&empty($idNumber)&&empty($weight)&&empty($education)&&empty($phoneNumber)&&empty($complications)&&empty($gaNumber)&&empty($obsteric)&&empty($deliveryDate)&&empty($deliveryMethod)&&empty($bloodLoss)&&empty($placenta)&&empty($deliveredBy)&&empty($assistedBy)&&empty($regDate)&&empty($birthOutcome)&&empty($childrenAlive)&&empty($admissionDate)&&empty($apScore)&&empty($labor)&&empty($comments)&&empty($birthPlace)&&empty($profession)&&empty($vitaminA)&&empty($onAdmission)&&empty($sex)&&empty($tetanus)&&empty($childHIVStatus)&&empty($afterAdmission)&&empty($childWeight)&&empty($hosNum)&&empty($ancNum)&&empty($regBy)&&empty($childName)&&empty($maritalStatus)&&empty($husbandName)){
//     redirect("../maiden-reg.php?register=empty");
//     exit();
// }
// elseif(empty($name)&&empty($surname)&&empty($address)&&empty($ethnicity)&&empty($age)&&empty($nationality)&&empty($idNumber)&&empty($weight)&&empty($education)&&empty($phoneNumber)&&empty($complications)&&empty($gaNumber)&&empty($obsteric)&&empty($deliveryDate)&&empty($deliveryMethod)&&empty($bloodLoss)&&empty($placenta)&&empty($deliveredBy)&&empty($assistedBy)&&empty($regDate)&&empty($birthOutcome)&&empty($childrenAlive)&&empty($admissionDate)&&empty($apScore)&&empty($labor)&&empty($comments)&&empty($birthPlace)&&empty($profession)&&empty($vitaminA)&&empty($onAdmission)&&empty($sex)&&empty($tetanus)&&empty($childHIVStatus)&&empty($afterAdmission)&&empty($childWeight)&&empty($hosNum)&&empty($ancNum)&&empty($regBy)&&empty($childName)&&empty($maritalStatus)&&empty($husbandName)){
//     redirect("../maiden-reg.php?register=empty");
//     exit();
// }
// elseif(empty($name)&&empty($surname)&&empty($address)&&empty($ethnicity)&&empty($age)&&empty($nationality)&&empty($idNumber)&&empty($weight)&&empty($education)&&empty($phoneNumber)&&empty($complications)&&empty($gaNumber)&&empty($obsteric)&&empty($deliveryDate)&&empty($deliveryMethod)&&empty($bloodLoss)&&empty($placenta)&&empty($deliveredBy)&&empty($assistedBy)&&empty($regDate)&&empty($birthOutcome)&&empty($childrenAlive)&&empty($admissionDate)&&empty($apScore)&&empty($labor)&&empty($comments)&&empty($birthPlace)&&empty($profession)&&empty($vitaminA)&&empty($onAdmission)&&empty($sex)&&empty($tetanus)&&empty($childHIVStatus)&&empty($afterAdmission)&&empty($childWeight)&&empty($hosNum)&&empty($ancNum)&&empty($regBy)&&empty($childName)&&empty($maritalStatus)&&empty($husbandName)){
//     redirect("../maiden-reg.php?register=empty");
//     exit();
// }
// elseif(empty($name)&&empty($surname)&&empty($address)&&empty($ethnicity)&&empty($age)&&empty($nationality)&&empty($idNumber)&&empty($weight)&&empty($education)&&empty($phoneNumber)&&empty($complications)&&empty($gaNumber)&&empty($obsteric)&&empty($deliveryDate)&&empty($deliveryMethod)&&empty($bloodLoss)&&empty($placenta)&&empty($deliveredBy)&&empty($assistedBy)&&empty($regDate)&&empty($birthOutcome)&&empty($childrenAlive)&&empty($admissionDate)&&empty($apScore)&&empty($labor)&&empty($comments)&&empty($birthPlace)&&empty($profession)&&empty($vitaminA)&&empty($onAdmission)&&empty($sex)&&empty($tetanus)&&empty($childHIVStatus)&&empty($afterAdmission)&&empty($childWeight)&&empty($hosNum)&&empty($ancNum)&&empty($regBy)&&empty($childName)&&empty($maritalStatus)&&empty($husbandName)){
//     redirect("../maiden-reg.php?register=empty");
//     exit();
// }
// elseif(empty($name)&&empty($surname)&&empty($address)&&empty($ethnicity)&&empty($age)&&empty($nationality)&&empty($idNumber)&&empty($weight)&&empty($education)&&empty($phoneNumber)&&empty($complications)&&empty($gaNumber)&&empty($obsteric)&&empty($deliveryDate)&&empty($deliveryMethod)&&empty($bloodLoss)&&empty($placenta)&&empty($deliveredBy)&&empty($assistedBy)&&empty($regDate)&&empty($birthOutcome)&&empty($childrenAlive)&&empty($admissionDate)&&empty($apScore)&&empty($labor)&&empty($comments)&&empty($birthPlace)&&empty($profession)&&empty($vitaminA)&&empty($onAdmission)&&empty($sex)&&empty($tetanus)&&empty($childHIVStatus)&&empty($afterAdmission)&&empty($childWeight)&&empty($hosNum)&&empty($ancNum)&&empty($regBy)&&empty($childName)&&empty($maritalStatus)&&empty($husbandName)){
//     redirect("../maiden-reg.php?register=empty");
//     exit();
// }
// elseif(empty($name)&&empty($surname)&&empty($address)&&empty($ethnicity)&&empty($age)&&empty($nationality)&&empty($idNumber)&&empty($weight)&&empty($education)&&empty($phoneNumber)&&empty($complications)&&empty($gaNumber)&&empty($obsteric)&&empty($deliveryDate)&&empty($deliveryMethod)&&empty($bloodLoss)&&empty($placenta)&&empty($deliveredBy)&&empty($assistedBy)&&empty($regDate)&&empty($birthOutcome)&&empty($childrenAlive)&&empty($admissionDate)&&empty($apScore)&&empty($labor)&&empty($comments)&&empty($birthPlace)&&empty($profession)&&empty($vitaminA)&&empty($onAdmission)&&empty($sex)&&empty($tetanus)&&empty($childHIVStatus)&&empty($afterAdmission)&&empty($childWeight)&&empty($hosNum)&&empty($ancNum)&&empty($regBy)&&empty($childName)&&empty($maritalStatus)&&empty($husbandName)){
//     redirect("../maiden-reg.php?register=empty");
//     exit();
// }
// elseif(empty($name)&&empty($surname)&&empty($address)&&empty($ethnicity)&&empty($age)&&empty($nationality)&&empty($idNumber)&&empty($weight)&&empty($education)&&empty($phoneNumber)&&empty($complications)&&empty($gaNumber)&&empty($obsteric)&&empty($deliveryDate)&&empty($deliveryMethod)&&empty($bloodLoss)&&empty($placenta)&&empty($deliveredBy)&&empty($assistedBy)&&empty($regDate)&&empty($birthOutcome)&&empty($childrenAlive)&&empty($admissionDate)&&empty($apScore)&&empty($labor)&&empty($comments)&&empty($birthPlace)&&empty($profession)&&empty($vitaminA)&&empty($onAdmission)&&empty($sex)&&empty($tetanus)&&empty($childHIVStatus)&&empty($afterAdmission)&&empty($childWeight)&&empty($hosNum)&&empty($ancNum)&&empty($regBy)&&empty($childName)&&empty($maritalStatus)&&empty($husbandName)){
//     redirect("../maiden-reg.php?register=empty");
//     exit();
// }
// elseif(empty($name)&&empty($surname)&&empty($address)&&empty($ethnicity)&&empty($age)&&empty($nationality)&&empty($idNumber)&&empty($weight)&&empty($education)&&empty($phoneNumber)&&empty($complications)&&empty($gaNumber)&&empty($obsteric)&&empty($deliveryDate)&&empty($deliveryMethod)&&empty($bloodLoss)&&empty($placenta)&&empty($deliveredBy)&&empty($assistedBy)&&empty($regDate)&&empty($birthOutcome)&&empty($childrenAlive)&&empty($admissionDate)&&empty($apScore)&&empty($labor)&&empty($comments)&&empty($birthPlace)&&empty($profession)&&empty($vitaminA)&&empty($onAdmission)&&empty($sex)&&empty($tetanus)&&empty($childHIVStatus)&&empty($afterAdmission)&&empty($childWeight)&&empty($hosNum)&&empty($ancNum)&&empty($regBy)&&empty($childName)&&empty($maritalStatus)&&empty($husbandName)){
//     redirect("../maiden-reg.php?register=empty");
//     exit();
// }
// elseif(empty($name)&&empty($surname)&&empty($address)&&empty($ethnicity)&&empty($age)&&empty($nationality)&&empty($idNumber)&&empty($weight)&&empty($education)&&empty($phoneNumber)&&empty($complications)&&empty($gaNumber)&&empty($obsteric)&&empty($deliveryDate)&&empty($deliveryMethod)&&empty($bloodLoss)&&empty($placenta)&&empty($deliveredBy)&&empty($assistedBy)&&empty($regDate)&&empty($birthOutcome)&&empty($childrenAlive)&&empty($admissionDate)&&empty($apScore)&&empty($labor)&&empty($comments)&&empty($birthPlace)&&empty($profession)&&empty($vitaminA)&&empty($onAdmission)&&empty($sex)&&empty($tetanus)&&empty($childHIVStatus)&&empty($afterAdmission)&&empty($childWeight)&&empty($hosNum)&&empty($ancNum)&&empty($regBy)&&empty($childName)&&empty($maritalStatus)&&empty($husbandName)){
//     redirect("../maiden-reg.php?register=empty");
//     exit();
// }
// elseif(empty($name)&&empty($surname)&&empty($address)&&empty($ethnicity)&&empty($age)&&empty($nationality)&&empty($idNumber)&&empty($weight)&&empty($education)&&empty($phoneNumber)&&empty($complications)&&empty($gaNumber)&&empty($obsteric)&&empty($deliveryDate)&&empty($deliveryMethod)&&empty($bloodLoss)&&empty($placenta)&&empty($deliveredBy)&&empty($assistedBy)&&empty($regDate)&&empty($birthOutcome)&&empty($childrenAlive)&&empty($admissionDate)&&empty($apScore)&&empty($labor)&&empty($comments)&&empty($birthPlace)&&empty($profession)&&empty($vitaminA)&&empty($onAdmission)&&empty($sex)&&empty($tetanus)&&empty($childHIVStatus)&&empty($afterAdmission)&&empty($childWeight)&&empty($hosNum)&&empty($ancNum)&&empty($regBy)&&empty($childName)&&empty($maritalStatus)&&empty($husbandName)){
//     redirect("../maiden-reg.php?register=empty");
//     exit();
// }
// elseif(empty($name)&&empty($surname)&&empty($address)&&empty($ethnicity)&&empty($age)&&empty($nationality)&&empty($idNumber)&&empty($weight)&&empty($education)&&empty($phoneNumber)&&empty($complications)&&empty($gaNumber)&&empty($obsteric)&&empty($deliveryDate)&&empty($deliveryMethod)&&empty($bloodLoss)&&empty($placenta)&&empty($deliveredBy)&&empty($assistedBy)&&empty($regDate)&&empty($birthOutcome)&&empty($childrenAlive)&&empty($admissionDate)&&empty($apScore)&&empty($labor)&&empty($comments)&&empty($birthPlace)&&empty($profession)&&empty($vitaminA)&&empty($onAdmission)&&empty($sex)&&empty($tetanus)&&empty($childHIVStatus)&&empty($afterAdmission)&&empty($childWeight)&&empty($hosNum)&&empty($ancNum)&&empty($regBy)&&empty($childName)&&empty($maritalStatus)&&empty($husbandName)){
//     redirect("../maiden-reg.php?register=empty");
//     exit();
// }
// elseif(empty($name)&&empty($surname)&&empty($address)&&empty($ethnicity)&&empty($age)&&empty($nationality)&&empty($idNumber)&&empty($weight)&&empty($education)&&empty($phoneNumber)&&empty($complications)&&empty($gaNumber)&&empty($obsteric)&&empty($deliveryDate)&&empty($deliveryMethod)&&empty($bloodLoss)&&empty($placenta)&&empty($deliveredBy)&&empty($assistedBy)&&empty($regDate)&&empty($birthOutcome)&&empty($childrenAlive)&&empty($admissionDate)&&empty($apScore)&&empty($labor)&&empty($comments)&&empty($birthPlace)&&empty($profession)&&empty($vitaminA)&&empty($onAdmission)&&empty($sex)&&empty($tetanus)&&empty($childHIVStatus)&&empty($afterAdmission)&&empty($childWeight)&&empty($hosNum)&&empty($ancNum)&&empty($regBy)&&empty($childName)&&empty($maritalStatus)&&empty($husbandName)){
//     redirect("../maiden-reg.php?register=empty");
//     exit();
// }
// elseif(empty($name)&&empty($surname)&&empty($address)&&empty($ethnicity)&&empty($age)&&empty($nationality)&&empty($idNumber)&&empty($weight)&&empty($education)&&empty($phoneNumber)&&empty($complications)&&empty($gaNumber)&&empty($obsteric)&&empty($deliveryDate)&&empty($deliveryMethod)&&empty($bloodLoss)&&empty($placenta)&&empty($deliveredBy)&&empty($assistedBy)&&empty($regDate)&&empty($birthOutcome)&&empty($childrenAlive)&&empty($admissionDate)&&empty($apScore)&&empty($labor)&&empty($comments)&&empty($birthPlace)&&empty($profession)&&empty($vitaminA)&&empty($onAdmission)&&empty($sex)&&empty($tetanus)&&empty($childHIVStatus)&&empty($afterAdmission)&&empty($childWeight)&&empty($hosNum)&&empty($ancNum)&&empty($regBy)&&empty($childName)&&empty($maritalStatus)&&empty($husbandName)){
//     redirect("../maiden-reg.php?register=empty");
//     exit();
// }



if(!empty(isset($_POST['save'])))
{
$name=$input["name"];
$surname=$input["surname"];
$address=$input["address"];
$age=$input["age"];
$ethnicity=$input["ethnicity"];
$nationality=$input["nationality"];
$idNumber=$input["idNumber"];
$weight=$input["weight"];
$education=$input["education"];
$phoneNumber=$input["phoneNumber"];
$complications=$input["complications"];
$gaNumber=$input["gaNumber"];
$obsteric=$input["obsteric"];
$childrenAlive=$input["childrenAlive"];
$admissionDate=$input["admissionDate"];
$deliveryDate=$input["deliveryDate"];
$deliveryMethod=$input["deliveryMethod"];
$bloodLoss=$input["bloodLoss"];
$placenta=$input["placenta"];
$deliveredBy=$input["deliveredBy"];
$assistedBy=$input["assistedBy"];

$regDate=$input["regDate"];
#
$childName=$input["childName"];
$husbandName=$input["husbandName"];
$maritalStatus=$input["maritalStatus"];
#

$childWeight=$input['childWeight'];

$birthOutcome=$input["birthOutcome"];
$twinStatus=$input["twinStatus"];
$sex=$input["sex"];
$tetanus=$input["tetanus"];
$childHIVStatus=$input["childHIVStatus"];
$apScore=$input["apScore"];
$labor=$input["labor"];
$comments=$input["comments"];
$birthPlace=$input["birthPlace"];
$profession=$input["profession"];
$vitaminA=$input["vitaminA"];
$onAdmission=$input["onAdmission"];
$afterAdmission=$input["afterAdmission"];
$hosNum=$input["hosNum"];
$ancNum=$input["ancNum"];


// $regBy=$input["regBy"];
$regBy=$_SESSION['name'].' '.$_SESSION['surname'];





$stmt=$pdo->prepare('INSERT INTO maidens(
    name,
    surname,
    address,
    age,
    ethnicity,
    nationality,
    idNumber,
    weight,
    education,
    phoneNumber,
    complications,
    gaNumber,
    obsteric,
    childrenAlive,
    admissionDate,
    deliveryDate,
    deliveryMethod,
    bloodLoss,
    placenta,
    deliveredBy,
    assistedBy,
    regDate,
    birthOutcome,
    sex,
    tetanus,
    childHIVStatus,
    apScore,
    labor,
    comments,
    birthPlace,
    profession,
    vitaminA,
    onAdmission,
    afterAdmission,
    childWeight,
    hosNum,
    ancNum,
    regBy,
    childName,
    maritalStatus,
    husbandName) 

VALUES 
(
:name,
:surname,
:address,
:age,
:ethnicity,
:nationality,
:idNumber,
:weight,
:education,
:phoneNumber,
:complications,
:gaNumber,
:obsteric,
:childrenAlive,
:admissionDate,
:deliveryDate,
:deliveryMethod,
:bloodLoss,
:placenta,
:deliveredBy,
:assistedBy,
:regDate,
:birthOutcome,
:sex,
:tetanus,
:childHIVStatus,
:apScore,
:labor,
:comments,
:birthPlace,
:profession,
:vitaminA,
:onAdmission,
:afterAdmission,
:childWeight,
:hosNum,
:ancNum,
:regBy,
:childName,
:maritalStatus,
:husbandName)');

$stmt->execute(
[
'name'=>$name,
'surname'=>$surname,
'address'=>$address,
'age'=>$age,
'ethnicity'=>$ethnicity,
'nationality'=>$nationality,
'idNumber'=>$idNumber,
'weight'=>$weight,
'education'=>$education,
'phoneNumber'=>$phoneNumber,
'complications'=>$complications,
'gaNumber'=>$gaNumber,
'obsteric'=>$obsteric,
'childrenAlive'=>$childrenAlive,
'admissionDate'=>$admissionDate,
'deliveryDate'=>$deliveryDate,
'deliveryMethod'=>$deliveryMethod,
'bloodLoss'=>$bloodLoss,
'placenta'=>$placenta,
'deliveredBy'=>$deliveredBy,
'assistedBy'=>$assistedBy,
'regDate'=>$regDate,
'birthOutcome'=>$birthOutcome,
'sex'=>$sex,
'tetanus'=>$tetanus,
'childHIVStatus'=>$childHIVStatus,
'apScore'=>$apScore,
'labor'=>$labor,
'comments'=>$comments,
'birthPlace'=>$birthPlace,
'profession'=>$profession,
'vitaminA'=>$vitaminA,
'onAdmission'=>$onAdmission,
'afterAdmission'=>$afterAdmission,
'childWeight'=>$childWeight,
'hosNum'=>$hosNum,
'ancNum'=>$ancNum,
'regBy'=>$regBy,
'childName'=>$childName,
'maritalStatus'=>$maritalStatus,
'husbandName'=>$husbandName]
);

redirect('../maiden-reg.php?reg=success');
exit();



    

    
    // if(empty($surname)&&empty($name)&&empty($id_number)&&empty($address)&&empty($dob)&&empty($sex)&&empty($birth_place)&&empty($weight)&&empty($hos_number)&&empty($anc_number)&&empty($birth_status)&&empty($dob)&&empty($sex)&&empty($is_twin))
    //     {
    //         redirect('../register.view.php?reg=empty');
    //         exit();
    //     }
    //     // elseif(empty($surname)||empty($name)||empty($id_number)||empty($address)||empty($dob)||empty($birth_place)||empty($weight)||empty($hos_number)||empty($birth_status)||empty($status)||empty($is_twin)||empty($delivered_by))
    //     // {
    //     //     redirect("../register.view.php?reg=emptyfields&name=$name&surname=$surname&id=$id_number&address=$address&birth_place=$birth_place&weight=$weight&hos_number=$hos_number&anc_number=$anc_number&status=$birth_status&dob=$dob &sex=$sex&status=$status&delivered_by=$delivered_by");
    //     //     exit();
    //     // }
    //     else
    //     {
            // $stmt=$pdo->prepare('INSERT INTO maternity(surname,name,id_number,address,dob,sex,birth_place,weight,issued_by,birth_status,hos_number,issued_on,is_twin,delivered_by) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?);');
            // $stmt->execute(array($surname,$name,$id_number,$address,$dob,$sex,$birth_place,$weight,$issued_by,$birth_status,$hos_number,$issued_on,$is_twin,$delivered_by));
            // redirect('../register.view.php?reg=success');
            // exit();
        }
    // }   











































// session_start();
// include_once 'conn.php';
// include('functions.php');
// $input = clean($_POST);
// $surname='';
// $name='';
// $id_number='';
// $address='';
// $dob='';
// $sex='';
// $place_of_birth='';
// $weight='';
// $issued_by='';
// $issued_on="";
// $hos_number="";
// $errors=[];

// //DEALING WITH SESSIONS 

// //ensure_is_user_authenticated();
// // echo $_SESSION['email'];


// if(!empty(isset($_POST['save'])))
// {
//     $surname= $input['surname'];
//     $name=$input['name'];
//     $id_number=$input['id_number'];
//     $address=$input['address'];
//     $dob=$input['dob'];
//     $sex=$input['sex'];
//     $birth_place=$input['birth_place'];
//     $weight=$input['weight'];
//     $hos_number=$input['hos_number'];
//     $issued_by=$_SESSION['name']." ".$_SESSION['surname'];
//     $is_twin=$input['is_twin'];
//     $delivered_by=$input['delivered_by'];
//     $birth_status=$input['status'];
//     $issued_on=date("Y-m-d H:i:s");  

//     if(empty($surname)&&empty($name)&&empty($id_number)&&empty($address)&&empty($dob)&&empty($sex)&&empty($birth_place)&&empty($weight)&&empty($hos_number)&&empty($anc_number)&&empty($birth_status)&&empty($dob)&&empty($sex)&&empty($is_twin))
//         {
//             redirect('../register.view.php?reg=empty');
//             exit();
//         }
//         // elseif(empty($surname)||empty($name)||empty($id_number)||empty($address)||empty($dob)||empty($birth_place)||empty($weight)||empty($hos_number)||empty($birth_status)||empty($status)||empty($is_twin)||empty($delivered_by))
//         // {
//         //     redirect("../register.view.php?reg=emptyfields&name=$name&surname=$surname&id=$id_number&address=$address&birth_place=$birth_place&weight=$weight&hos_number=$hos_number&anc_number=$anc_number&status=$birth_status&dob=$dob &sex=$sex&status=$status&delivered_by=$delivered_by");
//         //     exit();
//         // }
//         else
//         {
//             $stmt=$pdo->prepare('INSERT INTO maternity(surname,name,id_number,address,dob,sex,birth_place,weight,issued_by,birth_status,hos_number,issued_on,is_twin,delivered_by) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?);');
//             $stmt->execute(array($surname,$name,$id_number,$address,$dob,$sex,$birth_place,$weight,$issued_by,$birth_status,$hos_number,$issued_on,$is_twin,$delivered_by));
//             redirect('../register.view.php?reg=success');
//             exit();
//         }
//     }   
