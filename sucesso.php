<?php
require_once"conexao.php";
var_dump($_POST);
$nome = $_POST['nome'];
$cpf= $_POST['cpf'];
$telefone1 = $_POST['telefone1'];
$telefone2 = $_POST['telefone2'];
$nascimento = $_POST['nascimento'];
$sexo =$_POST['sexo'];
$email= $_POST['email'];
$senha= $_POST['senha'];

function salvandoDados($arrayPost, $conexao){
    global $con;
    $query = $conexao->prepare("INSERT INTO usuarios(nome, cpf,telefone1, telefone2, nascimento, sexo, email, senha) values (?,?,?,?,?,?,?,?)");
    try{
        $result = $query->execute([
            $arrayPost['nome'],
            $arrayPost['cpf'],
            $arrayPost['telefone1'],
            $arrayPost['telefone2'],
            $arrayPost['nascimento'],
            $arrayPost['sexo'],
            $arrayPost['email'],
            $arrayPost['senha'],
        ]);
        echo "<script>alert('produto cadastrado com sucesso')</script>";
    }catch(PDOException $e){
        echo"<script>alert('não vai ta dando, tente daqui uma semana')</script>";
        echo $e->getMessage();
    }
}
if($_POST){
    salvandoDados($_POST, $con);
}
?>