<?php


goto label24;

label1:

echo '                                    </select>' . "\r\n" . '                                </div>' . "\r\n" . '                            </div>' . "\r\n" . '                        </form>' . "\r\n" . '                        <table id="datatable-users" class="table table-striped table-borderless dt-responsive nowrap font-normal">' . "\r\n" . '                            <thead>' . "\r\n" . '                                <tr>' . "\r\n" . '                                    <th class="text-center">ASN</th>' . "\r\n" . '                                    <th>Name</th>' . "\r\n" . '                                    <th>Domain</th>' . "\r\n" . '                                    <th class="text-center">Country</th>' . "\r\n" . '                                    <th class="text-center">IP Count</th>' . "\r\n" . '                                    <th class="text-center">Type</th>' . "\r\n" . '                                    <th class="text-center">Status</th>' . "\r\n" . '                                    <th class="text-center">Actions</th>' . "\r\n" . '                                </tr>' . "\r\n" . '                            </thead>' . "\r\n" . '                            <tbody></tbody>' . "\r\n" . '                        </table>' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>' . "\r\n";
goto label52;

label3:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n" . '        <div class="row">' . "\r\n" . '            <div class="col-12">' . "\r\n" . '                <div class="page-title-box">' . "\r\n" . '                    <div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n" . '                    <h4 class="page-title">Autonomous System Numbers</h4>' . "\r\n" . '                </div>' . "\r\n" . '            </div>' . "\r\n" . '        </div>     ' . "\r\n" . '        <div class="row">' . "\r\n" . '            <div class="col-12">' . "\r\n" . '                <div class="card">' . "\r\n" . '                    <div class="card-body" style="overflow-x:auto;">' . "\r\n" . '                        <form id="asn_search">' . "\r\n" . '                            <div class="form-group row mb-4">' . "\r\n" . '                                <div class="col-md-3">' . "\r\n" . '                                    <input type="text" class="form-control" id="asn_search_box" value="" placeholder="Search ASN\'s...">' . "\r\n" . '                                </div>' . "\r\n" . '                                <label class="col-md-2 col-form-label text-center" for="asn_type">Filter Results</label>' . "\r\n" . '                                <div class="col-md-3">' . "\r\n" . '                                    <select id="asn_type" class="form-control" data-toggle="select2">' . "\r\n" . '                                        <option value="" selected>All Types</option>' . "\r\n" . '                                        <option value="isp">ISP</option>' . "\r\n" . '                                        <option value="hosting">Hosting Server</option>' . "\r\n" . '                                        <option value="education">Education</option>' . "\r\n" . '                                        <option value="business">Business</option>' . "\r\n" . '                                    </select>' . "\r\n" . '                                </div>' . "\r\n" . '                                <div class="col-md-2">' . "\r\n" . '                                    <select id="asn_filter" class="form-control" data-toggle="select2">' . "\r\n" . '                                        <option value="" selected>No Filter</option>' . "\r\n" . '                                        <option value="0">Allowed</option>' . "\r\n" . '                                        <option value="1">Blocked</option>' . "\r\n" . '                                    </select>' . "\r\n" . '                                </div>' . "\r\n" . '                                <label class="col-md-1 col-form-label text-center" for="asn_show_entries">Show</label>' . "\r\n" . '                                <div class="col-md-1">' . "\r\n" . '                                    <select id="asn_show_entries" class="form-control" data-toggle="select2">' . "\r\n" . '                                        ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo '                                        <option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label16;
	}

	echo ' selected';

	label16:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\r\n" . '                                        ';
}

goto label1;

label24:

include 'session.php';
include 'functions.php';

if (e6D500E19634D513()) {
	goto label32;
}

E72f42A93714ba87();

label32:

goto label33;

label33:

$F6edd90960a3bd9d = 'ASN\'s';
include 'header.php';
echo '<div class="wrapper"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label3;
}

echo ' style="display: none;"';
goto label3;

label52:

include 'footer.php';

?>