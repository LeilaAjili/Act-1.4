<html>
    <head>
    <meta charset="utf-8" />
</head>
</html>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=monPremierSite;charset=utf8', 'root', '');
$id = $_GET['id'];
$req = $bdd -> prepare('DELETE FROM articles WHERE id=:id');
$req->bindValue(':id', $id, PDO::PARAM_STR);
$req->execute();

?>
<script>
alert('Article supprimé avec succès!');
window.location.href = 'http:index.php';
</script>";



