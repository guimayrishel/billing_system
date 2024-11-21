<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\TbcrudModel;
use CodeIgniter\I18n\Time;
class ViewController extends BaseController
{
    public function index()
    {
        if (session()->get('logged_in')) {
            return view('view');
        } else {
            return redirect()->to('/login');
        }
        // return view('view');
    }
    public function fetch()
    {
        $model = new TbcrudModel();
        $currentDate = date('Y-m-d');
        $data['datas'] = $model->where('time_arrived', NULL)->where('DATE(created_at)', $currentDate)->orderBy('id', 'DESC')->findAll();
        return $this->response->setJSON($data);
    }
    
}
