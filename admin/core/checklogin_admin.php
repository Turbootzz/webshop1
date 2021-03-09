<?php
// variable %loginerror wordt aangemaakt en in eerste instanstie op false gezet
$loginError = false;
// controle of session waarden bestaan en correct zijn
if (!isset($_SESSION['Sadmin_id']) || $_SESSION['Sadmin_id'] == "" || $_SESSION['Sadmin_id'] == '0' || 
	!isset($_SESSION['Sadmin_email']) || $_SESSION['Sadmin_email'] == "" || $_SESSION['Sadmin_email'] == '0' )
{
	// niet correct, zet dan variable $loginError op true
	$loginError = true;
}
// $loginError waar is
if ($loginError)
{
	exit('Sessie verlopen<meta http-equiv="refresh" content="2; URL='.BASEURL_CMS.'index.php">');
}