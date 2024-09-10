<?php namespace App\Models;

use CodeIgniter\Model;

Class CharityModel extends Model
{
    protected $table = 'charity';
    protected $primaryKey = 'charity_id';
    protected $allowedFields = [
        'CharityName',
        'CharityAddress',
        'CharityEmail',
        'CharityNumber',
        'username',
        'password',
        'Catagories',
        'cha_status',
        'message',
        'photos'

    ];

}