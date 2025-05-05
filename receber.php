<?php
// Verifica se os dados foram enviados por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $sobrenome = htmlspecialchars($_POST['sobrenome']);
    $data_nascimento = htmlspecialchars($_POST['data_nascimento']);
    $email = htmlspecialchars($_POST['email']);

    // Exibe a mensagem de sucesso
    echo "<h2>Cadastro realizado com sucesso!</h2>";
    echo "<p>O participante <strong>$nome</strong> foi cadastrado com sucesso.</p>";
    echo "<p><strong>Sobrenome:</strong> $sobrenome</p>";
    echo "<p><strong>Data de Nascimento:</strong> $data_nascimento</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
} else {
    // Redireciona de volta se acessado diretamente
    header("Location: cadastro.html");
    exit();
}
?>