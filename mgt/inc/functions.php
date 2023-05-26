<?php
// function output($value){
//     echo '<pre>';
//     print_r($value);
//     echo '</pre>';
// }
function redirect($url){
    header("Location: $url");
}   
function is_user_authenticated(){
    return isset($_SESSION['email']);
}

function ensure_is_user_authenticated(){
    if(!is_user_authenticated()){
        redirect('login.view.php');
        die();
    }
}
function clean($data = array())
{
    foreach ($data as $key => $val) {
        $data[$key] = trim($val);
        $data[$key] = stripslashes($val);
        $data[$key] = htmlspecialchars($val);
    }
    return $data;
}