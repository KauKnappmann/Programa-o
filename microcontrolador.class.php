<?php
    class Microcontrolador(){
        
    //Atributos - variáveis
    var $AcX;
    var $AcY;
    var $AcZ;

    //Métodos
    function Setup(){

    }
    function ReiniciarCom(){
        return 'Reiniciando';
    }
    function TrocarParaDedo1(){
       Loop();
    }
    function TrocarParaDedo2(){
       Loop();
    }
    function TrocarParaDedo3(){
       Loop();
    }
    function TrocarParaDedo4(){
       Loop();
    }
    function TrocarParaDedo5(){
       Loop();
    }
    function LerUmDedo(){
      return  $this->AcX
      return  $this->AcY
      return   $this->AcZ
    }
    function Loop($AcX,$AcY,$AcZ){
        $this->AcX = $AcX;
        $this->AcY = $AcY;
        $this->AcZ = $AcZ;
    }
}
?>