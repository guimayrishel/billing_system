<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\TbcrudModel;

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
    public function store()
    {  
        helper(['form', 'url']);
           
        $model = new TbcrudModel();
          
        $data = [
            'name' => $this->request->getPost('name'),
            ];
        $save = $model->insert($data);
        if($save != false)
        {
            $data = $model->where('id', $save)->first();
            echo json_encode(array("status" => true , 'data' => $data));
        }
        else{
            echo json_encode(array("status" => false , 'data' => $data));
        }
    }
    public function fetch()
    {
        $model = new TbcrudModel();
        // $data['projects_detail'] = $model->where('project_status', 'ongoing')->orderBy('id', 'DESC')->findAll();
        $data['datas'] = $model->where('time_arrived', NULL)->orderBy('id', 'DESC')->findAll();
        return $this->response->setJSON($data);
        // echo json_encode(array("status" => true , 'data' => $data));
        // return view('view', $data);
        // return view('view');
        // return view('pgs');

    }
}
