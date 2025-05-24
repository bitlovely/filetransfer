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
			goto label47;

			label14:

			goto label80;

			label16:

			$this->thread[$B9b6051782843c94]->close();
			unset($this->commands[$B9b6051782843c94]);
			self::launchNextInQueue();

			label24:

			goto label14;

			label26:

			self::launchNextInQueue();
			goto label24;

			label30:

			$this->output[$B9b6051782843c94] .= $this->thread[$B9b6051782843c94]->listen();

			if (!$this->thread[$B9b6051782843c94]->isBusy()) {
				goto label24;
			}

			goto label16;

			label47:

			@$this->output[$B9b6051782843c94] .= $this->thread[$B9b6051782843c94]->listen();
			@$this->error[$B9b6051782843c94] .= $this->thread[$B9b6051782843c94]->getError();

			if ($this->thread[$B9b6051782843c94]->isActive()) {
				goto label30;
			}

			$this->thread[$B9b6051782843c94]->close();
			unset($this->commands[$B9b6051782843c94]);
			goto label26;

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

function generateLines($bcfd61adc96d4b72 = NULL, $d353a4da8a0bb857 = NULL, $c25b0e09d8039d97 = [])
{
	goto label27;

	label4:

	if ($C455840d1f015c68) {
		goto label8;
	}

	$C455840d1f015c68 = [$bcfd61adc96d4b72];

	label8:

	$a2442da801f46da6 = [];
	goto label46;

	label10:

	if (!is_null($bcfd61adc96d4b72)) {
		goto label18;
	}

	$C455840d1f015c68 = [NULL];
	goto label8;

	label18:

	$C455840d1f015c68 = range($bcfd61adc96d4b72, ($bcfd61adc96d4b72 + $d353a4da8a0bb857) - 1, $E3665d09b9cea208);
	goto label4;

	label27:

	global $b62d6460eb33ea07;
	global $E3665d09b9cea208;
	global $ebb4852f69f0dca0;

	if (!is_null($d353a4da8a0bb857)) {
		goto label40;
	}

	$d353a4da8a0bb857 = count($c25b0e09d8039d97);

	label40:

	if (!(0 < $d353a4da8a0bb857)) {
		goto label45;
	}

	goto label10;

	label45:

	goto label210;

	label46:

	foreach ($C455840d1f015c68 as $Feb130957c9ca68a) {
		goto label147;

		label50:

		$b62d6460eb33ea07->result = NULL;

		label52:

		goto label173;

		label54:

		$a19cea75625f6914 = $E3665d09b9cea208;
		goto label60;

		label57:

		$a19cea75625f6914 = ($bcfd61adc96d4b72 + $d353a4da8a0bb857) - $Feb130957c9ca68a;

		label60:

		goto label62;

		label62:

		$b62d6460eb33ea07->query('SELECT `id`, `username`, `password`, `exp_date`, `created_at`, `admin_enabled`, `enabled`, `bouquet`, `allowed_outputs`, `max_connections`, `is_trial`, `is_restreamer`, `is_stalker`, `is_mag`, `is_e2`, `is_isplock`, `allowed_ips`, `allowed_ua`, `pair_id`, `force_server_id`, `isp_desc`, `forced_country`, `bypass_ua`, `last_expiration_video`, `access_token`, `mag_devices`.`token` AS `mag_token`, `admin_notes`, `reseller_notes` FROM `lines` LEFT JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines`.`id` LIMIT ' . $Feb130957c9ca68a . ', ' . $a19cea75625f6914 . ';');

		label69:

		if (!$b62d6460eb33ea07->result) {
			goto label52;
		}

		if (!(0 < $b62d6460eb33ea07->result->rowCount())) {
			goto label50;
		}

		foreach ($b62d6460eb33ea07->result->fetchAll(PDO::FETCH_ASSOC) as $E59d0debc75e7be8) {
			$a2442da801f46da6[] = $E59d0debc75e7be8['id'];
			file_put_contents(LINES_TMP_PATH . 'line_i_' . $E59d0debc75e7be8['id'], igbinary_serialize($E59d0debc75e7be8));
			$Bb672d1983256a93 = (XUI::$rSettings['case_sensitive_line'] ? $E59d0debc75e7be8['username'] . '_' . $E59d0debc75e7be8['password'] : strtolower($E59d0debc75e7be8['username'] . '_' . $E59d0debc75e7be8['password']));
			file_put_contents(LINES_TMP_PATH . 'line_c_' . $Bb672d1983256a93, $E59d0debc75e7be8['id']);

			if (empty($E59d0debc75e7be8['access_token'])) {
				goto label143;
			}

			file_put_contents(LINES_TMP_PATH . 'line_t_' . $E59d0debc75e7be8['access_token'], $E59d0debc75e7be8['id']);

			label143:
		}

		goto label50;

		label147:

		if (!is_null($Feb130957c9ca68a)) {
			goto label165;
		}

		$b62d6460eb33ea07->query('SELECT `id`, `username`, `password`, `exp_date`, `created_at`, `admin_enabled`, `enabled`, `bouquet`, `allowed_outputs`, `max_connections`, `is_trial`, `is_restreamer`, `is_stalker`, `is_mag`, `is_e2`, `is_isplock`, `allowed_ips`, `allowed_ua`, `pair_id`, `force_server_id`, `isp_desc`, `forced_country`, `bypass_ua`, `last_expiration_video`, `access_token`, `mag_devices`.`token` AS `mag_token`, `admin_notes`, `reseller_notes` FROM `lines` LEFT JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines`.`id` WHERE `id` IN (' . implode(',', $c25b0e09d8039d97) . ');');
		goto label69;

		label165:

		if (($bcfd61adc96d4b72 + $d353a4da8a0bb857) < ($Feb130957c9ca68a + $E3665d09b9cea208)) {
			goto label57;
		}

		goto label54;

		label173:
	}

	if (!(0 < count($c25b0e09d8039d97))) {
		goto label45;
	}

	foreach ($c25b0e09d8039d97 as $c4620a212189e773) {
		if (!(!in_array($c4620a212189e773, $a2442da801f46da6) && file_exists(LINES_TMP_PATH . 'line_i_' . $c4620a212189e773))) {
			goto label207;
		}

		unlink(LINES_TMP_PATH . 'line_i_' . $c4620a212189e773);

		label207:
	}

	goto label45;

	label210:
}

function generateStreams($bcfd61adc96d4b72 = NULL, $d353a4da8a0bb857 = NULL, $c25b0e09d8039d97 = [])
{
	goto label4;

	label4:

	global $b62d6460eb33ea07;
	global $E3665d09b9cea208;
	global $ebb4852f69f0dca0;

	if (!is_null($d353a4da8a0bb857)) {
		goto label17;
	}

	$d353a4da8a0bb857 = count($c25b0e09d8039d97);

	label17:

	if (!(0 < $d353a4da8a0bb857)) {
		goto label244;
	}

	goto label245;

	label22:

	$a2442da801f46da6 = [];

	foreach ($C455840d1f015c68 as $Feb130957c9ca68a) {
		goto label181;

		label27:

		goto label207;

		label29:

		$b62d6460eb33ea07->result = NULL;

		label31:

		foreach ($D8e7681dfae2905b as $D9d6a5d0b76a9aaf) {
			$a2442da801f46da6[] = $D9d6a5d0b76a9aaf['id'];

			if ($D9d6a5d0b76a9aaf['direct_source']) {
				goto label42;
			}

			unset($D9d6a5d0b76a9aaf['stream_source']);

			label42:

			$d094d3e133ec8c03 = ['info' => $D9d6a5d0b76a9aaf, 'bouquets' => $B51da85892620f9b[intval($D9d6a5d0b76a9aaf['id'])] ?: [], 'servers' => $b42f717d234fde64[intval($D9d6a5d0b76a9aaf['id'])] ?? []];
			file_put_contents(STREAMS_TMP_PATH . 'stream_' . $D9d6a5d0b76a9aaf['id'], igbinary_serialize($d094d3e133ec8c03));
		}

		goto label111;

		label75:

		$a19cea75625f6914 = $E3665d09b9cea208;
		goto label81;

		label78:

		$a19cea75625f6914 = ($bcfd61adc96d4b72 + $d353a4da8a0bb857) - $Feb130957c9ca68a;

		label81:

		goto label83;

		label83:

		$b62d6460eb33ea07->query('SELECT t1.id,t1.epg_id,t1.added,t1.allow_record,t1.year,t1.channel_id,t1.movie_properties,t1.stream_source,t1.tv_archive_server_id,t1.vframes_server_id,t1.tv_archive_duration,t1.stream_icon,t1.custom_sid,t1.category_id,t1.stream_display_name,t1.series_no,t1.direct_source,t1.direct_proxy,t2.type_output,t1.target_container,t2.live,t1.rtmp_output,t1.order,t2.type_key,t1.tmdb_id,t1.adaptive_link FROM `streams` t1 INNER JOIN `streams_types` t2 ON t2.type_id = t1.type LIMIT ' . $Feb130957c9ca68a . ', ' . $a19cea75625f6914 . ';');

		label90:

		if (!$b62d6460eb33ea07->result) {
			goto label27;
		}

		if (!(0 < $b62d6460eb33ea07->result->rowCount())) {
			goto label114;
		}

		$D8e7681dfae2905b = $b62d6460eb33ea07->result->fetchAll(PDO::FETCH_ASSOC);
		goto label118;

		label111:

		unset($D8e7681dfae2905b, $b42f717d234fde64, $dec36723d7be7c49);

		label114:

		$b62d6460eb33ea07->result = NULL;
		goto label27;

		label118:

		$b42f717d234fde64 = $dec36723d7be7c49 = [];

		foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
			$dec36723d7be7c49[] = $Fb9da1713bff19ce['id'];
		}

		if (!(0 < count($dec36723d7be7c49))) {
			goto label31;
		}

		$b62d6460eb33ea07->query('SELECT `stream_id`, `server_id`, `pid`, `to_analyze`, `stream_status`, `monitor_pid`, `on_demand`, `delay_available_at`, `bitrate`, `parent_id`, `on_demand`, `stream_info`, `video_codec`, `audio_codec`, `resolution`, `compatible` FROM `streams_servers` WHERE `stream_id` IN (' . implode(',', $dec36723d7be7c49) . ')');
		goto label146;

		label146:

		if (!$b62d6460eb33ea07->result) {
			goto label31;
		}

		if (!(0 < $b62d6460eb33ea07->result->rowCount())) {
			goto label179;
		}

		foreach ($b62d6460eb33ea07->result->fetchAll(PDO::FETCH_ASSOC) as $Fb9da1713bff19ce) {
			$b42f717d234fde64[intval($Fb9da1713bff19ce['stream_id'])][intval($Fb9da1713bff19ce['server_id'])] = $Fb9da1713bff19ce;
		}

		label179:

		goto label29;

		label181:

		if (!is_null($Feb130957c9ca68a)) {
			goto label199;
		}

		$b62d6460eb33ea07->query('SELECT t1.id,t1.epg_id,t1.added,t1.allow_record,t1.year,t1.channel_id,t1.movie_properties,t1.stream_source,t1.tv_archive_server_id,t1.vframes_server_id,t1.tv_archive_duration,t1.stream_icon,t1.custom_sid,t1.category_id,t1.stream_display_name,t1.series_no,t1.direct_source,t1.direct_proxy,t2.type_output,t1.target_container,t2.live,t1.rtmp_output,t1.order,t2.type_key,t1.tmdb_id,t1.adaptive_link FROM `streams` t1 INNER JOIN `streams_types` t2 ON t2.type_id = t1.type WHERE `t1`.`id` IN (' . implode(',', $c25b0e09d8039d97) . ');');
		goto label90;

		label199:

		if (($bcfd61adc96d4b72 + $d353a4da8a0bb857) < ($Feb130957c9ca68a + $E3665d09b9cea208)) {
			goto label78;
		}

		goto label75;

		label207:
	}

	if (!(0 < count($c25b0e09d8039d97))) {
		goto label244;
	}

	foreach ($c25b0e09d8039d97 as $c4620a212189e773) {
		if (!(!in_array($c4620a212189e773, $a2442da801f46da6) && file_exists(STREAMS_TMP_PATH . 'stream_' . $c4620a212189e773))) {
			goto label241;
		}

		unlink(STREAMS_TMP_PATH . 'stream_' . $c4620a212189e773);

		label241:
	}

	goto label244;

	label244:

	goto label276;

	label245:

	$B51da85892620f9b = igbinary_unserialize(file_get_contents(CACHE_TMP_PATH . 'bouquet_map'));

	if (!is_null($bcfd61adc96d4b72)) {
		goto label262;
	}

	$C455840d1f015c68 = [NULL];
	goto label275;

	label262:

	goto label263;

	label263:

	$C455840d1f015c68 = range($bcfd61adc96d4b72, ($bcfd61adc96d4b72 + $d353a4da8a0bb857) - 1, $E3665d09b9cea208);

	if ($C455840d1f015c68) {
		goto label275;
	}

	$C455840d1f015c68 = [$bcfd61adc96d4b72];

	label275:

	goto label22;

	label276:
}

function generateSeries($bcfd61adc96d4b72, $d353a4da8a0bb857)
{
	goto label3;

	label3:

	global $b62d6460eb33ea07;
	global $E3665d09b9cea208;
	$cb98d4eed473e4c8 = [];
	$aab84fb0c3e4fd47 = [];

	if (!(0 < $d353a4da8a0bb857)) {
		goto label92;
	}

	$C455840d1f015c68 = range($bcfd61adc96d4b72, ($bcfd61adc96d4b72 + $d353a4da8a0bb857) - 1, $E3665d09b9cea208);
	goto label20;

	label20:

	if ($C455840d1f015c68) {
		goto label24;
	}

	$C455840d1f015c68 = [$bcfd61adc96d4b72];

	label24:

	foreach ($C455840d1f015c68 as $Feb130957c9ca68a) {
		if (($bcfd61adc96d4b72 + $d353a4da8a0bb857) < ($Feb130957c9ca68a + $E3665d09b9cea208)) {
			goto label35;
		}

		$a19cea75625f6914 = $E3665d09b9cea208;
		goto label38;

		label35:

		$a19cea75625f6914 = ($bcfd61adc96d4b72 + $d353a4da8a0bb857) - $Feb130957c9ca68a;

		label38:

		$b62d6460eb33ea07->query('SELECT `stream_id`, `series_id`, `season_num`, `episode_num` FROM `streams_episodes` WHERE `stream_id` IN (SELECT `id` FROM `streams` WHERE `type` = 5) ORDER BY `series_id` ASC, `season_num` ASC, `episode_num` ASC LIMIT ' . $Feb130957c9ca68a . ', ' . $a19cea75625f6914 . ';');

		foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
			if (!($Fb9da1713bff19ce['stream_id'] && $Fb9da1713bff19ce['series_id'])) {
				goto label87;
			}

			$cb98d4eed473e4c8[intval($Fb9da1713bff19ce['stream_id'])] = intval($Fb9da1713bff19ce['series_id']);

			if (isset($aab84fb0c3e4fd47[$Fb9da1713bff19ce['series_id']])) {
				goto label77;
			}

			$aab84fb0c3e4fd47[$Fb9da1713bff19ce['series_id']] = [];

			label77:

			$aab84fb0c3e4fd47[$Fb9da1713bff19ce['series_id']][$Fb9da1713bff19ce['season_num']][] = ['episode_num' => $Fb9da1713bff19ce['episode_num'], 'stream_id' => $Fb9da1713bff19ce['stream_id']];

			label87:
		}
	}

	goto label92;

	label92:

	file_put_contents(SERIES_TMP_PATH . 'series_episodes_' . $bcfd61adc96d4b72, igbinary_serialize($aab84fb0c3e4fd47));
	file_put_contents(SERIES_TMP_PATH . 'series_map_' . $bcfd61adc96d4b72, igbinary_serialize($cb98d4eed473e4c8));
	unset($cb98d4eed473e4c8);
	goto label114;

	label114:
}

function generateGroups()
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT `group_id` FROM `users_groups`;');

	foreach ($b62d6460eb33ea07->get_rows() as $fb719dae9595b9fa) {
		goto label138;

		label10:

		foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
			if (!$Fb9da1713bff19ce['category_id']) {
				goto label30;
			}

			$F771d40e8cf51e59 = array_merge($F771d40e8cf51e59, json_decode($Fb9da1713bff19ce['category_id'], true));

			label30:
		}

		label32:

		$B9869413eae86beb['category_ids'] = array_unique($F771d40e8cf51e59);

		label37:

		goto label39;

		label39:

		file_put_contents(CACHE_TMP_PATH . 'permissions_' . intval($fb719dae9595b9fa['group_id']), igbinary_serialize($B9869413eae86beb));
		goto label324;

		label55:

		foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
			if (!$Fb9da1713bff19ce['category_id']) {
				goto label75;
			}

			$F771d40e8cf51e59 = array_merge($F771d40e8cf51e59, json_decode($Fb9da1713bff19ce['category_id'], true));

			label75:
		}

		label77:

		if (!(0 < count($B9869413eae86beb['series_ids']))) {
			goto label32;
		}

		$b62d6460eb33ea07->query('SELECT DISTINCT(`category_id`) AS `category_id` FROM `streams_series` WHERE `id` IN (' . implode(',', array_map('intval', $B9869413eae86beb['series_ids'])) . ');');
		goto label10;

		label102:

		$B9869413eae86beb['stream_ids'] = array_unique($dec36723d7be7c49);
		$B9869413eae86beb['series_ids'] = array_unique($d611c60168c266f6);
		$F771d40e8cf51e59 = [];

		if (!(0 < count($B9869413eae86beb['stream_ids']))) {
			goto label77;
		}

		$b62d6460eb33ea07->query('SELECT DISTINCT(`category_id`) AS `category_id` FROM `streams` WHERE `id` IN (' . implode(',', array_map('intval', $B9869413eae86beb['stream_ids'])) . ');');
		goto label55;

		label138:

		$Df5cd7b5dc4cc10c = $B9869413eae86beb = [];
		$b62d6460eb33ea07->query('SELECT * FROM `users_packages` WHERE JSON_CONTAINS(`groups`, ?, \'$\');', $fb719dae9595b9fa['group_id']);

		foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
			goto label174;

			label152:

			if (!$Fb9da1713bff19ce['is_mag']) {
				goto label160;
			}

			$B9869413eae86beb['create_mag'] = true;

			label160:

			if (!$Fb9da1713bff19ce['is_e2']) {
				goto label171;
			}

			$B9869413eae86beb['create_enigma'] = true;
			goto label171;

			label171:

			goto label205;

			label174:

			foreach (json_decode($Fb9da1713bff19ce['bouquets'], true) as $Abcb228699a7f743) {
				if (in_array($Abcb228699a7f743, $Df5cd7b5dc4cc10c)) {
					goto label192;
				}

				$Df5cd7b5dc4cc10c[] = $Abcb228699a7f743;

				label192:
			}

			if (!$Fb9da1713bff19ce['is_line']) {
				goto label202;
			}

			$B9869413eae86beb['create_line'] = true;

			label202:

			goto label152;

			label205:
		}

		if (!(0 < count($Df5cd7b5dc4cc10c))) {
			goto label37;
		}

		goto label217;

		label217:

		$b62d6460eb33ea07->query('SELECT * FROM `bouquets` WHERE `id` IN (' . implode(',', array_map('intval', $Df5cd7b5dc4cc10c)) . ');');
		$d611c60168c266f6 = [];
		$dec36723d7be7c49 = [];

		foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
			goto label282;

			label239:

			if (!$Fb9da1713bff19ce['bouquet_radios']) {
				goto label255;
			}

			$dec36723d7be7c49 = array_merge($dec36723d7be7c49, json_decode($Fb9da1713bff19ce['bouquet_radios'], true));

			label255:

			foreach (json_decode($Fb9da1713bff19ce['bouquet_series'], true) as $E6f758b9be57a931) {
				$d611c60168c266f6[] = $E6f758b9be57a931;
				$b62d6460eb33ea07->query('SELECT `stream_id` FROM `streams_episodes` WHERE `series_id` = ?;', $E6f758b9be57a931);

				foreach ($b62d6460eb33ea07->get_rows() as $e61e6dcee1252fa2) {
					$dec36723d7be7c49[] = $e61e6dcee1252fa2['stream_id'];
				}
			}

			goto label317;

			label282:

			if (!$Fb9da1713bff19ce['bouquet_channels']) {
				goto label298;
			}

			$dec36723d7be7c49 = array_merge($dec36723d7be7c49, json_decode($Fb9da1713bff19ce['bouquet_channels'], true));

			label298:

			if (!$Fb9da1713bff19ce['bouquet_movies']) {
				goto label239;
			}

			$dec36723d7be7c49 = array_merge($dec36723d7be7c49, json_decode($Fb9da1713bff19ce['bouquet_movies'], true));
			goto label239;

			label317:

			goto label320;

			label320:
		}

		goto label102;

		label324:
	}
}

function generateLinesPerIP()
{
	global $b62d6460eb33ea07;
	$ac3da76767ac9a09 = [
		3600   => [],
		86400  => [],
		604800 => [],
		0      => []
	];

	foreach (array_keys($ac3da76767ac9a09) as $Ab13f2545dd3df14) {
		if (0 < $Ab13f2545dd3df14) {
			goto label16;
		}

		$b62d6460eb33ea07->query('SELECT `lines_activity`.`user_id`, COUNT(DISTINCT(`lines_activity`.`user_ip`)) AS `ip_count`, `lines`.`username` FROM `lines_activity` LEFT JOIN `lines` ON `lines`.`id` = `lines_activity`.`user_id` WHERE `lines`.`is_mag` = 0 AND `lines`.`is_e2` = 0 AND `lines`.`is_restreamer` = 0 GROUP BY `lines_activity`.`user_id` ORDER BY `ip_count` DESC LIMIT 1000;');
		goto label23;

		label16:

		$b62d6460eb33ea07->query('SELECT `lines_activity`.`user_id`, COUNT(DISTINCT(`lines_activity`.`user_ip`)) AS `ip_count`, `lines`.`username` FROM `lines_activity` LEFT JOIN `lines` ON `lines`.`id` = `lines_activity`.`user_id` WHERE `date_start` >= ? AND `lines`.`is_mag` = 0 AND `lines`.`is_e2` = 0 AND `lines`.`is_restreamer` = 0 GROUP BY `lines_activity`.`user_id` ORDER BY `ip_count` DESC LIMIT 1000;', time() - $Ab13f2545dd3df14);

		label23:

		foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
			$ac3da76767ac9a09[$Ab13f2545dd3df14][] = $Fb9da1713bff19ce;
		}
	}

	file_put_contents(CACHE_TMP_PATH . 'lines_per_ip', igbinary_serialize($ac3da76767ac9a09));
}

function generateTheftDetection()
{
	global $b62d6460eb33ea07;
	$deec48c5265dbeb0 = [
		3600   => [],
		86400  => [],
		604800 => [],
		0      => []
	];

	foreach (array_keys($deec48c5265dbeb0) as $Ab13f2545dd3df14) {
		if (0 < $Ab13f2545dd3df14) {
			goto label16;
		}

		$b62d6460eb33ea07->query('SELECT `lines_activity`.`user_id`, COUNT(DISTINCT(`lines_activity`.`stream_id`)) AS `vod_count`, `lines`.`username` FROM `lines_activity` LEFT JOIN `lines` ON `lines`.`id` = `lines_activity`.`user_id` WHERE `lines`.`is_mag` = 0 AND `lines`.`is_e2` = 0 AND `lines`.`is_restreamer` = 0 AND `stream_id` IN (SELECT `id` FROM `streams` WHERE `type` IN (2,5)) GROUP BY `lines_activity`.`user_id` ORDER BY `vod_count` DESC LIMIT 1000;');
		goto label23;

		label16:

		$b62d6460eb33ea07->query('SELECT `lines_activity`.`user_id`, COUNT(DISTINCT(`lines_activity`.`stream_id`)) AS `vod_count`, `lines`.`username` FROM `lines_activity` LEFT JOIN `lines` ON `lines`.`id` = `lines_activity`.`user_id` WHERE `date_start` >= ? AND `lines`.`is_mag` = 0 AND `lines`.`is_e2` = 0 AND `lines`.`is_restreamer` = 0 AND `stream_id` IN (SELECT `id` FROM `streams` WHERE `type` IN (2,5)) GROUP BY `lines_activity`.`user_id` ORDER BY `vod_count` DESC LIMIT 1000;', time() - $Ab13f2545dd3df14);

		label23:

		foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
			$deec48c5265dbeb0[$Ab13f2545dd3df14][] = $Fb9da1713bff19ce;
		}
	}

	file_put_contents(CACHE_TMP_PATH . 'theft_detection', igbinary_serialize($deec48c5265dbeb0));
}

function getChangedLines()
{
	goto label90;

	label1:

	$A5537b8fca71f9ed = $c5dbd1772cb9b1f4 = $B369532dc55c9684 = [];
	$b62d6460eb33ea07->query('SELECT `id`, `username`, `password`, `access_token`, UNIX_TIMESTAMP(`updated`) AS `updated` FROM `lines`;');
	if (!($b62d6460eb33ea07->dbh && $b62d6460eb33ea07->result)) {
		goto label144;
	}

	if (!(0 < $b62d6460eb33ea07->result->rowCount())) {
		goto label144;
	}

	foreach ($b62d6460eb33ea07->result->fetchAll(PDO::FETCH_ASSOC) as $Fb9da1713bff19ce) {
		if (!(!file_exists(LINES_TMP_PATH . 'line_i_' . $Fb9da1713bff19ce['id']) || ((filemtime(LINES_TMP_PATH . 'line_i_' . $Fb9da1713bff19ce['id']) ?: 0) < $Fb9da1713bff19ce['updated']))) {
			goto label57;
		}

		$B9869413eae86beb['changes'][] = $Fb9da1713bff19ce['id'];

		label57:

		$A5537b8fca71f9ed[] = $Fb9da1713bff19ce['id'];
		$c5dbd1772cb9b1f4[] = (XUI::$rSettings['case_sensitive_line'] ? $Fb9da1713bff19ce['username'] . '_' . $Fb9da1713bff19ce['password'] : strtolower($Fb9da1713bff19ce['username'] . '_' . $Fb9da1713bff19ce['password']));

		if (!$Fb9da1713bff19ce['access_token']) {
			goto label87;
		}

		$B369532dc55c9684[] = $Fb9da1713bff19ce['access_token'];

		label87:
	}

	goto label144;

	label90:

	global $b62d6460eb33ea07;
	$B9869413eae86beb = [
		'changes'  => [],
		'delete_i' => [],
		'delete_c' => [],
		'delete_t' => []
	];
	$Af8fb89b1a51c67e = glob(LINES_TMP_PATH . 'line_i_*');
	$d7e0dd21c1c5bd5c = glob(LINES_TMP_PATH . 'line_c_*');
	$f5a7372b86238f4b = glob(LINES_TMP_PATH . 'line_t_*');
	goto label1;

	label111:

	$c5dbd1772cb9b1f4 = array_flip($c5dbd1772cb9b1f4);

	foreach ($d7e0dd21c1c5bd5c as $D6be258a9043b749) {
		$E42fc008c7ed25cd = explode('line_c_', $D6be258a9043b749, 2)[1] ?: NULL;
		if (!($E42fc008c7ed25cd && !isset($c5dbd1772cb9b1f4[$E42fc008c7ed25cd]))) {
			goto label137;
		}

		$B9869413eae86beb['delete_c'][] = $E42fc008c7ed25cd;

		label137:
	}

	$B369532dc55c9684 = array_flip($B369532dc55c9684);
	goto label177;

	label144:

	$A5537b8fca71f9ed = array_flip($A5537b8fca71f9ed);

	foreach ($Af8fb89b1a51c67e as $D6be258a9043b749) {
		$f7107e3a92443147 = intval(explode('line_i_', $D6be258a9043b749, 2)[1]) ?: NULL;
		if (!($f7107e3a92443147 && !isset($A5537b8fca71f9ed[$f7107e3a92443147]))) {
			goto label174;
		}

		$B9869413eae86beb['delete_i'][] = $f7107e3a92443147;

		label174:
	}

	goto label111;

	label177:

	foreach ($f5a7372b86238f4b as $D6be258a9043b749) {
		$B259c62825689c1b = explode('line_t_', $D6be258a9043b749, 2)[1] ?: NULL;
		if (!($B259c62825689c1b && !isset($B369532dc55c9684[$B259c62825689c1b]))) {
			goto label199;
		}

		$B9869413eae86beb['delete_t'][] = $B259c62825689c1b;

		label199:
	}

	return $B9869413eae86beb;
	goto label203;

	label203:
}

function getChangedStreams()
{
	goto label1;

	label1:

	global $b62d6460eb33ea07;
	$B9869413eae86beb = [
		'changes' => [],
		'delete'  => []
	];
	$E040f3dc6e7f2c7b = [];
	$b62d6460eb33ea07->query('SELECT `id`, GREATEST(IFNULL(UNIX_TIMESTAMP(`streams`.`updated`), 0), IFNULL(MAX(UNIX_TIMESTAMP(`streams_servers`.`updated`)), 0)) AS `updated` FROM `streams` LEFT JOIN `streams_servers` ON `streams`.`id` = `streams_servers`.`stream_id` GROUP BY `id`;');
	if (!($b62d6460eb33ea07->dbh && $b62d6460eb33ea07->result)) {
		goto label63;
	}

	goto label15;

	label15:

	if (!(0 < $b62d6460eb33ea07->result->rowCount())) {
		goto label63;
	}

	foreach ($b62d6460eb33ea07->result->fetchAll(PDO::FETCH_ASSOC) as $Fb9da1713bff19ce) {
		if (!(!file_exists(STREAMS_TMP_PATH . 'stream_' . $Fb9da1713bff19ce['id']) || ((filemtime(STREAMS_TMP_PATH . 'stream_' . $Fb9da1713bff19ce['id']) ?: 0) < $Fb9da1713bff19ce['updated']))) {
			goto label58;
		}

		$B9869413eae86beb['changes'][] = $Fb9da1713bff19ce['id'];

		label58:

		$E040f3dc6e7f2c7b[] = $Fb9da1713bff19ce['id'];
	}

	label63:

	goto label64;

	label64:

	$E040f3dc6e7f2c7b = array_flip($E040f3dc6e7f2c7b);

	foreach (glob(STREAMS_TMP_PATH . 'stream_*') as $D6be258a9043b749) {
		$ee6d1fc5d801b43f = intval(end(explode('_', $D6be258a9043b749)));

		if (isset($E040f3dc6e7f2c7b[$ee6d1fc5d801b43f])) {
			goto label93;
		}

		$B9869413eae86beb['delete'][] = $ee6d1fc5d801b43f;

		label93:
	}

	return $B9869413eae86beb;
	goto label97;

	label97:
}

function aB8369074df2AaA3($A7d54b094ae83c95, $E74f3185882c9d00, $A57cdfc6daa6dbad)
{
	goto label683;

	label4:
	if (!(!XUI::$rCached && !isset($c834c3e7e1e6da5f))) {
		goto label48;
	}

	echo 'Cache is disabled.' . "\n";
	echo 'Generating group permissions...' . "\n";
	generategroups();
	goto label675;

	label18:

	foreach ([STREAMS_TMP_PATH, LINES_TMP_PATH, SERIES_TMP_PATH] as $d799202a12912af4) {
		foreach (scandir($d799202a12912af4) as $D6be258a9043b749) {
			unlink($d799202a12912af4 . $D6be258a9043b749);
		}
	}

	file_put_contents(CACHE_TMP_PATH . 'cache_complete', time());
	exit();

	label48:

	goto label49;

	label49:

	switch ($A7d54b094ae83c95) {
	case 'lines':
		generatelines($E74f3185882c9d00, $A57cdfc6daa6dbad);
		goto label674;
	case 'lines_update':
		generatelines(NULL, NULL, $c834c3e7e1e6da5f);
		goto label674;
	case 'series':
		generateseries($E74f3185882c9d00, $A57cdfc6daa6dbad);
		goto label674;
	case 'streams':
		generatestreams($E74f3185882c9d00, $A57cdfc6daa6dbad);
		goto label674;
	case 'streams_update':
		generatestreams(NULL, NULL, $c834c3e7e1e6da5f);
		goto label674;
	case 'groups':
		generategroups();
		goto label674;
	case 'lines_per_ip':
		generatelinesperip();
		goto label674;
	case 'theft_detection':
		generatetheftdetection();
		goto label674;
	default:
		goto label584;

		label104:

		foreach (array_chunk($B1d0cd7d7303c373['changes'], $E3665d09b9cea208) as $a4f07102a25c8088) {
			$Ed7935619de087d2[] = PHP_BIN . ' ' . CRON_PATH . 'cache_engine.php "lines_update" "' . implode(',', $a4f07102a25c8088) . '"';
		}

		label126:

		$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `streams_episodes` WHERE `stream_id` IN (SELECT `id` FROM `streams` WHERE `type` = 5);');
		goto label282;

		label130:

		$B1d0cd7d7303c373 = getchangedlines();
		$B575e4db9840f393['lines_i'] = $B1d0cd7d7303c373['delete_i'];
		$B575e4db9840f393['lines_c'] = $B1d0cd7d7303c373['delete_c'];
		$B575e4db9840f393['lines_t'] = $B1d0cd7d7303c373['delete_t'];

		if (!(0 < count($B1d0cd7d7303c373['changes']))) {
			goto label126;
		}

		goto label104;

		label151:

		file_put_contents(SERIES_TMP_PATH . 'series_categories', igbinary_serialize($e582de4d4a513639));
		$B575e4db9840f393 = [
			'streams' => [],
			'lines_i' => [],
			'lines_c' => [],
			'lines_t' => []
		];
		$Ed7935619de087d2 = [];

		if (XUI::$rSettings['cache_changes']) {
			goto label357;
		}

		goto label423;

		label167:

		unset($Ed7935619de087d2);
		$aab84fb0c3e4fd47 = $cb98d4eed473e4c8 = [];

		foreach ($c6dd59ea81f8f4ee as $bcfd61adc96d4b72) {
			goto label234;

			label174:

			if (!file_exists(SERIES_TMP_PATH . 'series_episodes_' . $bcfd61adc96d4b72)) {
				goto label268;
			}

			$Eaa4da8f4690ffe5 = igbinary_unserialize(file_get_contents(SERIES_TMP_PATH . 'series_episodes_' . $bcfd61adc96d4b72));

			foreach (array_keys($Eaa4da8f4690ffe5) as $E6f758b9be57a931) {
				if (isset($aab84fb0c3e4fd47[$E6f758b9be57a931])) {
					goto label206;
				}

				$aab84fb0c3e4fd47[$E6f758b9be57a931] = [];

				label206:

				foreach (array_keys($Eaa4da8f4690ffe5[$E6f758b9be57a931]) as $C8c1648c3b562f56) {
					foreach ($Eaa4da8f4690ffe5[$E6f758b9be57a931][$C8c1648c3b562f56] as $e61e6dcee1252fa2) {
						$aab84fb0c3e4fd47[$E6f758b9be57a931][$C8c1648c3b562f56][] = $e61e6dcee1252fa2;
					}
				}
			}

			unlink(SERIES_TMP_PATH . 'series_episodes_' . $bcfd61adc96d4b72);
			goto label268;

			label234:

			if (!file_exists(SERIES_TMP_PATH . 'series_map_' . $bcfd61adc96d4b72)) {
				goto label266;
			}

			foreach (igbinary_unserialize(file_get_contents(SERIES_TMP_PATH . 'series_map_' . $bcfd61adc96d4b72)) as $ee6d1fc5d801b43f => $E6f758b9be57a931) {
				$cb98d4eed473e4c8[$ee6d1fc5d801b43f] = $E6f758b9be57a931;
			}

			unlink(SERIES_TMP_PATH . 'series_map_' . $bcfd61adc96d4b72);

			label266:

			goto label174;

			label268:

			goto label270;

			label270:
		}

		file_put_contents(SERIES_TMP_PATH . 'series_map', igbinary_serialize($cb98d4eed473e4c8));
		goto label498;

		label282:

		$F07403b85b3c2754 = $b62d6460eb33ea07->get_row()['count'];
		$c6dd59ea81f8f4ee = range(0, $F07403b85b3c2754, $E3665d09b9cea208);

		if ($c6dd59ea81f8f4ee) {
			goto label295;
		}

		$c6dd59ea81f8f4ee = [0];

		label295:

		goto label296;

		label296:

		foreach ($c6dd59ea81f8f4ee as $bcfd61adc96d4b72) {
			$a19cea75625f6914 = $E3665d09b9cea208;

			if (!($F07403b85b3c2754 < ($bcfd61adc96d4b72 + $a19cea75625f6914))) {
				goto label307;
			}

			$a19cea75625f6914 = $F07403b85b3c2754 - $bcfd61adc96d4b72;

			label307:

			$Ed7935619de087d2[] = PHP_BIN . ' ' . CRON_PATH . ('cache_engine.php "series" ' . $bcfd61adc96d4b72 . ' ' . $a19cea75625f6914);
		}

		if (XUI::$rSettings['cache_changes']) {
			goto label416;
		}

		$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `streams`;');
		$f5a61a35d83c21e7 = $b62d6460eb33ea07->get_row()['count'];
		goto label550;

		label332:

		foreach ($Ff932a1295929769 as $bcfd61adc96d4b72) {
			$a19cea75625f6914 = $E3665d09b9cea208;

			if (!($f97dc62b89e38d3f < ($bcfd61adc96d4b72 + $a19cea75625f6914))) {
				goto label343;
			}

			$a19cea75625f6914 = $f97dc62b89e38d3f - $bcfd61adc96d4b72;

			label343:

			$Ed7935619de087d2[] = PHP_BIN . ' ' . CRON_PATH . ('cache_engine.php "lines" ' . $bcfd61adc96d4b72 . ' ' . $a19cea75625f6914);
		}

		goto label126;

		label357:

		goto label130;

		label358:

		goto label603;

		label359:

		foreach ($B575e4db9840f393['streams'] as $ee6d1fc5d801b43f) {
			@unlink(STREAMS_TMP_PATH . 'stream_' . $ee6d1fc5d801b43f);
		}

		foreach ($B575e4db9840f393['lines_i'] as $f7107e3a92443147) {
			@unlink(LINES_TMP_PATH . 'line_i_' . $f7107e3a92443147);
		}

		goto label440;

		label386:

		$Ed7935619de087d2[] = PHP_BIN . ' ' . CRON_PATH . 'cache_engine.php "groups"';
		$Ed7935619de087d2[] = PHP_BIN . ' ' . CRON_PATH . 'cache_engine.php "lines_per_ip"';
		$Ed7935619de087d2[] = PHP_BIN . ' ' . CRON_PATH . 'cache_engine.php "theft_detection"';
		$D312762364397467 = new Multithread($Ed7935619de087d2, $Ee78463923199005);
		$D312762364397467->run();
		goto label167;

		label415:

		goto label497;

		label416:

		$B1d0cd7d7303c373 = getchangedstreams();
		$B575e4db9840f393['streams'] = $B1d0cd7d7303c373['delete'];
		goto label467;

		label423:

		$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `lines`;');
		$f97dc62b89e38d3f = $b62d6460eb33ea07->get_row()['count'];
		$Ff932a1295929769 = range(0, $f97dc62b89e38d3f, $E3665d09b9cea208);

		if ($Ff932a1295929769) {
			goto label332;
		}

		$Ff932a1295929769 = [0];
		goto label332;

		label440:

		foreach ($B575e4db9840f393['lines_c'] as $E42fc008c7ed25cd) {
			@unlink(LINES_TMP_PATH . 'line_c_' . $E42fc008c7ed25cd);
		}

		foreach ($B575e4db9840f393['lines_t'] as $B259c62825689c1b) {
			@unlink(LINES_TMP_PATH . 'line_t_' . $B259c62825689c1b);
		}

		goto label603;

		label467:

		if (!(0 < count($B1d0cd7d7303c373['changes']))) {
			goto label497;
		}

		foreach (array_chunk($B1d0cd7d7303c373['changes'], $E3665d09b9cea208) as $a4f07102a25c8088) {
			$Ed7935619de087d2[] = PHP_BIN . ' ' . CRON_PATH . 'cache_engine.php "streams_update" "' . implode(',', $a4f07102a25c8088) . '"';
		}

		label497:

		goto label386;

		label498:

		foreach ($aab84fb0c3e4fd47 as $E6f758b9be57a931 => $A29d8a2356bd9140) {
			file_put_contents(SERIES_TMP_PATH . 'episodes_' . $E6f758b9be57a931, igbinary_serialize($A29d8a2356bd9140));
		}

		if (XUI::$rSettings['cache_changes']) {
			goto label359;
		}

		foreach ([STREAMS_TMP_PATH, LINES_TMP_PATH, SERIES_TMP_PATH] as $d799202a12912af4) {
			foreach (scandir($d799202a12912af4) as $D6be258a9043b749) {
				if (!(filemtime($d799202a12912af4 . $D6be258a9043b749) < ($F56066ad7b074468 - 1))) {
					goto label545;
				}

				unlink($d799202a12912af4 . $D6be258a9043b749);

				label545:
			}
		}

		goto label358;

		label550:

		$cab57095cff24379 = range(0, $f5a61a35d83c21e7, $E3665d09b9cea208);

		if ($cab57095cff24379) {
			goto label559;
		}

		$cab57095cff24379 = [0];

		label559:

		foreach ($cab57095cff24379 as $bcfd61adc96d4b72) {
			$a19cea75625f6914 = $E3665d09b9cea208;

			if (!($f5a61a35d83c21e7 < ($bcfd61adc96d4b72 + $a19cea75625f6914))) {
				goto label570;
			}

			$a19cea75625f6914 = $f5a61a35d83c21e7 - $bcfd61adc96d4b72;

			label570:

			$Ed7935619de087d2[] = PHP_BIN . ' ' . CRON_PATH . ('cache_engine.php "streams" ' . $bcfd61adc96d4b72 . ' ' . $a19cea75625f6914);
		}

		goto label415;

		label584:

		$Cfc92b40098ebc54 = $e582de4d4a513639 = [];
		$b62d6460eb33ea07->query('SELECT `series_id`, MAX(`streams`.`added`) AS `last_modified` FROM `streams_episodes` LEFT JOIN `streams` ON `streams`.`id` = `streams_episodes`.`stream_id` GROUP BY `series_id`;');

		foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
			$Cfc92b40098ebc54[$Fb9da1713bff19ce['series_id']] = $Fb9da1713bff19ce['last_modified'];
		}

		$b62d6460eb33ea07->query('SELECT * FROM `streams_series`;');
		goto label624;

		label603:

		echo 'Cache updated!' . "\n";
		file_put_contents(CACHE_TMP_PATH . 'cache_complete', time());
		$b62d6460eb33ea07->query('UPDATE `settings` SET `last_cache` = ?, `last_cache_taken` = ?;', time(), time() - $F56066ad7b074468);
		goto label674;
		goto label674;

		label624:

		if (!$b62d6460eb33ea07->result) {
			goto label151;
		}

		if (!(0 < $b62d6460eb33ea07->result->rowCount())) {
			goto label673;
		}

		foreach ($b62d6460eb33ea07->result->fetchAll(PDO::FETCH_ASSOC) as $Fb9da1713bff19ce) {
			if (!isset($Cfc92b40098ebc54[$Fb9da1713bff19ce['id']])) {
				goto label652;
			}

			$Fb9da1713bff19ce['last_modified'] = $Cfc92b40098ebc54[$Fb9da1713bff19ce['id']];

			label652:

			$e582de4d4a513639[$Fb9da1713bff19ce['id']] = json_decode($Fb9da1713bff19ce['category_id'], true);
			file_put_contents(SERIES_TMP_PATH . 'series_' . $Fb9da1713bff19ce['id'], igbinary_serialize($Fb9da1713bff19ce));
		}

		label673:

		goto label151;
	}

	label674:

	goto label698;

	label675:

	echo 'Generating lines per ip...' . "\n";
	generatelinesperip();
	echo 'Detecting theft of VOD...' . "\n";
	generatetheftdetection();
	echo 'Clearing old data...' . "\n";
	goto label18;

	label683:

	global $b62d6460eb33ea07;
	global $E3665d09b9cea208;
	global $c834c3e7e1e6da5f;
	global $Ee78463923199005;
	global $ebb4852f69f0dca0;
	$F56066ad7b074468 = time();

	if (XUI::AB992B2373f7BeCa()) {
		goto label4;
	}

	echo 'XUI not running...' . "\n";
	exit();
	goto label4;

	label698:
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

goto label71;

label1:

$C98e11437faf4199 = getmypid();
register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../www/init.php';
ini_set('memory_limit', -1);
goto label23;

label23:

ini_set('max_execution_time', 0);
XUI::$rSettings = XUI::AC49b56dbe10e52c(true);
$E3665d09b9cea208 = 10000;
$Ee78463923199005 = XUI::$rSettings['cache_thread_count'] ?: 10;
$ebb4852f69f0dca0 = false;
goto label95;

label40:

goto label89;

label45:

$A7d54b094ae83c95 = $argv[1];
if (($A7d54b094ae83c95 == 'streams_update') || ($A7d54b094ae83c95 == 'lines_update')) {
	goto label122;
}

if (!(2 < count($argv))) {
	goto label121;
}

$E74f3185882c9d00 = intval($argv[2]);
$A57cdfc6daa6dbad = intval($argv[3]);
goto label121;

label71:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label82;
}

exit('Please run as XUI!' . "\n");

label82:

if (@$argc) {
	goto label1;
}

exit(0);
goto label1;

label89:

goto label133;

label95:

$E74f3185882c9d00 = $A57cdfc6daa6dbad = $A7d54b094ae83c95 = NULL;

if (1 < count($argv)) {
	goto label110;
}

shell_exec('kill -9 $(ps aux | grep \'cache_engine\' | grep -v grep | grep -v ' . $C98e11437faf4199 . ' | awk \'{print $2}\')');
goto label40;

label110:

goto label45;

label111:

if (!($A7d54b094ae83c95 == 'force')) {
	goto label120;
}

echo 'Forcing cache regen...' . "\n";
XUI::$rSettings['cache_changes'] = false;
$ebb4852f69f0dca0 = true;

label120:

goto label40;

label121:

goto label132;

label122:

$c834c3e7e1e6da5f = array_map('intval', explode(',', $argv[2]));

label132:

goto label111;

label133:

ab8369074df2aaa3($A7d54b094ae83c95, $E74f3185882c9d00, $A57cdfc6daa6dbad);
goto label141;

label141:

?>