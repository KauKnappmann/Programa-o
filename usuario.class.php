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

  //Primeiro Objeto
  $MeuUsuario = new Usuario();
  $MeuUsuario->Nome = 'Kauana';
  $MeuUsuario->Idade = '18';
  $MeuUsuario->Ranking = '4';
  $MeuUsuario->GetNome();
  $MeuUsuario->SetNome();
  $MeuUsuario->AvaliaAcertos();
  $MeuUsuario->FazMedia();

  //Segundo Objeto
  $MeuUsuario = new Usuario();
  $MeuUsuario->Nome = 'Maria Cecilia';
  $MeuUsuario->Idade = '17';
  $MeuUsuario->Ranking = '7';
  $MeuUsuario->GetNome();
  $MeuUsuario->SetNome();
  $MeuUsuario->AvaliaAcertos();
  $MeuUsuario->FazMedia();

  //Terceiro Objeto
  $MeuUsuario = new Usuario();
  $MeuUsuario->Nome = 'Paula Emanuele';
  $MeuUsuario->Idade = '17';
  $MeuUsuario->Ranking = '2';
  $MeuUsuario->GetNome();
  $MeuUsuario->SetNome();
  $MeuUsuario->AvaliaAcertos();
  $MeuUsuario->FazMedia();

  echo $MeuUsuario->Nome;


?>
