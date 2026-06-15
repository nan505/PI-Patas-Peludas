<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$conteudo = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!$conteudo) {
    header("Location: adocao-formulario.php");
    exit;
}

ob_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario de Adotante</title>
    <style>
            body{
                font-family: Arial, sans-serif;
                font-size: 12px;
                margin: 30px;
            }

            h1{
                text-align: center;
            }

            section{
                margin-bottom: 20px;
                border: 1px solid #ccc;
                padding: 10px;
            }
    </style>
</head>
<body>

<h1>Patinhas Peludas</h1>
<section>   
    <h2>Informações do Adotante:</h2>
    
    <p>Nome: <?= $conteudo['nome'] ?></p>
    <p>Endereço: <?= $conteudo['endereco'] ?></p>
    <p>RG: <?= $conteudo['rg'] ?></p>
    <p>CPF: <?= $conteudo['cpf'] ?></p>
    <p>Telefone: <?= $conteudo['telefone'] ?></p>
    <p>Email: <?= $conteudo['email'] ?></p>
</section>
    
    <section>
    <h2>Informações do Animal</h2>

    <p>Nome: <?= $conteudo['nomeAnimal'] ?></p>
    <p>Raça: <?= $conteudo['raca'] ?></p>
    <p>Idade: <?= $conteudo['idade'] ?></p>
    <p>Porte: <?= $conteudo['porte'] ?></p>
    <p>Espécie: <?= $conteudo['especie'] ?></p>
    <p>Sexo: <?= $conteudo['sexo'] ?></p>
    <p>Castrado: <?= $conteudo['castrado'] ?></p>
    <p>Vermifugado nos últimos três meses? <?= $conteudo['vermifugado'] ?></p>
    <p>Vacinado: <?= $conteudo['vacinado'] ?></p>
    <p>Observações: <?= $conteudo['observacoes'] ?></p>
</section>
    <div style="page-break-before: always;"></div>
<section>
        <h2>DECLARAÇÃO DO(A) ADOTANTE:</h2>
        <p>
        Eu (nome completo) ______________________________________________________, ciente das minhas obrigações enquanto adotante do(a) ____________________________________________ (nome do animal), declaro-me apto(a) para assumir a guarda e a responsabilidade sobre o mesmo, eximindo o doador de toda e qualquer responsabilidade por quaisquer atos praticados pelo e com o animal a partir desta data, exceto no que diz respeito à castração, se assim foi acordado.
    </p>
<br>
<h3>Declaro ainda que:</h3>
    <p>
     1. Comprometo-me a realizar visitas periódicas ao veterinário, bem como a manter a vacinação e vermifugação em dia, arcando com todas as despesas e dedicando todo o tempo necessário para que o animal adotado tenha plena saúde e qualidade de vida, estando ciente de que cães e gatos podem chegar a viver até 20 anos. 
    </p>
    
    <p>
        2. Atesto que já tomei (ou tomarei muito em breve) todas as medidas possíveis para garantir a segurança e o bem-estar do animal adotado, como por exemplo telas em janelas de apartamentos, cercas ou muros em casas com pátio, coleira e guia para passeios diários, local para água e alimento e um local confortável para o descanso. 
    </p>

    <p>
        3. Se minha residência for um apartamento, comprometo-me a realizar no mínimo dois passeios diários com o animal para que ele possa fazer suas necessidades e realizar atividades para gasto de energia.
    </p>

    <p>
        4. Se minha residência for uma casa, comprometo-me a deixar o animal sempre solto no pátio e com acesso livre a espaços cobertos da casa, de forma que sempre fique protegido das intempéries (frio, calor, chuva etc). 
    </p>

    <p>
        5. Comprometo-me a nunca, sob qualquer hipótese, manter o animal adotado preso à qualquer tipo de corrente ou em cubículos ou espaços minúsculos.
    </p>

    <p>
        6. Caso eu precise mudar de residência, comprometo-me a sempre pensar no animal adotado para fazer minhas escolhas, assegurando que ele possa me acompanhar e estar sempre protegido por mim até o final de sua vida.
    </p>

    <p>
        7. Asseguro que tenho com quem deixar o animal em caso de viagens ou afastamentos temporários.
    </p>

    <p>
        8. Comprometo-me a nunca deixar o animal sozinho por mais de 10h, providenciando sempre pessoas que possam cuidá-lo e alimentá-lo caso necessite de períodos maiores de afastamento.
    </p>

    <p>
        9. Comprometo-me, também, a permitir o acesso do doador, e a quem com ele se encontrar, ao local de residência do animal, para averiguação de suas condições. 
    </p>
    <p>
             Tenho conhecimento de que, caso seja constatado por parte do doador ou qualquer pessoa ou órgão, que o animal se encontra em situação inadequada para seu bem-estar, perderei a sua guarda, sem prejuízo das penalidades legais, administrativas, cíveis e criminais. Declaro-me, assim, ciente das normas acima, as quais aceito, assinando o presente Termo de Adoção Responsável, assumindo plenamente os deveres que dele constam, bem como outros relacionados à posse responsável e que não estejam incluídos neste Termo.  
    </p>
    <p>__________________________________ , ______ de _______________________ de 20______</p>

    <div class="assinaturas">
        <p>Assinatura do Doador</p>
        <p>CPF / CNPJ: ________________________</p>
        <p>Assinatura do Adotante</p>
        <p>CPF / CNPJ: ________________________</p>
    </div>

    </section>
</body>
</html>

<?php
$html = ob_get_clean();

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("formulario.pdf", ["Attachment" => false]);

?>
