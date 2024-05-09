<div class="titulo">Datas #01</div>

<?php
echo time() . '<br>'; //vai me passar a quantidade de segundos desde o marco zero (que nessa linguagem é 01/01/1970)
echo date('D, d \d\e M \d\e Y H:i A') . '<br>'; // o retorno nesse formato= Mon, 03 de Oct de 2022 20:27 PM daqui a hora do fuso-horario de referencia
//na doc do php tem a diferença entre letras maiusculas e minusculas e mais qo pode ser usado em casos de datas/horarios

echo strftime('%A, %d de %B de %Y', time()) . '<br>';//outra maneira de chamar data/horario
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8');//com o setlocate eu vou definir a lingua que vamos setar. Na doc do php tbm tem mais exemplos que podem ser usados
echo strftime('%A, %d de %B de %Y', time()) . '<br>';//e aqui aparece em portugues

$amanha = time() + (24 * 60 * 60);//posso fazer contas usando o dia atual, por exemplo acrescer um dia a mais
echo strftime('%A, %d de %B de %Y', $amanha) . '<br>';//aqui temos o resultado

$proximaSemana = strtotime('+1 week');//fazendo o mesmo, mas pra próxima semana. Se colocar'+10 years' ele acrescenta 10 anos 
echo strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';

$dataFixa = mktime(15, 30, 50, 1, 25, 1975);//contruir a hora passando todos os parametros.A ordem é = hora/minuto/segundo/mes/dia/ano
echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa);