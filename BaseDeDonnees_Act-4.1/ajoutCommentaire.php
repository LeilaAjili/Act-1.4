<?php


include 'header.php';
$id = $_GET['id'];
$date = date("d/m/Y");

if( isset($_POST) AND !empty($_POST) )
{


//connexion à la base
$bdd = new PDO('mysql:host=localhost;dbname=monPremierSite;charset=utf8', 'root', '');

//insertion des champs du formulaire
$bdd->exec('INSERT INTO commentaires(texte, auteur, id_article) VALUES("'.$_POST['text'].'", "'.$_POST['author'].'", "'.$_POST['id'].'")');


echo "<script>

window.location.href = 'http:index.php';
</script>";
}
?>

<html>
<head>

<link rel="stylesheet" href="style.css" type="text/css">
<meta charset="utf-8" />
</head>


<form action="" method="post" >



<fieldset>
 <legend>Poster un nouveau commentaire :</legend>

  <input id="id" name="id" type="hidden" value=<?php echo $id;?>>

  <label for="text">Texte du commentaire:</label>
   <textarea name="text" id="text" cols="20" >
   </textarea>

   <label for="author">Auteur :</label>
   <input type="text" name="author" size="20" 
   maxlength="40" value="" id="author" />

   <label for="pubDate">Date de publication :</label>
   <input id="pubDate" name="pubDate" disabled value=<?php echo $date;?>>


</fieldset>

 <p>
 <input type="submit" value="Publier" />
 <input type="reset" value="Annuler" />
 </p>

</form>



<?php



include 'footer.php';


?>

</html>
