<?php
if(session_id() == '') {session_start();}
if(empty($_SESSION['login'])){
    header("Location: ".ROOT_PATH."welcome");
    exit();
}
$title = "Mon compte";

try
{
    //PDO: PHP Data Objects
    $bdd = new PDO('mysql:host=localhost;dbname=projetWeb;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    //die — Alias de la fonction exit qui affiche un message et termine le script courant
    die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->prepare('SELECT * FROM USER WHERE login = :login');
if(!empty($_GET) && !empty($_GET['login'])){
    $reponse->execute([':login' => $_GET['login']]);
}
else {
    $reponse->execute([':login' => $_SESSION['login']]);
}
$user = $reponse->fetch();
$reponse->closeCursor(); // Termine le traitement de la requête

if($user['login'] != $_SESSION['login']) {
    $title = "Utilisateur ".$user['login'];
}


$email = $user['email'];
$default = "https://blog.ramboll.com/fehmarnbelt/wp-content/themes/ramboll2/images/profile-img.jpg";
$size = 310;
$grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;



ob_start()?>
<img class="rounded-circle mx-auto d-block img-thumbnail" src="<?php echo $grav_url; ?>" alt="" />
<br>
Identifiant: <?= $user['id']?>
<br>
Login: <?= $user['login']?>
<br>
Email: <?= $user['email']?>
<br>
<a href="<?=ROOT_PATH?>edit/<?= $user['login']?>" class="btn btn-warning">Editer</a>
<?php
$content = ob_get_clean();
include 'includes/template.php';
?>
