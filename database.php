<?php
class DB_MODELS
{
    protected $connect;
    protected $table;

    public function __construct()
    {

        $this->connect = new mysqli(
            $_ENV['DB_HOST'],
            $_ENV['DB_USERNAME'],
            $_ENV['DB_PASSWORD'],
            $_ENV['DB_DATABASE']
        );
        $this->table = $this::class;
    }
    public function find()
    {
        $result = $this->connect->query("SELECT * FROM {$this->table}");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function findOne()
    {
        $result = $this->connect->query("SELECT * FROM {$this->table} LIMIT 1;");
        return $result->fetch_assoc();
    }
}
