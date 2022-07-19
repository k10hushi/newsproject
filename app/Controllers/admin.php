<?php

namespace App\Controllers;
//use App\Models\RegisterModel;



class Admin extends BaseController
{
public function index()

{
    //$name = new RegisterModel;
      //  $data = $name->findAll();
        
    return view('admin/pages/'."index");
}
public function login()
{
    return view('admin/pages/'."login");
}
public function register()
{
    return view('admin/pages/'."register");
}
public function users_profile()
{
    return view('admin/pages/'."users_profile");
}
public function pages_contact()
{
    return view('admin/pages/'."pages_contact");
}
public function international()
{
    return view('admin/pages/'."international");
}
public function national()
{
    return view('admin/pages/'."national");
}
public function sports()
{
    return view('admin/pages/'."sports");
}
public function politics()
{
    return view('admin/pages/'."politics");
}
public function entertainment()
{
    return view('admin/pages/'."entertainment");
}
public function forms()
{
    return view('admin/pages/'."forms");
}
}
