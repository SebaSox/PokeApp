<!DOCTYPE html>
<html>
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Calculadora.css" />
</head>
<body>
    <center>
        <?php 
            if (!$_POST) {
                ?>
                <form action="index.php?Pagina=3" method="post">
                    <p>Selecciona el tipo de pokemon: </p>
                    <select name="Tipo" id="Tipo">
                        <option value="steel">Acero</option>
                        <option value="water">Agua</option>
                        <option value="bug">Bicho</option>
                        <option value="dragon">Dragon</option>
                        <option value="electric">Electrico</option>
                        <option value="ghost">Fantasma</option>
                        <option value="fire">Fuego</option>
                        <option value="fairy">Hada</option>
                        <option value="ice">Hielo</option>
                        <option value="fighting">Lucha</option>
                        <option value="normal">Normal</option>
                        <option value="psychic">Psiquico</option>
                        <option value="rock">Roca </option>
                        <option value="dark">Siniestro</option>
                        <option value="ground">Tierra</option>
                        <option value="poison">Veneno</option>
                        <option value="flying">Volador</option>
                    </select>
                    <br>
                    <input type="submit" value="Buscar">
                </form>
                <?php 
            }else {
                include_once("Objetos/Tipo.php");
                $Tipos = new Tipo($_POST["Tipo"])
                ?>
                <form action="index.php?Pagina=3" method="post">
                    <p>Selecciona el tipo de pokemon: </p>
                    <select name="Tipo" id="Tipo">
                        <option value="steel"> Acero </option>
                        <option value="water">Agua</option>
                        <option value="bug">Bicho</option>
                        <option value="dragon">Dragon</option>
                        <option value="electric">Electrico</option>
                        <option value="ghost">Fantasma</option>
                        <option value="fire">Fuego</option>
                        <option value="fairy">Hada</option>
                        <option value="ice">Hielo</option>
                        <option value="fighting">Lucha</option>
                        <option value="normal">Normal</option>
                        <option value="psychic">Psiquico</option>
                        <option value="rock">Roca </option>
                        <option value="dark">Siniestro</option>
                        <option value="ground">Tierra</option>
                        <option value="poison">Veneno</option>
                        <option value="flying">Volador</option>
                    </select>
                    <br>
                    <input type="submit" value="Buscar">
                </form>
                <br>
                <table>
                    <tr>
                        <th colspan="6"> <img src="Imagenes/Tipos/<?php echo $Tipos->GetTipo().".png" ; ?>" class="TiposIMG"></th>
                    </tr>
                    <tr>
                        <th>Hace Doble de daño a:</th>
                        <th>Hace Mitad de daño a:</th>
                        <th>Recibe doble de daños de:</th>
                        <th>Recibe mitad de daños de:</th>
                        <th>No le hace daño a:</th>
                        <th>No recibe daño de:</th>
                    </tr>
                    <tr>
                        <td>
                            <?php 
                            $z=1;
                            $Contenedor= $Tipos->GetAtaqueVentaja();
                            foreach ($Contenedor as $variable) {
                                ?>
                                <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                <br>
                                <?php
                                $z++;
                            }
                            ?>
                        </td>
                        <td>
                            <?php 
                            $z=1;
                            $Contenedor= $Tipos->GetAtaqueDesventaja();
                            foreach ($Contenedor as $variable) {
                                ?>
                                <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                <br>
                                <?php
                                $z++;
                            }
                            ?>
                        </td>
                        <td>
                            <?php 
                            $z=1;
                            $Contenedor= $Tipos->GetDefensaVentaja();
                            foreach ($Contenedor as $variable) {
                                ?>
                                <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                <br>
                                <?php
                                $z++;
                            }
                            ?>
                        </td>
                        <td>
                            <?php 
                            $z=1;
                            $Contenedor= $Tipos->GetDefensaDesventaja();
                            foreach ($Contenedor as $variable) {
                                ?>
                                <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                <br>
                                <?php
                                $z++;
                            }
                            ?>
                        </td>
                        <td>
                            <?php 
                            $z=1;
                            $Contenedor= $Tipos->GetDañoSinEfecto();
                            foreach ($Contenedor as $variable) {
                                ?>
                                <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                <br>
                                <?php
                                $z++;
                            }
                            ?>
                        </td>
                        <td>
                            <?php 
                            $z=1;
                            $Contenedor= $Tipos->GetDefensaSinEfecto();
                            foreach ($Contenedor as $variable) {
                                ?>
                                <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                <br>
                                <?php
                                $z++;
                            }
                            ?>
                        </td>
                    </tr>

                </table>

                <?php 

                

            }



        ?>

        
    </center>
</body>
</html>