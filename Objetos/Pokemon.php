<?php 
    include_once("Funciones/VerificarURL.php");
    class Pokemon
    {
        private $Nombre;
        private $Aspecto1;
        private $Aspecto2;
        private $Tipo1;
        private $Tipo2;

        public function __construct($Id)
        {
            $ApiPoke="https://pokeapi.co/api/v2/pokemon-form/".strtolower($Id);
            if (!url_exists($ApiPoke)) {
                echo "tu pagina no existe";
                die;
            }
            $JsonPoke= file_get_contents($ApiPoke);
            $AnalizarPoke=json_decode($JsonPoke,true);

            $this->Nombre=ucfirst($AnalizarPoke["name"]) ;
            $this->Aspecto1= $AnalizarPoke["sprites"]["front_default"];
            $this->Aspecto2= $AnalizarPoke["sprites"]["front_shiny"];
            $this->Tipo1=$AnalizarPoke["types"][0]["type"]["name"];
            if (isset($AnalizarPoke["types"][1])) {
                $this->Tipo2= $AnalizarPoke["types"][1]["type"]["name"];
            }


        }
        //Trae los ventajas y desventajas
        public function GetDaños($Ubicacion,$Tipo)
        {
            if ($Tipo == 1) {
                $ApiTipo= "https://pokeapi.co/api/v2/type/" . $this->Tipo1;
                $JsonTipo=file_get_contents($ApiTipo);
                $AnalizarTipo=json_decode($JsonTipo,true);
                $Resultado= array();
                $i=0;
                while (isset($AnalizarTipo["damage_relations"][$Ubicacion][$i]["name"])) {
                    $ContenedorTemp= ucfirst($AnalizarTipo["damage_relations"][$Ubicacion][$i]["name"]);
                    array_push($Resultado, $ContenedorTemp);
                    $i++;
                }            
                return $Resultado;
            }elseif ($Tipo == 2) {
                $ApiTipo= "https://pokeapi.co/api/v2/type/" . $this->Tipo2;
                $JsonTipo=file_get_contents($ApiTipo);
                $AnalizarTipo=json_decode($JsonTipo,true);
                $Resultado= array();
                $i=0;
                while (isset($AnalizarTipo["damage_relations"][$Ubicacion][$i]["name"])) {
                    $ContenedorTemp= ucfirst($AnalizarTipo["damage_relations"][$Ubicacion][$i]["name"]);
                    array_push($Resultado, $ContenedorTemp);
                    $i++;
                }            
                return $Resultado;
            }
            
        }
        //Nombre
        public function GetNombre()
        {
            return $this->Nombre;
        }
        //Aspecto1
        public function GetAspecto1()
        {
            return $this->Aspecto1;
        }
        //Aspecto2
        public function GetAspecto2()
        {
            return $this->Aspecto2;
        }
        //Tipo1
        public function GetTipo1()
        {
            return $this->Tipo1;
        }
        //Tipo2
        public function GetTipo2()
        {
            return $this->Tipo2;
        }
    }
    








?>