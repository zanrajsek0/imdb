<?php
    include_once "header.php"
?>
        <h1>Dobrodošli na strani MOVIES!</h1>

        <?php 
            $b=110;

            if(isset($_GET['vrednost'])){
                $a=$_GET['vrednost'];
            }else{
                $a=0;
            }
            
            $a++;
            echo $a;
            echo '<a href="index.php?id='.$a.'">MOVIES</a>';
        ?>
        <br>
        
<?php
    include_once "footer.php"
?>