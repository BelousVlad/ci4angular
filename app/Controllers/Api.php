<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Api extends BaseController
{
    public function index()
    {
        //
    }

    public function initController($request, $response, $logger)
    {
        parent::initController($request, $response, $logger);

        $this->players_model = model('PlayersModel');
        // $this->moder
    }

    public function players()
    {
        $array = $this->players_model->findAll();

        return $this->response->setJSON($array);
    }
}
