<?php

namespace App\Controllers;

use App\Models\BiodataModel;

class Profil extends BaseController
{
    public function index()
    {
        $model = new BiodataModel();
        $data['biodata'] = $model->getBiodata();
        return view('profil', $data);
    }
}
