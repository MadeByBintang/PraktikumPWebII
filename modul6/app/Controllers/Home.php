<?php

namespace App\Controllers;

use App\Models\BiodataModel;

class Home extends BaseController
{
  public function index()
  {
    $model = new BiodataModel();
    $data['biodata'] = $model->getBiodata();
    return view('home', $data);
  }
}
