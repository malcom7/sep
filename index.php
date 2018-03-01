<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SChool Edacy project</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">School Edacy Project</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Eléves
                        <span class="sr-only">(current)</span>
                    </a>
                </li>


            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">
    <h3><br><br>Liste des éléves</h3><br><br>
    <div class="row">




        <?php
        $liste_news = unserialize(file_get_contents('news.txt'));
        if(!empty($liste_news)) { ?>
            <table class="table">
            <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Classe</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($liste_news as $id => $news) {
                    $news = array_map('htmlspecialchars', $news);
                    ?>
                    <tr>
                        <td><?php echo $news['nom'] ?></td>
                        <td><?php echo $news['prenom'] ?></td>
                        <td><?php echo $news['classe'] ?></td>
                        <td><i><a href="supprimer_news.php?id=<?php echo $id ?>" onclick="return confirm('Etes-vous sur de vouloir supprimer cette news ?');">Supprimer</a>
                                &nbsp;
                                <a href="editer_news.php?id=<?php echo $id ?>">Editer</a></i></td>
                    </tr>
                    <?php
                } ?>
            </tbody>
        </table>
        <?php }
        else {
            echo 'Il n\'y a aucun eleve pour le moment<br />';
        }
        echo '<a href="ajouter_news.php" class="btn btn-info">Ajouter une news</a>'; ?>









    </div>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your malick 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>











