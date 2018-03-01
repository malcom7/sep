<?php
//Si l'id pass� en param�tre dans l'url n'existe pas, c'est que le visiteur a �t� amenen� ici par hasard
if(!isset($_GET['id'])) {
	//Donc on redirige vers index.php
	header('Location: index.php');
	//Puis on stoppe l'ex�cution du script
	exit();
}
//On r�cup�re l'array des news
$news = unserialize(file_get_contents('news.txt'));
//Puis l'id pass� en param�tre
$id = (int) $_GET['id'];

//Si la news existe
if(isset($news[$id])) {
	//On efface l'index correspondant � l'id de la news
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
