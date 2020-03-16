<?php
session_start();
if(!empty($_SESSION['login'])){
    header("Location: ".ROOT_PATH."welcome");
    exit();
}
if(!empty($_POST)) {
    if(!empty($_POST['login']) && !empty($_POST['password']))
    {

        try
        {
            //PDO: PHP Data Objects
            $bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch (Exception $e)
        {
            //die — Alias de la fonction exit qui affiche un message et termine le script courant
            die('Erreur : ' . $e->getMessage());
        }
        $reponse = $bdd->prepare('SELECT * FROM USER WHERE login = :login');
        $reponse->execute([':login' => $_POST['login']]);
        $user = $reponse->fetch();
        $reponse->closeCursor(); // Termine le traitement de la requête
        //Ici on va vérifier si le login/pass est bon
        if($user && password_verify($_POST['password'], $user['password'] ))
        {
            //Authentification OK
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['message'] = "Bienvenue ".$_POST['login'];
            header("Location: ".ROOT_PATH."welcome");
            exit();
        }
        else
        {
            //Authentification NOK
            $errorMessage = "Mauvais login/password";
        }
    }
    else
    {
        //Ici on va prévenir l'utilisateur qu'il manque quelque chose
        $errorMessage = "Tu as oublié d'encoder quelque chose...";
    }
}
ob_start()?>
<form action="<?=ROOT_PATH.'login'?>" method="POST">
    <div class="form-group">
        <label for="idlogin">Login</label>
        <input type="text" class="form-control" id="idlogin" name="login">
    </div>
    <div class="form-group">
        <label for="idpassword">Password</label>
        <input type="password" class="form-control" id="idpassword" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
$title = "Se connecter";
$content = ob_get_clean();
include 'includes/template.php';
?>
