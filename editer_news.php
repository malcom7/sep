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
    <h3><br><br>Modification eleve</h3><br><br>
    <div class="row">


        <?php
        if(!isset($_GET['id'])) {
            header('Location: index.php');
            exit();
        }

        $news = unserialize(file_get_contents('news.txt'));
        $newsAmodifier = (int) $_GET['id'];
        if(isset($_POST['nom']) && isset($_POST['prenom'])) {
            $news[$newsAmodifier]['nom'] = $_POST['nom'];
            $news[$newsAmodifier]['prenom'] = $_POST['prenom'];
            $news[$newsAmodifier]['classe'] = $_POST['classe'];
            file_put_contents('news.txt', serialize($news));
            echo 'Student update successful';
            echo '&nbsp; &nbsp;  <br><br><br>';
            echo '<br><br/><a href="index.php">Retour</a>';
        } else {
        ?>
            <div class="col-lg-7">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nom">Nom:</label>
                        <input type="nom" class="form-control" id="nom" name="nom" value="<?php echo $news[$newsAmodifier]['nom'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prenom:</label>
                        <input type="prenom" class="form-control" id="prenom"  name="prenom" value="<?php echo $news[$newsAmodifier]['prenom'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="sel1">Classe:</label>
                        <select class="form-control" id="classe" name="classe">
                            <option value="S1"<?php if ($news[$newsAmodifier]['classe'] == 'S1') echo 'selected' ?>>S1</option>
                            <option value="S2" <?php if ($news[$newsAmodifier]['classe'] == 'S2') echo 'selected' ?> >S2</option>
                            <option value="L1" <?php if ($news[$newsAmodifier]['classe'] == 'L1') echo 'selected' ?>>L1</option>
                            <option value="L2" <?php if ($news[$newsAmodifier]['classe'] == 'L2') echo 'selected' ?>>L2</option>
                        </select>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-info col-3">Ajouter</button>
                </form>
            </div>

        <?php
}?>
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



























