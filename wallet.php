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
                <source media="(min-width: 950px)" srcset="./source/src/images/wallet/wallet.jpg">
                <source media="(min-width: 465px)" srcset="./source/src/images/wallet/wallet-tab.jpg">
                <img src="./source/src/images/wallet/wallet-mob.jpg" alt="space">
            </picture>

            <div class="user__wrap">
                <h2 class="title">
                Connect Wallet
                </h2>
                <p>
                Choose a wallet you want to connect. There are several wallet providers.
                </p>
                <div class="user__wallet user__form">
                    <a class="user__wallet-btn user__form" href="#">
                        <img src="./source/src/images/wallet/Metamask.svg" alt="Metamask" width="32" height="32">
                        <span>Metamask</span>
                    </a>
                    <a class="user__wallet-btn user__form" href="#">
                        <img src="./source/src/images/wallet/WalletConnect.svg" alt="Wallet" width="32" height="32">
                        <span>Wallet Connect</span>
                    </a>
                    <a class="user__wallet-btn user__form" href="#">
                        <img src="./source/src/images/wallet/CoinBase.svg" alt="coin" width="32" height="32">
                        <span>Coinbase</span>
                    </a>

                </div>
           
            </div>

        </section>

    </main>
    <?php require "source/components/footer.php" ?>
</body>

</html>