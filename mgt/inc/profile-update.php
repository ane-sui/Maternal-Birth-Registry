<?php
include_once '../inc/conn.php';
include_once '../inc/functions.php';

// Check if the form has been submitted
if (isset($_POST['update'])) {

  // Assign the form values to variables
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $phoneNumber = $_POST['phoneNumber'];
  $address=$_POST['address'];
  $age=$_POST['age'];
  $ethnicity=$_POST['ethnicity'];
  $nationality=$_POST['nationality'];
  $idNumber=$_POST['idNumber'];
  $afterAdmission=$_POST['afterAdmission'];
  $education=$_POST['education'];
  $profession=$_POST['profession'];
  $id = $_POST['id'];

  // Prepare the update query
  $stmt = $pdo->prepare('UPDATE maidens SET name = :name, surname = :surname,phoneNumber = :phoneNumber, age=:age,ethnicity=:ethnicity,nationality=:nationality,idNumber=:idNumber,afterAdmission=:afterAdmission,education=:education,profession=:profession, address=:address WHERE id = :id');

  // Execute the update query with the form values
  $stmt->execute([
    'name' => $name,
    'surname' => $surname,
    'phoneNumber' => $phoneNumber,
    'education' => $education,
    'idNumber' => $idNumber,
    'age' => $age,
    'address'=>$address,
    'ethnicity' => $ethnicity,
    'nationality' => $nationality,
    'afterAdmission' => $afterAdmission,
    // 'education' => $education,
    'profession' => $profession,
    // '' => $,
    'id' => $id
  ]);

  // Redirect to the profile page with a success message
  redirect('../profile.php?update=success');
  exit();
}

