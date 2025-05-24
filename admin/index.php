<?php


if (Xui\Functions::verifyLicense()) {
	goto label9;
}

header('Location: ./license');
exit();
goto label13;

label9:

header('Location: ./login');
exit();

label13:

?>