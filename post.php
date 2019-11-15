<?php


$user     = $_POST['user'];
$password = $_POST['password'];

if($user== '' || $password== ''){

      echo json_encode('error') ;
}else {

    echo json_encode('Usuario' . ' '. $user . ' <br>' . ' poassword: ' . $password) ;
}





?>