<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    // 1. Tell the Model which table to look at
    protected $table            = 'users';
    
    // 2. Define the primary key
    protected $primaryKey       = 'id';
    
    // 3. Set how data should be returned (arrays are easiest to work with)
    protected $returnType       = 'array';

    // 4. SECURITY: The Allowed Fields
    // This is mandatory. If you do not list a column here, CodeIgniter 
    // will silently ignore it to prevent malicious mass-assignment attacks.
    protected $allowedFields    = ['name', 'email', 'created_at'];
}