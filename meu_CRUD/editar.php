<?php

require 'config.php';

$id = filter_input(INPUT_GET, 'id');
$dadosUsuario = [];

if($id){

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
    $sql->bindValue(':id',$id);
    $sql->execute();

    if($sql->rowCount() > 0){
        $dadosUsuario = $sql->fetch(PDO::FETCH_ASSOC);
    }else{
        header("Location: index.php");
        exit;
    }

}else{
    header("Location: index.php");
    exit;
}

?>

<h2>Editar Usuário</h2>

<form method="POST" action="editar_action.php">
    <!-- Envia dados de forma oculta (POST) -->
    <input type="hidden" name="id" value="<?=$dadosUsuario['id'];?>">
    <label>
        Nome: <br>
        <input type="text" name="nome" value="<?=$dadosUsuario['nome'];?>">
    </label> <br><br>

    <label>
        E-Mail: <br>
        <input type="email" name="email" value="<?=$dadosUsuario['email'];?>">
    </label> <br> <br>

    <input type="submit" value="Salvar">

</form>