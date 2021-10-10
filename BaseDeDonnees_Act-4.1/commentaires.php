<?php
include ('utils.php');
include 'header.php';
?>

<html>
<head>

<link rel="stylesheet" href="style.css" type="text/css">
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<meta charset="utf-8" />
</head>

</html>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=monPremierSite;charset=utf8', 'root', '');
$id = $_GET['id'];
$req = $bdd -> prepare('SELECT texte, auteur, DATE(date_publication) FROM commentaires WHERE id_article=:id');
$req->bindValue(':id', $id, PDO::PARAM_STR);
$req->execute();

echo '<table>';
     

    
    echo'<th>' . 'Texte' . '</th>';
    echo'<th>' . 'Auteur' . '</th>';
    echo'<th>' . 'Date de publication' . '</th>';
    while ($donnees = $req->fetch(PDO::FETCH_ASSOC))
    { 
       echo '<tr>';
        foreach ($donnees as $key => $field) 
        {

            if($key!='id' && $key!='id_article' )
              {
                  if($key!='date_publication')
                  {
                   
                    echo '<td>' .$field . '</td>';
                  }
                 
              }
              else
        echo '<td>' . $field . '</td>';

        }
        echo '</tr>';
    }
echo '</table>';






include 'footer.php';
?>



