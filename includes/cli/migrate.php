<?php


goto label3113;

label1:

file_put_contents(TMP_PATH . '.migration.pid', getmypid());
file_put_contents(TMP_PATH . '.migration.status', 1);
$ede772dc4aad8c89 = new Database('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0', true);

if (!$ede772dc4aad8c89->connected) {
	goto label27;
}

goto label25;

label25:

echo 'Connected to migration database.' . "\n";
goto label45;

label27:

echo 'Failed to connect to migration database, or database is empty!' . "\n";
file_put_contents(TMP_PATH . '.migration.status', 3);
goto label44;

label35:

if (!is_object($ede772dc4aad8c89)) {
	goto label3138;
}

$ede772dc4aad8c89->close_mysql();
goto label3138;

label44:

exit();

label45:

$ede772dc4aad8c89->query('SHOW TABLES LIKE \'access_codes\';');

if (!(0 < $ede772dc4aad8c89->num_rows())) {
	goto label57;
}

echo "\n" . 'Can\'t migrate from XUI to XUI! Use the restore functions instead.' . "\n\n";
goto label56;

label56:

exit();

label57:

try {
	goto label2218;

	label59:

	if (!in_array('streaming_servers', $af280045ef711f83)) {
		goto label557;
	}

	$ede772dc4aad8c89->query('SELECT * FROM `streaming_servers`;');
	$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();
	goto label464;

	label73:

	foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
		try {
			$D577b2a7889a5fb6['can_view_vod'] = $D577b2a7889a5fb6['reset_stb_data'];
			$D577b2a7889a5fb6['allow_restrictions'] = 1;
			$D577b2a7889a5fb6['allow_change_username'] = 1;
			$D577b2a7889a5fb6['allow_change_password'] = 1;
			$D577b2a7889a5fb6['minimum_username_length'] = 8;
			$D577b2a7889a5fb6['minimum_password_length'] = 8;
			$D577b2a7889a5fb6 = C73Ed8D0b70CE12F('users_groups', $D577b2a7889a5fb6);
			$Fac87d38f7786df0 = c483A3a59265139E($D577b2a7889a5fb6);
			$B91645b8411dc88c = 'INSERT INTO `users_groups`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
			$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
		}
		catch (Exception $E0f0519e12b13b6b) {
			echo 'Error: ' . $E0f0519e12b13b6b . "\n";
		}
	}

	label116:

	if (!in_array('groups', $af280045ef711f83)) {
		goto label167;
	}

	goto label1212;

	label124:

	foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
		try {
			$D577b2a7889a5fb6['can_view_vod'] = $D577b2a7889a5fb6['reset_stb_data'];
			$D577b2a7889a5fb6['allow_restrictions'] = 1;
			$D577b2a7889a5fb6['allow_change_username'] = 1;
			$D577b2a7889a5fb6['allow_change_password'] = 1;
			$D577b2a7889a5fb6['minimum_username_length'] = 8;
			$D577b2a7889a5fb6['minimum_password_length'] = 8;
			$D577b2a7889a5fb6 = C73Ed8D0B70Ce12F('users_groups', $D577b2a7889a5fb6);
			$Fac87d38f7786df0 = C483A3A59265139E($D577b2a7889a5fb6);
			$B91645b8411dc88c = 'INSERT INTO `users_groups`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
			$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
		}
		catch (Exception $E0f0519e12b13b6b) {
			echo 'Error: ' . $E0f0519e12b13b6b . "\n";
		}
	}

	label167:

	if (!in_array('groups', $af280045ef711f83)) {
		goto label1348;
	}

	goto label1617;

	label175:

	if (!in_array('categories', $af280045ef711f83)) {
		goto label1508;
	}

	$ede772dc4aad8c89->query('SELECT * FROM `categories`;');
	$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

	if (!(0 < count($e02ff34f7d898a7b))) {
		goto label2446;
	}

	goto label2403;

	label196:

	$b62d6460eb33ea07->query('TRUNCATE `blocked_uas`;');
	echo 'Blocking ' . number_format(count($e02ff34f7d898a7b), 0) . ' user-agents.' . "\n";

	foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
		try {
			$D577b2a7889a5fb6 = c73ed8D0B70Ce12f('blocked_uas', $D577b2a7889a5fb6);
			$Fac87d38f7786df0 = C483A3A59265139e($D577b2a7889a5fb6);
			$B91645b8411dc88c = 'INSERT INTO `blocked_uas`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
			$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
		}
		catch (Exception $E0f0519e12b13b6b) {
			echo 'Error: ' . $E0f0519e12b13b6b . "\n";
		}
	}

	label239:

	goto label1850;

	label240:

	foreach ($C455840d1f015c68 as $Feb130957c9ca68a) {
		try {
			$ede772dc4aad8c89->query('SELECT * FROM `users` LIMIT ' . $Feb130957c9ca68a . ', 1000;');
			$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

			foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
				goto label255;

				label255:

				if (!empty($D577b2a7889a5fb6['isp_desc'])) {
					goto label263;
				}

				$D577b2a7889a5fb6['isp_desc'] = NULL;

				label263:

				if (!isset($d094d3e133ec8c03[$D577b2a7889a5fb6['id']])) {
					goto label307;
				}

				$D577b2a7889a5fb6['allowed_outputs'] = '[' . implode(',', $d094d3e133ec8c03[$D577b2a7889a5fb6['id']]) . ']';
				goto label307;

				label283:

				$D577b2a7889a5fb6 = c73Ed8d0b70Ce12f('lines', $D577b2a7889a5fb6);
				$Fac87d38f7786df0 = C483A3A59265139E($D577b2a7889a5fb6);
				$B91645b8411dc88c = 'INSERT INTO `lines`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
				$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
				goto label336;

				label307:

				if (!isset($D577b2a7889a5fb6['output'])) {
					goto label316;
				}

				$D577b2a7889a5fb6['allowed_outputs'] = $D577b2a7889a5fb6['output'];

				label316:

				$D577b2a7889a5fb6['bouquet'] = '[' . implode(',', array_map('intval', json_decode($D577b2a7889a5fb6['bouquet'], true))) . ']';
				goto label283;

				label336:
			}
		}
		catch (Exception $E0f0519e12b13b6b) {
			echo 'Error: ' . $E0f0519e12b13b6b . "\n";
		}
	}

	label345:

	try {
		goto label407;

		label347:

		foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
			$D577b2a7889a5fb6 = c73eD8D0b70Ce12f('watch_folders', $D577b2a7889a5fb6);
			$D577b2a7889a5fb6['bouquets'] = '[' . implode(',', array_map('intval', json_decode($D577b2a7889a5fb6['bouquets'], true))) . ']';
			$D577b2a7889a5fb6['fb_bouquets'] = '[' . implode(',', array_map('intval', json_decode($D577b2a7889a5fb6['fb_bouquets'], true))) . ']';
			$Fac87d38f7786df0 = c483A3A59265139E($D577b2a7889a5fb6);
			$B91645b8411dc88c = 'INSERT INTO `watch_folders`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
			$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
		}

		label406:

		goto label452;

		label407:

		if (!in_array('watch_folders', $af280045ef711f83)) {
			goto label406;
		}

		$ede772dc4aad8c89->query('SHOW TABLES LIKE \'watch_folders\';');

		if (!(0 < $ede772dc4aad8c89->num_rows())) {
			goto label406;
		}

		$ede772dc4aad8c89->query('SELECT COUNT(*) AS `count` FROM `watch_folders`;');
		$d353a4da8a0bb857 = $ede772dc4aad8c89->get_row()['count'];
		goto label431;

		label431:

		if (!(0 < $d353a4da8a0bb857)) {
			goto label406;
		}

		$b62d6460eb33ea07->query('TRUNCATE `watch_folders`;');
		echo 'Adding ' . number_format($d353a4da8a0bb857, 0) . ' folders to watch.' . "\n";
		$ede772dc4aad8c89->query('SELECT * FROM `watch_folders`;');
		$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();
		goto label347;
	}
	catch (Exception $E0f0519e12b13b6b) {
		echo 'Error: ' . $E0f0519e12b13b6b . "\n";
	}

	goto label768;

	label458:

	exit();

	label459:

	echo "\n" . 'Migrating database to XUI...' . "\n\n";
	echo 'Remapping bouquets.' . "\n";
	$cb98d4eed473e4c8 = $B51da85892620f9b = [];
	goto label2992;

	label464:

	if (!(0 < count($e02ff34f7d898a7b))) {
		goto label557;
	}

	$cc6ea4e294b9cb00 = false;
	$b62d6460eb33ea07->query('TRUNCATE `servers`;');
	echo 'Moving ' . number_format(count($e02ff34f7d898a7b), 0) . ' servers.' . "\n";

	foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
		/*
		#unhandled Range 487 => 553
		*/
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		487 230  NOP/0                     ?0        ?0                   ?0                  	;1	<<550
		488 230  GOTO/253                  ?0        ?512                 ?326                	;0
		489 232  INIT_FCALL_BY_NAME/59     ?0        ?0                   'C73ED8D0b70Ce12f'  	;2
		490 232  SEND_VAL_EX/116           ?80       'servers'            ?1                  	;0
		491 232  SEND_VAR_EX/66            ?96       $D577b2a7889a5fb6    ?2                  	;0
		492 232  DO_FCALL_BY_NAME/131      $244=     ?0                   ?0                  	;0
		493 232  ASSIGN/38                 ?213      $D577b2a7889a5fb6    $244:C73ED8D0b70Ce12f('servers', $D577b2a7889a5fb6)	;0
		494 233  INIT_FCALL_BY_NAME/59     ?0        ?0                   'c483a3A59265139e'  	;1
		495 233  SEND_VAR_EX/66            ?80       $D577b2a7889a5fb6    ?1                  	;0
		496 233  DO_FCALL_BY_NAME/131      $246=     ?0                   ?0                  	;0
		497 233  ASSIGN/38                 ?215      $Fac87d38f7786df0    $246:c483a3A59265139e($D577b2a7889a5fb6)	;0
		498 234  FETCH_DIM_R/81            $248=     $Fac87d38f7786df0    'columns'           	;0
		499 234  CONCAT/8                  #249=     'INSERT INTO `servers`(' $248:$Fac87d38f7786df0['columns']	;0
		500 234  CONCAT/8                  #250=     #249:'INSERT INTO `servers`(' . $Fac87d38f7786df0['columns'] ') VALUES('         	;0
		501 234  FETCH_DIM_R/81            $251=     $Fac87d38f7786df0    'placeholder'       	;0
		502 234  CONCAT/8                  #252=     #250:'INSERT INTO `servers`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' $251:$Fac87d38f7786df0['placeholder']	;0
		503 234  CONCAT/8                  #253=     #252:'INSERT INTO `servers`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] ');'                	;0
		504 234  ASSIGN/38                 ?222      $B91645b8411dc88c    #253:'INSERT INTO `servers`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');'	;0
		505 235  INIT_METHOD_CALL/112      ?0        $b62d6460eb33ea07    'query'             	;1
		506 235  SEND_VAR_EX/66            ?80       $B91645b8411dc88c    ?1                  	;0
		507 235  FETCH_DIM_R/81            $255=     $Fac87d38f7786df0    'data'              	;0
		508 235  SEND_UNPACK/165           ?80       $255:$Fac87d38f7786df0['data'] ?1                  	;0
		509 235  DO_FCALL/60               ?224      ?0                   ?0                  	;0
		510 236  NOP/0                     ?0        ?0                   ?0                  	;1
		511 236  GOTO/253                  ?0        ?549                 ?340                	;0
		512 238  ASSIGN_DIM/147            ?225      $D577b2a7889a5fb6    'server_type'       	;0
		513 238  OP_DATA/137               ?0        0                    ?0                  	;0
		514 239  ASSIGN_DIM/147            ?226      $D577b2a7889a5fb6    'parent_id'         	;0
		515 239  OP_DATA/137               ?0        NULL                 ?0                  	;0
		516 240  ASSIGN_DIM/147            ?227      $D577b2a7889a5fb6    'http_broadcast_port'	;0
		517 240  OP_DATA/137               ?0        80                   ?0                  	;0
		518 241  ASSIGN_DIM/147            ?228      $D577b2a7889a5fb6    'https_broadcast_port'	;0
		519 241  OP_DATA/137               ?0        443                  ?0                  	;0
		520 242  ASSIGN_DIM/147            ?229      $D577b2a7889a5fb6    'rtmp_port'         	;0
		521 242  OP_DATA/137               ?0        8880                 ?0                  	;0
		522 243  NOP/0                     ?0        ?0                   ?0                  	;1
		523 243  GOTO/253                  ?0        ?531                 ?351                	;0
		524 245  NOP/0                     ?0        ?0                   ?0                  	;1
		525 245  GOTO/253                  ?0        ?529                 ?352                	;0
		526 247  ASSIGN_DIM/147            ?230      $D577b2a7889a5fb6    'is_main'           	;0
		527 247  OP_DATA/137               ?0        1                    ?0                  	;0
		528 248  ASSIGN/38                 ?231      $cc6ea4e294b9cb00    true                	;0
		529 250  NOP/0                     ?0        ?0                   ?0                  	;1
		530 250  GOTO/253                  ?0        ?489                 ?356                	;0
		531 252  ASSIGN_DIM/147            ?232      $D577b2a7889a5fb6    'total_services'    	;0
		532 252  OP_DATA/137               ?0        4                    ?0                  	;0
		533 253  ASSIGN_DIM/147            ?233      $D577b2a7889a5fb6    'http_ports_add'    	;0
		534 253  OP_DATA/137               ?0        NULL                 ?0                  	;0
		535 254  ASSIGN_DIM/147            ?234      $D577b2a7889a5fb6    'https_ports_add'   	;0
		536 254  OP_DATA/137               ?0        NULL                 ?0                  	;0
		537 255  FETCH_DIM_R/81            $267=     $D577b2a7889a5fb6    'can_delete'        	;0
		538 255  IS_EQUAL/17               #268=     $267:$D577b2a7889a5fb6['can_delete'] 0                   	;0
		539 255  JMPZ_EX/46                #268=     #268:!$cc6ea4e294b9cb00 ?542                	;0	>>542
		540 255  BOOL_NOT/13               #269=     $cc6ea4e294b9cb00    ?0                  	;0
		541 255  BOOL/52                   #268=     #269:!$cc6ea4e294b9cb00 ?0                  	;0
		542 255  JMPZ/43                   ?0        #268:!$cc6ea4e294b9cb00 ?545                	;0	>>545	<<539
		543 256  NOP/0                     ?0        ?0                   ?0                  	;1
		544 256  GOTO/253                  ?0        ?526                 ?365                	;0
		545 258  ASSIGN_DIM/147            ?238      $D577b2a7889a5fb6    'is_main'           	;0	<<542
		546 258  OP_DATA/137               ?0        0                    ?0                  	;0
		547 259  NOP/0                     ?0        ?0                   ?0                  	;1
		548 259  GOTO/253                  ?0        ?524                 ?368                	;0
		549 260  JMP/42                    ?0        ?554                 ?0                  	;0	>>554
		550 261  CATCH/107                 ?1        'Exception'          $E0f0519e12b13b6b   	;0 CB	>>554,487
		551 262  CONCAT/8                  #271=     'Error: '            $E0f0519e12b13b6b   	;0
		552 262  CONCAT/8                  #272=     #271:'Error: ' . $E0f0519e12b13b6b "\n"                	;0
		553 262  ECHO/40                   ?0        #272:'Error: ' . $E0f0519e12b13b6b . "\n" ?0                  	;0
		*/
		goto label512;

		label489:

		$D577b2a7889a5fb6 = C73ED8D0b70Ce12f('servers', $D577b2a7889a5fb6);
		$Fac87d38f7786df0 = c483a3A59265139e($D577b2a7889a5fb6);
		$B91645b8411dc88c = 'INSERT INTO `servers`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
		$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
		goto label549;

		label512:

		$D577b2a7889a5fb6['server_type'] = 0;
		$D577b2a7889a5fb6['parent_id'] = NULL;
		$D577b2a7889a5fb6['http_broadcast_port'] = 80;
		$D577b2a7889a5fb6['https_broadcast_port'] = 443;
		$D577b2a7889a5fb6['rtmp_port'] = 8880;
		goto label531;

		label524:

		goto label529;

		label526:

		$D577b2a7889a5fb6['is_main'] = 1;
		$cc6ea4e294b9cb00 = true;

		label529:

		goto label489;

		label531:

		$D577b2a7889a5fb6['total_services'] = 4;
		$D577b2a7889a5fb6['http_ports_add'] = NULL;
		$D577b2a7889a5fb6['https_ports_add'] = NULL;
		goto label526;
		$D577b2a7889a5fb6['is_main'] = 0;
		goto label524;

		label549:

		echo 'Error: ' . $E0f0519e12b13b6b . "\n";
	}

	goto label557;

	label557:

	if (!in_array('servers', $af280045ef711f83)) {
		goto label1596;
	}

	$ede772dc4aad8c89->query('SELECT * FROM `servers` ORDER BY `id` ASC;');
	goto label2895;

	label568:

	$C455840d1f015c68 = [0];

	label569:

	foreach ($C455840d1f015c68 as $Feb130957c9ca68a) {
		try {
			$ede772dc4aad8c89->query('SELECT * FROM `stream_servers` LIMIT ' . $Feb130957c9ca68a . ', 1000;');
			$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

			if (!(0 < count($e02ff34f7d898a7b))) {
				goto label652;
			}

			foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
				goto label611;

				label592:

				$D577b2a7889a5fb6['monitor_pid'] = NULL;

				if (!($D577b2a7889a5fb6['pid'] <= 0)) {
					goto label603;
				}

				$D577b2a7889a5fb6['pid'] = NULL;

				label603:

				$D577b2a7889a5fb6 = C73Ed8d0B70ce12f('streams_servers', $D577b2a7889a5fb6);
				goto label631;

				label611:
				if (!(!$D577b2a7889a5fb6['parent_id'] || ($D577b2a7889a5fb6['parent_id'] == 0))) {
					goto label624;
				}

				$D577b2a7889a5fb6['parent_id'] = NULL;

				label624:

				$D577b2a7889a5fb6['stream_status'] = 0;
				$D577b2a7889a5fb6['stream_started'] = NULL;
				goto label592;

				label631:

				$Fac87d38f7786df0 = C483A3a59265139E($D577b2a7889a5fb6);
				$B91645b8411dc88c = 'INSERT INTO `streams_servers`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
				$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
				goto label650;

				label650:
			}
		}
		catch (Exception $E0f0519e12b13b6b) {
			echo 'Error: ' . $E0f0519e12b13b6b . "\n";
		}
	}

	label659:

	goto label1378;

	label660:

	foreach ($C455840d1f015c68 as $Feb130957c9ca68a) {
		try {
			$ede772dc4aad8c89->query('SELECT * FROM `streams` LIMIT ' . $Feb130957c9ca68a . ', 1000;');
			$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

			foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
				/*
				#unhandled Range 672 => 750
				*/
				/*
				#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
				672 331  NOP/0                     ?0        ?0                   ?0                  	;1	<<747
				673 331  NOP/0                     ?0        ?0                   ?0                  	;1
				674 331  GOTO/253                  ?0        ?699                 ?438                	;0
				675 333  FETCH_DIM_R/81            $323=     $D577b2a7889a5fb6    'movie_propeties'   	;0
				676 333  ASSIGN_DIM/147            ?290      $D577b2a7889a5fb6    'movie_properties'  	;0
				677 333  OP_DATA/137               ?0        $323:$D577b2a7889a5fb6['movie_propeties'] ?0                  	;0
				678 334  FETCH_DIM_R/81            $324=     $D577b2a7889a5fb6    'target_container'  	;0
				679 334  BOOL_NOT/13               #325=     $324:$D577b2a7889a5fb6['target_container'] ?0                  	;0
				680 334  JMPZ/43                   ?0        #325:!$D577b2a7889a5fb6['target_container'] ?684                	;0	>>684
				681 335  NOP/0                     ?0        ?0                   ?0                  	;1
				682 335  NOP/0                     ?0        ?0                   ?0                  	;1
				683 335  GOTO/253                  ?0        ?692                 ?442                	;0
				684 337  INIT_FCALL_BY_NAME/59     ?0        ?0                   'json_decode'       	;2	<<680
				685 337  FETCH_DIM_FUNC_ARG/93     $327=     $D577b2a7889a5fb6    'target_container'  	;1
				686 337  SEND_VAR_EX/66            ?80       $327:$D577b2a7889a5fb6['target_container'] ?1                  	;0
				687 337  SEND_VAL_EX/116           ?96       true                 ?2                  	;0
				688 337  DO_FCALL_BY_NAME/131      $328=     ?0                   ?0                  	;0
				689 337  FETCH_DIM_R/81            $329=     $328:json_decode($D577b2a7889a5fb6['target_container'], true)[0] 0                   	;0
				690 337  ASSIGN_DIM/147            ?294      $D577b2a7889a5fb6    'target_container'  	;0
				691 337  OP_DATA/137               ?0        $329:json_decode($D577b2a7889a5fb6['target_container'], true)[0] ?0                  	;0
				692 339  FETCH_DIM_R/81            $330=     $D577b2a7889a5fb6    'id'                	;0
				693 339  FETCH_DIM_R/81            $332=     $D577b2a7889a5fb6    'cchannel_rsources' 	;0
				694 339  ASSIGN_DIM/147            ?299      $E01d2859041cdc1e    $330:$D577b2a7889a5fb6['id']	;0
				695 339  OP_DATA/137               ?0        $332:$D577b2a7889a5fb6['cchannel_rsources'] ?0                  	;0
				696 340  NOP/0                     ?0        ?0                   ?0                  	;1
				697 340  NOP/0                     ?0        ?0                   ?0                  	;1
				698 340  GOTO/253                  ?0        ?722                 ?451                	;0
				699 342  INIT_FCALL_BY_NAME/59     ?0        ?0                   'json_decode'       	;2
				700 342  FETCH_DIM_FUNC_ARG/93     $333=     $D577b2a7889a5fb6    'external_push'     	;1
				701 342  SEND_VAR_EX/66            ?80       $333:$D577b2a7889a5fb6['external_push'] ?1                  	;0
				702 342  SEND_VAL_EX/116           ?96       true                 ?2                  	;0
				703 342  DO_FCALL_BY_NAME/131      $334=     ?0                   ?0                  	;0
				704 342  ASSIGN/38                 ?303      $ccda40e0550606f4    $334:json_decode($D577b2a7889a5fb6['external_push'], true)	;0
				705 343  JMPZ/43                   ?0        $ccda40e0550606f4    ?709                	;0	>>709
				706 344  NOP/0                     ?0        ?0                   ?0                  	;1
				707 344  NOP/0                     ?0        ?0                   ?0                  	;1
				708 344  GOTO/253                  ?0        ?711                 ?456                	;0
				709 346  ASSIGN_DIM/147            ?304      $D577b2a7889a5fb6    'external_push'     	;0	<<705
				710 346  OP_DATA/137               ?0        '{}'                 ?0                  	;0
				711 348  INIT_FCALL_BY_NAME/59     ?0        ?0                   'intval'            	;1
				712 348  FETCH_DIM_FUNC_ARG/93     $338=     $D577b2a7889a5fb6    'category_id'       	;1
				713 348  SEND_VAR_EX/66            ?80       $338:$D577b2a7889a5fb6['category_id'] ?1                  	;0
				714 348  DO_FCALL_BY_NAME/131      $339=     ?0                   ?0                  	;0
				715 348  CONCAT/8                  #340=     '['                  $339:intval($D577b2a7889a5fb6['category_id'])	;0
				716 348  CONCAT/8                  #341=     #340:'[' . intval($D577b2a7889a5fb6['category_id']) ']'                 	;0
				717 348  ASSIGN_DIM/147            ?305      $D577b2a7889a5fb6    'category_id'       	;0
				718 348  OP_DATA/137               ?0        #341:'[' . intval($D577b2a7889a5fb6['category_id']) . ']' ?0                  	;0
				719 349  NOP/0                     ?0        ?0                   ?0                  	;1
				720 349  NOP/0                     ?0        ?0                   ?0                  	;1
				721 349  GOTO/253                  ?0        ?675                 ?465                	;0
				722 351  INIT_FCALL_BY_NAME/59     ?0        ?0                   'c73eD8d0B70ce12F'  	;2
				723 351  SEND_VAL_EX/116           ?80       'streams'            ?1                  	;0
				724 351  SEND_VAR_EX/66            ?96       $D577b2a7889a5fb6    ?2                  	;0
				725 351  DO_FCALL_BY_NAME/131      $342=     ?0                   ?0                  	;0
				726 351  ASSIGN/38                 ?311      $D577b2a7889a5fb6    $342:c73eD8d0B70ce12F('streams', $D577b2a7889a5fb6)	;0
				727 352  INIT_FCALL_BY_NAME/59     ?0        ?0                   'C483a3a59265139e'  	;1
				728 352  SEND_VAR_EX/66            ?80       $D577b2a7889a5fb6    ?1                  	;0
				729 352  DO_FCALL_BY_NAME/131      $344=     ?0                   ?0                  	;0
				730 352  ASSIGN/38                 ?313      $Fac87d38f7786df0    $344:C483a3a59265139e($D577b2a7889a5fb6)	;0
				731 353  FETCH_DIM_R/81            $346=     $Fac87d38f7786df0    'columns'           	;0
				732 353  CONCAT/8                  #347=     'INSERT INTO `streams`(' $346:$Fac87d38f7786df0['columns']	;0
				733 353  CONCAT/8                  #348=     #347:'INSERT INTO `streams`(' . $Fac87d38f7786df0['columns'] ') VALUES('         	;0
				734 353  FETCH_DIM_R/81            $349=     $Fac87d38f7786df0    'placeholder'       	;0
				735 353  CONCAT/8                  #350=     #348:'INSERT INTO `streams`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' $349:$Fac87d38f7786df0['placeholder']	;0
				736 353  CONCAT/8                  #351=     #350:'INSERT INTO `streams`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] ');'                	;0
				737 353  ASSIGN/38                 ?320      $B91645b8411dc88c    #351:'INSERT INTO `streams`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');'	;0
				738 354  INIT_METHOD_CALL/112      ?0        $b62d6460eb33ea07    'query'             	;1
				739 354  SEND_VAR_EX/66            ?80       $B91645b8411dc88c    ?1                  	;0
				740 354  FETCH_DIM_R/81            $353=     $Fac87d38f7786df0    'data'              	;0
				741 354  SEND_UNPACK/165           ?80       $353:$Fac87d38f7786df0['data'] ?1                  	;0
				742 354  DO_FCALL/60               ?322      ?0                   ?0                  	;0
				743 355  NOP/0                     ?0        ?0                   ?0                  	;1
				744 355  NOP/0                     ?0        ?0                   ?0                  	;1
				745 355  GOTO/253                  ?0        ?746                 ?479                	;0
				746 356  JMP/42                    ?0        ?751                 ?0                  	;0	>>751
				747 357  CATCH/107                 ?1        'Exception'          $E0f0519e12b13b6b   	;0 CB	>>751,672
				748 358  CONCAT/8                  #355=     'Error: '            $E0f0519e12b13b6b   	;0
				749 358  CONCAT/8                  #356=     #355:'Error: ' . $E0f0519e12b13b6b "\n"                	;0
				750 358  ECHO/40                   ?0        #356:'Error: ' . $E0f0519e12b13b6b . "\n" ?0                  	;0
				*/
				goto label699;

				label675:

				$D577b2a7889a5fb6['movie_properties'] = $D577b2a7889a5fb6['movie_propeties'];
				goto label692;
				$D577b2a7889a5fb6['target_container'] = json_decode($D577b2a7889a5fb6['target_container'], true)[0];

				label692:

				$E01d2859041cdc1e[$D577b2a7889a5fb6['id']] = $D577b2a7889a5fb6['cchannel_rsources'];
				goto label722;

				label699:

				$ccda40e0550606f4 = json_decode($D577b2a7889a5fb6['external_push'], true);
				goto label711;
				$D577b2a7889a5fb6['external_push'] = '{}';

				label711:

				$D577b2a7889a5fb6['category_id'] = '[' . intval($D577b2a7889a5fb6['category_id']) . ']';
				goto label675;

				label722:

				$D577b2a7889a5fb6 = c73eD8d0B70ce12F('streams', $D577b2a7889a5fb6);
				$Fac87d38f7786df0 = C483a3a59265139e($D577b2a7889a5fb6);
				$B91645b8411dc88c = 'INSERT INTO `streams`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
				$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
				goto label746;

				label746:

				echo 'Error: ' . $E0f0519e12b13b6b . "\n";
			}
		}
		catch (Exception $E0f0519e12b13b6b) {
			echo 'Error: ' . $E0f0519e12b13b6b . "\n";
		}
	}

	label760:

	if (!in_array('streams_options', $af280045ef711f83)) {
		goto label2055;
	}

	goto label1239;

	label768:

	try {
		$ede772dc4aad8c89->query('SELECT * FROM `settings` LIMIT 1;');
		$f1dcaed925076e67 = $ede772dc4aad8c89->get_row();
		$b62d6460eb33ea07->query('UPDATE `settings` SET `server_name` = ?, `default_timezone` = ?;', $f1dcaed925076e67['server_name'], $f1dcaed925076e67['default_timezone']);
	}
	catch (Exception $E0f0519e12b13b6b) {
		echo 'Error: ' . $E0f0519e12b13b6b . "\n";
	}

	try {
		$ede772dc4aad8c89->query('SHOW TABLES LIKE \'admin_settings\';');

		if (!(0 < $ede772dc4aad8c89->num_rows())) {
			goto label832;
		}

		$c29cab7b52a7dc62 = [];
		$ede772dc4aad8c89->query('SELECT * FROM `admin_settings`;');

		foreach ($ede772dc4aad8c89->get_rows() as $Fb9da1713bff19ce) {
			$c29cab7b52a7dc62[$Fb9da1713bff19ce['type']] = $Fb9da1713bff19ce['value'];
		}
		if (!((0 < strlen($c29cab7b52a7dc62['recaptcha_v2_secret_key'])) && (0 < strlen($c29cab7b52a7dc62['recaptcha_v2_site_key'])))) {
			goto label832;
		}

		$b62d6460eb33ea07->query('UPDATE `settings` SET `recaptcha_v2_secret_key` = ?, `recaptcha_v2_site_key` = ?;', $c29cab7b52a7dc62['recaptcha_v2_secret_key'], $c29cab7b52a7dc62['recaptcha_v2_site_key']);
	}
	catch (Exception $E0f0519e12b13b6b) {
		echo 'Error: ' . $E0f0519e12b13b6b . "\n";
	}

	goto label3078;

	label838:

	if ($C455840d1f015c68) {
		goto label841;
	}

	$C455840d1f015c68 = [0];

	label841:

	foreach ($C455840d1f015c68 as $Feb130957c9ca68a) {
		try {
			$ede772dc4aad8c89->query('SELECT * FROM `reg_users` LIMIT ' . $Feb130957c9ca68a . ', 1000;');
			$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

			foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
				$D577b2a7889a5fb6 = C73Ed8D0b70cE12F('users', $D577b2a7889a5fb6);
				$Fac87d38f7786df0 = c483A3a59265139e($D577b2a7889a5fb6);
				$B91645b8411dc88c = 'INSERT INTO `users`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
				$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
			}
		}
		catch (Exception $E0f0519e12b13b6b) {
			echo 'Error: ' . $E0f0519e12b13b6b . "\n";
		}
	}

	goto label1936;

	label884:

	$b62d6460eb33ea07->query('TRUNCATE `enigma2_devices`;');
	echo 'Authorising ' . number_format($d353a4da8a0bb857, 0) . ' enigma devices.' . "\n";
	$C455840d1f015c68 = range(0, $d353a4da8a0bb857, 1000);

	if ($C455840d1f015c68) {
		goto label1989;
	}

	$C455840d1f015c68 = [0];
	goto label1989;

	label904:

	$b62d6460eb33ea07->query('TRUNCATE `bouquets`;');
	echo 'Creating ' . number_format(count($e02ff34f7d898a7b), 0) . ' bouquets.' . "\n";

	foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
		/*
		#unhandled Range 919 => 1038
		*/
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		919  444   NOP/0                     ?0        ?0                   ?0                  	;1	<<1035
		920  444   GOTO/253                  ?0        ?983                 ?592                	;0
		921  446   INIT_FCALL_BY_NAME/59     ?0        ?0                   'C73Ed8D0b70ce12F'  	;2
		922  446   SEND_VAL_EX/116           ?80       'bouquets'           ?1                  	;0
		923  446   SEND_VAR_EX/66            ?96       $D577b2a7889a5fb6    ?2                  	;0
		924  446   DO_FCALL_BY_NAME/131      $428=     ?0                   ?0                  	;0
		925  446   ASSIGN/38                 ?397      $D577b2a7889a5fb6    $428:C73Ed8D0b70ce12F('bouquets', $D577b2a7889a5fb6)	;0
		926  447   INIT_FCALL_BY_NAME/59     ?0        ?0                   'C483A3A59265139e'  	;1
		927  447   SEND_VAR_EX/66            ?80       $D577b2a7889a5fb6    ?1                  	;0
		928  447   DO_FCALL_BY_NAME/131      $430=     ?0                   ?0                  	;0
		929  447   ASSIGN/38                 ?399      $Fac87d38f7786df0    $430:C483A3A59265139e($D577b2a7889a5fb6)	;0
		930  448   FETCH_DIM_R/81            $432=     $Fac87d38f7786df0    'columns'           	;0
		931  448   CONCAT/8                  #433=     'INSERT INTO `bouquets`(' $432:$Fac87d38f7786df0['columns']	;0
		932  448   CONCAT/8                  #434=     #433:'INSERT INTO `bouquets`(' . $Fac87d38f7786df0['columns'] ') VALUES('         	;0
		933  448   FETCH_DIM_R/81            $435=     $Fac87d38f7786df0    'placeholder'       	;0
		934  448   CONCAT/8                  #436=     #434:'INSERT INTO `bouquets`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' $435:$Fac87d38f7786df0['placeholder']	;0
		935  448   CONCAT/8                  #437=     #436:'INSERT INTO `bouquets`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] ');'                	;0
		936  448   ASSIGN/38                 ?406      $B91645b8411dc88c    #437:'INSERT INTO `bouquets`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');'	;0
		937  449   INIT_METHOD_CALL/112      ?0        $b62d6460eb33ea07    'query'             	;1
		938  449   SEND_VAR_EX/66            ?80       $B91645b8411dc88c    ?1                  	;0
		939  449   FETCH_DIM_R/81            $439=     $Fac87d38f7786df0    'data'              	;0
		940  449   SEND_UNPACK/165           ?80       $439:$Fac87d38f7786df0['data'] ?1                  	;0
		941  449   DO_FCALL/60               ?408      ?0                   ?0                  	;0
		942  450   NOP/0                     ?0        ?0                   ?0                  	;1
		943  450   GOTO/253                  ?0        ?1034                ?606                	;0
		944  452   ASSIGN_DIM/147            ?409      $D577b2a7889a5fb6    'bouquet_series'    	;0
		945  452   OP_DATA/137               ?0        []                   ?0                  	;0
		946  453   FE_RESET_R/77             $442=     $d02ef9ae10a41939    ?967                	;0
		947  453   FE_FETCH_R/78             ?0        $442:                $E6f758b9be57a931   	;967	>>967	<<966
		948  454   INIT_FCALL_BY_NAME/59     ?0        ?0                   'in_array'          	;2
		949  454   INIT_FCALL_BY_NAME/59     ?0        ?0                   'intval'            	;1
		950  454   SEND_VAR_EX/66            ?80       $E6f758b9be57a931    ?1                  	;0
		951  454   DO_FCALL_BY_NAME/131      $443=     ?0                   ?0                  	;0
		952  454   SEND_VAR_NO_REF_EX/50     ?80       $443:intval($E6f758b9be57a931) ?1                  	;0
		953  454   SEND_VAR_EX/66            ?96       $cb98d4eed473e4c8    ?2                  	;0
		954  454   DO_FCALL_BY_NAME/131      $444=     ?0                   ?0                  	;0
		955  454   BOOL_NOT/13               #445=     $444:in_array(intval($E6f758b9be57a931), $cb98d4eed473e4c8) ?0                  	;0
		956  454   JMPZ/43                   ?0        #445:!in_array(intval($E6f758b9be57a931), $cb98d4eed473e4c8) ?960                	;0	>>960
		957  455   NOP/0                     ?0        ?0                   ?0                  	;1
		958  455   NOP/0                     ?0        ?0                   ?0                  	;1
		959  455   GOTO/253                  ?0        ?966                 ?613                	;0
		960  457   INIT_FCALL_BY_NAME/59     ?0        ?0                   'intval'            	;1	<<956
		961  457   SEND_VAR_EX/66            ?80       $E6f758b9be57a931    ?1                  	;0
		962  457   DO_FCALL_BY_NAME/131      $448=     ?0                   ?0                  	;0
		963  457   FETCH_DIM_W/84            $446=     $D577b2a7889a5fb6    'bouquet_series'    	;0
		964  457   ASSIGN_DIM/147            ?415      $446:$D577b2a7889a5fb6['bouquet_series'][] ?4397406            	;0
		965  457   OP_DATA/137               ?0        $448:intval($E6f758b9be57a931) ?0                  	;0
		966  459   JMP/42                    ?0        ?947                 ?0                  	;0	>>947
		967  459   FE_FREE/127               ?0        $442:                ?0                  	;0	<<946
		968  462   FE_RESET_R/77             $449=     ['channels', 'movies', 'radios', 'series'] ?980                	;0
		969  462   FE_FETCH_R/78             ?0        $449:                $A7d54b094ae83c95   	;980	>>980	<<979
		970  463   CONCAT/8                  #450=     'bouquet_'           $A7d54b094ae83c95   	;0
		971  463   FETCH_DIM_R/81            $451=     $D577b2a7889a5fb6    #450:'bouquet_' . $A7d54b094ae83c95	;0
		972  463   JMPZ/43                   ?0        $451:$D577b2a7889a5fb6['bouquet_' . $A7d54b094ae83c95] ?976                	;0	>>976
		973  464   NOP/0                     ?0        ?0                   ?0                  	;1
		974  464   NOP/0                     ?0        ?0                   ?0                  	;1
		975  464   GOTO/253                  ?0        ?979                 ?619                	;0
		976  466   CONCAT/8                  #452=     'bouquet_'           $A7d54b094ae83c95   	;0	<<972
		977  466   ASSIGN_DIM/147            ?421      $D577b2a7889a5fb6    #452:'bouquet_' . $A7d54b094ae83c95	;0
		978  466   OP_DATA/137               ?0        '[]'                 ?0                  	;0
		979  468   JMP/42                    ?0        ?969                 ?0                  	;0	>>969
		980  468   FE_FREE/127               ?0        $449:                ?0                  	;0	<<968
		981  471   NOP/0                     ?0        ?0                   ?0                  	;1
		982  471   GOTO/253                  ?0        ?921                 ?622                	;0
		983  473   INIT_FCALL_BY_NAME/59     ?0        ?0                   'json_decode'       	;2
		984  473   FETCH_DIM_FUNC_ARG/93     $454=     $D577b2a7889a5fb6    'bouquet_channels'  	;1
		985  473   SEND_VAR_EX/66            ?80       $454:$D577b2a7889a5fb6['bouquet_channels'] ?1                  	;0
		986  473   SEND_VAL_EX/116           ?96       true                 ?2                  	;0
		987  473   DO_FCALL_BY_NAME/131      $455=     ?0                   ?0                  	;0
		988  473   ASSIGN/38                 ?424      $A5a4a57a12bb19b3    $455:json_decode($D577b2a7889a5fb6['bouquet_channels'], true)	;0
		989  474   ASSIGN_DIM/147            $459=     $D577b2a7889a5fb6    'bouquet_radios'    	;0
		990  474   OP_DATA/137               ?0        []                   ?0                  	;0
		991  474   ASSIGN_DIM/147            $458=     $D577b2a7889a5fb6    'bouquet_movies'    	;0
		992  474   OP_DATA/137               ?0        $459:$D577b2a7889a5fb6['bouquet_radios'] = [] ?0                  	;0
		993  474   ASSIGN_DIM/147            ?425      $D577b2a7889a5fb6    'bouquet_channels'  	;0
		994  474   OP_DATA/137               ?0        $458:$D577b2a7889a5fb6['bouquet_movies'] = $D577b2a7889a5fb6['bouquet_radios'] = [] ?0                  	;0
		995  475   FE_RESET_R/77             $460=     $A5a4a57a12bb19b3    ?1025               	;0
		996  475   FE_FETCH_R/78             ?0        $460:                $ee6d1fc5d801b43f   	;1025	>>1025	<<1024
		997  476   INIT_FCALL_BY_NAME/59     ?0        ?0                   'intval'            	;1
		998  476   SEND_VAR_EX/66            ?80       $ee6d1fc5d801b43f    ?1                  	;0
		999  476   DO_FCALL_BY_NAME/131      $461=     ?0                   ?0                  	;0
		1000 476   ISSET_ISEMPTY_DIM_OBJ/115 #462=     $B51da85892620f9b    $461:intval($ee6d1fc5d801b43f)	;33554432
		1001 476   BOOL_NOT/13               #463=     #462:isset($B51da85892620f9b[intval($ee6d1fc5d801b43f)]) ?0                  	;0
		1002 476   JMPZ/43                   ?0        #463:!isset($B51da85892620f9b[intval($ee6d1fc5d801b43f)]) ?1006               	;0	>>1006
		1003 477   NOP/0                     ?0        ?0                   ?0                  	;1
		1004 477   NOP/0                     ?0        ?0                   ?0                  	;1
		1005 477   GOTO/253                  ?0        ?1024                ?633                	;0
		1006 479   INIT_FCALL_BY_NAME/59     ?0        ?0                   'intval'            	;1	<<1002
		1007 479   SEND_VAR_EX/66            ?80       $ee6d1fc5d801b43f    ?1                  	;0
		1008 479   DO_FCALL_BY_NAME/131      $464=     ?0                   ?0                  	;0
		1009 479   FETCH_DIM_R/81            $465=     $B51da85892620f9b    $464:intval($ee6d1fc5d801b43f)	;0
		1010 479   FETCH_DIM_R/81            $466=     [1 => 'channels', 2 => 'movies', 3 => 'channels', 4 => 'radio'] $465:$B51da85892620f9b[intval($ee6d1fc5d801b43f)]	;0
		1011 479   ASSIGN/38                 ?435      $A7d54b094ae83c95    $466:[1 => 'channels', 2 => 'movies', 3 => 'channels', 4 => 'radio'][$B51da85892620f9b[intval($ee6d1fc5d801b43f)]]	;0
		1012 480   BOOL_NOT/13               #468=     $A7d54b094ae83c95    ?0                  	;0
		1013 480   JMPZ/43                   ?0        #468:!$A7d54b094ae83c95 ?1017               	;0	>>1017
		1014 481   NOP/0                     ?0        ?0                   ?0                  	;1
		1015 481   NOP/0                     ?0        ?0                   ?0                  	;1
		1016 481   GOTO/253                  ?0        ?1024                ?637                	;0
		1017 483   CONCAT/8                  #469=     'bouquet_'           $A7d54b094ae83c95   	;0	<<1013
		1018 483   INIT_FCALL_BY_NAME/59     ?0        ?0                   'intval'            	;1
		1019 483   SEND_VAR_EX/66            ?80       $ee6d1fc5d801b43f    ?1                  	;0
		1020 483   DO_FCALL_BY_NAME/131      $472=     ?0                   ?0                  	;0
		1021 483   FETCH_DIM_W/84            $470=     $D577b2a7889a5fb6    #469:'bouquet_' . $A7d54b094ae83c95	;0
		1022 483   ASSIGN_DIM/147            ?439      $470:$D577b2a7889a5fb6['bouquet_' . $A7d54b094ae83c95][] ?4397406            	;0
		1023 483   OP_DATA/137               ?0        $472:intval($ee6d1fc5d801b43f) ?0                  	;0
		1024 486   JMP/42                    ?0        ?996                 ?0                  	;0	>>996
		1025 486   FE_FREE/127               ?0        $460:                ?0                  	;0	<<995
		1026 489   INIT_FCALL_BY_NAME/59     ?0        ?0                   'json_decode'       	;2
		1027 489   FETCH_DIM_FUNC_ARG/93     $473=     $D577b2a7889a5fb6    'bouquet_series'    	;1
		1028 489   SEND_VAR_EX/66            ?80       $473:$D577b2a7889a5fb6['bouquet_series'] ?1                  	;0
		1029 489   SEND_VAL_EX/116           ?96       true                 ?2                  	;0
		1030 489   DO_FCALL_BY_NAME/131      $474=     ?0                   ?0                  	;0
		1031 489   ASSIGN/38                 ?443      $d02ef9ae10a41939    $474:json_decode($D577b2a7889a5fb6['bouquet_series'], true)	;0
		1032 490   NOP/0                     ?0        ?0                   ?0                  	;1
		1033 490   GOTO/253                  ?0        ?944                 ?645                	;0
		1034 491   JMP/42                    ?0        ?1039                ?0                  	;0	>>1039
		1035 492   CATCH/107                 ?1        'Exception'          $E0f0519e12b13b6b   	;0 CB	>>1039,919
		1036 493   CONCAT/8                  #476=     'Error: '            $E0f0519e12b13b6b   	;0
		1037 493   CONCAT/8                  #477=     #476:'Error: ' . $E0f0519e12b13b6b "\n"                	;0
		1038 493   ECHO/40                   ?0        #477:'Error: ' . $E0f0519e12b13b6b . "\n" ?0                  	;0
		*/
		goto label983;

		label921:

		$D577b2a7889a5fb6 = C73Ed8D0b70ce12F('bouquets', $D577b2a7889a5fb6);
		$Fac87d38f7786df0 = C483A3A59265139e($D577b2a7889a5fb6);
		$B91645b8411dc88c = 'INSERT INTO `bouquets`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
		$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
		goto label1034;

		label944:

		$D577b2a7889a5fb6['bouquet_series'] = [];
		goto label966;
		$D577b2a7889a5fb6['bouquet_series'][] = intval($E6f758b9be57a931);

		label966:

		goto label979;
		$D577b2a7889a5fb6['bouquet_' . $A7d54b094ae83c95] = '[]';

		label979:

		goto label921;

		label983:

		$A5a4a57a12bb19b3 = json_decode($D577b2a7889a5fb6['bouquet_channels'], true);
		$D577b2a7889a5fb6['bouquet_channels'] = $D577b2a7889a5fb6['bouquet_movies'] = $D577b2a7889a5fb6['bouquet_radios'] = [];
		goto label1024;
		$A7d54b094ae83c95 = [1 => 'channels', 2 => 'movies', 3 => 'channels', 4 => 'radio'][$B51da85892620f9b[intval($ee6d1fc5d801b43f)]];
		goto label1024;
		$D577b2a7889a5fb6['bouquet_' . $A7d54b094ae83c95][] = intval($ee6d1fc5d801b43f);

		label1024:

		$d02ef9ae10a41939 = json_decode($D577b2a7889a5fb6['bouquet_series'], true);
		goto label944;

		label1034:

		echo 'Error: ' . $E0f0519e12b13b6b . "\n";
	}

	label1041:

	goto label1598;

	label1042:

	$b62d6460eb33ea07->query('TRUNCATE `blocked_ips`;');
	echo 'Blocking ' . number_format(count($e02ff34f7d898a7b), 0) . ' IP addresses.' . "\n";

	foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
		try {
			$D577b2a7889a5fb6 = C73eD8D0b70CE12F('blocked_ips', $D577b2a7889a5fb6);
			$Fac87d38f7786df0 = C483A3A59265139e($D577b2a7889a5fb6);
			$B91645b8411dc88c = 'INSERT INTO `blocked_ips`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
			$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
		}
		catch (Exception $E0f0519e12b13b6b) {
			echo 'Error: ' . $E0f0519e12b13b6b . "\n";
		}
	}

	label1085:

	goto label1191;

	label1086:

	$d353a4da8a0bb857 = $ede772dc4aad8c89->get_row()['count'];

	if (!(0 < $d353a4da8a0bb857)) {
		goto label1936;
	}

	$b62d6460eb33ea07->query('TRUNCATE `users`;');
	echo 'Adding ' . number_format($d353a4da8a0bb857, 0) . ' users.' . "\n";
	$C455840d1f015c68 = range(0, $d353a4da8a0bb857, 1000);
	goto label838;

	label1111:

	if (!in_array('blocked_isps', $af280045ef711f83)) {
		goto label1143;
	}

	$ede772dc4aad8c89->query('SELECT * FROM `blocked_isps`;');
	$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

	if (!(0 < count($e02ff34f7d898a7b))) {
		goto label2152;
	}

	goto label2109;

	label1132:

	if (!in_array('series_episodes', $af280045ef711f83)) {
		goto label59;
	}

	$ede772dc4aad8c89->query('SELECT COUNT(*) AS `count` FROM `series_episodes`;');
	goto label1754;

	label1143:

	if (!in_array('bouquets', $af280045ef711f83)) {
		goto label1598;
	}

	$ede772dc4aad8c89->query('SELECT * FROM `bouquets`;');
	$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

	if (!(0 < count($e02ff34f7d898a7b))) {
		goto label1041;
	}

	goto label904;

	label1164:

	$ede772dc4aad8c89->query('SELECT * FROM `packages`;');
	$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

	if (!(0 < count($e02ff34f7d898a7b))) {
		goto label2689;
	}

	$b62d6460eb33ea07->query('TRUNCATE `users_packages`;');
	echo 'Creating ' . number_format(count($e02ff34f7d898a7b), 0) . ' user packages.' . "\n";
	goto label2593;

	label1191:

	if (!in_array('blocked_user_agents', $af280045ef711f83)) {
		goto label1850;
	}

	$ede772dc4aad8c89->query('SELECT * FROM `blocked_user_agents`;');
	$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

	if (!(0 < count($e02ff34f7d898a7b))) {
		goto label239;
	}

	goto label196;

	label1212:

	$ede772dc4aad8c89->query('SELECT * FROM `groups` WHERE `can_delete` = 1;');
	$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

	if (!(0 < count($e02ff34f7d898a7b))) {
		goto label167;
	}

	$b62d6460eb33ea07->query('DELETE FROM `users_groups` WHERE `can_delete` = 1;');
	echo 'Creating ' . number_format(count($e02ff34f7d898a7b), 0) . ' user groups.' . "\n";
	goto label124;

	label1239:

	$ede772dc4aad8c89->query('SELECT COUNT(*) AS `count` FROM `streams_options`;');
	$d353a4da8a0bb857 = $ede772dc4aad8c89->get_row()['count'];

	if (!(0 < $d353a4da8a0bb857)) {
		goto label2055;
	}

	$b62d6460eb33ea07->query('TRUNCATE `streams_options`;');
	echo 'Attributing ' . number_format($d353a4da8a0bb857, 0) . ' options to streams.' . "\n";
	goto label2255;

	label1261:

	$b62d6460eb33ea07->query('TRUNCATE `tickets`;');
	echo 'Posting ' . number_format(count($e02ff34f7d898a7b), 0) . ' tickets.' . "\n";

	foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
		try {
			$D577b2a7889a5fb6 = C73Ed8D0b70ce12f('tickets', $D577b2a7889a5fb6);
			$Fac87d38f7786df0 = c483a3a59265139e($D577b2a7889a5fb6);
			$B91645b8411dc88c = 'INSERT INTO `tickets`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
			$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
		}
		catch (Exception $E0f0519e12b13b6b) {
			echo 'Error: ' . $E0f0519e12b13b6b . "\n";
		}
	}

	label1304:

	goto label2034;

	label1305:

	foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
		try {
			$D577b2a7889a5fb6['can_view_vod'] = $D577b2a7889a5fb6['reset_stb_data'];
			$D577b2a7889a5fb6['allow_restrictions'] = 1;
			$D577b2a7889a5fb6['allow_change_username'] = 1;
			$D577b2a7889a5fb6['allow_change_password'] = 1;
			$D577b2a7889a5fb6['minimum_username_length'] = 8;
			$D577b2a7889a5fb6['minimum_password_length'] = 8;
			$D577b2a7889a5fb6 = C73Ed8D0b70ce12f('users_groups', $D577b2a7889a5fb6);
			$Fac87d38f7786df0 = c483A3A59265139E($D577b2a7889a5fb6);
			$B91645b8411dc88c = 'INSERT INTO `users_groups`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
			$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
		}
		catch (Exception $E0f0519e12b13b6b) {
			echo 'Error: ' . $E0f0519e12b13b6b . "\n";
		}
	}

	label1348:

	if (!in_array('packages', $af280045ef711f83)) {
		goto label2689;
	}

	goto label1164;

	label1356:

	if (!in_array('mag_devices', $af280045ef711f83)) {
		goto label2210;
	}

	$ede772dc4aad8c89->query('SELECT COUNT(*) AS `count` FROM `mag_devices`;');
	$d353a4da8a0bb857 = $ede772dc4aad8c89->get_row()['count'];

	if (!(0 < $d353a4da8a0bb857)) {
		goto label2210;
	}

	$b62d6460eb33ea07->query('TRUNCATE `mag_devices`;');
	goto label2576;

	label1378:

	if (!in_array('stream_categories', $af280045ef711f83)) {
		goto label175;
	}

	$ede772dc4aad8c89->query('SELECT * FROM `stream_categories`;');
	$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

	if (!(0 < count($e02ff34f7d898a7b))) {
		goto label1849;
	}

	goto label1806;

	label1399:

	$ede772dc4aad8c89->query('SELECT * FROM `epg`;');
	$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

	if (!(0 < count($e02ff34f7d898a7b))) {
		goto label1456;
	}

	$b62d6460eb33ea07->query('TRUNCATE `epg`;');
	echo 'Processing ' . number_format(count($e02ff34f7d898a7b), 0) . ' EPG URLs.' . "\n";
	goto label1426;

	label1426:

	foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
		try {
			$D577b2a7889a5fb6 = C73eD8d0b70Ce12f('epg', $D577b2a7889a5fb6);
			$Fac87d38f7786df0 = C483A3A59265139e($D577b2a7889a5fb6);
			$B91645b8411dc88c = 'INSERT INTO `epg`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
			$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
		}
		catch (Exception $E0f0519e12b13b6b) {
			echo 'Error: ' . $E0f0519e12b13b6b . "\n";
		}
	}

	label1456:

	if (!in_array('epg_sources', $af280045ef711f83)) {
		goto label1981;
	}

	goto label1886;

	label1464:

	$b62d6460eb33ea07->query('TRUNCATE `blocked_isps`;');
	echo 'Blocking ' . number_format(count($e02ff34f7d898a7b), 0) . ' ISP\'s.' . "\n";

	foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
		try {
			$D577b2a7889a5fb6 = c73ed8d0B70cE12f('blocked_isps', $D577b2a7889a5fb6);
			$Fac87d38f7786df0 = C483a3A59265139e($D577b2a7889a5fb6);
			$B91645b8411dc88c = 'INSERT INTO `blocked_isps`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
			$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
		}
		catch (Exception $E0f0519e12b13b6b) {
			echo 'Error: ' . $E0f0519e12b13b6b . "\n";
		}
	}

	label1507:

	goto label1111;

	label1508:

	if (!in_array('tickets', $af280045ef711f83)) {
		goto label2034;
	}

	$ede772dc4aad8c89->query('SELECT * FROM `tickets`;');
	$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

	if (!(0 < count($e02ff34f7d898a7b))) {
		goto label1304;
	}

	goto label1261;

	label1529:

	foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
		/*
		#unhandled Range 1531 => 1593
		*/
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		1531 718   NOP/0                     ?0        ?0                   ?0                  	;1	<<1590
		1532 718   GOTO/253                  ?0        ?1533                ?980                	;0
		1533 720   ASSIGN_DIM/147            ?659      $D577b2a7889a5fb6    'server_type'       	;0
		1534 720   OP_DATA/137               ?0        0                    ?0                  	;0
		1535 721   ASSIGN_DIM/147            ?660      $D577b2a7889a5fb6    'parent_id'         	;0
		1536 721   OP_DATA/137               ?0        NULL                 ?0                  	;0
		1537 722   ASSIGN_DIM/147            ?661      $D577b2a7889a5fb6    'http_broadcast_port'	;0
		1538 722   OP_DATA/137               ?0        80                   ?0                  	;0
		1539 723   ASSIGN_DIM/147            ?662      $D577b2a7889a5fb6    'https_broadcast_port'	;0
		1540 723   OP_DATA/137               ?0        443                  ?0                  	;0
		1541 724   ASSIGN_DIM/147            ?663      $D577b2a7889a5fb6    'rtmp_port'         	;0
		1542 724   OP_DATA/137               ?0        8880                 ?0                  	;0
		1543 725   NOP/0                     ?0        ?0                   ?0                  	;1
		1544 725   GOTO/253                  ?0        ?1545                ?991                	;0
		1545 727   ASSIGN_DIM/147            ?664      $D577b2a7889a5fb6    'total_services'    	;0
		1546 727   OP_DATA/137               ?0        4                    ?0                  	;0
		1547 728   ASSIGN_DIM/147            ?665      $D577b2a7889a5fb6    'http_ports_add'    	;0
		1548 728   OP_DATA/137               ?0        NULL                 ?0                  	;0
		1549 729   ASSIGN_DIM/147            ?666      $D577b2a7889a5fb6    'https_ports_add'   	;0
		1550 729   OP_DATA/137               ?0        NULL                 ?0                  	;0
		1551 730   BOOL_NOT/13               #699=     $cc6ea4e294b9cb00    ?0                  	;0
		1552 730   JMPZ/43                   ?0        #699:!$cc6ea4e294b9cb00 ?1555               	;0	>>1555
		1553 731   NOP/0                     ?0        ?0                   ?0                  	;1
		1554 731   GOTO/253                  ?0        ?1584                ?998                	;0
		1555 733   ASSIGN_DIM/147            ?668      $D577b2a7889a5fb6    'is_main'           	;0	<<1552
		1556 733   OP_DATA/137               ?0        0                    ?0                  	;0
		1557 734   NOP/0                     ?0        ?0                   ?0                  	;1
		1558 734   GOTO/253                  ?0        ?1582                ?1001               	;0
		1559 736   INIT_FCALL_BY_NAME/59     ?0        ?0                   'c73Ed8D0b70cE12f'  	;2
		1560 736   SEND_VAL_EX/116           ?80       'servers'            ?1                  	;0
		1561 736   SEND_VAR_EX/66            ?96       $D577b2a7889a5fb6    ?2                  	;0
		1562 736   DO_FCALL_BY_NAME/131      $701=     ?0                   ?0                  	;0
		1563 736   ASSIGN/38                 ?670      $D577b2a7889a5fb6    $701:c73Ed8D0b70cE12f('servers', $D577b2a7889a5fb6)	;0
		1564 737   INIT_FCALL_BY_NAME/59     ?0        ?0                   'C483A3a59265139E'  	;1
		1565 737   SEND_VAR_EX/66            ?80       $D577b2a7889a5fb6    ?1                  	;0
		1566 737   DO_FCALL_BY_NAME/131      $703=     ?0                   ?0                  	;0
		1567 737   ASSIGN/38                 ?672      $Fac87d38f7786df0    $703:C483A3a59265139E($D577b2a7889a5fb6)	;0
		1568 738   FETCH_DIM_R/81            $705=     $Fac87d38f7786df0    'columns'           	;0
		1569 738   CONCAT/8                  #706=     'INSERT INTO `servers`(' $705:$Fac87d38f7786df0['columns']	;0
		1570 738   CONCAT/8                  #707=     #706:'INSERT INTO `servers`(' . $Fac87d38f7786df0['columns'] ') VALUES('         	;0
		1571 738   FETCH_DIM_R/81            $708=     $Fac87d38f7786df0    'placeholder'       	;0
		1572 738   CONCAT/8                  #709=     #707:'INSERT INTO `servers`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' $708:$Fac87d38f7786df0['placeholder']	;0
		1573 738   CONCAT/8                  #710=     #709:'INSERT INTO `servers`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] ');'                	;0
		1574 738   ASSIGN/38                 ?679      $B91645b8411dc88c    #710:'INSERT INTO `servers`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');'	;0
		1575 739   INIT_METHOD_CALL/112      ?0        $b62d6460eb33ea07    'query'             	;1
		1576 739   SEND_VAR_EX/66            ?80       $B91645b8411dc88c    ?1                  	;0
		1577 739   FETCH_DIM_R/81            $712=     $Fac87d38f7786df0    'data'              	;0
		1578 739   SEND_UNPACK/165           ?80       $712:$Fac87d38f7786df0['data'] ?1                  	;0
		1579 739   DO_FCALL/60               ?681      ?0                   ?0                  	;0
		1580 740   NOP/0                     ?0        ?0                   ?0                  	;1
		1581 740   GOTO/253                  ?0        ?1589                ?1015               	;0
		1582 742   NOP/0                     ?0        ?0                   ?0                  	;1
		1583 742   GOTO/253                  ?0        ?1587                ?1016               	;0
		1584 744   ASSIGN_DIM/147            ?682      $D577b2a7889a5fb6    'is_main'           	;0
		1585 744   OP_DATA/137               ?0        1                    ?0                  	;0
		1586 745   ASSIGN/38                 ?683      $cc6ea4e294b9cb00    true                	;0
		1587 747   NOP/0                     ?0        ?0                   ?0                  	;1
		1588 747   GOTO/253                  ?0        ?1559                ?1020               	;0
		1589 748   JMP/42                    ?0        ?1594                ?0                  	;0	>>1594
		1590 749   CATCH/107                 ?1        'Exception'          $E0f0519e12b13b6b   	;0 CB	>>1594,1531
		1591 750   CONCAT/8                  #716=     'Error: '            $E0f0519e12b13b6b   	;0
		1592 750   CONCAT/8                  #717=     #716:'Error: ' . $E0f0519e12b13b6b "\n"                	;0
		1593 750   ECHO/40                   ?0        #717:'Error: ' . $E0f0519e12b13b6b . "\n" ?0                  	;0
		*/
		goto label1533;

		label1533:

		$D577b2a7889a5fb6['server_type'] = 0;
		$D577b2a7889a5fb6['parent_id'] = NULL;
		$D577b2a7889a5fb6['http_broadcast_port'] = 80;
		$D577b2a7889a5fb6['https_broadcast_port'] = 443;
		$D577b2a7889a5fb6['rtmp_port'] = 8880;
		goto label1545;

		label1545:

		$D577b2a7889a5fb6['total_services'] = 4;
		$D577b2a7889a5fb6['http_ports_add'] = NULL;
		$D577b2a7889a5fb6['https_ports_add'] = NULL;
		goto label1584;
		$D577b2a7889a5fb6['is_main'] = 0;
		goto label1582;

		label1559:

		$D577b2a7889a5fb6 = c73Ed8D0b70cE12f('servers', $D577b2a7889a5fb6);
		$Fac87d38f7786df0 = C483A3a59265139E($D577b2a7889a5fb6);
		$B91645b8411dc88c = 'INSERT INTO `servers`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
		$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
		goto label1589;

		label1582:

		goto label1587;

		label1584:

		$D577b2a7889a5fb6['is_main'] = 1;
		$cc6ea4e294b9cb00 = true;

		label1587:

		goto label1559;

		label1589:

		echo 'Error: ' . $E0f0519e12b13b6b . "\n";
	}

	label1596:

	$E01d2859041cdc1e = [];
	goto label2512;

	label1598:

	if (!in_array('enigma2_devices', $af280045ef711f83)) {
		goto label2033;
	}

	$ede772dc4aad8c89->query('SELECT COUNT(*) AS `count` FROM `enigma2_devices`;');
	$d353a4da8a0bb857 = $ede772dc4aad8c89->get_row()['count'];

	if (!(0 < $d353a4da8a0bb857)) {
		goto label2033;
	}

	goto label884;

	label1617:

	$ede772dc4aad8c89->query('SELECT * FROM `groups` WHERE `can_delete` = 1;');
	$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

	if (!(0 < count($e02ff34f7d898a7b))) {
		goto label1348;
	}

	$b62d6460eb33ea07->query('DELETE FROM `users_groups` WHERE `can_delete` = 1;');
	echo 'Creating ' . number_format(count($e02ff34f7d898a7b), 0) . ' user groups.' . "\n";
	goto label1305;

	label1644:

	if ($C455840d1f015c68) {
		goto label1647;
	}

	$C455840d1f015c68 = [0];

	label1647:

	foreach ($C455840d1f015c68 as $Feb130957c9ca68a) {
		try {
			$ede772dc4aad8c89->query('SELECT * FROM `streams_sys` LIMIT ' . $Feb130957c9ca68a . ', 1000;');
			$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

			if (!(0 < count($e02ff34f7d898a7b))) {
				goto label1746;
			}

			foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
				goto label1706;

				label1670:

				if (!($D577b2a7889a5fb6['pid'] <= 0)) {
					goto label1679;
				}

				$D577b2a7889a5fb6['pid'] = NULL;

				label1679:

				$D577b2a7889a5fb6 = C73ED8D0b70Ce12f('streams_servers', $D577b2a7889a5fb6);
				$Fac87d38f7786df0 = C483A3A59265139E($D577b2a7889a5fb6);
				goto label1691;

				label1691:

				$B91645b8411dc88c = 'INSERT INTO `streams_servers`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
				$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
				goto label1744;

				label1706:
				if (!(!$D577b2a7889a5fb6['parent_id'] || ($D577b2a7889a5fb6['parent_id'] == 0))) {
					goto label1719;
				}

				$D577b2a7889a5fb6['parent_id'] = NULL;

				label1719:

				if (!isset($E01d2859041cdc1e[$D577b2a7889a5fb6['stream_id']])) {
					goto label1733;
				}

				$D577b2a7889a5fb6['cchannel_rsources'] = $E01d2859041cdc1e[$D577b2a7889a5fb6['stream_id']];
				goto label1733;

				label1733:

				$D577b2a7889a5fb6['custom_ffmpeg'] = '';
				$D577b2a7889a5fb6['stream_status'] = 0;
				$D577b2a7889a5fb6['stream_started'] = NULL;
				$D577b2a7889a5fb6['monitor_pid'] = NULL;
				goto label1670;

				label1744:
			}
		}
		catch (Exception $E0f0519e12b13b6b) {
			echo 'Error: ' . $E0f0519e12b13b6b . "\n";
		}
	}

	goto label1871;

	label1754:

	$d353a4da8a0bb857 = $ede772dc4aad8c89->get_row()['count'];

	if (!(0 < $d353a4da8a0bb857)) {
		goto label59;
	}

	$b62d6460eb33ea07->query('TRUNCATE `streams_episodes`;');
	echo 'Adding ' . number_format($d353a4da8a0bb857, 0) . ' episodes.' . "\n";
	$C455840d1f015c68 = range(0, $d353a4da8a0bb857, 1000);
	goto label2720;

	label1779:

	$ede772dc4aad8c89->query('SELECT * FROM `member_groups` WHERE `can_delete` = 1;');
	$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

	if (!(0 < count($e02ff34f7d898a7b))) {
		goto label116;
	}

	$b62d6460eb33ea07->query('DELETE FROM `users_groups` WHERE `can_delete` = 1;');
	echo 'Creating ' . number_format(count($e02ff34f7d898a7b), 0) . ' user groups.' . "\n";
	goto label73;

	label1806:

	$b62d6460eb33ea07->query('TRUNCATE `streams_categories`;');
	echo 'Creating ' . number_format(count($e02ff34f7d898a7b), 0) . ' categories.' . "\n";

	foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
		try {
			$D577b2a7889a5fb6 = C73Ed8d0B70ce12f('streams_categories', $D577b2a7889a5fb6);
			$Fac87d38f7786df0 = C483a3a59265139e($D577b2a7889a5fb6);
			$B91645b8411dc88c = 'INSERT INTO `streams_categories`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
			$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
		}
		catch (Exception $E0f0519e12b13b6b) {
			echo 'Error: ' . $E0f0519e12b13b6b . "\n";
		}
	}

	label1849:

	goto label175;

	label1850:

	if (!in_array('isp_addon', $af280045ef711f83)) {
		goto label1111;
	}

	$ede772dc4aad8c89->query('SELECT * FROM `isp_addon`;');
	$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

	if (!(0 < count($e02ff34f7d898a7b))) {
		goto label1507;
	}

	goto label1464;

	label1871:

	if (!in_array('stream_servers', $af280045ef711f83)) {
		goto label1378;
	}

	$ede772dc4aad8c89->query('SELECT COUNT(*) AS `count` FROM `stream_servers`;');
	$d353a4da8a0bb857 = $ede772dc4aad8c89->get_row()['count'];
	goto label2697;

	label1886:

	$ede772dc4aad8c89->query('SELECT * FROM `epg_sources`;');
	$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

	if (!(0 < count($e02ff34f7d898a7b))) {
		goto label1981;
	}

	$b62d6460eb33ea07->query('TRUNCATE `epg`;');
	echo 'Processing ' . number_format(count($e02ff34f7d898a7b), 0) . ' EPG URLs.' . "\n";
	goto label1951;

	label1913:

	if (!(0 < $d353a4da8a0bb857)) {
		goto label2894;
	}

	$b62d6460eb33ea07->query('TRUNCATE `users`;');
	echo 'Adding ' . number_format($d353a4da8a0bb857, 0) . ' users.' . "\n";
	$C455840d1f015c68 = range(0, $d353a4da8a0bb857, 1000);

	if ($C455840d1f015c68) {
		goto label2852;
	}

	goto label2851;

	label1936:

	if (!in_array('members', $af280045ef711f83)) {
		goto label2447;
	}

	$ede772dc4aad8c89->query('SELECT COUNT(*) AS `count` FROM `members`;');
	$d353a4da8a0bb857 = $ede772dc4aad8c89->get_row()['count'];
	goto label1913;

	label1951:

	foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
		try {
			$D577b2a7889a5fb6 = c73ED8D0b70ce12f('epg', $D577b2a7889a5fb6);
			$Fac87d38f7786df0 = C483a3A59265139E($D577b2a7889a5fb6);
			$B91645b8411dc88c = 'INSERT INTO `epg`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
			$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
		}
		catch (Exception $E0f0519e12b13b6b) {
			echo 'Error: ' . $E0f0519e12b13b6b . "\n";
		}
	}

	label1981:

	if (!in_array('member_groups', $af280045ef711f83)) {
		goto label116;
	}

	goto label1779;

	label1989:

	foreach ($C455840d1f015c68 as $Feb130957c9ca68a) {
		try {
			$ede772dc4aad8c89->query('SELECT * FROM `enigma2_devices` LIMIT ' . $Feb130957c9ca68a . ', 1000;');
			$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

			foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
				$D577b2a7889a5fb6['lock_device'] = 1;
				$D577b2a7889a5fb6 = c73Ed8D0b70ce12f('enigma2_devices', $D577b2a7889a5fb6);
				$Fac87d38f7786df0 = c483a3A59265139E($D577b2a7889a5fb6);
				$B91645b8411dc88c = 'INSERT INTO `enigma2_devices`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
				$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
			}
		}
		catch (Exception $E0f0519e12b13b6b) {
			echo 'Error: ' . $E0f0519e12b13b6b . "\n";
		}
	}

	label2033:

	goto label1356;

	label2034:

	if (!in_array('tickets_replies', $af280045ef711f83)) {
		goto label2066;
	}

	$ede772dc4aad8c89->query('SELECT * FROM `tickets_replies`;');
	$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

	if (!(0 < count($e02ff34f7d898a7b))) {
		goto label2511;
	}

	goto label2468;

	label2055:

	if (!in_array('streams_sys', $af280045ef711f83)) {
		goto label1871;
	}

	$ede772dc4aad8c89->query('SELECT COUNT(*) AS `count` FROM `streams_sys`;');
	goto label2361;

	label2066:

	if (!in_array('transcoding_profiles', $af280045ef711f83)) {
		goto label2769;
	}

	$ede772dc4aad8c89->query('SELECT * FROM `transcoding_profiles`;');
	$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

	if (!(0 < count($e02ff34f7d898a7b))) {
		goto label2850;
	}

	goto label2807;

	label2087:

	if (!in_array('users', $af280045ef711f83)) {
		goto label345;
	}

	$ede772dc4aad8c89->query('SELECT COUNT(*) AS `count` FROM `users`;');
	$d353a4da8a0bb857 = $ede772dc4aad8c89->get_row()['count'];

	if (!(0 < $d353a4da8a0bb857)) {
		goto label345;
	}

	$b62d6460eb33ea07->query('TRUNCATE `lines`;');
	goto label2386;

	label2109:

	$b62d6460eb33ea07->query('TRUNCATE `blocked_isps`;');
	echo 'Blocking ' . number_format(count($e02ff34f7d898a7b), 0) . ' ISP\'s.' . "\n";

	foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
		try {
			$D577b2a7889a5fb6 = c73eD8D0B70Ce12f('blocked_isps', $D577b2a7889a5fb6);
			$Fac87d38f7786df0 = c483a3A59265139E($D577b2a7889a5fb6);
			$B91645b8411dc88c = 'INSERT INTO `blocked_isps`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
			$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
		}
		catch (Exception $E0f0519e12b13b6b) {
			echo 'Error: ' . $E0f0519e12b13b6b . "\n";
		}
	}

	label2152:

	goto label1143;

	label2153:

	foreach ($C455840d1f015c68 as $Feb130957c9ca68a) {
		try {
			$ede772dc4aad8c89->query('SELECT * FROM `mag_devices` LIMIT ' . $Feb130957c9ca68a . ', 1000;');
			$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

			foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
				$D577b2a7889a5fb6['mac'] = base64_decode($D577b2a7889a5fb6['mac']);
				$D577b2a7889a5fb6['lock_device'] = 1;

				if (!(0 < $D577b2a7889a5fb6['user_id'])) {
					goto label2201;
				}

				$D577b2a7889a5fb6 = C73eD8D0B70CE12F('mag_devices', $D577b2a7889a5fb6);
				$Fac87d38f7786df0 = C483a3a59265139E($D577b2a7889a5fb6);
				$B91645b8411dc88c = 'INSERT INTO `mag_devices`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
				$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);

				label2201:
			}
		}
		catch (Exception $E0f0519e12b13b6b) {
			echo 'Error: ' . $E0f0519e12b13b6b . "\n";
		}
	}

	label2210:

	if (!in_array('epg', $af280045ef711f83)) {
		goto label1456;
	}

	goto label1399;

	label2218:

	$D4d4c14dcc76b6b3 = 0;

	foreach ($F11ac202cd59a500 as $b5a93f3474101e1f) {
		$ede772dc4aad8c89->query('SHOW TABLES LIKE ?;', $b5a93f3474101e1f);

		if (!(0 < $ede772dc4aad8c89->num_rows())) {
			goto label2247;
		}

		$ede772dc4aad8c89->query('SELECT COUNT(*) AS `count` FROM `' . $b5a93f3474101e1f . '`;');
		$D4d4c14dcc76b6b3 += intval($ede772dc4aad8c89->get_row()['count']) ?: 0;

		label2247:
	}

	if (!($D4d4c14dcc76b6b3 == 0)) {
		goto label459;
	}

	echo "\n" . 'Couldn\'t find anything to migrate in the `xui_migrate` database. Please ensure you restore your backup to that database specifically.' . "\n\n";
	goto label458;

	label2255:

	$C455840d1f015c68 = range(0, $d353a4da8a0bb857, 1000);

	if ($C455840d1f015c68) {
		goto label2264;
	}

	$C455840d1f015c68 = [0];

	label2264:

	foreach ($C455840d1f015c68 as $Feb130957c9ca68a) {
		try {
			$ede772dc4aad8c89->query('SELECT * FROM `streams_options` LIMIT ' . $Feb130957c9ca68a . ', 1000;');
			$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

			foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
				$D577b2a7889a5fb6 = c73eD8D0b70cE12f('streams_options', $D577b2a7889a5fb6);
				$Fac87d38f7786df0 = c483a3a59265139e($D577b2a7889a5fb6);
				$B91645b8411dc88c = 'INSERT INTO `streams_options`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
				$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
			}
		}
		catch (Exception $E0f0519e12b13b6b) {
			echo 'Error: ' . $E0f0519e12b13b6b . "\n";
		}
	}

	goto label2055;

	label2307:

	$ede772dc4aad8c89->query('SELECT * FROM `rtmp_ips`;');
	$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

	if (!(0 < count($e02ff34f7d898a7b))) {
		goto label2568;
	}

	$b62d6460eb33ea07->query('TRUNCATE `rtmp_ips`;');
	echo 'Authorising ' . number_format(count($e02ff34f7d898a7b), 0) . ' RTMP IPs.' . "\n";
	goto label2534;

	label2334:

	foreach ($C455840d1f015c68 as $Feb130957c9ca68a) {
		try {
			$ede772dc4aad8c89->query('SELECT * FROM `user_output` LIMIT ' . $Feb130957c9ca68a . ', 1000;');
			$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

			foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
				$d094d3e133ec8c03[$D577b2a7889a5fb6['user_id']][] = $D577b2a7889a5fb6['access_output_id'];
			}
		}
		catch (Exception $E0f0519e12b13b6b) {
			echo 'Error: ' . $E0f0519e12b13b6b . "\n";
		}
	}

	label2360:

	goto label2087;

	label2361:

	$d353a4da8a0bb857 = $ede772dc4aad8c89->get_row()['count'];

	if (!(0 < $d353a4da8a0bb857)) {
		goto label1871;
	}

	$b62d6460eb33ea07->query('TRUNCATE `streams_servers`;');
	echo 'Allocating ' . number_format($d353a4da8a0bb857, 0) . ' streams to servers.' . "\n";
	$C455840d1f015c68 = range(0, $d353a4da8a0bb857, 1000);
	goto label1644;

	label2386:

	echo 'Adding ' . number_format($d353a4da8a0bb857, 0) . ' lines.' . "\n";
	$C455840d1f015c68 = range(0, $d353a4da8a0bb857, 1000);

	if ($C455840d1f015c68) {
		goto label2402;
	}

	$C455840d1f015c68 = [0];

	label2402:

	goto label240;

	label2403:

	$b62d6460eb33ea07->query('TRUNCATE `streams_categories`;');
	echo 'Creating ' . number_format(count($e02ff34f7d898a7b), 0) . ' categories.' . "\n";

	foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
		try {
			$D577b2a7889a5fb6 = C73ed8D0B70ce12f('streams_categories', $D577b2a7889a5fb6);
			$Fac87d38f7786df0 = c483A3A59265139E($D577b2a7889a5fb6);
			$B91645b8411dc88c = 'INSERT INTO `streams_categories`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
			$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
		}
		catch (Exception $E0f0519e12b13b6b) {
			echo 'Error: ' . $E0f0519e12b13b6b . "\n";
		}
	}

	label2446:

	goto label1508;

	label2447:

	if (!in_array('blocked_ips', $af280045ef711f83)) {
		goto label1191;
	}

	$ede772dc4aad8c89->query('SELECT * FROM `blocked_ips`;');
	$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

	if (!(0 < count($e02ff34f7d898a7b))) {
		goto label1085;
	}

	goto label1042;

	label2468:

	$b62d6460eb33ea07->query('TRUNCATE `tickets_replies`;');
	echo 'Posting ' . number_format(count($e02ff34f7d898a7b), 0) . ' replies.' . "\n";

	foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
		try {
			$D577b2a7889a5fb6 = c73eD8d0B70Ce12F('tickets_replies', $D577b2a7889a5fb6);
			$Fac87d38f7786df0 = c483a3a59265139e($D577b2a7889a5fb6);
			$B91645b8411dc88c = 'INSERT INTO `tickets_replies`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
			$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
		}
		catch (Exception $E0f0519e12b13b6b) {
			echo 'Error: ' . $E0f0519e12b13b6b . "\n";
		}
	}

	label2511:

	goto label2066;

	label2512:

	if (!in_array('streams', $af280045ef711f83)) {
		goto label760;
	}

	$ede772dc4aad8c89->query('SELECT COUNT(*) AS `count` FROM `streams`;');
	$d353a4da8a0bb857 = $ede772dc4aad8c89->get_row()['count'];

	if (!(0 < $d353a4da8a0bb857)) {
		goto label760;
	}

	$b62d6460eb33ea07->query('TRUNCATE `streams`;');
	goto label3016;

	label2534:

	foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
		try {
			$D577b2a7889a5fb6 = C73Ed8D0B70ce12F('rtmp_ips', $D577b2a7889a5fb6);
			$D577b2a7889a5fb6['push'] = 1;
			$D577b2a7889a5fb6['pull'] = 1;
			$Fac87d38f7786df0 = C483A3A59265139E($D577b2a7889a5fb6);
			$B91645b8411dc88c = 'INSERT INTO `rtmp_ips`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
			$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
		}
		catch (Exception $E0f0519e12b13b6b) {
			echo 'Error: ' . $E0f0519e12b13b6b . "\n";
		}
	}

	label2568:

	if (!in_array('series', $af280045ef711f83)) {
		goto label1132;
	}

	goto label2785;

	label2576:

	echo 'Authorising ' . number_format($d353a4da8a0bb857, 0) . ' MAG devices.' . "\n";
	$C455840d1f015c68 = range(0, $d353a4da8a0bb857, 1000);

	if ($C455840d1f015c68) {
		goto label2592;
	}

	$C455840d1f015c68 = [0];

	label2592:

	goto label2153;

	label2593:

	foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
		/*
		#unhandled Range 2595 => 2686
		*/
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		2595 1233  NOP/0                     ?0        ?0                   ?0                  	;1	<<2683
		2596 1233  GOTO/253                  ?0        ?2670                ?1660               	;0
		2597 1236  FETCH_DIM_R/81            $1155=    $D577b2a7889a5fb6    'can_gen_e2'        	;0
		2598 1236  JMPZ/43                   ?0        $1155:$D577b2a7889a5fb6['can_gen_e2'] ?2601               	;0	>>2601
		2599 1237  NOP/0                     ?0        ?0                   ?0                  	;1
		2600 1237  GOTO/253                  ?0        ?2605                ?1662               	;0
		2601 1239  ASSIGN_DIM/147            ?1124     $D577b2a7889a5fb6    'is_e2'             	;0	<<2598
		2602 1239  OP_DATA/137               ?0        0                    ?0                  	;0
		2603 1240  NOP/0                     ?0        ?0                   ?0                  	;1
		2604 1240  GOTO/253                  ?0        ?2609                ?1665               	;0
		2605 1242  NOP/0                     ?0        ?0                   ?0                  	;1
		2606 1242  GOTO/253                  ?0        ?2607                ?1666               	;0
		2607 1244  ASSIGN_DIM/147            ?1125     $D577b2a7889a5fb6    'is_e2'             	;0
		2608 1244  OP_DATA/137               ?0        1                    ?0                  	;0
		2609 1246  FETCH_DIM_R/81            $1158=    $D577b2a7889a5fb6    'only_mag'          	;0
		2610 1246  JMPNZ_EX/47               #1159=    $1158:$D577b2a7889a5fb6['only_mag'] ?2613               	;0	>>2613
		2611 1246  FETCH_DIM_R/81            $1160=    $D577b2a7889a5fb6    'only_e2'           	;0
		2612 1246  BOOL/52                   #1159=    $1160:$D577b2a7889a5fb6['only_e2'] ?0                  	;0
		2613 1246  JMPZ/43                   ?0        #1159:$D577b2a7889a5fb6['only_e2'] ?2616               	;0	>>2616	<<2610
		2614 1247  NOP/0                     ?0        ?0                   ?0                  	;1
		2615 1247  GOTO/253                  ?0        ?2648                ?1671               	;0
		2616 1249  ASSIGN_DIM/147            ?1129     $D577b2a7889a5fb6    'is_line'           	;0	<<2613
		2617 1249  OP_DATA/137               ?0        1                    ?0                  	;0
		2618 1250  NOP/0                     ?0        ?0                   ?0                  	;1
		2619 1250  GOTO/253                  ?0        ?2650                ?1674               	;0
		2620 1251  NOP/0                     ?0        ?0                   ?0                  	;1
		2621 1251  GOTO/253                  ?0        ?2648                ?1675               	;0
		2622 1253  INIT_FCALL_BY_NAME/59     ?0        ?0                   'count'             	;1
		2623 1253  INIT_FCALL_BY_NAME/59     ?0        ?0                   'json_decode'       	;2
		2624 1253  FETCH_DIM_FUNC_ARG/93     $1162=    $D577b2a7889a5fb6    'output_formats'    	;1
		2625 1253  SEND_VAR_EX/66            ?80       $1162:$D577b2a7889a5fb6['output_formats'] ?1                  	;0
		2626 1253  SEND_VAL_EX/116           ?96       true                 ?2                  	;0
		2627 1253  DO_FCALL_BY_NAME/131      $1163=    ?0                   ?0                  	;0
		2628 1253  SEND_VAR_NO_REF_EX/50     ?80       $1163:json_decode($D577b2a7889a5fb6['output_formats'], true) ?1                  	;0
		2629 1253  DO_FCALL_BY_NAME/131      $1164=    ?0                   ?0                  	;0
		2630 1253  IS_EQUAL/17               #1165=    $1164:count(json_decode($D577b2a7889a5fb6['output_formats'], true)) 0                   	;0
		2631 1253  BOOL_NOT/13               #1166=    #1165:count(json_decode($D577b2a7889a5fb6['output_formats'], true)) == 0 ?0                  	;0
		2632 1253  JMPZ/43                   ?0        #1166:!(count(json_decode($D577b2a7889a5fb6['output_formats'], true)) == 0) ?2635               	;0	>>2635
		2633 1254  NOP/0                     ?0        ?0                   ?0                  	;1
		2634 1254  GOTO/253                  ?0        ?2637                ?1683               	;0
		2635 1256  ASSIGN_DIM/147            ?1135     $D577b2a7889a5fb6    'output_formats'    	;0	<<2632
		2636 1256  OP_DATA/137               ?0        '[1,2,3]'            ?0                  	;0
		2637 1258  INIT_FCALL_BY_NAME/59     ?0        ?0                   'c73ED8D0b70CE12F'  	;2
		2638 1258  SEND_VAL_EX/116           ?80       'users_packages'     ?1                  	;0
		2639 1258  SEND_VAR_EX/66            ?96       $D577b2a7889a5fb6    ?2                  	;0
		2640 1258  DO_FCALL_BY_NAME/131      $1168=    ?0                   ?0                  	;0
		2641 1258  ASSIGN/38                 ?1137     $D577b2a7889a5fb6    $1168:c73ED8D0b70CE12F('users_packages', $D577b2a7889a5fb6)	;0
		2642 1259  INIT_FCALL_BY_NAME/59     ?0        ?0                   'c483A3a59265139e'  	;1
		2643 1259  SEND_VAR_EX/66            ?80       $D577b2a7889a5fb6    ?1                  	;0
		2644 1259  DO_FCALL_BY_NAME/131      $1170=    ?0                   ?0                  	;0
		2645 1259  ASSIGN/38                 ?1139     $Fac87d38f7786df0    $1170:c483A3a59265139e($D577b2a7889a5fb6)	;0
		2646 1260  NOP/0                     ?0        ?0                   ?0                  	;1
		2647 1260  GOTO/253                  ?0        ?2656                ?1691               	;0
		2648 1263  ASSIGN_DIM/147            ?1140     $D577b2a7889a5fb6    'is_line'           	;0
		2649 1263  OP_DATA/137               ?0        0                    ?0                  	;0
		2650 1265  ASSIGN_DIM/147            ?1141     $D577b2a7889a5fb6    'lock_device'       	;0
		2651 1265  OP_DATA/137               ?0        1                    ?0                  	;0
		2652 1266  ASSIGN_DIM/147            ?1142     $D577b2a7889a5fb6    'check_compatible'  	;0
		2653 1266  OP_DATA/137               ?0        1                    ?0                  	;0
		2654 1267  NOP/0                     ?0        ?0                   ?0                  	;1
		2655 1267  GOTO/253                  ?0        ?2622                ?1698               	;0
		2656 1269  FETCH_DIM_R/81            $1175=    $Fac87d38f7786df0    'columns'           	;0
		2657 1269  CONCAT/8                  #1176=    'INSERT INTO `users_packages`(' $1175:$Fac87d38f7786df0['columns']	;0
		2658 1269  CONCAT/8                  #1177=    #1176:'INSERT INTO `users_packages`(' . $Fac87d38f7786df0['columns'] ') VALUES('         	;0
		2659 1269  FETCH_DIM_R/81            $1178=    $Fac87d38f7786df0    'placeholder'       	;0
		2660 1269  CONCAT/8                  #1179=    #1177:'INSERT INTO `users_packages`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' $1178:$Fac87d38f7786df0['placeholder']	;0
		2661 1269  CONCAT/8                  #1180=    #1179:'INSERT INTO `users_packages`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] ');'                	;0
		2662 1269  ASSIGN/38                 ?1149     $B91645b8411dc88c    #1180:'INSERT INTO `users_packages`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');'	;0
		2663 1270  INIT_METHOD_CALL/112      ?0        $b62d6460eb33ea07    'query'             	;1
		2664 1270  SEND_VAR_EX/66            ?80       $B91645b8411dc88c    ?1                  	;0
		2665 1270  FETCH_DIM_R/81            $1182=    $Fac87d38f7786df0    'data'              	;0
		2666 1270  SEND_UNPACK/165           ?80       $1182:$Fac87d38f7786df0['data'] ?1                  	;0
		2667 1270  DO_FCALL/60               ?1151     ?0                   ?0                  	;0
		2668 1271  NOP/0                     ?0        ?0                   ?0                  	;1
		2669 1271  GOTO/253                  ?0        ?2682                ?1707               	;0
		2670 1273  FETCH_DIM_R/81            $1184=    $D577b2a7889a5fb6    'can_gen_mag'       	;0
		2671 1273  JMPZ/43                   ?0        $1184:$D577b2a7889a5fb6['can_gen_mag'] ?2674               	;0	>>2674
		2672 1274  NOP/0                     ?0        ?0                   ?0                  	;1
		2673 1274  GOTO/253                  ?0        ?2678                ?1709               	;0
		2674 1276  ASSIGN_DIM/147            ?1153     $D577b2a7889a5fb6    'is_mag'            	;0	<<2671
		2675 1276  OP_DATA/137               ?0        0                    ?0                  	;0
		2676 1277  NOP/0                     ?0        ?0                   ?0                  	;1
		2677 1277  GOTO/253                  ?0        ?2597                ?1712               	;0
		2678 1279  ASSIGN_DIM/147            ?1154     $D577b2a7889a5fb6    'is_mag'            	;0
		2679 1279  OP_DATA/137               ?0        1                    ?0                  	;0
		2680 1280  NOP/0                     ?0        ?0                   ?0                  	;1
		2681 1280  GOTO/253                  ?0        ?2597                ?1715               	;0
		2682 1281  JMP/42                    ?0        ?2687                ?0                  	;0	>>2687
		2683 1282  CATCH/107                 ?1        'Exception'          $E0f0519e12b13b6b   	;0 CB	>>2687,2595
		2684 1283  CONCAT/8                  #1187=    'Error: '            $E0f0519e12b13b6b   	;0
		2685 1283  CONCAT/8                  #1188=    #1187:'Error: ' . $E0f0519e12b13b6b "\n"                	;0
		2686 1283  ECHO/40                   ?0        #1188:'Error: ' . $E0f0519e12b13b6b . "\n" ?0                  	;0
		*/
		goto label2670;

		label2597:

		goto label2605;
		$D577b2a7889a5fb6['is_e2'] = 0;
		goto label2609;

		label2605:

		goto label2607;

		label2607:

		$D577b2a7889a5fb6['is_e2'] = 1;

		label2609:

		goto label2648;
		$D577b2a7889a5fb6['is_line'] = 1;
		goto label2650;
		goto label2648;

		label2622:

		goto label2637;
		$D577b2a7889a5fb6['output_formats'] = '[1,2,3]';

		label2637:

		$D577b2a7889a5fb6 = c73ED8D0b70CE12F('users_packages', $D577b2a7889a5fb6);
		$Fac87d38f7786df0 = c483A3a59265139e($D577b2a7889a5fb6);
		goto label2656;

		label2648:

		$D577b2a7889a5fb6['is_line'] = 0;

		label2650:

		$D577b2a7889a5fb6['lock_device'] = 1;
		$D577b2a7889a5fb6['check_compatible'] = 1;
		goto label2622;

		label2656:

		$B91645b8411dc88c = 'INSERT INTO `users_packages`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
		$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
		goto label2682;

		label2670:

		goto label2678;
		$D577b2a7889a5fb6['is_mag'] = 0;
		goto label2597;

		label2678:

		$D577b2a7889a5fb6['is_mag'] = 1;
		goto label2597;

		label2682:

		echo 'Error: ' . $E0f0519e12b13b6b . "\n";
	}

	label2689:

	if (!in_array('rtmp_ips', $af280045ef711f83)) {
		goto label2568;
	}

	goto label2307;

	label2697:

	if (!(0 < $d353a4da8a0bb857)) {
		goto label659;
	}

	$b62d6460eb33ea07->query('TRUNCATE `streams_servers`;');
	echo 'Allocating ' . number_format($d353a4da8a0bb857, 0) . ' streams to servers.' . "\n";
	$C455840d1f015c68 = range(0, $d353a4da8a0bb857, 1000);

	if ($C455840d1f015c68) {
		goto label569;
	}

	goto label568;

	label2720:

	if ($C455840d1f015c68) {
		goto label2723;
	}

	$C455840d1f015c68 = [0];

	label2723:

	foreach ($C455840d1f015c68 as $Feb130957c9ca68a) {
		try {
			$ede772dc4aad8c89->query('SELECT * FROM `series_episodes` LIMIT ' . $Feb130957c9ca68a . ', 1000;');
			$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

			foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
				$D577b2a7889a5fb6['episode_num'] = $D577b2a7889a5fb6['sort'];
				$D577b2a7889a5fb6 = C73ed8d0b70CE12f('streams_episodes', $D577b2a7889a5fb6);
				$Fac87d38f7786df0 = c483A3A59265139E($D577b2a7889a5fb6);
				$B91645b8411dc88c = 'INSERT INTO `streams_episodes`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
				$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
			}
		}
		catch (Exception $E0f0519e12b13b6b) {
			echo 'Error: ' . $E0f0519e12b13b6b . "\n";
		}
	}

	goto label59;

	label2769:

	$d094d3e133ec8c03 = [];

	if (!in_array('user_output', $af280045ef711f83)) {
		goto label2360;
	}

	$ede772dc4aad8c89->query('SELECT COUNT(*) AS `count` FROM `user_output`;');
	$d353a4da8a0bb857 = $ede772dc4aad8c89->get_row()['count'];
	goto label3057;

	label2785:

	$ede772dc4aad8c89->query('SELECT COUNT(*) AS `count` FROM `series`;');
	$d353a4da8a0bb857 = $ede772dc4aad8c89->get_row()['count'];

	if (!(0 < $d353a4da8a0bb857)) {
		goto label1132;
	}

	$b62d6460eb33ea07->query('TRUNCATE `streams_series`;');
	echo 'Adding ' . number_format($d353a4da8a0bb857, 0) . ' TV series.' . "\n";
	goto label2920;

	label2807:

	$b62d6460eb33ea07->query('TRUNCATE `profiles`;');
	echo 'Generating ' . number_format(count($e02ff34f7d898a7b), 0) . ' transcoding profiles.' . "\n";

	foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
		try {
			$D577b2a7889a5fb6 = c73ed8D0B70ce12F('profiles', $D577b2a7889a5fb6);
			$Fac87d38f7786df0 = c483A3a59265139e($D577b2a7889a5fb6);
			$B91645b8411dc88c = 'INSERT INTO `profiles`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
			$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
		}
		catch (Exception $E0f0519e12b13b6b) {
			echo 'Error: ' . $E0f0519e12b13b6b . "\n";
		}
	}

	label2850:

	goto label2769;

	label2851:

	$C455840d1f015c68 = [0];

	label2852:

	foreach ($C455840d1f015c68 as $Feb130957c9ca68a) {
		try {
			$ede772dc4aad8c89->query('SELECT * FROM `members` LIMIT ' . $Feb130957c9ca68a . ', 1000;');
			$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

			foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
				$D577b2a7889a5fb6 = C73ED8D0b70cE12f('users', $D577b2a7889a5fb6);
				$Fac87d38f7786df0 = c483a3a59265139E($D577b2a7889a5fb6);
				$B91645b8411dc88c = 'INSERT INTO `users`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
				$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
			}
		}
		catch (Exception $E0f0519e12b13b6b) {
			echo 'Error: ' . $E0f0519e12b13b6b . "\n";
		}
	}

	label2894:

	goto label2447;

	label2895:

	$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

	if (!(0 < count($e02ff34f7d898a7b))) {
		goto label1596;
	}

	$cc6ea4e294b9cb00 = false;
	$b62d6460eb33ea07->query('TRUNCATE `servers`;');
	echo 'Moving ' . number_format(count($e02ff34f7d898a7b), 0) . ' servers.' . "\n";
	goto label1529;

	label2920:

	$C455840d1f015c68 = range(0, $d353a4da8a0bb857, 1000);

	if ($C455840d1f015c68) {
		goto label2929;
	}

	$C455840d1f015c68 = [0];

	label2929:

	foreach ($C455840d1f015c68 as $Feb130957c9ca68a) {
		try {
			$ede772dc4aad8c89->query('SELECT * FROM `series` LIMIT ' . $Feb130957c9ca68a . ', 1000;');
			$e02ff34f7d898a7b = $ede772dc4aad8c89->get_rows();

			foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
				$D577b2a7889a5fb6['category_id'] = '[' . intval($D577b2a7889a5fb6['category_id']) . ']';
				$D577b2a7889a5fb6['release_date'] = $D577b2a7889a5fb6['releaseDate'];

				if (!($D577b2a7889a5fb6['tmdb_id'] == 0)) {
					goto label2961;
				}

				$D577b2a7889a5fb6['tmdb_id'] = NULL;

				label2961:

				$D577b2a7889a5fb6 = C73ED8d0B70Ce12f('streams_series', $D577b2a7889a5fb6);
				$Fac87d38f7786df0 = c483A3a59265139E($D577b2a7889a5fb6);
				$B91645b8411dc88c = 'INSERT IGNORE INTO `streams_series`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
				$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
			}
		}
		catch (Exception $E0f0519e12b13b6b) {
			echo 'Error: ' . $E0f0519e12b13b6b . "\n";
		}
	}

	goto label1132;

	label2992:

	$ede772dc4aad8c89->query('SELECT `id`, `type` FROM `streams`;');
	$D9846544dffb63c9 = $ede772dc4aad8c89->get_rows();

	foreach ($D9846544dffb63c9 as $fe93a43f53d92a4e) {
		$B51da85892620f9b[intval($fe93a43f53d92a4e['id'])] = intval($fe93a43f53d92a4e['type']);
	}

	$ede772dc4aad8c89->query('SELECT `id` FROM `series`;');
	goto label3033;

	label3016:

	echo 'Adding ' . number_format($d353a4da8a0bb857, 0) . ' streams.' . "\n";
	$C455840d1f015c68 = range(0, $d353a4da8a0bb857, 1000);

	if ($C455840d1f015c68) {
		goto label3032;
	}

	$C455840d1f015c68 = [0];

	label3032:

	goto label660;

	label3033:

	$d02ef9ae10a41939 = $ede772dc4aad8c89->get_rows();

	foreach ($d02ef9ae10a41939 as $F955f269a1230501) {
		$cb98d4eed473e4c8[] = intval($F955f269a1230501['id']);
	}

	if (!in_array('reg_users', $af280045ef711f83)) {
		goto label1936;
	}

	$ede772dc4aad8c89->query('SELECT COUNT(*) AS `count` FROM `reg_users`;');
	goto label1086;

	label3057:

	if (!(0 < $d353a4da8a0bb857)) {
		goto label2360;
	}

	echo 'Attributing ' . number_format($d353a4da8a0bb857, 0) . ' output options to lines.' . "\n";
	$C455840d1f015c68 = range(0, $d353a4da8a0bb857, 1000);

	if ($C455840d1f015c68) {
		goto label2334;
	}

	$C455840d1f015c68 = [0];
	goto label2334;
}
catch (Exception $E0f0519e12b13b6b) {
	echo 'Error: ' . $E0f0519e12b13b6b . "\n";
}

echo "\n" . 'Migration has been completed!' . "\n\n" . 'Your settings have been reset to the XUI default, please take some time to review the settings page and make the desired changes.' . "\n";
file_put_contents(TMP_PATH . '.migration.status', 2);
goto label35;

label3091:

$F11ac202cd59a500 = ['reg_users', 'users', 'enigma2_devices', 'mag_devices', 'user_output', 'streaming_servers', 'series', 'series_episodes', 'streams', 'streams_sys', 'streams_options', 'stream_categories', 'bouquets', 'member_groups', 'packages', 'rtmp_ips', 'epg', 'blocked_ips', 'blocked_user_agents', 'isp_addon', 'tickets', 'tickets_replies', 'transcoding_profiles', 'watch_folders', 'categories', 'epg_sources', 'members', 'blocked_isps', 'groups', 'servers', 'stream_servers'];
$af280045ef711f83 = json_decode(file_get_contents(TMP_PATH . '.migration.options'), true) ?: [];

if (!(count($af280045ef711f83) == 0)) {
	goto label1;
}

$af280045ef711f83 = $F11ac202cd59a500;
goto label1;

label3113:

require str_replace('\\', '/', dirname($argv[0])) . '/../../includes/admin.php';
set_time_limit(0);
ini_set('memory_limit', -1);

if (@$argc) {
	goto label3091;
}

exit(0);
goto label3091;

label3138:

?>