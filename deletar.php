<?php

require_once('utils/utils.php');
require_once('veterinario.php');



// $del = "DELETE FROM autoriza WHERE ID =".$_POST['id'];
// $delgo = mysql_query($del) or die('Erro ao deletar');
// echo "deletado";
//excluir linha da tabela
        $sql = 'DELETE from veterinario WHERE id = :id';

        $comando = preparaComando($sql);

        $comando->bindParam(':id', $_GET['id']);


        executaComando($comando);
        header("location:listaVeterinario.php");
?>