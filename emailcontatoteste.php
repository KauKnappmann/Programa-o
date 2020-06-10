<?php

  require_onde('emailcontato.class.php');

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

  //Segundo Objeto
  $MeuEmailContato = new EmailContato();
  $MeuEmailContato->Nome = 'Maria Cecilia';
  $MeuEmailContato->Email = 'mariaceciliaholler@gmail.com';
  $MeuEmailContato->SuaMensagem = 'Estou empolgada com as novidades.';
  $MeuEmailContato->GetNome();
  $MeuEmailContato->SetNome($Nome);
  $MeuEmailContato->GetEmail();
  $MeuEmailContato->SetEmail($Email);
  $MeuEmailContato->GetSuaMensagem();
  $MeuEmailContato->GetSuaMensagem($GetSuaMensagem);

 ?>
