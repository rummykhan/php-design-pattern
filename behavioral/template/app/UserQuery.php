<?php

namespace App;

use App\ORM\Query;

class UserQuery extends Query
{

    public function select()
    {
        return ['name', 'age', 'address'];
    }

    public function table()
    {
        return 'users';
    }

    public function where()
    {
        return ['name' => 'rummykhan'];
    }
}