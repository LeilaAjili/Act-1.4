<html>
    <head>
    <meta charset="utf-8" />
</head>
</html>


<?php 


//connexion à la base
$bdd = new PDO('mysql:host=localhost;dbname=monPremierSite;charset=utf8', 'root', '');

//insertion des champs du formulaire
$bdd->exec('INSERT INTO articles(titre, texte, auteur, date_publication) VALUES("'.$_POST['title'].'", "'.$_POST['text'].'", "'.$_POST['author'].'", "'.$_POST['pubDate'].'")');

echo "<script>
alert('Article publié avec succès!');
window.location.href = 'http:index.php';
</script>";




?>