

<?php
session_start();

$value_status = 0;
if (isset($_SESSION["status"]))
{
    $value_status = $_SESSION["status"];
}

?><!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="Contenu/style.css" />
    <title><?= $titre ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Andada+Pro:ital@1&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark h-10">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-md-auto gap-2">
                <li class="nav-item rounded">
                    <a class="nav-link active" aria-current="page" href="<?= "Accueil" ?>">Accueil</a>
                </li>
                <li class="nav-item rounded">
                    <a class="nav-link" href="<?=  "index.php?action=produits" ?>">Produits</a>
                </li>
                        <?php
                        if($value_status == 2)
                        {
                            ?>
                            <li class="nav-item rounded"><a class="nav-link" href="index.php?action=getDeconnexion">Deconnexion</a></li>
                            <?php
                        }else{
                        ?>
                        <li class="nav-item rounded"><a class="nav-link" href="index.php?action=connexion">Connexion</a></li>
                        <?php
                            }
                        ?>




            </ul>
        </div>
    </div>
</nav>
<div id="global" >

    <div id="contenu" >
        <?= $contenu ?>
    </div> <!-- #contenu -->

</div> <!-- #global -->
</body>
</html>