<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="<?=ROOT_PATH?>public/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=ROOT_PATH?>public/css/sticky-footer-navbar.css">
        <script src="<?=ROOT_PATH?>public/js/jquery.min.js"></script>
        <script src="<?=ROOT_PATH?>public/js/popper.min.js"></script>
        <script src="<?=ROOT_PATH?>public/js/bootstrap.min.js"></script>
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="<?=ROOT_PATH?>">Neko-Shop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="<?=ROOT_PATH?>manga">Nos mangas</a></li>
                </ul>
                <?php
                    if(!empty($_SESSION['login']))
                    {
                        if ($_SESSION['login'] == 'admin') {
                            echo '<li class="nav-item"><a class="nav-link" href="'.ROOT_PATH.'admin">Menu d\'administration</a></li>';
                            echo '<li class="nav-item"><a class="nav-link" href="'.ROOT_PATH.'statistiques">Statistiques</a></li>';
                        }                      
                    }
                ?>
                <?php
                    if(empty($_SESSION['login']))
                    {
                        echo '<a href="'.ROOT_PATH.'signup" class="btn btn-outline-secondary my-2 my-sm-0">S\'inscrire</a>';
                        echo '<a href="'.ROOT_PATH.'login" class="btn btn-outline-success my-2 my-sm-0">Se connecter</a>';
                    }
                    else {
                        echo '<a href="'.ROOT_PATH.'account" class="btn btn-outline-info my-2 my-sm-0">Mon compte</a>';
                        echo '<a href="'.ROOT_PATH.'logout" class="btn btn-outline-success my-2 my-sm-0">Se déconnecter</a>';

                        if($_SESSION['login'] != 'admin')
                        {
                            echo '<a href="'.ROOT_PATH.'panier" class="btn btn-outline-info my-2 my-sm-0">Mon panier</a>';
                        }
                    }
                ?>
            </div>
        </nav>
        <main role="main" class="container">
        <div class="jumbotron">
            <h1><?php echo $title; ?></h1>
            <?php echo $content; ?>
        </div>
        </main>
        <footer class="footer">
            <div class="container">
                <span class="text-muted">Neko-Shop</span>
            </div>
        </footer>
    </body>
</html>
