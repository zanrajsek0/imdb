<html>
    <head>
    
    </head>

    <body>
        <h1>Dobrodošli na strani INDEX!</h1>
        <?php 
        $a=1050;
        if(isset($_GET['id'])){
            $b=$_GET['id'];
        }else{
            $b=0;
        }
        
        $b++;
        echo $b;
        echo '<a href="movies.php?vrednost='.$b.'">MOVIES</a>';
        ?>
        <br>
        
    </body>
</html>