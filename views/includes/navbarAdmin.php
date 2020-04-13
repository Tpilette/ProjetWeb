<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="<?=ROOT_PATH?>">Neko-Shop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="<?=ROOT_PATH?>mangaAdmin">Gestion mangas</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?=ROOT_PATH?>admin">Menu d'administration</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?=ROOT_PATH?>statistiques">Statistiques</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?=ROOT_PATH?>commandeListing">Listing commandes</a></li>
                </ul>

                <a href="<?=ROOT_PATH?>account" class="btn btn-outline-info my-2 my-sm-0">Mon compte</a>
                <a href="<?=ROOT_PATH?>logout" class="btn btn-outline-success my-2 my-sm-0">Se déconnecter</a>             

            </div>
        </nav>