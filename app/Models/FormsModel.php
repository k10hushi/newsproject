<?php

namespace App\Models;

use CodeIgniter\Model;

class FormsModel extends Model
{
    protected $table      = 'forms';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

   protected $allowedFields = ['name','email','posttitle','file','city','Textarea'];


}