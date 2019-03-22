<?php
require 'db.php';
$name_desktop = $_POST['name_desktop'];
$password_desktop = $_POST['password_desktop'];

$person = R::findOne('users', 'name = ?', array($name_desktop));

if($person){
    $_SESSION['logged_user'] = $person;
    echo $person->name;
}

?>
