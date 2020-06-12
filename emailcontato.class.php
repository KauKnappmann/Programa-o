<?php

  class EmailContato{
    //Atributos - Variáveis
    var $Nome;
    var $Email;
    var $SuaMensagem;
    var $Resposta;

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

    function MandaResposta(){
        return "Obrigada pela ajuda.";
    }

  }

?>
