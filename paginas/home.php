<?php
include_once('../include/header.php');

if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
    if ($acao == 'bemvindo') {
        include_once('../paginas/conteudo/blank.php');
    } elseif ($acao == 'Cadastro_aluno') {
        include_once('../paginas/conteudo/cadastro_alunos.php');
    } elseif ($acao == 'Alunos') {
        include_once('../paginas/conteudo/alunos.php');
    } elseif ($acao == 'Turmas') {
        include_once('../paginas/conteudo/Turmas.php');
    }
} else {
    include_once('../paginas/conteudo/Turmas.php');
}

include_once('../include/footer.php');
