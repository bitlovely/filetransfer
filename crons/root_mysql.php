<?php


function ae7efC3Bf879bD7C($Fd94beb5ab19eb72, $D44370d9bef85284)
{
	foreach ($Fd94beb5ab19eb72 as $D26c55a46693b2bb) {
		if (!stristr($D44370d9bef85284, $D26c55a46693b2bb)) {
			goto label14;
		}

		return true;

		label14:
	}

	return false;
}

goto label45;

label1:

XUI::A3cf732C257bD804($F2db9d2971f5c8c4);
$a6610c33a10808f3 = ['innodb: page_cleaner', 'aborted connection', 'got an error reading communication packets', 'got packets out of order', 'got timeout reading communication packets'];

if (!(0 < XUI::$rSettings['mysql_sleep_kill'])) {
	goto label32;
}

$b62d6460eb33ea07->query('SELECT `id` FROM `INFORMATION_SCHEMA`.`PROCESSLIST` WHERE `COMMAND` = \'Sleep\' AND `TIME` > ?;', intval(XUI::$rSettings['mysql_sleep_kill']));

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$b62d6460eb33ea07->query('KILL ?;', $Fb9da1713bff19ce['id']);
}

goto label32;

label32:

$b62d6460eb33ea07->query('SELECT MAX(`date`) AS `date` FROM `mysql_syslog`;');
$b5427787c73c2a2a = intval($b62d6460eb33ea07->get_row()['date']);
$Fb4643c5197e7b83 = 10;
goto label337;

label45:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'root')) {
	goto label56;
}

exit('Please run as root!' . "\n");

label56:

set_time_limit(0);

if (@$argc) {
	goto label66;
}

goto label65;

label65:

exit(0);

label66:

require str_replace('\\', '/', dirname($argv[0])) . '/../includes/admin.php';
cli_set_process_title('XUI[MysqlErrors]');
$F2db9d2971f5c8c4 = CRONS_TMP_PATH . md5(XUI::A336b0DaD3EAF634() . __FILE__);
goto label1;

label90:

foreach ($d094d3e133ec8c03 as $c60b264a3c1c4445) {
	goto label94;

	label94:

	$C391de0ad38dc7a3 = trim(explode(']:', explode('mysqld[', $c60b264a3c1c4445)[1])[1]);
	$Ab13f2545dd3df14 = strtotime(substr($C391de0ad38dc7a3, 0, 19));

	if (!($b5427787c73c2a2a < $Ab13f2545dd3df14)) {
		goto label220;
	}
	if (!(empty($C391de0ad38dc7a3) || AE7efc3Bf879bd7C($a6610c33a10808f3, $C391de0ad38dc7a3))) {
		goto label296;
	}

	goto label208;
	goto label296;

	label139:

	$A7d54b094ae83c95 = 'NOTICE';

	label140:

	if (!$A2724e95b275e9d5) {
		goto label220;
	}

	$ff5cf44f96903d64 = NULL;
	$C9febb240944fd1e = NULL;
	goto label148;

	label148:

	$D16061affd463058 = NULL;

	if (!(stripos($A2724e95b275e9d5, 'access denied for user') !== false)) {
		goto label237;
	}

	$ff5cf44f96903d64 = trim(explode('\'', explode('user \'', $A2724e95b275e9d5)[1])[0]);
	$C9febb240944fd1e = trim(explode('\'', explode('user \'', $A2724e95b275e9d5)[1])[2]);
	$A7d54b094ae83c95 = 'AUTH';
	goto label237;

	label193:

	$A7d54b094ae83c95 = 'WARNING';

	label194:

	goto label140;

	label196:

	$A2724e95b275e9d5 = trim(explode('[Note]', $C391de0ad38dc7a3)[1]);
	goto label139;

	label208:

	goto label333;

	label210:

	$A7d54b094ae83c95 = 'ABORTED';

	label211:

	$b62d6460eb33ea07->query('INSERT INTO `mysql_syslog`(`type`,`error`,`username`,`ip`,`database`,`date`) VALUES(?,?,?,?,?,?)', $A7d54b094ae83c95, $A2724e95b275e9d5, $ff5cf44f96903d64, $C9febb240944fd1e, $D16061affd463058, $Ab13f2545dd3df14);

	label220:

	goto label208;

	label222:

	$A7d54b094ae83c95 = 'ERROR';

	label223:

	goto label194;

	label225:

	$A2724e95b275e9d5 = trim(explode('[Warning]', $C391de0ad38dc7a3)[1]);
	goto label193;

	label237:

	if (!(stripos($A2724e95b275e9d5, 'user:') !== false)) {
		goto label211;
	}

	$ff5cf44f96903d64 = trim(explode('\'', explode('user: \'', $A2724e95b275e9d5)[1])[0]);
	$C9febb240944fd1e = trim(explode('\'', explode('host: \'', $A2724e95b275e9d5)[1])[0]);
	$D16061affd463058 = trim(explode('\'', explode('db: \'', $A2724e95b275e9d5)[1])[0]);
	goto label210;

	label296:

	if (stripos($C391de0ad38dc7a3, '[Note]') !== false) {
		goto label196;
	}

	if (stripos($C391de0ad38dc7a3, '[Warning]') !== false) {
		goto label225;
	}

	if (!(stripos($C391de0ad38dc7a3, '[Error]') !== false)) {
		goto label223;
	}

	$A2724e95b275e9d5 = trim(explode('[Error]', $C391de0ad38dc7a3)[1]);
	goto label222;

	label333:
}

goto label388;

label337:

$d855b0cead9260ca = [];
$b62d6460eb33ea07->query('SELECT `mysql_syslog`.`ip`, COUNT(`mysql_syslog`.`id`) AS `count`, `blocked_ips`.`id` AS `block_id` FROM `mysql_syslog` LEFT JOIN `blocked_ips` ON `blocked_ips`.`ip` = `mysql_syslog`.`ip` WHERE `type` = \'AUTH\' AND `mysql_syslog`.`date` > UNIX_TIMESTAMP() - 86400 GROUP BY `mysql_syslog`.`ip`;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$d855b0cead9260ca[$Fb9da1713bff19ce['ip']] = $Fb9da1713bff19ce['count'];
	if (!(($Fb4643c5197e7b83 < $Fb9da1713bff19ce['count']) && !$Fb9da1713bff19ce['block_id'])) {
		goto label380;
	}

	if (in_array($Fb9da1713bff19ce['ip'], XUI::dE052f142a92E9bF())) {
		goto label380;
	}

	echo 'Blocking IP ' . $Fb9da1713bff19ce['ip'] . "\n";
	API::F7E2383F47283cb7(['ip' => $Fb9da1713bff19ce['ip'], 'notes' => 'MYSQL BRUTEFORCE ATTACK']);

	label380:
}

exec('sudo tail -n 1000 /var/log/syslog | grep mysqld', $d094d3e133ec8c03, $F206f6e52dc6c3bd);
goto label90;

label388:

@unlink($F2db9d2971f5c8c4);

?>