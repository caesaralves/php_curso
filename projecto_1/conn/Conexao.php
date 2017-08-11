<?php
class Conexao
{
    private static $conn = null;
    const PASSWORD ="";
    const USER ="";
    const HOST ="";
    const DB = "";

    final private function __construct()
    {
    }

    /**
     * @return PDO
     */
    final private static function getInstance(){
        if(is_null(self::$conn)){
            try {
                self::$conn = new PDO("mysql:host=".self::HOST.";dbname=".self::DB,
                    self::USER,
                    self::PASSWORD);
            }
            catch (PDOException $exception){
                die("Erro código: ".$exception->getCode().": ".$exception->getMessage());
            }
        }
        return self::$conn;
    }

    /**
     *
     */
    public static function getDummyData() {
        $sql = "Select * from myTable";
        $statement = self::getInstance()->prepare($sql);
        $statement ->execute();
        //devolve como array associativo
        $res = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public static function getId($id){
        $sql = "Select * from myTable WHERE id = :id_user";
        $statement = self::getInstance()->prepare($sql);
        //este camarada assegura que nao é passado merdas para sql injection
        $statement->bindValue("id_user",$id);
        $statement ->execute();
        //devolve um array apenas com um elemento
        $res = $statement->fetch(PDO::FETCH_ASSOC);
        return $res;
    }

    /**
     * @param $route
     * @param $fieldName
     * @return string
     */
    public static function getRouteContent($route, $fieldName){
        $sql = "Select conteudo from paginas WHERE rota = :rota AND nome_campo = :nome_campo";
        $statement = self::getInstance()->prepare($sql);
        $statement->bindValue("rota",$route);
        $statement->bindValue("nome_campo",$fieldName);
        $statement ->execute();
        $res = $statement->fetch(PDO::FETCH_ASSOC);
        return $res["conteudo"];
    }

    public static function getAnyRoute($text){
        $sql = "Select * from paginas WHERE conteudo LIKE :text";
        $statement = self::getInstance()->prepare($sql);
        $statement->bindValue('text',"%{$text}%");
        $statement ->execute();
        $res = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public static function runQuery($query) {
        $statement = self::getInstance()->prepare($query);
        if($statement ->execute())
            echo "Sucesso";
        else
            echo "Erro";
    }
}