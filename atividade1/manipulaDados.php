<?php
define('DIR_ARQUIVOS', 'arquivos');

function salvarDados(array $pessoa, $arquivo){
    $json = json_encode($pessoa, JSON_PRETTY_PRINT);
    file_put_contents(DIR_ARQUIVOS . "/" . $arquivo, $json);
}

function buscarDados($arquivo){
    $dados = array();
    $caminhoArquivo = DIR_ARQUIVOS . "/" . $arquivo;
    if (file_exists($caminhoArquivo)) {
        $json = file_get_contents($caminhoArquivo);
        $dados = json_decode($json, true);
    }
    return $dados;
}

function excluir(string $id, array $pessoas){
    $pessoas = array_filter($pessoas, function($p) use ($id) {
        return $p['id'] !== $id;
    });
    salvarDados($pessoas, "pessoas.json");

    header("location: pessoas.php");
}