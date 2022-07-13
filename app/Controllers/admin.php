<?php

namespace App\Controllers;
use App\Models\RegisterModel;


class Admin extends BaseController
{
public function index()

{
    $name = new RegisterModel;
        $data = $name->findAll();
    return view('admin/pages/'."index");
}
public function pages_login()
{
    return view('admin/pages/'."pages_login");
}
public function pages_register()
{
    return view('admin/pages/'."pages_register");
}
public function users_profile()
{
    return view('admin/pages/'."users_profile");
}
public function pages_contact()
{
    return view('admin/pages/'."pages_contact");
}
}
