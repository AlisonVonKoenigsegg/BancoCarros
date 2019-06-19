<?php

class Carros extends PDO 
{
    private $codigovei, $modelo, $marca, $descricao, $portas, $ano_fab, $ano_mod, $cor, $km, $placa, $valor, $obs, $dtinclu, $ativo, $fotonome1, $fotonome2, $fotonome3, $fotonome4;

    public function Getcodigovei()
    {
        return $this->codigovei;
    }

    public function Setcodigovei($value)
    {
        $this->codigovei = $value;
    }

    public function Getmodelo()
    {
        return $this->modelo;
    }

    public function Setmodelo($value)
    {
        $this->modelo = $value;
    }

    public function Getmarca()
    {
        return $this->marca;
    }

    public function Setmarca($value)
    {
        $this->marca = $value;
    }

    public function Getdescricao()
    {
        return $this->descricao;
    }

    public function Setdescricao($value)
    {
        $this->descricao = $value;
    }

    public function Getportas()
    {
        return $this->portas;
    }

    public function Setportas($value)
    {
        $this->portas = $value;
    }

    public function Getano_fab()
    {
        return $this->ano_fab;
    }

    public function Setano_fab($value)
    {
        $this->ano_fab = $value
    }
    
    public function Getano_mod()
    {
        return $this->ano_mod;
    }

    public function Setano_mod($value)
    {
        $this->ano_mod = $value
    }

    public function Getcor()
    {
        return $this->cor;
    }

    public function Setcor($value)
    {
        $this->cor = $value
    }

    public function Getkm()
    {
        return $this->km;
    }

    public function Setkm($value)
    {
        $this->km = $value
    }

    public function Getplaca()
    {
        return $this->placa;
    }

    public function Setplaca($value)
    {
        $this->placa = $value
    }

    public function Getvalor()
    {
        return $this->valor;
    }

    public function Setvalor($value)
    {
        $this->valor = $value
    }

    public function Getobs()
    {
        return $this->obs;
    }

    public function Setobs($value)
    {
        $this->obs = $value
    }

    public function Getfotonome1()
    {
        return $this->fotonome1;
    }

    public function Setfotonome1($value)
    {
        $this->fotonome1 = $value
    }

    public function Getfotonome2()
    {
        return $this->fotonome2;
    }

    public function Setfotonome2($value)
    {
        $this->fotonome2 = $value
    }

    public function Getfotonome3()
    {
        return $this->fotonome3;
    }

    public function Setfotonome3($value)
    {
        $this->fotonome3 = $value
    }

    public function Getfotonome4()
    {
        return $this->valor;
    }

    public function Setfotonome4($value)
    {
        $this->valor = $value
    }

    include "classCarros2.php";
}
?>