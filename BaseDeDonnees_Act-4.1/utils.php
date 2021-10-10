<html>
<head>

<link rel="stylesheet" href="style.css" type="text/css">
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<meta charset="utf-8" />
</head>

</html>

<?php

function getArticle($nb=NULL)
{
  //connexion à la base
$bdd = new PDO('mysql:host=localhost;dbname=monPremierSite;charset=utf8', 'root', '');
  
//récupération des enregistrements
//$nb==NULL ? $req = ('SELECT titre, texte, auteur, date_publication FROM articles') : ('SELECT titre, texte, auteur, date_publication FROM articles LIMIT $nb');

$req = ('SELECT * FROM articles');





//affichage des enregistrements
$reponse = $bdd->query($req);
 
echo '<table>';
     

    echo'<th>' . 'Titre' . '</th>';
    echo'<th>' . 'Texte' . '</th>';
    echo'<th>' . 'Auteur' . '</th>';
    echo'<th>' . 'Date de publication' . '</th>';
    echo'<th>' . 'Commenter' . '</th>';
    echo'<th>' . 'Afficher les commentaires' . '</th>';
    echo'<th>' . 'Supprimer' . '</th>';
     

while ($donnees = $reponse->fetch(PDO::FETCH_ASSOC))
{
    echo '<tr>';
     
    foreach ($donnees as $key => $field) {

        if($key!='id')
        
        echo '<td>' . $field . '</td>';
       else

     {
      echo '<td><a href="ajoutCommentaire.php?id='.$field.' "> <img src="ajoutCommentaire.png" alt="Ajouter un commentaire"/> </a></td>';
      echo '<td><a href="commentaires.php?id='.$field.' "> <img src="commentaire.png" alt="Afficher les commentaires"/> </a></td>';
      echo '<td><a href="deleteArticle.php?id='.$field.' "> <img src="delete.jpg" alt ="Supprimer"/> </a></td>';
       
      
     }
       
        
    }

    echo '</tr>';
}      
echo '</table>';

}?>











