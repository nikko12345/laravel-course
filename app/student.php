<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public function getFullNameAttribute(){

        return "$this->first_name $this->middle_name $this->last_name";
    }
}
