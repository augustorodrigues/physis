<?php
/**
 * Arquivo para testar conexao com o mysql utilizando a classe db em db/conexao.php
 */

require_once('conexao.php');

$dbc = new db();

$con = $dbc->conectar();

var_dump($con);

?>