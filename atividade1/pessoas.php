<?php

include_once("manipulaDados.php");

$nomeArquivo = "pessoas.json";

$pessoas = buscarDados($nomeArquivo);

$nome = "";
$idade = "";
$genero = "";
$cpf = "";
$cidade = "";

$erros = "";

if(isset($_POST['nome'])){

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $genero = $_POST['genero'];
    $cpf = $_POST['cpf'];
    $cidade = $_POST['cidade'];

    $id = vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4));

    if(trim($nome) == ""){
        $erros = "Informe o nome<br>";
    }
    if(trim($idade) == ""){
        $erros = $erros."Informe a idade<br>";
    } 
    if(trim($genero) == ""){
        $erros = $erros."Informe o gênero<br>";
    } 
    if(trim($cpf) == ""){
        $erros = $erros."Informe o CPF<br>";
    } 
    if(trim($cidade) == ""){
        $erros = $erros."Informe a cidade natal<br>";
    }

    if(! $erros){
        $pessoa = array("id" => $id, "nome" => $nome, "idade" => $idade, "genero" => $genero, "cpf" => $cpf, "cidade" => $cidade);
        array_push($pessoas, $pessoa);
        salvarDados($pessoas, $nomeArquivo);

        header("location: pessoas.php");
    }

}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de pessoas</title>
</head>
<body>
    <h1>Informe os dados da pessoa</h1>

    <h3>CADASTRO</h3>

    <form action="" method="post">

        <input type="text" name="nome" value="<?php echo $nome?>" placeholder="Informe o nome">
        <br><br>
        <input type="number" name="idade" value="<?php echo $idade?>" placeholder="Informe a idade">
        <br><br>
        <select name="genero" id="">
            <option value="">Selecione o gênero</option>
            <option value="M" <?php echo ($genero=="M")? "selected" : ""?>>Masculino</option>
            <option value="F" <?php echo ($genero=="F")? "selected" : ""?>>Feminino</option>
            <option value="NI" <?php echo ($genero=="NI")? "selected" : ""?>>Não informar</option>
        </select>
        <br><br>
        <input type="text" name="cpf" placeholder="Infome o cpf(apenas números)" value="<?php echo $cpf?>">
        <br><br>
        <input type="text" name="cidade" placeholder="Cidade natal" value="<?php echo $cidade?>">
        <br><br>

        <button type="submit">Cadastrar</button>

    </form>
</body>
</html>