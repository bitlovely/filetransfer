<?php


function ab8369074Df2aaA3()
{
	global $b62d6460eb33ea07;

	if (!XUI::$rServers[SERVER_ID]['is_main']) {
		goto label129;
	}

	$Ab13f2545dd3df14 = time();
	$Cec8eeb85b74d82b = [
		'today' => [$Ab13f2545dd3df14 - 86400, $Ab13f2545dd3df14],
		'week'  => [$Ab13f2545dd3df14 - 604800, $Ab13f2545dd3df14],
		'month' => [$Ab13f2545dd3df14 - 2592000, $Ab13f2545dd3df14],
		'all'   => [0, $Ab13f2545dd3df14]
	];
	$b62d6460eb33ea07->query('TRUNCATE `streams_stats`;');

	foreach ($Cec8eeb85b74d82b as $A7d54b094ae83c95 => $e36d2f5d3c9f0972) {
		goto label55;

		label35:

		foreach ($Bf3377811d8e2b3a as $ee6d1fc5d801b43f => $F647a429f8089f01) {
			$b62d6460eb33ea07->query('INSERT INTO `streams_stats`(`stream_id`, `rank`, `time`, `connections`, `users`, `type`) VALUES(?, ?, ?, ?, ?, ?);', $ee6d1fc5d801b43f, $F647a429f8089f01['rank'], $F647a429f8089f01['time'], $F647a429f8089f01['connections'], $F647a429f8089f01['users'], $A7d54b094ae83c95);
		}

		goto label127;

		label55:

		$Bf3377811d8e2b3a = [];
		$b62d6460eb33ea07->query('SELECT `stream_id`, COUNT(*) AS `connections`, SUM(`date_end` - `date_start`) AS `time`, COUNT(DISTINCT(`user_id`)) AS `users` FROM `lines_activity` LEFT JOIN `streams` ON `streams`.`id` = `lines_activity`.`stream_id` WHERE `date_start` > ? AND `date_end` <= ? GROUP BY `stream_id`;', $e36d2f5d3c9f0972[0], $e36d2f5d3c9f0972[1]);

		if (!(0 < $b62d6460eb33ea07->num_rows())) {
			goto label91;
		}

		foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
			$Bf3377811d8e2b3a[$Fb9da1713bff19ce['stream_id']] = ['rank' => 0, 'time' => intval($Fb9da1713bff19ce['time']), 'connections' => $Fb9da1713bff19ce['connections'], 'users' => $Fb9da1713bff19ce['users']];
		}

		goto label91;

		label91:

		$b62d6460eb33ea07->query('SELECT `stream_id`, SUM(`date_end` - `date_start`) AS `time` FROM `lines_activity` LEFT JOIN `streams` ON `streams`.`id` = `lines_activity`.`stream_id` WHERE `date_start` > ? AND `date_end` <= ? GROUP BY `stream_id` ORDER BY `time` DESC, `stream_id` DESC;', $e36d2f5d3c9f0972[0], $e36d2f5d3c9f0972[1]);

		if (!(0 < $b62d6460eb33ea07->num_rows())) {
			goto label35;
		}

		$C19839981031fb6e = 1;

		foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
			if (!isset($Bf3377811d8e2b3a[$Fb9da1713bff19ce['stream_id']])) {
				goto label123;
			}

			$Bf3377811d8e2b3a[$Fb9da1713bff19ce['stream_id']]['rank'] = $C19839981031fb6e;
			$C19839981031fb6e++;

			label123:
		}

		goto label35;

		label127:
	}

	label129:
}

function shutdown()
{
	global $b62d6460eb33ea07;
	global $F2db9d2971f5c8c4;

	if (!is_object($b62d6460eb33ea07)) {
		goto label10;
	}

	$b62d6460eb33ea07->close_mysql();

	label10:

	@unlink($F2db9d2971f5c8c4);
}

goto label1;

label1:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label12;
}

exit('Please run as XUI!' . "\n");

label12:

if (@$argc) {
	goto label19;
}

exit(0);
goto label19;

label19:

register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../www/init.php';
cli_set_process_title('XUI[Stats]');
$F2db9d2971f5c8c4 = CRONS_TMP_PATH . md5(XUI::A336B0dad3eaF634() . __FILE__);
goto label49;

label46:

AB8369074Df2aaa3();
goto label62;

label49:

XUI::a3cF732c257Bd804($F2db9d2971f5c8c4);
$F7379362daea673f = 60;
set_time_limit($F7379362daea673f);
ini_set('max_execution_time', $F7379362daea673f);
goto label46;

label62:

?>