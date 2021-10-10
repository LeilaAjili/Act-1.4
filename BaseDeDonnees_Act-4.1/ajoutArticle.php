<?php

include 'header.php';

?>

<html>
<head>

<link rel="stylesheet" href="style.css" type="text/css">
<meta charset="utf-8" />
</head>


<form action="treatForm.php" method="post" >



<fieldset>
 <legend>Poster un nouvel article :</legend>

  <input id="id" name="id" type="hidden" value=<?php echo rand();?>>

  

  <label for="title">Titre :</label>
   <input type="text" name="title" size="20" 
   maxlength="40" value="Titre" id="title" />

  <label for="text">Corps de l'article :</label>
   <textarea name="text" id="text" cols="20" >
   </textarea>

   <label for="author">Auteur :</label>
   <input type="text" name="author" size="20" 
   maxlength="40" value="" id="author" />

   <label for="pubDate">Date de publication :</label>
   <input id="pubDate" name="pubDate" type="date" value="2021-10-07">


</fieldset>

 <p>
 <input type="submit" value="Publier" />
 <input type="reset" value="Annuler" />
 </p>

</form>

</html>

<?php

include 'footer.php';


?>

