<?php

require_once('galeria.class.php');

//Primeiro Objeto
$NovaImg = new Galeria_Fotos();
$NovaImg->Codigo = 123;
$NovaImg->NomeImg = 'Foto1';
$NovaImg->DescricaoImg = 'Nesta foto, temos uma foto';
$NovaImg->CaminhoImg = 'Programa-o/img/..';
$NovaImg->UploadImg();
$NovaImg->DeleteImg();
$NovaImg->UpdateImg();
$NovaImg->ShowImg();
echo $NovaImg->Codigo;

//Segundo Objeto
$NovaImg2 = new Galeria_Fotos();
$NovaImg2->Codigo = 321;
$NovaImg2->NomeImg = 'Foto2';
$NovaImg2->DescricaoImg = 'Nesta foto, temos mais uma foto';
$NovaImg2->CaminhoImg = 'Programa-o/img/..';
$NovaImg2->UploadImg();
$NovaImg2->DeleteImg();
$NovaImg2->UpdateImg();
$NovaImg2->ShowImg();


echo $NovaImg2->Codigo;
?>