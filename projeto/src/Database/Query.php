<?php
namespace Database;

class Query {
    private $connection;
    protected $table = 'products';

    public function __construct(\PDO $pdo){
        $this->connection = $pdo;
    }

    public function findALL($fields = '*'){
        $sql = 'SELECT ' . $fields . ' FROM ' . $this->$table;
        $select = $this->connection->query($sql);
        return $select->fetchALL(\PDO::FETCH_OBJ);
    }

    public function find($id){

    }

    public function insert(array $data=[]){
        $data = array_keys($data);
        $fields = implode(', ', $data);
        $binds = ':' . implode(', :', $data);
        $sql = 'INSERT INTO' . $this->table;
        $stmt = $this->connection->prepare($sql);
        foreach($data as $key => $value){
            $paramType = is_int($key) ? \PDO::PARAM_INT : \PDO::PARAM_STR;
            $stmt->bindValue(':' . $key, $value, $paramType);
        }

        print $stmt->execute();
    }
}