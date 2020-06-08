<?php

  class Usuario{
    //Atributos - Variáveis
    var $Nome;
    var $Idade;
    var $Ranking;

    //Métodos - Funções
    function GetNome(){
        return $this->Nome;
    }

    function SetNome($Nome){
        $this->Nome = $Nome;
    }

    function AvaliaAcertos($Ranking){
        $this->Ranking = $Ranking;
    }

    function FazMedia($Ranking){
        $this->Ranking = $Ranking;
    }
    
  }
?>
