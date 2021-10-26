<?php

// requirement files 
require './Bootstrap.php';
require './app/Helpers/sessionStart.php';

// useable file
use app\Helpers\ErrorManage;


// error messages
$FullNameMessage = ErrorManage::requireErrorMessages('full_name');
$EmailMessage = ErrorManage::requireErrorMessages('email');
$PasswordMessage = ErrorManage::requireErrorMessages('password');


?>
<?php include_once('./layout/header.php') ?>

<div class="container">
  <div class="content">
    <h3>صفحه ثبت نام</h3>


    <form method="POST" action="./registerPOST.php">
      <div class="form-group ">
        <label for="full_name"> : نام</label>
        <input type="text" name="full_name" class="form-control col-6 mb-2" id="full_name">
        <?php if ($FullNameMessage != null) { ?>
          <span class="bg-danger text-white rounded p-1  ">
            <?= $FullNameMessage  ?>
          </span>
        <?php } ?>
      </div>
      <div class="form-group ">
        <label for="email"> : ایمیل</label>
        <input type="text" name="email" class="form-control col-6 mb-2" id="email">
        <?php if ($EmailMessage != null) { ?>
          <span class="bg-danger text-white rounded p-1  ">
            <?= $EmailMessage  ?>
          </span>
        <?php } ?>
      </div>
      <div class="form-group ">
        <label for="password"> : پسوورد</label>
        <input type="password" name="password" class="form-control col-6 mb-2" id="password">
        <?php if ($PasswordMessage != null) { ?>
          <span class="bg-danger text-white rounded p-1 ">
            <?= $PasswordMessage  ?>
          </span>
        <?php } ?>
      </div>

      <button type="submit" class="btn btn-primary mb-2"> ثبت نام</button>

    </form>
  </div>
</div>
<?php include_once('./layout/footer.php') ?>