<?php

  class Usuario{
    //Atributos - Variáveis
    var $Nome;
    var $Idade;
    var $Ranking;

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

  echo $MeuUsuario->Nome;


?>
