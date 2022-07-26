<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<? echo $assetsDir; ?>/css/satellite.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title><? echo $seotitle; ?></title>
    <meta name="description" content="<? echo $seodescription; ?>">
</head>

<body>
<header>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="<? echo $siteurl; ?>">
                <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
            <a class="navbar-item" href="<? echo $siteurl; ?>">
                Головна
            </a>

            <a class="navbar-item" href="/about/">
                Про Мене
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                Послуги
                </a>

                <div class="navbar-dropdown">
                <a class="navbar-item">
                    About
                </a>
                <a class="navbar-item">
                    Jobs
                </a>
                <a class="navbar-item">
                    Contact
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item">
                    Report an issue
                </a>
                </div>
            </div>
            </div>

            <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                <a class="button is-primary">
                    <strong>Замовити</strong>
                </a>
                </div>
            </div>
            </div>
        </div>
    </nav>
</header>