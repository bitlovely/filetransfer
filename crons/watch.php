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
			goto label37;

			label14:

			goto label80;

			label16:

			self::launchNextInQueue();
			goto label78;

			label20:

			$this->output[$B9b6051782843c94] .= $this->thread[$B9b6051782843c94]->listen();

			if (!$this->thread[$B9b6051782843c94]->isBusy()) {
				goto label78;
			}

			goto label70;

			label37:

			@$this->output[$B9b6051782843c94] .= $this->thread[$B9b6051782843c94]->listen();
			@$this->error[$B9b6051782843c94] .= $this->thread[$B9b6051782843c94]->getError();

			if ($this->thread[$B9b6051782843c94]->isActive()) {
				goto label20;
			}

			$this->thread[$B9b6051782843c94]->close();
			unset($this->commands[$B9b6051782843c94]);
			goto label16;

			label70:

			$this->thread[$B9b6051782843c94]->close();
			unset($this->commands[$B9b6051782843c94]);
			self::launchNextInQueue();

			label78:

			goto label14;

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

function d9aA526FDb80307A($A7d54b094ae83c95 = NULL)
{
	goto label18;

	label2:

	$b62d6460eb33ea07->query('SELECT * FROM `watch_categories` WHERE `type` = ? ORDER BY `genre_id` ASC;', $A7d54b094ae83c95);

	label6:

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[$Fb9da1713bff19ce['genre_id']] = $Fb9da1713bff19ce;
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

function ab8369074df2aaa3()
{
	goto label515;

	label1:

	unset($aec63aeec8c189ba);
	echo 'Finished generating cache!' . "\n";

	label3:

	foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
		goto label187;

		label7:

		if (0 < count($f4297700901e0590)) {
			goto label23;
		}

		$C6671ac66a4f1c57 = '/usr/bin/find "' . escapeshellcmd($Fb9da1713bff19ce['directory']) . '"';
		goto label63;

		label23:

		$f4297700901e0590 = escapeshellcmd(implode('|', $f4297700901e0590));
		goto label54;

		label33:

		if (!(count($f4297700901e0590) == 0)) {
			goto label42;
		}

		$f4297700901e0590 = ['mp4', 'mkv', 'avi', 'mpg', 'flv', '3gp', 'm4v', 'flv', 'wmv', 'mov', 'ts'];

		label42:

		$bfe0795d7498567d = $dd6d6da4a65a40fa = [];

		if (0 < strlen($Fb9da1713bff19ce['rclone_dir'])) {
			goto label461;
		}

		goto label7;

		label54:

		$C6671ac66a4f1c57 = '/usr/bin/find "' . escapeshellcmd($Fb9da1713bff19ce['directory']) . '" -regex ".*\\.\\(' . $f4297700901e0590 . '\\)"';

		label63:

		exec($C6671ac66a4f1c57, $dd6d6da4a65a40fa, $Eaebe8fb9e75961a);

		if (isset($Fb9da1713bff19ce['auto_subtitles'])) {
			goto label114;
		}

		$bfe0795d7498567d = [];
		goto label112;

		label75:

		$b62d6460eb33ea07->db_connect();
		checkBouquets();
		goto label478;

		label81:

		$ba2d146bb5a55097 = implode(' ', $bf4b8e1bde0d3361);

		if (!(!substr($ba2d146bb5a55097, 0, 1) == '[')) {
			goto label105;
		}

		$ba2d146bb5a55097 = '[' . explode('[', $ba2d146bb5a55097, 1)[1];

		label105:

		$bf4b8e1bde0d3361 = json_decode($ba2d146bb5a55097, true);
		goto label221;

		label112:

		goto label459;

		label114:

		$f4297700901e0590 = escapeshellcmd(implode('|', ['srt', 'sub', 'sbv']));
		$C6671ac66a4f1c57 = '/usr/bin/find "' . escapeshellcmd($Fb9da1713bff19ce['directory']) . '" -regex ".*\\.\\(' . $f4297700901e0590 . '\\)"';
		exec($C6671ac66a4f1c57, $bfe0795d7498567d, $Eaebe8fb9e75961a);
		goto label459;

		label138:

		foreach ($b036a2bf442dddad as $ba2d146bb5a55097) {
			$C6671ac66a4f1c57 = '/usr/bin/timeout 60 ' . PHP_BIN . ' ' . INCLUDES_PATH . 'cli/watch_item.php "' . base64_encode(json_encode($ba2d146bb5a55097, JSON_UNESCAPED_UNICODE)) . '"';
			$Ed7935619de087d2[] = $C6671ac66a4f1c57;
		}

		$b62d6460eb33ea07->close_mysql();

		if ($Ee78463923199005 <= 1) {
			goto label178;
		}

		$D312762364397467 = new Multithread($Ed7935619de087d2, $Ee78463923199005);
		goto label174;

		label174:

		$D312762364397467->run();
		goto label75;

		label178:

		foreach ($Ed7935619de087d2 as $C6671ac66a4f1c57) {
			shell_exec($C6671ac66a4f1c57);
		}

		goto label75;

		label187:

		$b62d6460eb33ea07->query('UPDATE `watch_folders` SET `last_run` = UNIX_TIMESTAMP() WHERE `id` = ?;', $Fb9da1713bff19ce['id']);
		$f4297700901e0590 = json_decode($Fb9da1713bff19ce['allowed_extensions'], true);

		if ($f4297700901e0590) {
			goto label202;
		}

		$f4297700901e0590 = [];

		label202:

		goto label33;

		label204:

		if (!(0 < count($b036a2bf442dddad))) {
			goto label218;
		}

		echo 'Scan complete! Adding ' . count($b036a2bf442dddad) . ' files...' . "\n";

		label218:

		$Ed7935619de087d2 = [];
		goto label138;

		label221:

		foreach ($bf4b8e1bde0d3361 as $D6be258a9043b749) {
			$D6be258a9043b749['Path'] = rtrim($Fb9da1713bff19ce['directory'], '/') . '/' . $D6be258a9043b749['Path'];
			if (!((count($f4297700901e0590) == 0) || in_array(strtolower(pathinfo($D6be258a9043b749['Name'])['extension']), $f4297700901e0590))) {
				goto label260;
			}

			$dd6d6da4a65a40fa[] = $D6be258a9043b749['Path'];

			label260:

			if (!isset($Fb9da1713bff19ce['auto_subtitles'])) {
				goto label287;
			}

			if (!in_array(strtolower(pathinfo($D6be258a9043b749['Path'])['extension']), ['srt', 'sub', 'sbv'])) {
				goto label287;
			}

			$bfe0795d7498567d[] = $D6be258a9043b749['Path'];

			label287:
		}

		label289:

		$b036a2bf442dddad = [];

		foreach ($dd6d6da4a65a40fa as $D6be258a9043b749) {
			goto label412;

			label295:

			$dc18ead5e5e758d2 = [];

			if (!isset($Fb9da1713bff19ce['auto_subtitles'])) {
				goto label334;
			}

			foreach (['srt', 'sub', 'sbv'] as $E3f5ab103227acc2) {
				$Dd11fd28d5f0e5fd = $d88ca0c1f58e0dc1['dirname'] . '/' . $d88ca0c1f58e0dc1['filename'] . '.' . $E3f5ab103227acc2;

				if (!in_array($Dd11fd28d5f0e5fd, $bfe0795d7498567d)) {
					goto label332;
				}

				$dc18ead5e5e758d2 = [
					'files'    => [$Dd11fd28d5f0e5fd],
					'names'    => ['Subtitles'],
					'charset'  => ['UTF-8'],
					'location' => SERVER_ID
				];
				goto label334;

				label332:
			}

			label334:

			goto label337;

			label337:

			$b036a2bf442dddad[] = ['folder_id' => $Fb9da1713bff19ce['id'], 'type' => $Fb9da1713bff19ce['type'], 'directory' => $Fb9da1713bff19ce['directory'], 'file' => $D6be258a9043b749, 'subtitles' => $dc18ead5e5e758d2, 'category_id' => $Fb9da1713bff19ce['category_id'], 'bouquets' => $Fb9da1713bff19ce['bouquets'], 'disable_tmdb' => $Fb9da1713bff19ce['disable_tmdb'], 'ignore_no_match' => $Fb9da1713bff19ce['ignore_no_match'], 'fb_bouquets' => $Fb9da1713bff19ce['fb_bouquets'], 'fb_category_id' => $Fb9da1713bff19ce['fb_category_id'], 'language' => $Fb9da1713bff19ce['language'], 'watch_categories' => $Fd57b4ec233184cb, 'read_native' => $Fb9da1713bff19ce['read_native'], 'movie_symlink' => $Fb9da1713bff19ce['movie_symlink'], 'remove_subtitles' => $Fb9da1713bff19ce['remove_subtitles'], 'auto_encode' => $Fb9da1713bff19ce['auto_encode'], 'auto_upgrade' => $Fb9da1713bff19ce['auto_upgrade'], 'fallback_title' => $Fb9da1713bff19ce['fallback_title'], 'ffprobe_input' => $Fb9da1713bff19ce['ffprobe_input'], 'transcode_profile_id' => $Fb9da1713bff19ce['transcode_profile_id'], 'max_genres' => intval(XUI::$rSettings['max_genres']), 'duplicate_tmdb' => $Fb9da1713bff19ce['duplicate_tmdb'], 'target_container' => $Fb9da1713bff19ce['target_container'], 'alternative_titles' => XUI::$rSettings['alternative_titles'], 'fallback_parser' => XUI::$rSettings['fallback_parser']];
			if (!((0 < $Ee7b0d743fd5a408) && (count($b036a2bf442dddad) == $Ee7b0d743fd5a408))) {
				goto label409;
			}

			goto label204;

			label409:

			goto label452;

			label412:

			if (!((time() - filemtime($D6be258a9043b749)) < 30)) {
				goto label427;
			}

			goto label452;

			label427:

			if (in_array(json_encode(['s:' . SERVER_ID . ':' . $D6be258a9043b749], JSON_UNESCAPED_UNICODE), $Cc94312f13005bd4)) {
				goto label409;
			}

			$d88ca0c1f58e0dc1 = pathinfo($D6be258a9043b749);
			goto label295;

			label452:

			goto label455;

			label455:
		}

		goto label204;

		label459:

		goto label289;

		label461:

		$C6671ac66a4f1c57 = 'rclone --config "' . CONFIG_PATH . 'rclone.conf" lsjson ' . escapeshellarg($Fb9da1713bff19ce['rclone_dir']) . ' -R --fast-list --files-only';
		exec($C6671ac66a4f1c57, $bf4b8e1bde0d3361, $Eaebe8fb9e75961a);
		goto label81;

		label478:
	}

	goto label481;

	label481:

	goto label684;

	label482:

	$aec63aeec8c189ba = [
		'movie'  => [],
		'series' => []
	];
	echo 'Generating cache...' . "\n";
	$b62d6460eb33ea07->query('SELECT `id`, `tmdb_id` FROM `streams_series` WHERE `tmdb_id` IS NOT NULL AND `tmdb_id` > 0;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$C97006f5b7ae07ee[$Fb9da1713bff19ce['id']] = $Fb9da1713bff19ce['tmdb_id'];
	}

	goto label604;

	label498:

	if (!$ebb4852f69f0dca0) {
		goto label508;
	}

	$b62d6460eb33ea07->query('SELECT * FROM `watch_folders` WHERE `type` <> \'plex\' AND `server_id` = ? AND `id` = ?;', SERVER_ID, $ebb4852f69f0dca0);
	goto label585;

	label508:

	$b62d6460eb33ea07->query('SELECT * FROM `watch_folders` WHERE `type` <> \'plex\' AND `server_id` = ? AND `active` = 1 AND (UNIX_TIMESTAMP() - `last_run` > ? OR `last_run` IS NULL) ORDER BY `id` ASC;', SERVER_ID, $D3e21fcef5b5b9c7);
	goto label585;

	label515:

	global $b62d6460eb33ea07;
	global $Ee78463923199005;
	global $D3e21fcef5b5b9c7;
	global $Ee7b0d743fd5a408;
	global $ebb4852f69f0dca0;
	$Fd57b4ec233184cb = [1 => d9aa526fdb80307a(1), 2 => d9aa526fdb80307a(2)];

	if (!(0 < count(glob(WATCH_TMP_PATH . '*.bouquet')))) {
		goto label543;
	}

	checkBouquets();

	label543:

	goto label498;

	label544:

	exec('find ' . WATCH_TMP_PATH . ' -maxdepth 1 -name "*.cache" -print0 | xargs -0 rm');

	foreach ($aec63aeec8c189ba['series'] as $D7f17b03d6498825 => $ba2d146bb5a55097) {
		file_put_contents(WATCH_TMP_PATH . 'series_' . $D7f17b03d6498825 . '.cache', json_encode($ba2d146bb5a55097));
	}

	foreach ($aec63aeec8c189ba['movie'] as $D7f17b03d6498825 => $ba2d146bb5a55097) {
		file_put_contents(WATCH_TMP_PATH . 'movie_' . $D7f17b03d6498825 . '.cache', json_encode($ba2d146bb5a55097));
	}

	goto label1;

	label585:

	$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();

	if (!(0 < count($D8e7681dfae2905b))) {
		goto label3;
	}

	shell_exec('rm -f ' . WATCH_TMP_PATH . '*.wpid');
	$C97006f5b7ae07ee = $Cc94312f13005bd4 = [];
	goto label482;

	label604:

	$b62d6460eb33ea07->query('SELECT `streams`.`id`, `streams_episodes`.`series_id`, `streams_episodes`.`season_num`, `streams_episodes`.`episode_num`, `streams`.`stream_source` FROM `streams_episodes` LEFT JOIN `streams` ON `streams`.`id` = `streams_episodes`.`stream_id` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` WHERE `streams_servers`.`server_id` = ?;', SERVER_ID);

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$Cc94312f13005bd4[] = $Fb9da1713bff19ce['stream_source'];
		$D7f17b03d6498825 = $C97006f5b7ae07ee[$Fb9da1713bff19ce['series_id']];

		if (!$D7f17b03d6498825) {
			goto label641;
		}

		$fd51b5505224fc7c = json_decode($Fb9da1713bff19ce['stream_source'], true)[0];
		$aec63aeec8c189ba['series'][$D7f17b03d6498825][$Fb9da1713bff19ce['season_num'] . '_' . $Fb9da1713bff19ce['episode_num']] = ['id' => $Fb9da1713bff19ce['id'], 'source' => $fd51b5505224fc7c];

		label641:
	}

	$b62d6460eb33ea07->query('SELECT `streams`.`id`, `streams`.`stream_source`, `streams`.`movie_properties` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` WHERE `streams`.`type` = 2 AND `streams_servers`.`server_id` = ?;', SERVER_ID);

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$Cc94312f13005bd4[] = $Fb9da1713bff19ce['stream_source'];
		$D7f17b03d6498825 = json_decode($Fb9da1713bff19ce['movie_properties'], true)['tmdb_id'] ?: NULL;

		if (!$D7f17b03d6498825) {
			goto label681;
		}

		$fd51b5505224fc7c = json_decode($Fb9da1713bff19ce['stream_source'], true)[0];
		$aec63aeec8c189ba['movie'][$D7f17b03d6498825] = ['id' => $Fb9da1713bff19ce['id'], 'source' => $fd51b5505224fc7c];

		label681:
	}

	goto label544;

	label684:
}

function b47fb5320e43f112($Abcb228699a7f743)
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

function checkBouquets()
{
	global $b62d6460eb33ea07;
	$d1771326d0dd8cae = [];
	$Df5cd7b5dc4cc10c = glob(WATCH_TMP_PATH . '*.bouquet');

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
			goto label122;
		}

		foreach (['movie', 'series'] as $A7d54b094ae83c95) {
			goto label57;

			label54:

			goto label120;

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
			goto label54;

			label120:
		}

		label122:
	}
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

goto label87;

label1:

file_put_contents(CACHE_TMP_PATH . 'watch_pid', getmypid());
cli_set_process_title('XUI[Watch Folder]');
$D3e21fcef5b5b9c7 = intval(XUI::$rSettings['scan_seconds']) ?: 3600;
goto label47;

label21:

$af3fb7e07a56c784 = intval(file_get_contents(CACHE_TMP_PATH . 'watch_pid'));

label30:
if (!($af3fb7e07a56c784 && XUI::E764F10e99c26365($af3fb7e07a56c784, 'php'))) {
	goto label1;
}

echo 'Watch folder is already running. Please wait until it finishes.' . "\n";
exit();
goto label1;

label42:

goto label136;

label47:

$Ee78463923199005 = intval(XUI::$rSettings['thread_count']) ?: 50;
$Ee7b0d743fd5a408 = intval(XUI::$rSettings['max_items']) ?: 0;
set_time_limit(0);

if (!(strlen(XUI::$rSettings['tmdb_api_key']) == 0)) {
	goto label42;
}

exit('No TMDb API key.');
goto label42;

label77:

if (@$argc) {
	goto label83;
}

exit(0);

label83:

register_shutdown_function('shutdown');
goto label111;

label87:

ini_set('memory_limit', -1);
setlocale(LC_ALL, 'en_US.UTF-8');
putenv('LC_ALL=en_US.UTF-8');

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label77;
}

exit('Please run as XUI!' . "\n");
goto label77;

label111:

require str_replace('\\', '/', dirname($argv[0])) . '/../www/init.php';
$ebb4852f69f0dca0 = NULL;

if (!(count($argv) == 2)) {
	goto label135;
}

$ebb4852f69f0dca0 = intval($argv[1]);

label135:

goto label141;

label136:

ab8369074df2aaa3();
goto label153;

label141:

if ($ebb4852f69f0dca0) {
	goto label1;
}

if (file_exists(CACHE_TMP_PATH . 'watch_pid')) {
	goto label152;
}

$af3fb7e07a56c784 = NULL;
goto label30;

label152:

goto label21;

label153:

?>