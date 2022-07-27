<nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="<? echo $siteurl; ?>">
                <img src="<?=$_TXT[11]?>" width="112" height="28">
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
                <?=$_TXT[0]?>
            </a>

            <a class="navbar-item" href="/about/">
                <?=$_TXT[1]?>
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                <?=$_TXT[2]?>
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
            <a class="navbar-item" href="/blog/">
                <?=$_TXT[12]?>
            </a>
            <a class="navbar-item" href="/contact/">
                <?=$_TXT[3]?>
            </a>
            </div>

            <div class="navbar-end">
			<div class="navbar-lang">
            <form method="post">
                <input type="submit" name="lang" value="en" />
                <input type="submit" name="lang" value="uk" />
			</div>
            <div class="navbar-item">
                <div class="buttons">
                <a class="button is-primary">
                    <strong><?=$_TXT[4]?></strong>
                </a>
                </div>
            </div>
            </div>
        </div>
    </nav>
</header>