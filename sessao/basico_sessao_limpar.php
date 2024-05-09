<?php
session_start();
session_destroy();//responsavel por destruir uma sessao
header('Location: basico_sessao.php');//navegar pra outra pag automaticamente, que é a basico_sessao