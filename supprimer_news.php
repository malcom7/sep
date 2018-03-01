<?php
//Si l'id passé en paramètre dans l'url n'existe pas, c'est que le visiteur a été amenené ici par hasard
if(!isset($_GET['id'])) {
	//Donc on redirige vers index.php
	header('Location: index.php');
	//Puis on stoppe l'exécution du script
	exit();
}
//On récupère l'array des news
$news = unserialize(file_get_contents('news.txt'));
//Puis l'id passé en paramètre
$id = (int) $_GET['id'];

//Si la news existe
if(isset($news[$id])) {
	//On efface l'index correspondant à l'id de la news
	unset($news[$id]);
	
	//Puis on sauvegarde le tout
	file_put_contents('news.txt', serialize($news));

	echo 'La news a bien &eacute;t&eacute; supprim&eacute;e !';
}
else {
	echo 'La news n\'existe pas.';
}
echo '<br />';
echo '<a href="index.php">Retour</a>';
