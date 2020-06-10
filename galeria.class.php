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
    function DeleteImg(){
      //faz algo
    }
    function UploadImg(){
      //faz algo
    }
    function ShowImg(){
      //faz algo
      return $CaminhoImg;
    }
  }
  $NovaImg = new Galeria_Fotos();
  $NovaImg->Codigo = 123;

  echo $NovaImg->Codigo;
?>
