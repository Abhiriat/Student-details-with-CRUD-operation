<?php

namespace App\Models;

use CodeIgniter\Model;

class Student extends Model
{
    protected $table='fullname';
    protected $allowedFields=['name','email','phone','URN'];
}