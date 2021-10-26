<?php

// requirement files 
require './Bootstrap.php';
require './app/Helpers/sessionStart.php';

// useable file
use app\Helpers\ErrorManage;


// error messages
$Message = ErrorManage::requireErrorMessages('Message');

?>

<?php include_once('./layout/header.php') ?>

<div class="container">
    <?php if ($Message != null) { ?>
        <div class="bg-danger text-white h3 p-3 rounded">
            <?= $Message ?>
        </div>
    <?php } ?>
    <h1>this is index page</h1>
</div>


<?php include_once('./layout/footer.php') ?>