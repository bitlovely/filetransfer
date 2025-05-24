<?php


class TS
{
	static public $rBuffer;
	static public $rPosition;
	static public $rByte;
	static public $rIndex;

	public function setPacket($E6ebe1d751d53850)
	{
		self::$rBuffer = $E6ebe1d751d53850;
		self::$rPosition = 7;
		self::$rByte = array_values(unpack('C', self::$rBuffer[0]))[0];
		self::$rIndex = 1;
	}

	public function getBits($F55077c7edc722ca)
	{
		goto label54;

		label2:

		self::$rByte = 0;
		goto label18;

		label5:

		self::$rByte = array_values(unpack('C', self::$rBuffer[self::$rIndex]))[0];

		label18:

		goto label49;

		label19:

		$c99954774a4fb4f5 <<= 1;

		if (!(self::$rByte & $A8dccae5b344040a)) {
			goto label26;
		}

		$c99954774a4fb4f5 |= 1;

		label26:

		$A8dccae5b344040a >>= 1;
		goto label28;

		label28:

		self::$rPosition -= 1;

		if (!(self::$rPosition < 0)) {
			goto label51;
		}

		self::$rPosition = 7;
		$A8dccae5b344040a = 1 << self::$rPosition;

		if (self::$rIndex < strlen(self::$rBuffer)) {
			goto label5;
		}

		goto label2;

		label49:

		self::$rIndex += 1;

		label51:

		goto label58;

		label52:

		return $c99954774a4fb4f5;
		goto label64;

		label54:

		$c99954774a4fb4f5 = 0;
		$A8dccae5b344040a = 1 << self::$rPosition;

		label58:

		if (!(0 < $F55077c7edc722ca)) {
			goto label52;
		}

		$F55077c7edc722ca -= 1;
		goto label19;

		label64:
	}

	public function parsePacket()
	{
		goto label125;

		label1:

		if (!$B9869413eae86beb['pointer_field']) {
			goto label9;
		}

		self::stepBytes($B9869413eae86beb['pointer_field']);

		label9:

		$B9869413eae86beb = array_merge($B9869413eae86beb, ['type' => 'pat', 'table_id' => self::getBits(8), 'section_syntax_indicator' => self::getBits(1), 'marker' => self::getBits(1), 'reserved_1' => self::getBits(2), 'section_length' => self::getBits(12), 'transport_stream_id' => self::getBits(16), 'reserved_2' => self::getBits(2), 'version_number' => self::getBits(5), 'current_next_indicator' => self::getBits(1), 'section_number' => self::getBits(8), 'last_section_number' => self::getBits(8)]);

		label59:

		goto label286;

		label60:

		$Dc768599d10eb21d = self::getBits(15);
		self::getBits(1);
		$C1455725cb747ec5 = self::getBits(15);
		self::getBits(1);
		$B9869413eae86beb['pts'] = ($b28a1bc74e4383a7 << 30) + ($Dc768599d10eb21d << 15) + $C1455725cb747ec5;
		goto label382;

		label81:

		unset($B9869413eae86beb['adaptation_field_length']);
		goto label191;

		label83:

		$B9869413eae86beb = array_merge($B9869413eae86beb, ['discontinuity_indicator' => self::getBits(1), 'random_access_indicator' => self::getBits(1), 'priority_indicator' => self::getBits(1), 'pcr_flag' => self::getBits(1), 'opcr_flag' => self::getBits(1), 'splicing_point_flag' => self::getBits(1), 'transport_private_data_flag' => self::getBits(1), 'adaptation_field_extension_flag' => self::getBits(1)]);

		if (!$B9869413eae86beb['pcr_flag']) {
			goto label264;
		}

		goto label240;

		label125:

		$B9869413eae86beb = ['sync_byte' => self::getBits(8), 'transport_error_indicator' => self::getBits(1), 'payload_unit_start_indicator' => self::getBits(1), 'transport_priority' => self::getBits(1), 'pid' => self::getBits(13), 'scrambling_control' => self::getBits(2), 'adaptation_field_exist' => self::getBits(2), 'continuity_counter' => self::getBits(4)];
		if (!($B9869413eae86beb['adaptation_field_exist'] || ($B9869413eae86beb['adaptation_field_exist'] == 3))) {
			goto label220;
		}

		$Ce8b970c81364e22 = self::$rIndex;
		$B9869413eae86beb['adaptation_field_length'] = self::getBits(8);

		if ($B9869413eae86beb['adaptation_field_length'] == 7) {
			goto label83;
		}

		goto label81;

		label178:

		if (!$B9869413eae86beb['transport_private_data_flag']) {
			goto label191;
		}

		$B9869413eae86beb['transport_private_data_length'] = self::getBits(8);
		self::stepBytes($B9869413eae86beb['transport_private_data_length']);

		label191:

		goto label220;

		label192:

		goto label59;

		label193:

		$B9869413eae86beb['pointer_field'] = self::getBits(8);
		goto label1;

		label199:

		$acfdd503483706cc = self::getBits(15);
		self::getBits(1);
		$e399476609d31ed9 = self::getBits(15);
		self::getBits(1);
		$B9869413eae86beb['dts'] = ($cfd47f9c753b5d2f << 30) + ($acfdd503483706cc << 15) + $e399476609d31ed9;
		goto label192;

		label220:

		if ($B9869413eae86beb['pid'] == 0) {
			goto label193;
		}

		if (!$B9869413eae86beb['payload_unit_start_indicator']) {
			goto label192;
		}

		self::$rBuffer = substr(self::$rBuffer, self::$rIndex, 188);
		self::$rIndex = 0;
		goto label288;

		label240:

		$B9869413eae86beb = array_merge($B9869413eae86beb, ['program_clock_reference_base' => self::getBits(33), 'reserved_pcr' => self::getBits(6), 'program_clock_reference_extension' => self::getBits(9)]);
		$B9869413eae86beb['pcr'] = (($B9869413eae86beb['program_clock_reference_base'] * 300) + $B9869413eae86beb['program_clock_reference_extension']) / 27000000.0;

		label264:

		if (!$B9869413eae86beb['opcr_flag']) {
			goto label405;
		}

		$B9869413eae86beb = array_merge($B9869413eae86beb, ['original_program_clock_reference_base' => self::getBits(33), 'reserved_opcr' => self::getBits(6), 'original_program_clock_reference_extension' => self::getBits(9)]);
		goto label398;

		label286:

		return $B9869413eae86beb;
		goto label415;

		label288:

		$B9869413eae86beb = array_merge($B9869413eae86beb, ['type' => 'pes', 'packet_start_prefix' => self::getBits(24), 'stream_id' => self::getBits(8), 'pes_packet_length' => self::getBits(16), 'marker_bits' => self::getBits(2), 'scrambling_control' => self::getBits(2), 'priority' => self::getBits(1), 'data_alignment_indicator' => self::getBits(1), 'copyright' => self::getBits(1), 'original_or_copy' => self::getBits(1), 'pts_dts_indicator' => self::getBits(2), 'escr_flag' => self::getBits(1), 'es_rate_flag' => self::getBits(1), 'dsm_trick_mode_flag' => self::getBits(1), 'additional_copy_info_flag' => self::getBits(1), 'crc_flag' => self::getBits(1), 'extension_flag' => self::getBits(1), 'pes_header_length' => self::getBits(8)]);
		if (!(($B9869413eae86beb['pts_dts_indicator'] == 2) || ($B9869413eae86beb['pts_dts_indicator'] == 3))) {
			goto label382;
		}

		self::getBits(4);
		$b28a1bc74e4383a7 = self::getBits(3);
		self::getBits(1);
		goto label60;

		label382:

		if (!($B9869413eae86beb['pts_dts_indicator'] == 3)) {
			goto label192;
		}

		self::getBits(4);
		$cfd47f9c753b5d2f = self::getBits(3);
		self::getBits(1);
		goto label199;

		label398:

		$B9869413eae86beb['opcr'] = (($B9869413eae86beb['original_program_clock_reference_base'] * 300) + $B9869413eae86beb['original_program_clock_reference_extension']) / 27000000.0;

		label405:

		if (!$B9869413eae86beb['splicing_point_flag']) {
			goto label414;
		}

		$B9869413eae86beb['splice_countdown'] = self::getBits(8);

		label414:

		goto label178;

		label415:
	}

	public function stepBytes($daf83d49b4736e8d)
	{
		$ba2d146bb5a55097 = substr(self::$rBuffer, self::$rIndex - 1, $daf83d49b4736e8d);

		foreach (range(0, $daf83d49b4736e8d) as $df6991d59f367c7e) {
			self::getBits(8);
		}

		return $ba2d146bb5a55097;
	}
}

?>