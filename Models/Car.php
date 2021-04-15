<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Car
{
    public $id, $name,$model, $year;
    public function __construct($id, $name,$model, $year)
    {
        $this->id = $id;
        $this->name = $name;
        $this->model =$model;
        $this->year = $year;
    }
}
