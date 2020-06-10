<?php

//Primeiro Objeto
  $MeuControle = new Controle();
  $MeuControle->Relatorio = 'Artigo sobre acelerometros';
  $MeuControle->Codigos = 'if($valor > 9){ echo true;}';
  $MeuControle->Imagem = 'LuvaAberta.png';
  $MeuControle->UstangedChangeRelario($Relatorio);
  $MeuControle->StangedChangeRelario();
  $MeuControle->UstangedChangeCodigos($Codigos);
  $MeuControle->StangedChangeCodigos();
  $MeuControle->UstangedChangeImagem($Imagem);
  $MeuControle->StangedChangeImagem();
  $MeuControle->PushRelatorio();
  $MeuControle->PushCodigos();
  $MeuControle->PushImagem();

  //Segundo Objeto
  $MeuControle = new Usuario();
  $MeuControle->Relatorio = 'PDF TCC final';
  $MeuControle->Codigos = 'if($valor > 99){ echo false;}';
  $MeuControle->Imagem = 'apresentacao.png';
  $MeuControle->UstangedChangeRelario($Relatorio);
  $MeuControle->StangedChangeRelario();
  $MeuControle->UstangedChangeCodigos($Codigos);
  $MeuControle->StangedChangeCodigos();
  $MeuControle->UstangedChangeImagem($Imagem);
  $MeuControle->StangedChangeImagem();
  $MeuControle->PushRelatorio();
  $MeuControle->PushCodigos();
  $MeuControle->PushImagem();

  //Terceiro Objeto
  $MeuControle = new Usuario();
  $MeuControle->Relatorio = 'Microcontrolador PDF';
  $MeuControle->Codigos = 'if($valor >= 1){ echo true;}';
  $MeuControle->Imagem = 'NodeMCU.png';
  $MeuControle->UstangedChangeRelario($Relatorio);
  $MeuControle->StangedChangeRelario();
  $MeuControle->UstangedChangeCodigos($Codigos);
  $MeuControle->StangedChangeCodigos();
  $MeuControle->UstangedChangeImagem($Imagem);
  $MeuControle->StangedChangeImagem();
  $MeuControle->PushRelatorio();
  $MeuControle->PushCodigos();
  $MeuControle->PushImagem();
?>