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

    }

    function FazMedia(){

    }

  }

  $MeuUsuario = new Usuario();

  $MeuUsuario->Nome = 'Kauana';
  $MeuUsuario->Idade = '18';
  $MeuUsuario->Ranking = '4';
  $MeuUsuario->IniciaJogo();

  echo $MeuUsuario->Nome;


?>
