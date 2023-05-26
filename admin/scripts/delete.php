<?php
    include_once '../views/layout.view.php';
    include_once '../../includes/conn.php';
    include_once '../../includes/functions.php';

    $id=$_POST['id'] ?? null;

    if(!$id){
        redirect("home.php");
    }

    $stmt=$pdo->prepare('DELETE FROM users WHERE id=:id');
    $stmt->execute(['id'=>$id]);
    redirect('../views/users.view.php?update=delete');
?>
<?php
if (isset($_POST['delete'])) {

    $stmt=$pdo->prepare('DELETE FROM admins WHERE id=:id');
    $stmt->execute(['id'=>$id]);
    redirect('../views/total.admins.php?update=delete');

}
if (isset($_POST['del'])) {

    $stmt=$pdo->prepare('DELETE FROM real_users WHERE id=:id');
    $stmt->execute(['id'=>$id]);
    redirect('../views/total.users.php?update=delete');

}

