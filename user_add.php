<?php
include_once "header.php";
?>

<h3>Registracija</h3>
<form action="user_insert.php" method="POST">
    <input type="text" class="form-control" name="first_name" placeholder="Vnesi ime" required="required"/>
    <br>
    <input type="text" class="form-control" name="last_name" placeholder="Vnesi priimek" required="required"/>
    <br>
    <input type="email" class="form-control" name="email" placeholder="Vnesi e-pošto" required="required"/>
    <br>
    <input type="password" class="form-control" name="pass1" placeholder="Vnesi geslo" required="required"/>
    <br>
    <input type="password" class="form-control" name="pass2" placeholder="Vnesi ponovno" required="required"/>
    <br>

    <input type="submit" class="btn btn-primary" name="submit" value="Registriraj"/>

</form>

<?php
include_once "footer.php";
?>