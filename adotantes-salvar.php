<?php 

include "inc-sessao-login.php";

$nome = $_POST['nomeadotante'];

// Explicando cada comando utilizado:
    // preg_replace('/\s+/', ' ', $nome) - Substitui mais de um espaço seguido por apenas um espaço
    // trim() - Remove os espaços no início e final da string
    // strtolower() - Deixa todas as letras da string em minúsculo
    // ucwords() - Todas as palavras (Texto inicial e subsequentes separados por espaço) da string terão o primeiro caractere convertido para maiúsculo 
$nomeTratado = ucwords(strtolower(trim(preg_replace('/\s+/', ' ', $nome) ) ) );


$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$idnomeanimal = $_POST['nomeanimal'];
$nomeanimal = "";
$cep = $_POST['cep'];
$numeroresidencia = $_POST['numeroresidencia'];
$complemento = $_POST['complemento'];

include "inc-conexao.php";

$sql = "SELECT nome FROM tb_informacoes_gatos WHERE id = ?";
$resultadoNome = mysqli_execute_query($conn, $sql, [$idnomeanimal]);

if($linha_resultado = mysqli_fetch_assoc($resultadoNome) ){
    $nomeanimal = $linha_resultado['nome'];
}

$resultado = mysqli_execute_query($conn, "INSERT INTO tb_adotantes(nome_adotante, cpf, telefone, animal_adotado, cep, numero_residencia, complemento) VALUES (?, ?, ?, ?, ?, ?, ?)", [$nomeTratado, $cpf, $telefone, $nomeanimal, $cep, $numeroresidencia, $complemento]);

mysqli_close($conn);
header("location: adotantes-formulario.php?mensagem=sucesso");
exit;

?>