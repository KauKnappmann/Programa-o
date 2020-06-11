<?php

  class Galeria_Fotos{

    //Atributos - variáveis
    var $Codigo;
    var $NomeImg;
    var $DescricaoImg;
    var $CaminhoImg;


    //Métodos - funções
    function UploadImg(){
      //faz algo
      return 1;
    }
    function DeleteImg($Codigo){
      //faz algo
      $this->Codigo = $Codigo;
    }
    function UpdateImg(){
      //faz algo
      return 2;
    }
    function ShowImg(){
      //faz algo
      return $this->CaminhoImg;
    }
  }

?>
