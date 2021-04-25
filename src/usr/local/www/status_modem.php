<?php
require_once("guiconfig.inc");
require_once("service-utils.inc");
require_once("shortcuts.inc");
$pgtitle = array(gettext("Status"), "Modem");

include("head.inc");

$services = json_decode(file_get_contents("http://169.254.2.1/data/Status.json"), true);
?>

<div class="panel panel-default">
    <div class="panel-heading">
		<h2 class="panel-title">Modem</h2></div>
    <div class="panel-body">
    <div class="panel-body panel-default">
        <div class="table-responsive">
            <table class="table table-striped table-hover table-condensed sortable-theme-bootstrap" data-sortable>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
<?php
    foreach ($services as $service) {
?>
                    <tr>
                        <td>
                            <?=$service['varid']?>
                        </td>
                        <td>
                            <?=$service['varvalue']?>
                        </td>
                    </tr>
<?php
    }
?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>

<?php
include("foot.inc");
