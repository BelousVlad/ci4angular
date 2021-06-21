<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Player extends Entity
{
    // protected int $player_id;
    // protected string $player_name;
    // protected string $player_img;

    protected $datamap = [];
    protected $dates   = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $casts   = [];
}
