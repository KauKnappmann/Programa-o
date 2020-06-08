<?php

  class EmailContato{
    //Atributos - Variáveis
    var $Nome;
    var $Email;
    var $SuaMensagem;

    //Métodos - Funções
    function GetNome(){
        return $this->Nome;
    }

    function SetNome($Nome){
        $this->Nome = $Nome;
    }

    function GetEmail(){
        return $this->Email;
    }

    function SetEmail($Email){
        $this->Email = $Email;
    }

    function GetSuaMensagem(){
        return $this->GetSuaMensagem;
    }

    function GetSuaMensagem($GetSuaMensagem){
        $this->GetSuaMensagem = $GetSuaMensagem;
    }

  }

  //Primeiro Objeto
  $MeuEmailContato = new EmailContato();
  $MeuEmailContato->Nome = 'Kauana';
  $MeuEmailContato->Email = 'kauanaknappmann@gmail.com';
  $MeuEmailContato->SuaMensagem = 'Eu adoro seu projeto, continue.';
  $MeuEmailContato->GetNome();
  $MeuEmailContato->SetNome($Nome);
  $MeuEmailContato->GetEmail();
  $MeuEmailContato->SetEmail($Email);
  $MeuEmailContato->GetSuaMensagem();
  $MeuEmailContato->GetSuaMensagem($GetSuaMensagem);


?>
