<?php 

$login =filter_var(trim($_POST['userName']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email =filter_var(trim( $_POST['email']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$pass =filter_var(trim( $_POST['password']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$pass_check = filter_var(trim($_POST['password-check']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
if ($pass === $pass_check){
    $pass = md5($pass."tr");
}else{
    header('Location: /account.php');
    exit();
}

if(mb_strlen($login)<5 || mb_strlen($login)>90 ){
    echo 'error length';
    exit();
}else if((mb_strlen($pass)<6 || mb_strlen($login)>32 ) ){
    echo 'error length pass';
    exit();
}


$mysql = new mysqli('localhost', 'root' ,'', 'users-account');
$mysql->query("INSERT INTO `users`(`login`, `email`, `pass`) VALUES('$login', '$email', '$pass')");

$mysql->close();

header('Location: /wallet.php')
?>