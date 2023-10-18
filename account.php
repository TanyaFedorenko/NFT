<?php 
require_once __DIR__ . './source/incs/data.php';
require_once __DIR__ . './source/incs/form.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/account/account.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Document</title>

</head>


<body class="user backDark page">

    <?php include "source/components/header.php" ?>

    <main>
        <section class="user__content">

            <picture class="user__back">
                <source media="(min-width: 950px)" srcset="./source/src/images/account.png">
                <source media="(min-width: 465px)" srcset="./source/src/images/account-tablet.png">
                <img src="./source/src/images/account-mob.png" alt="space">
            </picture>

            <div class="user__wrap">
                <h2 class="title">
                    Create account
                </h2>
                <p>
                    Welcome! enter your details and start creating, collecting and selling NFTs.
                </p>
                <form action="action-form.php" method="post" class="account-form user__form">
                    <label class="account-form__label" for="userName">
                        <img src="./source/src/images/form/User.svg" alt="user" width="20" height="20">
                        <input name="userName" type="text" placeholder="Username" id="userName">
                    </label>
                    <label class="account-form__label" for="email">
                        <img src="./source/src/images/form/Envelope.svg" alt="envelope" width="20" height="20">
                        <input name="email" type="email" placeholder="Email Address" id="email">
                    </label>
                    <label class="account-form__label" for="password">
                        <img src="./source/src/images/form/LockKey.svg" alt="lock" width="20" height="20">
                        <input name="password" type="password" placeholder="Password" id="password">
                    </label>
                    <label class="account-form__label" for="password-check">
                        <img src="./source/src/images/form/LockKey.svg" alt="lock" width="20" height="20">
                        <input name="password-check" type="password" placeholder="Confirm Password" id="password-check">
                    </label>
                    <button class="btn btn--blue account-form__btn" type="submit" >Create account</button>

                </form>
            </div>

        </section>

    </main>
    <?php require "source/components/footer.php" ?>


</body>

</html>