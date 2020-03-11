<?php
// Controle da Interface
require_once('utils/utils.php');
 require_once ('classes/Upload.class.php');

  if ($_SERVER['REQUEST_METHOD'] ==  'GET'){
    $formulario = file_get_contents('veterinario.html');
    if (isset($_GET['id'])){
      $sql = 'SELECT * FROM veterinario WHERE id = :id';
      // prepara o comando para executar
      $comando = preparaComando($sql);
      $comando->bindParam(':id',$_GET['id']);
      // executar o $comando
      $veterinario = executaComando($comando)->fetch(); // pegando os dados do banco
      $formulario = preencherFormulario($formulario,$veterinario);
    }else{
      $formulario = str_replace('{nome}','',$formulario);
      $formulario = str_replace('{crmv}','',$formulario);
      $formulario = str_replace('{telefone}','',$formulario);
      $formulario = str_replace('{id}','',$formulario);
      $formulario = str_replace('{imagem}','',$formulario);
      $formulario = str_replace('{informacoes}','',$formulario);
    }
    print($formulario);
  }else if ($_SERVER['REQUEST_METHOD'] ==  'POST'){
    if (isset($_POST['nome'])){
      //tratamento de dados para inserção
      $nome = $_POST['nome'];
      $crmv = $_POST['crmv'];
      $telefone = $_POST['telefone'];
      $imagem = $_FILES['imagem'];
      $informacoes = $_POST['informacoes'];
      $id = $_POST['id'];
 
      if ($id > 0){
        // definir o comando que será executado no banco de dados
            $destino = "img/".$_FILES['imagem']['name'];
       move_uploaded_file($_FILES['imagem']['tmp_name'],$destino);
        $sql = 'UPDATE veterinario
                   SET nome = :nome, crmv = :crmv, telefone = :telefone, $destino = :imagem, informacoes = :informacoes
                 WHERE id = :id';
        // prepara o comando para executar
        $comando = preparaComando($sql);
        //vincular variáveis com os parâmetros do comando
        $comando->bindParam(':nome',$nome);
        $comando->bindParam(':crmv',$crmv);
        $comando->bindParam(':telefone',$telefone);
        $comando->bindParam(':imagem',$destino);
        $comando->bindParam(':informacoes',$informacoes);
        $comando->bindParam(':id',$id);
        // executar o $comando
        executaComando($comando);
        //echo "Cadastro atualizado com sucesso!";
        header("location:listaVeterinario.php");
      }
  
      else{
        // salvar cadastro no banco
        // definir o comando que será executado no banco de dados
        $destino = "img/".$_FILES['imagem']['name'];
       move_uploaded_file($_FILES['imagem']['tmp_name'],$destino);

        $sql = 'INSERT INTO veterinario (nome, crmv, telefone,imagem, informacoes)
                     VALUES (:nome,:crmv,:telefone, :imagem, :informacoes)';
        // prepara o comando para executar
       $dados = array(':nome'=>$nome,':crmv'=>$crmv,':telefone'=>$telefone,':imagem'=>$destino,':informacoes'=>$informacoes);
        $comando = preparaComando($sql);
        
        //vincular variáveis com os parâmetros do comando
        $comando->bindParam(':nome',$nome);
        $comando->bindParam(':crmv',$crmv);
        $comando->bindParam(':telefone',$telefone);
        $comando->bindParam(':imagem',$destino);
        $comando->bindParam(':informacoes',$informacoes);
        // executar o $comando
        executaComando($comando);
        header("location:listaVeterinario.php");
      }
    }
    }else{
      echo "Preencha todos os campos do formulário";
    }
  


 ?>
