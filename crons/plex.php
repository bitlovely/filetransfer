<?php


class Thread
{
	public $process;
	public $pipes;
	public $buffer;
	public $output;
	public $error;
	public $timeout;
	public $start_time;

	public function __construct()
	{
		$this->process = 0;
		$this->buffer = '';
		$this->pipes = (array) NULL;
		$this->output = '';
		$this->error = '';
		$this->start_time = time();
		$this->timeout = 0;
	}

	static public function create($cf988e3af7ebcffb)
	{
		$D1e413b10709f897 = new Thread();
		$E2cc6c6fff1ce8c5 = [
			['pipe', 'r'],
			['pipe', 'w'],
			['pipe', 'w']
		];
		$D1e413b10709f897->process = proc_open($cf988e3af7ebcffb, $E2cc6c6fff1ce8c5, $D1e413b10709f897->pipes);
		stream_set_blocking($D1e413b10709f897->pipes[1], 0);
		stream_set_blocking($D1e413b10709f897->pipes[2], 0);
		return $D1e413b10709f897;
	}

	public function isActive()
	{
		$this->buffer .= $this->listen();
		$F12e38f6df711850 = stream_get_meta_data($this->pipes[1]);
		return !$F12e38f6df711850['eof'];
	}

	public function close()
	{
		$Ad3bb587d14a74fe = proc_close($this->process);
		$this->process = NULL;
		return $Ad3bb587d14a74fe;
	}

	public function tell($d54465d2b0bf2a63)
	{
		fwrite($this->pipes[0], $d54465d2b0bf2a63);
	}

	public function listen()
	{
		$F14279e8832a15b5 = $this->buffer;
		$this->buffer = '';

		label4:

		if (!($Ad3bb587d14a74fe = fgets($this->pipes[1], 1024))) {
			goto label18;
		}

		$F14279e8832a15b5 .= $Ad3bb587d14a74fe;
		$this->output .= $Ad3bb587d14a74fe;
		goto label4;

		label18:

		return $F14279e8832a15b5;
	}

	public function getStatus()
	{
		return proc_get_status($this->process);
	}

	public function isBusy()
	{
		return (0 < $this->timeout) && (($this->start_time + $this->timeout) < time());
	}

	public function getError()
	{
		$F14279e8832a15b5 = '';

		label1:

		if (!($Ad3bb587d14a74fe = fgets($this->pipes[2], 1024))) {
			goto label13;
		}

		$F14279e8832a15b5 .= $Ad3bb587d14a74fe;
		goto label1;

		label13:

		return $F14279e8832a15b5;
	}
}

class Multithread
{
	public $output = [];
	public $error = [];
	public $thread;
	public $commands = [];
	public $hasPool = false;
	public $toExecuted = [];

	public function __construct($fa39b45a74ffac20, $A14d7cc13955b176 = 0)
	{
		$this->hasPool = 0 < $A14d7cc13955b176;

		if (!$this->hasPool) {
			goto label15;
		}

		$this->toExecuted = array_splice($fa39b45a74ffac20, $A14d7cc13955b176);

		label15:

		$this->commands = $fa39b45a74ffac20;

		foreach ($this->commands as $B9b6051782843c94 => $cf988e3af7ebcffb) {
			$this->thread[$B9b6051782843c94] = Thread::create($cf988e3af7ebcffb);
		}
	}

	public function run()
	{
		label0:

		if (!(0 < count($this->commands))) {
			goto label83;
		}

		foreach ($this->commands as $B9b6051782843c94 => $cf988e3af7ebcffb) {
			goto label45;

			label14:

			self::launchNextInQueue();
			goto label43;

			label18:

			$this->output[$B9b6051782843c94] .= $this->thread[$B9b6051782843c94]->listen();

			if (!$this->thread[$B9b6051782843c94]->isBusy()) {
				goto label43;
			}

			goto label35;

			label35:

			$this->thread[$B9b6051782843c94]->close();
			unset($this->commands[$B9b6051782843c94]);
			self::launchNextInQueue();

			label43:

			goto label78;

			label45:

			@$this->output[$B9b6051782843c94] .= $this->thread[$B9b6051782843c94]->listen();
			@$this->error[$B9b6051782843c94] .= $this->thread[$B9b6051782843c94]->getError();

			if ($this->thread[$B9b6051782843c94]->isActive()) {
				goto label18;
			}

			$this->thread[$B9b6051782843c94]->close();
			unset($this->commands[$B9b6051782843c94]);
			goto label14;

			label78:

			goto label80;

			label80:
		}

		goto label0;

		label83:

		return $this->output;
	}

	public function launchNextInQueue()
	{
		if (!(count($this->toExecuted) == 0)) {
			goto label9;
		}

		return true;

		label9:

		reset($this->toExecuted);
		$dfe1daa4437373e4 = key($this->toExecuted);
		$this->commands[$dfe1daa4437373e4] = $this->toExecuted[$dfe1daa4437373e4];
		$this->thread[$dfe1daa4437373e4] = Thread::create($this->toExecuted[$dfe1daa4437373e4]);
		unset($this->toExecuted[$dfe1daa4437373e4]);
	}
}

function makeArray($F647a429f8089f01)
{
	if (!isset($F647a429f8089f01['@attributes'])) {
		goto label7;
	}

	$F647a429f8089f01 = [$F647a429f8089f01];

	label7:

	return $F647a429f8089f01;
}

function getPlexCategories($A7d54b094ae83c95 = NULL)
{
	goto label18;

	label2:

	$b62d6460eb33ea07->query('SELECT * FROM `watch_categories` WHERE `type` = ? ORDER BY `genre_id` ASC;', $A7d54b094ae83c95);

	label6:

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[$Fb9da1713bff19ce['genre']] = $Fb9da1713bff19ce;
	}

	goto label16;

	label16:

	return $B9869413eae86beb;
	goto label27;

	label18:

	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];

	if ($A7d54b094ae83c95) {
		goto label2;
	}

	$b62d6460eb33ea07->query('SELECT * FROM `watch_categories` ORDER BY `genre_id` ASC;');
	goto label6;
	goto label2;

	label27:
}

function getPlexLogin($ff5cf44f96903d64, $fd093b5358e9a519)
{
	goto label3;

	label3:

	$df59d69b3ccd0f39 = ['Content-Type: application/xml; charset=utf-8', 'X-Plex-Client-Identifier: 526e163c-8dbd-11eb-8dcd-0242ac130003', 'X-Plex-Product: XUI', 'X-Plex-Version: v' . XUI_VERSION];
	$Daaec03d386c8f6a = curl_init('https://plex.tv/users/sign_in.json');
	curl_setopt($Daaec03d386c8f6a, CURLOPT_HTTPHEADER, $df59d69b3ccd0f39);
	curl_setopt($Daaec03d386c8f6a, CURLOPT_HEADER, 0);
	curl_setopt($Daaec03d386c8f6a, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	goto label34;

	label34:

	curl_setopt($Daaec03d386c8f6a, CURLOPT_USERPWD, $ff5cf44f96903d64 . ':' . $fd093b5358e9a519);
	curl_setopt($Daaec03d386c8f6a, CURLOPT_TIMEOUT, 30);
	curl_setopt($Daaec03d386c8f6a, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($Daaec03d386c8f6a, CURLOPT_POST, 1);
	curl_setopt($Daaec03d386c8f6a, CURLOPT_RETURNTRANSFER, true);
	goto label67;

	label67:

	return json_decode(curl_exec($Daaec03d386c8f6a), true);
	goto label76;

	label76:
}

function b47fB5320E43F112($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `bouquets` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label15;
	}

	return $b62d6460eb33ea07->get_row();

	label15:

	return NULL;
}

function checkCategories()
{
	global $b62d6460eb33ea07;
	$Cb61bff653722624 = ['movie' => getplexcategories(3), 'show' => getplexcategories(4)];
	$F771d40e8cf51e59 = glob(WATCH_TMP_PATH . '*.pcat');
	$edc59762fd5d367a = ['movie' => 1, 'show' => 1];
	$b62d6460eb33ea07->query('SELECT MAX(`genre_id`) AS `max` FROM `watch_categories` WHERE `type` = 3;');
	$edc59762fd5d367a['movie'] = intval($b62d6460eb33ea07->get_row()['max']);
	$b62d6460eb33ea07->query('SELECT MAX(`genre_id`) AS `max` FROM `watch_categories` WHERE `type` = 4;');
	$edc59762fd5d367a['show'] = intval($b62d6460eb33ea07->get_row()['max']);

	foreach ($F771d40e8cf51e59 as $E3688a7ac7097dc0) {
		$Dbcac322b4274e46 = json_decode(file_get_contents($E3688a7ac7097dc0), true);

		if (in_array($Dbcac322b4274e46['title'], array_keys($Cb61bff653722624[$Dbcac322b4274e46['type']]))) {
			goto label78;
		}

		$edc59762fd5d367a[$Dbcac322b4274e46['type']] += 1;
		$b62d6460eb33ea07->query('INSERT INTO `watch_categories` (`type`, `genre_id`, `genre`, `category_id`, `bouquets`) VALUES (?, ?, ?, 0, \'[]\');', ['movie' => 3, 'show' => 4][$Dbcac322b4274e46['type']], $edc59762fd5d367a[$Dbcac322b4274e46['type']], $Dbcac322b4274e46['title']);

		label78:

		unlink($E3688a7ac7097dc0);
	}
}

function checkBouquets()
{
	global $b62d6460eb33ea07;
	$d1771326d0dd8cae = [];
	$Df5cd7b5dc4cc10c = glob(WATCH_TMP_PATH . '*.pbouquet');

	foreach ($Df5cd7b5dc4cc10c as $f02c1513f71000c0) {
		$f155fef57262b32a = json_decode(file_get_contents($f02c1513f71000c0), true);

		if (isset($d1771326d0dd8cae[$f155fef57262b32a['bouquet_id']])) {
			goto label26;
		}

		$d1771326d0dd8cae[$f155fef57262b32a['bouquet_id']] = [
			'movie'  => [],
			'series' => []
		];

		label26:

		$d1771326d0dd8cae[$f155fef57262b32a['bouquet_id']][$f155fef57262b32a['type']][] = $f155fef57262b32a['id'];
		unlink($f02c1513f71000c0);
	}

	foreach ($d1771326d0dd8cae as $b5fd3e3f0096d7f4 => $edc2e948fe0884ca) {
		$f155fef57262b32a = b47fb5320e43f112($b5fd3e3f0096d7f4);

		if (!$f155fef57262b32a) {
			goto label125;
		}

		foreach (array_keys($edc2e948fe0884ca) as $A7d54b094ae83c95) {
			goto label57;

			label57:

			if ($A7d54b094ae83c95 == 'movie') {
				goto label66;
			}

			$E8d2f47901b176c3 = 'bouquet_series';
			goto label70;

			label66:

			$E8d2f47901b176c3 = 'bouquet_movies';
			goto label70;

			label70:

			$A5a4a57a12bb19b3 = json_decode($f155fef57262b32a[$E8d2f47901b176c3], true);

			foreach ($edc2e948fe0884ca[$A7d54b094ae83c95] as $Abcb228699a7f743) {
				if (!((0 < intval($Abcb228699a7f743)) && !in_array($Abcb228699a7f743, $A5a4a57a12bb19b3))) {
					goto label98;
				}

				$A5a4a57a12bb19b3[] = $Abcb228699a7f743;

				label98:
			}

			$b62d6460eb33ea07->query('UPDATE `bouquets` SET `' . $E8d2f47901b176c3 . '` = ? WHERE `id` = ?;', '[' . implode(',', array_map('intval', $A5a4a57a12bb19b3)) . ']', $b5fd3e3f0096d7f4);
			goto label120;

			label120:

			goto label123;

			label123:
		}

		label125:
	}
}

function readURL($A7ca171405b19571)
{
	$Daaec03d386c8f6a = curl_init($A7ca171405b19571);
	curl_setopt($Daaec03d386c8f6a, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($Daaec03d386c8f6a, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($Daaec03d386c8f6a, CURLOPT_TIMEOUT, 10);
	return curl_exec($Daaec03d386c8f6a);
}

function checkToken($b38e11ffdc6a3abb, $e5bebfb39a19fe80, $B259c62825689c1b)
{
	$dd5fbd2de027deae = 'http://' . $b38e11ffdc6a3abb . ':' . $e5bebfb39a19fe80 . '/myplex/account?X-Plex-Token=' . $B259c62825689c1b;
	$Fca04b1755da7bd5 = json_decode(json_encode(simplexml_load_string(readurl($dd5fbd2de027deae))), true);
	return $Fca04b1755da7bd5['@attributes']['signInState'] == 'ok' ? $B259c62825689c1b : '';
}

function aB8369074Df2AAA3()
{
	goto label903;

	label1:

	unset($aec63aeec8c189ba, $a80a833cd1bc61c1);
	echo 'Finished generating cache!' . "\n";

	label4:

	goto label248;

	label5:

	foreach ($aec63aeec8c189ba['movie'] as $D7f17b03d6498825 => $ba2d146bb5a55097) {
		file_put_contents(WATCH_TMP_PATH . 'movie_' . $D7f17b03d6498825 . '.pcache', json_encode($ba2d146bb5a55097));
	}

	foreach ($a80a833cd1bc61c1['series'] as $d646ff8e6c81b7df => $ba2d146bb5a55097) {
		file_put_contents(WATCH_TMP_PATH . 'series_' . $d646ff8e6c81b7df . '.pcache', json_encode($ba2d146bb5a55097));
	}

	foreach ($a80a833cd1bc61c1['movie'] as $d646ff8e6c81b7df => $ba2d146bb5a55097) {
		file_put_contents(WATCH_TMP_PATH . 'movie_' . $d646ff8e6c81b7df . '.pcache', json_encode($ba2d146bb5a55097));
	}

	goto label1;

	label57:

	$a80a833cd1bc61c1 = [
		'movie'  => [],
		'series' => []
	];
	echo 'Generating cache...' . "\n";
	$b62d6460eb33ea07->query('SELECT `id`, `tmdb_id`, `plex_uuid` FROM `streams_series` WHERE `tmdb_id` IS NOT NULL AND `tmdb_id` > 0;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$C97006f5b7ae07ee[$Fb9da1713bff19ce['id']] = $Fb9da1713bff19ce['tmdb_id'];

		if (empty($Fb9da1713bff19ce['plex_uuid'])) {
			goto label77;
		}

		$d5649ba25d2e07d4[] = $Fb9da1713bff19ce['plex_uuid'];

		label77:
	}

	goto label116;

	label80:

	$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();

	if (!(0 < count($D8e7681dfae2905b))) {
		goto label4;
	}

	shell_exec('rm -f ' . WATCH_TMP_PATH . '*.ppid');
	$Cff44c7735cd7608 = $d5649ba25d2e07d4 = $C97006f5b7ae07ee = $Cc94312f13005bd4 = [];
	$aec63aeec8c189ba = [
		'movie'  => [],
		'series' => []
	];
	goto label57;

	label102:

	$b62d6460eb33ea07->query('SELECT * FROM `watch_folders` WHERE `type` = \'plex\' AND `server_id` = ? AND `id` = ?;', SERVER_ID, $ebb4852f69f0dca0);
	goto label115;

	label109:

	$b62d6460eb33ea07->query('SELECT * FROM `watch_folders` WHERE `type` = \'plex\' AND `server_id` = ? AND `active` = 1 AND (UNIX_TIMESTAMP() - `last_run` > ? OR `last_run` IS NULL) ORDER BY `id` ASC;', SERVER_ID, $D3e21fcef5b5b9c7);

	label115:

	goto label80;

	label116:

	$b62d6460eb33ea07->query('SELECT `streams`.`id`, `streams_series`.`plex_uuid`, `streams_episodes`.`series_id`, `streams_episodes`.`season_num`, `streams_episodes`.`episode_num`, `streams`.`stream_source` FROM `streams_episodes` LEFT JOIN `streams` ON `streams`.`id` = `streams_episodes`.`stream_id` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` LEFT JOIN `streams_series` ON `streams_series`.`id` = `streams_episodes`.`series_id` WHERE `streams_servers`.`server_id` = ?;', SERVER_ID);

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		goto label127;

		label127:

		$Cc94312f13005bd4[] = $Fb9da1713bff19ce['stream_source'];
		$D7f17b03d6498825 = $C97006f5b7ae07ee[$Fb9da1713bff19ce['series_id']] ?: NULL;
		$fd51b5505224fc7c = json_decode($Fb9da1713bff19ce['stream_source'], true)[0];

		if (!$D7f17b03d6498825) {
			goto label159;
		}

		$aec63aeec8c189ba['series'][$D7f17b03d6498825][$Fb9da1713bff19ce['season_num'] . '_' . $Fb9da1713bff19ce['episode_num']] = ['id' => $Fb9da1713bff19ce['id'], 'source' => $fd51b5505224fc7c];
		goto label159;

		label159:

		if (empty($Fb9da1713bff19ce['plex_uuid'])) {
			goto label179;
		}

		$a80a833cd1bc61c1['series'][$Fb9da1713bff19ce['plex_uuid']][$Fb9da1713bff19ce['season_num'] . '_' . $Fb9da1713bff19ce['episode_num']] = ['id' => $Fb9da1713bff19ce['id'], 'source' => $fd51b5505224fc7c];
		$Cff44c7735cd7608[$Fb9da1713bff19ce['plex_uuid']]++;

		label179:

		goto label181;

		label181:

		goto label183;

		label183:
	}

	$b62d6460eb33ea07->query('SELECT `streams`.`id`, `streams`.`plex_uuid`, `streams`.`stream_source`, `streams`.`movie_properties` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` WHERE `streams`.`type` = 2 AND `streams_servers`.`server_id` = ?;', SERVER_ID);

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		goto label198;

		label196:

		goto label245;

		label198:

		$Cc94312f13005bd4[] = $Fb9da1713bff19ce['stream_source'];
		$D7f17b03d6498825 = json_decode($Fb9da1713bff19ce['movie_properties'], true)['tmdb_id'] ?: NULL;
		$fd51b5505224fc7c = json_decode($Fb9da1713bff19ce['stream_source'], true)[0];

		if (!$D7f17b03d6498825) {
			goto label229;
		}

		$aec63aeec8c189ba['movie'][$D7f17b03d6498825] = ['id' => $Fb9da1713bff19ce['id'], 'source' => $fd51b5505224fc7c];
		goto label229;

		label229:

		if (empty($Fb9da1713bff19ce['plex_uuid'])) {
			goto label243;
		}

		$a80a833cd1bc61c1['movie'][$Fb9da1713bff19ce['plex_uuid']] = ['id' => $Fb9da1713bff19ce['id'], 'source' => $fd51b5505224fc7c];
		$d5649ba25d2e07d4[] = $Fb9da1713bff19ce['plex_uuid'];

		label243:

		goto label196;

		label245:
	}

	goto label870;

	label248:

	foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
		goto label289;

		label252:

		goto label313;

		label254:

		$B259c62825689c1b = checktoken($Fb9da1713bff19ce['plex_ip'], $Fb9da1713bff19ce['plex_port'], $ba2d146bb5a55097['user']['authToken']);

		label264:

		$b62d6460eb33ea07->query('UPDATE `watch_folders` SET `last_run` = UNIX_TIMESTAMP(), `plex_token` = ? WHERE `id` = ?;', $B259c62825689c1b, $Fb9da1713bff19ce['id']);
		goto label272;

		label272:

		if ($B259c62825689c1b) {
			goto label278;
		}

		echo 'Could not connect to Plex server and obtain a valid token.';
		goto label783;

		label278:

		$D2b1e4678d3b67eb = 'http://' . $Fb9da1713bff19ce['plex_ip'] . ':' . $Fb9da1713bff19ce['plex_port'] . '/library/sections?X-Plex-Token=' . $B259c62825689c1b;
		goto label328;

		label289:

		$Cc2b5dfe75dc164b = 100;
		$b036a2bf442dddad = [];
		$B259c62825689c1b = NULL;

		if (empty($Fb9da1713bff19ce['plex_token'])) {
			goto label849;
		}

		$B259c62825689c1b = checktoken($Fb9da1713bff19ce['plex_ip'], $Fb9da1713bff19ce['plex_port'], $Fb9da1713bff19ce['plex_token']);
		goto label849;

		label307:

		$b62d6460eb33ea07->db_connect();
		checkbouquets();
		checkcategories();

		label313:

		goto label867;

		label315:

		$D312762364397467->run();
		goto label307;

		label319:

		foreach ($Ed7935619de087d2 as $C6671ac66a4f1c57) {
			shell_exec($C6671ac66a4f1c57);
		}

		goto label307;

		label328:

		$A6cb59980ac73dff = json_decode(json_encode(simplexml_load_string(readurl($D2b1e4678d3b67eb))), true);
		$Ee78463923199005 = 1;

		foreach (makearray($A6cb59980ac73dff['Directory']) as $a55c3794b0e1c2ec) {
			goto label713;

			label352:

			goto label765;

			label355:

			$Bb672d1983256a93 = $a55c3794b0e1c2ec['@attributes']['key'];

			if (!($Bb672d1983256a93 == $Fb9da1713bff19ce['directory'])) {
				goto label352;
			}

			$Ac358076dc42c98c = 'http://' . $Fb9da1713bff19ce['plex_ip'] . ':' . $Fb9da1713bff19ce['plex_port'] . '/library/sections/' . $Bb672d1983256a93 . '/all?X-Plex-Token=' . $B259c62825689c1b . '&X-Plex-Container-Start=0&X-Plex-Container-Size=1';
			$d353a4da8a0bb857 = intval(json_decode(json_encode(simplexml_load_string(readurl($Ac358076dc42c98c))), true)['@attributes']['totalSize']) ?: 0;
			goto label742;

			label402:

			foreach ($C455840d1f015c68 as $bcfd61adc96d4b72) {
				$B004b0adc08cfce1 = 'http://' . $Fb9da1713bff19ce['plex_ip'] . ':' . $Fb9da1713bff19ce['plex_port'] . '/library/sections/' . $Bb672d1983256a93 . '/all?X-Plex-Token=' . $B259c62825689c1b . '&X-Plex-Container-Start=' . $bcfd61adc96d4b72 . '&X-Plex-Container-Size=' . $Cc2b5dfe75dc164b . '&sort=updatedAt%3Adesc';
				$e48a3195e981780e = json_decode(json_encode(simplexml_load_string(readurl($B004b0adc08cfce1))), true);

				if (isset($e48a3195e981780e['Video'])) {
					goto label443;
				}

				$e48a3195e981780e['Video'] = $e48a3195e981780e['Directory'];

				label443:

				foreach (makearray($e48a3195e981780e['Video']) as $B4a603c2a57d3acf) {
					goto label518;

					label454:

					goto label513;

					label459:

					$b036a2bf442dddad[] = ['folder_id' => $Fb9da1713bff19ce['id'], 'type' => $a55c3794b0e1c2ec['@attributes']['type'], 'key' => $B4a603c2a57d3acf['@attributes']['ratingKey'], 'uuid' => $c6407c71209d9290, 'plex_categories' => $Cb61bff653722624, 'read_native' => $Fb9da1713bff19ce['read_native'], 'movie_symlink' => $Fb9da1713bff19ce['movie_symlink'], 'remove_subtitles' => $Fb9da1713bff19ce['remove_subtitles'], 'auto_encode' => $Fb9da1713bff19ce['auto_encode'], 'auto_upgrade' => $Fb9da1713bff19ce['auto_upgrade'], 'transcode_profile_id' => $Fb9da1713bff19ce['transcode_profile_id'], 'max_genres' => intval(XUI::$rSettings['max_genres']), 'plex' => true, 'ip' => $Fb9da1713bff19ce['plex_ip'], 'port' => $Fb9da1713bff19ce['plex_port'], 'token' => $B259c62825689c1b, 'fb_bouquets' => $Fb9da1713bff19ce['fb_bouquets'], 'store_categories' => $Fb9da1713bff19ce['store_categories'], 'category_id' => $Fb9da1713bff19ce['category_id'], 'bouquets' => $Fb9da1713bff19ce['bouquets'], 'fb_category_id' => $Fb9da1713bff19ce['fb_category_id'], 'check_tmdb' => $Fb9da1713bff19ce['check_tmdb'], 'target_container' => $Fb9da1713bff19ce['target_container'], 'server_add' => $Fb9da1713bff19ce['server_add'], 'direct_proxy' => $Fb9da1713bff19ce['direct_proxy']];

					label513:

					goto label626;

					label518:

					$c6407c71209d9290 = $Bb672d1983256a93 . '_' . $B4a603c2a57d3acf['@attributes']['ratingKey'];

					if ($a55c3794b0e1c2ec['@attributes']['type'] == 'movie') {
						goto label636;
					}
					if (!(!$Fb9da1713bff19ce['last_run'] || !$B4a603c2a57d3acf['@attributes']['updatedAt'] || ($Fb9da1713bff19ce['last_run'] < intval($B4a603c2a57d3acf['@attributes']['updatedAt'])) || (isset($Cff44c7735cd7608[$c6407c71209d9290]) && ($Cff44c7735cd7608[$c6407c71209d9290] != $B4a603c2a57d3acf['@attributes']['leafCount'])) || $Fb9da1713bff19ce['scan_missing'])) {
						goto label621;
					}

					$b036a2bf442dddad[] = ['folder_id' => $Fb9da1713bff19ce['id'], 'type' => $a55c3794b0e1c2ec['@attributes']['type'], 'key' => $B4a603c2a57d3acf['@attributes']['ratingKey'], 'uuid' => $c6407c71209d9290, 'plex_categories' => $Cb61bff653722624, 'read_native' => $Fb9da1713bff19ce['read_native'], 'movie_symlink' => $Fb9da1713bff19ce['movie_symlink'], 'remove_subtitles' => $Fb9da1713bff19ce['remove_subtitles'], 'auto_encode' => $Fb9da1713bff19ce['auto_encode'], 'auto_upgrade' => $Fb9da1713bff19ce['auto_upgrade'], 'transcode_profile_id' => $Fb9da1713bff19ce['transcode_profile_id'], 'max_genres' => intval(XUI::$rSettings['max_genres']), 'plex' => true, 'ip' => $Fb9da1713bff19ce['plex_ip'], 'port' => $Fb9da1713bff19ce['plex_port'], 'token' => $B259c62825689c1b, 'fb_bouquets' => $Fb9da1713bff19ce['fb_bouquets'], 'store_categories' => $Fb9da1713bff19ce['store_categories'], 'category_id' => $Fb9da1713bff19ce['category_id'], 'bouquets' => $Fb9da1713bff19ce['bouquets'], 'fb_category_id' => $Fb9da1713bff19ce['fb_category_id'], 'check_tmdb' => $Fb9da1713bff19ce['check_tmdb'], 'target_container' => $Fb9da1713bff19ce['target_container'], 'server_add' => $Fb9da1713bff19ce['server_add'], 'direct_proxy' => $Fb9da1713bff19ce['direct_proxy']];

					label621:

					goto label631;

					label626:

					goto label703;

					label631:

					goto label626;

					label636:
					if (!$Fb9da1713bff19ce['last_run'] || !$B4a603c2a57d3acf['@attributes']['updatedAt'] || ($Fb9da1713bff19ce['last_run'] < intval($B4a603c2a57d3acf['@attributes']['updatedAt'])) || (!in_array($c6407c71209d9290, $d5649ba25d2e07d4) && $Fb9da1713bff19ce['scan_missing'])) {
						goto label459;
					}
					if (!($Fb9da1713bff19ce['last_run'] && $B4a603c2a57d3acf['@attributes']['updatedAt'] && (intval($B4a603c2a57d3acf['@attributes']['updatedAt']) <= $Fb9da1713bff19ce['last_run']) && !$Fb9da1713bff19ce['scan_missing'])) {
						goto label454;
					}

					goto label707;
					goto label454;

					label703:
				}
			}

			label707:

			goto label767;
			goto label352;

			label713:

			if ($a55c3794b0e1c2ec['@attributes']['type'] == 'movie') {
				goto label731;
			}

			$Ee78463923199005 = intval(XUI::$rSettings['thread_count_show']) ?: 5;
			goto label355;

			label731:

			$Ee78463923199005 = intval(XUI::$rSettings['thread_count_movie']) ?: 25;
			goto label355;

			label742:

			echo 'Count: ' . $d353a4da8a0bb857 . "\n";

			if (!(0 < $d353a4da8a0bb857)) {
				goto label707;
			}

			$C455840d1f015c68 = range(0, $d353a4da8a0bb857, $Cc2b5dfe75dc164b);

			if ($C455840d1f015c68) {
				goto label402;
			}

			$C455840d1f015c68 = [0];
			goto label402;

			label765:
		}

		label767:

		if (!(0 < count($b036a2bf442dddad))) {
			goto label783;
		}

		goto label777;

		label777:

		echo 'Scan complete! Adding ' . count($b036a2bf442dddad) . ' files...' . "\n";

		label783:

		$Ed7935619de087d2 = [];

		foreach ($b036a2bf442dddad as $ba2d146bb5a55097) {
			if ($ba2d146bb5a55097['type'] == 'movie') {
				goto label812;
			}

			$C6671ac66a4f1c57 = '/usr/bin/timeout 300 ' . PHP_BIN . ' ' . INCLUDES_PATH . 'cli/plex_item.php "' . base64_encode(json_encode($ba2d146bb5a55097, JSON_UNESCAPED_UNICODE)) . '"';
			goto label829;

			label812:

			$C6671ac66a4f1c57 = '/usr/bin/timeout 20 ' . PHP_BIN . ' ' . INCLUDES_PATH . 'cli/plex_item.php "' . base64_encode(json_encode($ba2d146bb5a55097, JSON_UNESCAPED_UNICODE)) . '"';

			label829:

			$Ed7935619de087d2[] = $C6671ac66a4f1c57;
		}

		goto label835;

		label835:

		unset($b036a2bf442dddad);
		$b62d6460eb33ea07->close_mysql();

		if ($Ee78463923199005 <= 1) {
			goto label319;
		}

		$D312762364397467 = new Multithread($Ed7935619de087d2, $Ee78463923199005);
		goto label315;

		label849:

		if ($B259c62825689c1b) {
			goto label264;
		}

		$ba2d146bb5a55097 = getplexlogin($Fb9da1713bff19ce['plex_username'], $Fb9da1713bff19ce['plex_password']);

		if (isset($ba2d146bb5a55097['user']['authToken'])) {
			goto label254;
		}

		echo 'Failed to login to plex!' . "\n";
		goto label252;

		label867:
	}

	goto label923;

	label870:

	exec('find ' . WATCH_TMP_PATH . ' -maxdepth 1 -name "*.pcache" -print0 | xargs -0 rm');
	file_put_contents(WATCH_TMP_PATH . 'stream_database.pcache', json_encode($Cc94312f13005bd4));

	foreach ($aec63aeec8c189ba['series'] as $D7f17b03d6498825 => $ba2d146bb5a55097) {
		file_put_contents(WATCH_TMP_PATH . 'series_' . $D7f17b03d6498825 . '.pcache', json_encode($ba2d146bb5a55097));
	}

	goto label5;

	label903:

	global $b62d6460eb33ea07;
	global $D3e21fcef5b5b9c7;
	global $ebb4852f69f0dca0;
	$Cb61bff653722624 = [3 => getplexcategories(3), 4 => getplexcategories(4)];
	checkbouquets();
	checkcategories();

	if (!$ebb4852f69f0dca0) {
		goto label109;
	}

	goto label102;

	label923:
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

goto label124;

label1:

require str_replace('\\', '/', dirname($argv[0])) . '/../www/init.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(30711);
goto label71;

label25:

if (!(strlen(XUI::$rSettings['tmdb_api_key']) == 0)) {
	goto label35;
}

exit('No TMDb API key.');

label35:

goto label148;

label38:

file_put_contents(CACHE_TMP_PATH . 'plex_pid', getmypid());
cli_set_process_title('XUI[Plex Sync]');
$D3e21fcef5b5b9c7 = intval(XUI::$rSettings['scan_seconds']) ?: 3600;
set_time_limit(0);
goto label25;

label61:

if (@$argc) {
	goto label67;
}

exit(0);

label67:

register_shutdown_function('shutdown');
goto label1;

label71:

$ebb4852f69f0dca0 = NULL;

if (!(count($argv) == 2)) {
	goto label84;
}

$ebb4852f69f0dca0 = intval($argv[1]);

label84:

if ($ebb4852f69f0dca0) {
	goto label38;
}

goto label99;

label87:
if (!($af3fb7e07a56c784 && XUI::E764f10E99c26365($af3fb7e07a56c784, 'php'))) {
	goto label98;
}

echo 'Plex Sync is already running. Please wait until it finishes.' . "\n";
exit();

label98:

goto label38;

label99:

if (file_exists(CACHE_TMP_PATH . 'plex_pid')) {
	goto label108;
}

$af3fb7e07a56c784 = NULL;
goto label87;

label108:

$af3fb7e07a56c784 = intval(file_get_contents(CACHE_TMP_PATH . 'plex_pid'));
goto label87;

label118:

Ab8369074dF2aAA3();
goto label154;

label124:

ini_set('memory_limit', -1);
setlocale(LC_ALL, 'en_US.UTF-8');
putenv('LC_ALL=en_US.UTF-8');

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label61;
}

exit('Please run as XUI!' . "\n");
goto label61;

label148:

goto label118;

label154:

?>