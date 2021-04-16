<?php
include_once "header.php"
?>
 <h2>Dodaj žanro</h2>

 <form action="genre_insert.php" method="POST">
     <input type="text" name="title" placeholder="Vnesi ime žanre" class="form-control" required="required"><br>
     <input type="text" name="short" placeholder="Vnesi kratico žanre" class="form-control"><br>
     <input type="submit" value="Shrani" class="btn btn-primary">
 </form>

<?php
include_once "footer.php"
?>