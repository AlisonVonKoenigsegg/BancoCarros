<?php

    public function ValidaCampos()
    {
        $retorno = true;
        if ($this->modelo == "")
        {
            echo "É necessário o modelo do carro";
            $retorno = false;
        }
        if ($this->marca == "")
        {
            echo "É necessário a marca do carro";
            $retorno = false;
        }
        if ($this->descricao == "")
        {
            echo "Fale um pouco sobre o carro";
            $retorno = false;
        }
        if ($this->portas == "")
        {
            echo "Diga a quantidade de portas";
            $retorno = false;
        }
        if ($this->ano_fab == "")
        {
            echo "Necessário o ano de fabricação do veículo";
            $retorno = false;
        }
        if($this->ano_mod == "")
        {
            echo "Ano do modelo está sendo requisitado";
            $retorno = false;
        }
        if($this->cor == "")
        {
            echo "Qual a cor do carro ?";
            $retorno = false;
        }
        if ($this->km == "")
        {
            echo "";
            $retorno = false;
        }
        if ($this->placa == "")
        {
            echo "Diga a placa do veículo";
            $retorno = false;
        }

        if($this->valor == "")
        {
            echo "diga o preco do carro";
            $retorno = false;
        }
        
        if ($this->fotonome1 == "")
        {
            echo "Coloque uma foto do carro."
            $retorno = false;
        }
        return $retorno;
    }

    public function Incluir()
    {
        $data = [
            'modelo' => $this->Getmodelo(),
            'marca' => $this->Getmarca(),
            'descricao' => $this ->Getdescricao(),
            'portas' => $this ->Getportas(),
            'ano_fab' => $this->Getano_fab(),
            'ano_mod' => $this->Getano_mod(),
            'cor' => $this->Getcor(),
            'km' => $this->Getkm(),
            'placa' => $this->Getplaca(),
            'valor' => $this->Getvalor(),
            'obs' => $this->Getobg(),
            'fotonome1' => $this->Getfotonome1(),
            'fotonome2' => $this->Getfotonome2(),
            'fotonome3' => $this->Getfotonome3(),
            'fotonome4' => $this->Getfotonome4(),

        ];
        $sql = "INSERT INTO veiculos ( modelo, marca, descricao, portas, ano_fab, ano_mod, cor, km, placa, valor, obs, fotonome1, fotonome2, fotonome3, fotonome4 ) VALUES (:modelo, :marca, :descricao, :portas, :ano_fab, :ano_mod, :cor, :km, :placa, :valor, :obs, :fotonome1, :fotonome2, :fotonome3, :fotonome4)";
        $stmt= $this->prepare($sql);
        $resp = $stmt->execute($data);
        return $resp;
    }

    public function Excluir($id)
    {
        $sql = "DELETE FROM `veiculos` WHERE codigovei=".$id;
        $this->query($sql);
    }

    public function Consultar ($id)
    {
        $sql = "SELECT * FROM veiculos where codigovei=".$id;
        if($base = $this->query($sql)){
 
            while($row = $base->fetchObject())
                {
                 $this->Setcodigovei( $row->codigovei );
                 $this->Setmodelo( $row->modelo );
                 $this->Setmarca( $row->marca );
                 $this->Setdescricao( $row->descricao );
                 $this->Setportas($row->portas );
                 $this->Setano_fab($row->ano_fab );
                 $this->Setano_mod($row->ano_mod );
                 $this->Setcor($row->cor );
                 $this->Setkm($row->km );
                 $this->Setplaca($row->placa );
                 $this->Setvalor($row->valor );
                 $this->Setobs($row->obs );
                 $this->Setfotonome1($row->fotonome1 );
                 $this->Setfotonome2($row->fotonome2 );
                 $this->Setfotonome3($row->fotonome3 );
                 $this->Setfotonome4($row->fotonome4 );
                 
               return true;
            }
         }
         return false;
    }

?>