<?php

define('DIR_ARQUIVOS', 'arquivos');

function salvarDados(array $dados, string $nomeArquivo){
    $json = json_encode($dados, JSON_PRETTY_PRINT);
    file_put_contents(DIR_ARQUIVOS . "/" . $nomeArquivo, $json);
}

function buscarDados(string $nomeArquivo){
    $dados = array();
    $caminhoArquivo = DIR_ARQUIVOS . "/" . $nomeArquivo;
    if (file_exists($caminhoArquivo)) {
        $json = file_get_contents($caminhoArquivo);
        $dados = json_decode($json, true);
    }
    return $dados;
}
function excluir(string $id, array $livros){
    $livros = array_filter($livros, function($livro) use ($id) {
        return $livro['id'] !== $id;
    });
    salvarDados($livros, "livros.json");

    header("location: livro.php");
}