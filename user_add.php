<?php
include_once "header.php";
?>

<h3>Registracija</h3>
<form action="user_insert.php" method="POST">
    <input type="text" name="first_name" placeholder="Vnesi ime" required="required"/>
    <br>
    <input type="text" name="last_name" placeholder="Vnesi priimek" required="required"/>
    <br>
    <input type="email" name="email" placeholder="Vnesi e-pošto" required="required"/>
    <br>
    <input type="password" name="pass1" placeholder="Vnesi geslo" required="required"/>
    <br>
    <input type="password" name="pass2" placeholder="Vnesi ponovno" required="required"/>
    <br>

    <input type="submit" name="submit" value="Registriraj"/>

</form>

<?php
include_once "footer.php";
?>