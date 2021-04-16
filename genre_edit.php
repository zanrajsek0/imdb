<?php
include_once "header.php";
include_once "db.php";
$id=(int) $_GET['id'];
$query="SELECT * FROM genres WHERE id=?";
$stmt=$pdo->prepare($query);
$stmt->execute([$id]);
$genre=$stmt->fetch();

?>
<h2>Spremeni žanro</h2>

<form action="genre_update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $genre['id'] ?>">
    <input type="text" name="title" value="<?php echo $genre['title'] ?>" placeholder="Vnesi ime žanre" class="form-control" required="required"><br>
    <input type="text" name="short" value="<?php echo $genre['short'] ?>" placeholder="Vnesi kratico žanre" class="form-control"><br>
    <input type="submit" value="Shrani" class="btn btn-primary">
</form>

<?php
include_once "footer.php"
?>