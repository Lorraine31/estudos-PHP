<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Formulário</div>

<?php
//fazendo as config do formulario de acordo com o php e usando filtros de validação
if(count($_POST) > 0) {
    // isset($_POST['nome'])
    if(!filter_input(INPUT_POST, "nome")) {//confere se determinado parametro foi passado ou não. Caso não, ai ele chama o erro
        $erros['nome'] = 'Nome é obrigatório';
    }


    if(filter_input(INPUT_POST,"nascimento")) {
        $data = DateTime::createFromFormat(
            'd/m/Y', $_POST['nascimento']);
        if(!$data) {
            $erros['nascimento'] = 'Data deve estar no padrão dd/mm/aaaa';
        }
    }

    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email'] = 'Email inválido';
    }

    if (!filter_var($_POST['site'], FILTER_VALIDATE_URL)) {
        $erros['email'] = 'Email inválido';
        }

    $filhosConfig = [
        "options" => ["min_range" => 0, "max_range" => 20]
        ];
        if (!filter_var($_POST['filhos'], FILTER_VALIDATE_INT,
            $filhosConfig) && $_POST['filhos'] != 0) { //para que o php reconheça como válido ter 0 filhos
            $erros['filhos'] = 'Quantidade de filhos inválida (0-20).';
        }
    $salarioConfig = ['options' => ['decimal' => ',']]; //mudar a separação decimal para , e não . 
        if (!filter_var($_POST['salario'],
            FILTER_VALIDATE_FLOAT, $salarioConfig)) {
            $erros['salario'] = 'Salário inválido';
        }
}
?>



<!-- construção do formulario usando bootstrap -->
<h2>Cadastro</h2>
<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid' : ''?>" id="nome" name="nome" placeholder="Nome"
            value="<?= $_POST['nome'] ?>">
            <div class="invalid-feedback">
                <?= $erros['nome'] ?>
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : ''?>" id="nascimento" name="nascimento" placeholder="Nascimento"
            value="<?= $_POST['nascimento'] ?>">
            <div class="invalid-feedback">
                <?= $erros['nascimento'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control <?= $erros['email'] ? 'is-invalid' : ''?>" id="email" name="email" placeholder="E-mail"
            value="<?= $_POST['email'] ?>">
            <div class="invalid-feedback">
                <?= $erros['email'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid' : ''?>" id="site" name="site" placeholder="Site"
            value="<?= $_POST['site'] ?>">
            <div class="invalid-feedback">
                <?= $erros['site'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtde de filhos</label>
            <input type="number" class="form-control <?= $erros['email'] ? 'is-invalid' : ''?>" id="filhos" name="filhos" placeholder="Qtde de filhos"
            value="<?= $_POST['filhos'] ?>">
            <div class="invalid-feedback">
                <?= $erros['filhos'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control <?= $erros['email'] ? 'is-invalid' : ''?>" id="salario" name="salario" placeholder="Salário"
            value="<?= $_POST['salario'] ?>">
            <div class="invalid-feedback">
                <?= $erros['salario'] ?>
            </div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Enviar</button>
</form>