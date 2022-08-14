<?php

namespace App\Controllers;
use App\Models\userModel;
use CodeIgniter\Controller;


class crud extends Controller
{
    protected $db;
    public function create()
    {
        return view('add');
    }
    public function store()
    {
        $usermodel=new usermodel();
        $data=[
            'Name'=>$this->request->getVar('n'),
            'age'=>$this->request->getVar('a'),
        ];
        $usermodel->insert($data);
        return $this->response->redirect(site_url('view'));
    }
    public function view(){
        $userModel = new usermodel();

        $data['u'] = $userModel->findAll();
   
        return view('view',$data);
    }
    public function update()
    {
        return view('update');
    }
}
