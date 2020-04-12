<?php ob_start(); ?>

<form action="<?=ROOT_PATH.'user//edit'?>" method="POST">
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
    <div class="form-group">
        <label for="idNom">Nom</label>
        <input type="text" class="form-control" id="idNom" name="nom" value="<?= $user->nom ?>">
    </div>
    <div class="form-group">
        <label for="idPrenom">Prenom</label>
        <input type="text" class="form-control" id="idPrenom" name="prenom" value="<?= $user->prenom ?>">
    </div>
    <div class="form-group">
        <label for="idAdresse">Adresse</label>
        <input type="text" class="form-control" id="idAdresse" name="adresse" value="<?= $user->adresse ?>">
    </div>
    <div class="form-group">
        <label for="idnumTel">Numéro de téléphone</label>
        <input type="text" class="form-control" id="idnumTel" name="numTel" value="<?= $user->numTel ?>">
    </div>
    <div class="form-group">
        <label for="idDateNaissance">Date de naissance</label>
        <input type="date" class="form-control" id="idDateNaissance" name="dateNaissance" value="<?= $user->dateNaissance ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
    $title = "Editer";
    $content = ob_get_clean();
?>
