<?php 

class Tipo 
{
    private $Tipo1;
    private $AtaqueVentaja;
    Private $AtaqueDesventaja;
    private $DefensaVentaja;
    private $DefensaDesventaja;
    Private $DañoSinEfecto;
    private $DefensaSinEfecto;

    public function __construct($Tipo1)
    {
        $this->Tipo1= $Tipo1;
        $this->AtaqueVentaja= $this->VentaDesventa("double_damage_to");
        $this->AtaqueDesventaja= $this->VentaDesventa("half_damage_to");
        $this->DefensaVentaja= $this->VentaDesventa("double_damage_from");
        $this->DefensaDesventaja= $this->VentaDesventa("half_damage_from");
        $this->DañoSinEfecto= $this->VentaDesventa("no_damage_to");
        $this->DefensaSinEfecto= $this->VentaDesventa("no_damage_from");
    }

    public function VentaDesventa($Ubicacion){
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
    }
    public function GetTipo(){
        return $this->Tipo1;
    }
    public function GetAtaqueVentaja(){
        return $this->AtaqueVentaja;
    }
    public function GetAtaqueDesventaja(){
        return $this->AtaqueDesventaja;
    }
    public function GetDefensaVentaja(){
        return $this->DefensaVentaja;
    }
    public function GetDefensaDesventaja(){
        return $this->DefensaDesventaja;
    }
    public function GetDañoSinEfecto(){
        return $this->DañoSinEfecto;
    }
    public function GetDefensaSinEfecto(){
        return $this->DefensaSinEfecto;
    }


}














?>