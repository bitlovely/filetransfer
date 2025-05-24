<?php


goto label21;

label1:

set_time_limit(0);
require str_replace('\\', '/', dirname($argv[0])) . '/../www/init.php';
$b62d6460eb33ea07->close_mysql();
cli_set_process_title('XUI[TMP]');
goto label39;

label21:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label32;
}

exit('Please run as XUI!' . "\n");

label32:

if (@$argc) {
	goto label1;
}

exit(0);
goto label1;

label39:

$F2db9d2971f5c8c4 = CRONS_TMP_PATH . md5(XUI::A336B0Dad3EaF634() . __FILE__);
XUI::a3CF732c257bD804($F2db9d2971f5c8c4);

foreach ([TMP_PATH, CRONS_TMP_PATH, DIVERGENCE_TMP_PATH, FLOOD_TMP_PATH, MINISTRA_TMP_PATH, SIGNALS_TMP_PATH, LOGS_TMP_PATH] as $d799202a12912af4) {
	foreach (scandir($d799202a12912af4) as $D6be258a9043b749) {
		if (!((600 <= time() - filemtime($d799202a12912af4 . $D6be258a9043b749)) && (stripos($D6be258a9043b749, 'ministra_') === false))) {
			goto label96;
		}

		unlink($d799202a12912af4 . $D6be258a9043b749);

		label96:
	}
}

foreach (scandir(PLAYLIST_PATH) as $D6be258a9043b749) {
	if (!(XUI::$rSettings['cache_playlists'] <= time() - filemtime(PLAYLIST_PATH . $D6be258a9043b749))) {
		goto label126;
	}

	unlink(PLAYLIST_PATH . $D6be258a9043b749);

	label126:
}

goto label129;

label129:

clearstatcache();
goto label132;

label132:

@unlink($F2db9d2971f5c8c4);

?>