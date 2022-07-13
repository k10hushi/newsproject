<?php
namespace App\Controllers;
use CodeIgniter\Controller;
class login extends Controller
{
    public function login()
    {
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $db = \config\Database::connect();
            $uname = $_POST["username"];
            $pass = $_POST["password"];
            $sql = "SELECT* FROM user WHERE username=? AND password=?";
            $result =$db->query($sql,[$uname, $pass]);
            if ($result)
{
    session_start();
    $_SESSION['login'] =true;
    $_SESSION['username'] =$uname;
    header("location:index.php");
}                                              

}


    }





