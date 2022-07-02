<?php
include_once('../include/header.php');

if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
    if ($acao == 'bemvindo') {
        include_once('../paginas/conteudo/blank.php');
    } elseif ($acao == 'cadastro_turmas') {
        include_once('../paginas/conteudo/cadastro_turmas.php');
    } elseif ($acao == 'alunos') {
        include_once('../paginas/conteudo/alunos.php');
    } elseif ($acao == 'cadastro_alunos') {
        include_once('../paginas/conteudo/cadastro_alunos.php');
    } elseif ($acao == 'turmas') {
        include_once('../paginas/conteudo/turmas.php');
    } elseif ($acao == 'editar_alunos') {
        include_once('../paginas/conteudo/editar_alunos.php');
    } elseif ($acao == 'estoque') {
        include_once('../paginas/conteudo/estoque.php');
    } elseif ($acao == 'cadastro_estoque') {
        include_once('../paginas/conteudo/cadastro_estoque.php');
    }elseif ($acao == 'lista de suprimentos') {
        include_once('../paginas/conteudo/suprimentos.php');
    } elseif ($acao == 'cadastro_estoque') {
        include_once('../paginas/conteudo/cadastro_suprimentos.php');
    }
} else {
    include_once('../paginas/conteudo/blank.php');
}

include_once('../include/footer.php');

