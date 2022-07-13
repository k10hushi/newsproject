<?php

namespace App\Controllers;
use App\Models\PostModel;
use App\Models\CommentModel;
use App\Models\CategoryModel;
use App\Models\BreakingnewsModel;

class Home extends BaseController
{
    public function index()
    {
        $name = new PostModel;
        $data = $name->findAll();
        $name1 = new CommentModel;
        $data1 = $name1->findAll();
        $name2 = new CategoryModel;
        $data2 = $name2->findAll();
        $name3 = new BreakingnewsModel;
        $data3 = $name3->findAll();
        
        return view('index',['arr'=>$data,'arr1'=>$data1,'arr2'=>$data2,'arr3'=>$data3]);
    }
    public function about()
    {
        return view('pages/web/'."about");
    }

    public function category()
    {
        return view('pages/web/'."category");
    }
    public function contact()
    {
        return view('pages/web/'."contact");
    }

    public function search_result()
    {
        return view('pages/web/'."search_result");
    }
    public function single_post()
    {
        return view('pages/web/'."single_post");
    }

}
