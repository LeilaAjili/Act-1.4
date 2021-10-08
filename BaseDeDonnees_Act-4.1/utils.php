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




//compare and sort
/*function sortFunction( $a, $b ) {

    return  strtotime($b["date"]) - strtotime($a["date"]);
}
usort($articles, "sortFunction");*/


//eliminate wrong dates

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
    echo'<th>' . 'Gérer' . '</th>';
     

while ($donnees = $reponse->fetch(PDO::FETCH_ASSOC))
{
    echo '<tr>';
     
    foreach ($donnees as $key => $field) {

        if($key!='id')
        
        echo '<td>' . $field . '</td>';
       else

      echo '<td>' . '<input type="button" value="Click me" onclick="deleteArticle()">' . '</td>';
       
        
    }
  
   // echo '<td>' . 'cc' . '</td>';
    echo '</tr>';
}      
echo '</table>';


$reponse->closeCursor();






}
function deleteArticle(){
    echo "hello";
}
  echo 'fffff'  ;


?>



