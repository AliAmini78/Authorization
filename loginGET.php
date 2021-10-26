<?php
// requirement files 
require './Bootstrap.php';
require './app/Helpers/sessionStart.php';


// useable file
use app\Helpers\ErrorManage;


// error messages
$Message = ErrorManage::requireErrorMessages('Message');
$EmailMessage = ErrorManage::requireErrorMessages('email');
$PasswordMessage = ErrorManage::requireErrorMessages('password');

?>

<?php include_once('./layout/header.php') ?>

<div class="container">
  <?php if ($Message != null) { ?>
      <div class="bg-danger text-white h3 p-3 rounded">
        <?=$Message?>
      </div>
  <?php } ?>
  <div class="content">
    <h3>صفحه ورود</h3>
    <form method="POST" action="/loginPOST.php">
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
          <span class="bg-danger text-white rounded p-1  ">
            <?= $PasswordMessage  ?>
          </span>
        <?php } ?>
      </div>

      <button type="submit" class="btn btn-primary mb-2"> ورود</button>

    </form>
  </div>
</div>
<?php include_once('./layout/footer.php') ?>