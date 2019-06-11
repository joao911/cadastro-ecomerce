<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo/cadastro.css">
    <title>cadastro</title>
</head>

<body>
    <div class="container d-flex dados">
        <div class="col-lg-6 dados" >
            <h1>Dados Pessoais</h1>

            <form class="col-lg-12" action="sucesso.php" method="post">
                <div class="form- nome">
                    <label for="formGroupExampleInput">Nome completo</label>
                    <input type="text" class="form-control col-lg-8" name="nome"id="nome" placeholder="Ex: José da Silva Pereira ">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Cpf</label>
                    <input type="number" class="form-control col-lg-8 "name="cpf" id="cpf" placeholder="Ex:122.456.789.00">
                </div>
                <label for="formGroupExampleInput2 ">Telefone</label>
                <select class="form-control col-lg-8">
                    <option>Residencial</option>
                    <option>Comercial</option>
                    <option>Celular</option>
                </select>
                <div class="d-flex">
                    <input type="number" class="form-control number col-lg-8"name="telefone1" id="telefone1" placeholder="EX: 11956677789">
                </div>
                <label for="formGroupExampleInput2 col-lg-8">Telefone 2</label>
                <select class="form-control col-lg-8">
                    <option>Celular</option>
                    <option>Comercial</option>
                </select>
                <div class="d-flex">
                    <input type="number" class="form-control number col-lg-8"name="telefone2" id="telefone2" placeholder="EX: 11956677789">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Data de Nascimento</label>
                    <input type="date" class="form-control tamanho col-lg-8" name="nascimento"id="data">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Sexo</label>
                    <div class="d-flex">
                        <div class="form-check masculino">
                            <input class="form-check-input" type="radio" name="sexo" id="Smasc" value="opcao1"
                                checked>
                            <label class="form-check-label">
                                Masculino
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexo" id="Sfem" value="opcao2">
                            <label class="form-check-label" >
                                Feminino
                            </label>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-lg-6">
            <h1>Dados de acesso a saude cervejas artesanais</h1>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control col-lg-8" name="email"id="email" aria-describedby="emailHelp"
                        placeholder="digite seu email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"> Confirme seu Email</label>
                    <input type="email" class="form-control col-lg-8"name="email1" id="email1" aria-describedby="emailHelp"
                        placeholder="digite seu email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">senha</label>
                    <input type="password" class="form-control col-lg-8" name="senha" id="senha" placeholder="Digite sua senha">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirmar senha</label>
                    <input type="password" class="form-control col-lg-8" name="senha1" id="senha1" placeholder="Digite novamente sua senha">
                </div>
                <button type="submit" class="btn btn-primary">Continuar</button>
            </form>

        </div>
        </form>
    </div>
    </form>
    <script>
        let form = document.querySelector("form");
        let inputs = document.querySelectorAll("input");
        let button = document.querySelector("button");
        form.onsubmit = function (e) {
            e.preventDefault();
            numeroPreenchido = 0;
            for (input of inputs) {
                if (input.value == "") {
                    input.style.border = "1px solid red";
                    input.setAttribute("placeholder", "Preencha este campo");
                } else {
                    numeroPreenchido++;
                }
            }
            if (numeroPreenchido === inputs.length) {
                form.submit();
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>