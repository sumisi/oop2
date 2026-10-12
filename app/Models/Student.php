<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['first_name', 'last_name', 'middle_name', 'birthday'];
    // protected $guarded = [];

    public function full_name()
    {
        return $this->last_name. " " . $this->first_name . " " . $this->middle_name;
    }
}
