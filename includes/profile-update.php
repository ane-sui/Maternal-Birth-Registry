<?php
include_once '../includes/conn.php';
include_once '../includes/functions.php';


// Check if the form has been submitted
if (isset($_POST['update'])) {

  // Assign the form values to variables
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $phoneNumber = $_POST['phoneNumber'];
  $email = $_POST['email'];
  $id = $_POST['id'];

  // Prepare the update query
  $stmt = $pdo->prepare('UPDATE real_users SET user_name = :user_name, user_surname = :user_surname, user_phone_number = :user_phone_number, user_email = :user_email WHERE id = :id');

  // Execute the update query with the form values
  $stmt->execute([
    'user_name' => $name,
    'user_surname' => $surname,
    'user_phone_number' => $phoneNumber,
    'user_email' => $email,
    'id' => $id
  ]);

  // Redirect to the profile page with a success message
  redirect('../profile.php?update=success');
  exit();
}

