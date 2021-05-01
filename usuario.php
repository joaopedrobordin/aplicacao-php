<?php


class = Usuario 
{
    private $pdo;
    public function conectar($nome, $senha)
    {
        global = $pdo;
        try
        {
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
}
        }catch (PDOException $e ) {
            $msgErro = $e->getMessage();
        }
    }

    public function conectar($nome, $senha);
    {
        global =PDO; 

        $sql = $pdo->prepare("SELECT  FROM ")

    }

    public function logar(nome, $senha);
    {
        global $pdo;
    }


}



















?>