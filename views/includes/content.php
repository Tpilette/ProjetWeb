<main role="main" class="container">
            <!-- header jumbotron -->
            <div class="row">
                <div class="col-12">
                    <div class="jumbotron">
                        <h1><?php echo $title; ?></h1>
                    </div>
                </div>
            </div>
            <!-- Contenu -->
            <?php echo $content; ?>
            <?php if(isset($errorMessage)) echo $errorMessage ?>
        </main>