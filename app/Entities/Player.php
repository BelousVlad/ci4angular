<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Player extends Entity
{
    protected $datamap = [
        'id' => 'player_id',
        'name' => 'player_name',
        'img' => 'player_img',
    ];
    protected $dates   = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $casts   = [];
}
