<?php
require_once"conexao.php";
$nome = $_POST['nome'];
$cpf= $_POST['cpf'];
$telefone1 = $_POST['telefone1'];
$telefone2 = $_POST['telefone2'];
$nascimento = $_POST['nascimento'];
$sexo =$_POST['sexo'];
$email= $_POST['email'];
$senha= $_POST['senha'];
$erros = [];

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
        echo "<script>alert('cadastro realizado com sucesso')</script>";
    }catch(PDOException $e){
        echo"<script>alert('estamos em manutenção')</script>";
        echo $e->getMessage();
    }
}
if($_POST){
    salvandoDados($_POST, $con);
}
function validarNome($nome){
    return strlen($nome)>0;
}
function validarCpf($cpf){
    return strlen($cpf)==11;
}
function validarTelefone1($telefone1){
    return strlen($telefone1)==11;
}
function validarTelefone2($telefone2){
    return strlen($telefone2)==11;
}
// function validarNacimento($nascimento){ fazer função par apenas pessoas maiores de idade acessem o site
//     return strlen($nascimento)>0;
// }
function validarSexo($sexo){
    return strlen($Se)>0;
}
function validarEmail($email){
    return strlen($email)>0;
}
function validarSenha($senha){
    return strlen($senha)>=8;
}
function validarCadastro($nome, $cpf, $telefone1, $telefone2, $sexo, $email, $senha){
global $erros;
if(!validarNome($nome)){
    array_push($erros, "Preencha o nome corretamente");
}
if(!validarNome($cpf)){
    array_push($erros, "Preencha o cpf com 11 digitos");
}
if(!validarNome($telefone1)){
    array_push($erros, "Preencha o  numero de telefone corretamente");
}
if(!validarNome($telefone2)){
    array_push($erros, "Preencha o numero de telefone corretemanete");
}
if(!validarNome($email)){
    array_push($erros, "Preencha seu email corretamente");
}
if(!validarNome($senha)){
    array_push($erros, "sua senha tem que ter no minimo 8 digitos");
}
}
 validarCadastro($nome, $cpf, $telefone1, $telefone2, $sexo, $email, $senha);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <?php if(count($erros) > 0): ?>
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <span>Preencha seus dados corretamente!</span>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <?php foreach($erros as $key=>$value){
                                ?>
                        <li class="list-group-item">
                            <?=$value;?>
                        </li>
                        <?php } ?>
                    </ul>
                    <div class="center">
                        <a href="#">Voltar para home</a>
                    </div>
                </div>
            </div>
            <?php else:?>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span>Cadastro realizado com sucesso</span>
                </div>
                    <div class="center">
                        <a href="#">Voltar para home</a>
                    </div>
                </div>
            </div>
            <?php endif;?>
        </div>
    </div>
</body>

</html>