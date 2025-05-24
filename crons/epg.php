<?php


class EPG
{
	public $rValid = false;
	public $rEPGSource;
	public $rFilename;

	public function __construct($fd51b5505224fc7c, $A66eee85d9566710 = false)
	{
		$this->dE800Ff553c72d02($fd51b5505224fc7c, $A66eee85d9566710);
	}

	public function A898aCe49e8E74A0()
	{
		goto label71;

		label1:

		$A9f49071e8d2b670 = $ba2d146bb5a55097->title;

		foreach ($A9f49071e8d2b670 as $b87030f28ff32396) {
			$bc6b825af9e46f5b = (string) $b87030f28ff32396->attributes()->lang;
			if (!(!in_array($bc6b825af9e46f5b, $d094d3e133ec8c03[$b39b8fa9afa1ec53]['langs']) && !empty($bc6b825af9e46f5b))) {
				goto label29;
			}

			$d094d3e133ec8c03[$b39b8fa9afa1ec53]['langs'][] = $bc6b825af9e46f5b;

			label29:
		}

		label31:

		goto label32;

		label32:

		goto label114;

		label33:

		$b39b8fa9afa1ec53 = trim((string) $ba2d146bb5a55097->attributes()->id);
		$B6ff76eefeeb5d46 = (!empty($ba2d146bb5a55097->{'display-name'}) ? trim((string) $ba2d146bb5a55097->{'display-name'}) : '');

		if (!array_key_exists($b39b8fa9afa1ec53, $d094d3e133ec8c03)) {
			goto label62;
		}

		goto label61;

		label61:

		goto label72;

		label62:

		$d094d3e133ec8c03[$b39b8fa9afa1ec53] = [];
		$d094d3e133ec8c03[$b39b8fa9afa1ec53]['display_name'] = $B6ff76eefeeb5d46;
		$d094d3e133ec8c03[$b39b8fa9afa1ec53]['langs'] = [];
		goto label114;

		label71:

		$d094d3e133ec8c03 = [];

		label72:

		if (!($db2bae96fe96e3c2 = $this->rEPGSource->getNode())) {
			goto label115;
		}

		$ba2d146bb5a55097 = simplexml_load_string($db2bae96fe96e3c2);

		if (!$ba2d146bb5a55097) {
			goto label114;
		}

		goto label87;

		label87:

		if ($ba2d146bb5a55097->getName() == 'channel') {
			goto label33;
		}

		if (!($ba2d146bb5a55097->getName() == 'programme')) {
			goto label31;
		}

		$b39b8fa9afa1ec53 = trim((string) $ba2d146bb5a55097->attributes()->channel);

		if (array_key_exists($b39b8fa9afa1ec53, $d094d3e133ec8c03)) {
			goto label1;
		}

		goto label72;
		goto label1;

		label114:

		goto label72;

		label115:

		return $d094d3e133ec8c03;
		goto label117;

		label117:
	}

	public function a6Ab1BB29714429d($E7cba019ce58e458, $Bf9899a172ecff52, $A486d2019332744a = 0)
	{
		goto label91;

		label4:

		$b39b8fa9afa1ec53 = addslashes($b39b8fa9afa1ec53);
		$Bf9899a172ecff52[$b39b8fa9afa1ec53]['epg_lang'] = addslashes($Bf9899a172ecff52[$b39b8fa9afa1ec53]['epg_lang']);
		goto label17;

		label17:

		$d8ba84b55c701dcd[] = '(' . $b62d6460eb33ea07->escape($E7cba019ce58e458) . ', ' . $b62d6460eb33ea07->escape($b39b8fa9afa1ec53) . ', ' . intval($bcfd61adc96d4b72) . ', ' . intval($e7d4a79fdee9a1a0) . ', ' . $b62d6460eb33ea07->escape($Bf9899a172ecff52[$b39b8fa9afa1ec53]['epg_lang']) . ', ' . $b62d6460eb33ea07->escape($C88345f6d882583a) . ', ' . $b62d6460eb33ea07->escape($Df3e5354e4d3a809) . ')';

		label56:

		goto label93;

		label57:

		goto label127;

		label58:

		$C88345f6d882583a = $Df3e5354e4d3a809 = '';
		$bcfd61adc96d4b72 = strtotime(strval($ba2d146bb5a55097->attributes()->start)) + ($A486d2019332744a * 60);
		$e7d4a79fdee9a1a0 = strtotime(strval($ba2d146bb5a55097->attributes()->stop)) + ($A486d2019332744a * 60);

		if (!empty($ba2d146bb5a55097->title)) {
			goto label200;
		}

		goto label199;

		label91:

		global $b62d6460eb33ea07;
		$d8ba84b55c701dcd = [];

		label93:

		if (!($db2bae96fe96e3c2 = $this->rEPGSource->getNode())) {
			goto label57;
		}

		$ba2d146bb5a55097 = simplexml_load_string($db2bae96fe96e3c2);
		goto label105;

		label105:

		if (!$ba2d146bb5a55097) {
			goto label56;
		}

		if (!($ba2d146bb5a55097->getName() == 'programme')) {
			goto label56;
		}

		$b39b8fa9afa1ec53 = (string) $ba2d146bb5a55097->attributes()->channel;

		if (array_key_exists($b39b8fa9afa1ec53, $Bf9899a172ecff52)) {
			goto label58;
		}

		goto label93;
		goto label58;

		label127:

		return !empty($d8ba84b55c701dcd) ? $d8ba84b55c701dcd : false;
		goto label209;

		label135:

		goto label171;

		label136:

		$B2e2b49bf55792ec = false;

		foreach ($A9f49071e8d2b670 as $b87030f28ff32396) {
			if (!($b87030f28ff32396->attributes()->lang == $Bf9899a172ecff52[$b39b8fa9afa1ec53]['epg_lang'])) {
				goto label153;
			}

			$B2e2b49bf55792ec = true;
			$C88345f6d882583a = $b87030f28ff32396;
			goto label155;

			label153:
		}

		label155:

		goto label167;

		label156:

		$df5e57d7df16e1d0 = $ba2d146bb5a55097->desc;

		if (is_object($df5e57d7df16e1d0)) {
			goto label166;
		}

		$Df3e5354e4d3a809 = $ba2d146bb5a55097->desc;
		goto label4;

		label166:

		goto label175;

		label167:

		if ($B2e2b49bf55792ec) {
			goto label171;
		}

		$C88345f6d882583a = $A9f49071e8d2b670[0];

		label171:

		if (empty($ba2d146bb5a55097->desc)) {
			goto label4;
		}

		goto label156;

		label175:

		$B2e2b49bf55792ec = false;

		foreach ($df5e57d7df16e1d0 as $a9f2d703ffa3530f) {
			if (!($a9f2d703ffa3530f->attributes()->lang == $Bf9899a172ecff52[$b39b8fa9afa1ec53]['epg_lang'])) {
				goto label192;
			}

			$B2e2b49bf55792ec = true;
			$Df3e5354e4d3a809 = $a9f2d703ffa3530f;
			goto label194;

			label192:
		}

		label194:

		if ($B2e2b49bf55792ec) {
			goto label4;
		}

		$Df3e5354e4d3a809 = $df5e57d7df16e1d0[0];
		goto label4;

		label199:

		goto label93;

		label200:

		$A9f49071e8d2b670 = $ba2d146bb5a55097->title;

		if (is_object($A9f49071e8d2b670)) {
			goto label136;
		}

		$C88345f6d882583a = $A9f49071e8d2b670;
		goto label135;

		label209:
	}

	public function e06C9333d872bb8F($fd51b5505224fc7c, $F48d5724f3b4ec96)
	{
		goto label29;

		label3:

		goto label5;

		label4:

		$e0f7eb6cd1cbb106 = ' | gunzip -c';

		label5:

		goto label6;

		label6:

		shell_exec('wget -U "Mozilla/5.0" -O - "' . $fd51b5505224fc7c . '"' . $e0f7eb6cd1cbb106 . ' > ' . $F48d5724f3b4ec96);
		if (!(file_exists($F48d5724f3b4ec96) && (0 < filesize($F48d5724f3b4ec96)))) {
			goto label27;
		}

		return true;

		label27:

		return false;
		goto label45;

		label29:

		$Daecfbd6410b9c42 = pathinfo($fd51b5505224fc7c, PATHINFO_EXTENSION);
		$e0f7eb6cd1cbb106 = '';

		if ($Daecfbd6410b9c42 == 'gz') {
			goto label4;
		}

		if (!($Daecfbd6410b9c42 == 'xz')) {
			goto label3;
		}

		$e0f7eb6cd1cbb106 = ' | unxz -c';
		goto label3;

		label45:
	}

	public function dE800FF553C72d02($fd51b5505224fc7c, $A66eee85d9566710)
	{
		try {
			goto label3;

			label3:

			$this->rFilename = TMP_PATH . md5($fd51b5505224fc7c) . '.xml';
			if (!(!file_exists($this->rFilename) || !$A66eee85d9566710)) {
				goto label27;
			}

			$this->E06c9333D872bb8f($fd51b5505224fc7c, $this->rFilename);

			label27:

			if ($this->rFilename) {
				goto label38;
			}

			goto label32;

			label31:

			goto label57;

			label32:

			XUI::FC023Cd5AafC77F3('epg', 'No XML found at: ' . $fd51b5505224fc7c);
			goto label31;

			label38:

			$D27fe13c26d2e218 = XmlStringStreamer::createStringWalkerParser($this->rFilename);

			if ($D27fe13c26d2e218) {
				goto label52;
			}

			goto label46;

			label46:

			XUI::Fc023cd5AaFC77f3('epg', 'Not a valid EPG source: ' . $fd51b5505224fc7c);
			goto label31;

			label52:

			$this->rEPGSource = $D27fe13c26d2e218;
			$this->rValid = true;
			goto label31;
		}
		catch (Exception $E0f0519e12b13b6b) {
			XUI::Fc023cD5aAfC77F3('epg', 'EPG failed to process: ' . $fd51b5505224fc7c);
		}
	}
}

function getBouquetGroups()
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT DISTINCT(`bouquet`) AS `bouquet` FROM `lines`;');
	$Bb3d8077cb1c5d12 = [
		'all' => [
		'streams'  => [],
		'bouquets' => []
	]
	];

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$Df5cd7b5dc4cc10c = json_decode($Fb9da1713bff19ce['bouquet'], true);
		sort($Df5cd7b5dc4cc10c);
		$Bb3d8077cb1c5d12[implode('_', $Df5cd7b5dc4cc10c)] = [
			'streams'  => [],
			'bouquets' => $Df5cd7b5dc4cc10c
		];
	}

	foreach ($Bb3d8077cb1c5d12 as $fb719dae9595b9fa => $Dd628d57719ba79c) {
		$F266bb7a04bd97d0 = [];

		foreach ($Dd628d57719ba79c['bouquets'] as $b5fd3e3f0096d7f4) {
			$b62d6460eb33ea07->query('SELECT `bouquet_channels` FROM `bouquets` WHERE `id` = ?;', $b5fd3e3f0096d7f4);

			foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
				$F266bb7a04bd97d0[] = $b5fd3e3f0096d7f4;
				$Bb3d8077cb1c5d12[$fb719dae9595b9fa]['streams'] = array_merge($Bb3d8077cb1c5d12[$fb719dae9595b9fa]['streams'], json_decode($Fb9da1713bff19ce['bouquet_channels'], true));
			}

			$Bb3d8077cb1c5d12[$fb719dae9595b9fa]['streams'] = array_unique($Bb3d8077cb1c5d12[$fb719dae9595b9fa]['streams']);
		}

		$Bb3d8077cb1c5d12[$fb719dae9595b9fa]['bouquets'] = $F266bb7a04bd97d0;
	}

	return $Bb3d8077cb1c5d12;
}

function shutdown()
{
	global $b62d6460eb33ea07;

	if (!is_object($b62d6460eb33ea07)) {
		goto label9;
	}

	$b62d6460eb33ea07->close_mysql();

	label9:
}

goto label1343;

label1:

date_default_timezone_set('UTC');

label4:

if ($E7cba019ce58e458) {
	goto label16;
}

goto label9;

label9:

$b62d6460eb33ea07->query('TRUNCATE `epg_channels`;');
$b62d6460eb33ea07->query('SELECT * FROM `epg`');
goto label25;

label16:

$b62d6460eb33ea07->query('DELETE FROM `epg_channels` WHERE `epg_id` = ?;', $E7cba019ce58e458);
goto label21;

label21:

$b62d6460eb33ea07->query('SELECT * FROM `epg` WHERE `id` = ?;', $E7cba019ce58e458);

label25:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$a2ebb817d88c810b = new EPG($Fb9da1713bff19ce['epg_file']);

	if (!$a2ebb817d88c810b->rValid) {
		goto label74;
	}

	$ba2d146bb5a55097 = $a2ebb817d88c810b->A898Ace49e8e74a0();
	$b62d6460eb33ea07->query('UPDATE `epg` SET `data` = ?, `last_updated` = ? WHERE `id` = ?', json_encode($ba2d146bb5a55097, JSON_UNESCAPED_UNICODE), time(), $Fb9da1713bff19ce['id']);

	foreach ($ba2d146bb5a55097 as $Abcb228699a7f743 => $F647a429f8089f01) {
		$b62d6460eb33ea07->query('INSERT INTO `epg_channels`(`epg_id`, `channel_id`, `name`, `langs`) VALUES(?, ?, ?, ?);', $Fb9da1713bff19ce['id'], $Abcb228699a7f743, $F647a429f8089f01['display_name'], json_encode($F647a429f8089f01['langs']));
	}

	label74:
}
if (!(XUI::$rSettings['enable_epg_api'] && !$E7cba019ce58e458)) {
	goto label1375;
}

goto label1100;

label85:

$b62d6460eb33ea07->query('TRUNCATE `epg_api`;');

foreach ($A5a4a57a12bb19b3 as $aa4e95f1ed1932a8) {
	$b62d6460eb33ea07->query('INSERT INTO `epg_api`(`stationId`, `callSign`, `name`, `bcastLangs`, `type`, `signalType`, `videoType`, `affiliateId`, `affiliateCallSign`, `picon`) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?);', $aa4e95f1ed1932a8[0], $aa4e95f1ed1932a8[1], $aa4e95f1ed1932a8[2], $aa4e95f1ed1932a8[3], $aa4e95f1ed1932a8[4], $aa4e95f1ed1932a8[5], $aa4e95f1ed1932a8[6], $aa4e95f1ed1932a8[7], $aa4e95f1ed1932a8[8], $aa4e95f1ed1932a8[9]);
	$bd9f37da0d424293[$aa4e95f1ed1932a8[1]] = intval($aa4e95f1ed1932a8[0]);
	$c5de1126fb49c6dd[intval($aa4e95f1ed1932a8[0])] = $aa4e95f1ed1932a8[1];
}

label129:

if (!($bc0a92a4c2d0025c == 0)) {
	goto label386;
}

goto label383;

label134:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$a2ebb817d88c810b = $F6fe22994a2a6b63 = [];
	$b62d6460eb33ea07->query('SELECT * FROM `epg_data` WHERE `epg_id` = ? AND `channel_id` = ? ORDER BY `start` ASC;', $Fb9da1713bff19ce['epg_id'], $Fb9da1713bff19ce['channel_id']);

	foreach ($b62d6460eb33ea07->get_rows() as $Ac8c03ed27c04ef2) {
		if (in_array($Ac8c03ed27c04ef2['start'], $F6fe22994a2a6b63)) {
			goto label165;
		}

		$F6fe22994a2a6b63[] = $Ac8c03ed27c04ef2['start'];
		$a2ebb817d88c810b[] = $Ac8c03ed27c04ef2;

		label165:
	}

	if (!(0 < count($a2ebb817d88c810b))) {
		goto label186;
	}

	file_put_contents(EPG_PATH . 'stream_' . $Fb9da1713bff19ce['id'], igbinary_serialize($a2ebb817d88c810b));

	label186:
}

foreach (scandir(EPG_PATH) as $D6be258a9043b749) {
	if (in_array($D6be258a9043b749, ['.', '..'])) {
		goto label217;
	}

	if (!(filemtime(EPG_PATH . $D6be258a9043b749) < ($F56066ad7b074468 - 10))) {
		goto label217;
	}

	unlink(EPG_PATH . $D6be258a9043b749);

	label217:
}

goto label1378;

label220:

foreach (array_keys($e02ff34f7d898a7b) as $A33d43b03b0ee517) {
	$F6fe22994a2a6b63 = [];
	$Fd6eb2b8ed8d82f8 = time();

	foreach ($e02ff34f7d898a7b[$A33d43b03b0ee517] as $D577b2a7889a5fb6) {
		$bcfd61adc96d4b72 = strtotime($D577b2a7889a5fb6['startTime']);

		if (!($bcfd61adc96d4b72 < $Fd6eb2b8ed8d82f8)) {
			goto label244;
		}

		$Fd6eb2b8ed8d82f8 = $bcfd61adc96d4b72;

		label244:
	}

	$b62d6460eb33ea07->query('DELETE FROM `epg_data` WHERE `start` >= ? AND `epg_id` = 0 AND `channel_id` = ?;', $Fd6eb2b8ed8d82f8, $b39b8fa9afa1ec53);

	foreach ($e02ff34f7d898a7b[$A33d43b03b0ee517] as $D577b2a7889a5fb6) {
		goto label312;

		label257:

		$F6fe22994a2a6b63[] = $bcfd61adc96d4b72;
		$b62d6460eb33ea07->query('INSERT INTO `epg_data` (`epg_id`,`channel_id`,`start`,`end`,`lang`,`title`,`description`) VALUES (0, ?, ?, ?, ?, ?, ?);', $b39b8fa9afa1ec53, $bcfd61adc96d4b72, $b54a5805c0b9816e, substr($D577b2a7889a5fb6['program']['titleLang'], 0, 2), $b87030f28ff32396, $a9f2d703ffa3530f);
		$a2ebb817d88c810b[] = ['id' => $b62d6460eb33ea07->last_insert_id(), 'epg_id' => 0, 'channel_id' => $b39b8fa9afa1ec53, 'start' => $bcfd61adc96d4b72, 'end' => $b54a5805c0b9816e, 'lang' => substr($D577b2a7889a5fb6['program']['titleLang'], 0, 2), 'title' => $b87030f28ff32396, 'description' => $a9f2d703ffa3530f];

		label294:

		goto label368;

		label297:

		$a9f2d703ffa3530f = $D577b2a7889a5fb6['program']['extended'] . ' - ' . $a9f2d703ffa3530f;

		label302:

		goto label347;

		label305:

		$b87030f28ff32396 .= ' - ' . $D577b2a7889a5fb6['program']['extended'];
		goto label347;

		label312:

		$b87030f28ff32396 = $D577b2a7889a5fb6['program']['title'];
		$a9f2d703ffa3530f = $D577b2a7889a5fb6['program']['longDescription'];

		if (!(0 < strlen($D577b2a7889a5fb6['program']['extended']))) {
			goto label347;
		}

		if (XUI::$rSettings['epg_api_extended'] == 1) {
			goto label305;
		}

		if (!(XUI::$rSettings['epg_api_extended'] == 2)) {
			goto label302;
		}

		goto label297;

		label347:

		$bcfd61adc96d4b72 = strtotime($D577b2a7889a5fb6['startTime']);
		$b54a5805c0b9816e = strtotime($D577b2a7889a5fb6['endTime']);

		if (in_array($bcfd61adc96d4b72, $F6fe22994a2a6b63)) {
			goto label294;
		}

		goto label257;

		label368:
	}
}

label372:

file_put_contents(EPG_PATH . 'stream_' . $ee6d1fc5d801b43f, igbinary_serialize($a2ebb817d88c810b));

label382:

goto label1271;

label383:

$b62d6460eb33ea07->query('DELETE FROM `epg_data` WHERE `epg_id` = 0;');

label386:

$b62d6460eb33ea07->query('SELECT `channel_id` FROM `streams` WHERE `epg_api` = 1;');
$A3aa81b5d3e27866 = [];

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	if (!isset($bd9f37da0d424293[$Fb9da1713bff19ce['channel_id']])) {
		goto label404;
	}

	$A3aa81b5d3e27866[] = $bd9f37da0d424293[$Fb9da1713bff19ce['channel_id']];

	label404:
}

goto label407;

label407:

if (!(0 < count($A3aa81b5d3e27866))) {
	goto label602;
}

foreach (array_chunk(array_map('intval', array_unique($A3aa81b5d3e27866)), 50) as $a4f07102a25c8088) {
	$c34589bb44ab4b2a = ['action' => 'epg', 'id' => implode(',', $a4f07102a25c8088), 'days' => $A1337727c59c9463, 'keep' => $bc0a92a4c2d0025c];
	$e02ff34f7d898a7b = Xui\Functions::getEPG('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0', $c34589bb44ab4b2a);
	if (!(is_array($e02ff34f7d898a7b) && (0 < count($e02ff34f7d898a7b)))) {
		goto label600;
	}

	foreach (array_keys($e02ff34f7d898a7b) as $A33d43b03b0ee517) {
		$F6fe22994a2a6b63 = [];
		$Fd6eb2b8ed8d82f8 = time();

		foreach ($e02ff34f7d898a7b[$A33d43b03b0ee517] as $D577b2a7889a5fb6) {
			$bcfd61adc96d4b72 = strtotime($D577b2a7889a5fb6['startTime']);

			if (!($bcfd61adc96d4b72 < $Fd6eb2b8ed8d82f8)) {
				goto label479;
			}

			$Fd6eb2b8ed8d82f8 = $bcfd61adc96d4b72;

			label479:
		}

		$b62d6460eb33ea07->query('DELETE FROM `epg_data` WHERE `start` >= ? AND `epg_id` = 0 AND `channel_id` = ?;', $Fd6eb2b8ed8d82f8, $c5de1126fb49c6dd[$A33d43b03b0ee517]);

		foreach ($e02ff34f7d898a7b[$A33d43b03b0ee517] as $D577b2a7889a5fb6) {
			goto label557;

			label494:

			$F6fe22994a2a6b63[] = $bcfd61adc96d4b72;
			$b62d6460eb33ea07->query('INSERT INTO `epg_data` (`epg_id`,`channel_id`,`start`,`end`,`lang`,`title`,`description`) VALUES (0, ?, ?, ?, ?, ?, ?)', $c5de1126fb49c6dd[$A33d43b03b0ee517], $bcfd61adc96d4b72, $b54a5805c0b9816e, substr($D577b2a7889a5fb6['program']['titleLang'], 0, 2), $b87030f28ff32396, $a9f2d703ffa3530f);

			label513:

			goto label596;

			label517:

			$bcfd61adc96d4b72 = strtotime($D577b2a7889a5fb6['startTime']);
			$b54a5805c0b9816e = strtotime($D577b2a7889a5fb6['endTime']);

			if (in_array($bcfd61adc96d4b72, $F6fe22994a2a6b63)) {
				goto label513;
			}

			goto label494;

			label540:

			$a9f2d703ffa3530f = $D577b2a7889a5fb6['program']['extended'] . ' - ' . $a9f2d703ffa3530f;

			label545:

			goto label517;

			label549:

			$b87030f28ff32396 .= ' - ' . $D577b2a7889a5fb6['program']['extended'];
			goto label517;

			label557:

			$b87030f28ff32396 = $D577b2a7889a5fb6['program']['title'];
			$a9f2d703ffa3530f = $D577b2a7889a5fb6['program']['longDescription'];

			if (!(0 < strlen($D577b2a7889a5fb6['program']['extended']))) {
				goto label517;
			}

			if (XUI::$rSettings['epg_api_extended'] == 1) {
				goto label549;
			}

			if (!(XUI::$rSettings['epg_api_extended'] == 2)) {
				goto label545;
			}

			goto label540;

			label596:
		}
	}

	label600:
}

label602:

goto label1361;

label603:
if (!($ee6d1fc5d801b43f && ($b62d6460eb33ea07->num_rows() == 1))) {
	goto label382;
}

$a2ebb817d88c810b = [];
$c34589bb44ab4b2a = ['action' => 'epg', 'id' => $b62d6460eb33ea07->get_row()['stationId'], 'days' => intval(XUI::$rSettings['epg_api_days_fetch']), 'keep' => intval(XUI::$rSettings['epg_api_days_keep'])];
$e02ff34f7d898a7b = Xui\Functions::getEPG('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0', $c34589bb44ab4b2a);
if (!(is_array($e02ff34f7d898a7b) && (0 < count($e02ff34f7d898a7b)))) {
	goto label372;
}

goto label220;

label648:

$F56066ad7b074468 = time();

if (!(count($argv) == 3)) {
	goto label1272;
}

$ee6d1fc5d801b43f = intval($argv[1]);
$b39b8fa9afa1ec53 = $argv[2];
$b62d6460eb33ea07->query('SELECT `stationId` FROM `epg_api` WHERE `callSign` = ?;', $b39b8fa9afa1ec53);
goto label603;

label670:

$Bb3d8077cb1c5d12 = getbouquetgroups();

foreach ($Bb3d8077cb1c5d12 as $f155fef57262b32a => $F1b4a4ff1e7ef41c) {
	goto label862;

	label678:

	$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();

	foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
		goto label689;

		label686:

		goto label819;

		label689:
		if (!(!isset($F6fe22994a2a6b63[$Fb9da1713bff19ce['channel_id']]) || !in_array($Fb9da1713bff19ce['start'], $F6fe22994a2a6b63[$Fb9da1713bff19ce['channel_id']]))) {
			goto label745;
		}

		if (isset($F6fe22994a2a6b63[$Fb9da1713bff19ce['channel_id']])) {
			goto label716;
		}

		$F6fe22994a2a6b63[$Fb9da1713bff19ce['channel_id']] = [];

		label716:

		$F6fe22994a2a6b63[$Fb9da1713bff19ce['channel_id']][] = $Fb9da1713bff19ce['start'];
		goto label748;

		label724:

		$d094d3e133ec8c03 .= "\t" . '<programme start="' . $bcfd61adc96d4b72 . '" stop="' . $b54a5805c0b9816e . '" start_timestamp="' . $Fb9da1713bff19ce['start'] . '" stop_timestamp="' . $Fb9da1713bff19ce['end'] . '" channel="' . $b39b8fa9afa1ec53 . '" >' . "\n";
		$d094d3e133ec8c03 .= "\t\t" . '<title>' . $b87030f28ff32396 . '</title>' . "\n";
		$d094d3e133ec8c03 .= "\t\t" . '<desc>' . $a9f2d703ffa3530f . '</desc>' . "\n";
		$d094d3e133ec8c03 .= "\t" . '</programme>' . "\n";

		label745:

		goto label686;

		label748:

		$b87030f28ff32396 = htmlspecialchars($Fb9da1713bff19ce['title'], ENT_XML1 | ENT_QUOTES | ENT_DISALLOWED, 'UTF-8');
		$a9f2d703ffa3530f = htmlspecialchars($Fb9da1713bff19ce['description'], ENT_XML1 | ENT_QUOTES | ENT_DISALLOWED, 'UTF-8');
		$b39b8fa9afa1ec53 = htmlspecialchars($Fb9da1713bff19ce['channel_id'], ENT_XML1 | ENT_QUOTES | ENT_DISALLOWED, 'UTF-8');
		$bcfd61adc96d4b72 = date('YmdHis', $Fb9da1713bff19ce['start']) . ' ' . str_replace(':', '', date('P'));
		$b54a5805c0b9816e = date('YmdHis', $Fb9da1713bff19ce['end']) . ' ' . str_replace(':', '', date('P'));
		goto label724;

		label819:
	}

	unset($F6fe22994a2a6b63);

	label822:

	goto label1042;

	label824:

	$fa4629d757fa3640 = array_unique($fa4629d757fa3640);

	if (!(0 < count($fa4629d757fa3640))) {
		goto label822;
	}

	if (in_array($Fb9da1713bff19ce['epg_id'] . '_' . $Fb9da1713bff19ce['channel_id'], $F1fa02f122ed277e)) {
		goto label1077;
	}

	$b62d6460eb33ea07->query('SELECT * FROM `epg_data` WHERE `epg_id` IN (' . implode(',', array_map('intval', $fa4629d757fa3640)) . ') AND `end` >= UNIX_TIMESTAMP();');
	goto label1075;

	label862:
	if (!((0 < strlen($f155fef57262b32a)) && ((0 < count($F1b4a4ff1e7ef41c['streams'])) || ($f155fef57262b32a == 'all')))) {
		goto label1013;
	}

	$d094d3e133ec8c03 = '';
	$D8d609d5bdc92a03 = htmlspecialchars(XUI::$rSettings['server_name'], ENT_XML1 | ENT_QUOTES | ENT_DISALLOWED, 'UTF-8');
	$d094d3e133ec8c03 .= '<?xml version="1.0" encoding="utf-8" ?><!DOCTYPE tv SYSTEM "xmltv.dtd">' . "\n";
	$d094d3e133ec8c03 .= '<tv generator-info-name="' . $D8d609d5bdc92a03 . '">' . "\n";
	goto label1015;

	label901:

	$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();
	$fa4629d757fa3640 = [];
	$F1fa02f122ed277e = [];

	foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
		goto label950;

		label911:

		$d094d3e133ec8c03 .= "\t" . '</channel>' . "\n";
		$fa4629d757fa3640[] = $Fb9da1713bff19ce['epg_id'];
		goto label993;

		label918:

		$b39b8fa9afa1ec53 = htmlspecialchars($Fb9da1713bff19ce['channel_id'], ENT_XML1 | ENT_QUOTES | ENT_DISALLOWED, 'UTF-8');
		$d094d3e133ec8c03 .= "\t" . '<channel id="' . $b39b8fa9afa1ec53 . '">' . "\n";
		$d094d3e133ec8c03 .= "\t\t" . '<display-name>' . $B7bbd17ec35a49aa . '</display-name>' . "\n";

		if (empty($Fb9da1713bff19ce['stream_icon'])) {
			goto label911;
		}

		$d094d3e133ec8c03 .= "\t\t" . '<icon src="' . $c60c238a4089e36c . '" />' . "\n";
		goto label911;

		label950:

		if (!(0 < $Fb9da1713bff19ce['tv_archive_duration'])) {
			goto label963;
		}

		$F1fa02f122ed277e[] = $Fb9da1713bff19ce['epg_id'] . '_' . $Fb9da1713bff19ce['channel_id'];

		label963:

		$B7bbd17ec35a49aa = htmlspecialchars($Fb9da1713bff19ce['stream_display_name'], ENT_XML1 | ENT_QUOTES | ENT_DISALLOWED, 'UTF-8');
		$c60c238a4089e36c = htmlspecialchars(XUI::FCA722697178454b($Fb9da1713bff19ce['stream_icon']), ENT_XML1 | ENT_QUOTES | ENT_DISALLOWED, 'UTF-8');
		goto label918;

		label993:
	}

	goto label824;

	label997:

	gzclose($D6be258a9043b749);
	if (!(($f155fef57262b32a == 'all') && (10485760 < strlen($d094d3e133ec8c03)))) {
		goto label1013;
	}

	goto label1095;

	label1013:

	goto label1040;

	label1015:

	if ($f155fef57262b32a == 'all') {
		goto label1035;
	}

	$b62d6460eb33ea07->query('SELECT `stream_display_name`,`stream_icon`,`channel_id`,`epg_id`,`tv_archive_duration` FROM `streams` WHERE `epg_id` IS NOT NULL AND `channel_id` IS NOT NULL AND `id` IN (' . implode(',', array_map('intval', $F1b4a4ff1e7ef41c['streams'])) . ');');
	goto label901;

	label1035:

	$b62d6460eb33ea07->query('SELECT `stream_display_name`,`stream_icon`,`channel_id`,`epg_id`,`tv_archive_duration` FROM `streams` WHERE `epg_id` IS NOT NULL AND `channel_id` IS NOT NULL;');
	goto label901;

	label1040:

	goto label1093;

	label1042:

	$d094d3e133ec8c03 .= '</tv>';
	$F1f920a95ec58b3c = ($f155fef57262b32a == 'all' ? 'all' : md5($f155fef57262b32a));
	file_put_contents(EPG_PATH . 'epg_' . $F1f920a95ec58b3c . '.xml', $d094d3e133ec8c03);
	$D6be258a9043b749 = gzopen(EPG_PATH . 'epg_' . $F1f920a95ec58b3c . '.xml.gz', 'w9');
	gzwrite($D6be258a9043b749, $d094d3e133ec8c03);
	goto label997;

	label1075:

	goto label1090;

	label1077:

	$b62d6460eb33ea07->query('SELECT * FROM `epg_data` WHERE `epg_id` IN (' . implode(',', array_map('intval', $fa4629d757fa3640)) . ');');

	label1090:

	$F6fe22994a2a6b63 = [];
	goto label678;

	label1093:
}

label1095:

$E7a3167b9fe69b2d = [];
$b62d6460eb33ea07->query('SELECT `id`, `epg_id`, `channel_id` FROM `streams` WHERE `type` = 1 AND `epg_id` IS NOT NULL AND `channel_id` IS NOT NULL;');
goto label134;

label1100:

$A1337727c59c9463 = intval(XUI::$rSettings['epg_api_days_fetch']);
$bc0a92a4c2d0025c = intval(XUI::$rSettings['epg_api_days_keep']);
$A5a4a57a12bb19b3 = Xui\Functions::getEPGChannels('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0');
$c5de1126fb49c6dd = $bd9f37da0d424293 = [];
if (is_array($A5a4a57a12bb19b3) && (0 < count($A5a4a57a12bb19b3))) {
	goto label1317;
}

goto label1293;

label1130:

$b39b8fa9afa1ec53 = $ee6d1fc5d801b43f = $E7cba019ce58e458 = NULL;

if (!(count($argv) == 2)) {
	goto label1145;
}

$E7cba019ce58e458 = intval($argv[1]);

label1145:

goto label1318;

label1146:

$b1eed3fdb609052d = $b62d6460eb33ea07->get_rows();

foreach ($b1eed3fdb609052d as $ba2d146bb5a55097) {
	goto label1181;

	label1153:

	$b62d6460eb33ea07->query('SELECT t1.`channel_id`, t1.`epg_lang`, t1.`epg_offset`, last_row.start FROM `streams` t1 LEFT JOIN (SELECT channel_id, MAX(`start`) as start FROM epg_data WHERE epg_id = ? GROUP BY channel_id) last_row ON last_row.channel_id = t1.channel_id WHERE `epg_id` = ?;', $ba2d146bb5a55097['epg_id'], $ba2d146bb5a55097['epg_id']);
	$A5a4a57a12bb19b3 = $b62d6460eb33ea07->get_rows(true, 'channel_id');
	$B8630a7c92543099 = $a2ebb817d88c810b->a6Ab1bb29714429d($ba2d146bb5a55097['epg_id'], $A5a4a57a12bb19b3, intval($ba2d146bb5a55097['offset']) ?: 0);
	$df6991d59f367c7e = 0;

	label1179:

	goto label1205;

	label1181:

	if (!($ba2d146bb5a55097['days_keep'] == 0)) {
		goto label1192;
	}

	$b62d6460eb33ea07->query('DELETE FROM `epg_data` WHERE `epg_id` = ?', $ba2d146bb5a55097['epg_id']);

	label1192:

	$a2ebb817d88c810b = new EPG($ba2d146bb5a55097['epg_file'], true);

	if (!$a2ebb817d88c810b->rValid) {
		goto label1236;
	}

	goto label1153;

	label1205:

	if (!($df6991d59f367c7e < count($B8630a7c92543099))) {
		goto label1228;
	}

	if (empty($B8630a7c92543099[$df6991d59f367c7e])) {
		goto label1222;
	}

	$b62d6460eb33ea07->simple_query('INSERT INTO `epg_data` (`epg_id`,`channel_id`,`start`,`end`,`lang`,`title`,`description`) VALUES ' . $B8630a7c92543099[$df6991d59f367c7e]);

	label1222:

	goto label1224;

	label1224:

	$df6991d59f367c7e++;
	goto label1179;

	label1228:

	$b62d6460eb33ea07->query('UPDATE `epg` SET `last_updated` = ? WHERE `id` = ?', time(), $ba2d146bb5a55097['epg_id']);

	label1236:

	goto label1238;

	label1238:

	if (!(0 < $ba2d146bb5a55097['days_keep'])) {
		goto label1257;
	}

	$b62d6460eb33ea07->query('DELETE FROM `epg_data` WHERE `epg_id` = ? AND `start` < ?', $ba2d146bb5a55097['epg_id'], strtotime('-' . $ba2d146bb5a55097['days_keep'] . ' days'));

	label1257:

	goto label1259;

	label1259:
}

$b62d6460eb33ea07->query('DELETE n1 FROM `epg_data` n1, `epg_data` n2 WHERE n1.id < n2.id AND n1.epg_id = n2.epg_id AND n1.channel_id = n2.channel_id AND n1.start = n2.start;');
shell_exec('rm -f ' . TMP_PATH . '*.xml');
goto label670;

label1271:

exit();

label1272:

shell_exec('kill -9 `ps -ef | grep \'XUI\\[EPG\\]\' | grep -v grep | awk \'{print $2}\'`;');
cli_set_process_title('XUI[EPG]');

if (!XUI::$rSettings['force_epg_timezone']) {
	goto label4;
}

goto label1;

label1284:

$b62d6460eb33ea07->query('SELECT DISTINCT(t1.`epg_id`), t2.* FROM `streams` t1 INNER JOIN `epg` t2 ON t2.id = t1.epg_id WHERE t1.`epg_id` IS NOT NULL;');
goto label1292;

label1288:

$b62d6460eb33ea07->query('SELECT DISTINCT(t1.`epg_id`), t2.* FROM `streams` t1 INNER JOIN `epg` t2 ON t2.id = t1.epg_id WHERE t1.`epg_id` IS NOT NULL AND t2.id = ?;', $E7cba019ce58e458);

label1292:

goto label1146;

label1293:

$b62d6460eb33ea07->query('SELECT `stationId`, `callSign` FROM `epg_api`;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$bd9f37da0d424293[$Fb9da1713bff19ce['callSign']] = intval($Fb9da1713bff19ce['stationId']);
	$c5de1126fb49c6dd[intval($Fb9da1713bff19ce['stationId'])] = $Fb9da1713bff19ce['callSign'];
}

goto label129;

label1317:

goto label85;

label1318:

set_time_limit(0);
ini_set('memory_limit', -1);
register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../www/init.php';
require INCLUDES_PATH . 'libs/XmlStringStreamer.php';
goto label648;

label1343:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label1354;
}

exit('Please run as XUI!' . "\n");

label1354:

if (@$argc) {
	goto label1130;
}

exit(0);
goto label1130;

label1361:

if (!(0 < $bc0a92a4c2d0025c)) {
	goto label1375;
}

$b62d6460eb33ea07->query('DELETE FROM `epg_data` WHERE `epg_id` = 0 AND `start` < ?', strtotime('-' . $bc0a92a4c2d0025c . ' days'));

label1375:

if ($E7cba019ce58e458) {
	goto label1288;
}

goto label1284;

label1378:

?>