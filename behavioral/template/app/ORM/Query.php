<?php

namespace App\ORM;

abstract class Query
{
    protected $select = null;
    protected $table = null;
    protected $where = null;

    public function connect()
    {
        echo '<hr>';
        echo " > Connected to DB <br>";
        echo '<hr>';

        return $this;
    }

    public abstract function select();

    public abstract function table();

    public abstract function where();


    public function parseSelectClause($select_clause)
    {
        echo '<hr>';
        echo " > Parsing Select Clause <br>";
        print_r($select_clause);
        echo "<br>";
        echo '<hr>';

        return $this;
    }

    public function parseTableClause($table)
    {
        echo '<hr>';
        echo " > Parsing Table Clause <br>";
        print_r($table);
        echo "<br>";
        echo '<hr>';

        return $this;
    }

    public function parseWhereClause($where)
    {
        echo '<hr>';
        echo " > Parsing Where Clause <br>";
        print_r($where);
        echo "<br>";
        echo '<hr>';

        return $this;
    }

    public function close()
    {
        echo '<hr>';
        echo " > Closing the connection. <br>";
        echo '<hr>';

        return $this;
    }

    public function get()
    {
        $results = $this->connect()
        ->parseSelectClause($this->select())
        ->parseTableClause($this->table())
        ->parseWhereClause($this->where());

        $this->close();

        return $results;
    }
}