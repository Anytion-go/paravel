<?php
// Class's name is Table's name of Database
class Example extends DB_MODELS
{
    public function examp()
    {
        // use $this->table to get Table's name or Class's name.
        $query = "SELECT * FROM {$this->table} LIMIT 1";
        // use $this->connect->query to execute SQL
        $result = $this->connect->query($query);
        return $result->fetch_assoc();
    }
}
