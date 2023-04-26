<?php
include('verifica.php')

?>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <link rel="Stylesheet" href="css/StyleM.css">

    </head>
    <body>

    <form class="box" method="POST" action="">

       <h1>
           <?php echo "Bem vindo ";?></br>
           <?php echo $_SESSION['usuario'];
       ?></h1>

       <a href="logout.php"  style="text-decoration:none">Logout</a>

    </form>

    </body>
</html>