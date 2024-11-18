<?php

// Verificar os dados do formulário utilizando o método POST

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $senha = $_POST['senha'];

    if($senha === '210312'){
        // redireciona para a página de 'boas-vindas'
        header("Location:4b_bem_vindo.php");
        exit();
    }

}else{

    // mensagem de erro
    $erro = "Senha incorreta. Tente novamente!";
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página de Login</title>
</head>
<body>
    <h2>Digite a senha para continuar:</h2>
    <form method="post" action="">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>
        <button type="submit">Entrar</button>
    </form>

    <?php

    // 2° parte em PHP, retorna o valor de acordo com a condicional
    // Exibe a mensagem de erro, se existir
    if (isset($erro)) {
        echo "<p style='color: red;'>$erro</p>";
    }
    ?>
</body>
</html>


