<?php

namespace App\Models;

use CodeIgniter\Model;

class BreakingnewsModel extends Model
{
    protected $table      = 'breakingnews';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

   // protected $allowedFields = ['highlights,'date'];


}