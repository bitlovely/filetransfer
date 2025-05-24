<?php


function ab8369074Df2aAa3()
{
	goto label83;

	label1:

	exit();

	label2:

	$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name`, `series_no`, `stream_source` FROM `streams` WHERE `type` = 3 AND `series_no` <> 0;');

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label80;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		goto label39;

		label17:

		if (!$B8630a7c92543099) {
			goto label37;
		}

		$b62d6460eb33ea07->query('UPDATE `streams` SET `stream_source` = ? WHERE `id` = ?;', json_encode($Aac64ae34ff57fc4['sources'], JSON_UNESCAPED_UNICODE), $Fb9da1713bff19ce['id']);
		echo 'Updated: ' . $Fb9da1713bff19ce['stream_display_name'] . "\n";

		label37:

		goto label75;

		label39:

		$Aac64ae34ff57fc4 = CDA6Bf7272fceBB4(intval($Fb9da1713bff19ce['series_no']));

		if (!$Aac64ae34ff57fc4['success']) {
			goto label75;
		}

		$E5459fe8d5470b6a = json_decode($Fb9da1713bff19ce['stream_source'], true);
		$B8630a7c92543099 = false;

		foreach ($Aac64ae34ff57fc4['sources'] as $fd51b5505224fc7c) {
			if (in_array($fd51b5505224fc7c, $E5459fe8d5470b6a)) {
				goto label71;
			}

			$B8630a7c92543099 = true;

			label71:
		}

		goto label17;

		label75:

		goto label77;

		label77:
	}

	goto label80;

	label80:

	D537D94b49D06806();
	goto label100;

	label83:

	global $b62d6460eb33ea07;

	if ((time() - XUI::$rSettings['cc_time']) < 3600) {
		goto label99;
	}

	$b62d6460eb33ea07->query('UPDATE `settings` SET `cc_time` = ?;', time());
	goto label2;

	label99:

	goto label1;

	label100:
}

goto label26;

label1:

exit(0);

label2:

require str_replace('\\', '/', dirname($argv[0])) . '/../includes/admin.php';
cli_set_process_title('XUI[Series]');
$F2db9d2971f5c8c4 = CRONS_TMP_PATH . md5(XUI::a336B0daD3eAf634() . __FILE__);
goto label46;

label26:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label37;
}

exit('Please run as XUI!' . "\n");

label37:

set_time_limit(0);

if (@$argc) {
	goto label2;
}

goto label1;

label46:

XUI::a3cf732c257bd804($F2db9d2971f5c8c4);
ab8369074df2aaa3();
goto label53;

label53:

@unlink($F2db9d2971f5c8c4);

?>