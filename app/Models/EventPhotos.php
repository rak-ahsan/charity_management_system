<?php

namespace App\Models;

use CodeIgniter\Model;

class EventPhotos extends Model
{
    protected $table            = 'eventphotos';
    protected $primaryKey       = 'ep_id';
    protected $allowedFields    = [
        'eventpname',
        'event_id'
    ];

}
