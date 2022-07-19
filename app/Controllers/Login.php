<?php

namespace App\Controllers;


use Config\App;

class Login extends BaseController
{
    public function login()
    {
        helper(['form']);
        $username = $this->request->getVar("username");
        $password = $this->request->getVar("password");
        // if ($username == 'Shinigami') {
        //     return redirect('admin');
        // }
        $data = [];
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => 'required',
                'password' => 'required|min_length[10]',
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
                return view('admin/pages/login', $data);
            } else {
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // $db = \Config\Database::connect();
                    $registerModel = new \App\Models\RegisterModel();
                    $currentPass = md5($password);
                    $users = $registerModel->where('username', $username)->first();
                    if(!isset($users)){
                        die('Enter Valid Username');
                    }else{
                        $oldPass = $users['password'];
                        if ($oldPass == $currentPass) {
                            session_start();
                            $_SESSION['login'] = true;
                            $_SESSION['username'] = $username;
                            $_SESSION['id'] = $users['id'];
                            return redirect('index');
                            // header("location: index.php");
                        } else {
                            
                            return redirect('login');
                        }
                    }
                    
                    
                }
                
            }
        }
    }
}
   