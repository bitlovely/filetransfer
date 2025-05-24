<?php


goto label62;

label1:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<form action="#" method="POST">' . "\n\t\t\t" . '<div class="row">' . "\n\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t" . '<div class="page-title-box">' . "\n" . '                        <div class="page-title-right">' . "\n" . '                            ';
include 'topbar.php';
echo '                        </div>' . "\n\t\t\t\t\t\t" . '<h4 class="page-title">Backups</h4>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>     ' . "\n\t\t\t" . '<div class="row">' . "\n\t\t\t\t" . '<div class="col-xl-12">' . "\n\t\t\t\t\t";
if (isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS)) {
	goto label76;
}

goto label74;

label12:

$F6edd90960a3bd9d = 'Backups';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label1;
}

echo ' style="display: none;"';
goto label1;

label31:

echo htmlspecialchars($f1dcaed925076e67['dropbox_keep'] ? $f1dcaed925076e67['dropbox_keep'] : 0);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="dropbox_token">Dropbox Token <i title="Create an application in the Dropbox Developer section, set the expiration to never then generate a token." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="dropbox_token" name="dropbox_token" value="';
echo htmlspecialchars($f1dcaed925076e67['dropbox_token']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";
if (!((0 < strlen($f1dcaed925076e67['dropbox_token'])) && !d40B5c7F5Ac7E326())) {
	goto label72;
}

goto label71;

label62:

include 'session.php';
include 'functions.php';

if (e6d500E19634d513()) {
	goto label70;
}

E72f42A93714ba87();

label70:

goto label12;

label71:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="alert alert-danger text-center" role="alert">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . 'Could not access your Dropbox through the API key provided above. Please generate a new one or check that your key is correct.' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";

label72:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<table class="table table-striped table-borderless mb-0" id="datatable-backups">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Date</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Filename</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Filesize</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Local</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Dropbox</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Actions</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0" style="margin-top:30px;">' . "\n" . '                                            <li class="list-inline-item">' . "\n" . '                                                <button id="create_backup" onClick="api(\'\', \'backup\')" class="btn btn-info">Create Backup Now</button>' . "\n" . '                                            </li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n" . '                                                <input name="submit_settings" type="submit" class="btn btn-primary" value="Save Changes" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</form>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label118;

label74:

echo '                    <div class="alert alert-info alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t\t" . 'Backups will not contain any logs, restoring a database will therefore clear all of your logs.<br/>If you want to keep your logs you should manually create your own backups.' . "\n\t\t\t\t\t" . '</div>' . "\n" . '                    ';
goto label77;

label76:

echo "\t\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t\t" . 'Backup settings sucessfully updated!' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t";

label77:

goto label78;

label78:

echo "\t\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#backups" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-backup-restore mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Backups</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="backups">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="automatic_backups">Automatic Backups <i title="Generate full SQL backups periodically." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="automatic_backups" id="automatic_backups" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['off' => 'Off', 'hourly' => 'Hourly', 'daily' => 'Daily', 'weekly' => 'Weekly', 'monthly' => 'Monthly'] as $A7d54b094ae83c95 => $fb173e63c96d4021) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['automatic_backups'] == $A7d54b094ae83c95)) {
		goto label90;
	}

	echo ' selected';

	label90:

	echo ' value="';
	echo $A7d54b094ae83c95;
	echo '">';
	echo $fb173e63c96d4021;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="backups_to_keep">Local Backups to Keep <i title="Enter 0 for unlimited. Oldest will be deleted." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="backups_to_keep" name="backups_to_keep" value="';
echo htmlspecialchars($f1dcaed925076e67['backups_to_keep'] ? $f1dcaed925076e67['backups_to_keep'] : 0);
goto label109;

label109:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="dropbox_remote">Dropbox Backups <i title="Once a local backup is generated, upload it to Dropbox for safe remote storage." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="dropbox_remote" id="dropbox_remote" type="checkbox"';

if (!($f1dcaed925076e67['dropbox_remote'] == 1)) {
	goto label116;
}

echo 'checked ';

label116:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="dropbox_keep">Dropbox Backups to Keep <i title="Enter 0 for unlimited. Oldest will be deleted." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="dropbox_keep" name="dropbox_keep" value="';
goto label31;

label118:

include 'footer.php';

?>