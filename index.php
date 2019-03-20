<?php
include 'templates/header.php';

if (isset($_GET['value']) && count($_GET) == 1)
{
$page = 'home';
echo $_GET['value'];
}else{
	$page = 'home';
}
include 'templates/pages/'.$page.'.php';	
include 'templates/footer.php';

?>