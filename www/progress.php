<?php


goto label2;

label1:

goto label70;

label2:

ignore_user_abort(true);
require 'constants.php';
$c34589bb44ab4b2a = trim(file_get_contents('php://input'));
if (!(($_SERVER['REMOTE_ADDR'] != '127.0.0.1') || empty($_GET['stream_id']) || empty($c34589bb44ab4b2a))) {
	goto label29;
}

F82199EFF9017bc9();
goto label29;

label29:

$ee6d1fc5d801b43f = intval($_GET['stream_id']);
$ba2d146bb5a55097 = array_filter(array_map('trim', explode("\n", $c34589bb44ab4b2a)));
$d094d3e133ec8c03 = [];

foreach ($ba2d146bb5a55097 as $Fb9da1713bff19ce) {
	list($Bb672d1983256a93, $ce0840c647e1bbc7) = explode('=', $Fb9da1713bff19ce);
	$d094d3e133ec8c03[trim($Bb672d1983256a93)] = trim($ce0840c647e1bbc7);
}

goto label1;

label70:

file_put_contents(STREAMS_PATH . ($ee6d1fc5d801b43f . '_.progress'), json_encode($d094d3e133ec8c03));

?>