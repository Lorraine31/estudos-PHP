<div class="titulo">Try/Catch</div>

<?php
// echo 7 / 0;
// echo intdiv(7, 0);

try { //usamos esse bloco qdo há possibilidade de erro
    echo intdiv(7, 0);
} catch(Error $e) {
    echo 'Teve um erro aqui<br>';
}

try {
    throw new Exception('Um erro muito estranho'); //Exception tbm pode ser usado como a palavra Error
    echo intdiv(7, 0);
} catch(DivisionByZeroError $e) {
    echo 'Divisão por zero<br>';
} catch(Throwable $e) {
    echo 'Erro encontrado: ' . $e->getMessage() . '<br>';
} finally { //sempre passam pelo finally(qdo uso ele)
    echo 'Sempre executado!<br>';
}

echo 'Execução continua... <br>';