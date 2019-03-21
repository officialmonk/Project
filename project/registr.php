<?php
require 'db.php';

$number_sign = $_POST['number_sign'];
$name_sign = $_POST['name_sign'];
$password_sign = $_POST['password_sign'];

$user = R::dispense('users');
$user->number = $number_sign;
$user->name = $name_sign;
$user->password = $password_sign;
R::store($user);
?>

