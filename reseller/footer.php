<?php


goto label1690;

label1:

echo '        ' . "\r\n\t\t" . 'var rClearing = false;' . "\r\n\r\n\t\t" . 'function api(rID, rType) {' . "\r\n\t\t\t" . '$.getJSON("./api?action=line_activity&sub=" + rType + "&uuid=" + rID, function(data) {' . "\r\n\t\t\t\t" . 'if (data.result === true) {' . "\r\n\t\t\t\t\t" . 'if (rType == "kill") {' . "\r\n\t\t\t\t\t\t" . '$.toast("';
echo $_['connection_has_been_killed'];
echo '");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . '$("#datatable-activity").DataTable().ajax.reload(null, false);' . "\r\n\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t" . '$.toast("';
echo $_['error_occured'];
echo '");' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function refreshTable() {' . "\r\n\t\t\t" . '$("#datatable-activity").DataTable().ajax.reload( null, false );' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function getStream() {' . "\r\n\t\t\t" . 'return $("#live_stream").val();' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function getLine() {' . "\r\n\t\t\t" . 'return $("#live_line").val();' . "\r\n\t\t" . '}' . "\r\n" . '        function getUser() {' . "\r\n\t\t\t" . 'return $("#live_user").val();' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function clearFilters() {' . "\r\n\t\t\t" . 'window.rClearing = true;' . "\r\n" . '            $("#live_search").val("").trigger(\'change\');' . "\r\n\t\t\t" . '$("#live_stream").val("").trigger(\'change\');' . "\r\n\t\t\t" . '$(\'#live_line\').val("").trigger(\'change\');' . "\r\n" . '            $(\'#live_user\').val("").trigger(\'change\');' . "\r\n\t\t\t" . '$(\'#live_show_entries\').val("';
goto label1156;

label9:

echo "\t\t\t\t" . '],' . "\r\n" . '                ';

if (!$Ebb0b63f7c597ba4) {
	goto label14;
}

echo 'scrollX: true,';

label14:

goto label1574;

label15:

echo "\t\t\t\t";

if (XUI::$rSettings['redis_handler']) {
	goto label1441;
}

echo "\t\t\t\t" . 'order: [[ ';
echo isset(XUI::$rRequest['order']) ? intval(XUI::$rRequest['order']) : 4;
goto label1419;

label34:

echo $E59d0debc75e7be8['credits'];
echo ' - rData.data.cost_credits, 0));' . "\r\n" . '                        $("#exp_date").val(rData.data.exp_date);' . "\r\n" . '                        if (';
echo $E59d0debc75e7be8['credits'];
echo ' - rData.data.cost_credits < 0) {' . "\r\n" . '                            $("#credits-cost").hide();' . "\r\n" . '                            $("#no-credits").show()' . "\r\n" . '                            $(".purchase").prop(\'disabled\', true);' . "\r\n" . '                        } else {' . "\r\n" . '                            $("#credits-cost").show();' . "\r\n" . '                            $("#no-credits").hide()' . "\r\n" . '                            $(".purchase").prop(\'disabled\', false);' . "\r\n" . '                        }' . "\r\n" . '                        $(rData.bouquets).each(function(rIndex) {' . "\r\n" . '                            if ((window.rUserBouquet.length > 0) && (window.rUserPackage == parseInt($("#package").val()))) {' . "\r\n" . '                                if (window.rUserBouquet.includes(parseInt(rData.bouquets[rIndex].id))) {' . "\r\n" . '                                    var rChecked = "checked";' . "\r\n" . '                                } else {' . "\r\n" . '                                    var rChecked = "";' . "\r\n" . '                                }' . "\r\n" . '                            } else {' . "\r\n" . '                                var rChecked = "checked";' . "\r\n" . '                            }' . "\r\n\t\t\t\t\t\t\t" . 'rTable.row.add([';

if ($db0a61ef32b89a27['allow_change_bouquets']) {
	goto label225;
}

goto label223;

label44:

echo intval($f1dcaed925076e67['default_entries']);
echo '; }' . "\r\n\t\t\t" . 'var rTable = $("#datatable-streampage").DataTable({' . "\r\n\t\t\t\t" . 'language: {' . "\r\n\t\t\t\t\t" . 'paginate: {' . "\r\n\t\t\t\t\t\t" . 'previous: "<i class=\'mdi mdi-chevron-left\'>",' . "\r\n\t\t\t\t\t\t" . 'next: "<i class=\'mdi mdi-chevron-right\'>"' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'drawCallback: function() {' . "\r\n" . '                    bindHref(); refreshTooltips();' . "\r\n" . '                    if ($("#datatable-streampage").DataTable().page.info().page > 0) {' . "\r\n" . '                        setParam("page", $("#datatable-streampage").DataTable().page.info().page+1);' . "\r\n" . '                    } else {' . "\r\n" . '                        delParam("page");' . "\r\n" . '                    }' . "\r\n" . '                    var rOrder = $("#datatable-streampage").DataTable().order()[0];' . "\r\n" . '                    setParam("order", rOrder[0]); setParam("dir", rOrder[1]);' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'createdRow: function(row, data, index) {' . "\r\n\t\t\t\t\t" . '$(row).addClass(\'stream-\' + data[0]);' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'responsive: false,' . "\r\n\t\t\t\t" . 'processing: true,' . "\r\n\t\t\t\t" . 'serverSide: true,' . "\r\n" . '                searchDelay: 250,' . "\r\n\t\t\t\t" . 'ajax: {' . "\r\n\t\t\t\t\t" . 'url: "./table",' . "\r\n\t\t\t\t\t" . '"data": function(d) {' . "\r\n\t\t\t\t\t\t" . 'd.id = "streams",' . "\r\n\t\t\t\t\t\t" . 'd.category = getCategory();' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'columnDefs: [' . "\r\n\t\t\t\t\t" . '{"className": "dt-center", "targets": [0,1,4,5]},' . "\r\n\t\t\t\t\t";

if (XUI::$rSettings['redis_handler']) {
	goto label1684;
}

echo "\t\t\t\t\t" . '{"orderable": false, "targets": [1,5]},' . "\r\n\t\t\t\t\t";
goto label1685;
goto label1684;

label57:

echo '                $(".credits .entry").html($.number(data.credits_assigned, 0));' . "\r\n" . '                ';

label58:

echo '                if (Date.now() - rStart < 1000) {' . "\r\n" . '                    setTimeout(getStats, 1000 - (Date.now() - rStart));' . "\r\n" . '                } else {' . "\r\n" . '                    getStats();' . "\r\n" . '                }' . "\r\n" . '            }).fail(function() {' . "\r\n" . '                setTimeout(getStats, 1000);' . "\r\n" . '            });' . "\r\n" . '        }' . "\r\n" . '        ' . "\r\n" . '        $(document).ready(function() {' . "\r\n" . '            $("#manage_lines").on("click", function() {' . "\r\n" . '                $(".bs-type-modal-center").modal("show");' . "\r\n" . '            });            ' . "\r\n" . '            getStats();' . "\r\n" . '        });' . "\r\n" . '        ' . "\r\n\t\t";

label59:

goto label668;

label60:

if (XUI::$rSettings['redis_handler']) {
	goto label66;
}

echo "\t\t\t\t\t" . '{"orderable": false, "targets": [1,5]},' . "\r\n\t\t\t\t\t";
goto label1090;

label66:

echo "\t\t\t\t\t" . '{"orderable": false, "targets": [1,4,5]},' . "\r\n\t\t\t\t\t";
goto label1090;

label68:

$f9eeeff050988ba5 = false;

label69:

foreach ($Df5cd7b5dc4cc10c as $b5fd3e3f0096d7f4) {
	goto label104;

	label73:

	echo count(json_decode($edc2e948fe0884ca['bouquet_movies'], true));
	echo ', ';
	echo count(json_decode($edc2e948fe0884ca['bouquet_series'], true));
	echo ', ';
	echo count(json_decode($edc2e948fe0884ca['bouquet_radios'], true));
	goto label144;

	label104:

	$edc2e948fe0884ca = B47Fb5320e43f112($b5fd3e3f0096d7f4);

	if (!(0 < strlen($b5fd3e3f0096d7f4))) {
		goto label145;
	}

	echo "\t\t\t\t\t" . 'rTable.row.add([';

	if ($f9eeeff050988ba5) {
		goto label161;
	}

	echo $b5fd3e3f0096d7f4;
	goto label159;

	label123:

	echo ', \'';
	echo str_replace('\'', '\\\'', $edc2e948fe0884ca['bouquet_name']);
	echo '\', ';
	echo count(json_decode($edc2e948fe0884ca['bouquet_channels'], true));
	echo ', ';
	goto label73;

	label144:

	echo ']);' . "\r\n\t\t\t\t\t";

	label145:

	goto label166;

	label147:

	if (!in_array($b5fd3e3f0096d7f4, $fac66c09488bc278)) {
		goto label156;
	}

	echo 'checked';

	label156:

	echo '></input>"';

	label157:

	goto label123;

	label159:

	goto label157;

	label161:

	echo '"<input class=\'big_checkbox\' type=\'checkbox\' name=\'bouquets_selected[]\' value=\'';
	echo $b5fd3e3f0096d7f4;
	echo '\' ';
	goto label147;

	label166:
}

echo '                ';
goto label877;

label170:

echo '; }' . "\r\n\t\t\t" . 'var rTable = $("#datatable-streampage").DataTable({' . "\r\n\t\t\t\t" . 'language: {' . "\r\n\t\t\t\t\t" . 'paginate: {' . "\r\n\t\t\t\t\t\t" . 'previous: "<i class=\'mdi mdi-chevron-left\'>",' . "\r\n\t\t\t\t\t\t" . 'next: "<i class=\'mdi mdi-chevron-right\'>"' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'drawCallback: function() {' . "\r\t\t\t\t\t" . 'bindHref(); refreshTooltips();' . "\r\n" . '                    if ($("#datatable-streampage").DataTable().page.info().page > 0) {' . "\r\n" . '                        setParam("page", $("#datatable-streampage").DataTable().page.info().page+1);' . "\r\n" . '                    } else {' . "\r\n" . '                        delParam("page");' . "\r\n" . '                    }' . "\r\n" . '                    var rOrder = $("#datatable-streampage").DataTable().order()[0];' . "\r\n" . '                    setParam("order", rOrder[0]); setParam("dir", rOrder[1]);' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'createdRow: function(row, data, index) {' . "\r\n\t\t\t\t\t" . '$(row).addClass(\'stream-\' + data[0]);' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'responsive: false,' . "\r\n\t\t\t\t" . 'processing: true,' . "\r\n\t\t\t\t" . 'serverSide: true,' . "\r\n" . '                searchDelay: 250,' . "\r\n\t\t\t\t" . 'ajax: {' . "\r\n\t\t\t\t\t" . 'url: "./table",' . "\r\n\t\t\t\t\t" . '"data": function(d) {' . "\r\n\t\t\t\t\t\t" . 'd.id = "radios",' . "\r\n\t\t\t\t\t\t" . 'd.category = getCategory();' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'columnDefs: [' . "\r\n\t\t\t\t\t" . '{"className": "dt-center", "targets": [0,1,4,5]},' . "\r\n\t\t\t\t\t";

if (XUI::$rSettings['redis_handler']) {
	goto label177;
}

echo "\t\t\t\t\t" . '{"orderable": false, "targets": [1,5]},' . "\r\n\t\t\t\t\t";
goto label1109;

label177:

goto label1108;

label178:

goto label1010;

label179:

echo '        ' . "\r\n\t\t" . 'function getReseller() {' . "\r\n\t\t\t" . 'return $("#reseller").val();' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function getRange() {' . "\r\n\t\t\t" . 'return $("#range").val();' . "\r\n\t\t" . '}' . "\r\n" . '        function refreshTable() {' . "\r\n\t\t\t" . '$("#datatable-activity").DataTable().ajax.reload( null, false );' . "\r\n\t\t" . '}' . "\r\n\t\t" . '$(document).ready(function() {' . "\r\n\t\t\t" . '$(\'select\').select2({width: \'100%\'});' . "\r\n\t\t\t" . '$(\'#range\').daterangepicker({' . "\r\n\t\t\t\t" . 'singleDatePicker: false,' . "\r\n\t\t\t\t" . 'showDropdowns: true,' . "\r\n\t\t\t\t" . 'locale: {' . "\r\n\t\t\t\t\t" . 'format: \'YYYY-MM-DD\'' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'autoUpdateInput: false' . "\r\n\t\t\t" . '}).val("");' . "\r\n\t\t\t" . '$(\'#range\').on(\'apply.daterangepicker\', function(ev, picker) {' . "\r\n\t\t\t\t" . '$(this).val(picker.startDate.format(\'YYYY-MM-DD\') + \' - \' + picker.endDate.format(\'YYYY-MM-DD\'));' . "\r\n\t\t\t\t" . '$("#datatable-activity").DataTable().ajax.reload( null, false );' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#range\').on(\'cancel.daterangepicker\', function(ev, picker) {' . "\r\n\t\t\t\t" . '$(this).val(\'\');' . "\r\n\t\t\t\t" . '$("#datatable-activity").DataTable().ajax.reload( null, false );' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#range\').on(\'change\', function() {' . "\r\n\t\t\t\t" . '$("#datatable-activity").DataTable().ajax.reload( null, false );' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$("#datatable-activity").DataTable({' . "\r\n\t\t\t\t" . 'language: {' . "\r\n\t\t\t\t\t" . 'paginate: {' . "\r\n\t\t\t\t\t\t" . 'previous: "<i class=\'mdi mdi-chevron-left\'>",' . "\r\n\t\t\t\t\t\t" . 'next: "<i class=\'mdi mdi-chevron-right\'>"' . "\r\n\t\t\t\t\t" . '},' . "\r\n\t\t\t\t\t" . 'infoFiltered: ""' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'drawCallback: function() {' . "\r\r\n\t\t\t\t\t" . 'bindHref(); refreshTooltips();' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'responsive: false,' . "\r\n\t\t\t\t" . 'processing: true,' . "\r\n\t\t\t\t" . 'serverSide: true,' . "\r\n\t\t\t\t" . 'ajax: {' . "\r\n\t\t\t\t\t" . 'url: "./table",' . "\r\n\t\t\t\t\t" . '"data": function(d) {' . "\r\n\t\t\t\t\t\t" . 'd.id = "reg_user_logs",' . "\r\n\t\t\t\t\t\t" . 'd.range = getRange(),' . "\r\n\t\t\t\t\t\t" . 'd.reseller = getReseller()' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'columnDefs: [' . "\r\n\t\t\t\t\t" . '{"className": "dt-center", "targets": [4,5,6]},' . "\r\n" . '                    {"visible": false, "targets": [0]}' . "\r\n\t\t\t\t" . '],' . "\r\n\t\t\t\t" . '"order": [[ 6, "desc" ]],' . "\r\n\t\t\t\t" . 'pageLength: ';
echo intval($f1dcaed925076e67['default_entries']) ?: 10;
echo "\t\t\t" . '});' . "\r\n\t\t\t" . '$("#datatable-activity").css("width", "100%");' . "\r\n\t\t\t" . '$(\'#log_search\').keyup(function(){' . "\r\n\t\t\t\t" . '$(\'#datatable-activity\').DataTable().search($(this).val()).draw();' . "\r\n\t\t\t" . '})' . "\r\n\t\t\t" . '$(\'#show_entries\').change(function(){' . "\r\n\t\t\t\t" . '$(\'#datatable-activity\').DataTable().page.len($(this).val()).draw();' . "\r\n\t\t\t" . '})' . "\r\n\t\t\t" . '$(\'#reseller\').change(function(){' . "\r\n\t\t\t\t" . '$("#datatable-activity").DataTable().ajax.reload( null, false );' . "\r\n\t\t\t" . '})' . "\r\n\t\t" . '});' . "\r\n" . '        ' . "\r\n\t\t";
goto label1010;

label189:

echo isset(XUI::$rRequest['order']) ? intval(XUI::$rRequest['order']) : 0;
echo ', "';
echo in_array(strtolower(XUI::$rRequest['dir']), ['asc', 'desc']) ? strtolower(XUI::$rRequest['dir']) : 'desc';
echo '" ]],' . "\r\n\t\t\t\t" . 'pageLength: parseInt(rEntries),' . "\r\n\t\t\t\t" . 'lengthMenu: [10, 25, 50, 250, 500, 1000],' . "\r\n" . '                displayStart: (parseInt(rPage)-1) * parseInt(rEntries)' . "\r\n\t\t\t" . '});' . "\r\n" . '            function doSearch(rValue) {' . "\r\n" . '                clearTimeout(window.rSearch); window.rSearch = setTimeout(function(){ rTable.search(rValue).draw(); }, 500);' . "\r\n" . '            }' . "\r\n\t\t\t" . '$("#datatable-users").css("width", "100%");' . "\r\n\t\t\t" . '$(\'#reg_search\').keyup(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n\t\t\t\t\t" . 'if ($("#reg_search").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("search", $("#reg_search").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("search");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'doSearch($(this).val());' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#reg_show_entries\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n\t\t\t\t\t" . 'if ($("#reg_show_entries").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("entries", $("#reg_show_entries").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("entries");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'rTable.page.len($(this).val()).draw();' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#reg_filter\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n\t\t\t\t\t" . 'if ($("#reg_filter").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("filter", $("#reg_filter").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("filter");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'rTable.ajax.reload( null, false );' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#reg_reseller\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n\t\t\t\t\t" . 'if ($("#reg_reseller").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("owner", $("#reg_reseller").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("owner");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . '$("#datatable-users").DataTable().ajax.reload( null, false );' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n" . '            $("#credits").keyup(function() {' . "\r\n" . '                updateCredits();' . "\r\n" . '            });' . "\r\n\t\t\t" . 'if ($(\'#reg_search\').val()) {' . "\r\n\t\t\t\t" . 'rTable.search($(\'#reg_search\').val()).draw();' . "\r\n\t\t\t" . '}' . "\r\n" . '            checkClear();' . "\r\n\t\t" . '});' . "\r\n\r\n\t\t";

label222:

goto label178;

label223:

echo 'rData.bouquets[rIndex].id';
goto label226;

label225:

echo '"<input class=\'big_checkbox\' type=\'checkbox\' name=\'bouquets_selected[]\' value=\'" + rData.bouquets[rIndex].id + "\' " + rChecked + "></input>"';

label226:

goto label820;

label227:

if (!is_array($Df5cd7b5dc4cc10c)) {
	goto label240;
}

$fac66c09488bc278 = json_decode($F5ba2106d5227309['bouquet'], true);
goto label69;

label240:

$Df5cd7b5dc4cc10c = json_decode($F5ba2106d5227309['bouquet'], true);
goto label68;

label247:

echo '                pageLength: parseInt(rEntries),' . "\r\n\t\t\t\t" . 'lengthMenu: [10, 25, 50, 250, 500, 1000],' . "\r\n" . '                displayStart: (parseInt(rPage)-1) * parseInt(rEntries)' . "\r\n" . '            });' . "\r\n" . '            function doSearch(rValue) {' . "\r\n" . '                clearTimeout(window.rSearch); window.rSearch = setTimeout(function(){ rTable.search(rValue).draw(); }, 500);' . "\r\n" . '            }' . "\r\n" . '            $("#datatable-streampage").css("width", "100%");' . "\r\n" . '            $(\'#episodes_search\').keyup(function(){' . "\r\n" . '                if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n" . '                    if ($("#episodes_search").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("search", $("#episodes_search").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("search");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n" . '                    doSearch($(this).val());' . "\r\n" . '                }' . "\r\n" . '            })' . "\r\n" . '            $(\'#episodes_show_entries\').change(function(){' . "\r\n" . '                if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n" . '                    if ($("#stream_show_entries").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("entries", $("#stream_show_entries").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("entries");' . "\r\n\t\t\t\t\t" . '}' . "\r\n" . '                    rTable.page.len($(this).val()).draw();' . "\r\n" . '                }' . "\r\n" . '            })' . "\r\n" . '            $(\'#episodes_series\').change(function(){' . "\r\n" . '                if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n" . '                    if ($("#episodes_series").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("series", $("#episodes_series").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("series");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n" . '                    rTable.ajax.reload( null, false );' . "\r\n" . '                }' . "\r\n" . '            })' . "\r\n" . '            $(\'#series_category_id\').change(function(){' . "\r\n" . '                if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n" . '                    if ($("#series_category_id").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("category", $("#series_category_id").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("category");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n" . '                    rTable.ajax.reload( null, false );' . "\r\n" . '                }' . "\r\n" . '            })' . "\r\n" . '            if ($(\'#episodes_search\').val()) {' . "\r\n" . '                rTable.search($(\'#episodes_search\').val()).draw();' . "\r\n" . '            }' . "\r\n" . '            checkClear();' . "\r\n" . '        });' . "\r\n" . '        ' . "\r\n\t\t";

label248:

goto label572;

label249:

echo '        ' . "\r\n" . '        var rClearing = false;' . "\r\n\r\n\t\t" . 'function api(rID, rType, rConfirm=false) {' . "\r\n" . '            if ((rType == "delete") && (!rConfirm)) {' . "\r\n" . '                new jBox("Confirm", {' . "\r\n" . '                    confirmButton: "Delete",' . "\r\n" . '                    cancelButton: "Cancel",' . "\r\n" . '                    content: "';
goto label1234;

label251:

echo '        ' . "\r\n\t\t" . 'var rClearing = false;' . "\r\n\r\n" . '        function openImage(elem) {' . "\r\n\t\t\t" . 'rPath = $(elem).data("src");' . "\r\n\t\t\t" . 'if (rPath) {' . "\r\n" . '                $.magnificPopup.open({' . "\r\n" . '                    items: {' . "\r\n" . '                        src: \'./resize.php?maxw=768&maxh=768&url=\' + rPath,' . "\r\n" . '                        type: \'image\'' . "\r\n" . '                    }' . "\r\n" . '                });' . "\r\n\t\t\t" . '}' . "\r\n\t\t" . '}' . "\r\n" . '        function api(rID, rType, rConfirm=false) {' . "\r\n" . '            if ((rType == "purge") && (!rConfirm)) {' . "\r\n" . '                new jBox("Confirm", {' . "\r\n" . '                    confirmButton: "Kill",' . "\r\n" . '                    cancelButton: "Cancel",' . "\r\n" . '                    content: "Are you sure you want to kill all connections to this station? This will include any connections from your subresellers too.",' . "\r\n" . '                    confirm: function () {' . "\r\n" . '                        api(rID, rType, true);' . "\r\n" . '                    }' . "\r\n" . '                }).open();' . "\r\n\t\t\t" . '} else {' . "\r\n" . '                rConfirm = true;' . "\r\n" . '            }' . "\r\n" . '            if (rConfirm) {' . "\r\n" . '                $.getJSON("./api?action=connections&sub=" + rType + "&stream_id=" + rID, function(data) {' . "\r\n" . '                    if (data.result == true) {' . "\r\n" . '                        if (rType == "purge") {' . "\r\n" . '                            $.toast("All connections have been killed.");' . "\r\n" . '                        }' . "\r\n" . '                        refreshTable(); setTimeout(refreshTable, 5000);' . "\r\n" . '                    } else {' . "\r\n" . '                        $.toast("An error occured while processing your request.");' . "\r\n" . '                    }' . "\r\n" . '                }).fail(function() {' . "\r\n" . '                    $.toast("An error occured while processing your request.");' . "\r\n" . '                });' . "\r\n" . '            }' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function refreshTable() {' . "\r\n\t\t\t" . '$("#datatable-streampage").DataTable().ajax.reload( null, false );' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function getCategory() {' . "\r\n\t\t\t" . 'return $("#station_category_id").val();' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function clearFilters() {' . "\r\n\t\t\t" . 'window.rClearing = true;' . "\r\n\t\t\t" . '$("#station_search").val("").trigger(\'change\');' . "\r\n\t\t\t" . '$(\'#station_category_id\').val("").trigger(\'change\');' . "\r\n\t\t\t" . '$(\'#station_show_entries\').val("';
echo intval($f1dcaed925076e67['default_entries']) ?: 10;
echo '").trigger(\'change\');' . "\r\n\t\t\t" . 'window.rClearing = false;' . "\r\n\t\t\t" . '$(\'#datatable-streampage\').DataTable().search($("#station_search").val());' . "\r\n\t\t\t" . '$(\'#datatable-streampage\').DataTable().page.len($(\'#station_show_entries\').val());' . "\r\n\t\t\t" . '$("#datatable-streampage").DataTable().page(0).draw(\'page\');' . "\r\n\t\t\t" . '$("#datatable-streampage").DataTable().ajax.reload( null, false );' . "\r\n" . '            delParams(["search", "category", "page", "entries"]);' . "\r\n\t\t\t" . 'checkClear();' . "\r\n\t\t" . '}' . "\r\n" . '        function checkClear() {' . "\r\n\t\t\t" . 'if (!hasParams(["search", "category"])) {' . "\r\n\t\t\t\t" . '$("#clearFilters").prop("disabled", true);' . "\r\n\t\t\t" . '} else {' . "\r\n\t\t\t\t" . '$("#clearFilters").prop("disabled", false);' . "\r\n\t\t\t" . '}' . "\r\n\t\t" . '}' . "\r\n" . '        var rSearch;' . "\r\n\t\t" . '$(document).ready(function() {' . "\r\n\t\t\t" . '$(\'select\').select2({width: \'100%\'});' . "\r\n\t\t\t" . 'var rPage = getParam("page");' . "\r\n" . '            if (!rPage) { rPage = 1; }' . "\r\n" . '            var rEntries = getParam("entries");' . "\r\n" . '            if (!rEntries) { rEntries = ';
echo intval($f1dcaed925076e67['default_entries']);
goto label170;

label266:

echo '            getPackage();' . "\r\n" . '            $("form").submit(function(e){' . "\r\n" . '                e.preventDefault();' . "\r\n\t\t\t\t" . '$("#allowed_ua option").prop(\'selected\', true);' . "\r\n\t\t\t\t" . '$("#allowed_ips option").prop(\'selected\', true);' . "\r\n" . '                $(\':input[type="submit"]\').prop(\'disabled\', true);' . "\r\n" . '                submitForm(window.rCurrentPage, new FormData($("form")[0]));' . "\r\n\t\t\t" . '});' . "\r\n\t\t" . '});' . "\r\n" . '        ' . "\r\n\t\t";

label267:

goto label514;

label268:

echo '        ' . "\r\n\t\t" . 'function api(rID, rType, rConfirm=false) {' . "\r\n" . '            if ((rType == "delete") && (!rConfirm)) {' . "\r\n" . '                new jBox("Confirm", {' . "\r\n" . '                    confirmButton: "Delete",' . "\r\n" . '                    cancelButton: "Cancel",' . "\r\n" . '                    content: "Are you sure you want to delete this ticket?",' . "\r\n" . '                    confirm: function () {' . "\r\n" . '                        api(rID, rType, true);' . "\r\n" . '                    }' . "\r\n" . '                }).open();' . "\r\n\t\t\t" . '} else {' . "\r\n" . '                rConfirm = true;' . "\r\n" . '            }' . "\r\n" . '            if (rConfirm) {' . "\r\n" . '                $.getJSON("./api?action=ticket&sub=" + rType + "&ticket_id=" + rID, function(data) {' . "\r\n" . '                    if (data.result == true) {' . "\r\n" . '                        reloadPage();' . "\r\n" . '                    } else {' . "\r\n" . '                        $.toast("An error occured while processing your request.");' . "\r\n" . '                    }' . "\r\n" . '                }).fail(function() {' . "\r\n" . '                    $.toast("An error occured while processing your request.");' . "\r\n" . '                });' . "\r\n" . '            }' . "\r\n\t\t" . '}' . "\r\n\t\t" . '$(document).ready(function() {' . "\r\n\t\t\t" . '$("#tickets-table").DataTable({' . "\r\n\t\t\t\t" . 'language: {' . "\r\n\t\t\t\t\t" . 'paginate: {' . "\r\n\t\t\t\t\t\t" . 'previous: "<i class=\'mdi mdi-chevron-left\'>",' . "\r\n\t\t\t\t\t\t" . 'next: "<i class=\'mdi mdi-chevron-right\'>"' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'drawCallback: function() {' . "\r\n" . '                    bindHref(); refreshTooltips();' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'order: [[ 0, "desc" ]]' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$("#tickets-table").css("width", "100%");' . "\r\n\t\t" . '});' . "\r\n" . '        ' . "\r\n\t\t";
goto label514;

label270:

echo "\t\t\t\t" . 'order: [[ ';
echo isset(XUI::$rRequest['order']) ? intval(XUI::$rRequest['order']) : 2;
echo ', "';
echo in_array(strtolower(XUI::$rRequest['dir']), ['asc', 'desc']) ? strtolower(XUI::$rRequest['dir']) : 'asc';
goto label1680;

label304:

echo '        <footer class="footer">' . "\r\n" . '            ';

if ($Ebb0b63f7c597ba4) {
	goto label308;
}

echo '<a href="#" class="scrollToTop"><button type="button" class="btn btn-success waves-effect waves-light"><i class="fas fa-caret-up"></i></button></a>';

label308:

echo '            <div class="container-fluid">' . "\r\n" . '                <div class="row">' . "\r\n" . '                    <div class="col-md-12 copyright text-center">';
goto label1468;

label310:

$Df5cd7b5dc4cc10c = json_decode($F5ba2106d5227309['bouquet'], true);
$f9eeeff050988ba5 = false;

label317:

foreach ($Df5cd7b5dc4cc10c as $b5fd3e3f0096d7f4) {
	goto label345;

	label321:

	echo ', \'';
	echo str_replace('\'', '\\\'', $edc2e948fe0884ca['bouquet_name']);
	echo '\', ';
	echo count(json_decode($edc2e948fe0884ca['bouquet_channels'], true));
	echo ', ';
	goto label364;

	label342:

	echo ']);' . "\r\n\t\t\t\t\t";

	label343:

	goto label414;

	label345:

	$edc2e948fe0884ca = b47fb5320E43f112($b5fd3e3f0096d7f4);

	if (!(0 < strlen($b5fd3e3f0096d7f4))) {
		goto label343;
	}

	echo "\t\t\t\t\t" . 'rTable.row.add([';

	if ($f9eeeff050988ba5) {
		goto label409;
	}

	echo $b5fd3e3f0096d7f4;
	goto label407;

	label364:

	echo count(json_decode($edc2e948fe0884ca['bouquet_movies'], true));
	echo ', ';
	echo count(json_decode($edc2e948fe0884ca['bouquet_series'], true));
	echo ', ';
	echo count(json_decode($edc2e948fe0884ca['bouquet_radios'], true));
	goto label342;

	label395:

	if (!in_array($b5fd3e3f0096d7f4, $fac66c09488bc278)) {
		goto label404;
	}

	echo 'checked';

	label404:

	echo '></input>"';

	label405:

	goto label321;

	label407:

	goto label405;

	label409:

	echo '"<input class=\'big_checkbox\' type=\'checkbox\' name=\'bouquets_selected[]\' value=\'';
	echo $b5fd3e3f0096d7f4;
	echo '\' ';
	goto label395;

	label414:
}

goto label694;

label417:

goto label419;

label418:

echo '        ' . "\r\n" . '        function generateCode() {' . "\r\n\t\t\t" . 'var result           = \'\';' . "\r\n\t\t\t" . 'var characters       = \'ABCDEF0123456789\';' . "\r\n\t\t\t" . 'var charactersLength = characters.length;' . "\r\n\t\t\t" . 'for ( var i = 0; i < 32; i++ ) {' . "\r\n\t\t\t\t" . 'result += characters.charAt(Math.floor(Math.random() * charactersLength));' . "\r\n\t\t\t" . '}' . "\r\n\t\t\t" . '$("#api_key").val(result);' . "\r\n\t\t" . '}' . "\r\n" . '        function clearCode() {' . "\r\n" . '            $("#api_key").val("");' . "\r\n" . '        }' . "\r\n\t\t" . '$(document).ready(function() {' . "\r\n\t\t\t" . '$(\'select\').select2({width: \'100%\'});' . "\r\n" . '            $("form").submit(function(e){' . "\r\n" . '                e.preventDefault();' . "\r\n" . '                $(\':input[type="submit"]\').prop(\'disabled\', true);' . "\r\n" . '                submitForm(window.rCurrentPage, new FormData($("form")[0]));' . "\r\n" . '            });' . "\r\n\t\t" . '});' . "\r\n" . '        ' . "\r\n\t\t";

label419:

goto label59;
goto label1042;

label421:

echo '        function navigate(rPage) {' . "\r\n" . '            window.location.href = rPage;' . "\r\n" . '        }' . "\r\n" . '        function reloadPage() {' . "\r\n" . '            location.reload();' . "\r\n" . '        }' . "\r\n" . '        ';
goto label424;

label423:

echo '        function reloadMenu() {' . "\r\n" . '            $(".navigation-menu a").each(function() {' . "\r\n" . '                ($(this).removeClass("active"), $(this).parent().removeClass("active"), $(this).parent().parent().removeClass("in"), $(this).parent().parent().prev().removeClass("active"), $(this).parent().parent().parent().removeClass("active"), $(this).parent().parent().parent().parent().removeClass("in"), $(this).parent().parent().parent().parent().parent().removeClass("active"));' . "\r\n" . '            });' . "\r\n" . '            $(".navigation-menu a").each(function() {' . "\r\n" . '                var rURL = window.location.href.split(/[?#]/)[0];' . "\r\n" . '                if (this.href == rURL) {' . "\r\n" . '                    ($(this).addClass("active"), $(this).parent().addClass("active"), $(this).parent().parent().addClass("in"), $(this).parent().parent().prev().addClass("active"), $(this).parent().parent().parent().addClass("active"), $(this).parent().parent().parent().parent().addClass("in"), $(this).parent().parent().parent().parent().parent().addClass("active"));' . "\r\n" . '                }' . "\r\n" . '            });' . "\r\n" . '            setTimeout(fadeRipple, 350);' . "\r\n" . '        }' . "\r\n" . '        function fadeRipple() {' . "\r\n" . '            $(".waves-ripple").attr("style", "");' . "\r\n" . '        }' . "\r\n" . '        function resetKnobs() {' . "\r\n" . '            $(\'[data-plugin="knob"]\').each(function(t, i) {' . "\r\n" . '                $(this).knob({' . "\r\n" . '                    \'format\' : function (value) {' . "\r\n" . '                        return value + \'%\';' . "\r\n" . '                    }' . "\r\n" . '                })' . "\r\n" . '            });' . "\r\n" . '            $(\'[data-plugin="peity-line"]\').each(function(t, i) {' . "\r\n" . '                $(this).peity("line", $(this).data());' . "\r\n" . '            });' . "\r\n" . '        }' . "\r\n" . '        function killTimeouts() {' . "\r\n" . '            var highestTimeoutId = setTimeout(";");' . "\r\n" . '            for (var i = 0 ; i < highestTimeoutId ; i++) {' . "\r\n" . '                clearTimeout(i); ' . "\r\n" . '            }' . "\r\n" . '        }' . "\r\n" . '        function navigate(rURL) {' . "\r\n" . '            if ((window.rCurrentPage) && (rURL == window.rCurrentPage + "#")) {' . "\r\n" . '                return false;' . "\r\n" . '            }' . "\r\n\t\t\t" . 'if (rURL.split("#")[0].split("?")[0] == "epg_view") {' . "\r\n\t\t\t\t" . 'window.location.href = rURL;' . "\r\n\t\t\t\t" . 'window.location.reload();' . "\r\n\t\t\t\t" . 'return;' . "\r\n\t\t\t" . '}' . "\r\n" . '            $(".wrapper").off().find("*").off();' . "\r\n" . '            $(".modal").off().find("*").off();' . "\r\n" . '            $(".submenu").hide();' . "\r\n" . '            window.rCurrentPage = rURL.split("/").reverse()[0].split("?")[0].split(".")[0];' . "\r\n" . '            setURL(rURL, false);' . "\r\n" . '            killTimeouts();' . "\r\n" . '            reloadMenu();' . "\r\n" . '            $.magnificPopup.close();' . "\r\n" . '            $(\'.modal\').modal(\'hide\');' . "\r\n" . '            $(".modal-backdrop").hide();' . "\r\n" . '            $(".wrapper").fadeOut();' . "\r\n" . '            $("#status").fadeIn();' . "\r\n" . '            $(".jq-toast-single").remove();' . "\r\n" . '            $(\'html, body\').animate({scrollTop : 0},400);' . "\r\n" . '            $("#header_stats").show();' . "\r\n" . '            $.get(rURL, function(rData) {' . "\r\n" . '                if ($(rData).filter("title").data("id") == "login") {' . "\r\n" . '                    window.location.href = \'./login?referrer=\' + encodeURIComponent(location.href.split("/").slice(-1)[0]);' . "\r\n" . '                }' . "\r\n" . '                var rTables = $.fn.dataTable.fnTables(true);' . "\r\n" . '                $(rTables).each(function () {' . "\r\n" . '                    $(this).DataTable().destroy(true);' . "\r\n" . '                });' . "\r\n" . '                document.title = $(rData).filter("title").text();' . "\r\n" . '                $(".wrapper").replaceWith($(rData).filter(".wrapper"));' . "\r\n" . '                $("#scripts").replaceWith($(rData).filter("#scripts"));' . "\r\n" . '                $("#topnav-custom").replaceWith($(rData).filter("#topnav").find("#topnav-custom"));' . "\r\n" . '                jQuery.ready();' . "\r\n" . '                resetKnobs();' . "\r\n" . '                bindHref();' . "\r\n" . '                refreshTooltips();' . "\r\n" . '                if ($(".nav")) {' . "\r\n" . '                    $(".nav:first").find(".nav-link:first").trigger("click");' . "\r\n" . '                }' . "\r\n" . '                $(".wrapper").fadeIn();' . "\r\n" . '                $("#status").fadeOut();' . "\r\n" . '            }).fail(function() {' . "\r\n" . '                window.location.href = rURL;' . "\r\n" . '            });' . "\r\n" . '        }' . "\r\n" . '        function reloadPage() {' . "\r\n" . '            navigate(window.location.href);' . "\r\n" . '        }' . "\r\n" . '        ';

label424:

goto label1100;

label425:

goto label1223;

label426:

echo '        var rUserPackage = ';
echo intval($F5ba2106d5227309['package_id']) ?: 'null';
echo ';' . "\r\n" . '        var rUserBouquet = [';
goto label1206;

label436:

goto label1072;

label437:

echo "\t\t\t\t" . 'order: [[ ';
echo isset(XUI::$rRequest['order']) ? intval(XUI::$rRequest['order']) : 2;
echo ', "';
goto label1052;

label452:

goto label695;

label453:

echo '        ' . "\r\n" . '        ';

if (isset($F5ba2106d5227309)) {
	goto label426;
}

echo '        var rUserPackage = null;' . "\r\n" . '        var rUserBouquet = [];' . "\r\n" . '        ';
goto label425;

label459:

echo '; }' . "\r\n\t\t\t" . 'var rTable = $("#datatable-activity").DataTable({' . "\r\n\t\t\t\t" . 'language: {' . "\r\n\t\t\t\t\t" . 'paginate: {' . "\r\n\t\t\t\t\t\t" . 'previous: "<i class=\'mdi mdi-chevron-left\'>",' . "\r\n\t\t\t\t\t\t" . 'next: "<i class=\'mdi mdi-chevron-right\'>"' . "\r\n\t\t\t\t\t" . '},' . "\r\n\t\t\t\t\t" . 'infoFiltered: ""' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'drawCallback: function() {' . "\r\t\t\t\t\t" . 'bindHref(); refreshTooltips();' . "\r\n" . '                    if ($("#datatable-activity").DataTable().page.info().page > 0) {' . "\r\n" . '                        setParam("page", $("#datatable-activity").DataTable().page.info().page+1);' . "\r\n" . '                    } else {' . "\r\n" . '                        delParam("page");' . "\r\n" . '                    }' . "\r\n" . '                    var rOrder = $("#datatable-activity").DataTable().order()[0];' . "\r\n" . '                    setParam("order", rOrder[0]); setParam("dir", rOrder[1]);' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'responsive: false,' . "\r\n\t\t\t\t" . 'processing: true,' . "\r\n\t\t\t\t" . 'serverSide: true,' . "\r\n" . '                searchDelay: 250,' . "\r\n\t\t\t\t" . 'ajax: {' . "\r\n\t\t\t\t\t" . 'url: "./table",' . "\r\n\t\t\t\t\t" . '"data": function(d) {' . "\r\n\t\t\t\t\t\t" . 'd.id = "line_activity";' . "\r\n\t\t\t\t\t\t" . 'd.range = getRange();' . "\r\n\t\t\t\t\t\t" . 'd.line = getLine();' . "\r\n\t\t\t\t\t\t" . 'd.stream = getStream();' . "\r\n\t\t\t\t\t\t" . 'd.user = getUser();' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'columnDefs: [' . "\r\n\t\t\t\t\t" . '{"className": "dt-center", "targets": [4,5,6,7,8]},' . "\r\n" . '                    {"className": "ellipsis", "targets": [2]}' . "\r\n\t\t\t\t" . '],' . "\r\n" . '                ';

if (!$Ebb0b63f7c597ba4) {
	goto label464;
}

echo 'scrollX: true,';

label464:

echo "\t\t\t\t" . 'order: [[ ';
goto label1522;

label466:

echo isset(XUI::$rRequest['order']) ? intval(XUI::$rRequest['order']) : 2;
echo ', "';
echo in_array(strtolower(XUI::$rRequest['dir']), ['asc', 'desc']) ? strtolower(XUI::$rRequest['dir']) : 'asc';
echo '" ]],' . "\r\n\t\t\t\t";

label499:

goto label1243;

label500:

$Df5cd7b5dc4cc10c = NULL;
goto label513;

label502:

$Df5cd7b5dc4cc10c = json_decode(fDdf8Da6Ab3Fe47B($F5ba2106d5227309['package_id'])['bouquets'], true);

label513:

goto label227;

label514:

goto label1073;

label515:

echo '        ' . "\r\n\t\t" . 'var rClearing = false;' . "\r\n\r\n" . '        function openImage(elem) {' . "\r\n" . '            var rImage = $(elem).data("src");' . "\r\n" . '            if (rImage) {' . "\r\n" . '                $.magnificPopup.open({' . "\r\n" . '                    items: {' . "\r\n" . '                        src: \'./resize.php?maxw=768&maxh=768&url=\' + rImage,' . "\r\n" . '                        type: \'image\'' . "\r\n" . '                    }' . "\r\n" . '                });' . "\r\n" . '            }' . "\r\n" . '        }' . "\r\n" . '        function api(rID, rType, rConfirm=false) {' . "\r\n" . '            if ((rType == "purge") && (!rConfirm)) {' . "\r\n" . '                new jBox("Confirm", {' . "\r\n" . '                    confirmButton: "Kill",' . "\r\n" . '                    cancelButton: "Cancel",' . "\r\n" . '                    content: "Are you sure you want to kill all connections to this channel? This will include any connections from your subresellers too.",' . "\r\n" . '                    confirm: function () {' . "\r\n" . '                        api(rID, rType, true);' . "\r\n" . '                    }' . "\r\n" . '                }).open();' . "\r\n\t\t\t" . '} else {' . "\r\n" . '                rConfirm = true;' . "\r\n" . '            }' . "\r\n" . '            if (rConfirm) {' . "\r\n" . '                $.getJSON("./api?action=connections&sub=" + rType + "&stream_id=" + rID, function(data) {' . "\r\n" . '                    if (data.result == true) {' . "\r\n" . '                        if (rType == "purge") {' . "\r\n" . '                            $.toast("All connections have been killed.");' . "\r\n" . '                        }' . "\r\n" . '                        refreshTable(); setTimeout(refreshTable, 5000);' . "\r\n" . '                    } else {' . "\r\n" . '                        $.toast("An error occured while processing your request.");' . "\r\n" . '                    }' . "\r\n" . '                }).fail(function() {' . "\r\n" . '                    $.toast("An error occured while processing your request.");' . "\r\n" . '                });' . "\r\n" . '            }' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function getCategory() {' . "\r\n\t\t\t" . 'return $("#stream_category_id").val();' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function clearFilters() {' . "\r\n\t\t\t" . 'window.rClearing = true;' . "\r\n\t\t\t" . '$("#stream_search").val("").trigger(\'change\');' . "\r\n\t\t\t" . '$(\'#stream_category_id\').val("").trigger(\'change\');' . "\r\n\t\t\t" . '$(\'#stream_show_entries\').val("';
echo intval($f1dcaed925076e67['default_entries']) ?: 10;
goto label1561;

label524:

echo "\t\t\t" . '$("#act_range").val("';
echo str_replace('"', '\\"', htmlspecialchars(XUI::$rRequest['range']));
echo '").trigger(\'change\');' . "\r\n\t\t\t";

label537:

echo "\t\t\t" . '$(\'#act_search\').keyup(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n" . '                    if ($("#act_search").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("search", $("#act_search").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("search");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'rTable.search($(this).val()).draw();' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#act_show_entries\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n" . '                    if ($("#live_show_entries").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("entries", $("#live_show_entries").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("entries");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'rTable.page.len($(this).val()).draw();' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#act_line\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n" . '                    if ($("#act_line").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("line", $("#act_line").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("line");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'rTable.ajax.reload( null, false );' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n" . '            $(\'#act_stream\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n" . '                    if ($("#act_stream").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("stream", $("#act_stream").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("stream");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'rTable.ajax.reload( null, false );' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n" . '            $(\'#act_user\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n" . '                    if ($("#act_user").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("user", $("#act_user").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("user");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'rTable.ajax.reload( null, false );' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n" . '            if ($(\'#act_search\').val()) {' . "\r\n\t\t\t\t" . 'rTable.search($(\'#act_search\').val()).draw();' . "\r\n\t\t\t" . '}' . "\r\n" . '            checkClear();' . "\r\n\t\t" . '});' . "\r\n" . '        ' . "\r\n\t\t";
goto label760;

label539:

echo isset(XUI::$rRequest['order']) ? intval(XUI::$rRequest['order']) : 0;
echo ', "';
echo in_array(strtolower(XUI::$rRequest['dir']), ['asc', 'desc']) ? strtolower(XUI::$rRequest['dir']) : 'desc';
echo '" ]],' . "\r\n\t\t\t\t" . 'pageLength: parseInt(rEntries),' . "\r\n\t\t\t\t" . 'lengthMenu: [10, 25, 50, 250, 500, 1000],' . "\r\n" . '                displayStart: (parseInt(rPage)-1) * parseInt(rEntries)' . "\r\n\t\t\t" . '});' . "\r\n" . '            function doSearch(rValue) {' . "\r\n" . '                clearTimeout(window.rSearch); window.rSearch = setTimeout(function(){ rTable.search(rValue).draw(); }, 500);' . "\r\n" . '            }' . "\r\n\t\t\t" . '$("#datatable-users").css("width", "100%");' . "\r\n\t\t\t" . '$(\'#e2_search\').keyup(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n\t\t\t\t\t" . 'if ($("#e2_search").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("search", $("#e2_search").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("search");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'doSearch($(this).val());' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#e2_show_entries\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n\t\t\t\t\t" . 'if ($("#e2_show_entries").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("entries", $("#e2_show_entries").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("entries");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'rTable.page.len($(this).val()).draw();' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#e2_filter\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n\t\t\t\t\t" . 'if ($("#e2_filter").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("filter", $("#e2_filter").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("filter");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'rTable.ajax.reload( null, false );' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#e2_reseller\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n\t\t\t\t\t" . 'if ($("#e2_reseller").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("owner", $("#e2_reseller").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("owner");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'rTable.ajax.reload( null, false );' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . 'if ($(\'#e2_search\').val()) {' . "\r\n\t\t\t\t" . 'rTable.search($(\'#e2_search\').val()).draw();' . "\r\n\t\t\t" . '}' . "\r\n\t\t\t" . 'checkClear();' . "\r\n\t\t" . '});' . "\r\n" . '        ' . "\r\n" . '        ';

label572:

goto label417;

label573:

echo isset(XUI::$rRequest['order']) ? intval(XUI::$rRequest['order']) : 4;
echo ', "';
echo in_array(strtolower(XUI::$rRequest['dir']), ['asc', 'desc']) ? strtolower(XUI::$rRequest['dir']) : 'desc';
echo '" ]],' . "\r\n\t\t\t\t";
goto label1681;
goto label270;

label608:

if (XUI::$rSettings['redis_handler']) {
	goto label614;
}

echo "\t\t\t\t\t" . '{"orderable": false, "targets": [1,5]},' . "\r\n\t\t\t\t\t";
goto label9;

label614:

echo "\t\t\t\t\t" . '{"orderable": false, "targets": [1,4,5]},' . "\r\n\t\t\t\t\t";
goto label9;

label616:

echo "\t\t\t\t\t" . '{"visible": false, "targets": [1]}' . "\r\n\t\t\t\t" . '],' . "\r\n" . '                ';

if (!$Ebb0b63f7c597ba4) {
	goto label621;
}

echo 'scrollX: true,';

label621:

echo "\t\t\t\t" . 'order: [[ ';
goto label539;

label623:

echo '            $(".navigation-menu li").mouseenter(function() {' . "\r\n" . '                $(this).find(".submenu").show();' . "\r\n" . '            });' . "\r\n" . '            delParam("status");' . "\r\n" . '            $(window).on("popstate", function () {' . "\r\n" . '                if (window.rRealURL) {' . "\r\n" . '                    if (window.rRealURL.split("/").reverse()[0].split("?")[0].split(".")[0] != window.location.href.split("/").reverse()[0].split("?")[0].split(".")[0]) {' . "\r\n" . '                        navigate(window.location.href.split("/").reverse()[0]);' . "\r\n" . '                    }' . "\r\n" . '                }' . "\r\n" . '            });' . "\r\n" . '            ';

label624:

echo "\t\t" . '});' . "\r\n" . '        ' . "\r\n\t\t";

if ($E8870c6f95210f68 == 'credit_logs') {
	goto label669;
}

if ($E8870c6f95210f68 == 'dashboard') {
	goto label1042;
}

goto label801;

label632:

echo isset(XUI::$rRequest['order']) ? intval(XUI::$rRequest['order']) : 0;
echo ', "';
echo in_array(strtolower(XUI::$rRequest['dir']), ['asc', 'desc']) ? strtolower(XUI::$rRequest['dir']) : 'desc';
echo '" ]],' . "\r\n\t\t\t\t" . 'pageLength: parseInt(rEntries),' . "\r\n\t\t\t\t" . 'lengthMenu: [10, 25, 50, 250, 500, 1000],' . "\r\n" . '                displayStart: (parseInt(rPage)-1) * parseInt(rEntries)' . "\r\n\t\t\t" . '});' . "\r\n" . '            function doSearch(rValue) {' . "\r\n" . '                clearTimeout(window.rSearch); window.rSearch = setTimeout(function(){ rTable.search(rValue).draw(); }, 500);' . "\r\n" . '            }' . "\r\n\t\t\t" . '$("#datatable-users").css("width", "100%");' . "\r\n\t\t\t" . '$(\'#mag_search\').keyup(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n\t\t\t\t\t" . 'if ($("#mag_search").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("search", $("#mag_search").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("search");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'doSearch($(this).val());' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#mag_show_entries\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n\t\t\t\t\t" . 'if ($("#mag_show_entries").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("entries", $("#mag_show_entries").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("entries");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'rTable.page.len($(this).val()).draw();' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#mag_filter\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n\t\t\t\t\t" . 'if ($("#mag_filter").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("filter", $("#mag_filter").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("filter");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'rTable.ajax.reload( null, false );' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#mag_reseller\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n\t\t\t\t\t" . 'if ($("#mag_reseller").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("owner", $("#mag_reseller").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("owner");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'rTable.ajax.reload( null, false );' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$("#message_type").change(function(){' . "\r\n\t\t\t\t" . 'if ($(this).val() == "send_msg") {' . "\r\n\t\t\t\t\t" . '$("#send_msg_form").show();' . "\r\n\t\t\t\t\t" . '$("#play_channel_form").hide();' . "\r\n\t\t\t\t\t" . '$("#message_submit").attr("disabled", false);' . "\r\n\t\t\t\t" . '} else if ($(this).val() == "play_channel") {' . "\r\n\t\t\t\t\t" . '$("#send_msg_form").hide();' . "\r\n\t\t\t\t\t" . '$("#play_channel_form").show();' . "\r\n\t\t\t\t\t" . '$("#message_submit").attr("disabled", false);' . "\r\n\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t" . '$("#send_msg_form").hide();' . "\r\n\t\t\t\t\t" . '$("#play_channel_form").hide();' . "\r\n\t\t\t\t\t" . 'if ($(this).val() == "") {' . "\r\n\t\t\t\t\t\t" . '$("#message_submit").attr("disabled", true);' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . '$("#message_submit").attr("disabled", false);' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#selected_channel\').select2({' . "\r\n\t\t\t" . '  ajax: {' . "\r\n\t\t\t\t" . 'url: \'./api\',' . "\r\n\t\t\t\t" . 'dataType: \'json\',' . "\r\n\t\t\t\t" . 'data: function (params) {' . "\r\n\t\t\t\t" . '  return {' . "\r\n\t\t\t\t\t" . 'search: params.term,' . "\r\n\t\t\t\t\t" . 'action: \'streamlist\',' . "\r\n\t\t\t\t\t" . 'page: params.page' . "\r\n\t\t\t\t" . '  };' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'processResults: function (data, params) {' . "\r\n\t\t\t\t" . '  params.page = params.page || 1;' . "\r\n\t\t\t\t" . '  return {' . "\r\n\t\t\t\t\t" . 'results: data.items,' . "\r\n\t\t\t\t\t" . 'pagination: {' . "\r\n\t\t\t\t\t\t" . 'more: (params.page * 100) < data.total_count' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '  };' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'cache: true' . "\r\n\t\t\t" . '  },' . "\r\n\t\t\t" . '  placeholder: \'';
echo $_['start_typing'];
goto label1628;

label668:

goto label1594;

label669:

echo '        ' . "\r\n\t\t" . 'function getReseller() {' . "\r\n\t\t\t" . 'return $("#reseller").val();' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function getRange() {' . "\r\n\t\t\t" . 'return $("#range").val();' . "\r\n\t\t" . '}' . "\r\n\r\n\t\t" . '$(document).ready(function() {' . "\r\n\t\t\t" . '$(\'select\').select2({width: \'100%\'});' . "\r\n\t\t\t" . '$(\'#range\').daterangepicker({' . "\r\n\t\t\t\t" . 'singleDatePicker: false,' . "\r\n\t\t\t\t" . 'showDropdowns: true,' . "\r\n\t\t\t\t" . 'locale: {' . "\r\n\t\t\t\t\t" . 'format: \'YYYY-MM-DD\'' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'autoUpdateInput: false' . "\r\n\t\t\t" . '}).val("");' . "\r\n\t\t\t" . '$(\'#range\').on(\'apply.daterangepicker\', function(ev, picker) {' . "\r\n\t\t\t\t" . '$(this).val(picker.startDate.format(\'YYYY-MM-DD\') + \' - \' + picker.endDate.format(\'YYYY-MM-DD\'));' . "\r\n\t\t\t\t" . '$("#datatable-activity").DataTable().ajax.reload( null, false );' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#range\').on(\'cancel.daterangepicker\', function(ev, picker) {' . "\r\n\t\t\t\t" . '$(this).val(\'\');' . "\r\n\t\t\t\t" . '$("#datatable-activity").DataTable().ajax.reload( null, false );' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#range\').on(\'change\', function() {' . "\r\n\t\t\t\t" . '$("#datatable-activity").DataTable().ajax.reload( null, false );' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$("#datatable-activity").DataTable({' . "\r\n\t\t\t\t" . 'language: {' . "\r\n\t\t\t\t\t" . 'paginate: {' . "\r\n\t\t\t\t\t\t" . 'previous: "<i class=\'mdi mdi-chevron-left\'>",' . "\r\n\t\t\t\t\t\t" . 'next: "<i class=\'mdi mdi-chevron-right\'>"' . "\r\n\t\t\t\t\t" . '},' . "\r\n\t\t\t\t\t" . 'infoFiltered: ""' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'drawCallback: function() {' . "\r\r\n\t\t\t\t\t" . 'bindHref(); refreshTooltips();' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'responsive: false,' . "\r\n\t\t\t\t" . 'processing: true,' . "\r\n\t\t\t\t" . 'serverSide: true,' . "\r\n\t\t\t\t" . 'ajax: {' . "\r\n\t\t\t\t\t" . 'url: "./table",' . "\r\n\t\t\t\t\t" . '"data": function(d) {' . "\r\n\t\t\t\t\t\t" . 'd.id = "credits_log",' . "\r\n\t\t\t\t\t\t" . 'd.range = getRange(),' . "\r\n\t\t\t\t\t\t" . 'd.reseller = getReseller()' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'columnDefs: [' . "\r\n\t\t\t\t\t" . '{"className": "dt-center", "targets": [0,3,5]}' . "\r\n\t\t\t\t" . '],' . "\r\n\t\t\t\t" . '"order": [[ 0, "desc" ]],' . "\r\n\t\t\t\t" . 'pageLength: ';
echo intval($f1dcaed925076e67['default_entries']) ?: 10;
echo "\t\t\t" . '});' . "\r\n\t\t\t" . '$("#datatable-activity").css("width", "100%");' . "\r\n\t\t\t" . '$(\'#log_search\').keyup(function(){' . "\r\n\t\t\t\t" . '$(\'#datatable-activity\').DataTable().search($(this).val()).draw();' . "\r\n\t\t\t" . '})' . "\r\n\t\t\t" . '$(\'#show_entries\').change(function(){' . "\r\n\t\t\t\t" . '$(\'#datatable-activity\').DataTable().page.len($(this).val()).draw();' . "\r\n\t\t\t" . '})' . "\r\n\t\t\t" . '$(\'#reseller\').change(function(){' . "\r\n\t\t\t\t" . '$("#datatable-activity").DataTable().ajax.reload( null, false );' . "\r\n\t\t\t" . '})' . "\r\n\t\t" . '});' . "\r\n" . '        ' . "\r\n\t\t";
goto label1594;

label679:

echo '        ' . "\r\n\t\t" . 'var rClearing = false;' . "\r\n\r\n" . '        function addCredits(rID, rUsername, rCredits, rIndirect=false) {' . "\r\n\t\t\t" . '$(\'.creditsModal\').data(\'id\', rID);' . "\r\n" . '            $(\'.creditsModal\').data(\'credits\', rCredits);' . "\r\n" . '            $("#credits_reason").val("");' . "\r\n" . '            $("#credits").val("");' . "\r\n" . '            if (rIndirect) {' . "\r\n" . '                $("#indirect").show();' . "\r\n" . '            } else {' . "\r\n" . '                $("#indirect").hide();' . "\r\n" . '            }' . "\r\n" . '            updateCredits();' . "\r\n" . '            $("#creditsModal").html("User: " + rUsername + " - Credits: " + rCredits.toLocaleString());' . "\r\n" . '            $(\'.creditsModal\').modal(\'show\');' . "\r\n" . '        }' . "\r\n" . '        function updateCredits() {' . "\r\n" . '            rCredits = $("#credits").val();' . "\r\n" . '            if (!Number.isInteger(parseInt(rCredits))) {' . "\r\n" . '                rCredits = 0;' . "\r\n" . '            }' . "\r\n" . '            $("#cost_credits").html(rCredits);' . "\r\n" . '            $("#remaining_credits").html(($("#total_credits").data("credits") - rCredits).toLocaleString());' . "\r\n" . '            if ((parseInt(rCredits) != 0) && (parseInt($("#total_credits").data("credits")) - parseInt(rCredits) >= 0) && (parseInt($(\'.creditsModal\').data(\'credits\')) + parseInt(rCredits) >= 0)) {' . "\r\n" . '                $("#credits_submit").prop("disabled", false);' . "\r\n" . '            } else {' . "\r\n" . '                $("#credits_submit").prop("disabled", true);' . "\r\n" . '            }' . "\r\n" . '        }' . "\r\n" . '        function submitCredits() {' . "\r\n" . '            var rID = $(\'.creditsModal\').data(\'id\');' . "\r\n" . '            var rReason = $("#credits_reason").val();' . "\r\n" . '            var rCredits = $("#credits").val();' . "\r\n" . '            $.getJSON("./api?action=adjust_credits&id=" + encodeURIComponent(rID) + "&reason=" + encodeURIComponent(rReason) + "&credits=" + encodeURIComponent(rCredits), function(data) {' . "\r\n" . '                if (data.result === true) {' . "\r\n" . '                    $.toast("Credits have been adjusted.");' . "\r\n" . '                    refreshCredits();' . "\r\n" . '                    refreshTable();' . "\r\n" . '                } else {' . "\r\n" . '                    $.toast("Credits could not be adjusted. Please ensure you have enough credits for this action.");' . "\r\n" . '                }' . "\r\n" . '            });' . "\r\n" . '            $(\'.creditsModal\').modal(\'hide\');' . "\r\n" . '        }' . "\r\n\t\t" . 'function api(rID, rType, rConfirm=false) {' . "\r\n" . '            if ((rType == "delete") && (!rConfirm)) {' . "\r\n" . '                new jBox("Confirm", {' . "\r\n" . '                    confirmButton: "Delete",' . "\r\n" . '                    cancelButton: "Cancel",' . "\r\n" . '                    content: "Are you sure you want to delete this user?",' . "\r\n" . '                    confirm: function () {' . "\r\n" . '                        api(rID, rType, true);' . "\r\n" . '                    }' . "\r\n" . '                }).open();' . "\r\n\t\t\t" . '} else {' . "\r\n" . '                rConfirm = true;' . "\r\n" . '            }' . "\r\n" . '            if (rConfirm) {' . "\r\n" . '                $.getJSON("./api?action=reg_user&sub=" + rType + "&user_id=" + rID, function(data) {' . "\r\n" . '                    if (data.result === true) {' . "\r\n" . '                        if (rType == "delete") {' . "\r\n" . '                            $.toast("User has been deleted, any credits assigned have been returned to you.");' . "\r\n" . '                            refreshCredits();' . "\r\n" . '                        } else if (rType == "enable") {' . "\r\n" . '                            $.toast("User has been enabled.");' . "\r\n" . '                        } else if (rType == "disable") {' . "\r\n" . '                            $.toast("User has been disabled.");' . "\r\n" . '                        }' . "\r\n" . '                        $("#datatable-users").DataTable().ajax.reload(null, false);' . "\r\n" . '                    } else {' . "\r\n" . '                        $.toast("An error occured while processing your request.");' . "\r\n" . '                    }' . "\r\n" . '                });' . "\r\n" . '            }' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function getFilter() {' . "\r\n\t\t\t" . 'return $("#reg_filter").val();' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function getReseller() {' . "\r\n\t\t\t" . 'return $("#reg_reseller").val();' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function clearFilters() {' . "\r\n\t\t\t" . 'window.rClearing = true;' . "\r\n\t\t\t" . '$("#reg_search").val("").trigger(\'change\');' . "\r\n\t\t\t" . '$(\'#reg_filter\').val("").trigger(\'change\');' . "\r\n\t\t\t" . '$(\'#reg_reseller\').val("").trigger(\'change\');' . "\r\n\t\t\t" . '$(\'#reg_show_entries\').val("';
echo intval($f1dcaed925076e67['default_entries']) ?: 10;
echo '").trigger(\'change\');' . "\r\n\t\t\t" . 'window.rClearing = false;' . "\r\n\t\t\t" . '$(\'#datatable-users\').DataTable().search($("#reg_search").val());' . "\r\n\t\t\t" . '$(\'#datatable-users\').DataTable().page.len($(\'#reg_show_entries\').val());' . "\r\n\t\t\t" . '$("#datatable-users").DataTable().page(0).draw(\'page\');' . "\r\n\t\t\t" . '$("#datatable-users").DataTable().ajax.reload( null, false );' . "\r\n" . '            delParams(["search", "filter", "owner", "page", "entries"]);' . "\r\n\t\t\t" . 'checkClear();' . "\r\n\t\t" . '}' . "\r\n" . '        function checkClear() {' . "\r\n\t\t\t" . 'if (!hasParams(["search", "filter", "owner"])) {' . "\r\n\t\t\t\t" . '$("#clearFilters").prop("disabled", true);' . "\r\n\t\t\t" . '} else {' . "\r\n\t\t\t\t" . '$("#clearFilters").prop("disabled", false);' . "\r\n\t\t\t" . '}' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function refreshTable() {' . "\r\n\t\t\t" . '$("#datatable-users").DataTable().ajax.reload( null, false );' . "\r\n\t\t" . '}' . "\r\n" . '        var rSearch;' . "\r\n\t\t" . '$(document).ready(function() {' . "\r\n\t\t\t" . '$(\'select\').select2({width: \'100%\'});' . "\r\n\t\t\t" . 'var rPage = getParam("page");' . "\r\n" . '            if (!rPage) { rPage = 1; }' . "\r\n" . '            var rEntries = getParam("entries");' . "\r\n" . '            if (!rEntries) { rEntries = ';
echo intval($f1dcaed925076e67['default_entries']);
goto label1621;

label694:

echo '                rTable.draw();' . "\r\n" . '            }' . "\r\n" . '        }' . "\r\n" . '        function clearISP() {' . "\r\n" . '            $("#isp_clear").val("");' . "\r\n" . '        }' . "\r\n" . '        function clearDevice() {' . "\r\n\t\t\t" . '$("#device-info input").each(function() {' . "\r\n\t\t\t\t" . 'if (!$(this).hasClass("sticky")) {' . "\r\n\t\t\t\t\t" . '$(this).val("");' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t" . '}' . "\r\n\t\t" . '$(document).ready(function() {' . "\r\n\t\t\t" . '$(\'select.select2\').select2({width: \'100%\'})' . "\r\n" . '            $("#package").change(function() {' . "\r\n" . '                getPackage();' . "\r\n" . '            });' . "\r\n" . '            $("#datatable-review").DataTable({' . "\r\n" . '                language: {' . "\r\n" . '                    paginate: {' . "\r\n" . '                        previous: "<i class=\'mdi mdi-chevron-left\'>",' . "\r\n" . '                        next: "<i class=\'mdi mdi-chevron-right\'>"' . "\r\n" . '                    }' . "\r\n" . '                },' . "\r\n" . '                drawCallback: function() {' . "\r\n" . '                    $(".dataTables_paginate > .pagination").addClass("pagination-rounded");' . "\r\n" . '                },' . "\r\n" . '                columnDefs: [' . "\r\n" . '                    {"className": "dt-center", "targets": [0,2,3,4,5]}' . "\r\n" . '                ],' . "\r\n" . '                responsive: false,' . "\r\n" . '                bInfo: false,' . "\r\n" . '                searching: false,' . "\r\n" . '                paging: false,' . "\r\n" . '                order: [[ 1, "asc" ]]' . "\r\n" . '            });' . "\r\n\t\t\t" . '$("#add_ip").click(function() {' . "\r\n\t\t\t\t" . 'if (($("#ip_field").val()) && (isValidIP($("#ip_field").val()))) {' . "\r\n\t\t\t\t\t" . 'var o = new Option($("#ip_field").val(), $("#ip_field").val());' . "\r\n\t\t\t\t\t" . '$("#allowed_ips").append(o);' . "\r\n\t\t\t\t\t" . '$("#ip_field").val("");' . "\r\n\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t" . '$.toast("Please enter a valid IP address.");' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$("#remove_ip").click(function() {' . "\r\n" . '                if ($(\'#allowed_ips option:selected\').length > 0) {' . "\r\n" . '                    $(\'#allowed_ips option:selected\').remove();' . "\r\n" . '                } else {' . "\r\n" . '                    $.toast("Please select an IP address to remove.");' . "\r\n" . '                }' . "\r\n\t\t\t" . '});' . "\r\n" . '            $("#mac").on("input", function(e) {' . "\r\n" . '                var rRegex = /([a-f0-9]{2})([a-f0-9]{2})/i, rString = e.target.value.replace(/[^a-f0-9]/ig, "");' . "\r\n" . '                while (rRegex.test(rString)) {' . "\r\n" . '                    rString = rString.replace(rRegex, \'$1\' + \':\' + \'$2\');' . "\r\n" . '                }' . "\r\n" . '                e.target.value = rString.slice(0, 17).toUpperCase();' . "\r\n" . '            });' . "\r\n" . '            getPackage();' . "\r\n" . '            $("form").submit(function(e){' . "\r\n" . '                e.preventDefault();' . "\r\n\t\t\t\t" . '$("#allowed_ips option").prop(\'selected\', true);' . "\r\n" . '                $(\':input[type="submit"]\').prop(\'disabled\', true);' . "\r\n" . '                submitForm(window.rCurrentPage, new FormData($("form")[0]));' . "\r\n\t\t\t" . '});' . "\r\n\t\t" . '});' . "\r\n\r\n\t\t";

label695:

goto label1033;

label696:

goto label1;

label697:

echo $E59d0debc75e7be8['credits'];
echo ', 0));' . "\r\n" . '                $("#exp_date").val(\'';
echo date($f1dcaed925076e67['date_format'] . ' H:i', $F5ba2106d5227309['exp_date']);
echo '\');' . "\r\n" . '                $("#package_cost").val("");' . "\r\n" . '                $("#package_duration").val("");' . "\r\n" . '                $("#package_info").hide();' . "\r\n" . '                $("#package_warning").hide();' . "\r\n" . '                $("#submit_button").val("Save");' . "\r\n" . '                ';

if ($f9eeeff050988ba5 = $db0a61ef32b89a27['allow_change_bouquets']) {
	goto label502;
}

goto label500;

label714:

if ($Ebb0b63f7c597ba4) {
	goto label717;
}

echo '            headerStats();' . "\r\n" . '            ';

label717:

echo '            bindHref(); refreshTooltips();' . "\r\n" . '            $(window).scroll(function(){' . "\r\n" . '                if ($(this).scrollTop() > 100) {' . "\r\n" . '                    $(\'.scrollToTop\').fadeIn();' . "\r\n" . '                } else {' . "\r\n" . '                    $(\'.scrollToTop\').fadeOut();' . "\r\n" . '                }' . "\r\n" . '            });' . "\r\n" . '            $(".scrollToTop").unbind("click");' . "\r\n" . '            $(\'.scrollToTop\').click(function(){' . "\r\n" . '                $(\'html, body\').animate({scrollTop : 0},800);' . "\r\n" . '                return false;' . "\r\n" . '            });' . "\r\n" . '            $(".nextb").unbind("click");' . "\r\n" . '            $(".nextb").click(function() {' . "\r\n" . '                var rPos = 0; var rActive = null;' . "\r\n" . '                $(".nav .nav-item").each(function() {' . "\r\n" . '                    if ($(this).find(".nav-link").hasClass("active")) {' . "\r\n" . '                        rActive = rPos;' . "\r\n" . '                    }' . "\r\n" . '                    if (rActive !== null && rPos > rActive && !$(this).find("a").hasClass("disabled") && $(this).is(":visible")) {' . "\r\n" . '                        $(this).find(".nav-link").trigger("click");' . "\r\n" . '                        return false;' . "\r\n" . '                    }' . "\r\n" . '                    rPos += 1;' . "\r\n" . '                });' . "\r\n" . '            });' . "\r\n" . '            $(".prevb").unbind("click");' . "\r\n" . '            $(".prevb").click(function() {' . "\r\n" . '                var rPos = 0; var rActive = null;' . "\r\n" . '                $($(".nav .nav-item").get().reverse()).each(function() {' . "\r\n" . '                    if ($(this).find(".nav-link").hasClass("active")) {' . "\r\n" . '                        rActive = rPos;' . "\r\n" . '                    }' . "\r\n" . '                    if (rActive !== null && rPos > rActive && !$(this).find("a").hasClass("disabled") && $(this).is(":visible")) {' . "\r\n" . '                        $(this).find(".nav-link").trigger("click");' . "\r\n" . '                        return false;' . "\r\n" . '                    }' . "\r\n" . '                    rPos += 1;' . "\r\n" . '                });' . "\r\n" . '            });' . "\r\n" . '            (function($) {' . "\r\n" . '                $.fn.inputFilter = function(inputFilter) {' . "\r\n" . '                    return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {' . "\r\n" . '                        if (inputFilter(this.value)) {' . "\r\n" . '                            this.oldValue = this.value;' . "\r\n" . '                            this.oldSelectionStart = this.selectionStart;' . "\r\n" . '                            this.oldSelectionEnd = this.selectionEnd;' . "\r\n" . '                        } else if (this.hasOwnProperty("oldValue")) {' . "\r\n" . '                            this.value = this.oldValue;' . "\r\n" . '                            this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);' . "\r\n" . '                        }' . "\r\n" . '                    });' . "\r\n" . '                };' . "\r\n" . '            }(jQuery));' . "\r\n" . '            ';

if (!$f1dcaed925076e67['js_navigate']) {
	goto label624;
}

goto label623;

label723:

if ($E8870c6f95210f68 == 'line') {
	goto label761;
}

if ($E8870c6f95210f68 == 'line_activity') {
	goto label1650;
}

if ($E8870c6f95210f68 == 'epg_view') {
	goto label913;
}

if (!($E8870c6f95210f68 == 'lines')) {
	goto label1195;
}

echo '        ' . "\r\n\t\t" . 'var rClearing = false;' . "\r\n\r\n\t\t" . 'function api(rID, rType, rConfirm=false) {' . "\r\n" . '            if ((rType == "delete") && (!rConfirm)) {' . "\r\n" . '                new jBox("Confirm", {' . "\r\n" . '                    confirmButton: "Delete",' . "\r\n" . '                    cancelButton: "Cancel",' . "\r\n" . '                    content: "Are you sure you want to delete this line?",' . "\r\n" . '                    confirm: function () {' . "\r\n" . '                        api(rID, rType, true);' . "\r\n" . '                    }' . "\r\n" . '                }).open();' . "\r\n" . '            } else if ((rType == "kill") && (!rConfirm)) {' . "\r\n" . '                new jBox("Confirm", {' . "\r\n" . '                    confirmButton: "Kill",' . "\r\n" . '                    cancelButton: "Cancel",' . "\r\n" . '                    content: "Are you sure you want to kill this connection?",' . "\r\n" . '                    confirm: function () {' . "\r\n" . '                        api(rID, rType, true);' . "\r\n" . '                    }' . "\r\n" . '                }).open();' . "\r\n" . '            } else if ((rType == "kill_line") && (!rConfirm)) {' . "\r\n" . '                new jBox("Confirm", {' . "\r\n" . '                    confirmButton: "Kill",' . "\r\n" . '                    cancelButton: "Cancel",' . "\r\n" . '                    content: "Are you sure you want to kill all connections for this line?",' . "\r\n" . '                    confirm: function () {' . "\r\n" . '                        api(rID, rType, true);' . "\r\n" . '                    }' . "\r\n" . '                }).open();' . "\r\n\t\t\t" . '} else {' . "\r\n" . '                rConfirm = true;' . "\r\n" . '            }' . "\r\n" . '            if (rConfirm) {' . "\r\n" . '                $.getJSON("./api?action=line&sub=" + rType + "&user_id=" + rID, function(data) {' . "\r\n" . '                    if (data.result === true) {' . "\r\n" . '                        if (rType == "delete") {' . "\r\n" . '                            $.toast("Line has been deleted.");' . "\r\n" . '                        } else if (rType == "enable") {' . "\r\n" . '                            $.toast("Line has been enabled.");' . "\r\n" . '                        } else if (rType == "disable") {' . "\r\n" . '                            $.toast("Line has been disabled.");' . "\r\n" . '                        } else if (rType == "kill_line") {' . "\r\n" . '                            $.toast("All connections for this line have been killed.");' . "\r\n" . '                        } else if (rType == "kill") {' . "\r\n" . '                            $.toast("Connection has been killed.");' . "\r\n" . '                        } else if (rType == "reset_isp") {' . "\r\n" . '                            $.toast("ISP has been reset.");' . "\r\n" . '                        }' . "\r\n" . '                        $("#datatable-users").DataTable().ajax.reload(null, false);' . "\r\n" . '                    } else {' . "\r\n" . '                        $.toast("An error occured while processing your request.");' . "\r\n" . '                    }' . "\r\n" . '                });' . "\r\n" . '            }' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function download(username, password) {' . "\r\n\t\t\t" . '$("#download_type").val("").trigger("change");' . "\r\n" . '            $("#output_type").val("").trigger("change");' . "\r\n\t\t\t" . '$("#download_button").attr("disabled", true);' . "\r\n\t\t\t" . '$(\'.downloadModal\').data(\'username\', username);' . "\r\n\t\t\t" . '$(\'.downloadModal\').data(\'password\', password);' . "\r\n\t\t\t" . '$(\'.downloadModal\').modal(\'show\');' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function doDownload() {' . "\r\n\t\t\t" . 'if ($("#download_url").val()) {' . "\r\n\t\t\t\t" . 'window.open($("#download_url").val());' . "\r\n\t\t\t" . '}' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function copyDownload() {' . "\r\n\t\t\t" . '$("#download_url").select();' . "\r\n\t\t\t" . 'document.execCommand("copy");' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function getFilter() {' . "\r\n\t\t\t" . 'return $("#user_filter").val();' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function getReseller() {' . "\r\n\t\t\t" . 'return $("#user_reseller").val();' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function clearFilters() {' . "\r\n\t\t\t" . 'window.rClearing = true;' . "\r\n\t\t\t" . '$("#user_search").val("").trigger(\'change\');' . "\r\n\t\t\t" . '$(\'#user_filter\').val("").trigger(\'change\');' . "\r\n\t\t\t" . '$(\'#user_reseller\').val("").trigger(\'change\');' . "\r\n\t\t\t" . '$(\'#user_show_entries\').val("';
goto label1247;

label738:

echo intval($f1dcaed925076e67['default_entries']) ?: 10;
echo '").trigger(\'change\');' . "\r\n\t\t\t" . 'window.rClearing = false;' . "\r\n\t\t\t" . '$(\'#datatable-users\').DataTable().search($("#mag_search").val());' . "\r\n\t\t\t" . '$(\'#datatable-users\').DataTable().page.len($(\'#mag_show_entries\').val());' . "\r\n\t\t\t" . '$("#datatable-users").DataTable().page(0).draw(\'page\');' . "\r\n\t\t\t" . '$("#datatable-users").DataTable().ajax.reload( null, false );' . "\r\n" . '            delParams(["search", "filter", "owner", "page", "entries"]);' . "\r\n\t\t\t" . 'checkClear();' . "\r\n\t\t" . '}' . "\r\n" . '        function checkClear() {' . "\r\n\t\t\t" . 'if (!hasParams(["search", "filter", "owner"])) {' . "\r\n\t\t\t\t" . '$("#clearFilters").prop("disabled", true);' . "\r\n\t\t\t" . '} else {' . "\r\n\t\t\t\t" . '$("#clearFilters").prop("disabled", false);' . "\r\n\t\t\t" . '}' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function refreshTable() {' . "\r\n\t\t\t" . '$("#datatable-users").DataTable().ajax.reload( null, false );' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function message(id, mac) {' . "\r\n\t\t\t" . '$(\'.messageModal\').data(\'id\', id);' . "\r\n\t\t\t" . '$("#messageModal").text("Send Event - " + mac.toUpperCase());' . "\r\n\t\t\t" . '$("#message_type").val("").trigger("change");' . "\r\n\t\t\t" . '$("#message").val("");' . "\r\n\t\t\t" . '$("#selected_channel").val("");' . "\r\n\t\t\t" . '$("#send_msg_form").hide();' . "\r\n\t\t\t" . '$("#play_channel_form").hide();' . "\r\n\t\t\t" . '$(\'.messageModal\').modal(\'show\');' . "\r\n\t\t" . '}' . "\r\n" . '        var rSearch;' . "\r\n\t\t" . '$(document).ready(function() {' . "\r\n\t\t\t" . '$(\'select\').select2({width: \'100%\'});' . "\r\n\t\t\t" . 'var rPage = getParam("page");' . "\r\n" . '            if (!rPage) { rPage = 1; }' . "\r\n" . '            var rEntries = getParam("entries");' . "\r\n" . '            if (!rEntries) { rEntries = ';
echo intval($f1dcaed925076e67['default_entries']);
echo '; }' . "\r\n\t\t\t" . 'var rTable = $("#datatable-users").DataTable({' . "\r\n\t\t\t\t" . 'language: {' . "\r\n\t\t\t\t\t" . 'paginate: {' . "\r\n\t\t\t\t\t\t" . 'previous: "<i class=\'mdi mdi-chevron-left\'>",' . "\r\n\t\t\t\t\t\t" . 'next: "<i class=\'mdi mdi-chevron-right\'>",' . "\r\n\t\t\t\t\t" . '},' . "\r\n\t\t\t\t\t" . 'infoFiltered: ""' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'drawCallback: function() {' . "\r\t\t\t\t\t" . 'bindHref(); refreshTooltips();' . "\r\n" . '                    if ($("#datatable-users").DataTable().page.info().page > 0) {' . "\r\n" . '                        setParam("page", $("#datatable-users").DataTable().page.info().page+1);' . "\r\n" . '                    } else {' . "\r\n" . '                        delParam("page");' . "\r\n" . '                    }' . "\r\n" . '                    var rOrder = $("#datatable-users").DataTable().order()[0];' . "\r\n" . '                    setParam("order", rOrder[0]); setParam("dir", rOrder[1]);' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'createdRow: function(row, data, index) {' . "\r\n\t\t\t\t\t" . '$(row).addClass(\'user-\' + data[0]);' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'responsive: false,' . "\r\n\t\t\t\t" . 'processing: true,' . "\r\n\t\t\t\t" . 'serverSide: true,' . "\r\n" . '                searchDelay: 250,' . "\r\n\t\t\t\t" . 'ajax: {' . "\r\n\t\t\t\t\t" . 'url: "./table",' . "\r\n\t\t\t\t\t" . '"data": function(d) {' . "\r\n\t\t\t\t\t\t" . 'd.id = "mags",' . "\r\n\t\t\t\t\t\t" . 'd.filter = getFilter(),' . "\r\n\t\t\t\t\t\t" . 'd.reseller = getReseller()' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'columnDefs: [' . "\r\n\t\t\t\t\t" . '{"className": "dt-center", "targets": [0,2,3,5,6,7,8,9]},' . "\r\n\t\t\t\t\t";

if (XUI::$rSettings['redis_handler']) {
	goto label1008;
}

goto label1006;

label757:

echo "\t\t\t\t" . 'pageLength: parseInt(rEntries),' . "\r\n\t\t\t\t" . 'lengthMenu: [10, 25, 50, 250, 500, 1000],' . "\r\n" . '                displayStart: (parseInt(rPage)-1) * parseInt(rEntries)' . "\r\n\t\t\t" . '});' . "\r\n" . '            function doSearch(rValue) {' . "\r\n" . '                clearTimeout(window.rSearch); window.rSearch = setTimeout(function(){ rTable.search(rValue).draw(); }, 500);' . "\r\n" . '            }' . "\r\n\t\t\t" . '$("#datatable-streampage").css("width", "100%");' . "\r\n\t\t\t" . '$(\'#station_search\').keyup(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n" . '                    if ($("#station_search").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("search", $("#station_search").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("search");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'doSearch($(this).val());' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '})' . "\r\n\t\t\t" . '$(\'#station_show_entries\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n" . '                    if ($("#station_show_entries").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("entries", $("#station_show_entries").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("entries");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'rTable.page.len($(this).val()).draw();' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '})' . "\r\n\t\t\t" . '$(\'#station_category_id\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n" . '                    if ($("#station_category_id").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("category", $("#station_category_id").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("category");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'rTable.ajax.reload( null, false );' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '})' . "\r\n\t\t\t" . 'if ($(\'#station_search\').val()) {' . "\r\n\t\t\t\t" . 'rTable.search($(\'#station_search\').val()).draw();' . "\r\n\t\t\t" . '}' . "\r\n" . '            checkClear();' . "\r\n\t\t" . '});' . "\r\n" . '        ' . "\r\n\t\t";

label758:

goto label1244;

label759:

goto label977;

label760:

goto label267;

label761:

echo '        ' . "\r\n" . '        ';

if (isset($F5ba2106d5227309)) {
	goto label1339;
}

goto label1337;

label766:

echo "\t\t\t\t" . 'order: [[ ';
echo isset(XUI::$rRequest['order']) ? intval(XUI::$rRequest['order']) : 4;
echo ', "';
echo in_array(strtolower(XUI::$rRequest['dir']), ['asc', 'desc']) ? strtolower(XUI::$rRequest['dir']) : 'desc';
echo '" ]],' . "\r\n\t\t\t\t";
goto label436;

label801:

if ($E8870c6f95210f68 == 'edit_profile') {
	goto label418;
}

if ($E8870c6f95210f68 == 'enigmas') {
	goto label249;
}

if ($E8870c6f95210f68 == 'episodes') {
	goto label1034;
}

if ($E8870c6f95210f68 == 'live_connections') {
	goto label696;
}
if (($E8870c6f95210f68 == 'mag') || ($E8870c6f95210f68 == 'enigma')) {
	goto label453;
}

goto label1348;

label820:

echo ', rData.bouquets[rIndex].bouquet_name, rData.bouquets[rIndex].bouquet_channels.length, rData.bouquets[rIndex].bouquet_movies.length, rData.bouquets[rIndex].bouquet_series.length, rData.bouquets[rIndex].bouquet_radios.length]);' . "\r\n" . '                        });' . "\r\n" . '                        if (rData.data.compatible) {' . "\r\n" . '                            $("#package_warning").hide();' . "\r\n" . '                        } else {' . "\r\n" . '                            $("#package_warning").show();' . "\r\n" . '                        }' . "\r\n" . '                        ';

if (!$db0a61ef32b89a27['allow_restrictions']) {
	goto label826;
}

echo "\t\t\t\t\t\t" . 'if (rData.data.is_isplock == 1) {' . "\r\n\t\t\t\t\t\t\t" . 'setSwitch(window.rSwitches["is_isplock"], true);' . "\r\n\t\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t\t" . 'setSwitch(window.rSwitches["is_isplock"], false);' . "\r\n\t\t\t\t\t\t" . '}' . "\r\n" . '                        ';

label826:

echo '                        $("#package_cost").val(rData.data.cost_credits);' . "\r\n" . '                        $("#package_duration").val(rData.data.duration);' . "\r\n" . '                        $("#package_info").show();' . "\r\n" . '                        $("#submit_button").val("Purchase");' . "\r\n" . '                    }' . "\r\n" . '                    rTable.draw();' . "\r\n" . '                });' . "\r\n" . '            } else {' . "\r\n" . '                $("#max_connections").val(';
goto label1312;

label828:

echo '        ' . "\r\n" . '        var rClearing = false;' . "\r\n\r\n" . '        function openImage(elem) {' . "\r\n" . '            var rImage = $(elem).data("src");' . "\r\n" . '            if (rImage) {' . "\r\n" . '                $.magnificPopup.open({' . "\r\n" . '                    items: {' . "\r\n" . '                        src: \'./resize.php?maxw=768&maxh=768&url=\' + rImage,' . "\r\n" . '                        type: \'image\'' . "\r\n" . '                    }' . "\r\n" . '                });' . "\r\n" . '            }' . "\r\n" . '        }' . "\r\n" . '        function api(rID, rType, rConfirm=false) {' . "\r\n" . '            if ((rType == "purge") && (!rConfirm)) {' . "\r\n" . '                new jBox("Confirm", {' . "\r\n" . '                    confirmButton: "Kill",' . "\r\n" . '                    cancelButton: "Cancel",' . "\r\n" . '                    content: "Are you sure you want to kill all connections to this episode? This will include any connections from your subresellers too.",' . "\r\n" . '                    confirm: function () {' . "\r\n" . '                        api(rID, rType, true);' . "\r\n" . '                    }' . "\r\n" . '                }).open();' . "\r\n\t\t\t" . '} else {' . "\r\n" . '                rConfirm = true;' . "\r\n" . '            }' . "\r\n" . '            if (rConfirm) {' . "\r\n" . '                $.getJSON("./api?action=connections&sub=" + rType + "&stream_id=" + rID, function(data) {' . "\r\n" . '                    if (data.result == true) {' . "\r\n" . '                        if (rType == "purge") {' . "\r\n" . '                            $.toast("All connections have been killed.");' . "\r\n" . '                        }' . "\r\n" . '                        refreshTable(); setTimeout(refreshTable, 5000);' . "\r\n" . '                    } else {' . "\r\n" . '                        $.toast("An error occured while processing your request.");' . "\r\n" . '                    }' . "\r\n" . '                }).fail(function() {' . "\r\n" . '                    $.toast("An error occured while processing your request.");' . "\r\n" . '                });' . "\r\n" . '            }' . "\r\n\t\t" . '}' . "\r\n" . '        function refreshTable() {' . "\r\n\t\t\t" . '$("#datatable-streampage").DataTable().ajax.reload( null, false );' . "\r\n\t\t" . '}' . "\r\n" . '        function getSeries() {' . "\r\n" . '            return $("#episodes_series").val();' . "\r\n" . '        }' . "\r\n" . '        function getCategory() {' . "\r\n" . '            return $("#series_category_id").val();' . "\r\n" . '        }' . "\r\n" . '        function clearFilters() {' . "\r\n" . '            window.rClearing = true;' . "\r\n" . '            $("#episodes_search").val("").trigger(\'change\');' . "\r\n" . '            $(\'#series_category_id\').val("").trigger(\'change\');' . "\r\n" . '            $(\'#episodes_series\').val("").trigger(\'change\');' . "\r\n" . '            $(\'#episodes_show_entries\').val("';
echo intval($f1dcaed925076e67['default_entries']) ?: 10;
echo '").trigger(\'change\');' . "\r\n" . '            window.rClearing = false;' . "\r\n" . '            $(\'#datatable-streampage\').DataTable().search($("#episodes_search").val());' . "\r\n" . '            $(\'#datatable-streampage\').DataTable().page.len($(\'#episodes_show_entries\').val());' . "\r\n" . '            $("#datatable-streampage").DataTable().page(0).draw(\'page\');' . "\r\n" . '            $("#datatable-streampage").DataTable().ajax.reload( null, false );' . "\r\n" . '            delParams(["search", "category", "series", "page", "entries"]);' . "\r\n\t\t\t" . 'checkClear();' . "\r\n" . '        }' . "\r\n" . '        function checkClear() {' . "\r\n\t\t\t" . 'if (!hasParams(["search", "category", "series"])) {' . "\r\n\t\t\t\t" . '$("#clearFilters").prop("disabled", true);' . "\r\n\t\t\t" . '} else {' . "\r\n\t\t\t\t" . '$("#clearFilters").prop("disabled", false);' . "\r\n\t\t\t" . '}' . "\r\n\t\t" . '}' . "\r\n" . '        var rSearch;' . "\r\n" . '        $(document).ready(function() {' . "\r\n" . '            $(\'select\').select2({width: \'100%\'});' . "\r\n" . '            var rPage = getParam("page");' . "\r\n" . '            if (!rPage) { rPage = 1; }' . "\r\n" . '            var rEntries = getParam("entries");' . "\r\n" . '            if (!rEntries) { rEntries = ';
echo intval($f1dcaed925076e67['default_entries']);
echo '; }' . "\r\n\t\t\t" . 'var rTable = $("#datatable-streampage").DataTable({' . "\r\n" . '                language: {' . "\r\n" . '                    paginate: {' . "\r\n" . '                        previous: "<i class=\'mdi mdi-chevron-left\'>",' . "\r\n" . '                        next: "<i class=\'mdi mdi-chevron-right\'>"' . "\r\n" . '                    }' . "\r\n" . '                },' . "\r\n" . '                drawCallback: function() {' . "\r\n" . '                    bindHref(); refreshTooltips();' . "\r\n" . '                    if ($("#datatable-streampage").DataTable().page.info().page > 0) {' . "\r\n" . '                        setParam("page", $("#datatable-streampage").DataTable().page.info().page+1);' . "\r\n" . '                    } else {' . "\r\n" . '                        delParam("page");' . "\r\n" . '                    }' . "\r\n" . '                    var rOrder = $("#datatable-streampage").DataTable().order()[0];' . "\r\n" . '                    setParam("order", rOrder[0]); setParam("dir", rOrder[1]);' . "\r\n" . '                },' . "\r\n" . '                createdRow: function(row, data, index) {' . "\r\n" . '                    $(row).addClass(\'stream-\' + data[0]);' . "\r\n" . '                },' . "\r\n" . '                responsive: false,' . "\r\n" . '                processing: true,' . "\r\n" . '                serverSide: true,' . "\r\n" . '                searchDelay: 250,' . "\r\n" . '                ajax: {' . "\r\n" . '                    url: "./table",' . "\r\n" . '                    "data": function(d) {' . "\r\n" . '                        d.id = "episodes";' . "\r\n" . '                        d.series = getSeries();' . "\r\n" . '                        d.category = getCategory();' . "\r\n" . '                    }' . "\r\n" . '                },' . "\r\n" . '                columnDefs: [' . "\r\n\t\t\t\t\t" . '{"className": "dt-center", "targets": [0,1,4,5]},' . "\r\n\t\t\t\t\t";
goto label60;

label844:

$Df5cd7b5dc4cc10c = json_decode(FddF8Da6aB3fe47B($F5ba2106d5227309['package_id'])['bouquets'], true);

label855:

if (!is_array($Df5cd7b5dc4cc10c)) {
	goto label310;
}

$fac66c09488bc278 = json_decode($F5ba2106d5227309['bouquet'], true);
goto label317;
goto label310;

label869:

echo 'scrollX: true,';

label870:

echo "\t\t\t\t";

if (XUI::$rSettings['redis_handler']) {
	goto label270;
}

echo "\t\t\t\t" . 'order: [[ ';
goto label573;

label877:

echo '                rTable.draw();' . "\r\n" . '            }' . "\r\n" . '        }' . "\r\n" . '        function clearISP() {' . "\r\n" . '            $("#isp_clear").val("");' . "\r\n" . '        }' . "\r\n\t\t" . '$(document).ready(function() {' . "\r\n\t\t\t" . '$(\'select.select2\').select2({width: \'100%\'})' . "\r\n" . '            $(\'#username\').pwstrength();' . "\r\n" . '            $(\'#password\').pwstrength();' . "\r\n" . '            $("#package").change(function() {' . "\r\n" . '                getPackage();' . "\r\n" . '            });' . "\r\n" . '            $("#datatable-review").DataTable({' . "\r\n" . '                language: {' . "\r\n" . '                    paginate: {' . "\r\n" . '                        previous: "<i class=\'mdi mdi-chevron-left\'>",' . "\r\n" . '                        next: "<i class=\'mdi mdi-chevron-right\'>"' . "\r\n" . '                    }' . "\r\n" . '                },' . "\r\n" . '                drawCallback: function() {' . "\r\n" . '                    $(".dataTables_paginate > .pagination").addClass("pagination-rounded");' . "\r\n" . '                },' . "\r\n" . '                columnDefs: [' . "\r\n" . '                    {"className": "dt-center", "targets": [0,2,3,4,5]}' . "\r\n" . '                ],' . "\r\n" . '                responsive: false,' . "\r\n" . '                bInfo: false,' . "\r\n" . '                searching: false,' . "\r\n" . '                paging: false,' . "\r\n" . '                order: [[ 1, "asc" ]]' . "\r\n" . '            });' . "\r\n\t\t\t" . '$("#add_ip").click(function() {' . "\r\n\t\t\t\t" . 'if (($("#ip_field").val()) && (isValidIP($("#ip_field").val()))) {' . "\r\n\t\t\t\t\t" . 'var o = new Option($("#ip_field").val(), $("#ip_field").val());' . "\r\n\t\t\t\t\t" . '$("#allowed_ips").append(o);' . "\r\n\t\t\t\t\t" . '$("#ip_field").val("");' . "\r\n\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t" . '$.toast("Please enter a valid IP address.");' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$("#remove_ip").click(function() {' . "\r\n" . '                if ($(\'#allowed_ips option:selected\').length > 0) {' . "\r\n" . '                    $(\'#allowed_ips option:selected\').remove();' . "\r\n" . '                } else {' . "\r\n" . '                    $.toast("Please select an IP address to remove.");' . "\r\n" . '                }' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$("#add_ua").click(function() {' . "\r\n\t\t\t\t" . 'if ($("#ua_field").val()) {' . "\r\n\t\t\t\t\t" . 'var o = new Option($("#ua_field").val(), $("#ua_field").val());' . "\r\n\t\t\t\t\t" . '$("#allowed_ua").append(o);' . "\r\n\t\t\t\t\t" . '$("#ua_field").val("");' . "\r\n\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t" . '$.toast("Please enter a user-agent.");' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$("#remove_ua").click(function() {' . "\r\n" . '                if ($(\'#allowed_ua option:selected\').length > 0) {' . "\r\n" . '                    $(\'#allowed_ua option:selected\').remove();' . "\r\n" . '                } else {' . "\r\n" . '                    $.toast("Please select a User-Agent to remove.");' . "\r\n" . '                }' . "\r\n\t\t\t" . '});' . "\r\n" . '            $(\'#username\').keypress(function (e) {' . "\r\n" . '                var regex = new RegExp("^[a-zA-Z0-9@._-]+$");' . "\r\n" . '                var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);' . "\r\n" . '                if (regex.test(str)) {' . "\r\n" . '                    return true;' . "\r\n" . '                }' . "\r\n" . '                e.preventDefault();' . "\r\n" . '                return false;' . "\r\n" . '            });' . "\r\n" . '            $(\'#password\').keypress(function (e) {' . "\r\n" . '                var regex = new RegExp("^[a-zA-Z0-9@._-]+$");' . "\r\n" . '                var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);' . "\r\n" . '                if (regex.test(str)) {' . "\r\n" . '                    return true;' . "\r\n" . '                }' . "\r\n" . '                e.preventDefault();' . "\r\n" . '                return false;' . "\r\n" . '            });' . "\r\n" . '            ';

if (!isset($F5ba2106d5227309)) {
	goto label883;
}

echo '            $(\'#username\').trigger(\'keyup\');' . "\r\n" . '            $(\'#password\').trigger(\'keyup\');' . "\r\n" . '            ';

label883:

goto label266;

label884:

echo $_['mag_toast_3'];
echo '.");' . "\r\n\t\t\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t\t\t" . '$.toast("';
echo $_['mag_toast_4'];
echo '.");' . "\r\n\t\t\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t\t" . '});' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . 'if ($(\'#mag_search\').val()) {' . "\r\n\t\t\t\t" . 'rTable.search($(\'#mag_search\').val()).draw();' . "\r\n\t\t\t" . '}' . "\r\n\t\t\t" . 'checkClear();' . "\r\n\t\t" . '});' . "\r\n" . '        ' . "\r\n\t\t";

label890:

goto label452;

label891:

goto label893;

label892:

echo "\t\t\t\t\t" . '{"orderable": false, "targets": [5,7,11]}' . "\r\n\t\t\t\t\t";

label893:

echo "\t\t\t\t" . '],' . "\r\n" . '                ';
goto label1478;

label895:

echo '_trial';

label896:

echo '&package_id=" + $("#package").val()';

if (!isset($F5ba2106d5227309)) {
	goto label1442;
}

echo ' + "&user_id=' . $F5ba2106d5227309['id'] . '"';
goto label1442;

label906:

if ($db0a61ef32b89a27['allow_change_bouquets']) {
	goto label911;
}

echo 'rData.bouquets[rIndex].id';
goto label1595;

label911:

echo '"<input class=\'big_checkbox\' type=\'checkbox\' name=\'bouquets_selected[]\' value=\'" + rData.bouquets[rIndex].id + "\' " + rChecked + "></input>"';
goto label1595;

label913:

echo "\t\t\r\n\t\t" . 'function selectChannel(rID) {' . "\r\n\t\t\t" . '// noop' . "\r\n\t\t" . '}' . "\r\n\t\t\r\n\t\t" . 'function clearForm() {' . "\r\n\t\t\t" . 'window.location.href = "epg_view";' . "\r\n\t\t" . '}' . "\r\n\t\t\r\n\t\t" . 'function showGuide(rID) {' . "\r\n\t\t\t" . '$("#programmeLabel").html("");' . "\r\n\t\t\t" . '$("#programmeDescription").html("");' . "\r\n\t\t\t" . '$("#programmeStart").html("");' . "\r\n\t\t\t" . '$.getJSON("./api?action=get_programme&id=" + rID + "&timezone=" + Intl.DateTimeFormat().resolvedOptions().timeZone, function(data) {' . "\r\n\t\t\t\t" . 'if (data.result == true) {' . "\r\n\t\t\t\t\t" . '$("#programmeLabel").html(data.data.title);' . "\r\n\t\t\t\t\t" . '$("#programmeDescription").html(data.data.description);' . "\r\n\t\t\t\t\t" . '$("#programmeStart").html(data.data.date)' . "\r\n\t\t\t\t\t" . '$(".bs-programme").modal("show");' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t" . '}' . "\r\n\t\t\r\n\t\t" . '$(document).ready(function() {' . "\r\n\t\t\t" . '$(\'select\').select2({width: \'100%\'});' . "\r\n\t\t\t\r\n\t\t\t" . 'window.XUI.Listings.DefaultChannels = "';
echo implode(',', $dec36723d7be7c49);
echo '";' . "\r\n\t\t\t";
if (!(isset(XUI::$rRequest['category']) && (0 < intval(XUI::$rRequest['category'])))) {
	goto label1504;
}

goto label1496;

label934:

goto label1682;

label935:

echo '        ' . "\r\n\t\t" . 'var rClearing = false;' . "\r\n\r\n" . '        function openImage(elem) {' . "\r\n" . '            var rImage = $(elem).data("src");' . "\r\n" . '            if (rImage) {' . "\r\n" . '                $.magnificPopup.open({' . "\r\n" . '                    items: {' . "\r\n" . '                        src: \'./resize.php?maxw=768&maxh=768&url=\' + rImage,' . "\r\n" . '                        type: \'image\'' . "\r\n" . '                    }' . "\r\n" . '                });' . "\r\n" . '            }' . "\r\n" . '        }' . "\r\n" . '        function api(rID, rType, rConfirm=false) {' . "\r\n" . '            if ((rType == "purge") && (!rConfirm)) {' . "\r\n" . '                new jBox("Confirm", {' . "\r\n" . '                    confirmButton: "Kill",' . "\r\n" . '                    cancelButton: "Cancel",' . "\r\n" . '                    content: "Are you sure you want to kill all connections to this stream? This will include any connections from your subresellers too.",' . "\r\n" . '                    confirm: function () {' . "\r\n" . '                        api(rID, rType, true);' . "\r\n" . '                    }' . "\r\n" . '                }).open();' . "\r\n\t\t\t" . '} else {' . "\r\n" . '                rConfirm = true;' . "\r\n" . '            }' . "\r\n" . '            if (rConfirm) {' . "\r\n" . '                $.getJSON("./api?action=connections&sub=" + rType + "&stream_id=" + rID, function(data) {' . "\r\n" . '                    if (data.result == true) {' . "\r\n" . '                        if (rType == "purge") {' . "\r\n" . '                            $.toast("All connections have been killed.");' . "\r\n" . '                        }' . "\r\n" . '                        refreshTable(); setTimeout(refreshTable, 5000);' . "\r\n" . '                    } else {' . "\r\n" . '                        $.toast("An error occured while processing your request.");' . "\r\n" . '                    }' . "\r\n" . '                }).fail(function() {' . "\r\n" . '                    $.toast("An error occured while processing your request.");' . "\r\n" . '                });' . "\r\n" . '            }' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function getCategory() {' . "\r\n\t\t\t" . 'return $("#stream_category_id").val();' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function clearFilters() {' . "\r\n\t\t\t" . 'window.rClearing = true;' . "\r\n\t\t\t" . '$("#stream_search").val("").trigger(\'change\');' . "\r\n\t\t\t" . '$(\'#stream_category_id\').val("").trigger(\'change\');' . "\r\n\t\t\t" . '$(\'#stream_show_entries\').val("';
echo intval($f1dcaed925076e67['default_entries']) ?: 10;
echo '").trigger(\'change\');' . "\r\n\t\t\t" . 'window.rClearing = false;' . "\r\n\t\t\t" . '$(\'#datatable-streampage\').DataTable().search($("#stream_search").val());' . "\r\n\t\t\t" . '$(\'#datatable-streampage\').DataTable().page.len($(\'#stream_show_entries\').val());' . "\r\n\t\t\t" . '$("#datatable-streampage").DataTable().page(0).draw(\'page\');' . "\r\n\t\t\t" . '$("#datatable-streampage").DataTable().ajax.reload( null, false );' . "\r\n\t\t\t" . 'delParams(["search", "category", "page", "entries"]);' . "\r\n\t\t\t" . 'checkClear();' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function checkClear() {' . "\r\n\t\t\t" . 'if (!hasParams(["search", "category"])) {' . "\r\n\t\t\t\t" . '$("#clearFilters").prop("disabled", true);' . "\r\n\t\t\t" . '} else {' . "\r\n\t\t\t\t" . '$("#clearFilters").prop("disabled", false);' . "\r\n\t\t\t" . '}' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function refreshTable() {' . "\r\n\t\t\t" . '$("#datatable-streampage").DataTable().ajax.reload( null, false );' . "\r\n\t\t" . '}' . "\r\n" . '        var rSearch;' . "\r\n\t\t" . '$(document).ready(function() {' . "\r\n\t\t\t" . '$(\'select\').select2({width: \'100%\'});' . "\r\n" . '            var rPage = getParam("page");' . "\r\n" . '            if (!rPage) { rPage = 1; }' . "\r\n" . '            var rEntries = getParam("entries");' . "\r\n" . '            if (!rEntries) { rEntries = ';
goto label44;

label945:

echo ', function(rData) {' . "\r\n" . '                    if (rData.result === true) {' . "\r\n" . '                        $("#max_connections").val(rData.data.max_connections);' . "\r\n" . '                        $("#cost_credits").html($.number(rData.data.cost_credits, 0));' . "\r\n" . '                        $("#remaining_credits").html($.number(';
echo $E59d0debc75e7be8['credits'];
echo ' - rData.data.cost_credits, 0));' . "\r\n" . '                        $("#exp_date").val(rData.data.exp_date);' . "\r\n" . '                        if (';
echo $E59d0debc75e7be8['credits'];
echo ' - rData.data.cost_credits < 0) {' . "\r\n" . '                            $("#credits-cost").hide();' . "\r\n" . '                            $("#no-credits").show()' . "\r\n" . '                            $(".purchase").prop(\'disabled\', true);' . "\r\n" . '                        } else {' . "\r\n" . '                            $("#credits-cost").show();' . "\r\n" . '                            $("#no-credits").hide()' . "\r\n" . '                            $(".purchase").prop(\'disabled\', false);' . "\r\n" . '                        }' . "\r\n" . '                        $(rData.bouquets).each(function(rIndex) {' . "\r\n" . '                            if ((window.rUserBouquet.length > 0) && (window.rUserPackage == parseInt($("#package").val()))) {' . "\r\n" . '                                if (window.rUserBouquet.includes(parseInt(rData.bouquets[rIndex].id))) {' . "\r\n" . '                                    var rChecked = "checked";' . "\r\n" . '                                } else {' . "\r\n" . '                                    var rChecked = "";' . "\r\n" . '                                }' . "\r\n" . '                            } else {' . "\r\n" . '                                var rChecked = "checked";' . "\r\n" . '                            }' . "\r\n\t\t\t\t\t\t\t" . 'rTable.row.add([';
goto label906;

label953:

goto label955;

label954:

echo '        ' . "\r\n\t\t" . '$(document).ready(function() {' . "\r\n\t\t\t" . '$(\'select.select2\').select2({width: \'100%\'})' . "\r\n\t\t\t" . 'var elems = Array.prototype.slice.call(document.querySelectorAll(\'.js-switch\'));' . "\r\n" . '            $(\'#password\').pwstrength({\'increase\': true});' . "\r\n" . '            $("form").submit(function(e){' . "\r\n" . '                e.preventDefault();' . "\r\n" . '                $(\':input[type="submit"]\').prop(\'disabled\', true);' . "\r\n" . '                submitForm(window.rCurrentPage, new FormData($("form")[0]));' . "\r\n" . '            });' . "\r\n\t\t" . '});' . "\r\n\r\n\t\t";

label955:

goto label758;
goto label251;

label957:

echo ';' . "\r\n" . '        var rUserBouquet = [';
echo implode(',', array_map('intval', json_decode($F5ba2106d5227309['bouquet'], true)) ?: []);
echo '];' . "\r\n" . '        ';

label975:

echo '        ' . "\r\n" . '        function getPackage() {' . "\r\n" . '            var rTable = $(\'#datatable-review\').DataTable();' . "\r\n" . '            rTable.clear();' . "\r\n" . '            rTable.draw();' . "\r\n" . '            if ($("#package").val().length > 0) {' . "\r\n" . '                $.getJSON("./api?action=get_package';
goto label1452;

label977:

echo '        ' . "\r\n\t\t" . 'var rClearing = false;' . "\r\n" . '        ' . "\r\n" . '        function openImage(elem) {' . "\r\n\t\t\t" . 'rPath = $(elem).data("src");' . "\r\n\t\t\t" . 'if (rPath) {' . "\r\n" . '                $.magnificPopup.open({' . "\r\n" . '                    items: {' . "\r\n" . '                        src: \'./resize.php?maxw=768&maxh=768&url=\' + rPath,' . "\r\n" . '                        type: \'image\'' . "\r\n" . '                    }' . "\r\n" . '                });' . "\r\n\t\t\t" . '}' . "\r\n\t\t" . '}' . "\r\n" . '        function api(rID, rType, rConfirm=false) {' . "\r\n" . '            if ((rType == "purge") && (!rConfirm)) {' . "\r\n" . '                new jBox("Confirm", {' . "\r\n" . '                    confirmButton: "Kill",' . "\r\n" . '                    cancelButton: "Cancel",' . "\r\n" . '                    content: "Are you sure you want to kill all connections to this movie? This will include any connections from your subresellers too.",' . "\r\n" . '                    confirm: function () {' . "\r\n" . '                        api(rID, rType, true);' . "\r\n" . '                    }' . "\r\n" . '                }).open();' . "\r\n\t\t\t" . '} else {' . "\r\n" . '                rConfirm = true;' . "\r\n" . '            }' . "\r\n" . '            if (rConfirm) {' . "\r\n" . '                $.getJSON("./api?action=connections&sub=" + rType + "&stream_id=" + rID, function(data) {' . "\r\n" . '                    if (data.result == true) {' . "\r\n" . '                        if (rType == "purge") {' . "\r\n" . '                            $.toast("All connections have been killed.");' . "\r\n" . '                        }' . "\r\n" . '                        refreshTable(); setTimeout(refreshTable, 5000);' . "\r\n" . '                    } else {' . "\r\n" . '                        $.toast("An error occured while processing your request.");' . "\r\n" . '                    }' . "\r\n" . '                }).fail(function() {' . "\r\n" . '                    $.toast("An error occured while processing your request.");' . "\r\n" . '                });' . "\r\n" . '            }' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function refreshTable() {' . "\r\n\t\t\t" . '$("#datatable-streampage").DataTable().ajax.reload( null, false );' . "\r\n\t\t" . '}' . "\r\n" . '        function getCategory() {' . "\r\n\t\t\t" . 'return $("#movies_category_id").val();' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function clearFilters() {' . "\r\n\t\t\t" . 'window.rClearing = true;' . "\r\n\t\t\t" . '$("#movies_search").val("").trigger(\'change\');' . "\r\n\t\t\t" . '$(\'#movies_category_id\').val("").trigger(\'change\');' . "\r\n\t\t\t" . '$(\'#movies_show_entries\').val("';
echo intval($f1dcaed925076e67['default_entries']) ?: 10;
echo '").trigger(\'change\');' . "\r\n\t\t\t" . 'window.rClearing = false;' . "\r\n\t\t\t" . '$(\'#datatable-streampage\').DataTable().search($("#movies_search").val());' . "\r\n\t\t\t" . '$(\'#datatable-streampage\').DataTable().page.len($(\'#movies_show_entries\').val());' . "\r\n\t\t\t" . '$("#datatable-streampage").DataTable().page(0).draw(\'page\');' . "\r\n\t\t\t" . '$("#datatable-streampage").DataTable().ajax.reload( null, false );' . "\r\n\t\t\t" . 'delParams(["search", "category", "page", "entries"]);' . "\r\n\t\t\t" . 'checkClear();' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function checkClear() {' . "\r\n\t\t\t" . 'if (!hasParams(["search", "category"])) {' . "\r\n\t\t\t\t" . '$("#clearFilters").prop("disabled", true);' . "\r\n\t\t\t" . '} else {' . "\r\n\t\t\t\t" . '$("#clearFilters").prop("disabled", false);' . "\r\n\t\t\t" . '}' . "\r\n\t\t" . '}' . "\r\n" . '        var rSearch;' . "\r\n\t\t" . '$(document).ready(function() {' . "\r\n\t\t\t" . '$(\'select\').select2({width: \'100%\'});' . "\r\n\t\t\t" . 'var rPage = getParam("page");' . "\r\n" . '            if (!rPage) { rPage = 1; }' . "\r\n" . '            var rEntries = getParam("entries");' . "\r\n" . '            if (!rEntries) { rEntries = ';
echo intval($f1dcaed925076e67['default_entries']);
echo '; }' . "\r\n\t\t\t" . 'var rTable = $("#datatable-streampage").DataTable({' . "\r\n\t\t\t\t" . 'language: {' . "\r\n\t\t\t\t\t" . 'paginate: {' . "\r\n\t\t\t\t\t\t" . 'previous: "<i class=\'mdi mdi-chevron-left\'>",' . "\r\n\t\t\t\t\t\t" . 'next: "<i class=\'mdi mdi-chevron-right\'>"' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'drawCallback: function() {' . "\r\t\t\t\t\t" . 'bindHref(); refreshTooltips();' . "\r\n" . '                    if ($("#datatable-streampage").DataTable().page.info().page > 0) {' . "\r\n" . '                        setParam("page", $("#datatable-streampage").DataTable().page.info().page+1);' . "\r\n" . '                    } else {' . "\r\n" . '                        delParam("page");' . "\r\n" . '                    }' . "\r\n" . '                    var rOrder = $("#datatable-streampage").DataTable().order()[0];' . "\r\n" . '                    setParam("order", rOrder[0]); setParam("dir", rOrder[1]);' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'createdRow: function(row, data, index) {' . "\r\n\t\t\t\t\t" . '$(row).addClass(\'stream-\' + data[0]);' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'responsive: false,' . "\r\n\t\t\t\t" . 'processing: true,' . "\r\n\t\t\t\t" . 'serverSide: true,' . "\r\n" . '                searchDelay: 250,' . "\r\n\t\t\t\t" . 'ajax: {' . "\r\n\t\t\t\t\t" . 'url: "./table",' . "\r\n\t\t\t\t\t" . '"data": function(d) {' . "\r\n\t\t\t\t\t\t" . 'd.id = "movies";' . "\r\n\t\t\t\t\t\t" . 'd.category = getCategory();' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'columnDefs: [' . "\r\n\t\t\t\t\t" . '{"className": "dt-center", "targets": [0,1,4,5]},' . "\r\n\t\t\t\t\t";
goto label608;

label993:

echo ' + "&user_id=' . $F5ba2106d5227309['id'] . '"';

label997:

if (!isset($e6ceb472dd6d165f)) {
	goto label1005;
}

echo ' + "&orig_id=' . $e6ceb472dd6d165f['id'] . '"';

label1005:

goto label945;

label1006:

echo "\t\t\t\t\t" . '{"orderable": false, "targets": [9]},' . "\r\n\t\t\t\t\t";
goto label1009;

label1008:

echo "\t\t\t\t\t" . '{"orderable": false, "targets": [6,9]},' . "\r\n\t\t\t\t\t";

label1009:

goto label1035;

label1010:

goto label1012;

label1011:

echo '        ' . "\r\n\t\t" . '$(document).ready(function() {' . "\r\n\t\t\t" . '$(\'select.select2\').select2({width: \'100%\'})' . "\r\n" . '            $("form").submit(function(e){' . "\r\n" . '                e.preventDefault();' . "\r\n" . '                $(\':input[type="submit"]\').prop(\'disabled\', true);' . "\r\n" . '                submitForm(window.rCurrentPage, new FormData($("form")[0]));' . "\r\n" . '            });' . "\r\n\t\t" . '});' . "\r\n" . '        ' . "\r\n\t\t";

label1012:

goto label953;

label1013:

echo in_array(strtolower(XUI::$rRequest['dir']), ['asc', 'desc']) ? strtolower(XUI::$rRequest['dir']) : 'desc';
echo '" ]],' . "\r\n" . '                pageLength: parseInt(rEntries),' . "\r\n\t\t\t\t" . 'lengthMenu: [10, 25, 50, 250, 500, 1000],' . "\r\n" . '                displayStart: (parseInt(rPage)-1) * parseInt(rEntries)' . "\r\n\t\t\t" . '});' . "\r\n" . '            function doSearch(rValue) {' . "\r\n" . '                clearTimeout(window.rSearch); window.rSearch = setTimeout(function(){ rTable.search(rValue).draw(); }, 500);' . "\r\n" . '            }' . "\r\n\t\t\t" . '$("#datatable-activity").css("width", "100%");' . "\r\n\t\t\t" . '$(\'#live_search\').keyup(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n" . '                    if ($("#live_search").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("search", $("#live_search").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("search");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'doSearch($(this).val());' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#live_show_entries\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n" . '                    if ($("#live_show_entries").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("entries", $("#live_show_entries").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("entries");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'rTable.page.len($(this).val()).draw();' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#live_line\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n" . '                    if ($("#live_line").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("line", $("#live_line").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("line");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'rTable.ajax.reload( null, false );' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n" . '            $(\'#live_user\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n" . '                    if ($("#live_user").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("user", $("#live_user").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("user");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'rTable.ajax.reload( null, false );' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n" . '            $(\'#live_stream\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n" . '                    if ($("#live_stream").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("stream", $("#live_stream").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("stream");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'rTable.ajax.reload( null, false );' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n" . '            if ($(\'#live_search\').val()) {' . "\r\n\t\t\t\t" . 'rTable.search($(\'#live_search\').val()).draw();' . "\r\n\t\t\t" . '}' . "\r\n" . '            checkClear();' . "\r\n\t\t" . '});' . "\r\n" . '        ' . "\r\n\t\t";

label1033:

goto label248;

label1034:

goto label828;

label1035:

echo "\t\t\t\t\t" . '{"visible": false, "targets": [1]}' . "\r\n\t\t\t\t" . '],' . "\r\n" . '                ';

if (!$Ebb0b63f7c597ba4) {
	goto label1040;
}

echo 'scrollX: true,';

label1040:

echo "\t\t\t\t" . 'order: [[ ';
goto label632;

label1042:

echo '        ' . "\r\n" . '        function getStats() {' . "\r\n" . '            var rStart = Date.now();' . "\r\n" . '            $.getJSON("./api?action=dashboard", function(data) {' . "\r\n" . '                $(".active-connections .entry").html($.number(data.open_connections, 0));' . "\r\n" . '                $(".online-users .entry").html($.number(data.online_users, 0));' . "\r\n" . '                $(".active-accounts .entry").html($.number(data.active_accounts, 0));' . "\r\n" . '                ';

if (1 < count($bc0b231fcce79374)) {
	goto label57;
}

echo '                $(".credits .entry").html($.number(data.credits, 0));' . "\r\n" . '                ';
goto label58;
goto label57;

label1052:

echo in_array(strtolower(XUI::$rRequest['dir']), ['asc', 'desc']) ? strtolower(XUI::$rRequest['dir']) : 'asc';
echo '" ]],' . "\r\n\t\t\t\t";

label1072:

echo "\t\t\t\t" . 'pageLength: parseInt(rEntries),' . "\r\n\t\t\t\t" . 'lengthMenu: [10, 25, 50, 250, 500, 1000],' . "\r\n" . '                displayStart: (parseInt(rPage)-1) * parseInt(rEntries)' . "\r\n\t\t\t" . '});' . "\r\n" . '            function doSearch(rValue) {' . "\r\n" . '                clearTimeout(window.rSearch); window.rSearch = setTimeout(function(){ rTable.search(rValue).draw(); }, 500);' . "\r\n" . '            }' . "\r\n\t\t\t" . '$("#datatable-streampage").css("width", "100%");' . "\r\n\t\t\t" . '$(\'#stream_search\').keyup(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n\t\t\t\t\t" . 'if ($("#stream_search").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("search", $("#stream_search").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("search");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'doSearch($(this).val());' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#stream_show_entries\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n" . '                    if ($("#stream_show_entries").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("entries", $("#stream_show_entries").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("entries");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'rTable.page.len($(this).val()).draw();' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#stream_category_id\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n\t\t\t\t\t" . 'if ($("#stream_category_id").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("category", $("#stream_category_id").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("category");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'rTable.ajax.reload( null, false );' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . 'if ($(\'#stream_search\').val()) {' . "\r\n\t\t\t\t" . 'rTable.search($(\'#stream_search\').val()).draw();' . "\r\n\t\t\t" . '}' . "\r\n\t\t\t" . 'checkClear();' . "\r\n\t\t" . '});' . "\r\n\r\n\t\t";

label1073:

goto label934;

label1074:

echo 'scrollX: true,';

label1075:

echo "\t\t\t\t" . 'order: [[ ';
echo isset(XUI::$rRequest['order']) ? intval(XUI::$rRequest['order']) : 7;
echo ', "';
goto label1013;

label1090:

echo "\t\t\t\t" . '],' . "\r\n" . '                ';

if (!$Ebb0b63f7c597ba4) {
	goto label1095;
}

echo 'scrollX: true,';

label1095:

goto label1739;

label1096:

goto label1098;

label1097:

echo "\t\t\t\t\t" . '{"orderable": false, "targets": [1,4,5]},' . "\r\n\t\t\t\t\t";

label1098:

echo "\t\t\t\t" . '],' . "\r\n" . '                ';
goto label1327;

label1100:

echo '        function refreshTooltips() {' . "\r\n" . '            $(".jBox-wrapper").hide();' . "\r\n" . '            $(window.jBoxes).each(function() {' . "\r\n" . '                this.close();' . "\r\n" . '            });' . "\r\n" . '            window.jBoxes = [];' . "\r\n" . '            $(\'.tooltip-left\').each(function() {' . "\r\n" . '                window.jBoxes.push(new $(this).jBox(\'Tooltip\', {theme: \'TooltipDark\', position: {x: \'left\', y: \'center\'}, outside: \'x\'}));' . "\r\n" . '            });' . "\r\n" . '            $(\'.tooltip-right\').each(function() {' . "\r\n" . '                window.jBoxes.push(new $(this).jBox(\'Tooltip\', {theme: \'TooltipDark\', position: {x: \'right\', y: \'center\'}, outside: \'x\'}));' . "\r\n" . '            });' . "\r\n" . '            $(\'.tooltip\').each(function() {' . "\r\n" . '                window.jBoxes.push(new $(this).jBox(\'Tooltip\', {theme: \'TooltipDark\'}));' . "\r\n" . '            });' . "\r\n" . '        }' . "\r\n" . '        function setURL(rURL, rReplace=true) {' . "\r\n" . '            if (rReplace) {' . "\r\n" . '                window.history.replaceState({}, \'\', rURL);' . "\r\n" . '            } else {' . "\r\n" . '                if (window.location.href.split("/").reverse()[0].split("?")[0].split(".")[0] != rURL.split("/").reverse()[0].split("?")[0].split(".")[0]) {' . "\r\n" . '                    window.history.pushState({}, \'\', rURL);' . "\r\n" . '                }' . "\r\n" . '                window.rRealURL = rURL;' . "\r\n" . '            }' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function delParams(rParams) {' . "\r\n\t\t\t" . '$.each(rParams, function(rIndex, rParam) {' . "\r\n\t\t\t\t" . 'delParam(rParam);' . "\r\n\t\t\t" . '});' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function delParam(rParam) {' . "\r\n\t\t\t" . 'var rURL = new URL(document.location);' . "\r\n\t\t\t" . 'rURL.searchParams.delete(rParam);' . "\r\n\t\t\t" . 'setURL(rURL);' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function setParam(rParam, rValue) {' . "\r\n\t\t\t" . 'var rURL = new URL(document.location);' . "\r\n\t\t\t" . 'rURL.searchParams.set(rParam, rValue);' . "\r\n\t\t\t" . 'setURL(rURL);' . "\r\n\t\t" . '}' . "\r\n" . '        function getParam(rParam) {' . "\r\n\t\t\t" . 'var rURL = new URL(document.location);' . "\r\n\t\t\t" . 'return rURL.searchParams.get(rParam);' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function hasParam(rParam) {' . "\r\n\t\t\t" . 'var rURL = new URL(document.location);' . "\r\n\t\t\t" . 'return rURL.searchParams.has(rParam);' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function hasParams(rParams, rAll=false) {' . "\r\n\t\t\t" . 'var rURL = new URL(document.location);' . "\r\n\t\t\t" . 'var rCount = 0;' . "\r\n\t\t\t" . '$.each(rParams, function(rIndex, rParam) {' . "\r\n\t\t\t\t" . 'if (rURL.searchParams.has(rParam)) {' . "\r\n\t\t\t\t\t" . 'rCount += 1;' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . 'if (((rCount > 0) && (!rAll)) || (rCount == rParams.length)) {' . "\r\n\t\t\t\t" . 'return true;' . "\r\n\t\t\t" . '} else {' . "\r\n\t\t\t\t" . 'return false;' . "\r\n\t\t\t" . '}' . "\r\n\t\t" . '}' . "\r\n" . '        function bindHref() {' . "\r\n" . '            ';

if (!$f1dcaed925076e67['js_navigate']) {
	goto label1106;
}

echo '            $("a").each(function() {' . "\r\n\t\t\t\t" . 'if (($(this).attr("href")) && ($(this).attr("href").slice(0,1) != "#") && ($(this).attr("href").slice(0,11) != "javascript:") && ($(this).attr("href").slice(0,8) != "epg_view")) {' . "\r\n" . '                    $(this).unbind("click");' . "\r\n" . '                    $(this).click(function(e) {' . "\r\n" . '                        navigate($(this).attr("href"));' . "\r\n" . '                        e.preventDefault();' . "\r\n" . '                    });' . "\r\n" . '                }' . "\r\n" . '            });' . "\r\n" . '            ';

label1106:

echo '        }' . "\r\n" . '        function viewLiveConnections(rStreamID) {' . "\r\n" . '            $("#datatable-live").DataTable({' . "\r\n" . '                destroy: true,' . "\r\n\t\t\t\t" . 'ordering: true,' . "\r\n\t\t\t\t" . 'paging: true,' . "\r\n\t\t\t\t" . 'searching: true,' . "\r\n\t\t\t\t" . 'processing: true,' . "\r\n\t\t\t\t" . 'serverSide: true,' . "\r\n" . '                searchDelay: 250,' . "\r\n\t\t\t\t" . 'bInfo: true,' . "\r\n" . '                drawCallback: function() {' . "\r\n" . '                    bindHref(); refreshTooltips();' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'ajax: {' . "\r\n\t\t\t\t\t" . 'url: "./table",' . "\r\n\t\t\t\t\t" . '"data": function(d) {' . "\r\n\t\t\t\t\t\t" . 'd.id = "live_connections";' . "\r\n\t\t\t\t\t\t" . 'd.stream_id = rStreamID;' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'columnDefs: [' . "\r\n\t\t\t\t\t" . '{"className": "dt-center", "targets": [1,6,7,8,9]},' . "\r\n" . '                    {"visible": false, "targets": [0,3,4,5]}' . "\r\n\t\t\t\t" . '],' . "\r\n\t\t\t" . '});' . "\r\n" . '            $(".bs-live-modal-center").modal("show");' . "\r\n" . '        }' . "\r\n" . '        function whois(rIP) {' . "\r\n\t\t\t" . '$("#whoisLabel").html(rIP);' . "\r\n\t\t\t" . 'var rRows = $("#whois-table tr");' . "\r\n\t\t\t" . '$(rRows).each(function() {' . "\r\n\t\t\t\t" . '$(this).find("td").html("");' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$.getJSON("./api?action=ip_whois&isp=1&ip=" + encodeURIComponent(rIP), function(rData) {' . "\r\n\t\t\t\t" . 'if ("data" in rData) {' . "\r\n\t\t\t\t\t" . 'if (("continent" in rData.data) && ("names" in rData.data.continent) && ("en" in rData.data.continent.names)) {' . "\r\n\t\t\t\t\t\t" . '$(rRows[1]).find("td").html(rData.data.continent.names.en);' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'if (("country" in rData.data) && ("names" in rData.data.country) && ("en" in rData.data.country.names)) {' . "\r\n\t\t\t\t\t\t" . '$(rRows[2]).find("td").html(rData.data.country.names.en);' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'if (("city" in rData.data) && ("names" in rData.data.city) && ("en" in rData.data.city.names)) {' . "\r\n\t\t\t\t\t\t" . '$(rRows[3]).find("td").html(rData.data.city.names.en);' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'if (("postal" in rData.data) && ("code" in rData.data.postal)) {' . "\r\n\t\t\t\t\t\t" . '$(rRows[4]).find("td").html(rData.data.postal.code);' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'if (("location" in rData.data) && ("latitude" in rData.data.location) && ("longitude" in rData.data.location)) {' . "\r\n\t\t\t\t\t\t" . '$(rRows[5]).find("td").html(rData.data.location.latitude + ", " + rData.data.location.longitude);' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'if (("isp" in rData.data) && (rData.data.isp)) {' . "\r\n\t\t\t\t\t\t" . 'if ("isp" in rData.data.isp) {' . "\r\n\t\t\t\t\t\t\t" . '$(rRows[7]).find("td").html(rData.data.isp.isp);' . "\r\n\t\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t\t" . 'if ("organization" in rData.data.isp) {' . "\r\n\t\t\t\t\t\t\t" . '$(rRows[8]).find("td").html(rData.data.isp.organization);' . "\r\n\t\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t\t" . 'if (("autonomous_system_number" in rData.data.isp) && ("autonomous_system_organization" in rData.data.isp)) {' . "\r\n\t\t\t\t\t\t\t" . '$(rRows[9]).find("td").html("AS" + rData.data.isp.autonomous_system_number.toString() + " - " + rData.data.isp.autonomous_system_organization);' . "\r\n\t\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'if (("location" in rData.data) && ("time_zone" in rData.data.location)) {' . "\r\n\t\t\t\t\t\t" . '$(rRows[11]).find("td").html(rData.data.location.time_zone);' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'if (("location" in rData.data) && ("time" in rData.data.location)) {' . "\r\n\t\t\t\t\t\t" . '$(rRows[12]).find("td").html(rData.data.location.time);' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(".bs-whois-modal-center").modal("show");' . "\r\n\t\t" . '}' . "\r\n" . '        </script>' . "\r\n" . '        <script id="scripts">' . "\r\n\t\t" . '$(document).ready(function() {' . "\r\n" . '            $("form").attr(\'autocomplete\', \'off\');' . "\r\n\t\t\t" . '$(document).keypress(function(event){' . "\r\n\t\t\t\t" . 'if(event.which == 13 && event.target.nodeName != "TEXTAREA") return false;' . "\r\n\t\t\t" . '});' . "\r\n" . '            $.fn.dataTable.ext.errMode = \'none\';' . "\r\n" . '            var elems = Array.prototype.slice.call(document.querySelectorAll(\'.js-switch\'));' . "\r\n\t\t\t" . 'elems.forEach(function(html) {' . "\r\n\t\t\t" . '  var switchery = new Switchery(html);' . "\r\n\t\t\t" . '  window.rSwitches[$(html).attr("id")] = switchery;' . "\r\n\t\t\t" . '});' . "\r\n" . '            setTimeout(pingSession, 30000);' . "\r\n" . '            ';
goto label714;

label1108:

echo "\t\t\t\t\t" . '{"orderable": false, "targets": [1,4,5]},' . "\r\n\t\t\t\t\t";

label1109:

echo "\t\t\t\t" . '],' . "\r\n" . '                ';

if (!$Ebb0b63f7c597ba4) {
	goto label15;
}

echo 'scrollX: true,';
goto label15;

label1115:

echo '                        $("#package_cost").val(rData.data.cost_credits);' . "\r\n" . '                        $("#package_duration").val(rData.data.duration);' . "\r\n" . '                        $("#package_info").show();' . "\r\n" . '                        $("#submit_button").val("Purchase");' . "\r\n" . '                    }' . "\r\n" . '                    rTable.draw();' . "\r\n" . '                });' . "\r\n" . '            } else {' . "\r\n" . '                ';

if (!isset($F5ba2106d5227309)) {
	goto label877;
}

echo '                $("#max_connections").val(';
echo $F5ba2106d5227309['max_connections'];
echo ');' . "\r\n" . '                $("#cost_credits").html(0);' . "\r\n" . '                $("#remaining_credits").html($.number(';
goto label697;

label1125:

echo '\');' . "\r\n" . '                $("#package_cost").val("");' . "\r\n" . '                $("#package_duration").val("");' . "\r\n" . '                $("#package_info").hide();' . "\r\n" . '                $("#package_warning").hide();' . "\r\n" . '                $("#submit_button").val("Save");' . "\r\n" . '                ';

if ($f9eeeff050988ba5 = $db0a61ef32b89a27['allow_change_bouquets']) {
	goto label1132;
}

$Df5cd7b5dc4cc10c = NULL;
goto label855;

label1132:

goto label844;

label1133:

echo in_array(strtolower(XUI::$rRequest['dir']), ['asc', 'desc']) ? strtolower(XUI::$rRequest['dir']) : 'desc';
echo '" ]],' . "\r\n\t\t\t\t";
goto label1738;

label1154:

echo "\t\t\t\t" . 'order: [[ ';
goto label1705;

label1156:

echo intval($f1dcaed925076e67['default_entries']) ?: 10;
echo '").trigger(\'change\');' . "\r\n\t\t\t" . 'window.rClearing = false;' . "\r\n\t\t\t" . '$(\'#datatable-activity\').DataTable().search($("#live_search").val());' . "\r\n\t\t\t" . '$(\'#datatable-activity\').DataTable().page.len($(\'#live_show_entries\').val());' . "\r\n\t\t\t" . '$("#datatable-activity").DataTable().page(0).draw(\'page\');' . "\r\n\t\t\t" . '$("#datatable-activity").DataTable().ajax.reload( null, false );' . "\r\n" . '            delParams(["search", "stream", "line", "user", "page", "entries"]);' . "\r\n\t\t\t" . 'checkClear();' . "\r\n\t\t" . '}' . "\r\n" . '        function checkClear() {' . "\r\n\t\t\t" . 'if (!hasParams(["search", "stream", "line", "user"])) {' . "\r\n\t\t\t\t" . '$("#clearFilters").prop("disabled", true);' . "\r\n\t\t\t" . '} else {' . "\r\n\t\t\t\t" . '$("#clearFilters").prop("disabled", false);' . "\r\n\t\t\t" . '}' . "\r\n\t\t" . '}' . "\r\n" . '        var rSearch;' . "\r\n\t\t" . '$(document).ready(function() {' . "\r\n\t\t\t" . '$(\'select\').select2({width: \'100%\'});' . "\r\n" . '            $(\'#live_line\').select2({' . "\r\n\t\t\t" . '  ajax: {' . "\r\n\t\t\t\t" . 'url: \'./api\',' . "\r\n\t\t\t\t" . 'dataType: \'json\',' . "\r\n\t\t\t\t" . 'data: function (params) {' . "\r\n\t\t\t\t" . '  return {' . "\r\n\t\t\t\t\t" . 'search: params.term,' . "\r\n\t\t\t\t\t" . 'action: \'userlist\',' . "\r\n\t\t\t\t\t" . 'page: params.page' . "\r\n\t\t\t\t" . '  };' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'processResults: function (data, params) {' . "\r\n\t\t\t\t" . '  params.page = params.page || 1;' . "\r\n\t\t\t\t" . '  return {' . "\r\n\t\t\t\t\t" . 'results: data.items,' . "\r\n\t\t\t\t\t" . 'pagination: {' . "\r\n\t\t\t\t\t\t" . 'more: (params.page * 100) < data.total_count' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '  };' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'cache: true,' . "\r\n\t\t\t\t" . 'width: "100%"' . "\r\n\t\t\t" . '  },' . "\r\n\t\t\t" . '  placeholder: \'All Lines\'' . "\r\n\t\t\t" . '});' . "\r\n" . '            $(\'#live_stream\').select2({' . "\r\n\t\t\t" . '  ajax: {' . "\r\n\t\t\t\t" . 'url: \'./api\',' . "\r\n\t\t\t\t" . 'dataType: \'json\',' . "\r\n\t\t\t\t" . 'data: function (params) {' . "\r\n\t\t\t\t" . '  return {' . "\r\n\t\t\t\t\t" . 'search: params.term,' . "\r\n\t\t\t\t\t" . 'action: \'streamlist\',' . "\r\n\t\t\t\t\t" . 'page: params.page' . "\r\n\t\t\t\t" . '  };' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'processResults: function (data, params) {' . "\r\n\t\t\t\t" . '  params.page = params.page || 1;' . "\r\n\t\t\t\t" . '  return {' . "\r\n\t\t\t\t\t" . 'results: data.items,' . "\r\n\t\t\t\t\t" . 'pagination: {' . "\r\n\t\t\t\t\t\t" . 'more: (params.page * 100) < data.total_count' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '  };' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'cache: true,' . "\r\n\t\t\t\t" . 'width: "100%"' . "\r\n\t\t\t" . '  },' . "\r\n\t\t\t" . '  placeholder: \'All Streams\'' . "\r\n\t\t\t" . '});' . "\r\n" . '            var rPage = getParam("page");' . "\r\n" . '            if (!rPage) { rPage = 1; }' . "\r\n" . '            var rEntries = getParam("entries");' . "\r\n" . '            if (!rEntries) { rEntries = ';
echo intval($f1dcaed925076e67['default_entries']);
echo '; }' . "\r\n\t\t\t" . 'var rTable = $("#datatable-activity").DataTable({' . "\r\n\t\t\t\t" . 'language: {' . "\r\n\t\t\t\t\t" . 'paginate: {' . "\r\n\t\t\t\t\t\t" . 'previous: "<i class=\'mdi mdi-chevron-left\'>",' . "\r\n\t\t\t\t\t\t" . 'next: "<i class=\'mdi mdi-chevron-right\'>"' . "\r\n\t\t\t\t\t" . '},' . "\r\n\t\t\t\t\t" . 'infoFiltered: ""' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'drawCallback: function() {' . "\r\n" . '                    bindHref(); refreshTooltips();' . "\r" . '                    if ($("#datatable-activity").DataTable().page.info().page > 0) {' . "\r\n" . '                        setParam("page", $("#datatable-activity").DataTable().page.info().page+1);' . "\r\n" . '                    } else {' . "\r\n" . '                        delParam("page");' . "\r\n" . '                    }' . "\r\n" . '                    var rOrder = $("#datatable-activity").DataTable().order()[0];' . "\r\n" . '                    setParam("order", rOrder[0]); setParam("dir", rOrder[1]);' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'responsive: false,' . "\r\n\t\t\t\t" . 'processing: true,' . "\r\n\t\t\t\t" . 'serverSide: true,' . "\r\n" . '                searchDelay: 250,' . "\r\n\t\t\t\t" . 'ajax: {' . "\r\n\t\t\t\t\t" . 'url: "./table",' . "\r\n\t\t\t\t\t" . '"data": function(d) {' . "\r\n\t\t\t\t\t\t" . 'd.id = "live_connections";' . "\r\n" . '                        d.line = getLine();' . "\r\n\t\t\t\t\t\t" . 'd.stream = getStream();' . "\r\n\t\t\t\t\t\t" . 'd.user = getUser();' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'columnDefs: [' . "\r\n\t\t\t\t\t" . '{"className": "dt-center", "targets": [1,6,7,8,9]},' . "\r\n" . '                    {"className": "ellipsis", "targets": [4]},' . "\r\n" . '                    {"visible": false, "targets": [0]}' . "\r\n\t\t\t\t" . '],' . "\r\n" . '                ';

if (!$Ebb0b63f7c597ba4) {
	goto label1075;
}

goto label1074;

label1174:

echo ', "';
echo in_array(strtolower(XUI::$rRequest['dir']), ['asc', 'desc']) ? strtolower(XUI::$rRequest['dir']) : 'desc';
echo '" ]],' . "\r\n\t\t\t\t" . 'pageLength: parseInt(rEntries),' . "\r\n\t\t\t\t" . 'lengthMenu: [10, 25, 50, 250, 500, 1000],' . "\r\n" . '                displayStart: (parseInt(rPage)-1) * parseInt(rEntries)' . "\r\n\t\t\t" . '});' . "\r\n" . '            function doSearch(rValue) {' . "\r\n" . '                clearTimeout(window.rSearch); window.rSearch = setTimeout(function(){ rTable.search(rValue).draw(); }, 500);' . "\r\n" . '            }' . "\r\n\t\t\t" . '$("#datatable-users").css("width", "100%");' . "\r\n\t\t\t" . '$(\'#user_search\').keyup(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n\t\t\t\t\t" . 'if ($("#user_search").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("search", $("#user_search").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("search");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'doSearch($(this).val());' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#user_show_entries\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n\t\t\t\t\t" . 'if ($("#user_show_entries").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("entries", $("#user_show_entries").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("entries");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'rTable.page.len($(this).val()).draw();' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#user_filter\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n\t\t\t\t\t" . 'if ($("#user_filter").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("filter", $("#user_filter").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("filter");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'rTable.ajax.reload( null, false );' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#user_reseller\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n\t\t\t\t\t" . 'if ($("#user_reseller").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("owner", $("#user_reseller").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("owner");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'rTable.ajax.reload( null, false );' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . 'if ($(\'#user_search\').val()) {' . "\r\n\t\t\t\t" . 'rTable.search($(\'#user_search\').val()).draw();' . "\r\n\t\t\t" . '}' . "\r\n" . '            checkClear();' . "\r\n\t\t" . '});' . "\r\n" . '        ';

label1195:

goto label1649;
goto label913;

label1197:

echo $_['device_delete_confirm'];
echo '",' . "\r\n" . '                    confirm: function () {' . "\r\n" . '                        api(rID, rType, true);' . "\r\n" . '                    }' . "\r\n" . '                }).open();' . "\r\n" . '            } else if ((rType == "convert") && (!rConfirm)) {' . "\r\n" . '                new jBox("Confirm", {' . "\r\n" . '                    confirmButton: "Convert",' . "\r\n" . '                    cancelButton: "Cancel",' . "\r\n" . '                    content: "Are you sure you want to conver this Device to a User Line?",' . "\r\n" . '                    confirm: function () {' . "\r\n" . '                        api(rID, rType, true);' . "\r\n" . '                    }' . "\r\n" . '                }).open();' . "\r\n" . '            } else if ((rType == "kill_line") && (!rConfirm)) {' . "\r\n" . '                new jBox("Confirm", {' . "\r\n" . '                    confirmButton: "Kill",' . "\r\n" . '                    cancelButton: "Cancel",' . "\r\n" . '                    content: "Are you sure you want to kill all connections for this line?",' . "\r\n" . '                    confirm: function () {' . "\r\n" . '                        api(rID, rType, true);' . "\r\n" . '                    }' . "\r\n" . '                }).open();' . "\r\n\t\t\t" . '} else {' . "\r\n" . '                rConfirm = true;' . "\r\n" . '            }' . "\r\n" . '            if (rConfirm) {' . "\r\n" . '                $.getJSON("./api?action=mag&sub=" + rType + "&mag_id=" + rID, function(data) {' . "\r\n" . '                    if (data.result === true) {' . "\r\n" . '                        if (rType == "delete") {' . "\r\n" . '                            $.toast("';
echo $_['device_confirmed_1'];
echo '");' . "\r\n" . '                        } else if (rType == "enable") {' . "\r\n" . '                            $.toast("';
echo $_['device_confirmed_2'];
goto label1506;

label1206:

echo implode(',', array_map('intval', json_decode($F5ba2106d5227309['bouquet'], true)) ?: []);
echo '];' . "\r\n" . '        ';

label1223:

echo '        ' . "\r\n" . '        function getPackage() {' . "\r\n" . '            var rTable = $(\'#datatable-review\').DataTable();' . "\r\n" . '            rTable.clear();' . "\r\n" . '            rTable.draw();' . "\r\n" . '            if ($("#package").val().length > 0) {' . "\r\n" . '                $.getJSON("./api?action=get_package';
if (!(isset(XUI::$rRequest['trial']) && !isset($F5ba2106d5227309))) {
	goto label896;
}

goto label895;

label1234:

echo $_['device_delete_confirm'];
echo '",' . "\r\n" . '                    confirm: function () {' . "\r\n" . '                        api(rID, rType, true);' . "\r\n" . '                    }' . "\r\n" . '                }).open();' . "\r\n" . '            } else if ((rType == "convert") && (!rConfirm)) {' . "\r\n" . '                new jBox("Confirm", {' . "\r\n" . '                    confirmButton: "Convert",' . "\r\n" . '                    cancelButton: "Cancel",' . "\r\n" . '                    content: "Are you sure you want to conver this Device to a User Line?",' . "\r\n" . '                    confirm: function () {' . "\r\n" . '                        api(rID, rType, true);' . "\r\n" . '                    }' . "\r\n" . '                }).open();' . "\r\n" . '            } else if ((rType == "kill_line") && (!rConfirm)) {' . "\r\n" . '                new jBox("Confirm", {' . "\r\n" . '                    confirmButton: "Kill",' . "\r\n" . '                    cancelButton: "Cancel",' . "\r\n" . '                    content: "Are you sure you want to kill all connections for this line?",' . "\r\n" . '                    confirm: function () {' . "\r\n" . '                        api(rID, rType, true);' . "\r\n" . '                    }' . "\r\n" . '                }).open();' . "\r\n\t\t\t" . '} else {' . "\r\n" . '                rConfirm = true;' . "\r\n" . '            }' . "\r\n" . '            if (rConfirm) {' . "\r\n" . '                $.getJSON("./api?action=enigma&sub=" + rType + "&e2_id=" + rID, function(data) {' . "\r\n" . '                    if (data.result === true) {' . "\r\n" . '                        if (rType == "delete") {' . "\r\n" . '                            $.toast("';
echo $_['device_confirmed_1'];
echo '");' . "\r\n" . '                        } else if (rType == "enable") {' . "\r\n" . '                            $.toast("';
echo $_['device_confirmed_2'];
goto label1514;

label1243:

echo "\t\t\t\t" . 'pageLength: parseInt(rEntries),' . "\r\n\t\t\t\t" . 'lengthMenu: [10, 25, 50, 250, 500, 1000],' . "\r\n" . '                displayStart: (parseInt(rPage)-1) * parseInt(rEntries)' . "\r\n\t\t\t" . '});' . "\r\n" . '            function doSearch(rValue) {' . "\r\n" . '                clearTimeout(window.rSearch); window.rSearch = setTimeout(function(){ rTable.search(rValue).draw(); }, 500);' . "\r\n" . '            }' . "\r\n\t\t\t" . '$("#datatable-streampage").css("width", "100%");' . "\r\n\t\t\t" . '$(\'#movies_search\').keyup(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n" . '                    if ($("#movies_search").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("search", $("#movies_search").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("search");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'doSearch($(this).val());' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '})' . "\r\n\t\t\t" . '$(\'#movies_show_entries\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n" . '                    if ($("#movies_show_entries").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("entries", $("#movies_show_entries").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("entries");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'rTable.page.len($(this).val()).draw();' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#movies_category_id\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n" . '                    if ($("#movies_category_id").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("category", $("#movies_category_id").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("category");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'rTable.ajax.reload( null, false );' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . 'if ($(\'#movies_search\').val()) {' . "\r\n\t\t\t\t" . 'rTable.search($(\'#movies_search\').val()).draw();' . "\r\n\t\t\t" . '}' . "\r\n" . '            checkClear();' . "\r\n\t\t" . '});' . "\r\n" . '        ' . "\r\n\t\t";

label1244:

goto label890;

label1245:

echo '        ' . "\r\n\t\t" . 'var rClearing = false;' . "\r\n\r\n\t\t" . 'function api(rID, rType, rConfirm=false) {' . "\r\n" . '            if ((rType == "delete") && (!rConfirm)) {' . "\r\n" . '                new jBox("Confirm", {' . "\r\n" . '                    confirmButton: "Delete",' . "\r\n" . '                    cancelButton: "Cancel",' . "\r\n" . '                    content: "';
goto label1197;

label1247:

echo intval($f1dcaed925076e67['default_entries']) ?: 10;
echo '").trigger(\'change\');' . "\r\n\t\t\t" . 'window.rClearing = false;' . "\r\n\t\t\t" . '$(\'#datatable-users\').DataTable().search($("#user_search").val());' . "\r\n\t\t\t" . '$(\'#datatable-users\').DataTable().page.len($(\'#user_show_entries\').val());' . "\r\n\t\t\t" . '$("#datatable-users").DataTable().page(0).draw(\'page\');' . "\r\n\t\t\t" . '$("#datatable-users").DataTable().ajax.reload( null, false );' . "\r\n" . '            delParams(["search", "filter", "owner", "page", "entries"]);' . "\r\n\t\t\t" . 'checkClear();' . "\r\n\t\t" . '}' . "\r\n" . '        function checkClear() {' . "\r\n\t\t\t" . 'if (!hasParams(["search", "filter", "owner"])) {' . "\r\n\t\t\t\t" . '$("#clearFilters").prop("disabled", true);' . "\r\n\t\t\t" . '} else {' . "\r\n\t\t\t\t" . '$("#clearFilters").prop("disabled", false);' . "\r\n\t\t\t" . '}' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function refreshTable() {' . "\r\n\t\t\t" . '$("#datatable-users").DataTable().ajax.reload( null, false );' . "\r\n\t\t" . '}' . "\r\n" . '        var rSearch;' . "\r\n\t\t" . '$(document).ready(function() {' . "\r\n" . '            $("#output_type").change(function() {' . "\r\n" . '                $("#download_type").trigger("change");' . "\r\n" . '            });' . "\r\n" . '            $("#download_type").change(function() {' . "\r\n" . '                if ($("#download_type").val()) {' . "\r\n" . '                    ';
$A7ca171405b19571 = (empty($E59d0debc75e7be8['reseller_dns']) ? rtrim(XUI::$rServers[SERVER_ID]['site_url'], '/') : (XUI::$rSettings['reseller_ssl_domain'] && XUI::$rServers[SERVER_ID]['enable_https'] ? 'https://' . htmlspecialchars($E59d0debc75e7be8['reseller_dns']) . ':' . intval(XUI::$rServers[SERVER_ID]['https_broadcast_port']) : 'http://' . htmlspecialchars($E59d0debc75e7be8['reseller_dns']) . ':' . intval(XUI::$rServers[SERVER_ID]['http_broadcast_port'])));
echo '                    rText = "';
echo $A7ca171405b19571;
goto label1636;

label1312:

echo $F5ba2106d5227309['max_connections'];
echo ');' . "\r\n" . '                $("#cost_credits").html(0);' . "\r\n" . '                $("#remaining_credits").html($.number(';
echo $E59d0debc75e7be8['credits'];
echo ', 0));' . "\r\n" . '                $("#exp_date").val(\'';
echo date($f1dcaed925076e67['date_format'] . ' H:i', $F5ba2106d5227309['exp_date']);
goto label1125;

label1327:

if (!$Ebb0b63f7c597ba4) {
	goto label1331;
}

echo 'scrollX: true,';

label1331:

echo "\t\t\t\t";

if (XUI::$rSettings['redis_handler']) {
	goto label437;
}

goto label766;

label1337:

echo '        var rUserPackage = null;' . "\r\n" . '        var rUserBouquet = [];' . "\r\n" . '        ';
goto label975;

label1339:

echo '        var rUserPackage = ';
echo intval($F5ba2106d5227309['package_id']) ?: 'null';
goto label957;

label1348:

if ($E8870c6f95210f68 == 'mags') {
	goto label1245;
}

if ($E8870c6f95210f68 == 'movies') {
	goto label759;
}

if ($E8870c6f95210f68 == 'radios') {
	goto label251;
}

if ($E8870c6f95210f68 == 'user') {
	goto label954;
}

if ($E8870c6f95210f68 == 'ticket') {
	goto label1011;
}

goto label1403;

label1364:

echo "\t\t\t\t\t" . '{"orderable": false, "targets": [9]},' . "\r\n\t\t\t\t\t";
goto label1367;

label1366:

echo "\t\t\t\t\t" . '{"orderable": false, "targets": [6,9]},' . "\r\n\t\t\t\t\t";

label1367:

goto label616;

label1368:

echo "\t\t\t\t" . 'order: [[ ';
echo isset(XUI::$rRequest['order']) ? intval(XUI::$rRequest['order']) : 2;
echo ', "';
echo in_array(strtolower(XUI::$rRequest['dir']), ['asc', 'desc']) ? strtolower(XUI::$rRequest['dir']) : 'asc';
echo '" ]],' . "\r\n\t\t\t\t";
goto label757;

label1403:

if ($E8870c6f95210f68 == 'user_logs') {
	goto label179;
}

if ($E8870c6f95210f68 == 'users') {
	goto label679;
}

if ($E8870c6f95210f68 == 'streams') {
	goto label935;
}

if ($E8870c6f95210f68 == 'created_channels') {
	goto label515;
}

if ($E8870c6f95210f68 == 'tickets') {
	goto label268;
}

goto label723;

label1419:

echo ', "';
echo in_array(strtolower(XUI::$rRequest['dir']), ['asc', 'desc']) ? strtolower(XUI::$rRequest['dir']) : 'desc';
echo '" ]],' . "\r\n\t\t\t\t";
goto label757;

label1441:

goto label1368;

label1442:

if (!isset($e6ceb472dd6d165f)) {
	goto label1450;
}

echo ' + "&orig_id=' . $e6ceb472dd6d165f['id'] . '"';

label1450:

echo ', function(rData) {' . "\r\n" . '                    if (rData.result === true) {' . "\r\n" . '                        $("#max_connections").val(rData.data.max_connections);' . "\r\n" . '                        $("#cost_credits").html($.number(rData.data.cost_credits, 0));' . "\r\n" . '                        $("#remaining_credits").html($.number(';
goto label34;

label1452:
if (!(isset(XUI::$rRequest['trial']) && !isset($F5ba2106d5227309))) {
	goto label1462;
}

echo '_trial';

label1462:

echo '&package_id=" + $("#package").val()';

if (!isset($F5ba2106d5227309)) {
	goto label997;
}

goto label993;

label1468:

echo E14531EB75c10786();
echo '</div>' . "\r\n" . '                </div>' . "\r\n" . '            </div>' . "\r\n" . '        </footer>' . "\r\n" . '        <script src="assets/js/vendor.min.js"></script>' . "\r\n" . '        <script src="assets/libs/jquery-toast/jquery.toast.min.js"></script>' . "\r\n" . '        <script src="assets/libs/jquery-nice-select/jquery.nice-select.min.js"></script>' . "\r\n" . '        <script src="assets/libs/switchery/switchery.min.js"></script>' . "\r\n" . '        <script src="assets/libs/select2/select2.min.js"></script>' . "\r\n" . '        <script src="assets/libs/nestable2/jquery.nestable.min.js"></script>' . "\r\n" . '        <script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>' . "\r\n" . '        <script src="assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>' . "\r\n" . '        <script src="assets/libs/clockpicker/bootstrap-clockpicker.min.js"></script>' . "\r\n" . '        <script src="assets/libs/moment/moment.min.js"></script>' . "\r\n" . '        <script src="assets/libs/daterangepicker/daterangepicker.js"></script>' . "\r\n" . '        <script src="assets/libs/datatables/jquery.dataTables.min.js"></script>' . "\r\n" . '        <script src="assets/libs/datatables/dataTables.bootstrap4.js"></script>' . "\r\n" . '        <script src="assets/libs/datatables/dataTables.responsive.min.js"></script>' . "\r\n" . '        <script src="assets/libs/datatables/responsive.bootstrap4.min.js"></script>' . "\r\n" . '        <script src="assets/libs/datatables/dataTables.buttons.min.js"></script>' . "\r\n" . '        <script src="assets/libs/datatables/buttons.bootstrap4.min.js"></script>' . "\r\n" . '        <script src="assets/libs/datatables/buttons.html5.min.js"></script>' . "\r\n" . '        <script src="assets/libs/datatables/buttons.flash.min.js"></script>' . "\r\n" . '        <script src="assets/libs/datatables/buttons.print.min.js"></script>' . "\r\n" . '        <script src="assets/libs/datatables/dataTables.keyTable.min.js"></script>' . "\r\n" . '        <script src="assets/libs/datatables/dataTables.select.min.js"></script>' . "\r\n" . '        <script src="assets/libs/datatables/dataTables.rowReorder.js"></script>' . "\r\n" . '        <script src="assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>' . "\r\n" . '        <script src="assets/libs/treeview/jstree.min.js"></script>' . "\r\n" . '        <script src="assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>' . "\r\n" . '        <script src="assets/libs/jbox/jBox.all.min.js"></script>' . "\r\n" . '        <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>' . "\r\n" . '        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>' . "\r\n" . '        <script src="assets/libs/jquery-number/jquery.number.js"></script>' . "\r\n" . '        <script src="assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js"></script>' . "\r\n" . '        <script src="assets/libs/jquery-vectormap/jquery-jvectormap-world-mill-en.js"></script>' . "\r\n" . '        <script src="assets/libs/jquery-ui/jquery-ui.min.js"></script>' . "\r\n" . '        <script src="assets/libs/peity/jquery.peity.min.js"></script>' . "\r\n" . '        <script src="assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>' . "\r\n" . '        <script src="assets/libs/lazyload/lazyload.min.js"></script>' . "\r\n" . '        <script src="assets/libs/parsleyjs/parsley.min.js"></script>' . "\r\n" . '        <script src="assets/js/app.min.js"></script>' . "\r\n" . '        ';
include 'post.php';
echo '        <script>' . "\r\n" . '        var rRealURL = undefined;' . "\r\n" . '        var jBoxes = [];' . "\r\n" . '        var rSwitches = [];' . "\r\n" . '        ' . "\r\n\t\t" . 'window.XUI = window.XUI || {};' . "\r\n\t\t" . 'window.XUI.Listings = window.XUI.Listings || {};' . "\r\n\t\t\r\n" . '        $.fn.serializeObject = function() {' . "\r\n" . '            var o = {};' . "\r\n" . '            var a = this.serializeArray();' . "\r\n" . '            $.each(a, function() {' . "\r\n" . '                if (o[this.name]) {' . "\r\n" . '                    if (!o[this.name].push) {' . "\r\n" . '                        o[this.name] = [o[this.name]];' . "\r\n" . '                    }' . "\r\n" . '                    o[this.name].push(this.value || \'\');' . "\r\n" . '                } else {' . "\r\n" . '                    o[this.name] = this.value || \'\';' . "\r\n" . '                }' . "\r\n" . '            });' . "\r\n" . '            return o;' . "\r\n" . '        };' . "\r\n" . '        function showError(rText) {' . "\r\n" . '            $.toast({' . "\r\n" . '                text: rText,' . "\r\n" . '                icon: \'warning\',' . "\r\n" . '                loader: true,' . "\r\n" . '                loaderBg: \'#c62828\',' . "\r\n" . '                hideAfter: 8000' . "\r\n" . '            })' . "\r\n" . '        }' . "\r\n" . '        function showSuccess(rText) {' . "\r\n" . '            $.toast({' . "\r\n" . '                text: rText,' . "\r\n" . '                icon: \'success\',' . "\r\n" . '                loader: true,' . "\r\n" . '                hideAfter: 5000' . "\r\n" . '            })' . "\r\n" . '        }' . "\r\n" . '        function refreshCredits() {' . "\r\n" . '            $.getJSON("api?action=stats", function(data) {' . "\r\n" . '                if (data.owner_credits) {' . "\r\n" . '                    $("#owner_credits").html(parseInt(data.owner_credits).toLocaleString());' . "\r\n" . '                }' . "\r\n" . '            });' . "\r\n" . '        }' . "\r\n" . '        function findRowByID(rTable, rColumn, rID) {' . "\r\n" . '            for (rRow in rTable.rows()[0]) {' . "\r\n" . '                if (rTable.row(rRow).data()[rColumn] == rID) {' . "\r\n" . '                    return rRow;' . "\r\n" . '                }' . "\r\n" . '            }' . "\r\n" . '            return null;' . "\r\n" . '        }' . "\r\n" . '        function isValidDomain(domain) { ' . "\r\n\t\t\t" . 'var re = new RegExp(/^((?:(?:(?:\\w[\\.\\-\\+]?)*)\\w)+)((?:(?:(?:\\w[\\.\\-\\+]?){0,62})\\w)+)\\.(\\w{2,16})$/); ' . "\r\n\t\t\t" . 'return domain.match(re);' . "\r\n\t\t" . '} ' . "\r\n" . '        function isValidIP(rIP) {' . "\r\n\t\t\t" . 'if (/^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.test(rIP)) {' . "\r\n\t\t\t\t" . 'return true;' . "\r\n\t\t\t" . '} else {' . "\r\n\t\t\t\t" . 'return false;' . "\r\n\t\t\t" . '}' . "\r\n\t\t" . '}' . "\r\n" . '        function isValidDate(dateString) {' . "\r\n\t\t\t" . '  var regEx = /^\\d{4}-\\d{2}-\\d{2}$/;' . "\r\n\t\t\t" . '  if(!dateString.match(regEx)) return false;  // Invalid format' . "\r\n\t\t\t" . '  var d = new Date(dateString);' . "\r\n\t\t\t" . '  var dNum = d.getTime();' . "\r\n\t\t\t" . '  if(!dNum && dNum !== 0) return false; // NaN value, Invalid date' . "\r\n\t\t\t" . '  return d.toISOString().slice(0,10) === dateString;' . "\r\n\t\t" . '}' . "\r\n" . '        function isNumberKey(evt) {' . "\r\n\t\t\t" . 'var charCode = (evt.which) ? evt.which : evt.keyCode;' . "\r\n\t\t\t" . 'if (charCode != 46 && charCode != 45 && charCode > 31 && (charCode < 48 || charCode > 57)) {' . "\r\n\t\t\t\t" . 'return false;' . "\r\n\t\t\t" . '} else {' . "\r\n\t\t\t\t" . 'return true;' . "\r\n\t\t\t" . '}' . "\r\n\t\t" . '}' . "\r\n" . '        function pingSession() {' . "\r\n" . '            $.getJSON("./session", function(data) {' . "\r\n" . '                if (!data.result) {' . "\r\n" . '                    window.location.href = \'./login?referrer=\' + encodeURIComponent(location.href.split("/").slice(-1)[0]);' . "\r\n" . '                }' . "\r\n" . '            });' . "\r\n" . '            setTimeout(pingSession, 30000);' . "\r\n" . '        }' . "\r\n" . '        function setSwitch(switchElement, checkedBool) {' . "\r\n\t\t\t" . 'if((checkedBool && !switchElement.isChecked()) || (!checkedBool && switchElement.isChecked())) {' . "\r\n\t\t\t\t" . 'switchElement.setPosition(true);' . "\r\n\t\t\t\t" . 'switchElement.handleOnchange(true);' . "\r\n\t\t\t" . '}' . "\r\n\t\t" . '}' . "\r\n" . '        function headerStats() {' . "\r\n" . '            rURL = "./api?action=header_stats";' . "\r\n" . '            $.getJSON(rURL, function(data) {' . "\r\n" . '                $("#header_connections").html($.number(data.total_connections, 0));' . "\r\n" . '                $("#header_users").html($.number(data.total_users, 0));' . "\r\n" . '                setTimeout(headerStats, 1000);' . "\r\n" . '            }).fail(function() {' . "\r\n" . '                setTimeout(headerStats, 1000);' . "\r\n" . '            });' . "\r\n" . '        }' . "\r\n" . '        ';

if ($f1dcaed925076e67['js_navigate']) {
	goto label423;
}

goto label421;

label1478:

if (!$Ebb0b63f7c597ba4) {
	goto label1482;
}

echo 'scrollX: true,';

label1482:

echo "\t\t\t\t" . 'order: [[ ';
echo isset(XUI::$rRequest['order']) ? intval(XUI::$rRequest['order']) : 0;
goto label1174;

label1496:

echo "\t\t\t" . 'window.XUI.Listings.Category = ';
echo intval(XUI::$rRequest['category']);
echo ';' . "\r\n\t\t\t";

label1504:

echo "\t\t\t\r\n\t\t\t" . 'XUI.Listings.Settings.init();' . "\r\n\t\t\t" . 'XUI.Listings.Grid.init();' . "\r\n\t\t\t" . 'XUI.Listings.Nav.init();' . "\r\n\t\t" . '});' . "\r\n\t\t\r\n\t\t";
goto label1649;

label1506:

echo '");' . "\r\n" . '                        } else if (rType == "disable") {' . "\r\n" . '                            $.toast("';
echo $_['device_confirmed_3'];
echo '");' . "\r\n" . '                        } else if (rType == "convert") {' . "\r\n" . '                            if (data.line_id) {' . "\r\n" . '                                navigate("line?id=" + data.line_id);' . "\r\n" . '                            } else {' . "\r\n" . '                                $.toast("Failed to convert to user line.");' . "\r\n" . '                            }' . "\r\n" . '                        } else if (rType == "kill_line") {' . "\r\n" . '                            $.toast("All connections for this line have been killed.");' . "\r\n" . '                        } else if (rType == "reset_isp") {' . "\r\n" . '                            $.toast("ISP has been reset.");' . "\r\n" . '                        }' . "\r\n" . '                        $("#datatable-users").DataTable().ajax.reload(null, false);' . "\r\n" . '                    } else {' . "\r\n" . '                        $.toast("';
echo $_['error_occured'];
echo '");' . "\r\n" . '                    }' . "\r\n" . '                });' . "\r\n" . '            }' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function getFilter() {' . "\r\n\t\t\t" . 'return $("#mag_filter").val();' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function getReseller() {' . "\r\n\t\t\t" . 'return $("#mag_reseller").val();' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function clearFilters() {' . "\r\n\t\t\t" . 'window.rClearing = true;' . "\r\n\t\t\t" . '$("#mag_search").val("").trigger(\'change\');' . "\r\n\t\t\t" . '$(\'#mag_filter\').val("").trigger(\'change\');' . "\r\n\t\t\t" . '$(\'#mag_reseller\').val("").trigger(\'change\');' . "\r\n\t\t\t" . '$(\'#mag_show_entries\').val("';
goto label738;

label1514:

echo '");' . "\r\n" . '                        } else if (rType == "disable") {' . "\r\n" . '                            $.toast("';
echo $_['device_confirmed_3'];
echo '");' . "\r\n" . '                        } else if (rType == "convert") {' . "\r\n" . '                            if (data.line_id) {' . "\r\n" . '                                navigate("line?id=" + data.line_id);' . "\r\n" . '                            } else {' . "\r\n" . '                                $.toast("Failed to convert to user line.");' . "\r\n" . '                            }' . "\r\n" . '                        } else if (rType == "kill_line") {' . "\r\n" . '                            $.toast("All connections for this line have been killed.");' . "\r\n" . '                        } else if (rType == "reset_isp") {' . "\r\n" . '                            $.toast("ISP has been reset.");' . "\r\n" . '                        }' . "\r\n" . '                        $("#datatable-users").DataTable().ajax.reload(null, false);' . "\r\n" . '                    } else {' . "\r\n" . '                        $.toast("';
echo $_['error_occured'];
echo '");' . "\r\n" . '                    }' . "\r\n" . '                });' . "\r\n" . '            }' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function getFilter() {' . "\r\n\t\t\t" . 'return $("#e2_filter").val();' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function getReseller() {' . "\r\n\t\t\t" . 'return $("#e2_reseller").val();' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function clearFilters() {' . "\r\n\t\t\t" . 'window.rClearing = true;' . "\r\n\t\t\t" . '$("#e2_search").val("").trigger(\'change\');' . "\r\n\t\t\t" . '$(\'#e2_filter\').val("").trigger(\'change\');' . "\r\n\t\t\t" . '$(\'#e2_reseller\').val("").trigger(\'change\');' . "\r\n\t\t\t" . '$(\'#e2_show_entries\').val("';
goto label1602;

label1522:

echo isset(XUI::$rRequest['order']) ? intval(XUI::$rRequest['order']) : 6;
echo ', "';
echo in_array(strtolower(XUI::$rRequest['dir']), ['asc', 'desc']) ? strtolower(XUI::$rRequest['dir']) : 'desc';
echo '" ]],' . "\r\n" . '                pageLength: parseInt(rEntries),' . "\r\n\t\t\t\t" . 'lengthMenu: [10, 25, 50, 250, 500, 1000],' . "\r\n" . '                displayStart: (parseInt(rPage)-1) * parseInt(rEntries)' . "\r\n\t\t\t" . '});' . "\r\n" . '            function doSearch(rValue) {' . "\r\n" . '                clearTimeout(window.rSearch); window.rSearch = setTimeout(function(){ rTable.search(rValue).draw(); }, 500);' . "\r\n" . '            }' . "\r\n\t\t\t" . '$("#datatable-activity").css("width", "100%");' . "\r\n\t\t\t" . '$(\'#act_search\').keyup(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n\t\t\t\t\t" . 'doSearch($(this).val());' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '})' . "\r\n\t\t\t" . '$(\'#act_show_entries\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n\t\t\t\t\t" . 'rTable.page.len($(this).val()).draw();' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '})' . "\r\n\t\t\t" . '$(\'#act_filter\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n\t\t\t\t\t" . '$("#datatable-activity").DataTable().ajax.reload( null, false );' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '})' . "\r\n\t\t\t";

if (!isset(XUI::$rRequest['range'])) {
	goto label537;
}

goto label524;

label1561:

echo '").trigger(\'change\');' . "\r\n\t\t\t" . 'window.rClearing = false;' . "\r\n\t\t\t" . '$(\'#datatable-streampage\').DataTable().search($("#stream_search").val());' . "\r\n\t\t\t" . '$(\'#datatable-streampage\').DataTable().page.len($(\'#stream_show_entries\').val());' . "\r\n\t\t\t" . '$("#datatable-streampage").DataTable().page(0).draw(\'page\');' . "\r\n\t\t\t" . '$("#datatable-streampage").DataTable().ajax.reload( null, false );' . "\r\n\t\t\t" . 'delParams(["search", "category", "page", "entries"]);' . "\r\n\t\t\t" . 'checkClear();' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function checkClear() {' . "\r\n\t\t\t" . 'if (!hasParams(["search", "category"])) {' . "\r\n\t\t\t\t" . '$("#clearFilters").prop("disabled", true);' . "\r\n\t\t\t" . '} else {' . "\r\n\t\t\t\t" . '$("#clearFilters").prop("disabled", false);' . "\r\n\t\t\t" . '}' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function refreshTable() {' . "\r\n\t\t\t" . '$("#datatable-streampage").DataTable().ajax.reload( null, false );' . "\r\n\t\t" . '}' . "\r\n" . '        var rSearch;' . "\r\n\t\t" . '$(document).ready(function() {' . "\r\n\t\t\t" . '$(\'select\').select2({width: \'100%\'});' . "\r\n\t\t\t" . 'var rPage = getParam("page");' . "\r\n" . '            if (!rPage) { rPage = 1; }' . "\r\n" . '            var rEntries = getParam("entries");' . "\r\n" . '            if (!rEntries) { rEntries = ';
echo intval($f1dcaed925076e67['default_entries']);
echo '; }' . "\r\n\t\t\t" . 'var rTable = $("#datatable-streampage").DataTable({' . "\r\n\t\t\t\t" . 'language: {' . "\r\n\t\t\t\t\t" . 'paginate: {' . "\r\n\t\t\t\t\t\t" . 'previous: "<i class=\'mdi mdi-chevron-left\'>",' . "\r\n\t\t\t\t\t\t" . 'next: "<i class=\'mdi mdi-chevron-right\'>"' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'drawCallback: function() {' . "\r" . '                    bindHref(); refreshTooltips();' . "\r\n" . '                    if ($("#datatable-streampage").DataTable().page.info().page > 0) {' . "\r\n" . '                        setParam("page", $("#datatable-streampage").DataTable().page.info().page+1);' . "\r\n" . '                    } else {' . "\r\n" . '                        delParam("page");' . "\r\n" . '                    }' . "\r\n" . '                    var rOrder = $("#datatable-streampage").DataTable().order()[0];' . "\r\n" . '                    setParam("order", rOrder[0]); setParam("dir", rOrder[1]);' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'createdRow: function(row, data, index) {' . "\r\n\t\t\t\t\t" . '$(row).addClass(\'stream-\' + data[0]);' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'responsive: false,' . "\r\n\t\t\t\t" . 'processing: true,' . "\r\n\t\t\t\t" . 'serverSide: true,' . "\r\n" . '                searchDelay: 250,' . "\r\n\t\t\t\t" . 'ajax: {' . "\r\n\t\t\t\t\t" . 'url: "./table",' . "\r\n\t\t\t\t\t" . '"data": function(d) {' . "\r\n\t\t\t\t\t\t" . 'd.id = "streams",' . "\r\n\t\t\t\t\t\t" . 'd.category = getCategory();' . "\r\n" . '                        d.created = true;' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'columnDefs: [' . "\r\n\t\t\t\t\t" . '{"className": "dt-center", "targets": [0,1,4,5]},' . "\r\n\t\t\t\t\t";

if (XUI::$rSettings['redis_handler']) {
	goto label1097;
}

echo "\t\t\t\t\t" . '{"orderable": false, "targets": [1,5]},' . "\r\n\t\t\t\t\t";
goto label1096;

label1574:

echo "\t\t\t\t";

if (XUI::$rSettings['redis_handler']) {
	goto label1678;
}

echo "\t\t\t\t" . 'order: [[ ';
echo isset(XUI::$rRequest['order']) ? intval(XUI::$rRequest['order']) : 4;
echo ', "';
goto label1657;

label1594:

goto label1759;

label1595:

echo ', rData.bouquets[rIndex].bouquet_name, rData.bouquets[rIndex].bouquet_channels.length, rData.bouquets[rIndex].bouquet_movies.length, rData.bouquets[rIndex].bouquet_series.length, rData.bouquets[rIndex].bouquet_radios.length]);' . "\r\n" . '                        });' . "\r\n" . '                        if (rData.data.compatible) {' . "\r\n" . '                            $("#package_warning").hide();' . "\r\n" . '                        } else {' . "\r\n" . '                            $("#package_warning").show();' . "\r\n" . '                        }' . "\r\n" . '                        ';

if (!$db0a61ef32b89a27['allow_restrictions']) {
	goto label1601;
}

echo "\t\t\t\t\t\t" . 'if (rData.data.is_isplock == 1) {' . "\r\n\t\t\t\t\t\t\t" . 'setSwitch(window.rSwitches["is_isplock"], true);' . "\r\n\t\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t\t" . 'setSwitch(window.rSwitches["is_isplock"], false);' . "\r\n\t\t\t\t\t\t" . '}' . "\r\n" . '                        ';

label1601:

goto label1115;

label1602:

echo intval($f1dcaed925076e67['default_entries']) ?: 10;
echo '").trigger(\'change\');' . "\r\n\t\t\t" . 'window.rClearing = false;' . "\r\n\t\t\t" . '$(\'#datatable-users\').DataTable().search($("#e2_search").val());' . "\r\n\t\t\t" . '$(\'#datatable-users\').DataTable().page.len($(\'#e2_show_entries\').val());' . "\r\n\t\t\t" . '$("#datatable-users").DataTable().page(0).draw(\'page\');' . "\r\n\t\t\t" . '$("#datatable-users").DataTable().ajax.reload( null, false );' . "\r\n" . '            delParams(["search", "filter", "owner", "page", "entries"]);' . "\r\n\t\t\t" . 'checkClear();' . "\r\n\t\t" . '}' . "\r\n" . '        function checkClear() {' . "\r\n\t\t\t" . 'if (!hasParams(["search", "filter", "owner"])) {' . "\r\n\t\t\t\t" . '$("#clearFilters").prop("disabled", true);' . "\r\n\t\t\t" . '} else {' . "\r\n\t\t\t\t" . '$("#clearFilters").prop("disabled", false);' . "\r\n\t\t\t" . '}' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function refreshTable() {' . "\r\n\t\t\t" . '$("#datatable-users").DataTable().ajax.reload( null, false );' . "\r\n\t\t" . '}' . "\r\n" . '        var rSearch;' . "\r\n\t\t" . '$(document).ready(function() {' . "\r\n\t\t\t" . '$(\'select\').select2({width: \'100%\'});' . "\r\n\t\t\t" . 'var rPage = getParam("page");' . "\r\n" . '            if (!rPage) { rPage = 1; }' . "\r\n" . '            var rEntries = getParam("entries");' . "\r\n" . '            if (!rEntries) { rEntries = ';
echo intval($f1dcaed925076e67['default_entries']);
echo '; }' . "\r\n\t\t\t" . 'var rTable = $("#datatable-users").DataTable({' . "\r\n\t\t\t\t" . 'language: {' . "\r\n\t\t\t\t\t" . 'paginate: {' . "\r\n\t\t\t\t\t\t" . 'previous: "<i class=\'mdi mdi-chevron-left\'>",' . "\r\n\t\t\t\t\t\t" . 'next: "<i class=\'mdi mdi-chevron-right\'>",' . "\r\n\t\t\t\t\t" . '},' . "\r\n\t\t\t\t\t" . 'infoFiltered: ""' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'drawCallback: function() {' . "\r\n\t\t\t\t\t" . 'bindHref(); refreshTooltips();' . "\r\n" . '                    if ($("#datatable-users").DataTable().page.info().page > 0) {' . "\r\n" . '                        setParam("page", $("#datatable-users").DataTable().page.info().page+1);' . "\r\n" . '                    } else {' . "\r\n" . '                        delParam("page");' . "\r\n" . '                    }' . "\r\n" . '                    var rOrder = $("#datatable-users").DataTable().order()[0];' . "\r\n" . '                    setParam("order", rOrder[0]); setParam("dir", rOrder[1]);' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'createdRow: function(row, data, index) {' . "\r\n\t\t\t\t\t" . '$(row).addClass(\'user-\' + data[0]);' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'responsive: false,' . "\r\n\t\t\t\t" . 'processing: true,' . "\r\n\t\t\t\t" . 'serverSide: true,' . "\r\n" . '                searchDelay: 250,' . "\r\n\t\t\t\t" . 'ajax: {' . "\r\n\t\t\t\t\t" . 'url: "./table",' . "\r\n\t\t\t\t\t" . '"data": function(d) {' . "\r\n\t\t\t\t\t\t" . 'd.id = "enigmas",' . "\r\n\t\t\t\t\t\t" . 'd.filter = getFilter(),' . "\r\n\t\t\t\t\t\t" . 'd.reseller = getReseller()' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'columnDefs: [' . "\r\n\t\t\t\t\t" . '{"className": "dt-center", "targets": [0,2,3,5,6,7,8,9]},' . "\r\n\t\t\t\t\t";

if (XUI::$rSettings['redis_handler']) {
	goto label1366;
}

goto label1364;

label1621:

echo '; }' . "\r\n\t\t\t" . 'var rTable = $("#datatable-users").DataTable({' . "\r\n\t\t\t\t" . 'language: {' . "\r\n\t\t\t\t\t" . 'paginate: {' . "\r\n\t\t\t\t\t\t" . 'previous: "<i class=\'mdi mdi-chevron-left\'>",' . "\r\n\t\t\t\t\t\t" . 'next: "<i class=\'mdi mdi-chevron-right\'>"' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'drawCallback: function() {' . "\r\t\t\t\t\t" . 'bindHref(); refreshTooltips();' . "\r\n" . '                    if ($("#datatable-users").DataTable().page.info().page > 0) {' . "\r\n" . '                        setParam("page", $("#datatable-users").DataTable().page.info().page+1);' . "\r\n" . '                    } else {' . "\r\n" . '                        delParam("page");' . "\r\n" . '                    }' . "\r\n" . '                    var rOrder = $("#datatable-users").DataTable().order()[0];' . "\r\n" . '                    setParam("order", rOrder[0]); setParam("dir", rOrder[1]);' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'createdRow: function(row, data, index) {' . "\r\n\t\t\t\t\t" . '$(row).addClass(\'user-\' + data[0]);' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'responsive: false,' . "\r\n\t\t\t\t" . 'processing: true,' . "\r\n\t\t\t\t" . 'serverSide: true,' . "\r\n" . '                searchDelay: 250,' . "\r\n\t\t\t\t" . 'ajax: {' . "\r\n\t\t\t\t\t" . 'url: "./table",' . "\r\n\t\t\t\t\t" . '"data": function(d) {' . "\r\n\t\t\t\t\t\t" . 'd.id = "reg_users",' . "\r\n\t\t\t\t\t\t" . 'd.filter = getFilter(),' . "\r\n\t\t\t\t\t\t" . 'd.reseller = getReseller()' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'columnDefs: [' . "\r\n\t\t\t\t\t" . '{"className": "dt-center", "targets": [0,3,4,5,6,7,8]},' . "\r\n\t\t\t\t" . '],' . "\r\n" . '                ';

if (!$Ebb0b63f7c597ba4) {
	goto label1626;
}

echo 'scrollX: true,';

label1626:

echo "\t\t\t\t" . 'order: [[ ';
goto label189;

label1628:

echo '...\',' . "\r\n\t\t\t" . '  width: "100%"' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$("#message_submit").click(function() {' . "\r\n\t\t\t\t" . 'rArray = {"id": $(\'.messageModal\').data(\'id\'), "type": $("#message_type").val()};' . "\r\n\t\t\t\t" . 'if (rArray.type) {' . "\r\n\t\t\t\t\t" . 'if (rArray.type == "send_msg") {' . "\r\n\t\t\t\t\t\t" . 'rArray.message = $("#message").val();' . "\r\n\t\t\t\t\t\t" . 'if ($("#reboot_portal").is(":checked")) {' . "\r\n\t\t\t\t\t\t\t" . 'rArray.reboot_portal = 1;' . "\r\n\t\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t\t" . 'rArray.reboot_portal = 0;' . "\r\n\t\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . '} else if (rArray.type == "play_channel") {' . "\r\n\t\t\t\t\t\t" . 'rArray.channel = $("#selected_channel").val();' . "\r\n\t\t\t\t\t\t" . 'if (!rArray.channel) {' . "\r\n\t\t\t\t\t\t\t" . 'rArray.channel = "";' . "\r\n\t\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'if ((rArray.type == "send_msg") && (rArray.message.length == 0)) {' . "\r\n\t\t\t\t\t\t" . '$.toast("';
echo $_['mag_toast_1'];
echo '.");' . "\r\n\t\t\t\t\t" . '} else if ((rArray.type == "play_channel") && (rArray.channel.length == 0)) {' . "\r\n\t\t\t\t\t\t" . '$.toast("';
echo $_['mag_toast_2'];
echo '.");' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . '$(\'.messageModal\').modal(\'hide\');' . "\r\n\t\t\t\t\t\t" . '$.getJSON("./api?action=send_event&data=" + encodeURIComponent(JSON.stringify(rArray)), function(data) {' . "\r\n\t\t\t\t\t\t\t" . 'if (data.result === true) {' . "\r\n\t\t\t\t\t\t\t\t" . '$.toast("';
goto label884;

label1636:

echo '/playlist/" + $(\'.downloadModal\').data(\'username\') + "/" + $(\'.downloadModal\').data(\'password\') + "/" + decodeURIComponent($(\'.downloadModal select\').val());' . "\r\n" . '                    if ($("#output_type").val().length > 0) {' . "\r\n" . '                        if (rText.indexOf(\'?output=\') != -1) {' . "\r\n" . '                            rText = rText + "&key=" + $("#output_type").val().join(",");' . "\r\n" . '                        } else {' . "\r\n" . '                            rText = rText + "?key=" + $("#output_type").val().join(",");' . "\r\n" . '                        }' . "\r\n" . '                    }' . "\r\n" . '                    if ($("#download_type").find(\':selected\').data(\'text\')) {' . "\r\n" . '                        rText = $("#download_type").find(\':selected\').data(\'text\').replace("{DEVICE_LINK}", \'"\' + rText + \'"\');' . "\r\n" . '                        $("#download_button").attr("disabled", true);' . "\r\n" . '                    } else {' . "\r\n" . '                        $("#download_button").attr("disabled", false);' . "\r\n" . '                    }' . "\r\n" . '                    $("#download_url").val(rText);' . "\r\n" . '                } else {' . "\r\n" . '                    $("#download_url").val("");' . "\r\n" . '                }' . "\r\n" . '            });' . "\r\n\t\t\t" . '$(\'select\').select2({width: \'100%\'});' . "\r\n" . '            var rPage = getParam("page");' . "\r\n" . '            if (!rPage) { rPage = 1; }' . "\r\n" . '            var rEntries = getParam("entries");' . "\r\n" . '            if (!rEntries) { rEntries = ';
echo intval($f1dcaed925076e67['default_entries']);
echo '; }' . "\r\n\t\t\t" . 'var rTable = $("#datatable-users").DataTable({' . "\r\n\t\t\t\t" . 'language: {' . "\r\n\t\t\t\t\t" . 'paginate: {' . "\r\n\t\t\t\t\t\t" . 'previous: "<i class=\'mdi mdi-chevron-left\'>",' . "\r\n\t\t\t\t\t\t" . 'next: "<i class=\'mdi mdi-chevron-right\'>",' . "\r\n\t\t\t\t\t" . '},' . "\r\n\t\t\t\t\t" . 'infoFiltered: ""' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'drawCallback: function() {' . "\r\t\t\t\t\t" . 'bindHref(); refreshTooltips();' . "\r\n" . '                    if ($("#datatable-users").DataTable().page.info().page > 0) {' . "\r\n" . '                        setParam("page", $("#datatable-users").DataTable().page.info().page+1);' . "\r\n" . '                    } else {' . "\r\n" . '                        delParam("page");' . "\r\n" . '                    }' . "\r\n" . '                    var rOrder = $("#datatable-users").DataTable().order()[0];' . "\r\n" . '                    setParam("order", rOrder[0]); setParam("dir", rOrder[1]);' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'createdRow: function(row, data, index) {' . "\r\n\t\t\t\t\t" . '$(row).addClass(\'user-\' + data[0]);' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'responsive: false,' . "\r\n\t\t\t\t" . 'processing: true,' . "\r\n\t\t\t\t" . 'serverSide: true,' . "\r\n" . '                searchDelay: 250,' . "\r\n\t\t\t\t" . 'ajax: {' . "\r\n\t\t\t\t\t" . 'url: "./table",' . "\r\n\t\t\t\t\t" . '"data": function(d) {' . "\r\n\t\t\t\t\t\t" . 'd.id = "lines";' . "\r\n\t\t\t\t\t\t" . 'd.filter = getFilter();' . "\r\n\t\t\t\t\t\t" . 'd.reseller = getReseller();' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'columnDefs: [' . "\r\n\t\t\t\t\t" . '{"className": "dt-center", "targets": [0,4,5,6,7,8,9,10,11]},' . "\r\n\t\t\t\t\t";

if (XUI::$rSettings['redis_handler']) {
	goto label892;
}

echo "\t\t\t\t\t" . '{"orderable": false, "targets": [11]}' . "\r\n\t\t\t\t\t";
goto label891;

label1649:

goto label760;

label1650:

echo '        ' . "\r\n\t\t" . 'var rClearing = false;' . "\r\n\r\n\t\t" . 'function refreshTable() {' . "\r\n\t\t\t" . '$("#datatable-activity").DataTable().ajax.reload( null, false );' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function getStream() {' . "\r\n\t\t\t" . 'return $("#act_stream").val();' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function getLine() {' . "\r\n\t\t\t" . 'return $("#act_line").val();' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function getUser() {' . "\r\n\t\t\t" . 'return $("#act_user").val();' . "\r\n\t\t" . '}' . "\r\n" . '        function getRange() {' . "\r\n\t\t\t" . 'return $("#act_range").val();' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'function clearFilters() {' . "\r\n\t\t\t" . 'window.rClearing = true;' . "\r\n" . '            $("#act_search").val("").trigger(\'change\');' . "\r\n\t\t\t" . '$("#act_stream").val("").trigger(\'change\');' . "\r\n\t\t\t" . '$(\'#act_line\').val("").trigger(\'change\');' . "\r\n" . '            $(\'#act_user\').val("").trigger(\'change\');' . "\r\n\t\t\t" . '$(\'#act_range\').val("").trigger(\'change\');' . "\r\n\t\t\t" . 'window.rClearing = false;' . "\r\n\t\t\t" . '$(\'#datatable-activity\').DataTable().search($("#act_search").val());' . "\r\n\t\t\t" . '$(\'#datatable-activity\').DataTable().page.len($(\'#act_show_entries\').val());' . "\r\n\t\t\t" . '$("#datatable-activity").DataTable().page(0).draw(\'page\');' . "\r\n\t\t\t" . '$("#datatable-activity").DataTable().ajax.reload( null, false );' . "\r\n" . '            delParams(["search", "stream", "user", "line", "range", "page", "entries"]);' . "\r\n\t\t\t" . 'checkClear();' . "\r\n\t\t" . '}' . "\r\n" . '        function checkClear() {' . "\r\n\t\t\t" . 'if (!hasParams(["search", "stream", "user", "line", "range"])) {' . "\r\n\t\t\t\t" . '$("#clearFilters").prop("disabled", true);' . "\r\n\t\t\t" . '} else {' . "\r\n\t\t\t\t" . '$("#clearFilters").prop("disabled", false);' . "\r\n\t\t\t" . '}' . "\r\n\t\t" . '}' . "\r\n" . '        var rSearch;' . "\r\n\t\t" . '$(document).ready(function() {' . "\r\n\t\t\t" . '$(\'select\').select2({width: \'100%\'});' . "\r\n\t\t\t" . '$(\'#act_range\').daterangepicker({' . "\r\n\t\t\t\t" . 'singleDatePicker: false,' . "\r\n\t\t\t\t" . 'showDropdowns: true,' . "\r\n\t\t\t\t" . 'locale: {' . "\r\n\t\t\t\t\t" . 'format: \'YYYY-MM-DD\'' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'autoUpdateInput: false' . "\r\n\t\t\t" . '}).val("");' . "\r\n\t\t\t" . '$(\'#act_range\').on(\'apply.daterangepicker\', function(ev, picker) {' . "\r\n\t\t\t\t" . '$(this).val(picker.startDate.format(\'YYYY-MM-DD\') + \' - \' + picker.endDate.format(\'YYYY-MM-DD\'));' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    if ($("#act_range").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("range", $("#act_range").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("range");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . '$("#datatable-activity").DataTable().ajax.reload( null, false );' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#act_range\').on(\'cancel.daterangepicker\', function(ev, picker) {' . "\r\n\t\t\t\t" . '$(this).val(\'\');' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    if ($("#act_range").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("range", $("#act_range").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("range");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . '$("#datatable-activity").DataTable().ajax.reload( null, false );' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#act_range\').on(\'change\', function() {' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    if ($("#act_range").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("range", $("#act_range").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("range");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . '$("#datatable-activity").DataTable().ajax.reload( null, false );' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n" . '            $(\'#act_line\').select2({' . "\r\n\t\t\t" . '  ajax: {' . "\r\n\t\t\t\t" . 'url: \'./api\',' . "\r\n\t\t\t\t" . 'dataType: \'json\',' . "\r\n\t\t\t\t" . 'data: function (params) {' . "\r\n\t\t\t\t" . '  return {' . "\r\n\t\t\t\t\t" . 'search: params.term,' . "\r\n\t\t\t\t\t" . 'action: \'userlist\',' . "\r\n\t\t\t\t\t" . 'page: params.page' . "\r\n\t\t\t\t" . '  };' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'processResults: function (data, params) {' . "\r\n\t\t\t\t" . '  params.page = params.page || 1;' . "\r\n\t\t\t\t" . '  return {' . "\r\n\t\t\t\t\t" . 'results: data.items,' . "\r\n\t\t\t\t\t" . 'pagination: {' . "\r\n\t\t\t\t\t\t" . 'more: (params.page * 100) < data.total_count' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '  };' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'cache: true,' . "\r\n\t\t\t\t" . 'width: "100%"' . "\r\n\t\t\t" . '  },' . "\r\n\t\t\t" . '  placeholder: \'All Lines\'' . "\r\n\t\t\t" . '});' . "\r\n" . '            $(\'#act_stream\').select2({' . "\r\n\t\t\t" . '  ajax: {' . "\r\n\t\t\t\t" . 'url: \'./api\',' . "\r\n\t\t\t\t" . 'dataType: \'json\',' . "\r\n\t\t\t\t" . 'data: function (params) {' . "\r\n\t\t\t\t" . '  return {' . "\r\n\t\t\t\t\t" . 'search: params.term,' . "\r\n\t\t\t\t\t" . 'action: \'streamlist\',' . "\r\n\t\t\t\t\t" . 'page: params.page' . "\r\n\t\t\t\t" . '  };' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'processResults: function (data, params) {' . "\r\n\t\t\t\t" . '  params.page = params.page || 1;' . "\r\n\t\t\t\t" . '  return {' . "\r\n\t\t\t\t\t" . 'results: data.items,' . "\r\n\t\t\t\t\t" . 'pagination: {' . "\r\n\t\t\t\t\t\t" . 'more: (params.page * 100) < data.total_count' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '  };' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'cache: true,' . "\r\n\t\t\t\t" . 'width: "100%"' . "\r\n\t\t\t" . '  },' . "\r\n\t\t\t" . '  placeholder: \'All Streams\'' . "\r\n\t\t\t" . '});' . "\r\n" . '            var rPage = getParam("page");' . "\r\n" . '            if (!rPage) { rPage = 1; }' . "\r\n" . '            var rEntries = getParam("entries");' . "\r\n" . '            if (!rEntries) { rEntries = ';
echo intval($f1dcaed925076e67['default_entries']);
goto label459;

label1657:

echo in_array(strtolower(XUI::$rRequest['dir']), ['asc', 'desc']) ? strtolower(XUI::$rRequest['dir']) : 'desc';
echo '" ]],' . "\r\n\t\t\t\t";
goto label499;

label1678:

echo "\t\t\t\t" . 'order: [[ ';
goto label466;

label1680:

echo '" ]],' . "\r\n\t\t\t\t";

label1681:

echo "\t\t\t\t" . 'pageLength: parseInt(rEntries),' . "\r\n\t\t\t\t" . 'lengthMenu: [10, 25, 50, 250, 500, 1000],' . "\r\n" . '                displayStart: (parseInt(rPage)-1) * parseInt(rEntries)' . "\r\n\t\t\t" . '});' . "\r\n" . '            function doSearch(rValue) {' . "\r\n" . '                clearTimeout(window.rSearch); window.rSearch = setTimeout(function(){ rTable.search(rValue).draw(); }, 500);' . "\r\n" . '            }' . "\r\n\t\t\t" . '$("#datatable-streampage").css("width", "100%");' . "\r\n\t\t\t" . '$(\'#stream_search\').keyup(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n\t\t\t\t\t" . 'if ($("#stream_search").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("search", $("#stream_search").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("search");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'doSearch($(this).val());' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#stream_show_entries\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n" . '                    if ($("#stream_show_entries").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("entries", $("#stream_show_entries").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("entries");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'rTable.page.len($(this).val()).draw();' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . '$(\'#stream_category_id\').change(function(){' . "\r\n\t\t\t\t" . 'if (!window.rClearing) {' . "\r\n" . '                    delParam("page");' . "\r\n" . '                    rTable.page(0);' . "\r\n\t\t\t\t\t" . 'if ($("#stream_category_id").val()) {' . "\r\n\t\t\t\t\t\t" . 'setParam("category", $("#stream_category_id").val());' . "\r\n\t\t\t\t\t" . '} else {' . "\r\n\t\t\t\t\t\t" . 'delParam("category");' . "\r\n\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . 'checkClear();' . "\r\n\t\t\t\t\t" . 'rTable.ajax.reload( null, false );' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . 'if ($(\'#stream_search\').val()) {' . "\r\n\t\t\t\t" . 'rTable.search($(\'#stream_search\').val()).draw();' . "\r\n\t\t\t" . '}' . "\r\n\t\t\t" . 'checkClear();' . "\r\n\t\t" . '});' . "\r\n" . '        ' . "\r\n" . '        ';

label1682:

goto label222;
goto label679;

label1684:

echo "\t\t\t\t\t" . '{"orderable": false, "targets": [1,4,5]},' . "\r\n\t\t\t\t\t";

label1685:

echo "\t\t\t\t" . '],' . "\r\n" . '                ';

if (!$Ebb0b63f7c597ba4) {
	goto label870;
}

goto label869;

label1690:

if (!(count(get_included_files()) == 1)) {
	goto label1700;
}

exit();

label1700:

$E8870c6f95210f68 = d60f670923adbF13();
include 'modals.php';
goto label304;

label1705:

echo isset(XUI::$rRequest['order']) ? intval(XUI::$rRequest['order']) : 2;
echo ', "';
echo in_array(strtolower(XUI::$rRequest['dir']), ['asc', 'desc']) ? strtolower(XUI::$rRequest['dir']) : 'asc';
echo '" ]],' . "\r\n\t\t\t\t";

label1738:

goto label247;

label1739:

echo "\t\t\t\t";

if (XUI::$rSettings['redis_handler']) {
	goto label1154;
}

echo "\t\t\t\t" . 'order: [[ ';
echo isset(XUI::$rRequest['order']) ? intval(XUI::$rRequest['order']) : 4;
echo ', "';
goto label1133;

label1759:

echo '        </script>' . "\r\n\t\t" . '<script src="assets/js/listings.js"></script>' . "\r\n" . '    </body>' . "\r\n" . '</html>';

?>