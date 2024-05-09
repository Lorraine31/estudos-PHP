<div class="titulo">If Else</div>

<?php

if(true) { //qlq coisa colocada entre parenteses será convertida para verdadeiro ou falso. Ex: if("") FALSO    if(" ") VERDADEIRO
    echo "Serei impresso?<br>";
}

if(false) {
    echo "Verdadeiro - Parte A<br>";
    echo "Verdadeiro - Parte B<br>";
} else{
    echo "Falso - Parte A<br>";
    echo "Falso - Parte B<br>";
}

if(false) {
    echo "Passo A<br>";
} else if(false) {
    echo "Passo B<br>";
}  else if(false) {
    echo "Passo C<br>";
} elseif(false) {
    echo "Passo D<br>";
} else if(true) {
    echo "Passo E<br>";
} 
else {
    echo "Úlitmo passo<br>";
}

echo "Fim<br>";