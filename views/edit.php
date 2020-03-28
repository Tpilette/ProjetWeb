<?php ob_start(); ?>

<form action="<?=ROOT_PATH.'edit'?>" method="POST">
    <div class="form-group">
        <label for="idlogin">Login</label>
        <input type="text" class="form-control" id="idlogin" name="login" value="<?= $user->login ?>" readonly>
    </div>
    <div class="form-group">
        <label for="idemail">Email</label>
        <input type="email" class="form-control" id="idemail" name="email" value="<?= $user->email ?>">
    </div>
    <div class="form-group">
        <label for="idpassword">Password</label>
        <input type="password" class="form-control" id="idpassword" name="password">
    </div>
    <div class="form-group">
        <label for="idconfirmpassword">Confirm password</label>
        <input type="password" class="form-control" id="idconfirmpassword" name="confirmPassword">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
    $title = "Editer";
    $content = ob_get_clean();
    include "includes/template.php";
?>
