<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    //

    public function capitalName() {
        return strtoupper($this->name);
    }
}
