<?php

class db {
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'physis';

    function conectar() {
        try {
            $dbc = new PDO("mysql:host=$this->host; dbname=$this->database", $this->user, $this->password);
            /*foreach($dbc->query('SELECT * FROM physis_usuario') as $row) {
                print_r($row);
                //var_dump($row);
                print "<br>";
            }*/
        } catch (PDOException $e) {
            print "Erro ao tentar conectar ao banco de dados: " . $e->getMessage() . "<br>";
            die();
        }

        return $dbc;
    }
}

?>