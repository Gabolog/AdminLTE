<?php
include_once('../include/header.php');

if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
    if ($acao == 'bemvindo') {
        include_once('../paginas/conteudo/blank.php');
    } elseif ($acao == 'principal') {
        include_once('../paginas/conteudo/principal.php');
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
    }elseif ($acao == 'produtos') {
        include_once('../paginas/conteudo/produtos.php');
    } elseif ($acao == 'cadastro_produtos') {
        include_once('../paginas/conteudo/cadastro_produtos.php');
    } elseif ($acao == 'estoque') {
        include_once('../paginas/conteudo/estoque.php');
    } elseif ($acao == 'cadastro_estoque') {
        include_once('../paginas/conteudo/cadastro_estoque.php');
    } elseif ($acao == 'vendas') {
        include_once('../paginas/conteudo/vendas.php');
    } elseif ($acao == 'faturas') {
        include_once('../paginas/conteudo/faturas.php');
    } elseif ($acao == 'fluxo_de_caixa') {
        include_once('../paginas/conteudo/fluxo_caixa.php');
    }
} else {
    include_once('../paginas/conteudo/blank.php');
}

include_once('../include/footer.php');

