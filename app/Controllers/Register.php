<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\RegisterModel;
class Register extends Controller
{
public function index()
{
    return view('admin/index');
}    
public function register()
{
    die();
if (! $this->validate([
    'username' => 'required',
    'password' => 'required|min_length[10]',
    'name' => 'required',
    'email' => 'required|valid_email',
])) {
        return view('pages/admin/pages-register',[ 'validation' => $this->validator,]);
    }   
    else 
    {
        $data = [ 'name'=> $this->request->getVar('name'),
        'username'=> $this->request->getVar('username'),
        'password'=> $this->request->getVar('password'),
        'email'=> $this->request->getVar('email')];
        $model = new RegisterModel();
        $model->insert($data);
        var_dump($data);
    }

    return redirect()->to('admin/pages-login');



}


}










