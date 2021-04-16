<?php
include_once "header.php";
include_once "db.php";
$id=(int) $_GET['id'];
$query="SELECT * FROM actors WHERE id=?";
$stmt=$pdo->prepare($query);
$stmt->execute([$id]);
$actor=$stmt->fetch();

?>
<h2>Spremeni igralca</h2>

<form action="actor_update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $actor['id'] ?>">
    <input type="text" name="first_name" value="<?php echo $actor['first_name'] ?>" placeholder="Vnesi ime igralca" class="form-control" required="required"><br>
    <input type="text" name="last_name" value="<?php echo $actor['last_name'] ?>" placeholder="Vnesi priimek igralca" class="form-control" required="required"><br>
    <input type="text" name="nick" value="<?php echo $actor['nick'] ?>" placeholder="Vnesi vzdevek igralca" class="form-control" required="required"><br>
    <input type="submit" value="Shrani" class="btn btn-primary">
</form>

<?php
include_once "footer.php"
?>