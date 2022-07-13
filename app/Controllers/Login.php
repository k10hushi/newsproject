<?php

namespace App\Controllers;

// use CodeIgniter\Controller;

class Login extends BaseController
{
    public function login()
    {
        // $validation->setRule('username', 'Username', 'required|min_length[3]');
        // $validation->setRule('password', 'Password', ['required', 'min_length[8]', 'alpha_numeric_punct']);
        helper(['login', 'url']);
        if (!$this->validate([
            'username' => ['label' => 'username', 'rules' => 'required'],
            'password' => ['label' => 'Password', 'rules' => 'required|min_length[5]'],
        ])) {
            return view('admin/pages/'."pages_login", [
                'validation' => $this->validator,
            ]);
        }
        // return redirect("register");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $db = \Config\Database::connect();
            $username = $_POST["username"];
            $pass = $_POST["password"];

            $sql = "SELECT * FROM register WHERE username=? AND password=?";
            $result = $db->query($sql, [$username, $pass]);
            if ($result) {
                session_start();
                $_SESSION['login'] = true;
                $_SESSION['username'] = $username;
                return redirect('admin/pages'."index");
            }
            else{
                echo "User not registered, or invalid details.";
                return redirect()->back();
            }
        }
    }
}





