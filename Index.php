<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Principal.css" />
    <title>PokeApp</title>
</head>
<body>
    <div class="ContenedorPrincipal">
        <div class="ContenedorMenu">
            <?php 
                include("Interior/Header.html");  
                
            ?>
        </div>
        <div class="ContenedorGeneral">

            <?php 
                if ($_GET) {
                    if ($_GET["Pagina"]==1) {
                        include("Interior/Paginacion.php");
                        ?>
                        <div>
                        <?php
                            if (!isset($_GET["Poke"])) {
                                $Poke=1;
                                include("Interior/Pokedex.php");
                            }elseif ($_GET["Poke"]) {
                                $Poke=$_GET["Poke"];
                                include("Interior/Pokedex.php");
                            }
                        ?>
                        </div>
                        <?php
                    }elseif ($_GET["Pagina"]==2) {
                        include("Interior/Tabla.html");
                    }elseif ($_GET["Pagina"]==3) {
                        include("Interior/Calculadora.php");
                    }else {
                        include("Interior/Inicio.html");
                    }
                } else {
                    include("Interior/Inicio.html");
                }
            ?>


            
        </div>

    </div>
</body>
</html>