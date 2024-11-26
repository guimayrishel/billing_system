<?php

namespace App\Controllers;
use App\Models\TbcrudModel;
use CodeIgniter\I18n\Time;
class Home extends BaseController
{
    public function index()
    {    
        $model = new TbcrudModel();
   
        $data['datas'] = $model->orderBy('id', 'DESC')->findAll();
        if (session()->get('logged_in')) {
            // return view('home', $data);
            $data['datas'] = $model
                ->select('tbcrud.*, tbuser.firstname, tbuser.lastname')
                ->join('tbuser', 'tbuser.id = tbcrud.user_id')
                ->orderBy('tbcrud.id', 'DESC')
                ->findAll();

            return view('home', $data);
        } else {
            return redirect()->to('/login');
        }
        // return view('home', $data);
    }    
  
   
    public function store()
    {  
        helper(['form', 'url']);
           
        $model = new TbcrudModel();
          
        $data = [
            'name' => $this->request->getPost('name'),
            'user_id' => $this->request->getPost('id'),
            ];
        $save = $model->insert($data);
        if($save != false)
        {
            // $data = $model->where('id', $save)->first();
            $data = $model->select('tbcrud.*, tbuser.firstname, tbuser.lastname')->join('tbuser', 'tbuser.id = tbcrud.user_id')->where('tbcrud.id', $save)->first();
            echo json_encode(array("status" => true , 'data' => $data));
        }
        else{
            echo json_encode(array("status" => false , 'data' => $data));
        }
    }
    public function update()
    {  
        helper(['form', 'url']);
        $model = new TbcrudModel();
        $id = $this->request->getVar('id');
        $myTime = new Time('now');
        $data = [
            'time_arrived' => $myTime,
        ];
        $update = $model->update($id,$data);
        if($update != false)
        {
            // $data = $model->where('id', $id)->first();
            $data = $model->select('tbcrud.*, tbuser.firstname, tbuser.lastname')->join('tbuser', 'tbuser.id = tbcrud.user_id')->where('tbcrud.id', $id)->first();
            echo json_encode(array("status" => true , 'data' => $data));
        }
        else{
            return json_encode(["status" => false, "message" => "Failed to update"]);
        }
    }
}
