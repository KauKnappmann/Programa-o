<?php

require_once('microcontrolador.class.php');

//Primeiro Objeto
$NovoDado = new Microcontrolador();
$NovoDado->AcX = 1;
$NovoDado->AcY = 4;
$NovoDado->AcZ = 300;
$NovoDado->Setup();
$NovoDado->ReiniciarCom();
$NovoDado->TrocarParaDedo1();
$NovoDado->TrocarParaDedo2();
$NovoDado->TrocarParaDedo3();
$NovoDado->TrocarParaDedo4();
$NovoDado->TrocarParaDedo5();
$NovoDado->LerUmDedo();
$NovoDado->Loop();
echo $NovoDado->AcZ;

//Segundo Objeto
$NovoDado = new Microcontrolador();
$NovoDado->AcX = 200;
$NovoDado->AcY = 100;
$NovoDado->AcZ = 1000;
$NovoDado->Setup();
$NovoDado->ReiniciarCom();
$NovoDado->TrocarParaDedo1();
$NovoDado->TrocarParaDedo2();
$NovoDado->TrocarParaDedo3();
$NovoDado->TrocarParaDedo4();
$NovoDado->TrocarParaDedo5();
$NovoDado->LerUmDedo();
$NovoDado->Loop();
echo $NovoDado->AcZ;

?>