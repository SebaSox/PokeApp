<?php 
    include_once("Objetos/Pokemon.php");   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Css/Pokedex.css" />
</head>
<body>
<center>
    <div>
        <div>
            <form action="index.php?Pagina=1" class="Form" method="post">
                <p class="p">Ingrese Nombre o N° de Pokedex Nacional</p>
                <input type="text" name="NombrePoke" required> <input type="submit" value="Buscar" >
            </form>
        </div>
        <div>    
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Aspecto</th>
                    <th>Tipo/s</th>
                    <th>Daño x1/2 a</th>
                    <th>Daño x2 a</th>
                    <th>Recibe x1/2 de</th> 
                    <th>Recibe x2 de</th>
                </tr>
                <?php 
                
                    if (!$_POST) {
                        $Traer= 51 * $Poke;
                        for ($i=$Traer-50 ; $i < $Traer; $i++) { 
                            $Pokemon = new Pokemon($i);
                            $VerificarTipo2 = $Pokemon->GetTipo2();
                            if ($VerificarTipo2) {
                                ?>
                                    <tr>
                                        <td rowspan="2"><?php echo $Pokemon->GetNombre(); ?></td>
                                        <td rowspan="2"> <img src="<?php echo $Pokemon->GetAspecto1(); ?>">
                                            <img src="<?php echo $Pokemon->GetAspecto2(); ?>">
                                            </td>
                                        <td>
                                            <img src="Imagenes/Tipos/<?php echo ucfirst($Pokemon->GetTipo1()) .".png" ; ?>" class="TiposIMG">
                                        </td>
                                        <td class="ContenedorTipos"><?php 
                                                $z=1;
                                                $DañoAX12= $Pokemon->GetDaños("half_damage_to",1);
                                                foreach ($DañoAX12 as $variable) {
                                                    ?>
                                                    <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                                    <?php
                                                    if ($z % 2 ==0 ) {
                                                        echo "<br>";
                                                    }
                                                    $z++;
                                                }
                                            ?></td>
                                        <td><?php 
                                                $z=1;
                                                $DañoAX12= $Pokemon->GetDaños("double_damage_to",1);
                                                foreach ($DañoAX12 as $variable) {
                                                    ?>
                                                    <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                                    <?php
                                                    if ($z % 2 ==0 ) {
                                                        echo "<br>";
                                                    }
                                                    $z++;
                                                }
                                            ?></td>
                                        <td><?php 
                                                $z=1;
                                                $DañoAX12= $Pokemon->GetDaños("half_damage_from",1);
                                                foreach ($DañoAX12 as $variable) {
                                                    ?>
                                                    <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                                    <?php
                                                    if ($z % 2 ==0 ) {
                                                        echo "<br>";
                                                    }
                                                    $z++;
                                                }
                                            ?></td>
                                        <td><?php 
                                                $z=1;
                                                $DañoAX12= $Pokemon->GetDaños("double_damage_from",1);
                                                foreach ($DañoAX12 as $variable) {
                                                    ?>
                                                    <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                                    <?php
                                                    if ($z % 2 ==0 ) {
                                                        echo "<br>";
                                                    }
                                                    $z++;
                                                }
                                            ?></td>
                                    </tr>
                                    <tr>
                                        <td><img src="Imagenes/Tipos/<?php echo ucfirst($Pokemon->GetTipo2()) .".png" ; ?>" class="TiposIMG"></td>
                                        <td><?php 
                                                $z=1;
                                                $DañoAX12= $Pokemon->GetDaños("half_damage_to",2);
                                                foreach ($DañoAX12 as $variable) {
                                                    ?>
                                                    <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                                    <?php
                                                    if ($z % 2 ==0 ) {
                                                        echo "<br>";
                                                    }
                                                    $z++;
                                                }
                                            ?></td>
                                        <td><?php 
                                                $z=1;
                                                $DañoAX12= $Pokemon->GetDaños("double_damage_to",2);
                                                foreach ($DañoAX12 as $variable) {
                                                    ?>
                                                    <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                                    <?php
                                                    if ($z % 2 ==0 ) {
                                                        echo "<br>";
                                                    }
                                                    $z++;
                                                }
                                            ?></td>
                                        <td><?php 
                                                $z=1;
                                                $DañoAX12= $Pokemon->GetDaños("half_damage_from",2);
                                                foreach ($DañoAX12 as $variable) {
                                                    ?>
                                                    <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                                    <?php
                                                    if ($z % 2 ==0 ) {
                                                        echo "<br>";
                                                    }
                                                    $z++;
                                                }
                                            ?></td>
                                        <td><?php 
                                                $z=1;
                                                $DañoAX12= $Pokemon->GetDaños("double_damage_from",2);
                                                foreach ($DañoAX12 as $variable) {
                                                    ?>
                                                    <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                                    <?php
                                                    if ($z % 2 ==0 ) {
                                                        echo "<br>";
                                                    }
                                                    $z++;
                                                }
                                            ?></td>
                                    </tr>
                            <?php 
                            }else {
                                ?>
                                    <tr>
                                        <td ><?php echo  $Pokemon->GetNombre(); ?></td>
                                        <td > <img src="<?php echo $Pokemon->GetAspecto1(); ?>">
                                            <img src="<?php echo $Pokemon->GetAspecto2(); ?>">
                                            </td>
                                        <td>
                                        <img src="Imagenes/Tipos/<?php echo ucfirst($Pokemon->GetTipo1()) .".png" ; ?>" class="TiposIMG">
                                        </td>
                                        <td><?php 
                                                $z=1;
                                                $DañoAX12= $Pokemon->GetDaños("half_damage_to",1);
                                                foreach ($DañoAX12 as $variable) {
                                                    ?>
                                                    <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                                    <?php
                                                    if ($z % 2 ==0 ) {
                                                        echo "<br>";
                                                    }
                                                    $z++;
                                                }
                                            ?></td>
                                        <td><?php 
                                                $z=1;
                                                $DañoAX12= $Pokemon->GetDaños("double_damage_to",1);
                                                foreach ($DañoAX12 as $variable) {
                                                    ?>
                                                    <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                                    <?php
                                                    if ($z % 2 ==0 ) {
                                                        echo "<br>";
                                                    }
                                                    $z++;
                                                }
                                            ?></td>
                                        <td><?php 
                                                $z=1;
                                                $DañoAX12= $Pokemon->GetDaños("half_damage_from",1);
                                                foreach ($DañoAX12 as $variable) {
                                                    ?>
                                                    <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                                    <?php
                                                    if ($z % 2 ==0 ) {
                                                        echo "<br>";
                                                    }
                                                    $z++;
                                                }
                                            ?></td>
                                        <td><?php 
                                                $z=1;
                                                $DañoAX12= $Pokemon->GetDaños("double_damage_from",1);
                                                foreach ($DañoAX12 as $variable) {
                                                    ?>
                                                    <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                                    <?php
                                                    if ($z % 2 ==0 ) {
                                                        echo "<br>";
                                                    }
                                                    $z++;
                                                }
                                            ?></td>
                                    </tr>
                            <?php 
                            }
                        }
                    }else {
                        $Pokemon = new Pokemon($_POST["NombrePoke"]);
                            $VerificarTipo2 = $Pokemon->GetTipo2();
                            if ($VerificarTipo2) {
                                ?>
                                   <tr>
                                        <td rowspan="2"><?php echo $Pokemon->GetNombre(); ?></td>
                                        <td rowspan="2"> <img src="<?php echo $Pokemon->GetAspecto1(); ?>">
                                            <img src="<?php echo $Pokemon->GetAspecto2(); ?>">
                                            </td>
                                        <td>
                                            <img src="Imagenes/Tipos/<?php echo ucfirst($Pokemon->GetTipo1()) .".png" ; ?>" class="TiposIMG">
                                        </td>
                                        <td class="ContenedorTipos"><?php 
                                                $z=1;
                                                $DañoAX12= $Pokemon->GetDaños("half_damage_to",1);
                                                foreach ($DañoAX12 as $variable) {
                                                    ?>
                                                    <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                                    <?php
                                                    if ($z % 2 ==0 ) {
                                                        echo "<br>";
                                                    }
                                                    $z++;
                                                }
                                            ?></td>
                                        <td><?php 
                                                $z=1;
                                                $DañoAX12= $Pokemon->GetDaños("double_damage_to",1);
                                                foreach ($DañoAX12 as $variable) {
                                                    ?>
                                                    <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                                    <?php
                                                    if ($z % 2 ==0 ) {
                                                        echo "<br>";
                                                    }
                                                    $z++;
                                                }
                                            ?></td>
                                        <td><?php 
                                                $z=1;
                                                $DañoAX12= $Pokemon->GetDaños("half_damage_from",1);
                                                foreach ($DañoAX12 as $variable) {
                                                    ?>
                                                    <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                                    <?php
                                                    if ($z % 2 ==0 ) {
                                                        echo "<br>";
                                                    }
                                                    $z++;
                                                }
                                            ?></td>
                                        <td><?php 
                                                $z=1;
                                                $DañoAX12= $Pokemon->GetDaños("double_damage_from",1);
                                                foreach ($DañoAX12 as $variable) {
                                                    ?>
                                                    <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                                    <?php
                                                    if ($z % 2 ==0 ) {
                                                        echo "<br>";
                                                    }
                                                    $z++;
                                                }
                                            ?></td>
                                    </tr>
                                    <tr>
                                        <td><img src="Imagenes/Tipos/<?php echo ucfirst($Pokemon->GetTipo2()) .".png" ; ?>" class="TiposIMG"></td>
                                        <td><?php 
                                                $z=1;
                                                $DañoAX12= $Pokemon->GetDaños("half_damage_to",2);
                                                foreach ($DañoAX12 as $variable) {
                                                    ?>
                                                    <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                                    <?php
                                                    if ($z % 2 ==0 ) {
                                                        echo "<br>";
                                                    }
                                                    $z++;
                                                }
                                            ?></td>
                                        <td><?php 
                                                $z=1;
                                                $DañoAX12= $Pokemon->GetDaños("double_damage_to",2);
                                                foreach ($DañoAX12 as $variable) {
                                                    ?>
                                                    <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                                    <?php
                                                    if ($z % 2 ==0 ) {
                                                        echo "<br>";
                                                    }
                                                    $z++;
                                                }
                                            ?></td>
                                        <td><?php 
                                                $z=1;
                                                $DañoAX12= $Pokemon->GetDaños("half_damage_from",2);
                                                foreach ($DañoAX12 as $variable) {
                                                    ?>
                                                    <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                                    <?php
                                                    if ($z % 2 ==0 ) {
                                                        echo "<br>";
                                                    }
                                                    $z++;
                                                }
                                            ?></td>
                                        <td><?php 
                                                $z=1;
                                                $DañoAX12= $Pokemon->GetDaños("double_damage_from",2);
                                                foreach ($DañoAX12 as $variable) {
                                                    ?>
                                                    <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                                    <?php
                                                    if ($z % 2 ==0 ) {
                                                        echo "<br>";
                                                    }
                                                    $z++;
                                                }
                                            ?></td>
                                    </tr>
                            <?php 
                            }else {
                                ?>
                                    <tr>
                                        <td ><?php echo  $Pokemon->GetNombre(); ?></td>
                                        <td > <img src="<?php echo $Pokemon->GetAspecto1(); ?>">
                                            <img src="<?php echo $Pokemon->GetAspecto2(); ?>">
                                            </td>
                                        <td>
                                        <img src="Imagenes/Tipos/<?php echo ucfirst($Pokemon->GetTipo1()) .".png" ; ?>" class="TiposIMG">
                                        </td>
                                        <td><?php 
                                                $z=1;
                                                $DañoAX12= $Pokemon->GetDaños("half_damage_to",1);
                                                foreach ($DañoAX12 as $variable) {
                                                    ?>
                                                    <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                                    <?php
                                                    if ($z % 2 ==0 ) {
                                                        echo "<br>";
                                                    }
                                                    $z++;
                                                }
                                            ?></td>
                                        <td><?php 
                                                $z=1;
                                                $DañoAX12= $Pokemon->GetDaños("double_damage_to",1);
                                                foreach ($DañoAX12 as $variable) {
                                                    ?>
                                                    <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                                    <?php
                                                    if ($z % 2 ==0 ) {
                                                        echo "<br>";
                                                    }
                                                    $z++;
                                                }
                                            ?></td>
                                        <td><?php 
                                                $z=1;
                                                $DañoAX12= $Pokemon->GetDaños("half_damage_from",1);
                                                foreach ($DañoAX12 as $variable) {
                                                    ?>
                                                    <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                                    <?php
                                                    if ($z % 2 ==0 ) {
                                                        echo "<br>";
                                                    }
                                                    $z++;
                                                }
                                            ?></td>
                                        <td><?php 
                                                $z=1;
                                                $DañoAX12= $Pokemon->GetDaños("double_damage_from",1);
                                                foreach ($DañoAX12 as $variable) {
                                                    ?>
                                                    <img src="Imagenes/Tipos/<?php echo $variable.".png" ; ?>" class="TiposIMG">
                                                    <?php
                                                    if ($z % 2 ==0 ) {
                                                        echo "<br>";
                                                    }
                                                    $z++;
                                                }
                                            ?></td>
                                    </tr>
                            <?php 
                            }
                    }
               
                ?>
            </table>
        </div>
    </div>
</center>

    
    
</body>
</html>

