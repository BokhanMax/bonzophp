<?

$siteurl = 'http://BonzoPHP.loc'; // ENTER YOUR SITE URL HERE WITHOUT '/'
$adminmail = 'bokhanmax@gmail.com'; // ENTER ADMIN MAIL 

$assetsDir = "$siteurl/theme/assets";
$widgetsDir = "./theme/widgets";

function bonzoheader() {
	require "./theme/header.php";
	}

function bonzonav() {
	require "./theme/nav.php";
	}

function bonzofooter() {
	require "./theme/footer.php";
	}

?>