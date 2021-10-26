<?php
//requirement files
require './Bootstrap.php';
require './app/Helpers/sessionStart.php';
//usage package
use app\Helpers\ManageSession;
use app\Helpers\ErrorManage;


// error messages
$UserName = ErrorManage::requireErrorMessages('user_name');



ManageSession::validUserLogin();

?>
<?php include_once('./layout/dashboard_header.php') ?>
<?php if ($UserName != null) { ?>
          <span class="bg-danger text-white rounded p-1  ">
            <?= $UserName  ?>
          </span>
        <?php } ?>
<h1>this is admin page</h1>
<?php include_once('./layout/dashboard_footer.php') ?>