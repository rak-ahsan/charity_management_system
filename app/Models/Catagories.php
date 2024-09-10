<?php

namespace App\Models;

use CodeIgniter\Model;

class Catagories extends Model
{
    protected $table            = 'categories';
    protected $primaryKey       = 'cat_id';
    protected $allowedFields    = [
        'cata_name'
    ];

}
