<?php


function c7CC2F0dd6f71EBb($ee6d1fc5d801b43f)
{
	goto label39;

	label2:

	if (!file_exists('/proc/' . $C98e11437faf4199)) {
		goto label65;
	}

	$C6671ac66a4f1c57 = trim(file_get_contents('/proc/' . $C98e11437faf4199 . '/cmdline'));
	if (!(($C6671ac66a4f1c57 == 'XUIProxy[' . $ee6d1fc5d801b43f . ']') && is_numeric($C98e11437faf4199) && (0 < $C98e11437faf4199))) {
		goto label38;
	}

	posix_kill($C98e11437faf4199, 9);

	label38:

	goto label65;

	label39:

	clearstatcache(true);

	if (!file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_.monitor')) {
		goto label61;
	}

	$C98e11437faf4199 = intval(file_get_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.monitor'));

	label61:

	if (empty($C98e11437faf4199)) {
		goto label66;
	}

	goto label2;

	label65:

	goto label74;

	label66:

	shell_exec('kill -9 `ps -ef | grep \'XUIProxy\\[' . intval($ee6d1fc5d801b43f) . '\\]\' | grep -v grep | awk \'{print $2}\'`;');

	label74:

	goto label75;

	label75:
}

function startProxy($ee6d1fc5d801b43f, $D9d6a5d0b76a9aaf, $b5337d8a535cf6dd)
{
	goto label390;

	label4:

	$F8783f526ca1d49d = getSockets();

	if (0 < count($F8783f526ca1d49d)) {
		goto label637;
	}

	if ($Ef9b229b28b53402) {
		goto label24;
	}

	$Ef9b229b28b53402 = round(microtime(true) * 1000);
	goto label24;

	label24:

	if (!(CLOSE_EMPTY <= round(microtime(true) * 1000) - $Ef9b229b28b53402)) {
		goto label39;
	}

	echo 'No sockets waiting, close stream' . "\n";
	goto label365;

	label39:

	goto label636;

	label40:

	$Fff7d74ee020d096 = [
		'ssl'  => ['verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true],
		'http' => ['method' => 'GET', 'user_agent' => $Ecc2c91f94cb4fcb, 'timeout' => TIMEOUT, 'header' => '']
	];

	if (!isset($b5337d8a535cf6dd['proxy'])) {
		goto label61;
	}

	$Fff7d74ee020d096['http']['proxy'] = 'tcp://' . $b5337d8a535cf6dd['proxy']['value'];
	$Fff7d74ee020d096['http']['request_fulluri'] = true;

	label61:

	goto label62;

	label62:

	if (!isset($b5337d8a535cf6dd['cookie'])) {
		goto label73;
	}

	$Fff7d74ee020d096['http']['header'] .= 'Cookie: ' . $b5337d8a535cf6dd['cookie']['value'] . "\r\n";

	label73:

	if (!XUI::$rSettings['request_prebuffer']) {
		goto label82;
	}

	$Fff7d74ee020d096['http']['header'] .= 'X-XUI-Prebuffer: 1' . "\r\n";
	goto label82;

	label82:

	$b46218714d674656 = stream_context_create($Fff7d74ee020d096);
	$F83b167f3cf044be = json_decode($D9d6a5d0b76a9aaf['stream_source'], true);
	$B3299684b062e356 = getActiveStream($F83b167f3cf044be, $b46218714d674656);

	if (is_resource($B3299684b062e356)) {
		goto label635;
	}

	goto label584;

	label103:

	goto label756;

	label104:

	if (!XUI::$rSettings['enable_cache']) {
		goto label112;
	}

	XUI::cAc325153A658C37($ee6d1fc5d801b43f);

	label112:

	shell_exec('rm -f ' . STREAMS_PATH . intval($ee6d1fc5d801b43f) . '_*.ts');
	file_put_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid', getmypid());
	goto label433;

	label132:

	if ($B3299684b062e356) {
		goto label375;
	}

	echo 'Failed!' . "\n";
	XUI::d242Df32BD80320F($ee6d1fc5d801b43f, SERVER_ID, 'STREAM_START_FAIL');
	$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `monitor_pid` = null, `pid` = null, `stream_status` = 1 WHERE `server_stream_id` = ?;', $D9d6a5d0b76a9aaf['server_stream_id']);

	if (!XUI::$rSettings['enable_cache']) {
		goto label374;
	}

	goto label371;

	label152:

	if (!(strlen($E6ebe1d751d53850) != $cd35af0e530a8bc8 * PACKET_SIZE)) {
		goto label183;
	}

	$aefc4bd38091c3a7 = substr($E6ebe1d751d53850, $cd35af0e530a8bc8 * PACKET_SIZE, strlen($E6ebe1d751d53850) - ($cd35af0e530a8bc8 * PACKET_SIZE));
	$E6ebe1d751d53850 = substr($E6ebe1d751d53850, 0, $cd35af0e530a8bc8 * PACKET_SIZE);

	label183:

	foreach (str_split($E6ebe1d751d53850, PACKET_SIZE) as $c887a284a62c4f33) {
		goto label209;

		label192:

		echo 'Write analysis buffer' . "\n";
		file_put_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '.analyse', $A0303922f6d205bc);
		$A0303922f6d205bc = NULL;
		$b022b7d82d7b09ff = true;

		label202:

		goto label336;

		label204:

		$Dd8dfeebcacbf479 = true;
		$fdb13c463b1acd6e = false;
		$f0dea401591e325f = [];

		label207:

		goto label338;

		label209:

		$Be3c637a16a727b1 = unpack('N', substr($c887a284a62c4f33, 0, 4))[1];
		$Ba90f6e2230cba27 = ($Be3c637a16a727b1 >> 24) & 255;

		if (!($Ba90f6e2230cba27 == 71)) {
			goto label260;
		}

		if (substr($c887a284a62c4f33, 6, 4) == PAT_HEADER) {
			goto label340;
		}

		$bbae58f184e65cf9 = ($Be3c637a16a727b1 >> 4) & 3;
		goto label285;

		label243:

		$A432ec14fb9a1e04 .= $c887a284a62c4f33;

		label244:

		if ($b022b7d82d7b09ff) {
			goto label336;
		}

		$A0303922f6d205bc .= $c887a284a62c4f33;

		if (!((3000 * PACKET_SIZE) <= strlen($A0303922f6d205bc))) {
			goto label202;
		}

		goto label192;

		label260:
		if (!($fdb13c463b1acd6e && (count($f0dea401591e325f) < 10))) {
			goto label272;
		}

		$f0dea401591e325f[] = $c887a284a62c4f33;

		label272:
		if (!((strlen($A432ec14fb9a1e04) < MAX_PREBUFFER) && $Dd8dfeebcacbf479)) {
			goto label244;
		}

		goto label243;

		label285:

		if (!(($bbae58f184e65cf9 & 2) === 2)) {
			goto label207;
		}
		if (!((0 < count($f0dea401591e325f)) && ((unpack('C', $c887a284a62c4f33[4])[1] == 7) && (substr($c887a284a62c4f33, 4, 2) == "\x7" . 'P')))) {
			goto label207;
		}
		if (!(!$A432ec14fb9a1e04 || (STORE_PREBUFFER <= strlen($A432ec14fb9a1e04)))) {
			goto label334;
		}

		$A432ec14fb9a1e04 = implode('', $f0dea401591e325f) . $c887a284a62c4f33;

		label334:

		goto label204;

		label336:

		goto label344;

		label338:

		goto label342;

		label340:

		$fdb13c463b1acd6e = true;
		$f0dea401591e325f = [];

		label342:

		goto label260;

		label344:
	}

	goto label4;

	label347:

	if (!(CLOSE_EMPTY <= round(microtime(true) * 1000) - $Ef9b229b28b53402)) {
		goto label362;
	}

	echo 'No sockets waiting, close stream' . "\n";
	goto label365;

	label362:

	goto label490;
	goto label521;

	label364:

	goto label745;

	label365:

	fclose($B3299684b062e356);
	$b62d6460eb33ea07->db_connect();
	goto label418;

	label371:

	XUI::CAc325153A658C37($ee6d1fc5d801b43f);

	label374:

	goto label103;

	label375:

	$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `monitor_pid` = ?, `pid` = ?, `stream_started` = ?, `stream_status` = 0, `to_analyze` = 0 WHERE `server_stream_id` = ?', getmypid(), getmypid(), time(), $D9d6a5d0b76a9aaf['server_stream_id']);
	goto label104;

	label390:

	global $B3299684b062e356;
	global $b62d6460eb33ea07;

	if (file_exists(CONS_TMP_PATH . $ee6d1fc5d801b43f . '/')) {
		goto label405;
	}

	mkdir(CONS_TMP_PATH . $ee6d1fc5d801b43f);

	label405:

	$Ecc2c91f94cb4fcb = (isset($b5337d8a535cf6dd['user_agent']) ? $b5337d8a535cf6dd['user_agent']['value'] ?: $b5337d8a535cf6dd['user_agent']['argument_default_value'] : 'Mozilla/5.0');
	goto label40;

	label418:

	$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `monitor_pid` = null, `pid` = null, `stream_status` = 1 WHERE `server_stream_id` = ?;', $D9d6a5d0b76a9aaf['server_stream_id']);

	if (!XUI::$rSettings['enable_cache']) {
		goto label431;
	}

	XUI::cac325153a658c37($ee6d1fc5d801b43f);

	label431:

	exit();
	goto label103;

	label433:

	$b62d6460eb33ea07->close_mysql();
	$Ef9b229b28b53402 = NULL;
	stream_set_blocking($B3299684b062e356, false);
	$aefc4bd38091c3a7 = $A0303922f6d205bc = $A432ec14fb9a1e04 = $E6ebe1d751d53850 = $c887a284a62c4f33 = '';
	$B29720eeebfd43ec = $f0dea401591e325f = [];
	goto label742;

	label448:

	$E6ebe1d751d53850 = $E6ebe1d751d53850 . $aefc4bd38091c3a7 . fread($B3299684b062e356, BUFFER_SIZE - strlen($E6ebe1d751d53850 . $aefc4bd38091c3a7));
	$aefc4bd38091c3a7 = '';
	$cd35af0e530a8bc8 = floor(strlen($E6ebe1d751d53850) / PACKET_SIZE);

	if (0 < $cd35af0e530a8bc8) {
		goto label491;
	}
	if (!(!$Ef9b229b28b53402 || (100000 < (round(microtime(true) * 1000) - $Ef9b229b28b53402)))) {
		goto label490;
	}

	goto label492;

	label490:

	goto label513;

	label491:

	goto label152;

	label492:

	$F8783f526ca1d49d = getSockets();

	if (0 < count($F8783f526ca1d49d)) {
		goto label521;
	}

	if ($Ef9b229b28b53402) {
		goto label511;
	}

	$Ef9b229b28b53402 = round(microtime(true) * 1000);

	label511:

	goto label347;

	label512:

	$E6ebe1d751d53850 = '';

	label513:

	if (!($cd35af0e530a8bc8 == 0)) {
		goto label364;
	}

	usleep(10000);
	goto label364;

	label521:

	$Ef9b229b28b53402 = round(microtime(true) * 1000);

	if (empty($A432ec14fb9a1e04)) {
		goto label490;
	}

	foreach ($F8783f526ca1d49d as $e73c7814ea6ebda0) {
		if (isset($B29720eeebfd43ec[$e73c7814ea6ebda0])) {
			goto label581;
		}

		$Cc9358ec75bd69ae = socket_create(AF_UNIX, SOCK_DGRAM, 0);
		socket_set_nonblock($Cc9358ec75bd69ae);
		echo 'Send prebuffer: ' . strlen($A432ec14fb9a1e04) . ' bytes' . "\n";
		$B29720eeebfd43ec[$e73c7814ea6ebda0] = true;

		foreach (str_split($A432ec14fb9a1e04, BUFFER_SIZE) as $a4f07102a25c8088) {
			socket_sendto($Cc9358ec75bd69ae, $a4f07102a25c8088, BUFFER_SIZE, 0, CONS_TMP_PATH . $ee6d1fc5d801b43f . '/' . $e73c7814ea6ebda0);
		}

		socket_close($Cc9358ec75bd69ae);

		label581:
	}

	goto label490;

	label584:

	$df59d69b3ccd0f39 = (!empty($Fff7d74ee020d096['http']['header']) ? '-headers ' . escapeshellarg($Fff7d74ee020d096['http']['header']) : '');
	$A1f381c3d6825384 = (!empty($b5337d8a535cf6dd['proxy']) ? '-http_proxy ' . escapeshellarg($b5337d8a535cf6dd['proxy']) : '');
	$C6671ac66a4f1c57 = XUI::$rFFMPEG_CPU . ' -copyts -vsync 0 -nostats -nostdin -hide_banner -loglevel quiet -y -user_agent ' . escapeshellarg($Ecc2c91f94cb4fcb) . ' ' . $df59d69b3ccd0f39 . ' ' . $A1f381c3d6825384 . ' -i ' . escapeshellarg($B3299684b062e356) . ' -map 0 -c copy -mpegts_flags +initial_discontinuity -pat_period ' . PAT_PERIOD . ' -f mpegts -';
	$B3299684b062e356 = popen($C6671ac66a4f1c57, 'rb');

	label635:

	goto label132;

	label636:

	goto label512;

	label637:

	$Ef9b229b28b53402 = round(microtime(true) * 1000);

	foreach ($F8783f526ca1d49d as $e73c7814ea6ebda0) {
		goto label701;

		label649:

		if (empty($A432ec14fb9a1e04)) {
			goto label696;
		}

		echo 'Send prebuffer: ' . strlen($A432ec14fb9a1e04) . ' bytes' . "\n";
		$B29720eeebfd43ec[$e73c7814ea6ebda0] = true;

		foreach (str_split($A432ec14fb9a1e04, BUFFER_SIZE) as $a4f07102a25c8088) {
			socket_sendto($Cc9358ec75bd69ae, $a4f07102a25c8088, BUFFER_SIZE, 0, $bd5fcb6819e6041a);
		}

		goto label696;

		label680:

		if (empty($E6ebe1d751d53850)) {
			goto label692;
		}

		socket_sendto($Cc9358ec75bd69ae, $E6ebe1d751d53850, BUFFER_SIZE, 0, $bd5fcb6819e6041a);

		label692:

		goto label696;

		label694:

		goto label649;

		label696:

		socket_close($Cc9358ec75bd69ae);

		label699:

		goto label739;

		label701:

		$bd5fcb6819e6041a = CONS_TMP_PATH . $ee6d1fc5d801b43f . '/' . $e73c7814ea6ebda0;
		if (!(file_exists($bd5fcb6819e6041a) && (!isset($B29720eeebfd43ec[$e73c7814ea6ebda0]) || !empty($E6ebe1d751d53850)))) {
			goto label699;
		}

		$Cc9358ec75bd69ae = socket_create(AF_UNIX, SOCK_DGRAM, 0);
		socket_set_nonblock($Cc9358ec75bd69ae);

		if (!isset($B29720eeebfd43ec[$e73c7814ea6ebda0])) {
			goto label694;
		}

		goto label680;

		label739:
	}

	goto label512;

	label742:

	$b022b7d82d7b09ff = $fdb13c463b1acd6e = false;
	$Dd8dfeebcacbf479 = false;

	label745:

	if (feof($B3299684b062e356)) {
		goto label365;
	}

	stream_set_timeout($B3299684b062e356, TIMEOUT);
	goto label448;

	label756:
}

function getSockets()
{
	goto label17;

	label1:

	closedir($e23e1b2beefc1001);

	label4:

	return $F8783f526ca1d49d;
	goto label38;

	label6:
	if (!(($F48d5724f3b4ec96 != '.') && ($F48d5724f3b4ec96 != '..'))) {
		goto label15;
	}

	$F8783f526ca1d49d[] = $F48d5724f3b4ec96;

	label15:

	goto label29;

	label16:

	goto label1;

	label17:

	global $ee6d1fc5d801b43f;
	$F8783f526ca1d49d = [];

	if (!($e23e1b2beefc1001 = opendir(CONS_TMP_PATH . $ee6d1fc5d801b43f . '/'))) {
		goto label4;
	}

	label29:

	if (!(false !== $F48d5724f3b4ec96 = readdir($e23e1b2beefc1001))) {
		goto label16;
	}

	goto label6;

	label38:
}

function getActiveStream($F83b167f3cf044be, $b46218714d674656)
{
	foreach ($F83b167f3cf044be as $A7ca171405b19571) {
		goto label27;

		label6:

		if (!in_array(strtolower($F43fcc82aa69fa08), ['application/x-mpegurl', 'application/vnd.apple.mpegurl', 'audio/x-mpegurl'])) {
			goto label19;
		}

		return $A7ca171405b19571;

		label19:

		goto label25;

		label21:

		goto label23;

		label23:

		return $B3299684b062e356;

		label25:

		goto label111;

		label27:

		$A7ca171405b19571 = XUI::c1f42Ca38AD7A48d($A7ca171405b19571);
		$B3299684b062e356 = @fopen($A7ca171405b19571, 'rb', false, $b46218714d674656);

		if (!$B3299684b062e356) {
			goto label25;
		}

		$A7be8618873e0090 = stream_get_meta_data($B3299684b062e356);
		$df59d69b3ccd0f39 = [];
		goto label51;

		label51:

		foreach ($A7be8618873e0090['wrapper_data'] as $F5ba2106d5227309) {
			if (!(strpos($F5ba2106d5227309, 'HTTP') === 0)) {
				goto label69;
			}

			$df59d69b3ccd0f39[0] = $F5ba2106d5227309;
			goto label80;

			label69:

			list($Bb672d1983256a93, $ce0840c647e1bbc7) = explode(': ', $F5ba2106d5227309);
			$df59d69b3ccd0f39[$Bb672d1983256a93] = $ce0840c647e1bbc7;

			label80:
		}

		$F43fcc82aa69fa08 = (is_array($df59d69b3ccd0f39['Content-Type']) ? $df59d69b3ccd0f39['Content-Type'][count($df59d69b3ccd0f39['Content-Type']) - 1] : $df59d69b3ccd0f39['Content-Type']);

		if (strtolower($F43fcc82aa69fa08) == 'video/mp2t') {
			goto label21;
		}

		fclose($B3299684b062e356);
		goto label6;

		label111:
	}

	return NULL;
}

function shutdown()
{
	global $ee6d1fc5d801b43f;
	global $B3299684b062e356;
	@unlink(STREAMS_PATH . $ee6d1fc5d801b43f . '_.monitor');
	@unlink(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid');
	shell_exec('rm -rf ' . CONS_TMP_PATH . $ee6d1fc5d801b43f . '/');

	if (!is_resource($B3299684b062e356)) {
		goto label36;
	}

	@fclose($B3299684b062e356);

	label36:
}

goto label102;

label1:

goto label125;

label3:

$b62d6460eb33ea07->query('SELECT t1.*, t2.* FROM `streams_options` t1, `streams_arguments` t2 WHERE t1.stream_id = ? AND t1.argument_id = t2.id', $ee6d1fc5d801b43f);
$b5337d8a535cf6dd = $b62d6460eb33ea07->get_rows(true, 'argument_key');
const PAT_HEADER = "\xb0" . '' . "\r" . '' . "\0" . '' . "\x1";
const PACKET_SIZE = 188;
const BUFFER_SIZE = 12032;
goto label96;

label16:

exit();

label17:

file_put_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.monitor', getmypid());
@unlink(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid');
$D9d6a5d0b76a9aaf = $b62d6460eb33ea07->get_row();
goto label3;

label38:

$ee6d1fc5d801b43f = intval($argv[1]);
require str_replace('\\', '/', dirname($argv[0])) . '/../../www/init.php';
c7cc2f0dd6f71ebb($ee6d1fc5d801b43f);
register_shutdown_function('shutdown');
goto label71;

label61:

$B3299684b062e356 = NULL;
startproxy($ee6d1fc5d801b43f, $D9d6a5d0b76a9aaf, $b5337d8a535cf6dd);
goto label1;

label71:

set_time_limit(0);
cli_set_process_title('XUIProxy[' . $ee6d1fc5d801b43f . ']');
$b62d6460eb33ea07->query('SELECT * FROM `streams` t1 INNER JOIN `streams_servers` t2 ON t2.stream_id = t1.id AND t2.server_id = ? WHERE t1.id = ?', SERVER_ID, $ee6d1fc5d801b43f);

if (!($b62d6460eb33ea07->num_rows() <= 0)) {
	goto label17;
}

XUI::ee173B194544b3A2($ee6d1fc5d801b43f);
goto label16;

label96:

const PAT_PERIOD = 2;
const TIMEOUT = 20;
const CLOSE_EMPTY = 3000;
const STORE_PREBUFFER = 1128000;
const MAX_PREBUFFER = 10528000;
goto label61;

label102:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label113;
}

exit('Please run as XUI!' . "\n");

label113:
if (!(!@$argc || ($argc <= 1))) {
	goto label38;
}

exit(0);
goto label38;

label125:

?>