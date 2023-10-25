<?php 

$login = filter_var(trim($_POST["userName"]), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$pass = filter_var(trim($_POST["password"]), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
var_dump($_POST);
$pass = md5($pass."tr");


$mysql = new mysqli('localhost' , 'root', '', 'users-account');

$result = $mysql->query("SELECT * FROM `users` WHERE  `login` = '$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();
if (count($user)==0){
    echo "no user";
    exit();
}
print_r($user);
exit();
$mysql->close();
?>