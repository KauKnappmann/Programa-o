<?php

  class Usuario{
    //Atributos - Variáveis
    var $Nome;
    var $Idade;
    var $Ranking;
    var

    //Métodos - Funções

    function IniciaJogo(){
      //faz alfo
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
