<?php

namespace App\Controllers;
use App\Models\RegisterModel;


class Admin extends BaseController
{
public function index()

{
    $name = new RegisterModel;
        $data = $name->findAll();
    return view('admin/'."index",['arr'=>$data]);
}
public function pages_login()
{
    return view('pages/admin/'."pages_login");
}
public function pages_register()
{
    return view('pages/admin/'."pages_register");
}
public function users_profile()
{
    return view('pages/admin/'."users_profile");
}
public function pages_contact()
{
    return view('pages/admin/'."pages_contact");
}
}
