<nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="<? echo $siteurl; ?>">
                <img src="<? echo $assetsDir; ?>/img/logo.png" width="112" height="28">
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
                <? echo $text_nav_home; ?>
            </a>

            <a class="navbar-item" href="/about/">
            <? echo $text_nav_about; ?>
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                <? echo $text_nav_services; ?>
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
            <? echo $text_nav_blog; ?>
            </a>
            <a class="navbar-item" href="/contact/">
            <? echo $text_nav_contact; ?>
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
                    <strong><? echo $text_nav_button; ?></strong>
                </a>
                </div>
            </div>
            </div>
        </div>
    </nav>
</header>