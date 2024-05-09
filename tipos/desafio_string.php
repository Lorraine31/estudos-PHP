<div class="titulo">Desafio String</div>

<?php

// Vendo os métodos da documentação, qual o métodos que a posição 
// do texto 'abc' na string '!AbcaBcabC' retorne 1?

echo strpos('!AbcaBcabc', 'abc') . '<br>';
echo stripos('!AbcaBcabc', 'abc') . '<br>';

echo strpos(strtolower('!AbcaBcabc'), 'abc') . '<br>';