<?php


goto label213;

label1:

echo $_['from'];
echo '">' . "\r\n" . '                    </div>' . "\r\n" . '                    <div class="col-md-4">' . "\r\n" . '                        <input type="text" class="form-control text-center date" id="range_clear_to" name="range_clear_to" data-toggle="date-picker" data-single-date-picker="true" autocomplete="off" placeholder="';
echo $_['to'];
echo '">' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '                <div class="text-center">' . "\r\n" . '                    <input id="clear_logs" type="submit" class="btn btn-primary" value="';
echo $_['clear'];
goto label269;

label10:

echo 'disabled';

label11:

echo ' />' . "\r\n" . '                    </div>' . "\r\n" . '                    <div class="col-md-3">' . "\r\n" . '                        <input id="update_server" type="submit" class="btn btn-light" value="Update Server" style="width:100%" ';
if (!($E0a8102c8d2ef5b6 || $a76857631510ce75)) {
	goto label252;
}

echo 'disabled';
goto label252;

label19:

echo '                        </tbody>' . "\r\n" . '                    </table>' . "\r\n" . '                </div>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>' . "\r\n" . '<div class="modal fade bs-xuiepg-modal-center" tabindex="-1" role="dialog" aria-labelledby="epgBrowserLabel" aria-hidden="true" style="display: none;" data-id="">' . "\r\n" . '    <div class="modal-dialog modal-dialog-scrollable modal-xl">' . "\r\n" . '        <div class="modal-content">' . "\r\n" . '            <div class="modal-header">' . "\r\n" . '                <h4 class="modal-title" id="epgBrowserLabel">XUI EPG Browser</h4>' . "\r\n" . '                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>' . "\r\n" . '            </div>' . "\r\n" . '            <div class="modal-body">' . "\r\n" . '                <table id="datatable-epg-api" class="table table-striped table-borderless dt-responsive">' . "\r\n" . '                    <thead>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th class="text-center">Icon</th>' . "\r\n" . '                            <th class="text-center">Call Sign</th>' . "\r\n" . '                            <th>Name</th>' . "\r\n" . '                            <th class="text-center">Language</th>' . "\r\n" . '                            <th class="text-center">Type</th>' . "\r\n" . '                            <th class="text-center">Actions</th>' . "\r\n" . '                        </tr>' . "\r\n" . '                    </thead>' . "\r\n" . '                    <tbody></tbody>' . "\r\n" . '                </table>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>' . "\r\n" . '<div class="modal fade bs-provider-streams-modal-center" tabindex="-1" role="dialog" aria-labelledby="providerStreamsLabel" aria-hidden="true" style="display: none;" data-id="">' . "\r\n" . '    <div class="modal-dialog modal-dialog-scrollable modal-lg">' . "\r\n" . '        <div class="modal-content">' . "\r\n" . '            <div class="modal-header">' . "\r\n" . '                <h4 class="modal-title" id="providerStreamsLabel">Provider Streams</h4>' . "\r\n" . '                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>' . "\r\n" . '            </div>' . "\r\n" . '            <div class="modal-body">' . "\r\n" . '                <table id="datatable-provider-streams" class="table table-striped table-borderless dt-responsive">' . "\r\n" . '                    <thead>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th class="text-center">Icon</th>' . "\r\n" . '                            <th>Stream Name</th>' . "\r\n" . '                            <th>Provider</th>' . "\r\n" . '                            <th class="text-center">Actions</th>' . "\r\n" . '                        </tr>' . "\r\n" . '                    </thead>' . "\r\n" . '                    <tbody></tbody>' . "\r\n" . '                </table>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>' . "\r\n" . '<div class="modal fade bs-provider-movies-modal-center" tabindex="-1" role="dialog" aria-labelledby="providerMoviesLabel" aria-hidden="true" style="display: none;" data-id="">' . "\r\n" . '    <div class="modal-dialog modal-dialog-scrollable modal-lg">' . "\r\n" . '        <div class="modal-content">' . "\r\n" . '            <div class="modal-header">' . "\r\n" . '                <h4 class="modal-title" id="providerMoviesLabel">Provider Movies</h4>' . "\r\n" . '                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>' . "\r\n" . '            </div>' . "\r\n" . '            <div class="modal-body">' . "\r\n" . '                <table id="datatable-provider-movies" class="table table-striped table-borderless dt-responsive">' . "\r\n" . '                    <thead>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th>Stream Name</th>' . "\r\n" . '                            <th>Provider</th>' . "\r\n" . '                            <th class="text-center">Actions</th>' . "\r\n" . '                        </tr>' . "\r\n" . '                    </thead>' . "\r\n" . '                    <tbody></tbody>' . "\r\n" . '                </table>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>' . "\r\n" . '<div class="modal fade bs-picon-modal-center" tabindex="-1" role="dialog" aria-labelledby="epgPiconLabel" aria-hidden="true" style="display: none;" data-id="">' . "\r\n" . '    <div class="modal-dialog modal-dialog-center modal-md">' . "\r\n" . '        <div class="modal-content">' . "\r\n" . '            <div class="modal-header">' . "\r\n" . '                <h4 class="modal-title" id="epgPiconLabel">Use the EPG icon for this stream?</h4>' . "\r\n" . '                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>' . "\r\n" . '            </div>' . "\r\n" . '            <div class="modal-body text-center">' . "\r\n" . '                <img id="epg-picon" src="" class="img-thumbnail" style="max-width: 400px; max-height: 250px;"><br/><br/>' . "\r\n" . '            </div>' . "\r\n" . '            <div class="modal-footer">' . "\r\n" . '                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>' . "\r\n" . '                <button type="button" class="btn btn-success waves-effect waves-light" id="epg_picon_save">Use Icon</button>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>' . "\r\n" . '<div class="modal fade creditsModal" role="dialog" aria-labelledby="creditsLabel" aria-hidden="true" style="display: none;" data-id="">' . "\r\n" . '    <div class="modal-dialog modal-dialog-centered modal-md">' . "\r\n" . '        <div class="modal-content">' . "\r\n" . '            <div class="modal-header">' . "\r\n" . '                <h4 class="modal-title" id="creditsModal">Add / Remove Credits</h4>' . "\r\n" . '                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>' . "\r\n" . '            </div>' . "\r\n" . '            <div class="modal-body">' . "\r\n" . '                <div class="form-group row">' . "\r\n" . '                    <label class="col-md-8 col-form-label" for="credits">Credits</label>' . "\r\n" . '                    <div class="col-md-4">' . "\r\n" . '                        <input type="text" class="form-control text-center" id="credits" onkeypress="return isNumberKey(event)" name="credits" value="">' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '                <div class="form-group row">' . "\r\n" . '                    <div class="col-md-12">' . "\r\n" . '                        <input type="text" class="form-control" id="credits_reason" name="credits_reason" placeholder="Reason for Adjustment..." value="">' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '                <div class="form-group row">' . "\r\n" . '                    <div class="col-md-12">' . "\r\n" . '                        <button class="btn btn-info waves-effect waves-light" style="width:100%;" type="button" onClick="submitCredits();">Adjust Credits</button>' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>' . "\r\n" . '<div class="modal fade bs-programme" tabindex="-1" role="dialog" aria-labelledby="programmeLabel" aria-hidden="true" style="display: none;">' . "\r\n" . '    <div class="modal-dialog modal-dialog-centered modal-md">' . "\r\n" . '        <div class="modal-content">' . "\r\n" . '            <div class="modal-header">' . "\r\n" . '                <h4 class="modal-title"><span id="programmeLabel"></span> &nbsp;<small><span id="programmeStart"></span></small></h4>' . "\r\n" . '                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>' . "\r\n" . '            </div>' . "\r\n" . '            <div class="modal-body">' . "\r\n" . '                <p class="sub-header" id="programmeDescription"></p>' . "\r\n" . '                <button type="button" id="programmeRecord" class="btn btn-danger waves-effect"><i class="mdi mdi-record"></i> Record</button>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>' . "\r\n" . '<div class="modal fade fingerprintModal" role="dialog" aria-labelledby="fingerprintLabel" aria-hidden="true" style="display: none;" data-id="" data-type="">' . "\r\n" . '    <div class="modal-dialog modal-dialog-centered modal-xl">' . "\r\n" . '        <div class="modal-content">' . "\r\n" . '            <div class="modal-header">' . "\r\n" . '                <h4 class="modal-title" id="fingerprintModal">Fingerprint</h4>' . "\r\n" . '                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>' . "\r\n" . '            </div>' . "\r\n" . '            <div class="modal-body">' . "\r\n" . '                <div class="form-group row">' . "\r\n\t\t\t\t\t" . '<label class="col-md-1 col-2 col-form-label text-center" for="mod_fingerprint_type">';
echo $_['type'];
echo '</label>' . "\r\n\t\t\t\t\t" . '<div class="col-md-2 col-6">' . "\r\n\t\t\t\t\t\t" . '<select id="mod_fingerprint_type" class="form-control text-center" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t" . '<option value="1">';
goto label189;

label24:

echo '</td>' . "\r\n" . '                            </tr>' . "\r\n" . '                            ';

label25:

if (!(0 < strlen($Bcf70cba56392975[SERVER_ID]['domain_name']))) {
	goto label158;
}

echo '                            <tr>' . "\r\n" . '                                <td>Server Domain</td>' . "\r\n" . '                                <td>';
echo $Bcf70cba56392975[SERVER_ID]['domain_name'];
goto label157;

label41:

echo $_['multiple_episodes'];
echo '</button>' . "\r\n" . '                        </div>' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>' . "\r\n" . '<div class="modal fade downloadModal" role="dialog" aria-labelledby="downloadLabel" aria-hidden="true" style="display: none;" data-username="" data-password="">' . "\r\n" . '    <div class="modal-dialog modal-dialog-centered modal-md">' . "\r\n" . '        <div class="modal-content">' . "\r\n" . '            <div class="modal-header">' . "\r\n" . '                <h4 class="modal-title" id="downloadModal">Download Playlist</h4>' . "\r\n" . '                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>' . "\r\n" . '            </div>' . "\r\n" . '            <div class="modal-body">' . "\r\n" . '                <div class="form-group row">' . "\r\n" . '                    <label class="col-md-4 col-form-label" for="download_type">Format</label>' . "\r\n" . '                    <div class="col-8">' . "\r\n" . '                        <select id="download_type" class="form-control" data-toggle="select2">' . "\r\n" . '                            ';
$b62d6460eb33ea07->query('SELECT * FROM `output_devices` ORDER BY `device_id` ASC;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	if ($Fb9da1713bff19ce['copy_text']) {
		goto label79;
	}

	echo '<optgroup label="' . $Fb9da1713bff19ce['device_name'] . '"><option value="' . $Fb9da1713bff19ce['device_key'] . '?output=hls">' . $Fb9da1713bff19ce['device_name'] . ' - HLS </option><option value="' . $Fb9da1713bff19ce['device_key'] . '">' . $Fb9da1713bff19ce['device_name'] . ' - MPEGTS</option><option value="' . $Fb9da1713bff19ce['device_key'] . '?output=rtmp">' . $Fb9da1713bff19ce['device_name'] . ' - RTMP</option></optgroup>';
	goto label125;

	label79:

	echo '<optgroup label="' . $Fb9da1713bff19ce['device_name'] . '"><option data-text="' . str_replace('"', '\\"', $Fb9da1713bff19ce['copy_text']) . '" value="' . $Fb9da1713bff19ce['device_key'] . '?output=hls">' . $Fb9da1713bff19ce['device_name'] . ' - HLS </option><option data-text="' . str_replace('"', '\\"', $Fb9da1713bff19ce['copy_text']) . '" value="' . $Fb9da1713bff19ce['device_key'] . '">' . $Fb9da1713bff19ce['device_name'] . ' - MPEGTS</option><option data-text="' . str_replace('"', '\\"', $Fb9da1713bff19ce['copy_text']) . '" value="' . $Fb9da1713bff19ce['device_key'] . '?output=rtmp">' . $Fb9da1713bff19ce['device_name'] . ' - RTMP</option></optgroup>';

	label125:
}

goto label128;

label128:

echo '                        </select>' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '                <div class="form-group row">' . "\r\n" . '                    <label class="col-md-4 col-form-label" for="output_type">Limit Output</label>' . "\r\n" . '                    <div class="col-8">' . "\r\n" . '                        <select id="output_type" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\r\n" . '                            <option value="live">Live Streams</option>' . "\r\n" . '                            <option value="movie">Movies</option>' . "\r\n" . '                            <option value="created_live">Created Channels</option>' . "\r\n" . '                            <option value="radio_streams">Radio Stations</option>' . "\r\n" . '                            <option value="series">TV Series</option>' . "\r\n" . '                        </select>' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '                <div class="form-group row">' . "\r\n" . '                    <div class="col-12">' . "\r\n" . '                        <div class="input-group">' . "\r\n" . '                            <input type="text" class="form-control" id="download_url" value="">' . "\r\n" . '                            <div class="input-group-append">' . "\r\n" . '                                <button class="btn btn-warning waves-effect waves-light" type="button" onClick="copyDownload();"><i class="mdi mdi-content-copy"></i></button>' . "\r\n" . '                                <button class="btn btn-info waves-effect waves-light" type="button" onClick="doDownload();" id="download_button" disabled><i class="mdi mdi-download"></i></button>' . "\r\n" . '                            </div>' . "\r\n" . '                        </div>' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>' . "\r\n" . '<div class="modal fade messageModal" role="dialog" aria-labelledby="messageModal" aria-hidden="true" style="display: none;" data-id="">' . "\r\n" . '    <div class="modal-dialog modal-dialog-centered modal-md">' . "\r\n" . '        <div class="modal-content">' . "\r\n" . '            <div class="modal-header">' . "\r\n" . '                <h4 class="modal-title" id="messageModal">';
echo $_['mag_event'];
echo '</h4>' . "\r\n" . '                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>' . "\r\n" . '            </div>' . "\r\n" . '            <div class="modal-body">' . "\r\n" . '                <div class="col-12">' . "\r\n" . '                    <select id="message_type" class="form-control" data-toggle="select2" >' . "\r\n" . '                        <option value="" selected>';
echo $_['select_an_event'];
echo ':</option>' . "\r\n" . '                        <optgroup label="">' . "\r\n" . '                            <option value="play_channel">';
goto label198;

label136:
if (!($E0a8102c8d2ef5b6 || $a76857631510ce75)) {
	goto label142;
}

echo 'disabled';

label142:

echo ' />' . "\r\n" . '                    </div>' . "\r\n" . '                    <div class="col-md-2">' . "\r\n" . '                        <input id="restart_services_ssh" type="submit" class="btn btn-light" value="Restart Services" style="width:100%" />' . "\r\n" . '                    </div>' . "\r\n" . '                    <div class="col-md-2">' . "\r\n" . '                        <input id="reboot_server_ssh" type="submit" class="btn btn-light" value="Reboot Server" style="width:100%" />' . "\r\n" . '                    </div>' . "\r\n" . '                    <div class="col-md-2">' . "\r\n" . '                        <input id="update_binaries" type="submit" class="btn btn-light" value="Update Binaries" style="width:100%" ';
if (!($E0a8102c8d2ef5b6 || $a76857631510ce75)) {
	goto label11;
}

goto label10;

label149:

echo '</th>' . "\r\n" . '                        </tr>' . "\r\n" . '                    </thead>' . "\r\n" . '                    <tbody>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>' . "\r\n" . '                        </tr>' . "\r\n" . '                    </tbody>' . "\r\n" . '                </table>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>' . "\r\n" . '<div class="modal fade bs-whois-modal-center" tabindex="-1" role="dialog" aria-labelledby="whoisLabel" aria-hidden="true" style="display: none;">' . "\r\n" . '    <div class="modal-dialog modal-dialog-centered modal-md">' . "\r\n" . '        <div class="modal-content">' . "\r\n" . '            <div class="modal-header">' . "\r\n" . '                <h4 class="modal-title" id="whoisLabel"></h4>' . "\r\n" . '                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>' . "\r\n" . '            </div>' . "\r\n" . '            <div class="modal-body">' . "\r\n" . '                <table class="table mb-0" id="whois-table">' . "\r\n" . '                    <tbody>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th scope="row" class="bg-secondary text-center text-white" colspan="2">GEOLOCATION</th>' . "\r\n" . '                        </tr>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th scope="row">Continent</th>' . "\r\n" . '                            <td></td>' . "\r\n" . '                        </tr>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th scope="row">Country</th>' . "\r\n" . '                            <td></td>' . "\r\n" . '                        </tr>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th scope="row">City</th>' . "\r\n" . '                            <td></td>' . "\r\n" . '                        </tr>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th scope="row">Postcode</th>' . "\r\n" . '                            <td></td>' . "\r\n" . '                        </tr>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th scope="row">Lat Lng</th>' . "\r\n" . '                            <td></td>' . "\r\n" . '                        </tr>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th scope="row" class="bg-secondary text-center text-white" colspan="2">ISP</th>' . "\r\n" . '                        </tr>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th scope="row">ISP Name</th>' . "\r\n" . '                            <td></td>' . "\r\n" . '                        </tr>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th scope="row">Organisation</th>' . "\r\n" . '                            <td></td>' . "\r\n" . '                        </tr>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th scope="row">AS Number</th>' . "\r\n" . '                            <td></td>' . "\r\n" . '                        </tr>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th scope="row">Type</th>' . "\r\n" . '                            <td></td>' . "\r\n" . '                        </tr>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th scope="row" class="bg-secondary text-center text-white" colspan="2">LOCALE</th>' . "\r\n" . '                        </tr>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th scope="row">Timezone</th>' . "\r\n" . '                            <td></td>' . "\r\n" . '                        </tr>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th scope="row">Local Time</th>' . "\r\n" . '                            <td></td>' . "\r\n" . '                        </tr>' . "\r\n" . '                    </tbody>' . "\r\n" . '                </table>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>' . "\r\n" . '<div class="modal fade bs-logs-modal-center" tabindex="-1" role="dialog" aria-labelledby="clearLogsLabel" aria-hidden="true" style="display: none;" data-id="">' . "\r\n" . '    <div class="modal-dialog modal-dialog-centered modal-md">' . "\r\n" . '        <div class="modal-content">' . "\r\n" . '            <div class="modal-header">' . "\r\n" . '                <h4 class="modal-title" id="clearLogsLabel">';
echo $_['clear_logs'];
echo '</h4>' . "\r\n" . '                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>' . "\r\n" . '            </div>' . "\r\n" . '            <div class="modal-body">' . "\r\n" . '                <div class="form-group row mb-4">' . "\r\n" . '                    <label class="col-md-4 col-form-label" for="range_clear">';
echo $_['date_range'];
echo '</label>' . "\r\n" . '                    <div class="col-md-4">' . "\r\n" . '                        <input type="text" class="form-control text-center date" id="range_clear_from" name="range_clear_from" data-toggle="date-picker" data-single-date-picker="true" autocomplete="off" placeholder="';
goto label1;

label157:

echo '</td>' . "\r\n" . '                            </tr>' . "\r\n" . '                            ';

label158:

$b62d6460eb33ea07->query('SELECT `username`, `reseller_dns` FROM `users` WHERE `reseller_dns` <> \'\' ORDER BY `username` ASC;');

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label19;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	echo '                            <tr>' . "\r\n" . '                                <td>';
	echo $Fb9da1713bff19ce['username'];
	echo '</td>' . "\r\n" . '                                <td>';
	echo $Fb9da1713bff19ce['reseller_dns'];
	echo '</td>' . "\r\n" . '                            </tr>' . "\r\n" . '                            ';
}

goto label19;

label181:

echo '</option>' . "\r\n" . '                            <option value="send_msg">';
echo $_['send_message'];
echo '</option>' . "\r\n" . '                            <option value="cut_off">';
echo $_['close_portal'];
echo '</option>' . "\r\n" . '                            <option value="reset_stb_lock">';
goto label235;

label189:

echo $_['activity_id'];
echo '</option>' . "\r\n\t\t\t\t\t\t\t" . '<option value="2">';
echo $_['username'];
echo '</option>' . "\r\n\t\t\t\t\t\t\t" . '<option value="3">';
echo $_['message'];
goto label244;

label198:

echo $_['play_channel'];
echo '</option>' . "\r\n" . '                            <option value="reload_portal">';
echo $_['reload_portal'];
echo '</option>' . "\r\n" . '                            <option value="reboot">';
echo $_['reboot_device'];
goto label181;

label207:

echo $_['position'];
echo '</label>' . "\r\n\t\t\t\t\t" . '<div class="col-md-1 col-2">' . "\r\n\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="mod_position_x" value="10" placeholder="X">' . "\r\n\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<div class="col-md-1 col-2">' . "\r\n\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="mod_position_y" value="10" placeholder="Y">' . "\r\n\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<div class="col-md-1 col-2">' . "\r\n\t\t\t\t\t\t" . '<button type="button" class="btn btn-info waves-effect waves-light" onClick="setModalFingerprint()">' . "\r\n\t\t\t\t\t\t\t" . '<i class="mdi mdi-fingerprint"></i>' . "\r\n\t\t\t\t\t\t" . '</button>' . "\r\n\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<div class="col-md-12 col-2" style="margin-top:10px;display:none;" id="mod_custom_message_div">' . "\r\n\t\t\t\t\t\t" . '<input type="text" class="form-control" id="mod_custom_message" value="" placeholder="';
echo $_['custom_message'];
goto label277;

label213:

if (!(count(get_included_files()) == 1)) {
	goto label223;
}

exit();

label223:

echo '<div class="modal fade bs-streams-modal-center" tabindex="-1" role="dialog" aria-labelledby="streamViewLabel" aria-hidden="true" style="display: none;" data-id="">' . "\r\n" . '    <div class="modal-dialog modal-dialog-centered modal-xl">' . "\r\n" . '        <div class="modal-content">' . "\r\n" . '            <div class="modal-body">' . "\r\n" . '                <table id="datatable-sources" class="table table-striped table-borderless mb-0" style="width:100%;">' . "\r\n" . '                    <thead>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th>ID</th>' . "\r\n" . '                            <th></th>' . "\r\n" . '                            <th>Name</th>' . "\r\n" . '                            <th>Server</th>' . "\r\n" . '                            <th>Clients</th>' . "\r\n" . '                            <th>Uptime</th>' . "\r\n" . '                            <th>Actions</th>' . "\r\n" . '                            <th>Actions</th>' . "\r\n" . '                            <th>Stream Info</th>' . "\r\n" . '                            <th>Stream Info</th>' . "\r\n" . '                        </tr>' . "\r\n" . '                    </thead>' . "\r\n" . '                    <tbody>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>' . "\r\n" . '                        </tr>' . "\r\n" . '                    </tbody>' . "\r\n" . '                </table>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>' . "\r\n" . '<div class="modal fade bs-epg-modal-center" tabindex="-1" role="dialog" aria-labelledby="epgViewLabel" aria-hidden="true" style="display: none;" data-id="">' . "\r\n" . '    <div class="modal-dialog modal-dialog-centered modal-xl">' . "\r\n" . '        <div class="modal-content">' . "\r\n" . '            <div class="modal-body">' . "\r\n" . '                <table id="datatable-epg" class="table table-striped table-borderless dt-responsive">' . "\r\n" . '                    <thead>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th class="text-center">Time</th>' . "\r\n" . '                            <th>Title</th>' . "\r\n" . '                            <th>Description</th>' . "\r\n" . '                        </tr>' . "\r\n" . '                    </thead>' . "\r\n" . '                    <tbody>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <td></td><td></td><td></td>' . "\r\n" . '                        </tr>' . "\r\n" . '                    </tbody>' . "\r\n" . '                </table>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>' . "\r\n" . '<div class="modal fade bs-live-modal-center" tabindex="-1" role="dialog" aria-labelledby="liveViewLabel" aria-hidden="true" style="display: none;" data-id="">' . "\r\n" . '    <div class="modal-dialog modal-dialog-centered modal-xl">' . "\r\n" . '        <div class="modal-content">' . "\r\n" . '            <div class="modal-body">' . "\r\n" . '                <table id="datatable-live" class="table table-striped table-borderless mb-0" style="width:100%;">' . "\r\n" . '                    <thead>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th class="text-center">ID</th>' . "\r\n" . '                            <th class="text-center">Quality</th>' . "\r\n" . '                            <th>Line</th>' . "\r\n" . '                            <th>Stream</th>' . "\r\n" . '                            <th>Server</th>' . "\r\n" . '                            <th>Player</th>' . "\r\n" . '                            <th>ISP</th>' . "\r\n" . '                            <th class="text-center">IP</th>' . "\r\n" . '                            <th class="text-center">Duration</th>' . "\r\n" . '                            <th class="text-center">Output</th>' . "\r\n" . '                            <th class="text-center">Restreamer</th>' . "\r\n" . '                            <th class="text-center">';
echo $_['actions'];
goto label149;

label227:

echo '</label>' . "\r\n" . '                        <div class="col-md-3">' . "\r\n" . '                            <input name="reboot_portal" id="reboot_portal" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\r\n" . '                        </div>' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '                <div class="col-12" style="margin-top:20px;display:none;" id="play_channel_form">' . "\r\n" . '                    <div class="form-group row mb-4">' . "\r\n" . '                        <label class="col-md-3 col-form-label" for="selected_channel">';
echo $_['channel'];
echo '</label>' . "\r\n" . '                        <div class="col-md-9">' . "\r\n" . '                            <select id="selected_channel" name="selected_channel" class="form-control" data-toggle="select2" style="width:100%;"></select>' . "\r\n" . '                        </div>' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '            </div>' . "\r\n" . '            <div class="modal-footer">' . "\r\n" . '                <button disabled id="message_submit" type="button" class="btn btn-primary waves-effect">';
echo $_['send_event'];
echo '</button>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>' . "\r\n" . '<div class="modal fade bs-server-modal-center" tabindex="-1" role="dialog" aria-labelledby="restartServicesLabel" aria-hidden="true" style="display: none;" data-id="">' . "\r\n" . '    <div class="modal-dialog modal-dialog-centered modal-xl">' . "\r\n" . '        <div class="modal-content">' . "\r\n" . '            <div class="modal-header">' . "\r\n" . '                <h4 class="modal-title" id="restartServicesLabel">Server Tools</h4>' . "\r\n" . '                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>' . "\r\n" . '            </div>' . "\r\n" . '            <div class="modal-body">' . "\r\n" . '                <div class="form-group row">' . "\r\n" . '                    <div class="col-md-3">' . "\r\n" . '                        <input id="reinstall_server" type="submit" class="btn btn-light" value="Reinstall Server" style="width:100%" ';
goto label136;

label235:

echo $_['reset_stb_lock'];
echo '</option>' . "\r\n" . '                        </optgroup>' . "\r\n" . '                    </select>' . "\r\n" . '                </div>' . "\r\n" . '                <div class="col-12" style="margin-top:20px;display:none;" id="send_msg_form">' . "\r\n" . '                    <div class="form-group row mb-4">' . "\r\n" . '                        <div class="col-md-12">' . "\r\n" . '                            <textarea id="message" name="message" class="form-control" rows="3" placeholder="';
echo $_['enter_a_custom_message'];
echo '..."></textarea>' . "\r\n" . '                        </div>' . "\r\n" . '                    </div>' . "\r\n" . '                    <div class="form-group row mb-4">' . "\r\n" . '                        <label class="col-md-9 col-form-label" for="reboot_portal">';
echo $_['reboot_on_confirmation'];
goto label227;

label244:

echo '</option>' . "\r\n\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<label class="col-md-1 col-2 col-form-label text-center" for="mod_font_size">';
echo $_['size'];
echo '</label>' . "\r\n\t\t\t\t\t" . '<div class="col-md-1 col-2">' . "\r\n\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="mod_font_size" value="36" placeholder="">' . "\r\n\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<label class="col-md-1 col-2 col-form-label text-center" for="mod_font_color">';
echo $_['colour'];
echo '</label>' . "\r\n\t\t\t\t\t" . '<div class="col-md-2 col-2">' . "\r\n\t\t\t\t\t\t" . '<input type="text" id="mod_font_color" class="form-control text-center" value="#ffffff">' . "\r\n\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<label class="col-md-1 col-2 col-form-label text-center" for="mod_position_x">';
goto label207;

label252:

echo ' />' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>' . "\r\n" . '<div class="modal fade bs-domains" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display: none;">' . "\r\n" . '    <div class="modal-dialog modal-dialog-centered modal-md">' . "\r\n" . '        <div class="modal-content">' . "\r\n" . '            <div class="modal-header">' . "\r\n" . '                <h4 class="modal-title" id="modalLabel">Domain List</h4>' . "\r\n" . '                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>' . "\r\n" . '            </div>' . "\r\n" . '            <div class="modal-body">' . "\r\n" . '                <p class="sub-header">Ensure the following domains are entered in your reCAPTCHA V2 admin console, otherwise your resellers will be unable to login via their domain.</p>' . "\r\n" . '                <div class="table-responsive">' . "\r\n" . '                    <table class="table mb-0">' . "\r\n" . '                        <thead>' . "\r\n" . '                            <tr>' . "\r\n" . '                                <th>Type / Reseller</th>' . "\r\n" . '                                <th>Domain Name</th>' . "\r\n" . '                            </tr>' . "\r\n" . '                        </thead>' . "\r\n" . '                        <tbody>' . "\r\n" . '                            ';

if (!(0 < strlen($Bcf70cba56392975[SERVER_ID]['server_ip']))) {
	goto label25;
}

echo '                            <tr>' . "\r\n" . '                                <td>Server IP</td>' . "\r\n" . '                                <td>';
echo $Bcf70cba56392975[SERVER_ID]['server_ip'];
goto label24;

label269:

echo '" style="width:100%" />' . "\r\n" . '                </div>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>' . "\r\n" . '<div class="modal fade addModal" role="dialog" aria-labelledby="addLabel" aria-hidden="true" style="display: none;" data-username="" data-password="">' . "\r\n" . '    <div class="modal-dialog modal-dialog-centered modal-md">' . "\r\n" . '        <div class="modal-content">' . "\r\n" . '            <div class="modal-header">' . "\r\n" . '                <h4 class="modal-title" id="addModal">';
echo $_['select_series'];
echo ':</h4>' . "\r\n" . '                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>' . "\r\n" . '            </div>' . "\r\n" . '            <div class="modal-body">' . "\r\n" . '                <div class="col-12">' . "\r\n" . '                    <select id="add_series_id" class="form-control" data-toggle="select2"></select>' . "\r\n" . '                </div>' . "\r\n" . '                <div class="col-12 add-margin-top-20">' . "\r\n" . '                    <div class="input-group">' . "\r\n" . '                        <div class="input-group-append" style="width:100%">' . "\r\n" . '                            <button style="width:50%" class="btn btn-success waves-effect waves-light" type="button" onClick="addEpisode();"><i class="mdi mdi-plus-circle-outline"></i> ';
echo $_['add_episode'];
echo '</button>' . "\r\n" . '                            <button style="width:50%" class="btn btn-info waves-effect waves-light" type="button" onClick="addEpisodes();"><i class="mdi mdi-plus-circle-multiple-outline"></i> ';
goto label41;

label277:

echo '">' . "\r\n\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>' . "\r\n" . '<div class="modal fade bs-failures-modal-center" tabindex="-1" role="dialog" aria-labelledby="failuresLabel" aria-hidden="true" style="display: none;" data-id="">' . "\r\n" . '    <div class="modal-dialog modal-dialog-centered modal-xl">' . "\r\n" . '        <div class="modal-content">' . "\r\n" . '            <div class="modal-header">' . "\r\n" . '                <h4 class="modal-title" id="failuresLabel"><button onClick=\'clearLogs()\' type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>Clear Stream Logs</button></h4>' . "\r\n" . '                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>' . "\r\n" . '            </div>' . "\r\n" . '            <div class="modal-body">' . "\r\n" . '                <table id="datatable-stream" class="table table-striped table-borderless dt-responsive">' . "\r\n" . '                    <thead>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th>Server Name</th>' . "\r\n" . '                            <th class="text-center">Source</th>' . "\r\n" . '                            <th class="text-center">Action</th>' . "\r\n" . '                            <th class="text-center">Date</th>' . "\r\n" . '                        </tr>' . "\r\n" . '                    </thead>' . "\r\n" . '                    <tbody>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <td></td><td></td><td></td><td></td>' . "\r\n" . '                        </tr>' . "\r\n" . '                    </tbody>' . "\r\n" . '                </table>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>' . "\r\n" . '<div class="modal fade bs-proxies-modal-center" tabindex="-1" role="dialog" aria-labelledby="proxiesLabel" aria-hidden="true" style="display: none;" data-id="">' . "\r\n" . '    <div class="modal-dialog modal-dialog-centered modal-lg">' . "\r\n" . '        <div class="modal-content">' . "\r\n" . '            <div class="modal-body">' . "\r\n" . '                <table id="datatable-sources" class="table table-striped table-borderless dt-responsive">' . "\r\n" . '                    <thead>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th class="text-center">ID</th>' . "\r\n" . '                            <th>Server Name</th>' . "\r\n" . '                            <th class="text-center">Server IP</th>' . "\r\n" . '                        </tr>' . "\r\n" . '                    </thead>' . "\r\n" . '                    <tbody>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <td></td><td></td><td></td>' . "\r\n" . '                        </tr>' . "\r\n" . '                    </tbody>' . "\r\n" . '                </table>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>';

?>