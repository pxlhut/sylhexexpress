<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle; ?></title>
    <meta name="description" content="<?= $pageDescription; ?>">

    <!-- flaticon stylesheet -->
    <link rel="stylesheet" href="assets/css/font/flaticon.css">

    <!-- custom stylesheet -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <header class="header-wrap">
        <nav class="navbar">
            <a href="./"><img class="nav-logo" src="assets/img/logo.png" alt="Sylhex Express Logo"></a>

            <!-- nav toggle handeler -->
            <input type="checkbox" id="toggle" hidden>
            <label for="toggle" class="toggle">
                <span class="toggle-icon"></span>
            </label>

            <!-- header nav menu start -->
            <ul class="nav-menu">
                <li class="nav-item"><a href="./" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="./about-us.php" class="nav-link">About</a></li>
                <li class="nav-item"><a href="./track-order.php" class="nav-link">Track</a></li>
                <li class="nav-item"><a href="./services.php" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="./contact.php" class="nav-link">Contact</a></li>
            </ul>
            <!-- header nav menu start -->
        </nav>
    </header>