<?php

  class ControleDeVersao{

    //Atributos - variáveis
    var $Relatorio;
    var $Codigos;
    var $Imagem;

    //Métodos - funções
    function UstangedChangeRelario($Relatorio){
        $this->Relatorio = $Relatorio;
    }

    function StangedChangeRelario(){
        return $this->Relatorio;
    }

    function UstangedChangeCodigos($Codigos){
        $this->Codigos = $Codigos;
    }

    function StangedChangeCodigos(){
        return $this->Codigos;
    }

    function UstangedChangeImagem($Imagem){
        $this->Imagem = $Imagem;
    }

    function StangedChangeImagem(){
        return $this->Imagem;
    }

    function PushRelatorio(){
        return $this->Relatorio;
    }

    function PushCodigos(){
        return $this->Codigos;
    }

    function PushImagem(){
        return $this->Imagem;
    }
    
  }
?>
