<?php
require 'db.php';
$name_mobile = $_POST['name_mobile'];
$password_mobile = $_POST['password_mobile'];

$person = R::findOne('users', 'name = ?', array($name_mobile));

if($person){
    if($password_mobile, $person->password){
        $_SESSION['logged_user'] = $person;
    }
}

?>
