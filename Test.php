<?php 
$API= "https://pokeapi.co/api/v2/pokemon/";
$Json= file_get_contents($API);
$Analizar= json_decode($Json,true);
$TotalPokemons=ceil(($Analizar["count"] +1) / 50);

echo $TotalPokemons ;
?>
<?php if (isset($_GET["Poke"])) {if (!$_GET["Poke"] || $_GET["Poke"]==1) {echo "active"; }}?>