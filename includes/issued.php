<?php
include_once 'conn.php';
include_once 'functions.php';


if(isset($_POST['issued']))
{

    $id=$_POST['mId'];

    $stmt=$pdo->prepare('SELECT *  FROM issued WHERE (mId=?);');
    
    $stmt->execute(array($mId));
    $row = $stmt->rowCount();
    
    if($row == $mid) 
    
    {
    echo 'already issued';
    }
  


    $input = clean($_POST);
        $msg=[];
        $input = clean($_POST);
        $id=$input['mId'];
        $surname=$input['surname'];
        $name=$input['name'];
        $idNumber=$input['idNumber'];
        $address=$input['address'];
        $age=$input['age'];
        $maritalStatus=$input['maritalStatus'];
        $deliveryDate=$input['deliveryDate'];
        $weight=$input['weight'];
        $sex=$input['sex'];
        $birthPlace=$input['birthPlace'];
        $twinStatus=$input['twinStatus'];
        $childName=$input['childName'];
        $issuedBy=$input['issuedBy'];
        $issueDate=$input['issueDate'];
       
    $stmt=$pdo->prepare
    ('INSERT INTO issued
        (
        mId,
        surname,
        name,
        idNumber,
        address,
        age,
        maritalStatus,
        deliveryDate,
        weight,
        sex,
        birthPlace,
        twinStatus,
        childName,
        issuedBy,
        issueDate
        ) 
    
    VALUES 
        (
        :mId,
        :surname,
        :name,
        :idNumber,
        :address,
        :age,
        :maritalStatus,
        :deliveryDate,
        :weight,
        :sex,
        :birthPlace,
        :twinStatus,
        :childName,
        :issuedBy,
        :issueDate
        )'
    );
    
    $stmt->execute
    (
        [
            'mId'=>$id,
            'name'=>$name,
            'surname'=>$surname,
            'idNumber'=>$idNumber,
            'address'=>$address,
            'age'=>$age,
            'maritalStatus'=>$maritalStatus,
            'deliveryDate'=>$deliveryDate,
            'weight'=>$weight,
            'sex'=>$sex,
            'birthPlace'=>$birthPlace,
            'twinStatus'=>$twinStatus,
            'childName'=>$childName,
            'issuedBy'=>$issuedBy,
            'issueDate'=>$issueDate
        ]
    );
    
    redirect('../search.php?reg=success');
  }
