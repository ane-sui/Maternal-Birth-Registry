<?php 
  session_start();

  include_once 'conn.php';
  include('functions.php');

  $input = clean($_POST);
  $errors=[];
  
  ensure_is_user_authenticated();
  
  if(!empty(isset($_POST['update'])))
  {
    $id=$input["id"];
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
    $twinStatus=$input['twinStatus'];
    
    
    // $regBy=$input["regBy"];
    $regBy=$_SESSION['name'].' '.$_SESSION['surname'];
    
    $stmt=$pdo->prepare('UPDATE maidens SET
        
        name=:name,
        surname=:surname,
        address=:address,
        age=:age,
        twinStatus=:twinStatus,
        ethnicity=:ethnicity,
        nationality=:nationality,
        idNumber=:idNumber,
        weight=:weight,
        education=:education,
        phoneNumber=:phoneNumber,
        complications=:complications,
        gaNumber=:gaNumber,
        obsteric=:obsteric,
        childrenAlive=:childrenAlive,
        admissionDate=:admissionDate,
        deliveryDate=:deliveryDate,
        deliveryMethod=:deliveryMethod,
        bloodLoss=:bloodLoss,
        placenta=:placenta,
        deliveredBy=:deliveredBy,
        assistedBy=:assistedBy,
        regDate=:regDate,
        birthOutcome=:birthOutcome,
        sex=:sex,
        tetanus=:tetanus,
        childHIVStatus=:childHIVStatus,
        apScore=:apScore,
        labor=:labor,
        comments=:comments,
        birthPlace=:birthPlace,
        profession=:profession,
        vitaminA=:vitaminA,
        onAdmission=:onAdmission,
        afterAdmission=:afterAdmission,
        childWeight=:childWeight,
        hosNum=:hosNum,
        ancNum=:ancNum,

        regBy=:regBy WHERE id=:id');
    
    $stmt->execute(
    [
      'id'=>$id,
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
    'twinStatus'=>$twinStatus,
    'regBy'=>$regBy]
    );
     
  // $stmt=$pdo->prepare("UPDATE maidens SET surname=:surname, name=:name, id_number=:id_number, address=:address, dob=:dob, sex=:sex, birth_place=:birth_place, weight=:weight, hos_number=:hos_number, birth_status=:birth_status WHERE id=:id");
  
  
  redirect('../view_patients.php?update=success'); 
  exit();
      
}
  


// if(isset($_POST['update']))
// {
//   $id=$_POST['id'];
//   $surname=$_POST['surname'];
//   $name=$_POST['name'];
//   $id_number=$_POST['id_number'];
//   $address=$_POST['address'];
//   $dob=$_POST['dob'];
//   $sex=$_POST['sex'];
//   $birth_place=$_POST['birth_place'];
//   $weight=$_POST['weight'];
//   $hos_number=$_POST['hos_number'];
//   // $anc_number=$_POST['anc_number'];
//   $birth_status=$_POST['birth_status'];

//   $stmt=$pdo->prepare("UPDATE maternity SET surname=:surname, name=:name, id_number=:id_number, address=:address, dob=:dob, sex=:sex, birth_place=:birth_place, weight=:weight, hos_number=:hos_number, birth_status=:birth_status WHERE id=:id");

//   $stmt->execute(['surname'=>$surname,'name'=>$name,'id_number'=>$id_number, 'address'=>$address, 'dob'=>$dob, 'sex'=>$sex, 'birth_place'=>$birth_place,'weight'=>$weight, 'hos_number'=>$hos_number,  'birth_status'=>$birth_status,'id'=>$id]);

//   redirect('../view_patients.php?update=success'); 
//   // redirect('../edit.php?update=success');
// }

// ?>